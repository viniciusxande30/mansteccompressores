<h2>Novo Contato Recebido</h2>
<p><strong>Origem do formul&aacute;rio:</strong> {{ $data['id'] ?? 'site' }}</p>
<p><strong>Nome:</strong> {{ $data['name'] ?? '-' }}</p>
<p><strong>Empresa:</strong> {{ $data['company'] ?? '-' }}</p>
<p><strong>Endere&ccedil;o:</strong> {{ $data['address'] ?? '-' }}</p>
<p><strong>Telefone:</strong> {{ $data['phone'] ?? '-' }}</p>
<p><strong>Email:</strong> {{ $data['email'] ?? '-' }}</p>
<p><strong>Assunto:</strong> {{ $data['subject'] ?? '-' }}</p>
<p><strong>Descri&ccedil;&atilde;o:</strong></p>
<p>{{ $data['description'] ?? ($data['message'] ?? '-') }}</p>
