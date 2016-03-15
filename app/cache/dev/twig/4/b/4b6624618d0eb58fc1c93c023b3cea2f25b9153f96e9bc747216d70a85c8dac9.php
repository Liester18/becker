<?php

/* base.html.twig */
class __TwigTemplate_4b6624618d0eb58fc1c93c023b3cea2f25b9153f96e9bc747216d70a85c8dac9 extends Twig_Template
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
        $__internal_d72d5f1fd6b4fb6635550fdc7f740ce66209efcbb60326c0571e61e7f15d930d = $this->env->getExtension("native_profiler");
        $__internal_d72d5f1fd6b4fb6635550fdc7f740ce66209efcbb60326c0571e61e7f15d930d->enter($__internal_d72d5f1fd6b4fb6635550fdc7f740ce66209efcbb60326c0571e61e7f15d930d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d72d5f1fd6b4fb6635550fdc7f740ce66209efcbb60326c0571e61e7f15d930d->leave($__internal_d72d5f1fd6b4fb6635550fdc7f740ce66209efcbb60326c0571e61e7f15d930d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_04b688e801e4a095ed6dd680ab61c3122651b19f936a37068519dec88ed43a84 = $this->env->getExtension("native_profiler");
        $__internal_04b688e801e4a095ed6dd680ab61c3122651b19f936a37068519dec88ed43a84->enter($__internal_04b688e801e4a095ed6dd680ab61c3122651b19f936a37068519dec88ed43a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Consultorio Daniel Becker";
        
        $__internal_04b688e801e4a095ed6dd680ab61c3122651b19f936a37068519dec88ed43a84->leave($__internal_04b688e801e4a095ed6dd680ab61c3122651b19f936a37068519dec88ed43a84_prof);

    }

    // line 6
    public function block_meta($context, array $blocks = array())
    {
        $__internal_394e3a5840920fb28415e5a67fa84f05853f890b973a4058751f9c9a560201e8 = $this->env->getExtension("native_profiler");
        $__internal_394e3a5840920fb28415e5a67fa84f05853f890b973a4058751f9c9a560201e8->enter($__internal_394e3a5840920fb28415e5a67fa84f05853f890b973a4058751f9c9a560201e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        echo " ";
        
        $__internal_394e3a5840920fb28415e5a67fa84f05853f890b973a4058751f9c9a560201e8->leave($__internal_394e3a5840920fb28415e5a67fa84f05853f890b973a4058751f9c9a560201e8_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_25d12ec524ef07f8bbe19a6c585e1d0815a819e38bf42c6024f2b995bc521e13 = $this->env->getExtension("native_profiler");
        $__internal_25d12ec524ef07f8bbe19a6c585e1d0815a819e38bf42c6024f2b995bc521e13->enter($__internal_25d12ec524ef07f8bbe19a6c585e1d0815a819e38bf42c6024f2b995bc521e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_25d12ec524ef07f8bbe19a6c585e1d0815a819e38bf42c6024f2b995bc521e13->leave($__internal_25d12ec524ef07f8bbe19a6c585e1d0815a819e38bf42c6024f2b995bc521e13_prof);

    }

    // line 8
    public function block_js_head($context, array $blocks = array())
    {
        $__internal_50abdf34ee6f49601febdeacd82990c8d14e452b1c6d3ac70da3575cad6a4a59 = $this->env->getExtension("native_profiler");
        $__internal_50abdf34ee6f49601febdeacd82990c8d14e452b1c6d3ac70da3575cad6a4a59->enter($__internal_50abdf34ee6f49601febdeacd82990c8d14e452b1c6d3ac70da3575cad6a4a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_head"));

        
        $__internal_50abdf34ee6f49601febdeacd82990c8d14e452b1c6d3ac70da3575cad6a4a59->leave($__internal_50abdf34ee6f49601febdeacd82990c8d14e452b1c6d3ac70da3575cad6a4a59_prof);

    }

    // line 12
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_2072e17723352b7c10a05355c2a43c5baca286baf0a32bbbc6c366d222b54c66 = $this->env->getExtension("native_profiler");
        $__internal_2072e17723352b7c10a05355c2a43c5baca286baf0a32bbbc6c366d222b54c66->enter($__internal_2072e17723352b7c10a05355c2a43c5baca286baf0a32bbbc6c366d222b54c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_2072e17723352b7c10a05355c2a43c5baca286baf0a32bbbc6c366d222b54c66->leave($__internal_2072e17723352b7c10a05355c2a43c5baca286baf0a32bbbc6c366d222b54c66_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac3201a5a0431133f8f7a677abf143c847cba1d97063558b1d8b9e2b661fc6d8 = $this->env->getExtension("native_profiler");
        $__internal_ac3201a5a0431133f8f7a677abf143c847cba1d97063558b1d8b9e2b661fc6d8->enter($__internal_ac3201a5a0431133f8f7a677abf143c847cba1d97063558b1d8b9e2b661fc6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ac3201a5a0431133f8f7a677abf143c847cba1d97063558b1d8b9e2b661fc6d8->leave($__internal_ac3201a5a0431133f8f7a677abf143c847cba1d97063558b1d8b9e2b661fc6d8_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aaf5a98d1a047be14cb411036940aed0a232e79e342571f0973341dbea70fd16 = $this->env->getExtension("native_profiler");
        $__internal_aaf5a98d1a047be14cb411036940aed0a232e79e342571f0973341dbea70fd16->enter($__internal_aaf5a98d1a047be14cb411036940aed0a232e79e342571f0973341dbea70fd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_aaf5a98d1a047be14cb411036940aed0a232e79e342571f0973341dbea70fd16->leave($__internal_aaf5a98d1a047be14cb411036940aed0a232e79e342571f0973341dbea70fd16_prof);

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
