<?php $v->layout("theme/student/std_theme"); ?>

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

<!-- Course Section -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?= $user->course ?></h3>

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
                    #
                </th>
                <th style="width: 20%">
                    Título da aula
                </th>
                <th style="width: 30%">
                    Professor(a)
                </th>
                <th>
                    Progresso na aula
                </th>
                <th style="width: 8%" class="text-center">
                    Status da atividade
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
                        Noções básicas
                    </a>
                    <br/>
                    <small>
                        Criado em 21.01.2021
                    </small>
                </td>
                <td>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <img alt="Avatar" class="table-avatar" src="<?= asset("/dist/img/avatar.png"); ?>">
                        </li>
                    </ul>
                </td>
                <td class="project_progress">
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-green"
                             role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">
                        </div>
                    </div>
                    <small>
                        57% Completo
                    </small>
                </td>
                <td class="project-state">
                    <span class="badge badge-warning">Em avaliação</span>
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
                            <h4 class="modal-title">Noções básicas</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/Gqf0MsUsWM8?controls=0" frameborder="0"
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
<!-- /.card -->

</section>
<!-- /.content-wrapper -->
</div>
