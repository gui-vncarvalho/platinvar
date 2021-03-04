<?php $v->layout("theme/teacher/tea_theme"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Aulas</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Geral</a></li>
            <li class="breadcrumb-item active">Aulas</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detalhes do curso</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Alunos inscritos</span>
                                <!--<span class="info-box-number text-center text-muted mb-0"><?= $course->n_students ?></span>-->
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-10 col-sm-3">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Total de aulas</span>
                                <span class="info-box-number text-center text-muted mb-0">23</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Tempo médio para conclusão</span>
                                <span class="info-box-number text-center text-muted mb-0">68 horas <span>
                            </div>
                        </div>
                    </div>-->
                </div>
                <div class="row">
                    <div class="col-12">
                    <h4> Módulos </h4>
                        <div class="post">
                            <div class="user-block">
                                <span class="username">
                                    <a href="#"><?= $user->first_name ?></a>
                                </span>
                                <span class="description">Publicado</span>
                            </div>
                            <!-- /.user-block -->
                            <p></p>
                            <p>
                              <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i>Material - Módulo 1/Aula 1</a>
                            </p>
                        </div>
                        <div class="post clearfix">
                            <div class="user-block">
                                <span class="username">
                                    <a href="#"><?= $user->first_name ?></a>
                                </span>
                                <span class="description">Publicado</span>
                            </div>
                            <!-- /.user-block -->
                            <p></p>
                            <p>
                                <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i>Material - Módulo 1/Aula 2</a>
                            </p>
                        </div>
                        <div class="post">
                            <div class="user-block">
                                <span class="username">
                                    <a href="#"><?= $user->first_name ?></a>
                                </span>
                                <span class="description">Publicado</span>
                            </div>
                        <!-- /.user-block -->
                        <p></p>
                        <p>
                          <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i>Material - Módulo 1/Aula 3</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
            <h3 class="text-primary"><i class="fas fa-graduation-cap"></i> Administração</h3>
            <p class="text-muted"></p>
            <br>
            <div class="text-muted">
                <p class="text-sm">Fornecido pelo(a)
                    <b class="d-block">Instituto de Educação e Tecnologia Vale do Ribeira - INVAR</b>
                </p>
                <p class="text-sm">Professor
                    <b class="d-block"><?= $user->first_name ?></b>
                </p>
            </div>
            <h5 class="mt-5 text-muted">Arquivos do Curso</h5>
            <ul class="list-unstyled">
                <!-- <li>
                    <a href="https://drive.google.com/drive/folders/1tf3nYBluyssmtjHK9wDj3W_iONlqMwKJ?usp=sharing" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                </li> -->

            </ul>
        </div>
    </div>
    <!-- /.card-body -->
    </div>
    </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
