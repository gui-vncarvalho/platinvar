<?php $v->layout("theme/admin/adm_theme");

use CoffeeCode\DataLayer\Connect;

$conn = Connect::getInstance();
$error = Connect::getError();

if ($error) {
    echo $error->getMessage();
    die();
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"> Tabelas </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Administrador</a></li>
                        <li class="breadcrumb-item active"> Tabelas </li>
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
                                <th> Tipo de Usuário </th>
                                <th> E-Mail </th>
                                <th> Nome </th>
                                <th> Sobrenome </th>
                                <th> Curso </th>
                            </tr>
                            </thead>
                            <tbody>
                            <? use Source\Models\User; $model = new User(); $users = $model->find()->fetch(true); ?>

                            <? foreach ($users as $user) {
                                echo "<tr><td>".$user->extra."</td>";
                                echo "<td>".$user->email."</td>";
                                echo "<td>".$user->first_name."</td>";
                                echo "<td>".$user->last_name."</td>";
                                echo "<td>".$user->course."</td></tr>";
                            } ?>

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
            <div class="row">
                <!-- /.card-courses -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Cursos Cadastrados</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="courses" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th> Nome do Curso </th>
                                <th> Drive </th>
                                <th> Professor </th>
                                <th> Descrição </th>
                            </tr>
                            </thead>
                            <tbody>
                            <? use Source\Models\Course; $model_course = new Course(); $courses = $model_course->find()->fetch(true); ?>

                            <? foreach ($courses as $course) {
                                echo "<tr><td>".$course->name."</td>";
                                echo "<td>".$course->drive."</td>";
                                echo "<td>".$course->teacher."</td>";
                                echo "<td>".$course->description."</td></tr>";
                            } ?>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th> Nome do Curso </th>
                                <th> Drive </th>
                                <th> Professor </th>
                                <th> Descrição </th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.row -->
            <div class="row">
                <!-- /.card-classrooms -->
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Turmas Cadastradas</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="classrooms" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th> Id da Turma </th>
                                <th> Nome </th>
                                <th> Professor </th>
                                <th> Curso </th>
                                <th> Nº de Estudantes </th>
                            </tr>
                            </thead>
                            <tbody>
                            <? use Source\Models\Classroom; $model_class = new Classroom(); $classrooms = $model_class->find()->fetch(true); ?>

                            <? foreach ($classrooms as $classroom) {
                                echo "<tr><td>".$classroom->id."</td>";
                                echo "<td>".$classroom->classroom_name."</td>";
                                echo "<td>".$classroom->teacher."</td>";
                                echo "<td>".$classroom->course."</td>";
                                echo "<td>".$classroom->students."</td></tr>";
                            } ?>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th> Id da Turma </th>
                                <th> Nome </th>
                                <th> Professor </th>
                                <th> Curso </th>
                                <th> Nº de Estudantes </th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- DataTables -->
<script src="<?= asset("/plugins/datatables/jquery.dataTables.min.js"); ?>"></script>
<script src="<?= asset("/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"); ?>"></script>
<script src="<?= asset("/plugins/datatables-responsive/js/dataTables.responsive.min.js"); ?>"></script>
<script src="<?= asset("/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"); ?>"></script>
<script>
    $(function () {
        $("#users").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $("#courses").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $("#classrooms").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>