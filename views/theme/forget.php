<?php $v->layout("theme/_theme"); ?>

<div class="main_content_box">
    <div class="login">
        <div class="login-logo">
            <a href="https://www.invar.org.br/">
                <img class="mb-3" src="<?= asset("/images/logo_invar.png"); ?>" alt="" width="100" height="150">
            </a>
        </div>
        <!-- /.login-logo -->
        <h5 class="login-box-msg text-white">Para recuperar sua senha</h5>

        <form class="form" action="<?= $router->route("auth.forget"); ?>" method="post" autocomplete="off">
            <div class="login_form_callback">
                <?= flash(); ?>
            </div>

            <div class="input-group mb-3">
                <input class="form-control" value="" type="email" name="email"
                       placeholder="Informe seu e-mail:"/>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <button class="btn btn-success btn-block">Recuperar Minha Senha</button>
            </div>
        </form>

        <div class="col-sm my-2">
            <a href="<?= $router->route("web.login"); ?>" class="btn btn-primary btn-block">Voltar ao Login</a>
        </div>
    </div>
</div>

<?php $v->start("scripts"); ?>
<script src="<?= asset("/js/form.js"); ?>"></script>
<?php $v->end(); ?>
