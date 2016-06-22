<?php

/* DailyWorkBundle:Default:dadosResponsavelEdit.html.twig */
class __TwigTemplate_bcd59944078e74b6f5310970491630893f60a09970f1ed47b908bd04b171b67d extends Twig_Template
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
        $__internal_8deda28e8d666b67bc09bc8a6bfedc7feb858144174ed220a016ccfe1e2da649 = $this->env->getExtension("native_profiler");
        $__internal_8deda28e8d666b67bc09bc8a6bfedc7feb858144174ed220a016ccfe1e2da649->enter($__internal_8deda28e8d666b67bc09bc8a6bfedc7feb858144174ed220a016ccfe1e2da649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DailyWorkBundle:Default:dadosResponsavelEdit.html.twig"));

        // line 1
        echo "<div class=\"col-sm-12 col-md-12\">
    <div class=\"widget-header widget-header-small\">
        <h4>Dados dos Responsavel</h4> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a id=\"cancel_bt\" class=\"red no-hover bigger-130\" href=\"#\" id-pac=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")), "getIdPaciente", array(), "method"), "html", null, true);
        echo "\" url=\"";
        echo $this->env->getExtension('routing')->getPath("cancel_responsavel_url");
        echo "\">
            <i class=\"icon-exclamation-sign\"></i>
            Cancelar
        </a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a id=\"save_bt\" class=\"blue no-hover bigger-130\" href=\"#\" id-pac=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")), "getIdPaciente", array(), "method"), "html", null, true);
        echo "\" url=\"";
        echo $this->env->getExtension('routing')->getPath("actualizar_responsavel_url");
        echo "\">
            <i class=\"icon-save\"></i>
            Salvar
        </a>
    </div>
    <div class=\"widget-body\">
        <div class=\"widget-box\">
            ";
        // line 17
        $context["hFlag"] = true;
        // line 18
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "ordenResponsavels", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["oresponsavel"]) {
            // line 19
            echo "                <div class=\"row form-group\">
                    <div class=\"col-xs-6 col-md-6\">
                        <div class=\"row-fluid position-relative\">
                            <div class=\"panel\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\">
                                        ";
            // line 25
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == true)) {
                echo "           
                                            <a class=\"green\" href=\"#\">
                                                Dados do primero responsavel
                                            </a>
                                        ";
            }
            // line 30
            echo "                                        ";
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == false)) {
                // line 31
                echo "                                            <a class=\"blue\" href=\"#\">
                                                Dados do segundo responsavel
                                            </a>                                                                                            
                                        ";
            }
            // line 35
            echo "                                    </h4>
                                </div>
                            </div>
                            ";
            // line 38
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == true)) {
                // line 39
                echo "                                <div class=\"\">
                                ";
            }
            // line 41
            echo "                                ";
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == false)) {
                // line 42
                echo "                                    <div class=\"\">
                                    ";
            }
            // line 44
            echo "                                    <div class=\"panel-body\">
                                        <div class=\"form-group\">
                                            <div class=\"widget-box\">
                                                ";
            // line 47
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == true)) {
                // line 48
                echo "                                                    <div class=\"widget-header widget-header-small header-color-green\">
                                                        <label class=\"control-label\"> Nome do responsavel </label>
                                                    </div>
                                                ";
            }
            // line 52
            echo "                                                ";
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == false)) {
                // line 53
                echo "                                                    <div class=\"widget-header widget-header-small header-color-blue\" style=\"background-color: #6FB3E0 !important; border: none\">
                                                        <label class=\"control-label\"> Nome do responsavel </label>
                                                    </div>
                                                ";
            }
            // line 57
            echo "                                                ";
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["oresponsavel"], "responsavel", array()), "nome", array()), 'errors')) {
                // line 58
                echo "                                                    <div class=\"alert alert-danger\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                                        ";
                // line 60
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["oresponsavel"], "responsavel", array()), "nome", array()), 'errors');
                echo "
                                                    </div>
                                                ";
            }
            // line 63
            echo "                                                <div class=\"widget-body\">           
                                                        ";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["oresponsavel"], "responsavel", array()), "nome", array()), 'widget', array("attr" => array("class" => "dd2-content col-xs-12 col-sm-12")));
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"widget-box\">
                                                ";
            // line 70
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == true)) {
                // line 71
                echo "                                                    <div class=\"widget-header widget-header-small header-color-green\">
                                                        <label class=\"control-label\"> Ocupa&ccedil;&atilde;o do responsavel</label>
                                                    </div>
                                                ";
            }
            // line 75
            echo "                                                ";
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == false)) {
                // line 76
                echo "                                                    <div class=\"widget-header widget-header-small header-color-blue\" style=\"background-color: #6FB3E0 !important; border: none\">
                                                        <label class=\"control-label\"> Ocupa&ccedil;&atilde;o do responsavel</label>
                                                    </div>
                                                ";
            }
            // line 80
            echo "                                                ";
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["oresponsavel"], "responsavel", array()), "ocupacao", array()), 'errors')) {
                // line 81
                echo "                                                    <div class=\"alert alert-danger\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                                        ";
                // line 83
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["oresponsavel"], "responsavel", array()), "ocupacao", array()), 'errors');
                echo "
                                                    </div>
                                                ";
            }
            // line 86
            echo "                                                <div class=\"widget-body\">
                                                        ";
            // line 87
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["oresponsavel"], "responsavel", array()), "ocupacao", array()), 'widget', array("attr" => array("class" => "dd2-content col-xs-12 col-sm-12")));
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"widget-box\">
                                                ";
            // line 93
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == true)) {
                // line 94
                echo "                                                    <div class=\"widget-header widget-header-small header-color-green\">
                                                        <label class=\"control-label\"> Telefone para contato</label>
                                                    </div>
                                                ";
            }
            // line 98
            echo "                                                ";
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == false)) {
                // line 99
                echo "                                                    <div class=\"widget-header widget-header-small header-color-blue\" style=\"background-color: #6FB3E0 !important; border: none\">
                                                        <label class=\"control-label\"> Telefone para contato</label>
                                                    </div>
                                                ";
            }
            // line 103
            echo "                                                ";
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["oresponsavel"], "responsavel", array()), "telefContato", array()), 'errors')) {
                // line 104
                echo "                                                    <div class=\"alert alert-danger\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                                        ";
                // line 106
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["oresponsavel"], "responsavel", array()), "telefContato", array()), 'errors');
                echo "
                                                    </div>
                                                ";
            }
            // line 109
            echo "                                                <div class=\"widget-body\">
                                                        ";
            // line 110
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["oresponsavel"], "responsavel", array()), "telefContato", array()), 'widget', array("attr" => array("class" => "dd2-content col-xs-12 col-sm-12")));
            echo "
                                                </div>
                                                ";
            // line 112
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["oresponsavel"], "responsavel", array()), "telefContato_2", array()), 'errors')) {
                // line 113
                echo "                                                    <div class=\"alert alert-danger\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                                        ";
                // line 115
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["oresponsavel"], "responsavel", array()), "getTelefContato2", array(), "method"), 'errors');
                echo "
                                                    </div>
                                                ";
            }
            // line 118
            echo "                                                <div class=\"widget-body\">
                                                        ";
            // line 119
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["oresponsavel"], "responsavel", array()), "telefContato_2", array()), 'widget', array("attr" => array("class" => "dd2-content col-xs-12 col-sm-12")));
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"widget-box\">
                                                ";
            // line 125
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == true)) {
                // line 126
                echo "                                                    <div class=\"widget-header widget-header-small header-color-green\">
                                                        <label class=\"control-label\"> Email para contato</label>
                                                    </div>
                                                ";
            }
            // line 130
            echo "                                                ";
            if (((isset($context["hFlag"]) ? $context["hFlag"] : $this->getContext($context, "hFlag")) == false)) {
                // line 131
                echo "                                                    <div class=\"widget-header widget-header-small header-color-blue\" style=\"background-color: #6FB3E0 !important; border: none\">
                                                        <label class=\"control-label\"> Email para contato</label>
                                                    </div>
                                                ";
            }
            // line 135
            echo "                                                ";
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["oresponsavel"], "responsavel", array()), "email", array()), 'errors')) {
                // line 136
                echo "                                                    <div class=\"alert alert-danger\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                                        ";
                // line 138
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["oresponsavel"], "responsavel", array()), "email", array()), 'errors');
                echo "
                                                    </div>
                                                ";
            }
            // line 141
            echo "                                                <div class=\"widget-body\">
                                                        ";
            // line 142
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["oresponsavel"], "responsavel", array()), "email", array()), 'widget', array("attr" => array("class" => "dd2-content col-xs-12 col-sm-12")));
            echo "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
            // line 150
            $context["hFlag"] = false;
            echo "            
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oresponsavel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                </div>
            </div>
        </div>
    </div>
