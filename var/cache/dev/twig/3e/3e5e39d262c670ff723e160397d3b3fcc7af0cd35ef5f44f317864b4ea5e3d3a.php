<?php

/* ::base.html.twig */
class __TwigTemplate_70f2ea4d9ba6befff2419e33e81e4263a6a39804101f8049eb9b3bfd1f26a548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ec48606ec92f56e457a72483212800677d58d433f8421a66120b7f0c70ca9df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec48606ec92f56e457a72483212800677d58d433f8421a66120b7f0c70ca9df->enter($__internal_1ec48606ec92f56e457a72483212800677d58d433f8421a66120b7f0c70ca9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_119d94e9accd9bba3b291c33bca7526d5d285a8f81c77fdf04a9c607a2264bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119d94e9accd9bba3b291c33bca7526d5d285a8f81c77fdf04a9c607a2264bda->enter($__internal_119d94e9accd9bba3b291c33bca7526d5d285a8f81c77fdf04a9c607a2264bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    <!-- Bootstrap 3.3.7 -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/custom.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/morris.js/morris.css"), "html", null, true);
        echo "\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jvectormap/jquery-jvectormap.css"), "html", null, true);
        echo "\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/timepicker/bootstrap-timepicker.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\">

    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
    <link href='https://fonts.googleapis.com/css?family=Italianno' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>

    <style>
        @CHARSET \"UTF-8\";
        .page-break {
            page-break-after: always;
            page-break-inside: avoid;
            clear:both;
        }
        .page-break-before {
            page-break-before: always;
            page-break-inside: avoid;
            clear:both;
        }
        .marRightS {
            margin-right: 100px;
        }
        .marRightC {
            margin-right: 50px;
        }

    </style>


    ";
        // line 77
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 78
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "\"/>

</head>
<body class=\"hold-transition skin-blue sidebar-mini\">

<div class=\"wrapper\">

    <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ul_homepage");
        echo "\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>UL</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\">
                <img class=\"pull-left hide\" style=\"width: 20%;height: 10%;margin-top: 8px;\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo_esag.jpg"), "html", null, true);
        echo "\">
                <b>UL </b>Diplôme
            </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>

            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class=\"dropdown user user-menu\">
                        ";
        // line 107
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 108
            echo "                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <img src=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/user.png"), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\">
                                <span class=\"hidden-xs\">";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo "</span>
                            </a>
                        ";
        }
        // line 113
        echo "                        <ul class=\"dropdown-menu\">
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                ";
        // line 116
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 117
            echo "                                    <div class=\"pull-right\">
                                        <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\LogoutUrlExtension')->getLogoutPath(), "html", null, true);
            echo "\" class=\"btn btn-danger btn-flat\">Déconnecter</a>
                                    </div>
                                ";
        } else {
            // line 121
            echo "                                    <div class=\"pull-right\">
                                        <a href=\"";
            // line 122
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" class=\"btn btn-primary btn-flat\">Se connecter</a>
                                    </div>
                                ";
        }
        // line 125
        echo "
                            </li>
                        </ul>

                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class=\"sidebar-menu\" id=\"sidebar-menu\" data-widget=\"tree\">
                <li class=\"header\">MENU</li>
                <li class=\"";
        // line 142
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "ul_homepage")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ul_homepage");
        echo "\">
                        <i class=\"fa fa-dashboard\"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>
                <li class=\"";
        // line 148
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "demande_add")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_add");
        echo "\">
                        <i class=\"fa fa-user\"></i>
                        <span>Enregistrer une demande</span>
                    </a>
                </li>
                <li class=\"";
        // line 154
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "demande_list")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_list");
        echo "\">
                        <i class=\"fa fa-list-ol\"></i>
                        <span>Liste des demandes</span>
                    </a>
                </li>
                <li class=\"";
        // line 160
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "demande_list_a_imprimer", 1 => "demande_tout_imprimer"))) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_list_a_imprimer");
        echo "\">
                        <i class=\"fa fa-print\"></i>
                        <span>Demandes à imprimer</span>
                    </a>
                </li>
                <li class=\"";
        // line 166
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "demande_list_imprimer")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_list_imprimer");
        echo "\">
                        <i class=\"fa fa-list\"></i>
                        <span>Demandes imprimées</span>
                    </a>
                </li>
                ";
        // line 172
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 173
            echo "                    <li class=\"";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "diplome_add")) {
                echo "active";
            }
            echo "\">
                        <a href=\"";
            // line 174
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("diplome_add");
            echo "\">
                            <i class=\"fa fa-paper-plane\"></i>
                            <span>Diplômes</span>
                        </a>
                    </li>
                    <li class=\"";
            // line 179
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "list_impression")) {
                echo "active";
            }
            echo "\">
                        <a href=\"";
            // line 180
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_impression");
            echo "\">
                            <i class=\"fa fa-print\"></i>
                            <span>Impressions</span>
                        </a>
                    </li>
                    <li class=\"";
            // line 185
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "configuration")) {
                echo "active";
            }
            echo "\">
                        <a href=\"";
            // line 186
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("configuration");
            echo "\">
                            <i class=\"fa fa-cogs\"></i>
                            <span>Réglages</span>
                        </a>
                    </li>
                    <li class=\"";
            // line 191
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "user_add")) {
                echo "active";
            }
            echo "\">
                        <a href=\"";
            // line 192
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_add");
            echo "\">
                            <i class=\"fa fa-users\"></i>
                            <span>Utilisateurs</span>
                        </a>
                    </li>
                ";
        }
        // line 198
        echo "            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\" id=\"ajax_content\">
        <!-- Content Header (Page header) -->
        ";
        // line 207
        $this->displayBlock('body', $context, $blocks);
        // line 209
        echo "        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; ";
        // line 216
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"#\">PALMARES TECHNOLOGIES.</a></strong> All rights
        reserved.
    </footer>

