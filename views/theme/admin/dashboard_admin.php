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
                          <option value="1"> Auxiliar Administrativo </option>
                          <option value="2"> Auxiliar em Departamento Pessoal </option>
                          <option value="3"> Auxiliar em Logística </option>
                          <option value="4"> Marketing de Varejo </option>
                          <option value="5"> Técnicas de Vendas </option>
                          <option value="6"> Desenvolvimento de Websites </option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="company">Vinculo | <code> atenção máxima </code></label>
                      <select class="custom-select form-control-border" name="company" id="company">
                          <option value=" "> Selecione </option>
                          <option value="INVAR"> INVAR </option>
                          <option value="DEMHAB"> DEMHAB </option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="local">Local | <code> unidade/condomínio </code></label>
                      <select class="custom-select form-control-border" name="local" id="local">
                          <option value=" "> Selecione </option>
                          <option value="São Paulo"> São Paulo </option>
                          <option value="Peruíbe"> Peruíbe </option>
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
                          <option value="1"> Auxiliar Administrativo </option>
                          <option value="2"> Auxiliar em Departamento Pessoal </option>
                          <option value="3"> Auxiliar em Logística </option>
                          <option value="4"> Marketing de Varejo </option>
                          <option value="5"> Técnicas de Vendas </option>
                          <option value="6"> Desenvolvimento de Websites </option>
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
  </div>
  </div>
</section>
<!-- /.content-wrapper -->