";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "_token", array()), 'row');
        
        $__internal_8deda28e8d666b67bc09bc8a6bfedc7feb858144174ed220a016ccfe1e2da649->leave($__internal_8deda28e8d666b67bc09bc8a6bfedc7feb858144174ed220a016ccfe1e2da649_prof);

    }

    public function getTemplateName()
    {
        return "DailyWorkBundle:Default:dadosResponsavelEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 156,  303 => 152,  295 => 150,  284 => 142,  281 => 141,  275 => 138,  271 => 136,  268 => 135,  262 => 131,  259 => 130,  253 => 126,  251 => 125,  242 => 119,  239 => 118,  233 => 115,  229 => 113,  227 => 112,  222 => 110,  219 => 109,  213 => 106,  209 => 104,  206 => 103,  200 => 99,  197 => 98,  191 => 94,  189 => 93,  180 => 87,  177 => 86,  171 => 83,  167 => 81,  164 => 80,  158 => 76,  155 => 75,  149 => 71,  147 => 70,  138 => 64,  135 => 63,  129 => 60,  125 => 58,  122 => 57,  116 => 53,  113 => 52,  107 => 48,  105 => 47,  100 => 44,  96 => 42,  93 => 41,  89 => 39,  87 => 38,  82 => 35,  76 => 31,  73 => 30,  65 => 25,  57 => 19,  52 => 18,  50 => 17,  38 => 10,  28 => 5,  22 => 1,);
    }
}
