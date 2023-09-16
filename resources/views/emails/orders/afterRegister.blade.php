<x-mail::message>
# Welcome!

Hi {{$user->name}}
<br/>
Welcome to Laracamp, we are happy you have joined us and hope that this platform will help you in your journey. Choose your best match camp to start your journey!

<x-mail::button :url="route('login')">
Login Here
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
