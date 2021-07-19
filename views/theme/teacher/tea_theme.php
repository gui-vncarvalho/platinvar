<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?= $head; ?>

    <!-- CORE STYLES -->
    <link rel="stylesheet" href="<?= asset("/css/message.css"); ?>"/>
    <link rel="stylesheet" href="<?= asset("/dist/css/adminlte.min.css"); ?>"/>
    <link rel="stylesheet" href="<?= asset("/plugins/fontawesome-free/css/all.min.css"); ?>"/>

    <!-- fullCalendar -->
    <link rel="stylesheet" href="<?= asset("/plugins/fullcalendar/main.min.css"); ?>">
    <link rel="stylesheet" href="<?= asset("/plugins/fullcalendar-daygrid/main.min.css"); ?>">
    <link rel="stylesheet" href="<?= asset("/plugins/fullcalendar-timegrid/main.min.css"); ?>">
    <link rel="stylesheet" href="<?= asset("/plugins/fullcalendar-bootstrap/main.min.css"); ?>">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= asset("plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css"); ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= asset("plugins/toastr/toastr.min.css"); ?>">

    <link rel="icon" type="image/png" href="<?= asset("/images/invar-iden.png"); ?>"/>
</head>
<body>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?= $router->route("app.teacher"); ?>" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?= $router->route("app.contato"); ?>" class="nav-link">Contato</a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?= $router->route("app.teacher"); ?>" class="brand-link">
            <img rel="icon" alt="<?= site("name"); ?>" type="image/png" src="<?= asset("images/invar-iden.png"); ?>" class="brand-image"/>
            <span class="brand-text font-weight-light"> INVAR </span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <!-- <img src="<?= $user->photo; ?>" class="img-circle elevation-2" alt="<?= $user->first_name; ?>"> -->
                    <img src="<?= asset("/images/favicon.png"); ?>" class="img-circle elevation-2" alt="<?= $user->first_name; ?>">
                </div>
                <div class="info">
                    <a href="<?= $router->route("app.profiletea"); ?>" class="d-block"><?= $user->first_name; ?> <?= $user->last_name; ?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Geral
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= $router->route("app.classtea"); ?>" class="nav-link">
                                    <i class="fas fa-chalkboard-teacher nav-icon"></i>
                                    <p>Turmas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://drive.google.com/drive/u/0/my-drive" class="nav-link">
                                    <i class="fas fa-boxes nav-icon"></i>
                                    <p>Materiais</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-address-card"></i>
                            <p>
                                Pessoais <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item ">
                                <a href="<?= $router->route("app.calendar"); ?>" class="nav-link disabled">
                                    <i class="far fa-calendar-alt nav-icon"></i>
                                    <p>
                                        Calendário
                                        <span class="right badge badge-danger"> Em breve </span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= $router->route("app.profiletea"); ?>" class="nav-link">
                                    <i class="far fa-address-book nav-icon"></i>
                                    <p>Perfil</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= $router->route("app.chat"); ?>" class="nav-link disabled">
                                    <i class="nav-icon fas fa-comments"></i>
                                    <p>
                                        Chat
                                        <span class="right badge badge-danger"> Em breve </span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-header"> Suporte </li>
                    <li class="nav-item">
                        <a href="<?= $router->route("app.logoff"); ?>" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
                            <p class="text"> Sair </p>
                        </a>
                    </li><li class="nav-item">
                        <a href="<?= $router->route("app.contacthelp"); ?>" class="nav-link">
                            <i class="nav-icon far fa-question-circle text-info"></i>
                            <p class="text"> Ajuda </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <main>
        <?= $v->section("content"); ?>
    </main>

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Instituto de Educação e Tecnologia Vale do Ribeira
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2020 <a href="#">MTIC Tecnologia</a>.</strong> Todos os direitos reservados.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="<?= asset("/js/form-app.js"); ?>"></script>

