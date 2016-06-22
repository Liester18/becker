<?php

/* DailyWorkBundle:Default:dadosResponsavel.html.twig */
class __TwigTemplate_70d765462501340e18cf5318c1b78acf3ae0623c5ae63a262e3479bac89464b0 extends Twig_Template
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
        $__internal_a63326e001b6429fc4b6fe80d536b9cfdf91599f8fd5da3a17806b4b753ff0dd = $this->env->getExtension("native_profiler");
        $__internal_a63326e001b6429fc4b6fe80d536b9cfdf91599f8fd5da3a17806b4b753ff0dd->enter($__internal_a63326e001b6429fc4b6fe80d536b9cfdf91599f8fd5da3a17806b4b753ff0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DailyWorkBundle:Default:dadosResponsavel.html.twig"));

        // line 1
        echo "<div class=\"col-sm-12 col-md-12\">
    <div class=\"widget-header widget-header-small\">
        <h4>Dados dos Responsavel</h4>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href=\"#\" id=\"edit_bt\" class=\"green no-hover bigger-130\" id-pac=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")), "getIdPaciente", array(), "method"), "html", null, true);
        echo "\" url=\"";
        echo $this->env->getExtension('routing')->getPath("actualizar_responsavel_url");
        echo "\">
            <i class=\"icon-edit\"></i>
            Editar
        </a>
    </div>
    <div class=\"widget-body\">
        <div class=\"widget-box\">
            ";
        // line 12
        $context["hFlag"] = true;
        // line 13
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")), "ordenResponsavels", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["oresponsavel"]) {
            // line 14
            echo "                <div class=\"row form-group\">
                    <div class=\"col-xs-6 col-md-6\">
                        <div class=\"row-fluid position-relative\">
                            <div class=\"panel\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\">
                                        ";
            // line 20
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == true)) {
                echo "           
                                            <a class=\"green\" href=\"#\">
                                                Dados do primero responsavel
                                            </a>
                                        ";
            }
            // line 25
            echo "                                        ";
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == false)) {
                // line 26
                echo "                                            <a class=\"blue\" href=\"#\">
                                                Dados do segundo responsavel
                                            </a>                                                                                            
                                        ";
            }
            // line 30
            echo "                                    </h4>
                                </div>
                            </div>
                            ";
            // line 33
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == true)) {
                // line 34
                echo "                                <div class=\"\">
                                ";
            }
            // line 36
            echo "                                ";
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == false)) {
                // line 37
                echo "                                    <div class=\"\">
                                    ";
            }
            // line 39
            echo "                                    <div class=\"panel-body\">
                                        <div class=\"form-group\">
                                            <div class=\"widget-box\">
                                                ";
            // line 42
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == true)) {
                // line 43
                echo "                                                    <div class=\"widget-header widget-header-small header-color-green\">
                                                        <label class=\"control-label\"> Nome do responsavel </label>
                                                    </div>
                                                ";
            }
            // line 47
            echo "                                                ";
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == false)) {
                // line 48
                echo "                                                    <div class=\"widget-header widget-header-small header-color-blue\" style=\"background-color: #6FB3E0 !important; border: none\">
                                                        <label class=\"control-label\"> Nome do responsavel </label>
                                                    </div>
                                                ";
            }
            // line 52
            echo "                                                <div class=\"widget-body\">
                                                    <div class=\"dd2-content no-hover\">
                                                        ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oresponsavel"], "getResponsavel", array(), "method"), "getNome", array(), "method"), "html", null, true);
            echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"widget-box\">
                                                ";
            // line 61
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == true)) {
                // line 62
                echo "                                                    <div class=\"widget-header widget-header-small header-color-green\">
                                                        <label class=\"control-label\"> Ocupa&ccedil;&atilde;o do responsavel</label>
                                                    </div>
                                                ";
            }
            // line 66
            echo "                                                ";
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == false)) {
                // line 67
                echo "                                                    <div class=\"widget-header widget-header-small header-color-blue\" style=\"background-color: #6FB3E0 !important; border: none\">
                                                        <label class=\"control-label\"> Ocupa&ccedil;&atilde;o do responsavel</label>
                                                    </div>
                                                ";
            }
            // line 71
            echo "                                                <div class=\"widget-body\">
                                                    <div class=\"dd2-content no-hover\">
                                                        ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oresponsavel"], "getResponsavel", array(), "method"), "getOcupacao", array(), "method"), "html", null, true);
            echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"widget-box\">
                                                ";
            // line 80
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == true)) {
                // line 81
                echo "                                                    <div class=\"widget-header widget-header-small header-color-green\">
                                                        <label class=\"control-label\"> Telefone para contato</label>
                                                    </div>
                                                ";
            }
            // line 85
            echo "                                                ";
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == false)) {
                // line 86
                echo "                                                    <div class=\"widget-header widget-header-small header-color-blue\" style=\"background-color: #6FB3E0 !important; border: none\">
                                                        <label class=\"control-label\"> Telefones para contato</label>
                                                    </div>
                                                ";
            }
            // line 90
            echo "                                                <div class=\"widget-body\">
                                                    <div class=\"dd2-content no-hover\">
                                                        ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oresponsavel"], "getResponsavel", array(), "method"), "getTelefContato", array(), "method"), "html", null, true);
            echo "
                                                    </div>
                                                    <div class=\"dd2-content no-hover\">
                                                        ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oresponsavel"], "getResponsavel", array(), "method"), "getTelefContato2", array(), "method"), "html", null, true);
            echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"widget-box\">
                                                ";
            // line 102
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == true)) {
                // line 103
                echo "                                                    <div class=\"widget-header widget-header-small header-color-green\">
                                                        <label class=\"control-label\"> Email para contato</label>
                                                    </div>
                                                ";
            }
            // line 107
            echo "                                                ";
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == false)) {
                // line 108
                echo "                                                    <div class=\"widget-header widget-header-small header-color-blue\" style=\"background-color: #6FB3E0 !important; border: none\">
                                                        <label class=\"control-label\"> Email para contato</label>
                                                    </div>
                                                ";
            }
            // line 112
            echo "                                                <div class=\"widget-body\">
                                                    <div class=\"dd2-content no-hover \">
                                                        ";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oresponsavel"], "getResponsavel", array(), "method"), "getEmail", array(), "method"), "html", null, true);
            echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        ";
            // line 124
            $context["hFlag"] = false;
            echo "            
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oresponsavel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                </div>
            </div>
        </div>
    </div>";
        
        $__internal_a63326e001b6429fc4b6fe80d536b9cfdf91599f8fd5da3a17806b4b753ff0dd->leave($__internal_a63326e001b6429fc4b6fe80d536b9cfdf91599f8fd5da3a17806b4b753ff0dd_prof);

    }

    public function getTemplateName()
    {
        return "DailyWorkBundle:Default:dadosResponsavel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 126,  228 => 124,  215 => 114,  211 => 112,  205 => 108,  202 => 107,  196 => 103,  194 => 102,  184 => 95,  178 => 92,  174 => 90,  168 => 86,  165 => 85,  159 => 81,  157 => 80,  147 => 73,  143 => 71,  137 => 67,  134 => 66,  128 => 62,  126 => 61,  116 => 54,  112 => 52,  106 => 48,  103 => 47,  97 => 43,  95 => 42,  90 => 39,  86 => 37,  83 => 36,  79 => 34,  77 => 33,  72 => 30,  66 => 26,  63 => 25,  55 => 20,  47 => 14,  42 => 13,  40 => 12,  28 => 5,  22 => 1,);
    }
}
