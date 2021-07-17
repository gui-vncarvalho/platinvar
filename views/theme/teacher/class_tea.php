<?php $v->layout("theme/teacher/tea_theme"); ?>
<?php use Source\Models\Course; $model_course = new Course(); $courses = $model_course->find()->fetch(true); ?>
<?php $teacher = $user->first_name." ".$user->last_name;
use Source\Models\Classroom; $model_class = new Classroom(); $class = $model_class->find("teacher = :name", "name=".$teacher)->fetch(true); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Turmas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Geral</a></li>
                        <li class="breadcrumb-item active">Turmas</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card card-info">
            <!-- /.card-users -->
            <div class="card-header">
                <h3 class="card-title">Suas Turmas</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <?php if (!empty($class)) { ?>
            <div class="card-body">
                <table id="classrooms" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th> Acessar </th>
                        <th> iD da Turma </th>
                        <th> Nome da Turma </th>
                        <th> Curso </th>
                        <th> Drive </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($class as $cls) {
                            echo "<tr><td> ".var_dump($cls)." </td>";
                            echo "<td>{$cls->id}</td>";
                            echo "<td>{$cls->classroom_name}</td>";
                            echo "<td>{$cls->course}</td>";
                            echo "<td><a href='{$cls->drive}'><i class='fas fa-boxes nav-icon'></i></a></td></tr>";
                    } ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th> Acessar </th>
                        <th> iD da Turma </th>
                        <th> Nome da Turma </th>
                        <th> Curso </th>
                        <th> Drive </th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            <? } else { echo "<h4> Você ainda não possui turmas </h4>"; }?>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->