<!-- jQuery -->
<script src="<?= asset("/plugins/jquery/jquery.min.js"); ?>"></script>
<script src="<?= asset("/js/jquery-app.js"); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= asset("/plugins/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= asset("/dist/js/adminlte.min.js"); ?>"></script>
<?= $v->section("scripts"); ?>
<!-- jQuery UI -->
<script src="<?= asset("/plugins/jquery-ui/jquery-ui.min.js"); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= asset("/dist/js/demo.js"); ?>"></script>
<!-- fullCalendar 2.2.5 -->
<script src="<?= asset("/plugins/moment/moment.min.js"); ?>"></script>
<script src="<?= asset("/plugins/fullcalendar/main.min.js"); ?>"></script>
<script src="<?= asset("/plugins/fullcalendar-daygrid/main.min.js"); ?>"></script>
<script src="<?= asset("/plugins/fullcalendar-timegrid/main.min.js"); ?>"></script>
<script src="<?= asset("/plugins/fullcalendar-interaction/main.min.js"); ?>"></script>
<script src="<?= asset("/plugins/fullcalendar-bootstrap/main.min.js"); ?>"></script>

<!-- SweetAlert2 -->
<script src="<?= asset("/plugins/sweetalert2/sweetalert2.min.js"); ?>></script>
<!-- Toastr -->
<script src="<?= asset("/plugins/toastr/toastr.min.js"); ?>></script>
<!-- Page specific script -->
<script>
    $(function () {

        /* initialize the external events
         -----------------------------------------------------------------*/
        function ini_events(ele) {
            ele.each(function () {

                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                }

                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject)

                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex        : 1070,
                    revert        : true, // will cause the event to go back to its
                    revertDuration: 0  //  original position after the drag
                })

            })
        }

        ini_events($('#external-events div.external-event'))

        /* initialize the calendar
         -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date()
        var d    = date.getDate(),
            m    = date.getMonth(),
            y    = date.getFullYear()

        var Calendar = FullCalendar.Calendar;
        var Draggable = FullCalendarInteraction.Draggable;

        var containerEl = document.getElementById('external-events');
        var checkbox = document.getElementById('drop-remove');
        var calendarEl = document.getElementById('calendar');

        // initialize the external events
        // -----------------------------------------------------------------

        new Draggable(containerEl, {
            itemSelector: '.external-event',
            eventData: function(eventEl) {
                console.log(eventEl);
                return {
                    title: eventEl.innerText,
                    backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
                    borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
                    textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
                };
            }
        });

        var calendar = new Calendar(calendarEl, {
            plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
            header    : {
                left  : 'prev,next today',
                center: 'title',
                right : 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            'themeSystem': 'bootstrap',
            //Random default events
            events    : [
                {
                    title          : 'Evento : Dia Inteiro',
                    start          : new Date(y, m, 1),
                    backgroundColor: '#f56954', //red
                    borderColor    : '#f56954', //red
                    allDay         : true
                },
                {
                    title          : 'Evento longo',
                    start          : new Date(y, m, d - 5),
                    end            : new Date(y, m, d - 2),
                    backgroundColor: '#f39c12', //yellow
                    borderColor    : '#f39c12' //yellow
                },
                {
                    title          : 'Reunião',
                    start          : new Date(y, m, d, 10, 30),
                    allDay         : false,
                    backgroundColor: '#0073b7', //Blue
                    borderColor    : '#0073b7' //Blue
                },
                {
                    title          : 'Almoço',
                    start          : new Date(y, m, d, 12, 0),
                    end            : new Date(y, m, d, 14, 0),
                    allDay         : false,
                    backgroundColor: '#00c0ef', //Info (aqua)
                    borderColor    : '#00c0ef' //Info (aqua)
                },
                {
                    title          : 'Festa de Aniversário',
                    start          : new Date(y, m, d + 1, 19, 0),
                    end            : new Date(y, m, d + 1, 22, 30),
                    allDay         : false,
                    backgroundColor: '#00a65a', //Success (green)
                    borderColor    : '#00a65a' //Success (green)
                },
                {
                    title          : 'Entrega de atividade',
                    start          : new Date(y, m, 28),
                    end            : new Date(y, m, 29),
                    url            : '#',
                    backgroundColor: '#3c8dbc', //Primary (light-blue)
                    borderColor    : '#3c8dbc' //Primary (light-blue)
                }
            ],
            editable  : true,
            droppable : true, // this allows things to be dropped onto the calendar !!!
            drop      : function(info) {
                // is the "remove after drop" checkbox checked?
                if (checkbox.checked) {
                    // if so, remove the element from the "Draggable Events" list
                    info.draggedEl.parentNode.removeChild(info.draggedEl);
                }
            }
        });

        calendar.render();
        // $('#calendar').fullCalendar()

        /* ADDING EVENTS */
        var currColor = '#3c8dbc' //Red by default
        //Color chooser button
        $('#color-chooser-btn');
        $('#color-chooser > li > a').click(function (e) {
            e.preventDefault()
            //Save color
            currColor = $(this).css('color')
            //Add color effect to button
            $('#add-new-event').css({
                'background-color': currColor,
                'border-color'    : currColor
            })
        })
        $('#add-new-event').click(function (e) {
            e.preventDefault()
            //Get value and make sure it is not null
            var val = $('#new-event').val()
            if (val.length === 0) {
                return
            }

            //Create events
            var event = $('<div />')
            event.css({
                'background-color': currColor,
                'border-color'    : currColor,
                'color'           : '#fff'
            }).addClass('external-event')
            event.html(val)
            $('#external-events').prepend(event)

            //Add draggable funtionality
            ini_events(event)

            //Remove event from text input
            $('#new-event').val('')
        })
    })
