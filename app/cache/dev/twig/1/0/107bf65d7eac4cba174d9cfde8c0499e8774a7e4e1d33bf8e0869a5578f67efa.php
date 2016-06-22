<?php

/* DailyWorkBundle:Default:showPatientConsulta.html.twig */
class __TwigTemplate_107bf65d7eac4cba174d9cfde8c0499e8774a7e4e1d33bf8e0869a5578f67efa extends Twig_Template
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
        $__internal_efa18f8aab2b274902f581fa44550b4434dcc6d2eebb8e4632293b6bef6d386d = $this->env->getExtension("native_profiler");
        $__internal_efa18f8aab2b274902f581fa44550b4434dcc6d2eebb8e4632293b6bef6d386d->enter($__internal_efa18f8aab2b274902f581fa44550b4434dcc6d2eebb8e4632293b6bef6d386d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DailyWorkBundle:Default:showPatientConsulta.html.twig"));

        // line 1
        echo "<form id=\"consulta-paciente-form\" id-con=\"";
        echo twig_escape_filter($this->env, (isset($context["id_consulta"]) ? $context["id_consulta"] : $this->getContext($context, "id_consulta")), "html", null, true);
        echo "\" url=\"";
        echo $this->env->getExtension('routing')->getPath("one_consulta_url");
        echo "\" class=\"my-form\" onclick=\"\" method=\"post\">
        <div>
            <div class=\"widget-header\">
                <h4>Consulta</h4>
            </div>
            <div class=\"widget-body\"> 
                <div class=\"row btn-group consulta-group\" style=\"padding-top: 10px;\">
                    <button  type=\"button\" class=\"btn btn-info btn-xs btn-back-consulta\" >Voltar</button>
                    <button  type=\"button\" class=\"btn btn-info btn-xs btn-edit-consulta\" >Editar</button>
                </div>
                <div class=\"row btn-group consulta-edit-group\" style=\"padding-top: 10px;\">
                    <button type=\"button\" class=\"btn btn-info btn-xs btn-ok-consulta\" >Aceptar</button>
                    <button type=\"button\" class=\"btn btn-info btn-xs btn-canc-consulta\" >Cancelar</button>
                </div>
                <div class=\"row consulta-edit-group\">
                        <div class=\"col-xs-12 col-md-12\">
                            <h4 class=\"header green\">
                                Diagn&oacute;stico 
                            </h4>
                                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")), "observacao", array()), 'widget', array("attr" => array("class" => "dd2-content col-xs-12 col-sm-12")));
        echo "
                            <h4 class=\"header green\">
                                Receita medica
                            </h4>
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")), "receita", array()), 'widget', array("attr" => array("class" => "dd2-content col-xs-12 col-sm-12")));
        echo "
                        </div>
                </div>
                <div class=\"row consulta-group\">
                        <div class=\"col-xs-12 col-md-12\">
                            <h4 class=\"header green\">
                                Diagn&oacute;stico 
                            </h4>
                            <div class=\"dd2-content no-hover\" style=\"word-break:break-all;\">
                                ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consulta"]) ? $context["consulta"] : $this->getContext($context, "consulta")), "getObservacao", array(), "method"), "html", null, true);
        echo "
                            </div>
                            <h4 class=\"header green\">
                                Receita medica
                            </h4>
                            <div class=\"dd2-content no-hover\" style=\"word-break:break-all;\">
                                ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consulta"]) ? $context["consulta"] : $this->getContext($context, "consulta")), "getReceita", array(), "method"), "html", null, true);
        echo "
                            </div>
                        </div>
                    </div>
                <div class=\"row btn-group consulta-group\" style=\"padding-top: 10px;\">
                    <button  type=\"button\" class=\"btn btn-info btn-xs btn-back-consulta\" >Voltar</button>
                    <button  type=\"button\" class=\"btn btn-info btn-xs btn-edit-consulta\" >Editar</button>
                </div>
                <div class=\"row btn-group consulta-edit-group\" style=\"padding-top: 10px;\">
                    <button type=\"button\" class=\"btn btn-info btn-xs btn-ok-consulta\" >Aceptar</button>
                    <button type=\"button\" class=\"btn btn-info btn-xs btn-canc-consulta\" >Cancelar</button>
                </div>            
        </div>
    </div>
    <div id=\"rest_form\">
        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")), 'rest');
        echo "
    </div>
</form>
<script type=\"text/javascript\">
    \$('#rest_form').hide();
    \$('.my-consulta').unbind('click');
    \$('.my-consulta').click(ViewOneConsulta);
    \$('.consulta-edit-group').hide();
    \$('.btn-edit-consulta').click(function(){
        \$('.consulta-group').hide();
        \$('.consulta-edit-group').show();
    });
    \$('.btn-back-consulta').click(function(){
        \$('#one_diagnostic_info').hide();
        \$('#new_diagnostic').hide();
        \$('#list_diagnostic').show();
    });
    \$('.btn-canc-consulta').click(function(){
        \$('.consulta-group').show();
        \$('.consulta-edit-group').hide();
    });
    \$('.btn-ok-consulta').click(function(){
        var id = \$('#consulta-paciente-form').attr('id-con');
        var url = \$('#consulta-paciente-form').attr('url');
        \$.post(url + id, \$('#consulta-paciente-form').serialize(), function (data) {
            if (data.status == 'OK') {
                \$('#one_diagnostic_info').hide();
                \$('#new_diagnostic').hide();
                \$('#list_diagnostic').show();
                
                ViewOneConsultaC(id, url);
                UpdateConsultasList();
            }
            else {
                alert('Error!!!');
            }
        }, 'json');
    });
    
</script>";
        
        $__internal_efa18f8aab2b274902f581fa44550b4434dcc6d2eebb8e4632293b6bef6d386d->leave($__internal_efa18f8aab2b274902f581fa44550b4434dcc6d2eebb8e4632293b6bef6d386d_prof);

    }

    public function getTemplateName()
    {
        return "DailyWorkBundle:Default:showPatientConsulta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 54,  75 => 39,  66 => 33,  54 => 24,  47 => 20,  22 => 1,);
    }
}
