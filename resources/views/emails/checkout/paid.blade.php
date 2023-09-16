<x-mail::message>
# Your Transaction Has Been Confirmed

Hi {{$checkout->User->name}}
<br/>
Your transaction has been confirmed, now you can enjoy the benefits of <b>{{$checkout->Camp->title}}</b> camp.

<x-mail::button :url="route('user.dashboard')">
Go to Dashboard
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
