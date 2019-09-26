<p>Hi Rom, tu as un nouvel investisseur <br>
Voici ses informations</p>
<p>Nom : {{ $data['name'] }}</p>
<p>Prénom : {{ $data['surname'] }}</p>
<p>Sexe : {{ $data['sexe'] }}</p>
<p>Email : {{ $data['email'] }}</p>
<p>Type d'investissement : {{ $data['montant_invest'] }}</p>
<p>Montant à investir : {{ $data['prix_invest'] }}</p>
<p>Voici son projet : <br>
{{ $data['projet'] }}
</p>