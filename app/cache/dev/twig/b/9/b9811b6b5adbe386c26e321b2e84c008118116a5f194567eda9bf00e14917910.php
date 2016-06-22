<?php

/* DailyWorkBundle:Default:consultaPaciente.html.twig */
class __TwigTemplate_b9811b6b5adbe386c26e321b2e84c008118116a5f194567eda9bf00e14917910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "DailyWorkBundle:Default:consultaPaciente.html.twig", 1);
        $this->blocks = array(
            'javascripts_page' => array($this, 'block_javascripts_page'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fe5f5d913a02829350dbf17b7b638c3879998465a0ace6def9afaafa5048d98 = $this->env->getExtension("native_profiler");
        $__internal_1fe5f5d913a02829350dbf17b7b638c3879998465a0ace6def9afaafa5048d98->enter($__internal_1fe5f5d913a02829350dbf17b7b638c3879998465a0ace6def9afaafa5048d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DailyWorkBundle:Default:consultaPaciente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fe5f5d913a02829350dbf17b7b638c3879998465a0ace6def9afaafa5048d98->leave($__internal_1fe5f5d913a02829350dbf17b7b638c3879998465a0ace6def9afaafa5048d98_prof);

    }

    // line 2
    public function block_javascripts_page($context, array $blocks = array())
    {
        $__internal_9aed8a95af634c3d6c0c9448f06b4bdb61595d4988d1062f08393678af57cfcd = $this->env->getExtension("native_profiler");
        $__internal_9aed8a95af634c3d6c0c9448f06b4bdb61595d4988d1062f08393678af57cfcd->enter($__internal_9aed8a95af634c3d6c0c9448f06b4bdb61595d4988d1062f08393678af57cfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_page"));

        // line 3
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/_others/consulta.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_9aed8a95af634c3d6c0c9448f06b4bdb61595d4988d1062f08393678af57cfcd->leave($__internal_9aed8a95af634c3d6c0c9448f06b4bdb61595d4988d1062f08393678af57cfcd_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e05ff38336bd43f721356e5042c1dee88c5cc2c65fa3d3f32b5e23ee797e9f45 = $this->env->getExtension("native_profiler");
        $__internal_e05ff38336bd43f721356e5042c1dee88c5cc2c65fa3d3f32b5e23ee797e9f45->enter($__internal_e05ff38336bd43f721356e5042c1dee88c5cc2c65fa3d3f32b5e23ee797e9f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        echo " 
    <div class=\"page-content\">        
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box transparent\" id=\"recent-box\">
                    <div class=\"widget-header\">
                        <h4 id=\"name-paciente\" class=\"lighter smaller\">
                            <i class=\" icon-briefcase green\"></i>
                            CONSULTA DO PACIENTE: ";
        // line 15
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")), "getNome", array(), "method")), "html", null, true);
        echo " 
                        </h4>
                        <div class=\"widget-toolbar no-border\">
                            <ul class=\"nav nav-tabs\" id=\"recent-tab\">
                                <li class=\"active\">
                                    <a data-toggle=\"tab\" href=\"#task-tab\">Consulta</a>
                                </li>
                                <li class=\"\">
                                    <a data-toggle=\"tab\" href=\"#comment-tab\">Dados dos respons&aacute;veis</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"widget-body\">
                        <div class=\"widget-main padding-4\">
                            <div class=\"tab-content padding-8 overflow-visible\">
                                <div id=\"task-tab\" class=\"tab-pane active row\">
                                    <div id=\"my-consulta\" class=\"col-md-8 col-sm-8\">
                                        ";
        // line 33
        $this->loadTemplate("DailyWorkBundle:Default:diagnostico.html.twig", "DailyWorkBundle:Default:consultaPaciente.html.twig", 33)->display($context);
        // line 34
        echo "                                        <div id=\"list_diagnostic\">
                                            
                                        </div> 
                                        <div id=\"one_diagnostic_info\">
                                            
                                        </div>  
                                        <script type=\"text/javascript\">
                                            \$('#list_diagnostic').hide();
                                            \$('#one_diagnostic_info').hide();
                                        </script>
                                    </div>
                                    <div class=\"col-md-4 col-sm-4\">
                                        <!--<div id=\"paciente_container\" >
                                        {--% include('DailyWorkBundle:Default:dadosPaciente.html.twig') %}
                                        </div>-->
                                        <div id=\"prob_saude_container\" >
                                        ";
        // line 50
        $this->loadTemplate("DailyWorkBundle:Default:problemasDeSaude.html.twig", "DailyWorkBundle:Default:consultaPaciente.html.twig", 50)->display($context);
        // line 51
        echo "                                        </div>
                                    </div>
                                </div>
                                <div id=\"comment-tab\" class=\"tab-pane\">
                                    ";
        // line 55
        $this->loadTemplate("DailyWorkBundle:Default:dadosGenerais.html.twig", "DailyWorkBundle:Default:consultaPaciente.html.twig", 55)->display($context);
        // line 56
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    ";
        
        $__internal_e05ff38336bd43f721356e5042c1dee88c5cc2c65fa3d3f32b5e23ee797e9f45->leave($__internal_e05ff38336bd43f721356e5042c1dee88c5cc2c65fa3d3f32b5e23ee797e9f45_prof);

    }

    public function getTemplateName()
    {
        return "DailyWorkBundle:Default:consultaPaciente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 56,  123 => 55,  117 => 51,  115 => 50,  97 => 34,  95 => 33,  74 => 15,  59 => 7,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