</div>


<!-- jQuery 3 -->
<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/select2/dist/js/i18n/fr.js"), "html", null, true);
        echo "\"></script>

<!-- DataTables -->
<script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- SlimScroll -->
<script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>

<!-- Morris.js charts -->
<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
<!-- Sparkline -->
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
<!-- jvectormap -->
<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery Knob Chart -->
<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-knob/dist/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
<!-- daterangepicker -->
<script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!-- datepicker -->
<script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.fr.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/timepicker/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
<!-- Slimscroll -->
<script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
<!-- FastClick -->
<script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jQuery.print.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/moment/moment.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/fullcalendar/dist/locale/fr.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
    \$(function () {
        \$('#datenaiss').datepicker({
            autoclose: true,
            orientation: \"bottom left\",
            'language': 'fr'
        });

        \$('#datepicker1').datepicker({
            autoclose: true,
            'language': 'fr'
        });

        \$('#datepicker2').datepicker({
            autoclose: true,
            'language': 'fr'
        });

        \$('#datepicker3').datepicker({
            autoclose: true,
            'language': 'fr'
        });

        \$('#datepicker4').datepicker({
            autoclose: true,
            'language': 'fr'
        });

        \$('.select2').select2();

        \$('#agent_id').select2({
            language: \"fr\"
        });

        \$('#example1').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : false,
            'info'        : true,
            'autoWidth'   : false,
            'language'   :  {
                'url': \"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("json/fr_FR.json"), "html", null, true);
        echo "\"
            }
        });
    });
</script>
<script type='text/javascript'>
    //<![CDATA[
    jQuery(function(\$) { 'use strict';
        \$(\"#btn_print\").on('click', function() {
            var btn_print = \$(this);
            btn_print.addClass('disabled');
            //Print ele4 with custom options
            \$(\"#html-2-pdfwrapper\").print({
                //Use Global styles
                globalStyles : true,
                //Add link with attrbute media=print
                mediaPrint : false,
                //Custom stylesheet
                stylesheet : \"http://fonts.googleapis.com/css?family=Inconsolata\",
                //Print in a hidden iframe
                iframe : false,
                //Don't print this
                noPrintSelector : \".avoid-this\",
                //Add this at top
                //prepend : \"Hello World!!!<br/>\",
                //Add this on bottom
                //append : \"<br/>Buh Bye!\",
                // Custom title
                title: null,
                // Custom document type
                doctype: '<!doctype html>',
                //Log to console when printing is done via a deffered callback
                deferred: \$.Deferred().done(function() { console.log('Printing done', arguments); })
            });

            var demandes_array = [];
            \$(\"p.demande\").each(function () {
                demandes_array.push(\$(this).data('id'));
            });

            \$.ajax({
                method: \"post\",
                url: \"";
        // line 366
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_imprimer_final");
        echo "\",
                data: {demandes : demandes_array},
                success: function (data) {
                    if(data.status === \"done\"){
                        btn_print.removeClass('disabled');
                    }
                    console.log(data);
                }
            })
        });
        // Fork https://github.com/sathvikp/jQuery.print for the full list of options
    });
    //]]>
