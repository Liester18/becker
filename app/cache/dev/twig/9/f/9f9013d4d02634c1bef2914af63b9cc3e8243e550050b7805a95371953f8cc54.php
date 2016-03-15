<?php

/* AutenticationBundle:Default:login.html.twig */
class __TwigTemplate_9f9013d4d02634c1bef2914af63b9cc3e8243e550050b7805a95371953f8cc54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "AutenticationBundle:Default:login.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'js_head' => array($this, 'block_js_head'),
            'body_id' => array($this, 'block_body_id'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a9044bf12f7d22fccf734954f68ccfa8cd5ab8621b028d35e911e54a844961a = $this->env->getExtension("native_profiler");
        $__internal_2a9044bf12f7d22fccf734954f68ccfa8cd5ab8621b028d35e911e54a844961a->enter($__internal_2a9044bf12f7d22fccf734954f68ccfa8cd5ab8621b028d35e911e54a844961a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AutenticationBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a9044bf12f7d22fccf734954f68ccfa8cd5ab8621b028d35e911e54a844961a->leave($__internal_2a9044bf12f7d22fccf734954f68ccfa8cd5ab8621b028d35e911e54a844961a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_25b3537d89b75ca17ee56ba179102dcd9353bb6a52a9678231dc1b56a6a391cd = $this->env->getExtension("native_profiler");
        $__internal_25b3537d89b75ca17ee56ba179102dcd9353bb6a52a9678231dc1b56a6a391cd->enter($__internal_25b3537d89b75ca17ee56ba179102dcd9353bb6a52a9678231dc1b56a6a391cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registro de Usuario";
        
        $__internal_25b3537d89b75ca17ee56ba179102dcd9353bb6a52a9678231dc1b56a6a391cd->leave($__internal_25b3537d89b75ca17ee56ba179102dcd9353bb6a52a9678231dc1b56a6a391cd_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        $__internal_8a60a5e779e079a73c79261d0397f0ec7a17171645a1b6d23ea269bc80bdf446 = $this->env->getExtension("native_profiler");
        $__internal_8a60a5e779e079a73c79261d0397f0ec7a17171645a1b6d23ea269bc80bdf446->enter($__internal_8a60a5e779e079a73c79261d0397f0ec7a17171645a1b6d23ea269bc80bdf446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        echo " 
<meta name=\"description\" content=\"User login page\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    ";
        
        $__internal_8a60a5e779e079a73c79261d0397f0ec7a17171645a1b6d23ea269bc80bdf446->leave($__internal_8a60a5e779e079a73c79261d0397f0ec7a17171645a1b6d23ea269bc80bdf446_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bbfd5da032ed18cddbe6ac5d6b5fe42a6049d007f653004eb9ce7304b35cb895 = $this->env->getExtension("native_profiler");
        $__internal_bbfd5da032ed18cddbe6ac5d6b5fe42a6049d007f653004eb9ce7304b35cb895->enter($__internal_bbfd5da032ed18cddbe6ac5d6b5fe42a6049d007f653004eb9ce7304b35cb895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "<!-- basic styles -->

<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/font-awesome.min.css"), "html", null, true);
        echo "\" />



<!--[if IE 7]>
  <link rel=\"stylesheet\" href=\"assets/css/font-awesome-ie7.min.css\" />
<![endif]-->

<!-- page specific plugin styles -->

<!-- fonts -->

<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/ace-fonts.css"), "html", null, true);
        echo "\" />

<!-- ace styles -->

<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/ace.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

    ";
        
        $__internal_bbfd5da032ed18cddbe6ac5d6b5fe42a6049d007f653004eb9ce7304b35cb895->leave($__internal_bbfd5da032ed18cddbe6ac5d6b5fe42a6049d007f653004eb9ce7304b35cb895_prof);

    }

    // line 33
    public function block_js_head($context, array $blocks = array())
    {
        $__internal_f9c9839caab5474565218c5ed32477f1623954e1d83e914bfcec0bf99f6a69c9 = $this->env->getExtension("native_profiler");
        $__internal_f9c9839caab5474565218c5ed32477f1623954e1d83e914bfcec0bf99f6a69c9->enter($__internal_f9c9839caab5474565218c5ed32477f1623954e1d83e914bfcec0bf99f6a69c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_head"));

        // line 34
        echo "<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>
<script src=\"assets/js/html5shiv.js\"></script>
<script src=\"assets/js/respond.min.js\"></script>
<![endif]-->
    ";
        
        $__internal_f9c9839caab5474565218c5ed32477f1623954e1d83e914bfcec0bf99f6a69c9->leave($__internal_f9c9839caab5474565218c5ed32477f1623954e1d83e914bfcec0bf99f6a69c9_prof);

    }

    // line 41
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_0d88f6abf269084af74fa7f1bef0d6929cee717f6d81348701f682927995aaab = $this->env->getExtension("native_profiler");
        $__internal_0d88f6abf269084af74fa7f1bef0d6929cee717f6d81348701f682927995aaab->enter($__internal_0d88f6abf269084af74fa7f1bef0d6929cee717f6d81348701f682927995aaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "class=\"login-layout\" id=\"login_body\"";
        
        $__internal_0d88f6abf269084af74fa7f1bef0d6929cee717f6d81348701f682927995aaab->leave($__internal_0d88f6abf269084af74fa7f1bef0d6929cee717f6d81348701f682927995aaab_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c4a627c32c1e1094dbe6a77367d8eb9f05c075e85f21c83d5bf92409d417c8b = $this->env->getExtension("native_profiler");
        $__internal_9c4a627c32c1e1094dbe6a77367d8eb9f05c075e85f21c83d5bf92409d417c8b->enter($__internal_9c4a627c32c1e1094dbe6a77367d8eb9f05c075e85f21c83d5bf92409d417c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "    
<div class=\"main-container\">
    <div class=\"main-content\">
        <div class=\"row\">
            <div class=\"col-sm-10 col-sm-offset-1\">
                <div class=\"login-container\">
                    <div class=\"center\">
                        <h1>
                            <br />
                            <i class=\"icon-leaf white\"></i>
                            <span class=\"white\">Consultorio</span>
                            <span class=\"white\">Daniel Becker</span>
                        </h1>
                        <!--<h4 class=\"grey\">&copy; Becker</h4>-->
                    </div>

                    <div class=\"space-6\"></div>

                    <div class=\"position-relative\">
                        <div id=\"login-box\" class=\"login-box  widget-box no-border
                             ";
        // line 63
        if ( !array_key_exists("showInRegister", $context)) {
            // line 64
            echo "                             visible\"
                             ";
        } else {
            // line 66
            echo "                             \"
                             ";
        }
        // line 68
        echo "                             >
                            <div class=\"widget-body\">
                                <div class=\"widget-main\">
                                    <h4 class=\"header blue lighter bigger\">

                                        Por favor entre seus dados:
                                    </h4>

                                    <div class=\"space-6\"></div>

                                    <form action=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("user_login_check");
        echo "\" method=\"post\">
                                        <fieldset>
                                            <label class=\"block clearfix\">
                                                <span class=\"block input-icon input-icon-right\">
                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Usuario\" id=\"username\" name=\"_username\" />
                                                    <i class=\"icon-user\"></i>
                                                </span>
                                            </label>

                                            <label class=\"block clearfix\">
                                                <span class=\"block input-icon input-icon-right\">
                                                    <input type=\"password\" class=\"form-control\" placeholder=\"Senha\" id=\"password\" name=\"_password\" />
                                                    <i class=\"icon-lock\"></i>
                                                </span>
                                            </label>

                                            <div class=\"space\"></div>

                                            <div class=\"clearfix\">
                                                <label class=\"inline\">
                                                    <input type=\"checkbox\" class=\"ace\" name=\"_remember_me\"/>
                                                    <span class=\"lbl\"> Lembrar</span>
                                                </label>

                                                    <button type=\"submit\" class=\"width-35 pull-right btn btn-sm btn-primary\" name=\"login\">
                                                    <i class=\"icon-key\"></i>
                                                    Aceitar
                                                </button>
                                            </div>

                                            <div class=\"space-4\"></div>
                                        </fieldset>
                                    </form>

                                    
                                    
                                </div><!-- /widget-main -->
                                
                            </div><!-- /widget-body -->
                        </div><!-- /login-box -->
                       
                    </div><!-- /position-relative -->
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</div><!-- /.main-container -->
    
    ";
        
        $__internal_9c4a627c32c1e1094dbe6a77367d8eb9f05c075e85f21c83d5bf92409d417c8b->leave($__internal_9c4a627c32c1e1094dbe6a77367d8eb9f05c075e85f21c83d5bf92409d417c8b_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a0a0cd05bee6208dfc6f4e967d1a9bd7c1709d49822a6ee61dc554d3b9f46472 = $this->env->getExtension("native_profiler");
        $__internal_a0a0cd05bee6208dfc6f4e967d1a9bd7c1709d49822a6ee61dc554d3b9f46472->enter($__internal_a0a0cd05bee6208dfc6f4e967d1a9bd7c1709d49822a6ee61dc554d3b9f46472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "<!-- basic scripts -->

<!--[if !IE]> -->

<script type=\"text/javascript\">
    window.jQuery || document.write(\"<script src='";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery-2.0.3.min.js"), "html", null, true);
        echo "'>\" + \"<\" + \"/script>\");
    </script>

    <!-- <![endif]-->

    <!--[if IE]>
<script type=\"text/javascript\">
window.jQuery || document.write(\"<script src='assets/js/jquery-1.10.2.min.js'>\"+\"<\"+\"/script>\");
</script>
<![endif]-->

    <script type=\"text/javascript\">
        if (\"ontouchend\" in document)
            document.write(\"<script src='";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.mobile.custom.min.js"), "html", null, true);
        echo "'>\" + \"<\" + \"/script>\");
        </script>


        <!-- Script form userregister-->
        <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
      
        <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/fuelux/fuelux.spinner.min.js"), "html", null, true);
        echo "\"></script>
       
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.inputlimiter.1.3.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/bootstrap-tag.min.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>


        <!-- ace scripts -->

        <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/ace.min.js"), "html", null, true);
        echo "\"></script>


        <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
        <!-- inline scripts related to this page -->
        <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/_others/validaciones/registro.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\">
            jQuery(function(\$) {
           
            \$('.input-mask-phone').mask('(999) 999-9999');
            \$('.input-mask-username').mask('********');//numero o letras solamente que tiene que ser obligado esta cantidad
            \$('.input-mask-name').mask('aaaaaaaaaaaaaaaaaaaaa');//letras solamente pero tiene que ser obligado esta cantidad
            
        });
        function show_box(id) {
            jQuery('.widget-box.visible').removeClass('visible');
            jQuery('#' + id).addClass('visible');
        }

        

       /* function registrar() {
           \$.post('";
        // line 190
        echo "', {datos:'Liester'});
           // location.href = '";
        // line 191
        echo "';
        }*/

       </script>

    ";
        
        $__internal_a0a0cd05bee6208dfc6f4e967d1a9bd7c1709d49822a6ee61dc554d3b9f46472->leave($__internal_a0a0cd05bee6208dfc6f4e967d1a9bd7c1709d49822a6ee61dc554d3b9f46472_prof);

    }

    public function getTemplateName()
    {
        return "AutenticationBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 191,  366 => 190,  345 => 172,  340 => 170,  334 => 167,  330 => 166,  322 => 161,  318 => 160,  313 => 158,  309 => 157,  305 => 156,  300 => 154,  295 => 152,  291 => 151,  283 => 146,  267 => 133,  260 => 128,  254 => 127,  198 => 78,  186 => 68,  182 => 66,  178 => 64,  176 => 63,  154 => 43,  148 => 42,  136 => 41,  123 => 34,  117 => 33,  107 => 30,  103 => 29,  96 => 25,  81 => 13,  77 => 12,  73 => 10,  67 => 9,  52 => 5,  40 => 4,  11 => 2,);
    }
}
