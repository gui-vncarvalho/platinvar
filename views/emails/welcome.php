<img class="mb-1" src="<?= asset("/images/logo_invar.png"); ?>" alt="" width="50%" height="50%">
<div style="width: 500px; max-width: 100%; padding: 10px; font-family: 'Trebuchet MS', sans-serif; font-size: 1.2em;">
    <h4>Prezado(a) <?= $user->first_name; ?>, portador do e-mail: <?= $user->email; ?></h4>
    <p>
    Recebemos seu registro na nossa plataforma e estamos enviando este e-mail com os dados para acesso
    da plataforma;
    Salve este e-mail e não se esqueça do seu <br> <b>ID:</b>  <?= $user->id; ?> e <b>Senha:</b>  <?= $passwd; ?>,
    eles são de extrema importância e sem eles você não poderá acessar a plataforma.
    </p>

    <p><a href="<?= $link; ?>" title="Acessar">CLIQUE AQUI PARA FAZER LOGIN</a></p>
    <p>Atenciosamente <?= site("name"); ?></p>
</div>