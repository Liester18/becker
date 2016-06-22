<?php

/* base.html.twig */
class __TwigTemplate_03ac5d026c413d2929c6022396cf8eb114de808c0f3fa4d98cb2c53a03a6ace4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'js_head' => array($this, 'block_js_head'),
            'body_id' => array($this, 'block_body_id'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e923108cb965a8e7e6c69deaaeb346c52b4242d496269ad3c8d68f49aa938de = $this->env->getExtension("native_profiler");
        $__internal_0e923108cb965a8e7e6c69deaaeb346c52b4242d496269ad3c8d68f49aa938de->enter($__internal_0e923108cb965a8e7e6c69deaaeb346c52b4242d496269ad3c8d68f49aa938de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
               ";
        // line 6
        $this->displayBlock('meta', $context, $blocks);
        // line 7
        echo "               ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "               ";
        $this->displayBlock('js_head', $context, $blocks);
        // line 9
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body ";
        // line 12
        $this->displayBlock('body_id', $context, $blocks);
        echo ">
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_0e923108cb965a8e7e6c69deaaeb346c52b4242d496269ad3c8d68f49aa938de->leave($__internal_0e923108cb965a8e7e6c69deaaeb346c52b4242d496269ad3c8d68f49aa938de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd7a6e82a655420e037c53923933e7e57ddb849503e3547b174db19655148bd4 = $this->env->getExtension("native_profiler");
        $__internal_dd7a6e82a655420e037c53923933e7e57ddb849503e3547b174db19655148bd4->enter($__internal_dd7a6e82a655420e037c53923933e7e57ddb849503e3547b174db19655148bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Consultorio Daniel Becker";
        
        $__internal_dd7a6e82a655420e037c53923933e7e57ddb849503e3547b174db19655148bd4->leave($__internal_dd7a6e82a655420e037c53923933e7e57ddb849503e3547b174db19655148bd4_prof);

    }

    // line 6
    public function block_meta($context, array $blocks = array())
    {
        $__internal_ec1679cdc94ac4a2435d10c1f34340fbd799ab265615c96a97f3067e06e86264 = $this->env->getExtension("native_profiler");
        $__internal_ec1679cdc94ac4a2435d10c1f34340fbd799ab265615c96a97f3067e06e86264->enter($__internal_ec1679cdc94ac4a2435d10c1f34340fbd799ab265615c96a97f3067e06e86264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        echo " ";
        
        $__internal_ec1679cdc94ac4a2435d10c1f34340fbd799ab265615c96a97f3067e06e86264->leave($__internal_ec1679cdc94ac4a2435d10c1f34340fbd799ab265615c96a97f3067e06e86264_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5ad7f5075a902135281c8066d6ee0baf0c244bf3a117c7301ab54e3854e79808 = $this->env->getExtension("native_profiler");
        $__internal_5ad7f5075a902135281c8066d6ee0baf0c244bf3a117c7301ab54e3854e79808->enter($__internal_5ad7f5075a902135281c8066d6ee0baf0c244bf3a117c7301ab54e3854e79808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5ad7f5075a902135281c8066d6ee0baf0c244bf3a117c7301ab54e3854e79808->leave($__internal_5ad7f5075a902135281c8066d6ee0baf0c244bf3a117c7301ab54e3854e79808_prof);

    }

    // line 8
    public function block_js_head($context, array $blocks = array())
    {
        $__internal_6433b12aa1d94e0b5940321e53628cb9f279aa3d93e79a3394198e1086aefc82 = $this->env->getExtension("native_profiler");
        $__internal_6433b12aa1d94e0b5940321e53628cb9f279aa3d93e79a3394198e1086aefc82->enter($__internal_6433b12aa1d94e0b5940321e53628cb9f279aa3d93e79a3394198e1086aefc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_head"));

        
        $__internal_6433b12aa1d94e0b5940321e53628cb9f279aa3d93e79a3394198e1086aefc82->leave($__internal_6433b12aa1d94e0b5940321e53628cb9f279aa3d93e79a3394198e1086aefc82_prof);

    }

    // line 12
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_ad126dc29fc450c8c097f5ee085db5c2652bb2dce83ff721f2dacc174c662f7c = $this->env->getExtension("native_profiler");
        $__internal_ad126dc29fc450c8c097f5ee085db5c2652bb2dce83ff721f2dacc174c662f7c->enter($__internal_ad126dc29fc450c8c097f5ee085db5c2652bb2dce83ff721f2dacc174c662f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_ad126dc29fc450c8c097f5ee085db5c2652bb2dce83ff721f2dacc174c662f7c->leave($__internal_ad126dc29fc450c8c097f5ee085db5c2652bb2dce83ff721f2dacc174c662f7c_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8999dab38ae1d21c4eb928c42fd3dd85eebe9690fe765979bb93788e44bb55f = $this->env->getExtension("native_profiler");
        $__internal_e8999dab38ae1d21c4eb928c42fd3dd85eebe9690fe765979bb93788e44bb55f->enter($__internal_e8999dab38ae1d21c4eb928c42fd3dd85eebe9690fe765979bb93788e44bb55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e8999dab38ae1d21c4eb928c42fd3dd85eebe9690fe765979bb93788e44bb55f->leave($__internal_e8999dab38ae1d21c4eb928c42fd3dd85eebe9690fe765979bb93788e44bb55f_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_388132142b94592b5e68256622f9d905e515ace12d19d984d434d453ce85b29c = $this->env->getExtension("native_profiler");
        $__internal_388132142b94592b5e68256622f9d905e515ace12d19d984d434d453ce85b29c->enter($__internal_388132142b94592b5e68256622f9d905e515ace12d19d984d434d453ce85b29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_388132142b94592b5e68256622f9d905e515ace12d19d984d434d453ce85b29c->leave($__internal_388132142b94592b5e68256622f9d905e515ace12d19d984d434d453ce85b29c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 14,  130 => 13,  119 => 12,  108 => 8,  97 => 7,  85 => 6,  73 => 5,  64 => 15,  61 => 14,  59 => 13,  55 => 12,  50 => 10,  47 => 9,  44 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }
}
