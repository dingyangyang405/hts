<?php

/* WebBundle:Ticket:ticket-detail.html.twig */
class __TwigTemplate_758048ee807b92d5a44521d244d444a8d82b54896a6e615554c71fb30af4e510 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle:Default:layout.html.twig", "WebBundle:Ticket:ticket-detail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_ebc960dcdf00f0e3a1fc5c635d6f052f0a3c1eb3de1a67bfd549ccc086cb923c = $this->env->getExtension("native_profiler");
        $__internal_ebc960dcdf00f0e3a1fc5c635d6f052f0a3c1eb3de1a67bfd549ccc086cb923c->enter($__internal_ebc960dcdf00f0e3a1fc5c635d6f052f0a3c1eb3de1a67bfd549ccc086cb923c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Ticket:ticket-detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebc960dcdf00f0e3a1fc5c635d6f052f0a3c1eb3de1a67bfd549ccc086cb923c->leave($__internal_ebc960dcdf00f0e3a1fc5c635d6f052f0a3c1eb3de1a67bfd549ccc086cb923c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2eefbf6ae7a96930f2bbc7dc6d1b95c73831612e41ace4967740e8cd1a6f347 = $this->env->getExtension("native_profiler");
        $__internal_b2eefbf6ae7a96930f2bbc7dc6d1b95c73831612e41ace4967740e8cd1a6f347->enter($__internal_b2eefbf6ae7a96930f2bbc7dc6d1b95c73831612e41ace4967740e8cd1a6f347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "工单详情";
        
        $__internal_b2eefbf6ae7a96930f2bbc7dc6d1b95c73831612e41ace4967740e8cd1a6f347->leave($__internal_b2eefbf6ae7a96930f2bbc7dc6d1b95c73831612e41ace4967740e8cd1a6f347_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ebfe9138648ace284abea1a802e92ce720b4f9fba3a56151bcbca0bc3ad4b47 = $this->env->getExtension("native_profiler");
        $__internal_2ebfe9138648ace284abea1a802e92ce720b4f9fba3a56151bcbca0bc3ad4b47->enter($__internal_2ebfe9138648ace284abea1a802e92ce720b4f9fba3a56151bcbca0bc3ad4b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/upload/css/webuploader.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/upload/css/HermesUpload.css"), "html", null, true);
        echo "\">

  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/viewer/css/viewer.min.css"), "html", null, true);
        echo "\">

  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/grade/css/zzsc.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/grade/starability-minified/starability-growRotate.min.css"), "html", null, true);
        echo "\">


  <style>
    .attachment-preview li {
      display: inline-block; 
      width: 20%; 
      margin-left: 1%; 
      padding-top: 1%;
    }
    .attachment-preview li img { 
      width: 100%;
    }

    #upload div{
      height: 40px;
      width: 86px;
    }
  </style>
";
        
        $__internal_2ebfe9138648ace284abea1a802e92ce720b4f9fba3a56151bcbca0bc3ad4b47->leave($__internal_2ebfe9138648ace284abea1a802e92ce720b4f9fba3a56151bcbca0bc3ad4b47_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a8d3f7e87ed07fd1bcb27adc6d49add7ed4ae605ca53c97e705e9efb4467973d = $this->env->getExtension("native_profiler");
        $__internal_a8d3f7e87ed07fd1bcb27adc6d49add7ed4ae605ca53c97e705e9efb4467973d->enter($__internal_a8d3f7e87ed07fd1bcb27adc6d49add7ed4ae605ca53c97e705e9efb4467973d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/upload/js/webuploader.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/upload/js/HermesUpload.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/viewer/js/viewer.min.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/web/ticket/detail.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a8d3f7e87ed07fd1bcb27adc6d49add7ed4ae605ca53c97e705e9efb4467973d->leave($__internal_a8d3f7e87ed07fd1bcb27adc6d49add7ed4ae605ca53c97e705e9efb4467973d_prof);

    }

    // line 43
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_ce7a674ccae643fe7df7613671db474acaa88697a0ae3d1cf3d31477a4f224b6 = $this->env->getExtension("native_profiler");
        $__internal_ce7a674ccae643fe7df7613671db474acaa88697a0ae3d1cf3d31477a4f224b6->enter($__internal_ce7a674ccae643fe7df7613671db474acaa88697a0ae3d1cf3d31477a4f224b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 44
        echo "  ";
        $this->loadTemplate("WebBundle:Ticket:ticket-detail-wrapper.html.twig", "WebBundle:Ticket:ticket-detail.html.twig", 44)->display($context);
        
        $__internal_ce7a674ccae643fe7df7613671db474acaa88697a0ae3d1cf3d31477a4f224b6->leave($__internal_ce7a674ccae643fe7df7613671db474acaa88697a0ae3d1cf3d31477a4f224b6_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Ticket:ticket-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 44,  131 => 43,  122 => 39,  117 => 37,  112 => 35,  107 => 34,  101 => 33,  74 => 12,  70 => 11,  65 => 9,  60 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "WebBundle:Default:layout.html.twig" %}*/
/* */
/* {% block title %}工单详情{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/upload/css/webuploader.css') }}">*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/upload/css/HermesUpload.css') }}">*/
/* */
/*   <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/viewer/css/viewer.min.css') }}">*/
/* */
/*   <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/grade/css/zzsc.css') }}">*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/grade/starability-minified/starability-growRotate.min.css') }}">*/
/* */
/* */
/*   <style>*/
/*     .attachment-preview li {*/
/*       display: inline-block; */
/*       width: 20%; */
/*       margin-left: 1%; */
/*       padding-top: 1%;*/
/*     }*/
/*     .attachment-preview li img { */
/*       width: 100%;*/
/*     }*/
/* */
/*     #upload div{*/
/*       height: 40px;*/
/*       width: 86px;*/
/*     }*/
/*   </style>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   <script src="{{ asset('assets/libs/upload/js/webuploader.min.js') }}"></script>*/
/*   <script src="{{ asset('assets/libs/upload/js/HermesUpload.js') }}"></script>*/
/* */
/*   <script src="{{ asset('assets/libs/viewer/js/viewer.min.js') }}"></script>*/
/* */
/*   <script src="{{ asset('assets/js/web/ticket/detail.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* */
/* {% block wrapper %}*/
/*   {% include 'WebBundle:Ticket:ticket-detail-wrapper.html.twig' %}*/
/* {% endblock %}*/
