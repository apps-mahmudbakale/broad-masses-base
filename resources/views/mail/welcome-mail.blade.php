@component('mail::message')
<img src="{{asset('img/logo.png')}}" style="width:30%" alt="App Logo">
# Welcome To Broad Masses Base

 <p>Congratulations, your account has been successfully created. Please verify this registration with the email sent to you and await approval of your membership.</p>

Thanks,<br>
<hr>
<p dir="rtl">تهانينا ، لقد تم إنشاء حسابك بنجاح. يرجى التحقق من هذا التسجيل بالبريد الإلكتروني المرسل إليك وانتظار الموافقة على عضويتك. شكرا لك</p>
{{ config('app.name') }}
@endcomponent
