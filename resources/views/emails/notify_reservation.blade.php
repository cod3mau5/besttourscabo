@component('mail::message')

# Alguien acaba de llenar el paso uno del formulario:

{{ $reservation->tour_name }}

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
@if ($reservation->tour_name == 'CABO ESCAPE')
| <b>Check in: </b>     |  4:45 PM                                                                                            |
@endif
| <b>Phone Number:</b>  | {{$reservation->phone}}                                                                             |
| <b>E-mail:</b>        | {{$reservation->email}}                                                                             |
| <b>Passengers: </b>   | {{ !empty($reservation->kids) ? $reservation->adults + $reservation->kids : $reservation->adults }} |
@if ($minor > 0)
| <b>Minors: </b>       | {{ $minor }}                                                                                        |
@endif
| <b>E-TICKET: </b>     | <b>{{$reservation->voucher}}</b>                                                                    |
| <b>Subtotal: </b>     | <b style="color:#008641">${{number_format($reservation->subtotal,2)}} USD</b>                     |
@endcomponent



Thanks,
{{ config('app.name') }}
@endcomponent