</script>


";
        // line 382
        $this->displayBlock('javascripts', $context, $blocks);
        // line 383
        echo "</body>
</html>";
        
        $__internal_1ec48606ec92f56e457a72483212800677d58d433f8421a66120b7f0c70ca9df->leave($__internal_1ec48606ec92f56e457a72483212800677d58d433f8421a66120b7f0c70ca9df_prof);

        
        $__internal_119d94e9accd9bba3b291c33bca7526d5d285a8f81c77fdf04a9c607a2264bda->leave($__internal_119d94e9accd9bba3b291c33bca7526d5d285a8f81c77fdf04a9c607a2264bda_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e736b7776b7e5869de29a3b887cb15185ae3afa7f60edda61c58ba9b16d58bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e736b7776b7e5869de29a3b887cb15185ae3afa7f60edda61c58ba9b16d58bb2->enter($__internal_e736b7776b7e5869de29a3b887cb15185ae3afa7f60edda61c58ba9b16d58bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ef434adf97dae3d4cc21c53bc156124887db70f47f3cf474ae5cab8960b9994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef434adf97dae3d4cc21c53bc156124887db70f47f3cf474ae5cab8960b9994->enter($__internal_1ef434adf97dae3d4cc21c53bc156124887db70f47f3cf474ae5cab8960b9994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UL | Diplôme";
        
        $__internal_1ef434adf97dae3d4cc21c53bc156124887db70f47f3cf474ae5cab8960b9994->leave($__internal_1ef434adf97dae3d4cc21c53bc156124887db70f47f3cf474ae5cab8960b9994_prof);

        
        $__internal_e736b7776b7e5869de29a3b887cb15185ae3afa7f60edda61c58ba9b16d58bb2->leave($__internal_e736b7776b7e5869de29a3b887cb15185ae3afa7f60edda61c58ba9b16d58bb2_prof);

    }

    // line 77
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_269769933a52696daf86c8e6646fe7816c39aeaa58b717e7a7e95a56f2f5507b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_269769933a52696daf86c8e6646fe7816c39aeaa58b717e7a7e95a56f2f5507b->enter($__internal_269769933a52696daf86c8e6646fe7816c39aeaa58b717e7a7e95a56f2f5507b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_75e6f5f65ed231eeb5b157e85b767181e7bb569c647701db5dbedbdf3c4dfb3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e6f5f65ed231eeb5b157e85b767181e7bb569c647701db5dbedbdf3c4dfb3f->enter($__internal_75e6f5f65ed231eeb5b157e85b767181e7bb569c647701db5dbedbdf3c4dfb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_75e6f5f65ed231eeb5b157e85b767181e7bb569c647701db5dbedbdf3c4dfb3f->leave($__internal_75e6f5f65ed231eeb5b157e85b767181e7bb569c647701db5dbedbdf3c4dfb3f_prof);

        
        $__internal_269769933a52696daf86c8e6646fe7816c39aeaa58b717e7a7e95a56f2f5507b->leave($__internal_269769933a52696daf86c8e6646fe7816c39aeaa58b717e7a7e95a56f2f5507b_prof);

    }

    // line 207
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e32a53ac75bfe723521026bdb4f53dcfe7c539ec3bf9962b1e8801f62d84133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e32a53ac75bfe723521026bdb4f53dcfe7c539ec3bf9962b1e8801f62d84133->enter($__internal_4e32a53ac75bfe723521026bdb4f53dcfe7c539ec3bf9962b1e8801f62d84133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_112b7608a4f963559982c795c89e301649eeb7d7321080a5639aa5d3ff2477ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112b7608a4f963559982c795c89e301649eeb7d7321080a5639aa5d3ff2477ab->enter($__internal_112b7608a4f963559982c795c89e301649eeb7d7321080a5639aa5d3ff2477ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 208
        echo "        ";
        
        $__internal_112b7608a4f963559982c795c89e301649eeb7d7321080a5639aa5d3ff2477ab->leave($__internal_112b7608a4f963559982c795c89e301649eeb7d7321080a5639aa5d3ff2477ab_prof);

        
        $__internal_4e32a53ac75bfe723521026bdb4f53dcfe7c539ec3bf9962b1e8801f62d84133->leave($__internal_4e32a53ac75bfe723521026bdb4f53dcfe7c539ec3bf9962b1e8801f62d84133_prof);

    }

    // line 382
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5754be3397a1370539e161d83ab6ce312ca8c21d9797a5eb60b4910af07835de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5754be3397a1370539e161d83ab6ce312ca8c21d9797a5eb60b4910af07835de->enter($__internal_5754be3397a1370539e161d83ab6ce312ca8c21d9797a5eb60b4910af07835de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bbd41994661e132e1f486eebd169bf64416736a29353607ec4108f9978443655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd41994661e132e1f486eebd169bf64416736a29353607ec4108f9978443655->enter($__internal_bbd41994661e132e1f486eebd169bf64416736a29353607ec4108f9978443655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bbd41994661e132e1f486eebd169bf64416736a29353607ec4108f9978443655->leave($__internal_bbd41994661e132e1f486eebd169bf64416736a29353607ec4108f9978443655_prof);

        
        $__internal_5754be3397a1370539e161d83ab6ce312ca8c21d9797a5eb60b4910af07835de->leave($__internal_5754be3397a1370539e161d83ab6ce312ca8c21d9797a5eb60b4910af07835de_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  732 => 382,  722 => 208,  713 => 207,  696 => 77,  678 => 5,  667 => 383,  665 => 382,  646 => 366,  601 => 324,  554 => 280,  549 => 278,  544 => 276,  539 => 274,  534 => 272,  529 => 270,  524 => 268,  519 => 266,  514 => 264,  509 => 262,  504 => 260,  499 => 258,  494 => 256,  490 => 255,  485 => 253,  480 => 251,  476 => 250,  471 => 248,  466 => 246,  462 => 245,  456 => 242,  450 => 239,  446 => 238,  440 => 235,  436 => 234,  431 => 232,  422 => 226,  417 => 224,  406 => 216,  397 => 209,  395 => 207,  384 => 198,  375 => 192,  369 => 191,  361 => 186,  355 => 185,  347 => 180,  341 => 179,  333 => 174,  326 => 173,  324 => 172,  316 => 167,  310 => 166,  302 => 161,  296 => 160,  288 => 155,  282 => 154,  274 => 149,  268 => 148,  260 => 143,  254 => 142,  235 => 125,  229 => 122,  226 => 121,  220 => 118,  217 => 117,  215 => 116,  210 => 113,  202 => 110,  198 => 109,  195 => 108,  193 => 107,  175 => 92,  167 => 87,  154 => 78,  152 => 77,  112 => 40,  107 => 38,  101 => 35,  96 => 33,  91 => 31,  86 => 29,  81 => 27,  76 => 25,  70 => 22,  65 => 20,  60 => 18,  55 => 16,  50 => 14,  44 => 11,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}UL | Diplôme{% endblock %}</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    <!-- Bootstrap 3.3.7 -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}\">

    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('/css/custom.css') }}\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('dist/css/AdminLTE.min.css') }}\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"{{ asset('dist/css/skins/_all-skins.min.css') }}\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/morris.js/morris.css') }}\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('plugins/timepicker/bootstrap-timepicker.min.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/select2/dist/css/select2.min.css') }}\">

    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}\">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
    <link href='https://fonts.googleapis.com/css?family=Italianno' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>

    <style>
        @CHARSET \"UTF-8\";
        .page-break {
            page-break-after: always;
            page-break-inside: avoid;
            clear:both;
        }
        .page-break-before {
            page-break-before: always;
            page-break-inside: avoid;
            clear:both;
        }
        .marRightS {
            margin-right: 100px;
        }
        .marRightC {
            margin-right: 50px;
        }

    </style>


    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('') }}\"/>

