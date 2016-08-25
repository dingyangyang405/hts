<?php

/* AdminBundle:Ticket:ticket-list.html.twig */
class __TwigTemplate_1ee9810a7468718f8fc7ccaeb6850d5790aae2c6705c7fc5d5c7cecf048388b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:layout.html.twig", "AdminBundle:Ticket:ticket-list.html.twig", 1);
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
        $__internal_22db99cc6ae9806a3ea15272c51e689214b47d8bf807c25e9936cde11f818d5d = $this->env->getExtension("native_profiler");
        $__internal_22db99cc6ae9806a3ea15272c51e689214b47d8bf807c25e9936cde11f818d5d->enter($__internal_22db99cc6ae9806a3ea15272c51e689214b47d8bf807c25e9936cde11f818d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Ticket:ticket-list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22db99cc6ae9806a3ea15272c51e689214b47d8bf807c25e9936cde11f818d5d->leave($__internal_22db99cc6ae9806a3ea15272c51e689214b47d8bf807c25e9936cde11f818d5d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec9df4180da07f5d1d26d75efb27091325e1901a070409a9ec75fba57315ed23 = $this->env->getExtension("native_profiler");
        $__internal_ec9df4180da07f5d1d26d75efb27091325e1901a070409a9ec75fba57315ed23->enter($__internal_ec9df4180da07f5d1d26d75efb27091325e1901a070409a9ec75fba57315ed23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "所有工单";
        
        $__internal_ec9df4180da07f5d1d26d75efb27091325e1901a070409a9ec75fba57315ed23->leave($__internal_ec9df4180da07f5d1d26d75efb27091325e1901a070409a9ec75fba57315ed23_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_39a1454a374f8a5083ab22ae955cf146c9d08837d696ca278f49a55e6da0e3c6 = $this->env->getExtension("native_profiler");
        $__internal_39a1454a374f8a5083ab22ae955cf146c9d08837d696ca278f49a55e6da0e3c6->enter($__internal_39a1454a374f8a5083ab22ae955cf146c9d08837d696ca278f49a55e6da0e3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/datetimepicker/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_39a1454a374f8a5083ab22ae955cf146c9d08837d696ca278f49a55e6da0e3c6->leave($__internal_39a1454a374f8a5083ab22ae955cf146c9d08837d696ca278f49a55e6da0e3c6_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_08245d4568ad8c2867645572df0812de7609523a68133605f501a3eb48e0ed36 = $this->env->getExtension("native_profiler");
        $__internal_08245d4568ad8c2867645572df0812de7609523a68133605f501a3eb48e0ed36->enter($__internal_08245d4568ad8c2867645572df0812de7609523a68133605f501a3eb48e0ed36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/datetimepicker/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/datetimepicker/js/locales/bootstrap-datetimepicker.fr.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_08245d4568ad8c2867645572df0812de7609523a68133605f501a3eb48e0ed36->leave($__internal_08245d4568ad8c2867645572df0812de7609523a68133605f501a3eb48e0ed36_prof);

    }

    // line 14
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_0d1978ddf19c7e7cdd4fcbb124d8f2781ff230886243eb9940db1095fa3b8124 = $this->env->getExtension("native_profiler");
        $__internal_0d1978ddf19c7e7cdd4fcbb124d8f2781ff230886243eb9940db1095fa3b8124->enter($__internal_0d1978ddf19c7e7cdd4fcbb124d8f2781ff230886243eb9940db1095fa3b8124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 15
        echo "  ";
        $this->loadTemplate("AdminBundle:Ticket:ticket-list-wrapper.html.twig", "AdminBundle:Ticket:ticket-list.html.twig", 15)->display($context);
        
        $__internal_0d1978ddf19c7e7cdd4fcbb124d8f2781ff230886243eb9940db1095fa3b8124->leave($__internal_0d1978ddf19c7e7cdd4fcbb124d8f2781ff230886243eb9940db1095fa3b8124_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Ticket:ticket-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 15,  85 => 14,  76 => 11,  71 => 10,  65 => 9,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "AdminBundle:Default:layout.html.twig" %}*/
/* */
/* {% block title %}所有工单{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/datetimepicker/css/bootstrap-datetimepicker.min.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   <script src="{{ asset('assets/libs/datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>*/
/*   <script src="{{ asset('assets/libs/datetimepicker/js/locales/bootstrap-datetimepicker.fr.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block wrapper %}*/
/*   {% include 'AdminBundle:Ticket:ticket-list-wrapper.html.twig' %}*/
/* {% endblock %}*/
