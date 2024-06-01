<p>Dear {{ $seller->name }}</p><br>
<p>
    Your password on {{ get_settings()->site_name }} has been changed successfully. Here are your new login credentials:
    <br>
    <b>Login ID: </b>{{ isset($seller->username) ? $seller->username.' or ' : '' }} {{ $seller->email }}
    <br>
    <b>Password: </b>{{ $new_password }}
</p>
<br>
Please, Keep your creadentials confidential. Your Login ID and Password are your own creadentials and you should never share them with anybody else.

<p>
    {{ get_settings()->site_name }} will not be liable for any misuse of your login id or password.
</p>
<br>
---------------------------------------
<p>
    This email was automatically sent by {{ get_settings()->site_name }}. Do not reply to it.
</p>