</head>
<body class=\"hold-transition skin-blue sidebar-mini\">

<div class=\"wrapper\">

    <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"{{ path('ul_homepage') }}\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>UL</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\">
                <img class=\"pull-left hide\" style=\"width: 20%;height: 10%;margin-top: 8px;\" src=\"{{ asset('img/logo_esag.jpg') }}\">
                <b>UL </b>Diplôme
            </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>

            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class=\"dropdown user user-menu\">
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <img src=\"{{ asset('img/user.png') }}\" class=\"user-image\" alt=\"User Image\">
                                <span class=\"hidden-xs\">{{ app.user.nom }} {{ app.user.prenom }}</span>
                            </a>
                        {% endif %}
                        <ul class=\"dropdown-menu\">
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                    <div class=\"pull-right\">
                                        <a href=\"{{ logout_path() }}\" class=\"btn btn-danger btn-flat\">Déconnecter</a>
                                    </div>
                                {% else %}
                                    <div class=\"pull-right\">
                                        <a href=\"{{ path('login') }}\" class=\"btn btn-primary btn-flat\">Se connecter</a>
                                    </div>
                                {% endif %}

                            </li>
                        </ul>

                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class=\"sidebar-menu\" id=\"sidebar-menu\" data-widget=\"tree\">
                <li class=\"header\">MENU</li>
                <li class=\"{% if app.request.get('_route') == 'ul_homepage' %}active{% endif %}\">
                    <a href=\"{{ path('ul_homepage') }}\">
                        <i class=\"fa fa-dashboard\"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>
                <li class=\"{% if app.request.get('_route') == 'demande_add' %}active{% endif %}\">
                    <a href=\"{{ path('demande_add') }}\">
                        <i class=\"fa fa-user\"></i>
                        <span>Enregistrer une demande</span>
                    </a>
                </li>
                <li class=\"{% if app.request.get('_route') == 'demande_list' %}active{% endif %}\">
                    <a href=\"{{ path('demande_list') }}\">
                        <i class=\"fa fa-list-ol\"></i>
                        <span>Liste des demandes</span>
                    </a>
                </li>
                <li class=\"{% if app.request.get('_route') in ['demande_list_a_imprimer', 'demande_tout_imprimer'] %}active{% endif %}\">
                    <a href=\"{{ path('demande_list_a_imprimer') }}\">
                        <i class=\"fa fa-print\"></i>
                        <span>Demandes à imprimer</span>
                    </a>
                </li>
                <li class=\"{% if app.request.get('_route') == 'demande_list_imprimer' %}active{% endif %}\">
                    <a href=\"{{ path('demande_list_imprimer') }}\">
                        <i class=\"fa fa-list\"></i>
                        <span>Demandes imprimées</span>
                    </a>
                </li>
                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"{% if app.request.get('_route') == 'diplome_add' %}active{% endif %}\">
                        <a href=\"{{ path('diplome_add') }}\">
                            <i class=\"fa fa-paper-plane\"></i>
                            <span>Diplômes</span>
                        </a>
                    </li>
                    <li class=\"{% if app.request.get('_route') == 'list_impression' %}active{% endif %}\">
                        <a href=\"{{ path('list_impression') }}\">
                            <i class=\"fa fa-print\"></i>
                            <span>Impressions</span>
                        </a>
                    </li>
                    <li class=\"{% if app.request.get('_route') == 'configuration' %}active{% endif %}\">
                        <a href=\"{{ path('configuration') }}\">
                            <i class=\"fa fa-cogs\"></i>
                            <span>Réglages</span>
                        </a>
                    </li>
                    <li class=\"{% if app.request.get('_route') == 'user_add' %}active{% endif %}\">
                        <a href=\"{{ path('user_add') }}\">
                            <i class=\"fa fa-users\"></i>
                            <span>Utilisateurs</span>
                        </a>
                    </li>
                {% endif %}
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\" id=\"ajax_content\">
        <!-- Content Header (Page header) -->
        {% block body %}
        {% endblock %}
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; {{ 'now' | date('Y') }} <a href=\"#\">PALMARES TECHNOLOGIES.</a></strong> All rights
        reserved.
    </footer>

