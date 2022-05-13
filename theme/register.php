<?php $v->layout("theme/_theme"); ?>
<? use Source\Models\Course; $model_course = new Course(); $courses = $model_course->find()->fetch(true); ?>


<div class="main_content_box">
    <div class="login">
        <div class="login-logo">
            <a href="https://www.invar.org.br/">
                <img class="mb-1" src="<?= asset("/images/logo_invar.png"); ?>" alt="" width="50%" height="50%">
            </a>
        </div>
        <!-- /.login-logo -->
        <h5 class="login-box-msg text-white">Preencha os campos <br> para cadastrar-se</h5>

        <form class="form" action="<?= $router->route("auth.register"); ?>" method="post" autocomplete="off">
            <div class="login_form_callback">
                <?= flash(); ?>
            </div>

            <div class="input-group mb-3">
                <input class="form-control"
                       value="<?= $user->first_name; ?>" type="text" name="first_name"
                       placeholder="Primeiro nome:"/>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-address-card"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input class="form-control"
                       value="<?= $user->last_name; ?>" type="text" name="last_name"
                       placeholder="Sobrenome:"/>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-users"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input class="form-control"
                       value="<?= $user->email; ?>" type="text" name="email"
                       placeholder="Informe seu e-mail:"/>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <select class="custom-select form-control-border" name="course" id="course">
                    <? foreach ($courses as $course) {echo "<option value='".$course->name."'>".$course->name."</option>"; } ?>
                </select>
            </div>
            <div class="input-group mb-3">
                <input class="form-control"
                       autocomplete="" type="password" name="passwd" placeholder="Senha para o acesso:"/>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-key"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <a href="<?= $router->route("web.login"); ?>" class="btn btn-outline-success">
                        Voltar ao Login </a>
                </div>
                <div class="col-4">
                    <button class="btn btn-primary btn-block">Criar Conta</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md">

            </div>
        </form>
    </div>
</div>

<?php $v->start("scripts"); ?>
    <script src="<?= asset("/js/form.js"); ?>"></script>
<?php $v->end(); ?>