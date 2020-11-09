<?php $v->layout("theme/_theme"); ?>

<div class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h1><b>Plataforma</b> Invar </h1>
            </div>
            <div class="card-body">
            <p class="login-box-msg">Registre um novo membro</p>

            <form action="<?= $router->route("auth.register"); ?>" method="post" autocomplete="off">
                <div class="login_form_callback">
                    <?= flash(); ?>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="<?= $user->first_name; ?>"
                           placeholder="Primeiro Nome">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="<?= $user->last_name; ?>"
                           placeholder="Ultimo Nome">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" value="<?= $user->email; ?>"
                           placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Senha">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8"></div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    Entrar com o Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    Entrar com o Google
                </a>
            </div>


            <div class="form_register_action">
                <a href="<?= $router->route("web.login"); ?>" class="btn btn-blue">Já é membro?
                    Clique aqui para fazer login.</a>
            </div>
        </div>
        <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
</div>