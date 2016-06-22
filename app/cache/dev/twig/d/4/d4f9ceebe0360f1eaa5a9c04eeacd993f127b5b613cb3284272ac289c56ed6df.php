<?php

/* DailyWorkBundle:Default:dadosGenerais.html.twig */
class __TwigTemplate_d4f9ceebe0360f1eaa5a9c04eeacd993f127b5b613cb3284272ac289c56ed6df extends Twig_Template
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
        $__internal_557ab488b220c6ce1e6f50bb38a9500b2492b20b027dc9fa9184bb534b4fc9a6 = $this->env->getExtension("native_profiler");
        $__internal_557ab488b220c6ce1e6f50bb38a9500b2492b20b027dc9fa9184bb534b4fc9a6->enter($__internal_557ab488b220c6ce1e6f50bb38a9500b2492b20b027dc9fa9184bb534b4fc9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DailyWorkBundle:Default:dadosGenerais.html.twig"));

        // line 1
        echo "<form class=\"form-horizontal\" id=\"responsavels-form\" action=\"";
        echo $this->env->getExtension('routing')->getPath("daily_work");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")), "getIdPaciente", array(), "method"), "html", null, true);
        echo "\" method=\"post\" name=\"ficha\">
    <div id=\"resp-info\" class=\"row\">
        ";
        // line 3
        $this->loadTemplate("DailyWorkBundle:Default:dadosResponsavel.html.twig", "DailyWorkBundle:Default:dadosGenerais.html.twig", 3)->display($context);
        // line 4
        echo "    </div>
</form>
";
        
        $__internal_557ab488b220c6ce1e6f50bb38a9500b2492b20b027dc9fa9184bb534b4fc9a6->leave($__internal_557ab488b220c6ce1e6f50bb38a9500b2492b20b027dc9fa9184bb534b4fc9a6_prof);

    }

    public function getTemplateName()
    {
        return "DailyWorkBundle:Default:dadosGenerais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  30 => 3,  22 => 1,);
    }
}
