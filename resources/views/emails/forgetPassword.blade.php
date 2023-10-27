<x-mail::message>
# Introduction

Hello {{$name}}. <br>
This is your OTP: <strong>{{$otp}}</strong>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