</script>
<!-- Modal specific script -->
<script type="text/javascript">
    $('#classModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Turma ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })

    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        $('.swalDefaultSuccess').click(function() {
            Toast.fire({
                icon: 'success',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.swalDefaultInfo').click(function() {
            Toast.fire({
                icon: 'info',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.swalDefaultError').click(function() {
            Toast.fire({
                icon: 'error',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.swalDefaultWarning').click(function() {
            Toast.fire({
                icon: 'warning',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.swalDefaultQuestion').click(function() {
            Toast.fire({
                icon: 'question',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });

        $('.toastrDefaultSuccess').click(function() {
            toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultInfo').click(function() {
            toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultError').click(function() {
            toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultWarning').click(function() {
            toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });

        $('.toastsDefaultDefault').click(function() {
            $(document).Toasts('create', {
                title: 'Toast Title',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultTopLeft').click(function() {
            $(document).Toasts('create', {
                title: 'Toast Title',
                position: 'topLeft',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultBottomRight').click(function() {
            $(document).Toasts('create', {
                title: 'Toast Title',
                position: 'bottomRight',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultBottomLeft').click(function() {
            $(document).Toasts('create', {
                title: 'Toast Title',
                position: 'bottomLeft',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultAutohide').click(function() {
            $(document).Toasts('create', {
                title: 'Toast Title',
                autohide: true,
                delay: 750,
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultNotFixed').click(function() {
            $(document).Toasts('create', {
                title: 'Toast Title',
                fixed: false,
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultFull').click(function() {
            $(document).Toasts('create', {
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                icon: 'fas fa-envelope fa-lg',
            })
        });
        $('.toastsDefaultFullImage').click(function() {
            $(document).Toasts('create', {
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                image: '../../dist/img/user3-128x128.jpg',
                imageAlt: 'User Picture',
            })
        });
        $('.toastsDefaultSuccess').click(function() {
            $(document).Toasts('create', {
                class: 'bg-success',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultInfo').click(function() {
            $(document).Toasts('create', {
                class: 'bg-info',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultWarning').click(function() {
            $(document).Toasts('create', {
                class: 'bg-warning',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultDanger').click(function() {
            $(document).Toasts('create', {
                class: 'bg-danger',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultMaroon').click(function() {
            $(document).Toasts('create', {
                class: 'bg-maroon',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
    });

</script>
</body>
</html>