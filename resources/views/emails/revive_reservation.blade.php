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
| <b>Subtotal: </b>     | <b style="color:#008641">${{number_format($reservation->subtotal,2)}} USD</b>                     |
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
<p>
    If you have any questions about the exact location of your tour or any other questions, do not hesitate to contact us by whatsapp:<br/>
    <a href="tel:+5216241323343">+52 1 624 132 3343</a>
    <br/>
    or via email: <br/>
    <a href="mailto:admin@besttourscabo.com">admin@besttourscabo.com</a>
</p>
@endcomponent
@component('mail::button', ['url' => route('editTour', [$reservation->voucher,$reservation->token])])
Finish my reservation
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent
