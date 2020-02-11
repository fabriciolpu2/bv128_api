@component('mail::message') Novo contato do site amplomed.com.br!

<p>Nome: {{ $contato['nome'] }}</p>
<p>Email: {{ $contato['email'] }}</p>
<p>Celular: {{ $contato['telefone'] }}</p>
<hr>
<p>{{ $contato['mensagem'] }}</p>

@endcomponent