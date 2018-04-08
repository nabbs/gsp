<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>
        <?php echo $this->fetch('title'); ?>
    </title>
    <link rel="shortcut icon" href="/app/webroot/img/favicon.ico">
    <?php

    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('jquery-ui.min');

    if ($this->params['controller'] === 'pages') {
        echo $this->Html->css('style');
        echo $this->Html->css('header');
        echo $this->Html->css('footer');
        echo $this->Html->css('default');
        echo $this->Html->css('owl.carousel.min');
        //        echo $this->Html->css('owl.theme.default.min');
        echo $this->Html->css('responsive');
        echo $this->Html->css('meanmenu.min');
        echo $this->Html->css('animated-headlines');
        if ($this->params['action'] !== 'search') {
            echo $this->Html->css('animate');
            echo $this->Html->css('style2');
        }
    } else {
        echo $this->Html->css('AdminLTE.min');
        echo $this->Html->css('skin-blue.min');
        echo $this->Html->css('font-awesome.min');
        echo $this->Html->css('ionicons.min');
        echo $this->Html->css('jquery-jvectormap');

        //        echo $this->Html->script('adminlte.min');
        //        echo $this->Html->script('dashboard2');
    }
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
    <script src="/app/webroot/js/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/app/webroot/js/modernizr-2.8.3.min.js"></script>
    <script src="/app/webroot/js/owl.carousel.min.js"></script>
    <script src="/app/webroot/js/jquery.nivo.slider.js"></script>
    <script src="/app/webroot/js/slick.min.js"></script>
    <script src="/app/webroot/js/style-customizer.js"></script>
    <script src="/app/webroot/js/waypoints.min.js"></script>
    <script src="/app/webroot/js/plugins.js"></script>
    <script src="/app/webroot/js/main.js"></script>
    <script src="/app/webroot/js/wow.min.js"></script>
    <script src="/app/webroot/js/jquery.mixitup.js"></script>
    <?php if ($this->params['controller'] === 'panel') { ?>
        <script src="/app/webroot/js/adminlte.min.js"></script>
        <script src="/app/webroot/js/dashboard2.js"></script>
        <script src="/app/webroot/js/Chart.js"></script>
        <script src="/app/webroot/js/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="/app/webroot/js/jquery-jvectormap-world-mill-en.js"></script>
        <script src="/app/webroot/js/moment/moment.js"></script>
        <script src="/app/webroot/js/fullcalendar/dist/fullcalendar.min.js"></script>
        <script src="/app/webroot/js/fullcalendar/dist/locale-all.js"></script>
        <link rel="stylesheet" href="/app/webroot/js/fullcalendar/dist/fullcalendar.css" />
    <? } else { ?>
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <? } ?>


    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
</head>
<body <?php if ($this->params['controller'] === 'panel') {
    echo 'class="hold-transition skin-blue sidebar-mini';
    if ($_SERVER['REQUEST_URI'] === '/panel/login') {
        echo ' login_bg';
    }
    echo '"';
} ?> >

<?php if ($this->params['controller'] === 'panel') { ?>
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <div class="wrapper <? echo ($_SERVER['REQUEST_URI'] === '/panel/login') ? 'login_bg' : ''; ?>">
        <? if (($this->request->params['controller'] === 'panel') && ($_SERVER['REQUEST_URI'] !== '/panel/login') && ($_SERVER['REQUEST_URI'] !== '/panel/register')) {
            echo $this->element('panel_header');
            echo $this->element('panel_sidebar');
        }
        echo $this->fetch('content');
        if (($this->request->params['controller'] === 'panel') && ($_SERVER['REQUEST_URI'] !== '/panel/login') && ($_SERVER['REQUEST_URI'] !== '/panel/register')) {
            echo $this->element('panel_footer');
        }
        ?>
    </div>
<? } else { ?>
    <div class="wrapper bg-white fix wide-layout">
        <div class="bg-white">
            <?php if ($this->params['controller'] === 'pages') {
                echo $this->element('header');
                if ($this->params['action'] === 'home') {
                    echo $this->Element('preloader');
                }
            } else {
                echo $this->element('panel_header');
            }

            echo $this->fetch('content');

            if ($this->params['controller'] === 'pages') {
                echo $this->element('footer');
            } ?>
        </div>
    </div>
<? } ?>


<!-- page name: <? echo $this->params['action']?> -->
</body>
</html>
