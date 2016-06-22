<?php

/* AutenticationBundle:Default:ini.html.twig */
class __TwigTemplate_6a30e3f744e51e188e04e5f951492a1a7d969f5b9788b62102784a407bb8d99b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "AutenticationBundle:Default:ini.html.twig", 2);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'javascripts_page' => array($this, 'block_javascripts_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73d38000dfb1e85f88364c633de4fb9c229b39060088f6630c1870fddafde07b = $this->env->getExtension("native_profiler");
        $__internal_73d38000dfb1e85f88364c633de4fb9c229b39060088f6630c1870fddafde07b->enter($__internal_73d38000dfb1e85f88364c633de4fb9c229b39060088f6630c1870fddafde07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AutenticationBundle:Default:ini.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73d38000dfb1e85f88364c633de4fb9c229b39060088f6630c1870fddafde07b->leave($__internal_73d38000dfb1e85f88364c633de4fb9c229b39060088f6630c1870fddafde07b_prof);

    }

    // line 4
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_7ce772c160f9acc9ddda4515f9e0d958bbea36ebfe375b593a1bb8ca08e30d5f = $this->env->getExtension("native_profiler");
        $__internal_7ce772c160f9acc9ddda4515f9e0d958bbea36ebfe375b593a1bb8ca08e30d5f->enter($__internal_7ce772c160f9acc9ddda4515f9e0d958bbea36ebfe375b593a1bb8ca08e30d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 5
        echo "    <div class=\"page-content\">

        <div class=\"row\">
            <div class=\"col-xs-12\">
                <!-- PAGE CONTENT BEGINS -->

                <div class=\"row user_";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "rol", array()), "id", array()), "html", null, true);
        echo "\">
                    <div class=\"col-xs-6 col-sm-3 pricing-box\">
                        <div class=\"widget-box\">
                            <div class=\"widget-header header-color-dark\">
                                <h5 class=\"bigger lighter\">Cadastro de clientes</h5>
                            </div>

                            <div class=\"widget-body\">
                                <div class=\"widget-main\">
                                   <!-- <input type=\"image\" class=\"img_crearficha\" src=\"";
        // line 20
        echo "\"> -->
                                    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("to_dwork");
        echo "\"><img class=\"img_crearficha\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/img/ficha_medica.jpeg"), "html", null, true);
        echo "\"/> </a>
                                    <hr />\t\t\t\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div>
                                    <a href=\"\" class=\"btn btn-block btn-inverse\">
                                        <i class=\"icon-leaf bigger-110\"></i>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
        // line 33
        echo "                
                    <div class=\"col-xs-6 col-sm-3 pricing-box\">
                        <div class=\"widget-box\">
                            <div class=\"widget-header header-color-blue\">
                                <h5 class=\"bigger lighter\">Atualizar/Consultar Clientes</h5>
                            </div>

                            <div class=\"widget-body\">
                                <div class=\"widget-main wm2\">
                                    <!-- <input type=\"image\" class=\"img_trabajod\" src=\"";
        // line 42
        echo "\"> -->
                                    <!--<a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("to_dawork");
        echo "\"><img class=\"img_trabajod\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/img/trabajod.jpeg"), "html", null, true);
        echo "\"/> </a> -->
                                    <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("to_reportes");
        echo "\"><img class=\"img_trabajod\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/img/trabajod.jpeg"), "html", null, true);
        echo "\"/> </a>
                                    <hr />\t\t\t\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div>
                                    <a href=\"#\" class=\"btn btn-block btn-primary\">
                                        <i class=\"icon-cog bigger-110\"></i>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 56
        echo "                                    
                   <!-- <div class=\"col-xs-6 col-sm-3 pricing-box\">
                        <div class=\"widget-box\">
                            <div class=\"widget-header header-color-green\">
                                <h5 class=\"bigger lighter\">Reportes</h5>
                            </div>

                            <div class=\"widget-body\">
                                <div class=\"widget-main\">
                                    <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("to_reportes");
        echo "\"><img class=\"img_reporte\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/img/reporte.jpeg"), "html", null, true);
        echo "\"/> </a>
                                    <!--<input type=\"image\" class=\"img_reporte\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/img/reporte.jpeg"), "html", null, true);
        echo "\"> -->
                            <!--        <hr />\t\t\t\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div>
                                    <a href=\"#\" class=\"btn btn-block btn-success\">
                                        <i class=\"icon-cogs bigger-110\"></i>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>      -->                          


                </div><!-- /.page-content -->
            ";
        
        $__internal_7ce772c160f9acc9ddda4515f9e0d958bbea36ebfe375b593a1bb8ca08e30d5f->leave($__internal_7ce772c160f9acc9ddda4515f9e0d958bbea36ebfe375b593a1bb8ca08e30d5f_prof);

    }

    // line 83
    public function block_javascripts_page($context, array $blocks = array())
    {
        $__internal_2a2307f33cb5c54bd98314b2346181719b5558ae6b18b6f94658b5813d2ebf86 = $this->env->getExtension("native_profiler");
        $__internal_2a2307f33cb5c54bd98314b2346181719b5558ae6b18b6f94658b5813d2ebf86->enter($__internal_2a2307f33cb5c54bd98314b2346181719b5558ae6b18b6f94658b5813d2ebf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_page"));

        echo "        
            ";
        
        $__internal_2a2307f33cb5c54bd98314b2346181719b5558ae6b18b6f94658b5813d2ebf86->leave($__internal_2a2307f33cb5c54bd98314b2346181719b5558ae6b18b6f94658b5813d2ebf86_prof);

    }

    public function getTemplateName()
    {
        return "AutenticationBundle:Default:ini.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 83,  134 => 66,  128 => 65,  117 => 56,  101 => 44,  95 => 43,  92 => 42,  81 => 33,  64 => 21,  61 => 20,  49 => 11,  41 => 5,  35 => 4,  11 => 2,);
    }
}
