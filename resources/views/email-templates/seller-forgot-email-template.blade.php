Dear <b>{{ $seller->name }}</b><br>
<p>
    You are receiving this email because you requested to reset your password on {{ get_settings()->site_name }}
</p>
<p>
    Please, use the link below to reset it.
    <a href="{{ $actionLink }}" target="_blank">{{ $actionLink }}</a><br>
</p>
<p>
    This password reset link is only valid for the next 15 minutes.
</p>
<p>
    If you are having trouble with the link above, copy and paste it into your web browser.
</p>
<p>
    NB: IF YOU DID NOT REQUEST A PASSWORD REST, PLEASE IGNORE THIS EMAIL
</p><br>
----------------------------------------------
<p>
    This e-mail was automaticaly sent by {{ get_settings()->site_name }}. Don't reply to it.
</p>