<img class="mb-1" src="<?= asset("/images/logo_invar.png"); ?>" alt="" width="50%" height="50%">
<div style="width: 500px; max-width: 100%; padding: 10px; font-family: 'Trebuchet MS', sans-serif; font-size: 1.2em;">
    <h4>Usuário: <?= $user->first_name; ?> <?= $user->first_name; ?>;</h4>
    <h4>Dono do Id: <?= $user->id; ?>;</h4>
    <p><?= $mensagem; ?> </p>

    <p>Atenciosamente <?= site("name"); ?></p>
</div>