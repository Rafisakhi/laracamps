@component('mail::message')

# Your Transction Has Been Confirmed

Hi , {{$checkout->User->name}}

Your transaction has been confirmed, now you can enjoy the benefits of {{$checkout->Camp->titile}}. Camp

@component('mail::button', ['url' => route('user.dashboard')])
    My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}    
@endcomponent


