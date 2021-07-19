<?php $v->layout("theme/student/std_theme"); ?>
<? use Source\Models\Lesson; $model_lesson = new Lesson(); $lessons = $model_lesson->find("course= :c","c=".$user->course)->fetch(true); ?>

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

    <!-- Default box
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Sobre a Invar </h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">

                    </th>
                    <th style="width: 20%">
                        Título da aula
                    </th>
                    <th style="width: 30%">
                        Professor(a)
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        <a>
                            Apresentação da Plataforma
                        </a>
                        <br/>
                        <small>

                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                Presidente do INVAR - Douglas Sakumoto
                            </li>
                        </ul>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="https://drive.google.com/drive/folders/1tf3nYBluyssmtjHK9wDj3W_iONlqMwKJ?usp=sharing">
                            <i class="fas fa-folder"></i>
                            Arquivos
                        </a>
                        <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-lg">
                            <i class="fas fa-sign-in-alt"></i>
                            Acessar
                        </a>
                    </td>
                </tr>
                <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Apresentação a respeito dos cursos</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/kSNJQAqrsLs" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Voltar</button>
                            </div>
                        </div>
                         /.modal-content
                    </div>
                    /.modal-dialog
                </div>
                 /.modal
                </tbody>
            </table>
        </div>
         /.card-body
    </div>
     /.card -->
    <!-- Default box -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> <?= $user->course; ?> </h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>

        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">

                    </th>
                    <th style="width: 20%">
                        Título da aula
                    </th>
                    <th style="width: 30%">
                        Professor(a)
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($lessons as $lesson) {
                        echo "<tr><td>".$lesson->id."</td>";
                        echo "<td>".$lesson->lesson_name."</td>";
                        echo "<td>".$lesson->teacher."</td>";
                        echo "<td class='project-actions text-right'>
                                <a class='btn btn-primary btn-sm' href='".$lesson->drive."'>
                                    <i class='fas fa-folder'></i> Arquivos 
                                </a>
                                <a class='btn btn-default btn-sm' data-toggle='modal' data-target='#modal-lg'>
                                    <i class='fas fa-sign-in-alt'></i> Acessar 
                                </a> </td></tr>";
                    } ?>


                <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><?= $lesson->lesson_name ?></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="<?= $lesson->embed ?>" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Voltar</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!--  /.card -->
</section>
<!-- /.content-wrapper -->
</div>
