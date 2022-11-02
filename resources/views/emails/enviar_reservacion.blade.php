@component('mail::message')  
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
        {{ config('app.name') }}
        @endcomponent
    @endslot
    @if($reservation->message_t == 'ARRIVAL')
    @component('mail::table')
        | SERVICIO PRIVADO (LLEGADA)|{{'E-TICKET: '.$reservation->voucher  }}   |
        | --------------------- |:----------------------------------------------------------------------:|
        | <b>Nombre:</b>          | {{$reservation->fullname}}                                           |
        | <b>Correo Electronico:</b>         | {{$reservation->email}}                                   |
        | <b>Hotel:</b>         | {{$reservation->resort->name}}                                         |
        | <b>Vuelo de llegada:</b>| {{$reservation->arrivalFlight}}                                      |
        | <b>Fecha de llegada:</b>  | {{$reservation->arrivalDate}}                                      |
        | <b>Número de teléfono:</b>  | {{$reservation->phone}}                                          |
        | <b>Total de pasajeros: </b>   | {{$reservation->total_travelers}}                              |
        | <b>Asiento elevador: </b> | @if($reservation->booster_seat) SI @else NO @endif                 |
        | <b>Asiento de coche: </b>     | @if($reservation->car_seat) SI @else NO @endif                 |
        | <b>Parada de comestibles: </b>| @if($reservation->shopping_stop) SI @else NO @endif            |
        | <b>Total: </b>        | <b>${{$reservation->total}} USD</b>                                    |
        | <b>Metodo de pago:</b>    | <span style="color: #ec7728; font-weight: bold;">Efectivo a la llegada</span>|{{-- $reservation->payment_type --}}
    @endcomponent
    @elseif($reservation->message_t == 'DEPARTURE')
    @component('mail::table')
        | SERVICIO PRIVADO (SALIDA)|{{'E-TICKET: '.$reservation->voucher  }}   |
        | --------------------- |:----------------------------------------------------------------------:|
        | <b>Nombre:</b>          | {{$reservation->fullname}}                                           |
        | <b>Correo Electronico:</b>         | {{$reservation->email}}                                   |
        | <b>Reunión en:</b>    | {{$reservation->resort->name}}                                         |
        | <b>Vuelo de salida:</b>| {{$reservation->arrivalFlight}}                                       |
        | <b>Fecha de salida:</b>  | {{$reservation->arrivalDate}}                                       |
        | <b>Número de teléfono:</b>  | {{$reservation->phone}}                                          |
        | <b>Total de pasajeros: </b>   | {{$reservation->total_travelers}}                              |
        | <b>Asiento elevador: </b> | @if($reservation->booster_seat) SI @else NO @endif                 |
        | <b>Asiento de coche: </b>     | @if($reservation->car_seat) SI @else NO @endif                 |
        | <b>Parada de comestibles: </b>| @if($reservation->shopping_stop) SI @else NO @endif            |
        | <b>Total: </b>        | <b>${{$reservation->total}} USD</b>                                    |
        | <b>Metodo de pago:</b>    | <span style="color: #ec7728; font-weight: bold;">Efectivo a la llegada</span>|{{-- $reservation->payment_type --}}
    @endcomponent
    @elseif($reservation->message_t == 'ROUND TRIP')
    @component('mail::table')
        | SERVICIO PRIVADO (REDONDO)|{{'E-TICKET: '.$reservation->voucher  }}   |
        | --------------------- |:----------------------------------------------------------------------:|
        | <b>Nombre:</b>          | {{$reservation->fullname}}                                           |
        | <b>Correo Electronico:</b>         | {{$reservation->email}}                                   |
        | <b>Hotel:</b>         | {{$reservation->resort->name}}                                         |
        | <b>Vuelo de llegada:</b>| {{$reservation->arrivalFlight}}                                      |
        | <b>Fecha de llegada:</b>  | {{$reservation->arrivalDate}}                                      |
        | <b>Número de teléfono:</b>  | {{$reservation->phone}}                                          |
        | <b>Total de pasajeros: </b>   | {{$reservation->total_travelers}}                              |
        | <b>Asiento elevador: </b> | @if($reservation->booster_seat) SI @else NO @endif                 |
        | <b>Asiento de coche: </b>     | @if($reservation->car_seat) SI @else NO @endif                 |
        | <b>Parada de comestibles: </b>| @if($reservation->shopping_stop) SI @else NO @endif            |
        | <b>Total: </b>        | <b>${{$reservation->total}} USD</b>                                    |
        | <b>Metodo de pago:</b>    | <span style="color: #ec7728; font-weight: bold;">Efectivo a la llegada</span>|{{-- $reservation->payment_type --}}
    @endcomponent
    @component('mail::table')
        | DEPARTURE NOTICE      |                                                                        |
        | --------------------- |:----------------------------------------------------------------------:|
        | <b>Hotel:</b>         | {{$reservation->resort->name}}                                         |
        | <b>Total de pasajeros: </b>   | {{$reservation->total_travelers}}                              |
        | <b>Vuelo de salida:</b>| {{$reservation->departureFlight}}                                     |
        | <b>Fecha del vuelo:</b>  | {{$reservation->departureDate}}                                     |
    @endcomponent
    <p style="text-align: center; color: #005899; font-size: 11.5px;"><b>Nota:</b> Esté preparado en el vestíbulo principal 5 minutos antes de la hora de recogida.
    </p>
    @endif
    @if($reservation->comments != '')
    <div style="padding:1rem 1rem;margin-bottom:1rem;border:1px solid transparent;border-radius: 0.25rem;color: #664d03;background-color: #fff3cd;border-color: #ffecb5;"><h1 style="color:#494949;font-size: 15px;line-height: 18px;margin-bottom:5px;">Solicitud especial:</h1><h5 style="color:#74787e;font-size: 11.5px;line-height: 18px;padding:5px 15px;margin-top:5px;margin-bottom:0px">{{$reservation->comments}}</h5></div>
    @endif
    <p style="text-align: center; color: #005899; font-size: 11.5px;">
    <b>¡Bienvenidos a Los Cabos!</b> Estamos seguros de que usted y su familia tendrán una maravillosa experiencia vacacional. Este bono es su tarjeta de embarque para el Privado que lo transportará a usted y a su familia a nuestro resort. Nuestro representante lo estará esperando afuera del aeropuerto.<br> Llevará un cartel que dice su nombre. Y es la única persona que conoce su número de E-Ticket <b>{{$reservation->voucher}}</b> Cualquier otra persona que no tenga o no conozca su número de E-Ticket, no es Personal de nuestra Compañía. 
    </p>
    <p style="text-align: center; color: #005899; font-size: 11.5px;">
    Tenga en cuenta que el personal dentro de las terminales del aeropuerto no son empleados de "Cabo Drivers", incluso si lo dicen. Te animamos a que los ignores y camines hasta la salida del aeropuerto. Donde el personal de The Cabo Drivers estará listo para transportarlo a usted y a su familia al resort. No esperará más de 90 minutos después de que llegue el avión. Si tiene algún problema a su llegada, infórmelo a nuestro personal de Conductores de Cabo. En caso de alguna reprogramación en la llegada de su vuelo, por favor notifíquenos de inmediato al teléfono 6241104185 y si ya se encuentra en Los Cabos debe marcar el 6241611548 para poder realizar los cambios necesarios en su recogida.
    </p>
@endcomponent
