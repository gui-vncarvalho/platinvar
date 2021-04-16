<?php $v->layout("theme/teacher/tea_theme"); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pessoais</a></li>
              <li class="breadcrumb-item active"> Perfil do Professor </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?= asset("/images/favicon.png"); ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?= $user->first_name; ?> <?= $user->last_name; ?></h3>

                <p class="text-muted text-center">Professor</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Curso</b> <a class="float-right"><?= $user->course ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Turma</b> <a class="float-right"> --- </a>
                  </li>
                  <li class="list-group-item">
                    <b>Empresa</b> <a class="float-right"> Invar </a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sobre Mim</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Educação </strong>

                <p class="text-muted">

                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Localização </strong>

                <p class="text-muted"></p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Habilidades </strong>

                <ul>

                </ul>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notas </strong>

                <p class="text-muted"></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item active"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Configurações</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          2 Out. 2020
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Equipe de Suporte</a> enviou um email</h3>

                          <div class="timeline-body">
                            Toda empresa que lida com tecnologia vai, eventualmente, precisar de um suporte técnico.
                            Esse suporte será prestado pelo analista de TI, profissional da área de Tecnologia da
                            Informação. Para começarmos o nosso guia com tudo o que você precisa saber sobre suporte
                            técnico, nada melhor do que entender o que esse termo significa, não é mesmo?
                          </div>
                          <div class="timeline-footer">
                              <!--<a href="#" class="btn btn-primary btn-sm">Ler mais</a>
                              <a href="#" class="btn btn-danger btn-sm">Delete</a>-->
                            </div>
                          </div>
                        </div>
                        <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputUsername" class="col-sm-2 col-form-label">Apelido</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputUsername" placeholder="Apelido">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputRole" class="col-sm-2 col-form-label">Cargo</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputRole" placeholder="Cargo">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experiência</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experiência"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Habilidades</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Habilidades">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Eu concordo com os <a href="#">termos e condições</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Enviar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->