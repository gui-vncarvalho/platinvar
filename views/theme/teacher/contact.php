<?php $v->layout("theme/teacher/tea_theme"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Página Inicial</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Geral</a></li>
                        <li class="breadcrumb-item active">Visão Geral</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="col-md">
            <!-- form student -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> Como podemos te ajudar? </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?= $router->route("auth.contacthelp"); ?>" method="post" autocomplete="off">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="subject">Assunto</label>
                            <input value="" type="text" class="form-control" name="subject"
                                   id="subject" placeholder="Assunto">
                        </div>
                        <div class="form-group">
                            <label for="problem">Explique seu problema</label>
                            <textarea type="text" class="form-control" name="problem"
                                      id="problem" placeholder="Explique seu problema"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="email"> Seu E-mail</label>
                            <input value="" type="email" class="form-control" name="email"
                                   id="email" placeholder="E-mail para acessar">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
            <!-- /.card student -->
        </div>
        <!-- /.col -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->