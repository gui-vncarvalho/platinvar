<?php $v->layout("theme/app/_theme"); ?>

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
        <h3 class="card-title">Aulas</h3>

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
              Nome
            </th>
            <th style="width: 30%">
              Professor
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
              #
            </td>
            <td>
              <a>
                Aula 1
              </a>
              <br/>
              <small>
                Criado em 01.01.2019
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
                <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">
                </div>
              </div>
              <small>
                57% Completo
              </small>
            </td>
            <td class="project-state">
              <span class="badge badge-success">Sucesso</span>
            </td>
            <td class="project-actions text-right">
              <a class="btn btn-primary btn-sm" href="#">
                <i class="fas fa-folder">
                </i>
                Arquivos
              </a>
              <a class="btn btn-secondary btn-sm" href="#">
                <i class="fas fa-sign-in-alt">
                </i>
                Acessar
              </a>
            </td>
          </tr>
          <tr>
            <td>
              #
            </td>
            <td>
              <a>
                Aula 2
              </a>
              <br/>
              <small>
                Criado em 01.01.2019
              </small>
            </td>
            <td>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <img alt="Avatar" class="table-avatar" src="<?= asset("/dist/img/avatar.png"); ?>">
                </li>
                <li class="list-inline-item">
                  <img alt="Avatar" class="table-avatar" src="<?= asset("/dist/img/avatar2.png"); ?>g">
                </li>
              </ul>
            </td>
            <td class="project_progress">
              <div class="progress progress-sm">
                <div class="progress-bar bg-green" role="progressbar" aria-volumenow="47" aria-volumemin="0" aria-volumemax="100" style="width: 47%">
                </div>
              </div>
              <small>
                47% Completo
              </small>
            </td>
            <td class="project-state">
              <span class="badge badge-success">Sucesso</span>
            </td>
            <td class="project-actions text-right">
              <a class="btn btn-primary btn-sm" href="#">
                <i class="fas fa-folder">
                </i>
                Arquivos
              </a>
              <a class="btn btn-secondary btn-sm" href="#">
                <i class="fas fa-sign-in-alt">
                </i>
                Acessar
              </a>
            </td>
          </tr>
          <tr>
            <td>
              #
            </td>
            <td>
              <a>
                Aula 3
              </a>
              <br/>
              <small>
                Criado em 01.01.2019
              </small>
            </td>
            <td>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <img alt="Avatar" class="table-avatar" src="<?= asset("/dist/img/avatar3.png"); ?>">
                </li>
              </ul>
            </td>
            <td class="project_progress">
              <div class="progress progress-sm">
                <div class="progress-bar bg-green" role="progressbar" aria-volumenow="77" aria-volumemin="0" aria-volumemax="100" style="width: 77%">
                </div>
              </div>
              <small>
                77% Completo
              </small>
            </td>
            <td class="project-state">
              <span class="badge badge-success">Sucesso</span>
            </td>
            <td class="project-actions text-right">
              <a class="btn btn-primary btn-sm" href="#">
                <i class="fas fa-folder">
                </i>
                Arquivos
              </a>
              <a class="btn btn-secondary btn-sm" href="#">
                <i class="fas fa-sign-in-alt">
                </i>
                Acessar
              </a>
            </td>
          </tr>
          <tr>
            <td>
              #
            </td>
            <td>
              <a>
                Aula 4
              </a>
              <br/>
              <small>
                Criado em 01.01.2019
              </small>
            </td>
            <td>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <img alt="Avatar" class="table-avatar" src="<?= asset("/dist/img/avatar04.png"); ?>">
                </li>
              </ul>
            </td>
            <td class="project_progress">
              <div class="progress progress-sm">
                <div class="progress-bar bg-green" role="progressbar" aria-volumenow="77" aria-volumemin="0" aria-volumemax="100" style="width: 77%">
                </div>
              </div>
              <small>
                77% Completo
              </small>
            </td>
            <td class="project-state">
              <span class="badge badge-success">Sucesso</span>
            </td>
            <td class="project-actions text-right">
              <a class="btn btn-primary btn-sm" href="#">
                <i class="fas fa-folder">
                </i>
                Arquivos
              </a>
              <a class="btn btn-secondary btn-sm" href="#">
                <i class="fas fa-sign-in-alt">
                </i>
                Acessar
              </a>
            </td>
          </tr>
          <tr>
            <td>
              #
            </td>
            <td>
              <a>
                Aula 5
              </a>
              <br/>
              <small>
                Criado em 01.01.2019
              </small>
            </td>
            <td>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <img alt="Avatar" class="table-avatar" src="<?= asset("/dist/img/avatar3.png"); ?>">
                </li>
                <li class="list-inline-item">
                  <img alt="Avatar" class="table-avatar" src="<?= asset("/dist/img/avatar5.png"); ?>">
                </li>
              </ul>
            </td>
            <td class="project_progress">
              <div class="progress progress-sm">
                <div class="progress-bar bg-green" role="progressbar" aria-volumenow="77" aria-volumemin="0" aria-volumemax="100" style="width: 77%">
                </div>
              </div>
              <small>
                77% Completo
              </small>
            </td>
            <td class="project-state">
              <span class="badge badge-success">Sucesso</span>
            </td>
            <td class="project-actions text-right">
              <a class="btn btn-primary btn-sm" href="#">
                <i class="fas fa-folder">
                </i>
                Arquivos
              </a>
              <a class="btn btn-secondary btn-sm" href="#">
                <i class="fas fa-sign-in-alt">
                </i>
                Acessar
              </a>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->