<?php $v->layout("theme/teacher/tea_theme"); ?>
<? use Source\Models\Course; $model_course = new Course(); $courses = $model_course->find()->fetch(true); ?>

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
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- form student -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> Cadastrar Nova Aula </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?= $router->route("auth.lesson"); ?>" method="post" autocomplete="off">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="lesson_name">Nome da Aula</label>
                                    <input value="" type="text" class="form-control" name="lesson_name"
                                           id="lesson_name" placeholder="Nome da Aula">
                                </div>
                                <div class="form-group">
                                    <label for="teacher">Professor</label>
                                    <input value="<?=$user->first_name?> <?=$user->last_name?>" type="text" class="form-control" name="teacher"
                                           id="teacher" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="embed">Link do Youtube</label>
                                    <input value="" type="text" class="form-control" name="embed"
                                           id="embed" placeholder="youtube.com/">
                                </div>
                                <div class="form-group">
                                    <label for="drive">Google Drive</label>
                                    <input value="" type="text" class="form-control" name="drive"
                                           id="drive" placeholder="Link">
                                </div>
                                <div class="form-group">
                                    <label for="course">Curso | <code> selecione </code></label>
                                    <select class="custom-select form-control-border" name="course" id="course">
                                        <? foreach ($courses as $course) {echo "<option value='".$course->name."'>".$course->name."</option>"; } ?>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card student -->
                </div>
            </div>
            <!--/. row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
