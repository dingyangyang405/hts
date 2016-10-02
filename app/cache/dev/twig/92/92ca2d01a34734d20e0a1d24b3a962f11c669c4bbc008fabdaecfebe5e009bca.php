<?php

/* WebBundle:WorkSpace:ticket-list.html.twig */
class __TwigTemplate_0faa625faa7f40b6b736b85241e77213b87e1a75e3678cf3610c75876f5ed7fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle:Default:layout.html.twig", "WebBundle:WorkSpace:ticket-list.html.twig", 1);
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
        $__internal_3744354ef1eab663d223f3347337062f90dda0093eda97fba5bee16bd84afb33 = $this->env->getExtension("native_profiler");
        $__internal_3744354ef1eab663d223f3347337062f90dda0093eda97fba5bee16bd84afb33->enter($__internal_3744354ef1eab663d223f3347337062f90dda0093eda97fba5bee16bd84afb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:WorkSpace:ticket-list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3744354ef1eab663d223f3347337062f90dda0093eda97fba5bee16bd84afb33->leave($__internal_3744354ef1eab663d223f3347337062f90dda0093eda97fba5bee16bd84afb33_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d2a5dc329e2f6d0e3d57e09550febe1dae99cc2670433550617a79aecec6a92f = $this->env->getExtension("native_profiler");
        $__internal_d2a5dc329e2f6d0e3d57e09550febe1dae99cc2670433550617a79aecec6a92f->enter($__internal_d2a5dc329e2f6d0e3d57e09550febe1dae99cc2670433550617a79aecec6a92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/datetimepicker/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_d2a5dc329e2f6d0e3d57e09550febe1dae99cc2670433550617a79aecec6a92f->leave($__internal_d2a5dc329e2f6d0e3d57e09550febe1dae99cc2670433550617a79aecec6a92f_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7cf18cbb320091b12f9dc9249118a0eadeca3a2ece95fb5bd0fa741f1e847986 = $this->env->getExtension("native_profiler");
        $__internal_7cf18cbb320091b12f9dc9249118a0eadeca3a2ece95fb5bd0fa741f1e847986->enter($__internal_7cf18cbb320091b12f9dc9249118a0eadeca3a2ece95fb5bd0fa741f1e847986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/web/operator/transfer.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/datetimepicker/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/datetimepicker/js/locales/bootstrap-datetimepicker.fr.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/web/ticket/longcontent.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7cf18cbb320091b12f9dc9249118a0eadeca3a2ece95fb5bd0fa741f1e847986->leave($__internal_7cf18cbb320091b12f9dc9249118a0eadeca3a2ece95fb5bd0fa741f1e847986_prof);

    }

    // line 15
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_dcc5e3d3dce57c955b3cb803dc840a1b5ee9b5665fe873850dd412f31203c520 = $this->env->getExtension("native_profiler");
        $__internal_dcc5e3d3dce57c955b3cb803dc840a1b5ee9b5665fe873850dd412f31203c520->enter($__internal_dcc5e3d3dce57c955b3cb803dc840a1b5ee9b5665fe873850dd412f31203c520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 16
        echo "    ";
        $this->loadTemplate("WebBundle:WorkSpace:ticket-wrapper.html.twig", "WebBundle:WorkSpace:ticket-list.html.twig", 16)->display($context);
        
        $__internal_dcc5e3d3dce57c955b3cb803dc840a1b5ee9b5665fe873850dd412f31203c520->leave($__internal_dcc5e3d3dce57c955b3cb803dc840a1b5ee9b5665fe873850dd412f31203c520_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:WorkSpace:ticket-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  84 => 15,  75 => 12,  71 => 11,  67 => 10,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "WebBundle:Default:layout.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/datetimepicker/css/bootstrap-datetimepicker.min.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   <script src="{{ asset('assets/js/web/operator/transfer.js') }}"></script>*/
/*   <script src="{{ asset('assets/libs/datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>*/
/*   <script src="{{ asset('assets/libs/datetimepicker/js/locales/bootstrap-datetimepicker.fr.js') }}"></script>*/
/*   <script src="{{ asset('assets/js/web/ticket/longcontent.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block wrapper %}*/
/*     {% include 'WebBundle:WorkSpace:ticket-wrapper.html.twig' %}*/
/* {% endblock %}*/
