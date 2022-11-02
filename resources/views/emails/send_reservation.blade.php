@component('mail::message')

# {{ $reservation->tour_name }}

@component('mail::table')
|                       |                                                                                                     |
| --------------------- |:---------------------------------------------------------------------------------------------------:|
| <b>Tour day:</b>      | {{$reservation->tour_day}}                                                                          |
| <b>Tour time:</b>     | {{$reservation->tour_time}}                                                                         |
| <b>Phone Number:</b>  | {{$reservation->phone}}                                                                             |
| <b>Passengers: </b>   | {{ !empty($reservation->kids) ? $reservation->adults + $reservation->kids : $reservation->adults }} |
| <b>E-TICKET: </b>     | <b>{{$reservation->voucher}}</b>                                                                    |
| <b>Subtotal: </b>     | <b style="color:#008641">${{number_format($reservation->subtotal,2)}} USD</b>                     |
@endcomponent

@component('mail::panel')
<p style="color: #005899; font-size: 11.5px;">
Welcome to Los Cabos!
We are confident that you and your family will have a wonderful vacation experience.
</p>
<p style="color: #005899; font-size: 11.5px;">
This voucher is your boarding pass for the Private that will transport you and your family to our resort.<br/>
Our representative will be waiting for you outside the airport.<br/>
He will be holding a sign that says his name. And is the only person who knows your E-Ticket number <b>{{$reservation->voucher}}</b> Anyone else who does not have or know your E-Ticket number, they are not Staff from our Company.
</p>
@endcomponent
@component('mail::button', ['url' => route('editTour', [$reservation->voucher,$reservation->token])])
Finish my reservation
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent
