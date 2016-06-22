<?php

/* DailyWorkBundle:Default:dadosPaciente.html.twig */
class __TwigTemplate_4fa8ab4025e40761357fcc1cc9541f81177086055b01ac98724719cd5d85d9bc extends Twig_Template
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
        $__internal_562cbca35653352cf0ef8370b7b798398011ea12e2f63ae4c8fd02a4f2ed9a0d = $this->env->getExtension("native_profiler");
        $__internal_562cbca35653352cf0ef8370b7b798398011ea12e2f63ae4c8fd02a4f2ed9a0d->enter($__internal_562cbca35653352cf0ef8370b7b798398011ea12e2f63ae4c8fd02a4f2ed9a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DailyWorkBundle:Default:dadosPaciente.html.twig"));

        // line 1
        echo "<div class=\"widget-box\">
    <div class=\"widget-header\">
        <h4 class=\"header blue\">Dados Generais</h4>
        <div class=\"widget-toolbar\">
            <a href=\"#\" data-action=\"collapse\">
                <i class=\"1 icon-chevron-up bigger-125\"></i>
            </a>
        </div>
    </div>
    <div class=\"widget-body\">
        <div class=\"widget-main\">
            <div class=\"widget-box\">
                <div class=\"widget-body\">
                    <div class=\"widget-main no-padding\">
                        <table class=\"table table-striped table-bordered table-hover\">
                            <thead class=\"thin-border-bottom\">
                                <tr>
                                    <th>
                            <div class=\"\">
                                <button id=\"novo-pac\" url=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("actualizar_paciente_url");
        echo "\" idPaciente=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")), "getIdPaciente", array(), "method"), "html", null, true);
        echo "\" 
                                        class=\"btn btn-xs btn-info btn-group-justified\">
                                    <span class=\"bigger-110\">Editar</span>
                                </button> 
                            </div>
                            </th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class=\"\">
                                        <a id=\"birth\" href=\"#\" >
                                            Data de nacimiento
                                        </a>
                                        &nbsp;&nbsp;&nbsp;
                                        <div id=\"birth-info\" class=\"hide\">
                                            <dt class=\"center green\">
                                            ";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")), "getDataNascimento", array(), "method"), "d-m-Y"), "html", null, true);
        echo "
                                            </dt>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"\">
                                        <a id=\"bloodType\" href=\"#\">
                                            Tipo da Sangre
                                        </a>
                                        &nbsp;&nbsp;&nbsp;
                                        <div id=\"bloodType-info\" class=\"hide\">
                                            <dt class=\"center green\">
                                            ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")), "getTipoSanguineo", array(), "method"), "html", null, true);
        echo "
                                            </dt>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_562cbca35653352cf0ef8370b7b798398011ea12e2f63ae4c8fd02a4f2ed9a0d->leave($__internal_562cbca35653352cf0ef8370b7b798398011ea12e2f63ae4c8fd02a4f2ed9a0d_prof);

    }

    public function getTemplateName()
    {
        return "DailyWorkBundle:Default:dadosPaciente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 50,  65 => 37,  43 => 20,  22 => 1,);
    }
}
