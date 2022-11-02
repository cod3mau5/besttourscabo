@component('mail::message')

# Alguien acaba de llenar el primer formulario:

{{ $reservation->tour_name }}

@component('mail::table')
|                       |                                                                                                     |
| --------------------- |:---------------------------------------------------------------------------------------------------:|
| <b>Tour day:</b>      | {{$reservation->tour_day}}                                                                          |
| <b>Tour time:</b>     | {{$reservation->tour_time}}                                                                         |
| <b>Phone Number:</b>  | {{$reservation->phone}}                                                                             |
| <b>E-mail:</b>        | {{$reservation->email}}                                                                             |
| <b>Passengers: </b>   | {{ !empty($reservation->kids) ? $reservation->adults + $reservation->kids : $reservation->adults }} |
| <b>E-TICKET: </b>     | <b>{{$reservation->voucher}}</b>                                                                    |
| <b>Subtotal: </b>     | <b style="color:#008641">${{number_format($reservation->subtotal,2)}} USD</b>                     |
@endcomponent

@component('mail::button', ['url' => route('editTour', [$reservation->voucher,$reservation->token])])
Finish my reservation
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent
