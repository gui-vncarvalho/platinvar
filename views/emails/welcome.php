<div style="width: 500px; max-width: 100%; padding: 10px; font-family: 'Trebuchet MS', sans-serif; font-size: 1.2em;">
  <h4>Prezado(a) <?= $user->first_name; ?>,</h4>
  <p>
    Recebemos seu registro na nossa plataforma e estamos enviando esse e-mail com os seus dados para acesso
    da plataforma, salve este e-mail e não se esqueça do seu <b>ID</b> e <b>Senha</b> eles são de extrema
    importância.
  </p>
  <p><a href="<?= $link; ?>" title="Acessar">CLIQUE AQUI PARA FAZER LOGIN</a></p>
  <p>Atenciosamente <?= site("name"); ?></p>
</div>