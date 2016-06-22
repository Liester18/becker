<?php

/* layout.html.twig */
class __TwigTemplate_8f96513994da40e9ec71a019002689ae9399baf988ed65192fe9ec06c2676f94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 2);
        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'stylesheets_layout' => array($this, 'block_stylesheets_layout'),
            'stylesheets_page' => array($this, 'block_stylesheets_page'),
            'js_head' => array($this, 'block_js_head'),
            'js_head_layout' => array($this, 'block_js_head_layout'),
            'js_head_page' => array($this, 'block_js_head_page'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'maincontainer' => array($this, 'block_maincontainer'),
            'nav_list' => array($this, 'block_nav_list'),
            'reportfilters' => array($this, 'block_reportfilters'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_layout1' => array($this, 'block_javascripts_layout1'),
            'javascripts_page' => array($this, 'block_javascripts_page'),
            'javascripts_layout2' => array($this, 'block_javascripts_layout2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fe836a87a4543af57947479b8088f75f0985882720dcfd90a41d58119995182 = $this->env->getExtension("native_profiler");
        $__internal_9fe836a87a4543af57947479b8088f75f0985882720dcfd90a41d58119995182->enter($__internal_9fe836a87a4543af57947479b8088f75f0985882720dcfd90a41d58119995182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fe836a87a4543af57947479b8088f75f0985882720dcfd90a41d58119995182->leave($__internal_9fe836a87a4543af57947479b8088f75f0985882720dcfd90a41d58119995182_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        $__internal_aa662648fb1f82455312c6cd944fc3c64691502fcf78797cf3a946f75ca85a22 = $this->env->getExtension("native_profiler");
        $__internal_aa662648fb1f82455312c6cd944fc3c64691502fcf78797cf3a946f75ca85a22->enter($__internal_aa662648fb1f82455312c6cd944fc3c64691502fcf78797cf3a946f75ca85a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        echo " 
    <meta name=\"description\" content=\"\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Consultorio Daniel Becker</title>
    <script src='";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery-2.0.3.min.js"), "html", null, true);
        echo "'></script>
    <!--<script src=\"";
        // line 10
        echo "\"></script>-->

";
        
        $__internal_aa662648fb1f82455312c6cd944fc3c64691502fcf78797cf3a946f75ca85a22->leave($__internal_aa662648fb1f82455312c6cd944fc3c64691502fcf78797cf3a946f75ca85a22_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d2350b9ef3a42ca35cd497f0af663064a84296b7a6e73945df29bce42fea7a3 = $this->env->getExtension("native_profiler");
        $__internal_0d2350b9ef3a42ca35cd497f0af663064a84296b7a6e73945df29bce42fea7a3->enter($__internal_0d2350b9ef3a42ca35cd497f0af663064a84296b7a6e73945df29bce42fea7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "    ";
        // line 17
        echo "    ";
        $this->displayBlock('stylesheets_layout', $context, $blocks);
        // line 46
        echo "   
    ";
        // line 48
        $this->displayBlock('stylesheets_page', $context, $blocks);
        
        $__internal_0d2350b9ef3a42ca35cd497f0af663064a84296b7a6e73945df29bce42fea7a3->leave($__internal_0d2350b9ef3a42ca35cd497f0af663064a84296b7a6e73945df29bce42fea7a3_prof);

    }

    // line 17
    public function block_stylesheets_layout($context, array $blocks = array())
    {
        $__internal_89864ad517ca166b819c8e40b3170636fc42caf89d23dfd911d716d1071bccee = $this->env->getExtension("native_profiler");
        $__internal_89864ad517ca166b819c8e40b3170636fc42caf89d23dfd911d716d1071bccee->enter($__internal_89864ad517ca166b819c8e40b3170636fc42caf89d23dfd911d716d1071bccee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_layout"));

        // line 18
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

<!--<link rel=\"stylesheet\" href=\"";
        // line 22
        echo "\" />-->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/chosen.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/datepicker.css"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/_other.utils.css"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/ace-fonts.css"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/ace.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/ace-skins.min.css"), "html", null, true);
        echo "\" />


        ";
        // line 36
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/jquery.gritter.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/select2.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/bootstrap-editable.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/bootstrap-timepicker.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/daterangepicker.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/colorpicker.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/buttons.dataTables.min.css"), "html", null, true);
        echo "\" />

    ";
        
        $__internal_89864ad517ca166b819c8e40b3170636fc42caf89d23dfd911d716d1071bccee->leave($__internal_89864ad517ca166b819c8e40b3170636fc42caf89d23dfd911d716d1071bccee_prof);

    }

    // line 48
    public function block_stylesheets_page($context, array $blocks = array())
    {
        $__internal_af36aa44e86735559ee905976aa1f7bb3c4fc695abe4f6b846a685b75abfa6ef = $this->env->getExtension("native_profiler");
        $__internal_af36aa44e86735559ee905976aa1f7bb3c4fc695abe4f6b846a685b75abfa6ef->enter($__internal_af36aa44e86735559ee905976aa1f7bb3c4fc695abe4f6b846a685b75abfa6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_page"));

        
        $__internal_af36aa44e86735559ee905976aa1f7bb3c4fc695abe4f6b846a685b75abfa6ef->leave($__internal_af36aa44e86735559ee905976aa1f7bb3c4fc695abe4f6b846a685b75abfa6ef_prof);

    }

    // line 52
    public function block_js_head($context, array $blocks = array())
    {
        $__internal_14e887edf3f549447bc52ef81f61eddaa6462e955ed79eb6f62fed0b09d8c7bb = $this->env->getExtension("native_profiler");
        $__internal_14e887edf3f549447bc52ef81f61eddaa6462e955ed79eb6f62fed0b09d8c7bb->enter($__internal_14e887edf3f549447bc52ef81f61eddaa6462e955ed79eb6f62fed0b09d8c7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_head"));

        // line 53
        echo "    ";
        // line 54
        echo "    ";
        $this->displayBlock('js_head_layout', $context, $blocks);
        // line 56
        echo "  
    ";
        // line 58
        $this->displayBlock('js_head_page', $context, $blocks);
        
        $__internal_14e887edf3f549447bc52ef81f61eddaa6462e955ed79eb6f62fed0b09d8c7bb->leave($__internal_14e887edf3f549447bc52ef81f61eddaa6462e955ed79eb6f62fed0b09d8c7bb_prof);

    }

    // line 54
    public function block_js_head_layout($context, array $blocks = array())
    {
        $__internal_ef4e95a654beb9b63119ea53357433e8903763323b429a68c461c7dec09d76a8 = $this->env->getExtension("native_profiler");
        $__internal_ef4e95a654beb9b63119ea53357433e8903763323b429a68c461c7dec09d76a8->enter($__internal_ef4e95a654beb9b63119ea53357433e8903763323b429a68c461c7dec09d76a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_head_layout"));

        // line 55
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_ef4e95a654beb9b63119ea53357433e8903763323b429a68c461c7dec09d76a8->leave($__internal_ef4e95a654beb9b63119ea53357433e8903763323b429a68c461c7dec09d76a8_prof);

    }

    // line 58
    public function block_js_head_page($context, array $blocks = array())
    {
        $__internal_e12c6e9f4d2c6e48b46f233d8863af0099b8762da06ee1ba1b6df827da1799f7 = $this->env->getExtension("native_profiler");
        $__internal_e12c6e9f4d2c6e48b46f233d8863af0099b8762da06ee1ba1b6df827da1799f7->enter($__internal_e12c6e9f4d2c6e48b46f233d8863af0099b8762da06ee1ba1b6df827da1799f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_head_page"));

        
        $__internal_e12c6e9f4d2c6e48b46f233d8863af0099b8762da06ee1ba1b6df827da1799f7->leave($__internal_e12c6e9f4d2c6e48b46f233d8863af0099b8762da06ee1ba1b6df827da1799f7_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_d53c665f2028a624ee39171d9d707ab4bbf3ad2d699a03b1322c470404f6b1fb = $this->env->getExtension("native_profiler");
        $__internal_d53c665f2028a624ee39171d9d707ab4bbf3ad2d699a03b1322c470404f6b1fb->enter($__internal_d53c665f2028a624ee39171d9d707ab4bbf3ad2d699a03b1322c470404f6b1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 63
        echo "    ";
        // line 64
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 132
        echo "    ";
        // line 133
        echo "    ";
        $this->displayBlock('maincontainer', $context, $blocks);
        
        $__internal_d53c665f2028a624ee39171d9d707ab4bbf3ad2d699a03b1322c470404f6b1fb->leave($__internal_d53c665f2028a624ee39171d9d707ab4bbf3ad2d699a03b1322c470404f6b1fb_prof);

    }

    // line 64
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_6a1989ee4cfe8464cdc3e8660752c5a71de6c63937bb3b8b97dfddccb7e59f10 = $this->env->getExtension("native_profiler");
        $__internal_6a1989ee4cfe8464cdc3e8660752c5a71de6c63937bb3b8b97dfddccb7e59f10->enter($__internal_6a1989ee4cfe8464cdc3e8660752c5a71de6c63937bb3b8b97dfddccb7e59f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 65
        echo "        <div class=\"navbar navbar-default\" id=\"navbar\">
            <script type=\"text/javascript\">
                try {
                    ace.settings.check('navbar', 'fixed')
                } catch (e) {
                }
            </script>

            <div class=\"navbar-container\" id=\"navbar-container\">
                <div class=\"navbar-header pull-left\">
                    <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\" class=\"navbar-brand\">
                        <small>
                            <i class=\"icon-leaf\"></i>&nbsp;&nbsp;
                            Consultorio Daniel Becker
                        </small>
                    </a><!-- /.brand -->
                </div><!-- /.navbar-header -->

                <div class=\"navbar-header pull-right\" role=\"navigation\">
                    <input type=\"hidden\" id=\"url\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "BaseUrl", array()), "html", null, true);
        echo "\" >
                    <ul class=\"nav ace-nav\">

                        <li class=\"light-blue\">
                            <a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
                                <!--<img class=\"nav-user-photo\" src=\"";
        // line 89
        echo "\" />-->
                                <!--<img class=\"nav-user-photo\" placeholder=\"Sssefefer\"/>-->
                                <span class=\"user-info\">
                                    <small>Usuário,</small>
                                    ";
        // line 93
        if (($this->env->getExtension('security')->isGranted("ROLE_MEDICO") || $this->env->getExtension('security')->isGranted("ROLE_SECRETARIA"))) {
            // line 94
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
            echo "
                                    ";
        }
        // line 96
        echo "                                </span>

                                <i class=\"icon-caret-down\"></i>
                            </a>

                            <ul class=\"user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">
                                <!-- <li>
                                     <a href=\"#\">
                                         <i class=\"icon-leaf\"></i>
                                         Crear Ficha Médica
                                     </a>
                                 </li>-->
                                ";
        // line 108
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "rol", array()), "id", array()) == 1)) {
            // line 109
            echo "                                <li>
                                    <a href=\"";
            // line 110
            echo $this->env->getExtension('routing')->getPath("to_register");
            echo "\">
                                        <i class=\"icon-user\"></i>
                                        Novo Usuario
                                    </a>
                                </li>
                                ";
        }
        // line 116
        echo "
                                <li class=\"divider\"></li>

                                <li>
                                    <a href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("user_logout");
        echo "\">
                                        <i class=\"icon-off\"></i>
                                        Salir
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- /.ace-nav -->
                </div><!-- /.navbar-header -->
            </div><!-- /.container -->
        </div>
    ";
        
        $__internal_6a1989ee4cfe8464cdc3e8660752c5a71de6c63937bb3b8b97dfddccb7e59f10->leave($__internal_6a1989ee4cfe8464cdc3e8660752c5a71de6c63937bb3b8b97dfddccb7e59f10_prof);

    }

    // line 133
    public function block_maincontainer($context, array $blocks = array())
    {
        $__internal_f804a3f4f18b0dcbba5a2d895755cf62b3c9ebddc2a7d161b0f56c269f0d2360 = $this->env->getExtension("native_profiler");
        $__internal_f804a3f4f18b0dcbba5a2d895755cf62b3c9ebddc2a7d161b0f56c269f0d2360->enter($__internal_f804a3f4f18b0dcbba5a2d895755cf62b3c9ebddc2a7d161b0f56c269f0d2360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontainer"));

        // line 134
        echo "        <div class=\"main-container\" id=\"main-container\">
            <script type=\"text/javascript\">
                try {
                    ace.settings.check('main-container', 'fixed')
                } catch (e) {
                }
            </script>

            <div class=\"main-container-inner\">
                <a class=\"menu-toggler\" id=\"menu-toggler\" href=\"#\">
                    <span class=\"menu-text\"></span>
                </a>

                <div class=\"sidebar\" id=\"sidebar\">
                    <script type=\"text/javascript\">
                        try {
                            ace.settings.check('sidebar', 'fixed')
                        } catch (e) {
                        }
                    </script>                    

                    ";
        // line 155
        $this->displayBlock('nav_list', $context, $blocks);
        // line 205
        echo "

                    <script type=\"text/javascript\">
                        try {
                            ace.settings.check('sidebar', 'collapsed')
                        } catch (e) {
                        }
                    </script>
                </div>

                <div class=\"main-content\">

                    <div class=\"breadcrumbs\" id=\"breadcrumbs\">
                        <script type=\"text/javascript\">
                            try {
                                ace.settings.check('breadcrumbs', 'fixed')
                            } catch (e) {
                            }
                        </script>

                        <ul class=\"breadcrumb\">
                            <li>
                                <i class=
                                   \"icon-home home-icon\">
                                </i>
                                <a href=\"";
        // line 230
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\">Home</a>
                            </li>
                        </ul>               
                    </div>

                    <div class=\"page-content\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 my-body\">
                                <!-- PAGE CONTENT BEGINS -->

                            ";
        // line 240
        $this->displayBlock('page_content', $context, $blocks);
        // line 241
        echo "
                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div><!-- /.main-content -->                                
        </div><!-- /.main-container-inner -->

        <a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
            <i class=\"icon-double-angle-up icon-only bigger-110\"></i>
        </a>
    </div><!-- /.main-container -->
";
        
        $__internal_f804a3f4f18b0dcbba5a2d895755cf62b3c9ebddc2a7d161b0f56c269f0d2360->leave($__internal_f804a3f4f18b0dcbba5a2d895755cf62b3c9ebddc2a7d161b0f56c269f0d2360_prof);

    }

    // line 155
    public function block_nav_list($context, array $blocks = array())
    {
        $__internal_02a7eaf39d128aa5d39a68e441f2abdb4b19502ce0b6bcb23825f50d0d8775fc = $this->env->getExtension("native_profiler");
        $__internal_02a7eaf39d128aa5d39a68e441f2abdb4b19502ce0b6bcb23825f50d0d8775fc->enter($__internal_02a7eaf39d128aa5d39a68e441f2abdb4b19502ce0b6bcb23825f50d0d8775fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_list"));

        // line 156
        echo "                        <ul class=\"nav nav-list\"> 
                           <!-- <div id=\"filters\">";
        // line 157
        echo "</div>-->

                            <li>
                                <a href=\"";
        // line 160
        echo $this->env->getExtension('routing')->getPath("to_dwork");
        echo "\" class=\"dropdown-toggle\">
                                    <i class=\"icon-leaf dark\"></i>
                                    <span class=\"menu-text\"> Cadastrar cliente </span>
                                    <b class=\"arrow\"></b>
                                </a>
                                <!-- <ul class=\"submenu\">
                                     <li>
                                         <a href=\"#\">
                                             <i class=\"icon-double-angle-right\"></i>
                                             Administar mis proyectos
                                         </a>
                                     </li>
 
                                     <li>
                                         <a href=\"#\">
                                             <i class=\"icon-double-angle-right\"></i>
                                             Vista general
                                         </a>
                                     </li>
 
                                 </ul>-->

                            </li>

                            <li class = \"b-report\" id = \"test\">
                                <a href=\"";
        // line 185
        echo $this->env->getExtension('routing')->getPath("to_reportes");
        echo "\" class=\"dropdown-toggle  cl\">
                                    <i class=\"icon-cogs light-blue cl\"></i>
                                    <span class=\"menu-text grey cl\"> Atendimento </span>
                                    <b class=\"arrow cl\"></b>
                                </a>
                                ";
        // line 190
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "rol", array()), "id", array()) == 1)) {
            // line 191
            echo "                                    ";
            $this->displayBlock('reportfilters', $context, $blocks);
            // line 193
            echo "                                ";
        }
        // line 194
        echo "                            </li>                                 

                        </ul>                           


                        </ul><!-- /.nav-list -->

                        <div class=\"sidebar-collapse\" id=\"sidebar-collapse\">
                            <i class=\"icon-double-angle-left\" data-icon1=\"icon-double-angle-left\" data-icon2=\"icon-double-angle-right\"></i>
                        </div>
                    ";
        
        $__internal_02a7eaf39d128aa5d39a68e441f2abdb4b19502ce0b6bcb23825f50d0d8775fc->leave($__internal_02a7eaf39d128aa5d39a68e441f2abdb4b19502ce0b6bcb23825f50d0d8775fc_prof);

    }

    // line 191
    public function block_reportfilters($context, array $blocks = array())
    {
        $__internal_ba059aec8187cff48ec3cacc7d5bcc91059978f707cd46873e3bcce86ad6f270 = $this->env->getExtension("native_profiler");
        $__internal_ba059aec8187cff48ec3cacc7d5bcc91059978f707cd46873e3bcce86ad6f270->enter($__internal_ba059aec8187cff48ec3cacc7d5bcc91059978f707cd46873e3bcce86ad6f270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reportfilters"));

        // line 192
        echo "                                    ";
        
        $__internal_ba059aec8187cff48ec3cacc7d5bcc91059978f707cd46873e3bcce86ad6f270->leave($__internal_ba059aec8187cff48ec3cacc7d5bcc91059978f707cd46873e3bcce86ad6f270_prof);

    }

    // line 240
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_410096f8549c73a9f1cf3e690ab3b5954c4f00976877f8a22de069763cba6875 = $this->env->getExtension("native_profiler");
        $__internal_410096f8549c73a9f1cf3e690ab3b5954c4f00976877f8a22de069763cba6875->enter($__internal_410096f8549c73a9f1cf3e690ab3b5954c4f00976877f8a22de069763cba6875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_410096f8549c73a9f1cf3e690ab3b5954c4f00976877f8a22de069763cba6875->leave($__internal_410096f8549c73a9f1cf3e690ab3b5954c4f00976877f8a22de069763cba6875_prof);

    }

    // line 257
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0876b4f99fb34b008e2f661d284d2301d21e5393658e0de69becfe5b9f02c1b1 = $this->env->getExtension("native_profiler");
        $__internal_0876b4f99fb34b008e2f661d284d2301d21e5393658e0de69becfe5b9f02c1b1->enter($__internal_0876b4f99fb34b008e2f661d284d2301d21e5393658e0de69becfe5b9f02c1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "                  
    ";
        // line 259
        echo "    ";
        $this->displayBlock('javascripts_layout1', $context, $blocks);
        // line 301
        echo " 
    ";
        // line 302
        $this->displayBlock('javascripts_page', $context, $blocks);
        // line 303
        echo "          
 
    ";
        // line 305
        $this->displayBlock('javascripts_layout2', $context, $blocks);
        // line 422
        echo "    
";
        
        $__internal_0876b4f99fb34b008e2f661d284d2301d21e5393658e0de69becfe5b9f02c1b1->leave($__internal_0876b4f99fb34b008e2f661d284d2301d21e5393658e0de69becfe5b9f02c1b1_prof);

    }

    // line 259
    public function block_javascripts_layout1($context, array $blocks = array())
    {
        $__internal_d59e3375845c5101373ac46dad850e13b7a3448da49a746ab4445a26d96d77c6 = $this->env->getExtension("native_profiler");
        $__internal_d59e3375845c5101373ac46dad850e13b7a3448da49a746ab4445a26d96d77c6->enter($__internal_d59e3375845c5101373ac46dad850e13b7a3448da49a746ab4445a26d96d77c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_layout1"));

        // line 260
        echo "           <script type=\"text/javascript\">
            window.jQuery || document.write(\"<script src='";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery-2.0.3.min.js"), "html", null, true);
        echo "'>\" + \"<\" + \"/script>\");
        </script>
        <script type=\"text/javascript\">
            if (\"ontouchend\" in document)
                document.write(\"<script src='";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.mobile.custom.min.js"), "html", null, true);
        echo "'>\" + \"<\" + \"/script>\");
        </script>
        <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/typeahead-bs2.min.js"), "html", null, true);
        echo "\"></script>

        <!-- page specific plugin scripts -->
      <!--  <script src=\"";
        // line 271
        echo "\"></script>
        <script src=\"";
        // line 272
        echo "\"></script> -->
        <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/fuelux/fuelux.spinner.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.inputlimiter.1.3.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/bootstrap-tag.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>

        <!-- ace scripts -->

        <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/ace.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>        
        <script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>        
        <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jszip.min.js"), "html", null, true);
        echo "\"></script>        
        <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/pdfmake.min.js"), "html", null, true);
        echo "\"></script>        
        <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/vfs_fonts.js"), "html", null, true);
        echo "\"></script>        
        <script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>        
        <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>        
        

        <!-- inline scripts related to this page by Armando -->                        
                                                     
    ";
        
        $__internal_d59e3375845c5101373ac46dad850e13b7a3448da49a746ab4445a26d96d77c6->leave($__internal_d59e3375845c5101373ac46dad850e13b7a3448da49a746ab4445a26d96d77c6_prof);

    }

    // line 302
    public function block_javascripts_page($context, array $blocks = array())
    {
        $__internal_833b97468a1be559de8121509436dbe88268d7b3fdd309c941aca7f087ea90d0 = $this->env->getExtension("native_profiler");
        $__internal_833b97468a1be559de8121509436dbe88268d7b3fdd309c941aca7f087ea90d0->enter($__internal_833b97468a1be559de8121509436dbe88268d7b3fdd309c941aca7f087ea90d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_page"));

        // line 303
        echo "    ";
        
        $__internal_833b97468a1be559de8121509436dbe88268d7b3fdd309c941aca7f087ea90d0->leave($__internal_833b97468a1be559de8121509436dbe88268d7b3fdd309c941aca7f087ea90d0_prof);

    }

    // line 305
    public function block_javascripts_layout2($context, array $blocks = array())
    {
        $__internal_6b0ed7926d23da58e5ba28f62f99df657df884dcf19952354f9c9a392cf0f3b8 = $this->env->getExtension("native_profiler");
        $__internal_6b0ed7926d23da58e5ba28f62f99df657df884dcf19952354f9c9a392cf0f3b8->enter($__internal_6b0ed7926d23da58e5ba28f62f99df657df884dcf19952354f9c9a392cf0f3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_layout2"));

        echo "          
        <script type=\"text/javascript\">



            jQuery(function (\$) {

                //jquery de la pagina homeuser idem a la de fases
                \$('#loading-btn').on(ace.click_event, function () {
                    var btn = \$(this);
                    btn.button('loading')
                    setTimeout(function () {
                        btn.button('reset')
                    }, 2000)
                });


                //modal-form
                \$('#modal-form input[type=file]').ace_file_input({
                    style: 'well',
                    btn_choose: 'Drop files here or click to choose',
                    btn_change: null,
                    no_icon: 'icon-cloud-upload',
                    droppable: true,
                    thumbnail: 'large'
                });


                //chosen plugin inside a modal will have a zero width because the select element is originally hidden
                //and its width cannot be determined.
                //so we set the width after modal is show
                /*\$('#modal-form').on('shown.bs.modal', function () {
                 \$(this).find('.chosen-container').each(function(){
                 \$(this).find('a:first-child').css('width' , '210px');
                 \$(this).find('.chosen-drop').css('width' , '210px');
                 \$(this).find('.chosen-search input').css('width' , '200px');
                 });
                 });*/
                /**
                 //or you can activate the chosen plugin after modal is shown
                 //this way select element becomes visible with dimensions and chosen works as expected
                 */
                /*
                 \$('#modal-form').on('shown', function () {
                 \$(this).find('.modal-chosen').chosen();
                 \$(\".chosen-select\").chosen();
                 })*/

                //jquery for Chosen
                \$(\".chosen-select\").chosen();
                //\$(\".chosen-select\").chosen({display_selected_options: true, no_results_text: \"No se ha encontrado nada!\", width: '500px'});
                //\$(\".chosen-select\").chosen({disable_search_threshold: 10});

                //jquery tooltip
                \$('[data-rel=tooltip]').tooltip();
                \$('[data-rel=popover]').popover({html: true});


                //jquery datepicker
                \$('.date-picker').datepicker({autoclose: true}).next().on(ace.click_event, function () {
                    \$(this).prev().focus();
                });

                //jqueryTable
                /*var oTable1 = \$('#sample-table-2').dataTable( {
                 \"aoColumns\": [
                 { \"bSortable\": false },
                 null, null,null, null, null,
                 { \"bSortable\": false }
                 ] } );*/          
                 


                /*\$('table th input:checkbox').on('click' , function(){
                 var that = this;
                 \$(this).closest('table').find('tr > td:first-child input:checkbox')
                 .each(function(){
                 this.checked = that.checked;
                 \$(this).closest('tr').toggleClass('selected');
                 });
                 
                 });*/



                /*\$('.input-mask-phone').mask('(999) 999-9999');*/

                \$('.b-report').click(function (event) {
                    if (\$(event.target).hasClass('cl')) {
                        \$.get(\$('#url').val() + '/r/ajaxbody/', function (data) {
                            \$('.my-body').html(data);
                        });
                    }
                });


                //jquery accordion
                \$(\"#accordion\").accordion({
                    collapsible: true,
                    heightStyle: \"content\",
                    animate: 250,
                    header: \".accordion-header\"
                }).sortable({
                    axis: \"y\",
                    handle: \".accordion-header\",
                    stop: function (event, ui) {
                        // IE doesn't register the blur when sorting
                        // so trigger focusout handlers to remove .ui-state-focus
                        ui.item.children(\".accordion-header\").triggerHandler(\"focusout\");
                    }
                });
            });


        </script>
        <!--<script src=\"";
        // line 420
        echo "\"></script>-->
    ";
        
        $__internal_6b0ed7926d23da58e5ba28f62f99df657df884dcf19952354f9c9a392cf0f3b8->leave($__internal_6b0ed7926d23da58e5ba28f62f99df657df884dcf19952354f9c9a392cf0f3b8_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  861 => 420,  739 => 305,  732 => 303,  726 => 302,  713 => 296,  709 => 295,  705 => 294,  701 => 293,  697 => 292,  693 => 291,  689 => 290,  685 => 289,  681 => 288,  674 => 284,  670 => 283,  665 => 281,  661 => 280,  657 => 279,  653 => 278,  649 => 277,  645 => 276,  641 => 275,  637 => 274,  633 => 273,  630 => 272,  627 => 271,  621 => 268,  617 => 267,  612 => 265,  605 => 261,  602 => 260,  596 => 259,  588 => 422,  586 => 305,  582 => 303,  580 => 302,  577 => 301,  574 => 259,  566 => 257,  555 => 240,  548 => 192,  542 => 191,  525 => 194,  522 => 193,  519 => 191,  517 => 190,  509 => 185,  481 => 160,  476 => 157,  473 => 156,  467 => 155,  448 => 241,  446 => 240,  433 => 230,  406 => 205,  404 => 155,  381 => 134,  375 => 133,  356 => 120,  350 => 116,  341 => 110,  338 => 109,  336 => 108,  322 => 96,  316 => 94,  314 => 93,  308 => 89,  300 => 84,  288 => 75,  276 => 65,  270 => 64,  262 => 133,  260 => 132,  257 => 64,  255 => 63,  249 => 62,  238 => 58,  228 => 55,  222 => 54,  215 => 58,  212 => 56,  209 => 54,  207 => 53,  201 => 52,  190 => 48,  180 => 44,  176 => 43,  172 => 42,  168 => 41,  164 => 40,  160 => 39,  156 => 38,  152 => 37,  149 => 36,  143 => 32,  139 => 31,  135 => 30,  130 => 28,  125 => 26,  120 => 24,  116 => 23,  113 => 22,  108 => 20,  104 => 19,  101 => 18,  95 => 17,  88 => 48,  85 => 46,  82 => 17,  80 => 16,  74 => 15,  65 => 10,  61 => 9,  50 => 5,  11 => 2,);
    }
}
