@component('mail::message')

hi,{{ $checkout->User->name }}

Thank you for Registered on <b>{{$checkout->Camp->title}}</b>, Please see payment instruction by Click the button bellow.

@component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id)])
    Get Invoice
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent