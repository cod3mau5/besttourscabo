<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Reservation;

class PayPalCardController extends Controller
{
    private $client;
    private $clientId;
    private $secret;

    public function __construct(){
        $this->client = new Client([
            'base_uri' => env('PAYPAL_MODE') == 'sandbox' ? 'https://api-m.sandbox.paypal.com' : 'https://api-m.paypal.com',
        ]);

        $this->clientId = env('PAYPAL_CLIENT_ID');
        $this->secret = env('PAYPAL_SECRET');
    }

    private function getAccessToken(){
        $response= $this->client->request(
            'POST',
            '/v1/oauth2/token/',
            [
                'headers'=>[
                    'User-Agent'    => 'testing/1.0',
                    'Accept'        => 'application/json',
                    'X-Foot'        => ['Bar','Baz']
                ],
                'body'  => 'grant_type=client_credentials',
                'auth'  => [
                    $this->clientId,
                    $this->secret,
                    'basic'
                ]
            ]
        );
        $data= json_decode($response->getBody(), true);
        return $data['access_token'];
    }

    private function registerReservation($data,$voucher){

        //personal info
        $fullname=$data['payer']['name']['given_name'].' '.$data['payer']['name']['surname'];
        $email=$data['payer']['email_address'];
        // $nationality=$data['payer']['address']['country_code'];
        //SET INFO
        $data['fullname']=$fullname;
        $data['email']=$email;
        // $data['nationality']=$nationality;
        $data['voucher'] = $voucher;


        //PAYPAL INFO
        //order_id
        $data['id'] ? $order_id=$data['id'] : $order_id= null;
        //payer_id
        $data['payer']['payer_id'] ? $payer_id=$data['payer']['payer_id'] : $payer_id= null;
        //account_id
        $data['payment_source']['paypal']['account_id'] ? $account_id=$data['payment_source']['paypal']['account_id'] : $account_id= null;
        //total
        $total=$data['purchase_units'][0]['payments']['captures'][0]['amount']['value'];
        //paypal_fee
        $data['purchase_units'][0]['payments']['captures'][0]['seller_receivable_breakdown']['paypal_fee']['value'] ? $paypal_fee= $data['purchase_units'][0]['payments']['captures'][0]['seller_receivable_breakdown']['paypal_fee']['value'] : $paypal_fee=null;
        //revenue
        $data['purchase_units'][0]['payments']['captures'][0]['seller_receivable_breakdown']['net_amount']['value'] ? $revenue=$data['purchase_units'][0]['payments']['captures'][0]['seller_receivable_breakdown']['net_amount']['value'] : $revenue=null;
        //currency
        $currency=$data['purchase_units'][0]['payments']['captures'][0]['amount']['currency_code'];
        //SET INFO
        $data['order_id']=$order_id;
        $data['payer_id']=$payer_id;
        $data['account_id']=$account_id;
        $data['total']=$total;
        $data['paypal_fee']=$paypal_fee;
        $data['revenue']=$revenue;
        $data['currency']=$currency;

        try{

            // $reservation=Reservation::create([
            //     'status'        => $data['status'],
            //     // 'fullname'      => $data['fullname'],
            //     // 'email'         => $data['email'],
            //     // 'phone'      => $data['phone'],
            //     'voucher'       => $data['voucher'],
            //     'order_id'      => $data['order_id'],
            //     'payer_id'      => $data['payer_id'],
            //     'account_id'    => $data['account_id'],
            //     'subtotal'      => $data['total'],
            //     'total'         => $data['total'],
            //     'paypal_fee'    => $data['paypal_fee'],
            //     'revenue'       => $data['revenue'],
            //     'currency'      => $data['currency'],
            // ]);

            $reservation=Reservation::where('voucher', $voucher)->firstOrFail();

            $reservation->update([
                'fullname'      => $data['fullname'],
                'status'        => $data['status'],
                'voucher'       => $data['voucher'],
                'order_id'      => $data['order_id'],
                'payer_id'      => $data['payer_id'],
                'account_id'    => $data['account_id'],
                'subtotal'      => $data['total'],
                'total'         => $data['total'],
                'paypal_fee'    => $data['paypal_fee'],
                'revenue'       => $data['revenue'],
                'currency'      => $data['currency'],
            ]);

            return [ 'success' => true, 'reservation' => $reservation, 'data' => $data ];

        }catch(\Illuminate\Database\QueryException $exception){
            return [ 'success' => false, 'exeption' => $exception->errorInfo, 'data' => $data ];
        }

    }

    public function process($orderId, $voucher){

        $access_token= $this->getAccessToken();
        $requestUrl = "/v2/checkout/orders/$orderId/capture";
        $response=$this->client->request('POST',$requestUrl,[
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => "Bearer $access_token"
            ]
        ]);

        $data = json_decode($response->getBody(), true);

        return $this->registerReservation($data, $voucher);
        // return [ 'success' => false ];

    }

}
