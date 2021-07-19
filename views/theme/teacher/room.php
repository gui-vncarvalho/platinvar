<?php $v->layout("theme/teacher/tea_theme"); ?>

<?php $classId = filter_input(INPUT_GET, "id", FILTER_SANITIZE_STRIPPED);
use Source\Models\User;
use Source\Models\Classroom; $model_class = new Classroom(); $class = $model_class->find("id = :i", "i=".$classId)->fetch(true); ?>
<?php foreach ($class as $cls): ?>
<?php $model_user = new User(); $students = $model_user->find("extra = :e AND course= :c", "e= 1 & c=".$cls->course)->fetch(true); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Gestão da Turma</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Turmas</a></li>
                        <li class="breadcrumb-item active">Visão Geral</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> Gerenciamento da Turma </h3>
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
                                        <span class="info-box-text text-center text-muted"> Nome da Turma </span>
                                        <span class="info-box-number text-center text-muted mb-0"> <?= $cls->classroom_name ?> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted"> Número de Alunos </span>
                                        <span class="info-box-number text-center text-muted mb-0"> <?= $cls->students ?>  <span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <? if(!empty($students)): ?>
                                <!-- form start -->
                                <form action="<?= $router->route("room.addstudent"); ?>" method="post" autocomplete="off" enctype="multipart/form-data">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="student">Estudantes inscritos no curso | <code> selecione </code></label>
                                            <select class="custom-select form-control-border" name="student" id="student">
                                                <? foreach ($students as $student) {echo "<option value='".$student->id."'>".$student->first_name." ".$student->last_name."</option>"; } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button class="btn btn-primary">Cadastrar na Turma</button>
                                    </div>
                                </form>
                                <? endif; ?>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <h3 class="text-primary"> Curso</h3>
                        <p class="text-muted"> <?= $cls->course ?>  </p>
                        <br>
                        <div class="text-muted">
                            <p class="text-md">Professor da Turma
                                <b class="d-block"> <?= $cls->teacher ?> </b>
                            </p>
                        </div>

                        <h5 class="mt-5 text-muted">Arquivos da Turma</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="<?= $cls->drive ?>" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Google Drive </a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <? $model_students = new User(); $students = $model_students->find(
                            "extra = :e AND class= :c",
                            "e= 1 & c=".$cls->id
                        )->fetch(true);
                        if (!empty($students)): ?>
                        <div class="card card-primary">
                            <!-- /.card-users -->
                            <div class="card-header">
                                <h3 class="card-title">Usuários Cadastrados</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                        <i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="users" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th> Nome do Estudante </th>
                                        <th> Sobrenome do Estudante </th>
                                        <th> E-Mail </th>
                                        <th> Curso </th>
                                        <th> Turma </th>
                                        <th> Remover </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <? foreach ($students as $student): ?>
                                        <tr><td> <?= $student->first_name ?> </td>
                                            <td> <?= $student->last_name ?></td>
                                            <td> <?= $student->email ?></td>
                                            <td> <?= $student->course ?></td>
                                            <td> <?= $student->class ?></td>
                                            <td><a href="#" data-action="<?= $router->route('room.remstudent');?>"
                                                   data-id="<?= $student->id; ?>"> Deletar </a></td></tr>
                                    <? endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th> Tipo de Usuário </th>
                                        <th> E-Mail </th>
                                        <th> Nome </th>
                                        <th> Sobrenome </th>
                                        <th> Curso </th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.row -->
                    <?php endif; endforeach;?>
                </div>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->