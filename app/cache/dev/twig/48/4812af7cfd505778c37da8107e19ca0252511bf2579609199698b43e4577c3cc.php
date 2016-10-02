<?php

/* AdminBundle:Faq:faq-list.html.twig */
class __TwigTemplate_077ba9af0b923a8441463f02edbc79ba8266e1cb3a2d0735ebe40b44f3aab7ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:layout.html.twig", "AdminBundle:Faq:faq-list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_6442cff89b6241508c3f03fc5bc759ca494cf8753f315d6a27d2cfdf39731e10 = $this->env->getExtension("native_profiler");
        $__internal_6442cff89b6241508c3f03fc5bc759ca494cf8753f315d6a27d2cfdf39731e10->enter($__internal_6442cff89b6241508c3f03fc5bc759ca494cf8753f315d6a27d2cfdf39731e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Faq:faq-list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6442cff89b6241508c3f03fc5bc759ca494cf8753f315d6a27d2cfdf39731e10->leave($__internal_6442cff89b6241508c3f03fc5bc759ca494cf8753f315d6a27d2cfdf39731e10_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9cefe90026d8c7ead5b843797b532c09940f3e810f4c69fe569c517cd6e3bf3 = $this->env->getExtension("native_profiler");
        $__internal_b9cefe90026d8c7ead5b843797b532c09940f3e810f4c69fe569c517cd6e3bf3->enter($__internal_b9cefe90026d8c7ead5b843797b532c09940f3e810f4c69fe569c517cd6e3bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "后台";
        
        $__internal_b9cefe90026d8c7ead5b843797b532c09940f3e810f4c69fe569c517cd6e3bf3->leave($__internal_b9cefe90026d8c7ead5b843797b532c09940f3e810f4c69fe569c517cd6e3bf3_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f17d983576c3525f735ce5b61269ea6be000f0796241c8b13cc74f82875c3258 = $this->env->getExtension("native_profiler");
        $__internal_f17d983576c3525f735ce5b61269ea6be000f0796241c8b13cc74f82875c3258->enter($__internal_f17d983576c3525f735ce5b61269ea6be000f0796241c8b13cc74f82875c3258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/viewer/css/viewer.min.css"), "html", null, true);
        echo "\">


  <style>
    
    .attachment-preview {
      margin-top: 0px;
      width: 300px;
      height: 40px;
    }

    .attachment-preview li {
      display: inline-block; 
      width: 40px; 
      margin-left: 1%; 
      padding-top: 1%;
    }
    .attachment-preview li img { 
      width: 100%;
    }
  </style>
";
        
        $__internal_f17d983576c3525f735ce5b61269ea6be000f0796241c8b13cc74f82875c3258->leave($__internal_f17d983576c3525f735ce5b61269ea6be000f0796241c8b13cc74f82875c3258_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac1905dff31c43b70ae492db86bed8607acb7f767ce8ed8dedb933c4d70b5bcb = $this->env->getExtension("native_profiler");
        $__internal_ac1905dff31c43b70ae492db86bed8607acb7f767ce8ed8dedb933c4d70b5bcb->enter($__internal_ac1905dff31c43b70ae492db86bed8607acb7f767ce8ed8dedb933c4d70b5bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/validator/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/validator/messages_cn.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/viewer/js/viewer.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/admin/faq/list.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ac1905dff31c43b70ae492db86bed8607acb7f767ce8ed8dedb933c4d70b5bcb->leave($__internal_ac1905dff31c43b70ae492db86bed8607acb7f767ce8ed8dedb933c4d70b5bcb_prof);

    }

    // line 36
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_3088d69c1011030d58d131ada5845b386e254fdf5a1b9019940a9e3003b54653 = $this->env->getExtension("native_profiler");
        $__internal_3088d69c1011030d58d131ada5845b386e254fdf5a1b9019940a9e3003b54653->enter($__internal_3088d69c1011030d58d131ada5845b386e254fdf5a1b9019940a9e3003b54653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 37
        echo "  ";
        $this->loadTemplate("AdminBundle:Faq:faq-wrapper.html.twig", "AdminBundle:Faq:faq-list.html.twig", 37)->display($context);
        
        $__internal_3088d69c1011030d58d131ada5845b386e254fdf5a1b9019940a9e3003b54653->leave($__internal_3088d69c1011030d58d131ada5845b386e254fdf5a1b9019940a9e3003b54653_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Faq:faq-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 37,  113 => 36,  104 => 33,  100 => 32,  96 => 31,  91 => 30,  85 => 29,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "AdminBundle:Default:layout.html.twig" %}*/
/* */
/* {% block title %}后台{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/viewer/css/viewer.min.css') }}">*/
/* */
/* */
/*   <style>*/
/*     */
/*     .attachment-preview {*/
/*       margin-top: 0px;*/
/*       width: 300px;*/
/*       height: 40px;*/
/*     }*/
/* */
/*     .attachment-preview li {*/
/*       display: inline-block; */
/*       width: 40px; */
/*       margin-left: 1%; */
/*       padding-top: 1%;*/
/*     }*/
/*     .attachment-preview li img { */
/*       width: 100%;*/
/*     }*/
/*   </style>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   <script src="{{ asset('assets/libs/validator/jquery.validate.min.js') }}"></script>*/
/*   <script src="{{ asset('assets/libs/validator/messages_cn.js') }}"></script>*/
/*   <script src="{{ asset('assets/libs/viewer/js/viewer.min.js') }}"></script>*/
/*   <script src="{{ asset('assets/js/admin/faq/list.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block wrapper %}*/
/*   {% include 'AdminBundle:Faq:faq-wrapper.html.twig' %}*/
/* {% endblock %}*/
/* */
