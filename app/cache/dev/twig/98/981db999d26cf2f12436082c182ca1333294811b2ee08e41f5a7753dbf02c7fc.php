<?php

/* WebBundle:Ticket:add-ticket.html.twig */
class __TwigTemplate_0fcd737e3347c440d88ab3b49c39124b3b330bfb3dd6e91a3318ba2e54bca5cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle:Default:layout.html.twig", "WebBundle:Ticket:add-ticket.html.twig", 1);
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
        $__internal_915deeb29dbf6b48944f2121f9794d9f9944b546a3792d7a821977997a5f4b91 = $this->env->getExtension("native_profiler");
        $__internal_915deeb29dbf6b48944f2121f9794d9f9944b546a3792d7a821977997a5f4b91->enter($__internal_915deeb29dbf6b48944f2121f9794d9f9944b546a3792d7a821977997a5f4b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Ticket:add-ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_915deeb29dbf6b48944f2121f9794d9f9944b546a3792d7a821977997a5f4b91->leave($__internal_915deeb29dbf6b48944f2121f9794d9f9944b546a3792d7a821977997a5f4b91_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4686b6f11f3b913da9a0449e27370c347b7189e54dd7fbee8371363919ce9f5b = $this->env->getExtension("native_profiler");
        $__internal_4686b6f11f3b913da9a0449e27370c347b7189e54dd7fbee8371363919ce9f5b->enter($__internal_4686b6f11f3b913da9a0449e27370c347b7189e54dd7fbee8371363919ce9f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "新增工单";
        
        $__internal_4686b6f11f3b913da9a0449e27370c347b7189e54dd7fbee8371363919ce9f5b->leave($__internal_4686b6f11f3b913da9a0449e27370c347b7189e54dd7fbee8371363919ce9f5b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_99de70274a55be1dc3dac4b41e6bc586b5b3082c806673a1b2515eeb09a0750c = $this->env->getExtension("native_profiler");
        $__internal_99de70274a55be1dc3dac4b41e6bc586b5b3082c806673a1b2515eeb09a0750c->enter($__internal_99de70274a55be1dc3dac4b41e6bc586b5b3082c806673a1b2515eeb09a0750c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/upload/css/webuploader.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/upload/css/HermesUpload.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/viewer/css/viewer.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/datetimepicker/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">

<style>
.test-preview li { display: inline-block; width: 20%; margin-left: 1%; padding-top: 1%;}
.test-preview li img { width: 100%;}
</style>

";
        
        $__internal_99de70274a55be1dc3dac4b41e6bc586b5b3082c806673a1b2515eeb09a0750c->leave($__internal_99de70274a55be1dc3dac4b41e6bc586b5b3082c806673a1b2515eeb09a0750c_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8287647d4d237f5a9054739bbb91b28279bfe228dea1446d9b9d6834f192b43a = $this->env->getExtension("native_profiler");
        $__internal_8287647d4d237f5a9054739bbb91b28279bfe228dea1446d9b9d6834f192b43a->enter($__internal_8287647d4d237f5a9054739bbb91b28279bfe228dea1446d9b9d6834f192b43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/validator/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/validator/messages_cn.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/upload/js/webuploader.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/upload/js/HermesUpload.js"), "html", null, true);
        echo "\"></script>
  
  <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/datetimepicker/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/datetimepicker/js/locales/bootstrap-datetimepicker.fr.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/web/ticket/addticket.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8287647d4d237f5a9054739bbb91b28279bfe228dea1446d9b9d6834f192b43a->leave($__internal_8287647d4d237f5a9054739bbb91b28279bfe228dea1446d9b9d6834f192b43a_prof);

    }

    // line 31
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_4f29040f874103eb59b3add2cbaf74fa8c30592f713cadc1d933b0972c7e9fb3 = $this->env->getExtension("native_profiler");
        $__internal_4f29040f874103eb59b3add2cbaf74fa8c30592f713cadc1d933b0972c7e9fb3->enter($__internal_4f29040f874103eb59b3add2cbaf74fa8c30592f713cadc1d933b0972c7e9fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 32
        echo "  ";
        $this->loadTemplate("WebBundle:Ticket:add-ticket-wrapper.html.twig", "WebBundle:Ticket:add-ticket.html.twig", 32)->display($context);
        
        $__internal_4f29040f874103eb59b3add2cbaf74fa8c30592f713cadc1d933b0972c7e9fb3->leave($__internal_4f29040f874103eb59b3add2cbaf74fa8c30592f713cadc1d933b0972c7e9fb3_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Ticket:add-ticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 32,  126 => 31,  117 => 28,  112 => 26,  108 => 25,  103 => 23,  99 => 22,  94 => 20,  89 => 19,  83 => 18,  68 => 9,  64 => 8,  60 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "WebBundle:Default:layout.html.twig" %}*/
/* */
/* {% block title %}新增工单{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/upload/css/webuploader.css') }}">*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/upload/css/HermesUpload.css') }}">*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/viewer/css/viewer.min.css') }}">*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/datetimepicker/css/bootstrap-datetimepicker.min.css') }}">*/
/* */
/* <style>*/
/* .test-preview li { display: inline-block; width: 20%; margin-left: 1%; padding-top: 1%;}*/
/* .test-preview li img { width: 100%;}*/
/* </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   <script src="{{ asset('assets/libs/validator/jquery.validate.min.js') }}"></script>*/
/*   <script src="{{ asset('assets/libs/validator/messages_cn.js') }}"></script>*/
/* */
/*   <script src="{{ asset('assets/libs/upload/js/webuploader.min.js') }}"></script>*/
/*   <script src="{{ asset('assets/libs/upload/js/HermesUpload.js') }}"></script>*/
/*   */
/*   <script src="{{ asset('assets/libs/datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>*/
/*   <script src="{{ asset('assets/libs/datetimepicker/js/locales/bootstrap-datetimepicker.fr.js') }}"></script>*/
/* */
/*   <script src="{{ asset('assets/js/web/ticket/addticket.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block wrapper %}*/
/*   {% include 'WebBundle:Ticket:add-ticket-wrapper.html.twig' %}*/
/* {% endblock %}*/
/*  */
/* */
