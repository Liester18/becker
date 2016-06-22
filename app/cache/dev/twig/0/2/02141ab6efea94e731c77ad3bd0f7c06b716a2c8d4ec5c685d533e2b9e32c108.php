<?php

/* DailyWorkBundle:Default:problemasDeSaude.html.twig */
class __TwigTemplate_02141ab6efea94e731c77ad3bd0f7c06b716a2c8d4ec5c685d533e2b9e32c108 extends Twig_Template
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
        $__internal_c72f7f931b8c84a891d8c10ee71e8475b62f38615de9e1f961e434302c900c9b = $this->env->getExtension("native_profiler");
        $__internal_c72f7f931b8c84a891d8c10ee71e8475b62f38615de9e1f961e434302c900c9b->enter($__internal_c72f7f931b8c84a891d8c10ee71e8475b62f38615de9e1f961e434302c900c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DailyWorkBundle:Default:problemasDeSaude.html.twig"));

        // line 1
        echo "<div class=\"widget-box\">
    <div class=\"widget-header\">
        <h4 class=\"header blue\">Problemas de saude</h4>
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
                                <button id=\"novo-saude\" url=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("new_probsaude_url");
        echo "\" idPaciente=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")), "getIdPaciente", array(), "method"), "html", null, true);
        echo "\" class=\"btn btn-xs btn-info btn-group-justified\">
                                    <span class=\"bigger-110\">Novo</span>
                                </button> 
                            </div>
                            </th>
                            </tr>
                            </thead>
                            <tbody>
                                ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")), "getPacienteProblemasSaude", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["ps"]) {
            // line 29
            echo "                                    <tr>
                                        <td class=\"\">
                                            <a class=\"psaude\" href=\"#\" hidd=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ps"], "getProblemaSaude", array(), "method"), "getIdProblemasSaude", array(), "method"), "html", null, true);
            echo "\">
                                                ";
            // line 32
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["ps"], "getProblemaSaude", array(), "method"), "getNombrePsaude", array(), "method")), "html", null, true);
            echo " 
                                            </a>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href=\"#\" class=\"edit-probSaude\" pat-prob-id=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["ps"], "getId", array(), "method"), "html", null, true);
            echo "\" url=\"";
            echo $this->env->getExtension('routing')->getPath("actualizar_probsaude");
            echo "\">
                                                <i class=\"icon-edit bigger-180\"></i>
                                            </a>
                                            &nbsp;
                                            <a href=\"#\" class=\"delete-probSaude\" pat-prob-id=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["ps"], "getId", array(), "method"), "html", null, true);
            echo "\" url=\"";
            echo $this->env->getExtension('routing')->getPath("delete_probsaude");
            echo "\">
                                                <i class=\"icon-trash bigger-180\"></i>
                                            </a>
                                            <div class=\"hide\" id=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ps"], "getProblemaSaude", array(), "method"), "getIdProblemasSaude", array(), "method"), "html", null, true);
            echo "\">
                                                <dt class=\"center green\">
                                                Edade de diagn&oacute;stico: ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["ps"], "getEdadeDiagnostico", array(), "method"), "html", null, true);
            echo "
                                                </dt>
                                                <dd class=\"blue center text-info\">
                                                    ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["ps"], "getDetalhesPsalud", array(), "method"), "html", null, true);
            echo "
                                                </dd>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ps'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_c72f7f931b8c84a891d8c10ee71e8475b62f38615de9e1f961e434302c900c9b->leave($__internal_c72f7f931b8c84a891d8c10ee71e8475b62f38615de9e1f961e434302c900c9b_prof);

    }

    public function getTemplateName()
    {
        return "DailyWorkBundle:Default:problemasDeSaude.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 54,  102 => 47,  96 => 44,  91 => 42,  83 => 39,  74 => 35,  68 => 32,  64 => 31,  60 => 29,  56 => 28,  43 => 20,  22 => 1,);
    }
}
