@component('mail::message')
# Lottery System

Dear User,

You are receiving this email because a password reset request was initiated for your account.

@component('mail::button', ['url' => $url, 'color' => 'success'])
Reset Password
@endcomponent

If you did not request a password reset, please ignore this email.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
