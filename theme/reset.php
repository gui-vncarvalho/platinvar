<?php $v->layout("theme/_theme"); ?>

<div class="main_content_box">
    <div class="login">
        <div class="login-logo">
            <a href="https://www.invar.org.br/">
                <img class="mb-3" src="<?= asset("/images/logo_invar.png"); ?>" alt="" width="100" height="150">
            </a>
        </div>
        <!-- /.login-logo -->
        <h5 class="login-box-msg text-white">Preencha os campos para alterar sua senha</h5>

        <form class="form" name="reset" action="<?= $router->route("auth.reset"); ?>" method="post" autocomplete="off">
            <div class="login_form_callback">
                <?= flash(); ?>
            </div>

            <div class="input-group mb-3">
                <input class="form-control" value="" type="password" name="password"
                       placeholder="Cadastre uma nova senha:"/>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock-open"></span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input class="form-control" value="" type="password" name="password_re"
                       placeholder="Repita sua nova senha:"/>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>

            <div class="form_actions">
                <button class="btn btn-success btn-block">Atualizar Minha Senha</button>
            </div>
        </form>
    </div>
</div>

<?php $v->start("scripts"); ?>
<script src="<?= asset("/js/form.js"); ?>"></script>
<?php $v->end(); ?>
