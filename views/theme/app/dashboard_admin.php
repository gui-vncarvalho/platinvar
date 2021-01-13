<?php $v->layout("theme/app/_theme"); ?>

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
                      <label for="company">Vinculo | <code> atenção máxima </code></label>
                      <select class="custom-select form-control-border" name="company" id="company">
                          <option value=""> Value 1 </option>
                          <option value=""> Value 2 </option>
                          <option value="DEMHAB"> DEMHAB </option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="local">Local | <code> unidade/condomínio </code></label>
                      <select class="custom-select form-control-border" name="local" id="local">
                          <option value=" "> Selecione </option>
                          <option value="Marista"> Marista </option>
                          <option value="Bomfim"> Bomfim </option>
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
                  <button type="submit" class="btn btn-primary">Criar</button>
              </div>
          </form>
      </div>
      <!-- /.card -->
  </div>
  <!-- right column -->
  <div class="col-md-6">
      <!-- form student -->
      <div class="card card-warning">
          <div class="card-header">
              <h3 class="card-title"> Cadastro de Professor </h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="<?= $router->route("auth.register"); ?>" method="post" autocomplete="off">
              <div class="login_form_callback">
                  <?= flash(); ?>
              </div>
              <div class="card-body">
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
              <!-- /.card-body -->
              <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Criar</button>
              </div>
          </form>
      </div>
  </div>
  </div>
  </div>
</section>
<!-- /.content-wrapper -->