</div>


<!-- jQuery 3 -->
<script src=\"{{ asset('bower_components/jquery/dist/jquery.min.js') }}\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"{{ asset('bower_components/jquery-ui/jquery-ui.min.js') }}\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src=\"{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}\"></script>

<script src=\"{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}\"></script>
<script src=\"{{ asset('bower_components/select2/dist/js/i18n/fr.js') }}\"></script>

<!-- DataTables -->
<script src=\"{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}\"></script>

<!-- SlimScroll -->
<script src=\"{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}\"></script>

<!-- Morris.js charts -->
<script src=\"{{ asset('bower_components/raphael/raphael.min.js') }}\"></script>
<script src=\"{{ asset('bower_components/morris.js/morris.min.js') }}\"></script>
<!-- Sparkline -->
<script src=\"{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}\"></script>
<!-- jvectormap -->
<script src=\"{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}\"></script>
<script src=\"{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}\"></script>
<!-- jQuery Knob Chart -->
<script src=\"{{ asset('bower_components/jquery-knob/dist/jquery.knob.min.js') }}\"></script>
<!-- daterangepicker -->
<script src=\"{{ asset('bower_components/moment/min/moment.min.js') }}\"></script>
<script src=\"{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>
<!-- datepicker -->
<script src=\"{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}\"></script>

