@component('mail::message')

HI, {{ $checkout->User->name }}

Thank you for Registered on <b>{{$checkout->Camp->title}}</b>, Please see payment instruction by Click the button bellow.

@component('mail::button', ['url' => route('dashboard', $checkout->id)])
    My Dashboard
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent