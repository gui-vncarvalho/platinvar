<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?= $head; ?>

    <!-- CORE STYLES -->
    <link rel="stylesheet" href="<?= asset("/dist/css/adminlte.min.css"); ?>"/>
    <link rel="stylesheet" href="<?= asset("/plugins/fontawesome-free/css/all.min.css"); ?>"/>

    <!-- fullCalendar -->
    <link rel="stylesheet" href="<?= asset("/plugins/fullcalendar/main.min.css"); ?>">
    <link rel="stylesheet" href="<?= asset("/plugins/fullcalendar-daygrid/main.min.css"); ?>">
    <link rel="stylesheet" href="<?= asset("/plugins/fullcalendar-timegrid/main.min.css"); ?>">
    <link rel="stylesheet" href="<?= asset("/plugins/fullcalendar-bootstrap/main.min.css"); ?>">

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
                <a href="<?= $router->route("app.admin"); ?>" class="nav-link">Home</a>
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
        <a href="<?= $router->route("app.admin"); ?>" class="brand-link">
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
                    <a href="<?= $router->route("app.admin"); ?>" class="d-block"><?= $user->first_name; ?> <?= $user->last_name; ?></a>
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
                                <a href="<?= $router->route("app.admin"); ?>" class="nav-link">
                                    <i class="fab fa-wpforms nav-icon"></i>
                                    <p>Formulários</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= $router->route("app.tables"); ?>" class="nav-link">
                                    <i class="fas fa-chalkboard-teacher nav-icon"></i>
                                    <p>Registros</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://drive.google.com/drive/folders/0B9lMZ0ZNhFPhfmlQYmdpQXJVeW9CSXo2NjAxeklXVGpjSzFuOThiWVJvTnA1b3hZZ1FieGs?usp=sharing" class="nav-link">
                                    <i class="fas fa-boxes nav-icon"></i>
                                    <p>Materiais</p>
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
                        <a href="#" class="nav-link">
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
<?= $v->section("scripts"); ?>

<!-- jQuery -->
<script src="<?= asset("/plugins/jquery/jquery.min.js"); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= asset("/plugins/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= asset("/dist/js/adminlte.min.js"); ?>"></script>
<!-- jQuery UI -->
<script src="<?= asset("/plugins/jquery-ui/jquery-ui.min.js"); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= asset("/dist/js/demo.js"); ?>"></script>
<!-- ChartJS -->
<script src="<?= asset("/plugins/chart.js/Chart.min.js"); ?>"></script>
<script>
    $(function () {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

        var areaChartData = {
            labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [
                {
                    label               : 'Digital Goods',
                    backgroundColor     : 'rgba(60,141,188,0.9)',
                    borderColor         : 'rgba(60,141,188,0.8)',
                    pointRadius          : false,
                    pointColor          : '#3b8bba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : [28, 48, 40, 19, 86, 27, 90]
                },
                {
                    label               : 'Electronics',
                    backgroundColor     : 'rgba(210, 214, 222, 1)',
                    borderColor         : 'rgba(210, 214, 222, 1)',
                    pointRadius         : false,
                    pointColor          : 'rgba(210, 214, 222, 1)',
                    pointStrokeColor    : '#c1c7d1',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data                : [65, 59, 80, 81, 56, 55, 40]
                },
            ]
        }

        var areaChartOptions = {
            maintainAspectRatio : false,
            responsive : true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines : {
                        display : false,
                    }
                }],
                yAxes: [{
                    gridLines : {
                        display : false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart       = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //-------------
        //- LINE CHART -
        //--------------
        var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
        var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
        var lineChartData = jQuery.extend(true, {}, areaChartData)
        lineChartData.datasets[0].fill = false;
        lineChartData.datasets[1].fill = false;
        lineChartOptions.datasetFill = false

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData        = {
            labels: [
                'Professores',
                'Alunos',
                'Administradores',
                'Secretaria',
            ],
            datasets: [
                {
                    data: [3,2,1,1],
                    backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                }
            ]
        }
        var donutOptions     = {
            maintainAspectRatio : false,
            responsive : true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var donutChart = new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData        = donutData;
        var pieOptions     = {
            maintainAspectRatio : false,
            responsive : true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })

        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = jQuery.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive              : true,
            maintainAspectRatio     : false,
            datasetFill             : false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //---------------------
        //- STACKED BAR CHART -
        //---------------------
        var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
        var stackedBarChartData = jQuery.extend(true, {}, barChartData)

        var stackedBarChartOptions = {
            responsive              : true,
            maintainAspectRatio     : false,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }

        var stackedBarChart = new Chart(stackedBarChartCanvas, {
            type: 'bar',
            data: stackedBarChartData,
            options: stackedBarChartOptions
        })
    })
</script>

</body>
</html>
