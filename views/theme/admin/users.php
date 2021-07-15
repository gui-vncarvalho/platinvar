<?php $v->layout("theme/admin/adm_theme");

use CoffeeCode\DataLayer\Connect;

$conn = Connect::getInstance();
$error = Connect::getError();

if ($error) {
    echo $error->getMessage();
    die();
}

?>

<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= asset("/plugins/moment/moment.min.js"); ?>"></script>

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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Usuários Cadastrados</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th> Tipo de Usuário </th>
                                <th> E-Mail </th>
                                <th> Nome </th>
                                <th> Sobrenome </th>
                                <th> Curso </th>
                                <th> X </th>
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
                <!-- /.col -->
                </div>
                <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->
