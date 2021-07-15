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
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="far fa-address-book"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Curso Lecionado</span>
                            <span class="info-box-number">
                                <?= $user->course ?>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>
                <div class="form_callback">
                    <?= flash(); ?>
                </div>
            </div>
            <!-- /.row -->
            <!-- Default box -->
            <div class="card card-lightblue">
                <div class="card-header">
                    <h3 class="card-title">Cadastrar Nova Aula</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <!-- form start -->
                    <form action="<?= $router->route("auth.lesson"); ?>" method="post" autocomplete="off">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="lesson_name">Nome da Aula</label>
                                <input value="" type="text" class="form-control" name="lesson_name"
                                       id="lesson_name" placeholder="Nome da Aula">
                            </div>
                            <div class="form-group">
                                <label for="local">Módulo | <code> selecione </code></label>
                                <select class="custom-select form-control-border" name="module" id="module">
                                    <option value=" "> Selecione </option>
                                    <option value="1"> Módulo 1 </option>
                                    <option value="2"> Módulo 2 </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="first_name">Professor da Aula</label>
                                <input value="<?= $user->first_name ?>" type="text" disabled class="form-control" name="first_name"
                                       id="first_name">
                            </div>
                            <div class="form-group">
                                <label for="course">Curso</label>
                                <input value="Administração" type="text" disabled class="form-control" name="course"
                                       id="course">
                            </div>
                            <div class="form-group">
                                <label for="embed">Link do YouTube</label>
                                <input type="text" class="form-control" name="embed"
                                       id="embed" placeholder="Link do video da aula no YouTube">
                            </div>
                            <div class="form-group">
                                <label for="drive">Pasta de Arquivos</label>
                                <input type="text" class="form-control" name="drive"
                                       id="drive" placeholder="Link da pasta do drive">
                            </div>
                            <div class="form-group">
                                <label for="passwd">Sua senha | <code> para confirmação </code></label>
                                <input type="password" class="form-control" name="passwd"
                                       id="passwd" placeholder="Senha de acesso">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
