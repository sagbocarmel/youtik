<p>Hi Rom, tu as un nouveau client <br>
Voici ses informations</p>
<p>Nom : {{ $data['name'] }}</p>
<p>Email : {{ $data['email'] }}</p>
<p>Sujet : {{ $data['subject'] }}</p>
<p>Voici son message : <br>
{{ $data['message'] }}
</p>