<script src=\"{{ asset('bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.fr.min.js') }}\"></script>

<script src=\"{{ asset('plugins/timepicker/bootstrap-timepicker.min.js') }}\"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=\"{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}\"></script>
<!-- Slimscroll -->
<script src=\"{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}\"></script>
<!-- FastClick -->
<script src=\"{{ asset('bower_components/fastclick/lib/fastclick.js') }}\"></script>
<!-- AdminLTE App -->
<script src=\"{{ asset('dist/js/adminlte.min.js') }}\"></script>

<script src=\"{{ asset('js/custom.js') }}\"></script>

<script src=\"{{ asset('js/jQuery.print.js') }}\"></script>

<script src=\"{{ asset('bower_components/moment/moment.js') }}\"></script>

<script src=\"{{ asset('bower_components/fullcalendar/dist/fullcalendar.min.js') }}\"></script>

<script src=\"{{ asset('bower_components/fullcalendar/dist/locale/fr.js') }}\"></script>

<script type=\"text/javascript\">
    \$(function () {
        \$('#datenaiss').datepicker({
            autoclose: true,
            orientation: \"bottom left\",
            'language': 'fr'
        });

        \$('#datepicker1').datepicker({
            autoclose: true,
            'language': 'fr'
        });

        \$('#datepicker2').datepicker({
            autoclose: true,
            'language': 'fr'
        });

        \$('#datepicker3').datepicker({
            autoclose: true,
            'language': 'fr'
        });

        \$('#datepicker4').datepicker({
            autoclose: true,
            'language': 'fr'
        });

        \$('.select2').select2();

        \$('#agent_id').select2({
            language: \"fr\"
        });

        \$('#example1').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : false,
            'info'        : true,
            'autoWidth'   : false,
            'language'   :  {
                'url': \"{{ asset('json/fr_FR.json') }}\"
            }
        });
    });
</script>
<script type='text/javascript'>
    //<![CDATA[
    jQuery(function(\$) { 'use strict';
        \$(\"#btn_print\").on('click', function() {
            var btn_print = \$(this);
            btn_print.addClass('disabled');
            //Print ele4 with custom options
            \$(\"#html-2-pdfwrapper\").print({
                //Use Global styles
                globalStyles : true,
                //Add link with attrbute media=print
                mediaPrint : false,
                //Custom stylesheet
                stylesheet : \"http://fonts.googleapis.com/css?family=Inconsolata\",
                //Print in a hidden iframe
                iframe : false,
                //Don't print this
                noPrintSelector : \".avoid-this\",
                //Add this at top
                //prepend : \"Hello World!!!<br/>\",
                //Add this on bottom
                //append : \"<br/>Buh Bye!\",
                // Custom title
                title: null,
                // Custom document type
                doctype: '<!doctype html>',
                //Log to console when printing is done via a deffered callback
                deferred: \$.Deferred().done(function() { console.log('Printing done', arguments); })
            });

            var demandes_array = [];
            \$(\"p.demande\").each(function () {
                demandes_array.push(\$(this).data('id'));
            });

            \$.ajax({
                method: \"post\",
                url: \"{{ path('demande_imprimer_final') }}\",
                data: {demandes : demandes_array},
                success: function (data) {
                    if(data.status === \"done\"){
                        btn_print.removeClass('disabled');
                    }
                    console.log(data);
                }
            })
        });
        // Fork https://github.com/sathvikp/jQuery.print for the full list of options
    });
    //]]>
</script>


{% block javascripts %}{% endblock %}
</body>
</html>", "::base.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/app/Resources/views/base.html.twig");
    }
}
