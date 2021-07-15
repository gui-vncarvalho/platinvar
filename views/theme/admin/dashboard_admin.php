<?php $v->layout("theme/admin/adm_theme"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Formulários</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Geral</a></li>
              <li class="breadcrumb-item active">Formulários de Cadastro</li>
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
              <h3 class="card-title"> Cadastro de Aluno </h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="<?= $router->route("auth.register"); ?>" method="post" autocomplete="off">
              <div class="login_form_callback">
                  <?= flash(); ?>
              </div>
              <div class="card-body">
                  <div class="form-group">
                      <div class="form-group">
                          <label for="extra"> Tipo de Usuário </code></label>
                          <select class="custom-select form-control-border" name="extra" id="extra">
                              <option value="1"> Aluno </option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="first_name">Primeiro Nome</label>
                      <input value="" type="text" class="form-control" name="first_name"
                             id="first_name" placeholder="Nome do Aluno">
                  </div>
                  <div class="form-group">
                      <label for="last_name">Sobrenome</label>
                      <input value="" type="text" class="form-control" name="last_name"
                             id="last_name" placeholder="Sobrenome do Aluno">
                  </div>
                  <div class="form-group">
                      <label for="email">E-mail</label>
                      <input value="" type="email" class="form-control" name="email"
                             id="email" placeholder="E-mail para acessar">
                  </div>
                  <div class="form-group">
                      <label for="course">Curso | <code> selecione </code></label>
                      <select class="custom-select form-control-border" name="course" id="course">
                          <? use Source\Models\Course; $model = new Course(); $courses = $model->find()->fetch(true); ?>
                          <? foreach ($courses as $course) {echo "<option value='".$course->id."'>".$course->name."</option>"; } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="passwd">Senha</label>
                      <input type="password" class="form-control" name="passwd"
                             id="passwd" placeholder="Senha para acessar">
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

  <!-- right column -->
  <div class="col-md-6">
      <!-- form teacher -->
      <div class="card card-success">
          <div class="card-header">
              <h3 class="card-title"> Cadastro de Professor </h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="<?= $router->route("auth.registertea"); ?>" method="post" autocomplete="off">
              <div class="login_form_callback">
                  <?= flash(); ?>
              </div>
              <div class="card-body">
                  <div class="form-group">
                      <div class="form-group">
                          <label for="extra"> Tipo de Usuário </code></label>
                          <select class="custom-select form-control-border" name="extra" id="extra">
                              <option value="2"> Professor </option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="first_name">Primeiro Nome</label>
                      <input value="" type="text" class="form-control" name="first_name"
                             id="first_name" placeholder="Nome do Professor">
                  </div>
                  <div class="form-group">
                      <label for="last_name">Sobrenome</label>
                      <input value="" type="text" class="form-control" name="last_name"
                             id="last_name" placeholder="Sobrenome do Professor">
                  </div>
                  <div class="form-group">
                      <label for="course">Curso Lecionado | <code> selecione </code></label>
                      <select class="custom-select form-control-border" name="course" id="course">
                          <? foreach ($courses as $course) {echo "<option value='".$course->id."'>".$course->name."</option>"; } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="email">E-mail</label>
                      <input value="" type="email" class="form-control" name="email"
                             id="email" placeholder="E-mail para acessar">
                  </div>
                  <div class="form-group">
                      <label for="passwd">Senha</label>
                      <input type="password" class="form-control" name="passwd"
                             id="passwd" placeholder="Senha para acessar">
                  </div>
              </div>
              <!-- /.card-body teacher -->
              <div class="card-footer">
                  <button type="submit" class="btn btn-success">Cadastrar</button>
              </div>
          </form>
      </div>
  </div>

  <!-- left column -->
  <div class="col-md-6">
      <!-- form course -->
      <div class="card card-info">
          <div class="card-header">
              <h3 class="card-title"> Cadastro de Curso </h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="<?= $router->route("auth.course"); ?>" method="post" autocomplete="off">
              <div class="login_form_callback">
                  <?= flash(); ?>
              </div>
              <div class="card-body">
                  <div class="form-group">
                      <label for="course_name">Nome do Curso</label>
                      <input value="" type="text" class="form-control" name="course_name"
                             id="course_name" placeholder="Nome do Curso">
                  </div>
                  <div class="form-group">
                      <label for="drive">Link do Google Drive</label>
                      <input value="" type="text" class="form-control" name="drive"
                             id="drive" placeholder="Link do Google Drive">
                  </div>
                  <div class="form-group">
                      <label for="teacher"> Professor do Curso </label>
                      <input value="<?= $user->first_name ?>" type="text" class="form-control" name="teacher"
                             id="teacher" placeholder="Professor do Curso">
                  </div>
                  <div class="form-group">
                      <label for="description">Descrição | <code> informações sobre o curso </code></label>
                      <textarea class="form-control" id="description" rows="4"></textarea>
                  </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
          </form>
      </div>
      <!-- /.card course -->
  </div>

  <!-- right column -->
  <div class="col-md-6">
      <!-- form classroom -->
      <div class="card card-warning">
          <div class="card-header">
              <h3 class="card-title">Cadastro de Turma</h3>
              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                      <i class="fas fa-times"></i></button>
              </div>
          </div>
          <div class="card-body">
              <!-- form start -->
              <form action="<?= $router->route("auth.classroom"); ?>" method="post" autocomplete="off">
                  <div class="card-body">
                      <div class="form-group">
                          <label for="classroom_name">Nome para a turma</label>
                          <input value="" type="text" class="form-control" name="classroom_name"
                                 id="classroom_name" placeholder="Nome da Turma">
                      </div>
                      <div class="form-group">
                          <label for="first_name">Professor da turma</label>
                          <input value="<?= $user->first_name ?>" type="text" class="form-control" name="first_name"
                                 id="first_name">
                      </div>
                      <div class="form-group">
                          <label for="course">Curso lecionado</label>
                          <select class="custom-select form-control-border" name="course" id="course">
                              <option value="" disabled selected> Selecione o curso </option>
                              <? foreach ($courses as $course) {echo "<option value='".$course->id."'>".$course->name."</option>"; } ?>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="passwd">Sua senha | <code> para confirmação </code></label>
                          <input type="password" class="form-control" name="passwd"
                                 id="passwd" placeholder="Senha de acesso">
                      </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                      <button type="submit" class="btn btn-secondary">Cadastrar</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
  </div>
  </div>
</section>
<!-- /.content-wrapper -->
