@component('mail::message')

# {{ $reservation->tour_name }}


@php
    $minor=0;
    if($reservation->kids > 0 && $reservation->kids_ages !== ''){
        $minors= explode(",",$reservation->kids_ages);
        foreach($minors as $min) {
            if($min < $reservation->tour_min_age){
                $minor++;
            }
        }
    }
@endphp
@component('mail::table')
|                       |                                                                                                     |
| --------------------- |:---------------------------------------------------------------------------------------------------:|
| <b>Tour day:</b>      | {{$reservation->tour_day}}                                                                          |
| <b>Tour time:</b>     | {{$reservation->tour_time}}                                                                         |
| <b>Phone Number:</b>  | {{$reservation->phone}}                                                                             |
| <b>Passengers: </b>   | {{ !empty($reservation->kids) ? $reservation->adults + $reservation->kids : $reservation->adults }} |
@if ($minor > 0)
| <b>Minors: </b>       | {{ $minor }}                                                                                        |
@endif
| <b>E-TICKET: </b>     | <b>{{$reservation->voucher}}</b>                                                                    |
| <b>total: </b>        | <b style="color:#008641">${{number_format($reservation->total,2)}} USD</b>                        |
| <b>Status: </b>       | <b @if($reservation->status == 'COMPLETED')style="color:#0090c5"@endif>{{$reservation->status}}</b> |
@endcomponent

@component('mail::panel')
<p style="color: #005899; font-size: 11.5px;">
Welcome to Los Cabos!
We are confident that you and your family will have a wonderful vacation experience.
</p>
<p style="color: #005899; font-size: 11.5px;">
To carry out this activity, you can present the E-TICKET number from your cell phone: <b>{{$reservation->voucher}}</b> <br/>
We will be holding a sign that says your name. And is the only person who knows your E-Ticket number. <br/>
Anyone else who does not have or know your E-Ticket number, they are not Staff from our Company.
</p>
<p style="color: #005899; font-size: 11.5px;">
    If you have any questions about the exact location of your tour or any other questions, do not hesitate to contact us by whatsapp:<br/>
    <a href="https://api.whatsapp.com/send?phone=5216241323343&text=Hey%20ricardo,%20I%20just%20purchase%20one%20tour%20and%20I%20have%20many%20doubts!">+52 1 624 132 3343</a>
    <br/>
    or via email: <br/>
    <a href="mailto:admin@besttourscabo.com">admin@besttourscabo.com</a>
</p>
@endcomponent

Thanks,
{{ config('app.name') }}
<br/>
<small style="margin-top:14px;font-size: 10px;width:100%">
    <br/>
    Blvd. Paseo de la Marina, Marina Cabo San Lucas, B.C.S. <br/>
    Marina Cabo San Lucas <br/>
    23450 Cabo San Lucas, B.C.S.
</small>
@endcomponent
