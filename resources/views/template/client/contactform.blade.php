@component('mail::message')
# {{'Pitanje'}}

## {{$message}}

Javite mi se putem {{$email}}

S poštovanjem,<br>
{{$fullname}}

{{ config('app.name') }}
@endcomponent
