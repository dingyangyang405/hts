<?php

/* AdminBundle:User:index-service.html.twig */
class __TwigTemplate_a2d5cfe0de2ba6454f9ab91e053f5c27d23e1ee88eb076f50ea3bc329eaf903b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:layout.html.twig", "AdminBundle:User:index-service.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'wrapper' => array($this, 'block_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f138f18d167a04bfd35201c313e70599b797c7a5eb9a11ceda4dd681089e3c6d = $this->env->getExtension("native_profiler");
        $__internal_f138f18d167a04bfd35201c313e70599b797c7a5eb9a11ceda4dd681089e3c6d->enter($__internal_f138f18d167a04bfd35201c313e70599b797c7a5eb9a11ceda4dd681089e3c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:User:index-service.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f138f18d167a04bfd35201c313e70599b797c7a5eb9a11ceda4dd681089e3c6d->leave($__internal_f138f18d167a04bfd35201c313e70599b797c7a5eb9a11ceda4dd681089e3c6d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_043be710987e28dd3214803c0b1b5d0ab8f58cb84ae18dece98aa0db917613c7 = $this->env->getExtension("native_profiler");
        $__internal_043be710987e28dd3214803c0b1b5d0ab8f58cb84ae18dece98aa0db917613c7->enter($__internal_043be710987e28dd3214803c0b1b5d0ab8f58cb84ae18dece98aa0db917613c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "后台";
        
        $__internal_043be710987e28dd3214803c0b1b5d0ab8f58cb84ae18dece98aa0db917613c7->leave($__internal_043be710987e28dd3214803c0b1b5d0ab8f58cb84ae18dece98aa0db917613c7_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b40b63f36bd29c542317c43790f086cd31b2c66680fe455782ef612b779c9d60 = $this->env->getExtension("native_profiler");
        $__internal_b40b63f36bd29c542317c43790f086cd31b2c66680fe455782ef612b779c9d60->enter($__internal_b40b63f36bd29c542317c43790f086cd31b2c66680fe455782ef612b779c9d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/validator/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/validator/messages_cn.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_b40b63f36bd29c542317c43790f086cd31b2c66680fe455782ef612b779c9d60->leave($__internal_b40b63f36bd29c542317c43790f086cd31b2c66680fe455782ef612b779c9d60_prof);

    }

    // line 10
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_6e9339010df9f41339a066efa6c135a14ead4d2b31f896ca3d5a7943f2070da1 = $this->env->getExtension("native_profiler");
        $__internal_6e9339010df9f41339a066efa6c135a14ead4d2b31f896ca3d5a7943f2070da1->enter($__internal_6e9339010df9f41339a066efa6c135a14ead4d2b31f896ca3d5a7943f2070da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 11
        echo "  ";
        $this->loadTemplate("AdminBundle:User:index-service-wrapper.html.twig", "AdminBundle:User:index-service.html.twig", 11)->display($context);
        
        $__internal_6e9339010df9f41339a066efa6c135a14ead4d2b31f896ca3d5a7943f2070da1->leave($__internal_6e9339010df9f41339a066efa6c135a14ead4d2b31f896ca3d5a7943f2070da1_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:User:index-service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  68 => 10,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "AdminBundle:Default:layout.html.twig" %}*/
/* */
/* {% block title %}后台{% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   <script src="{{ asset('assets/libs/validator/jquery.validate.min.js') }}"></script>*/
/*   <script src="{{ asset('assets/libs/validator/messages_cn.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block wrapper %}*/
/*   {% include 'AdminBundle:User:index-service-wrapper.html.twig' %}*/
/* {% endblock %}*/
