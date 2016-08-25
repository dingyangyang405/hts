<?php

/* WebBundle:WorkSpace:workspace-list.html.twig */
class __TwigTemplate_a42b6370d471a1471a58d0aac42bc2fd269595030d196c5184d9c3e121d975cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle:Default:layout.html.twig", "WebBundle:WorkSpace:workspace-list.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'wrapper' => array($this, 'block_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41ff8f876846bb4a2dffb9ce003011431a3a8f9a502146f74e5f6cc69e2d58f0 = $this->env->getExtension("native_profiler");
        $__internal_41ff8f876846bb4a2dffb9ce003011431a3a8f9a502146f74e5f6cc69e2d58f0->enter($__internal_41ff8f876846bb4a2dffb9ce003011431a3a8f9a502146f74e5f6cc69e2d58f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:WorkSpace:workspace-list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41ff8f876846bb4a2dffb9ce003011431a3a8f9a502146f74e5f6cc69e2d58f0->leave($__internal_41ff8f876846bb4a2dffb9ce003011431a3a8f9a502146f74e5f6cc69e2d58f0_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8bde1086f2926cb6b7ec765d03301865f2049a0fb1238f326beab21fa167bc44 = $this->env->getExtension("native_profiler");
        $__internal_8bde1086f2926cb6b7ec765d03301865f2049a0fb1238f326beab21fa167bc44->enter($__internal_8bde1086f2926cb6b7ec765d03301865f2049a0fb1238f326beab21fa167bc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/datetimepicker/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
  <style>
    h5 {
      margin: 0px;
    }
  </style>
";
        
        $__internal_8bde1086f2926cb6b7ec765d03301865f2049a0fb1238f326beab21fa167bc44->leave($__internal_8bde1086f2926cb6b7ec765d03301865f2049a0fb1238f326beab21fa167bc44_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab52b72de5610920685a6d4605338ec2c1c6753de46e5206ad4bbf0b059d54ab = $this->env->getExtension("native_profiler");
        $__internal_ab52b72de5610920685a6d4605338ec2c1c6753de46e5206ad4bbf0b059d54ab->enter($__internal_ab52b72de5610920685a6d4605338ec2c1c6753de46e5206ad4bbf0b059d54ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/web/operator/workspace.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ab52b72de5610920685a6d4605338ec2c1c6753de46e5206ad4bbf0b059d54ab->leave($__internal_ab52b72de5610920685a6d4605338ec2c1c6753de46e5206ad4bbf0b059d54ab_prof);

    }

    // line 16
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_de7e4b42647392aff64cb2bf48c1ba450b1027706216400820b833825cd82be7 = $this->env->getExtension("native_profiler");
        $__internal_de7e4b42647392aff64cb2bf48c1ba450b1027706216400820b833825cd82be7->enter($__internal_de7e4b42647392aff64cb2bf48c1ba450b1027706216400820b833825cd82be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 17
        echo "    ";
        $this->loadTemplate("WebBundle:WorkSpace:workspace-wrapper.html.twig", "WebBundle:WorkSpace:workspace-list.html.twig", 17)->display($context);
        
        $__internal_de7e4b42647392aff64cb2bf48c1ba450b1027706216400820b833825cd82be7->leave($__internal_de7e4b42647392aff64cb2bf48c1ba450b1027706216400820b833825cd82be7_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:WorkSpace:workspace-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  73 => 16,  63 => 13,  57 => 12,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "WebBundle:Default:layout.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/datetimepicker/css/bootstrap-datetimepicker.min.css') }}">*/
/*   <style>*/
/*     h5 {*/
/*       margin: 0px;*/
/*     }*/
/*   </style>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   <script src="{{ asset('assets/js/web/operator/workspace.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block wrapper %}*/
/*     {% include 'WebBundle:WorkSpace:workspace-wrapper.html.twig' %}*/
/* {% endblock %}*/
