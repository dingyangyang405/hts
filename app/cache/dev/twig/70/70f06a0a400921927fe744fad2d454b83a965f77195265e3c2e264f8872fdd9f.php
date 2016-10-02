<?php

/* WebBundle:Default:index.html.twig */
class __TwigTemplate_852873aa981e7dc804b4d33329a8c4dfbc474451e8de00450bd378bb2742fe29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle:Default:layout.html.twig", "WebBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'wrapper' => array($this, 'block_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29c2389d6a66e8cd5669ee8c8b1c6879fca43d753c7c2776267774bc4acedc52 = $this->env->getExtension("native_profiler");
        $__internal_29c2389d6a66e8cd5669ee8c8b1c6879fca43d753c7c2776267774bc4acedc52->enter($__internal_29c2389d6a66e8cd5669ee8c8b1c6879fca43d753c7c2776267774bc4acedc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29c2389d6a66e8cd5669ee8c8b1c6879fca43d753c7c2776267774bc4acedc52->leave($__internal_29c2389d6a66e8cd5669ee8c8b1c6879fca43d753c7c2776267774bc4acedc52_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad2e281f8a2578c993c73364ae19309a503e5a4dc63715d0a6cd85100fa239e3 = $this->env->getExtension("native_profiler");
        $__internal_ad2e281f8a2578c993c73364ae19309a503e5a4dc63715d0a6cd85100fa239e3->enter($__internal_ad2e281f8a2578c993c73364ae19309a503e5a4dc63715d0a6cd85100fa239e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "前台";
        
        $__internal_ad2e281f8a2578c993c73364ae19309a503e5a4dc63715d0a6cd85100fa239e3->leave($__internal_ad2e281f8a2578c993c73364ae19309a503e5a4dc63715d0a6cd85100fa239e3_prof);

    }

    // line 5
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_6600befb1853b6dc4f2fa3e1d83ac89ba186198298789e0c81aecb560b9813b8 = $this->env->getExtension("native_profiler");
        $__internal_6600befb1853b6dc4f2fa3e1d83ac89ba186198298789e0c81aecb560b9813b8->enter($__internal_6600befb1853b6dc4f2fa3e1d83ac89ba186198298789e0c81aecb560b9813b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 6
        echo "  ";
        $this->loadTemplate("WebBundle:Default:index-wrapper.html.twig", "WebBundle:Default:index.html.twig", 6)->display($context);
        
        $__internal_6600befb1853b6dc4f2fa3e1d83ac89ba186198298789e0c81aecb560b9813b8->leave($__internal_6600befb1853b6dc4f2fa3e1d83ac89ba186198298789e0c81aecb560b9813b8_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WebBundle:Default:layout.html.twig" %}*/
/* */
/* {% block title %}前台{% endblock %}*/
/* */
/* {% block wrapper %}*/
/*   {% include 'WebBundle:Default:index-wrapper.html.twig' %}*/
/* {% endblock %}*/
