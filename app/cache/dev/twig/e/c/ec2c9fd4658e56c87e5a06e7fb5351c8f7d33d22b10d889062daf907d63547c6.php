<?php

/* DailyWorkBundle:Default:diagnostico.html.twig */
class __TwigTemplate_ec2c9fd4658e56c87e5a06e7fb5351c8f7d33d22b10d889062daf907d63547c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e0fa067660ea330bbffde3cd52e75ad4721da38c60e012a6911fadafced4074 = $this->env->getExtension("native_profiler");
        $__internal_1e0fa067660ea330bbffde3cd52e75ad4721da38c60e012a6911fadafced4074->enter($__internal_1e0fa067660ea330bbffde3cd52e75ad4721da38c60e012a6911fadafced4074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DailyWorkBundle:Default:diagnostico.html.twig"));

        // line 1
        echo "<div id=\"new_diagnostic\">
<input id=\"solution\" type=\"hidden\" edade=\"\" detalhe=\"\">
<form id=\"diagnostico-form\" method=\"post\" onclick=\"\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "_token", array()), 'row');
        echo "
    <div class=\"input-group \">
        <div class=\"row btn-group input-group \">
            <button type=\"button\" class=\"btn btn-info btn-xs\" id=\"my-save\" url=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("daily_work");
        echo "\" my-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")), "getIdPaciente", array(), "method"), "html", null, true);
        echo "\">
                Salvar dados
            </button> 
            <button type=\"button\" class=\"btn btn-info btn-xs\" id=\"my-consultas\" url=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("view_consulta_url");
        echo "\" my-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")), "getIdPaciente", array(), "method"), "html", null, true);
        echo "\">
                Consultas
            </button> 
        </div>
        <div id=\"datepickid\" class=\"row input-group \" style=\"padding-top: 10px;\">
            <span class=\"label\">
                Data da consulta
            </span>
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "data", array()), 'widget', array("attr" => array("maxlength" => "10", "class" => "form-control date-picker", "data-date-format" => "dd-mm-yyyy")));
        echo "           
        </div>
        ";
        // line 20
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "data", array()), 'errors')) {
            // line 21
            echo "                <div class=\"alert alert-danger\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    Erro na entrada da data
                </div>
        ";
        }
        // line 26
        echo "    </div>
    <h4 class=\"header green\">
        Diagn&oacute;stico 
    </h4>
    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "observacao", array()), 'widget', array("attr" => array("class" => "dd2-content col-xs-12 col-sm-12", "rows" => "10")));
        echo "
    ";
        // line 31
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "observacao", array()), 'errors')) {
            // line 32
            echo "                <div class=\"alert alert-danger\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    Erro na entrada do diagn&oacute;stico 
                </div>
    ";
        }
        // line 37
        echo "    <!--Receta ----------------------------------------------------------------------------------->
    <h4 class=\"header green\">Receita medica</h4>
    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "receita", array()), 'widget', array("attr" => array("class" => "dd2-content col-xs-12 col-sm-12", "rows" => "10")));
        echo "
    ";
        // line 40
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "receita", array()), 'errors')) {
            // line 41
            echo "                <div class=\"alert alert-danger\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    Erro na entrada da receita medica 
                </div>
    ";
        }
        // line 46
        echo "    
</form>
 </div>
";
        
        $__internal_1e0fa067660ea330bbffde3cd52e75ad4721da38c60e012a6911fadafced4074->leave($__internal_1e0fa067660ea330bbffde3cd52e75ad4721da38c60e012a6911fadafced4074_prof);

    }

    public function getTemplateName()
    {
        return "DailyWorkBundle:Default:diagnostico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 46,  97 => 41,  95 => 40,  91 => 39,  87 => 37,  80 => 32,  78 => 31,  74 => 30,  68 => 26,  61 => 21,  59 => 20,  54 => 18,  41 => 10,  33 => 7,  27 => 4,  22 => 1,);
    }
}
