@component('mail::message')
# Welcome To Broad Masses Base
<img src="{{asset('img/logo.png')}}" style="width:30%" alt="App Logo">
<p>Congratulations, {{$member['name']}} your Membership has been successfully Approved by the management. Please use the following to login to your account.</p>
<p>Email: {{$member['email']}}</p>
<p>Password: <b>{{$member['password']}}</b></p>
Thanks,<br>
<hr>

{{ config('app.name') }}
@endcomponent
