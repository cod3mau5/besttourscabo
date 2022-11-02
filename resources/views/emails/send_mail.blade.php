@component('mail::layout')
{{-- Header --}}
 <h1>Nuevo mensaje</h1>

@slot('header')
@component('mail::header', ['url' => config('app.url')])

@endcomponent
@endslot

{{-- Body --}}
<p>Correo: {{ $request->email }}</p>

@if($request->phone)
    Telefono: {{ $request->phone }}
@endif
@if($request->name)
    De: {{ $request->name }}
@endif
<p>
    Mensaje: <br>
    {{ $request->msj }}
</p>

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
