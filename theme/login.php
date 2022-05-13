<?php $v->layout("theme/_theme"); ?>

<div class="main_content_box">
    <div class="login">
        <div class="login-logo">
            <a href="https://www.invar.org.br/">
                <img class="mb-3" src="<?= asset("/images/logo_invar.png"); ?>" alt="" width="50%" height="50%">
            </a>
        </div>
        <!-- /.login-logo -->
        <h5 class="login-box-msg text-white">Preencha os dados para acessar</h5>

        <form class="form" action="<?= $router->route("auth.login"); ?>" method="post" autocomplete="off">

            <div class="login_form_callback">
                <?= flash(); ?>
            </div>

            <div class="input-group mb-3">
                <input class="form-control"
                       value="" type="text" name="id" placeholder="Número de Registro:"/>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-address-card"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input class="form-control"
                       autocomplete="" type="password" name="passwd" placeholder="Senha:"/>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-key"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <a class="text-white"
                       href="<?= $router->route("web.forget"); ?>" title="Recuperar Senha">Esqueceu sua senha?</a>
                </div>
                <!-- /.col -->
                <div class="col-4 mb-2">
                    <button class="btn btn-primary btn-block">Logar-se</button>
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <div class="col-md">
                    <a class="btn btn-outline-info btn-block"
                            href="<?= $router->route("web.register"); ?>"> Cadastrar-se </a>
                </div>
            </div>
        </form>
    </div>
</div>

<?php $v->start("scripts"); ?>
<script src="<?= asset("/js/form.js"); ?>"></script>
<?php $v->end(); ?>
