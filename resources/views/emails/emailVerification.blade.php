<x-mail::message>
# Introduction
Hello {{$name}} <br>
Please Verify your email address for your account.

<x-mail::button :url="'http://127.0.0.1:8000/auth/verify-email/'.$url">
Button Text
</x-mail::button>

Thanks,<br>
E-Commerce
</x-mail::message>
