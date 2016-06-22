<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ed051cb96a5a7a07f4dedeae04addaed878f790f7be901133cc04dbdbe0e1d4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a7f90c20355c95e2ed0076075e592f7c813ac0f663bfa5b99c5ab1bece46d48 = $this->env->getExtension("native_profiler");
        $__internal_3a7f90c20355c95e2ed0076075e592f7c813ac0f663bfa5b99c5ab1bece46d48->enter($__internal_3a7f90c20355c95e2ed0076075e592f7c813ac0f663bfa5b99c5ab1bece46d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a7f90c20355c95e2ed0076075e592f7c813ac0f663bfa5b99c5ab1bece46d48->leave($__internal_3a7f90c20355c95e2ed0076075e592f7c813ac0f663bfa5b99c5ab1bece46d48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_824ee31970c3503ee46354d1eccf7743d2c9580609262beedf649322a6f35cb0 = $this->env->getExtension("native_profiler");
        $__internal_824ee31970c3503ee46354d1eccf7743d2c9580609262beedf649322a6f35cb0->enter($__internal_824ee31970c3503ee46354d1eccf7743d2c9580609262beedf649322a6f35cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_824ee31970c3503ee46354d1eccf7743d2c9580609262beedf649322a6f35cb0->leave($__internal_824ee31970c3503ee46354d1eccf7743d2c9580609262beedf649322a6f35cb0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33037fc6695262e501e60090b85be378c9c61ab7d4bde3ecf65137fef9494e33 = $this->env->getExtension("native_profiler");
        $__internal_33037fc6695262e501e60090b85be378c9c61ab7d4bde3ecf65137fef9494e33->enter($__internal_33037fc6695262e501e60090b85be378c9c61ab7d4bde3ecf65137fef9494e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_33037fc6695262e501e60090b85be378c9c61ab7d4bde3ecf65137fef9494e33->leave($__internal_33037fc6695262e501e60090b85be378c9c61ab7d4bde3ecf65137fef9494e33_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_91d5035f9d2a4f30e265a6c435bef191679169b6d47bfd5cf12d0bead180930c = $this->env->getExtension("native_profiler");
        $__internal_91d5035f9d2a4f30e265a6c435bef191679169b6d47bfd5cf12d0bead180930c->enter($__internal_91d5035f9d2a4f30e265a6c435bef191679169b6d47bfd5cf12d0bead180930c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_91d5035f9d2a4f30e265a6c435bef191679169b6d47bfd5cf12d0bead180930c->leave($__internal_91d5035f9d2a4f30e265a6c435bef191679169b6d47bfd5cf12d0bead180930c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
