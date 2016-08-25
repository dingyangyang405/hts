<?php

/* WebBundle:Register:register.html.twig */
class __TwigTemplate_725926a5927be8acdd5a7e47837dd97f09dbf864b1c99468f698ae82b27b811f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle:Default:layout.html.twig", "WebBundle:Register:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c30d1637e8078d1a03eb47fe237a9862c7474ddf8890bfc74cf42c222f6e139b = $this->env->getExtension("native_profiler");
        $__internal_c30d1637e8078d1a03eb47fe237a9862c7474ddf8890bfc74cf42c222f6e139b->enter($__internal_c30d1637e8078d1a03eb47fe237a9862c7474ddf8890bfc74cf42c222f6e139b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Register:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c30d1637e8078d1a03eb47fe237a9862c7474ddf8890bfc74cf42c222f6e139b->leave($__internal_c30d1637e8078d1a03eb47fe237a9862c7474ddf8890bfc74cf42c222f6e139b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ac414e4e8f4ddb6706b941c61ee5e0a4adbb88f96d5a5b80562ff79461b9fbb = $this->env->getExtension("native_profiler");
        $__internal_7ac414e4e8f4ddb6706b941c61ee5e0a4adbb88f96d5a5b80562ff79461b9fbb->enter($__internal_7ac414e4e8f4ddb6706b941c61ee5e0a4adbb88f96d5a5b80562ff79461b9fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "注册";
        
        $__internal_7ac414e4e8f4ddb6706b941c61ee5e0a4adbb88f96d5a5b80562ff79461b9fbb->leave($__internal_7ac414e4e8f4ddb6706b941c61ee5e0a4adbb88f96d5a5b80562ff79461b9fbb_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_6efa965554f9f3fc15ecbf5246182df566c8160bd326d82f647c944fb211c90e = $this->env->getExtension("native_profiler");
        $__internal_6efa965554f9f3fc15ecbf5246182df566c8160bd326d82f647c944fb211c90e->enter($__internal_6efa965554f9f3fc15ecbf5246182df566c8160bd326d82f647c944fb211c90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    ";
        $this->loadTemplate("WebBundle:Register:register-header.html.twig", "WebBundle:Register:register.html.twig", 6)->display($context);
        // line 7
        echo "  ";
        
        $__internal_6efa965554f9f3fc15ecbf5246182df566c8160bd326d82f647c944fb211c90e->leave($__internal_6efa965554f9f3fc15ecbf5246182df566c8160bd326d82f647c944fb211c90e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7efbae5cd95e6f9d94e97aaaf73cb7e2b46c4f3711d53049679dc76071ae6585 = $this->env->getExtension("native_profiler");
        $__internal_7efbae5cd95e6f9d94e97aaaf73cb7e2b46c4f3711d53049679dc76071ae6585->enter($__internal_7efbae5cd95e6f9d94e97aaaf73cb7e2b46c4f3711d53049679dc76071ae6585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("WebBundle:Register:register-body.html.twig", "WebBundle:Register:register.html.twig", 9)->display($context);
        // line 10
        echo "  ";
        
        $__internal_7efbae5cd95e6f9d94e97aaaf73cb7e2b46c4f3711d53049679dc76071ae6585->leave($__internal_7efbae5cd95e6f9d94e97aaaf73cb7e2b46c4f3711d53049679dc76071ae6585_prof);

    }

    // line 11
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c8177ec138dd39367e24c7d6d13143c0db1b12f2d905f766f8de9d0d4ace270c = $this->env->getExtension("native_profiler");
        $__internal_c8177ec138dd39367e24c7d6d13143c0db1b12f2d905f766f8de9d0d4ace270c->enter($__internal_c8177ec138dd39367e24c7d6d13143c0db1b12f2d905f766f8de9d0d4ace270c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 12
        echo "      <style>
        body{
          background-color: rgb(249,250,252) ;
        }
      </style>
  ";
        
        $__internal_c8177ec138dd39367e24c7d6d13143c0db1b12f2d905f766f8de9d0d4ace270c->leave($__internal_c8177ec138dd39367e24c7d6d13143c0db1b12f2d905f766f8de9d0d4ace270c_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Register:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 12,  81 => 11,  74 => 10,  71 => 9,  65 => 8,  58 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "WebBundle:Default:layout.html.twig" %}*/
/* */
/* {% block title %}注册{% endblock %}*/
/* */
/*   {% block header %}*/
/*     {% include 'WebBundle:Register:register-header.html.twig' %}*/
/*   {% endblock %}*/
/*   {% block body %}*/
/*     {% include 'WebBundle:Register:register-body.html.twig' %}*/
/*   {% endblock %}*/
/*   {% block footer %}*/
/*       <style>*/
/*         body{*/
/*           background-color: rgb(249,250,252) ;*/
/*         }*/
/*       </style>*/
/*   {% endblock %}*/
