<?php

/* DailyWorkBundle:Default:consultas_Paciente.html.twig */
class __TwigTemplate_eb21dfaf1d1aef27798ea56239eecd4cf9cef4c54006c89deb42b621b8566627 extends Twig_Template
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
        $__internal_0449cabd503f691dd70db19b4f54f7b8846026941715704c2141d84974b3aac0 = $this->env->getExtension("native_profiler");
        $__internal_0449cabd503f691dd70db19b4f54f7b8846026941715704c2141d84974b3aac0->enter($__internal_0449cabd503f691dd70db19b4f54f7b8846026941715704c2141d84974b3aac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DailyWorkBundle:Default:consultas_Paciente.html.twig"));

        // line 1
        echo "<div class=\"table-responsive\">
    <div class=\"widget-box row\" >
        <div class=\"widget-header\">
                <h4>Listadas de consultas por data</h4>
        </div>
        <div class=\"widget-body\" style=\"padding-top: 5px;\">
            <div class=\"row\" style=\"padding-top: 5px;\">
                <button type=\"button\" class=\"btn btn-info btn-xs btn-back\" >Voltar</button><br/>
            </div>
            <ul class=\"row list-group select-cursor overflow-y-scroll\" style=\"overflow-y:auto; padding-top: 5px;\">
                ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["consultas"]) ? $context["consultas"] : $this->getContext($context, "consultas")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 12
            echo "                    <li class=\"alert-info list-group-item \"> 
                        <a href=\"#\" class=\"my-consulta\" url=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("one_consulta_url");
            echo "\" id-cons=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "getIdConsulta", array(), "method"), "html", null, true);
            echo "\">
                            ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "getData", array(), "method"), "format", array(0 => "Y-m-d"), "method"), "html", null, true);
            echo " 
                        </a>
                        <div class=\"dd2-content no-hover\" style=\"word-break:break-all;\">
                            ";
            // line 17
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["c"], "getObservacao", array(), "method")) > 100)) ? ((twig_slice($this->env, $this->getAttribute($context["c"], "getObservacao", array(), "method"), 0, 100) . "...")) : ($this->getAttribute($context["c"], "getObservacao", array(), "method"))), "html", null, true);
            echo "
                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </ul>
            <div class=\"row align-left\" style=\"padding-top: 5px; padding-bottom: 5px;\">
                <button type=\"button\" class=\"btn btn-info btn-xs btn-back\" >Voltar</button><br/>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\">
    \$('.my-consulta').unbind('click');
    \$('.my-consulta').click(ViewOneConsulta);
    \$('.btn-back').click(function(){
        \$('#list_diagnostic').hide();
        \$('#new_diagnostic').show();
    });
    
</script>";
        
        $__internal_0449cabd503f691dd70db19b4f54f7b8846026941715704c2141d84974b3aac0->leave($__internal_0449cabd503f691dd70db19b4f54f7b8846026941715704c2141d84974b3aac0_prof);

    }

    public function getTemplateName()
    {
        return "DailyWorkBundle:Default:consultas_Paciente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  53 => 17,  47 => 14,  41 => 13,  38 => 12,  34 => 11,  22 => 1,);
    }
}
