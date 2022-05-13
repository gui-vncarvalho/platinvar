<?php $v->layout("theme/student/std_theme");
$classStd = $user->class;
use Source\Models\Classroom; $model_class = new Classroom(); $class = $model_class->find("id = :i", "i=".$classStd)->fetch(true); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Turma</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Geral</a></li>
                        <li class="breadcrumb-item active">Turma</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <?php if (!empty($class)):
            foreach ($class as $cls): ?>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Detalhes da Turma</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                            <h3 class="text-primary"><?=$cls->course?> - <?=$cls->classroom_name?></h3>
                            <br>
                            <div class="text-muted">
                                <p class="text-sm">Fornecido pela
                                    <b class="d-block">INVAR</b>
                                </p>
                                <p class="text-sm">Professor
                                    <b class="d-block"><?=$cls->teacher?></b>
                                </p>
                            </div>
                            <h5 class="mt-5 text-muted">Arquivos da Turma</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="<?=$cls->drive?>" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Google Drive</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </section>
            <!-- /.content -->
    <?php endforeach;
        else:
            echo    "<a class='btn btn-app'> <i class='fas fa-users'></i> 
                        Você ainda não está incluso em nenhuma turma!
                    </a>";
        endif;?>
</div>
<!-- /.content-wrapper -->

