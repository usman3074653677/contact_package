@component('mail::message')
# Introduction
Dear {{$name}}
This is body

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
