@component('mail::layout')
{{-- Header --}}
 <h1>Nuevo mensaje de contacto</h1>

@slot('header')
@component('mail::header', ['url' => config('app.url')])

@endcomponent
@endslot

{{-- Body --}}
@if($request['email'])
    Correo: {{ $request['email'] }}
@endif

@if($request['phone'])
    Telefono: {{ $request['phone'] }}
@endif
@if($request['message'])
    Mensaje: 
    {{ $request['message'] }}

@endif
{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent
