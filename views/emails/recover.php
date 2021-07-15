<img class="mb-1" src="<?= asset("/images/logo_invar.png"); ?>" alt="" width="50%" height="50%">
<div style="width: 500px; max-width: 100%; padding: 10px; font-family: 'Trebuchet MS', sans-serif; font-size: 1.2em;">
    <h4>Prezado(a) <?= $user->first_name; ?>,</h4>
    <p>Recebemos em nosso site uma solicitação para recuperar sua senha, por favor, caso não tenha solicitado
        favor entre em contato com a equipe de suporte. Caso contrário...</p>
    <p><a href="<?= $link; ?>" title="Recuperar Senha">CLIQUE AQUI PARA RECUPERAR SUA SENHA</a></p>
    <p>Atenciosamente <?= site("name"); ?></p>
</div>