<?php

/* AdminBundle:Default:layout.html.twig */
class __TwigTemplate_534c9588ffe73e48f96b774aef0f0e4fec6d3b34d6dfcfe5613e8107f5bba658 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'wrapper' => array($this, 'block_wrapper'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_138fcd181c9226e057f0e8b3bbe3bf8cb8147a663a5c3c9532c0c83934c423fb = $this->env->getExtension("native_profiler");
        $__internal_138fcd181c9226e057f0e8b3bbe3bf8cb8147a663a5c3c9532c0c83934c423fb->enter($__internal_138fcd181c9226e057f0e8b3bbe3bf8cb8147a663a5c3c9532c0c83934c423fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:layout.html.twig"));

        // line 1
        $context["admin_macro"] = $this->loadTemplate("AdminBundle::macro.html.twig", "AdminBundle:Default:layout.html.twig", 1);
        // line 2
        echo "
<!DOCTYPE html>  
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken((isset($context["default_csrf_token_id"]) ? $context["default_csrf_token_id"] : $this->getContext($context, "default_csrf_token_id"))), "html", null, true);
        echo "\" name=\"csrf-token\"/>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/vendor.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/global.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/vendor.css"), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "  </head>
  <body class=\"hold-transition skin-green-light sidebar-mini\">
    <div class=\"wrapper\">
      ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "    </div>
  </body>
</html>
";
        
        $__internal_138fcd181c9226e057f0e8b3bbe3bf8cb8147a663a5c3c9532c0c83934c423fb->leave($__internal_138fcd181c9226e057f0e8b3bbe3bf8cb8147a663a5c3c9532c0c83934c423fb_prof);

    }

    // line 13
    public function block_head($context, array $blocks = array())
    {
        $__internal_2dfe765038908538819a53c8912a1fe3aaed57730060167965c4b346eb5fab69 = $this->env->getExtension("native_profiler");
        $__internal_2dfe765038908538819a53c8912a1fe3aaed57730060167965c4b346eb5fab69->enter($__internal_2dfe765038908538819a53c8912a1fe3aaed57730060167965c4b346eb5fab69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 14
        echo "      <title>";
        $this->displayBlock('title', $context, $blocks);
        echo " - 工单系统</title>
      ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "      ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    ";
        
        $__internal_2dfe765038908538819a53c8912a1fe3aaed57730060167965c4b346eb5fab69->leave($__internal_2dfe765038908538819a53c8912a1fe3aaed57730060167965c4b346eb5fab69_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_64a3b2b20ae108f3cf9767f931b8b814f28c11bbfaad1963eb3cc29deb48777d = $this->env->getExtension("native_profiler");
        $__internal_64a3b2b20ae108f3cf9767f931b8b814f28c11bbfaad1963eb3cc29deb48777d->enter($__internal_64a3b2b20ae108f3cf9767f931b8b814f28c11bbfaad1963eb3cc29deb48777d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_64a3b2b20ae108f3cf9767f931b8b814f28c11bbfaad1963eb3cc29deb48777d->leave($__internal_64a3b2b20ae108f3cf9767f931b8b814f28c11bbfaad1963eb3cc29deb48777d_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f9f94012a718660379ebdae18cbed96cbf73594d51bf7cac3126df3685e33e0 = $this->env->getExtension("native_profiler");
        $__internal_3f9f94012a718660379ebdae18cbed96cbf73594d51bf7cac3126df3685e33e0->enter($__internal_3f9f94012a718660379ebdae18cbed96cbf73594d51bf7cac3126df3685e33e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "      ";
        
        $__internal_3f9f94012a718660379ebdae18cbed96cbf73594d51bf7cac3126df3685e33e0->leave($__internal_3f9f94012a718660379ebdae18cbed96cbf73594d51bf7cac3126df3685e33e0_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_353f5f8bb7834aeb2072d5dfbfa39e795574207bd711f7e6bcb0dc4d213339e6 = $this->env->getExtension("native_profiler");
        $__internal_353f5f8bb7834aeb2072d5dfbfa39e795574207bd711f7e6bcb0dc4d213339e6->enter($__internal_353f5f8bb7834aeb2072d5dfbfa39e795574207bd711f7e6bcb0dc4d213339e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "      ";
        
        $__internal_353f5f8bb7834aeb2072d5dfbfa39e795574207bd711f7e6bcb0dc4d213339e6->leave($__internal_353f5f8bb7834aeb2072d5dfbfa39e795574207bd711f7e6bcb0dc4d213339e6_prof);

    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_a078a00bdb5b99c2e997799ccd908892d99ca51ad02364e506f25b1934f56017 = $this->env->getExtension("native_profiler");
        $__internal_a078a00bdb5b99c2e997799ccd908892d99ca51ad02364e506f25b1934f56017->enter($__internal_a078a00bdb5b99c2e997799ccd908892d99ca51ad02364e506f25b1934f56017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 27
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 37
        echo "      ";
        
        $__internal_a078a00bdb5b99c2e997799ccd908892d99ca51ad02364e506f25b1934f56017->leave($__internal_a078a00bdb5b99c2e997799ccd908892d99ca51ad02364e506f25b1934f56017_prof);

    }

    // line 24
    public function block_header($context, array $blocks = array())
    {
        $__internal_0e282a56c89cd0ece38562a83f0eb3b5293d50cffe585fae98fc9645fb7a50c3 = $this->env->getExtension("native_profiler");
        $__internal_0e282a56c89cd0ece38562a83f0eb3b5293d50cffe585fae98fc9645fb7a50c3->enter($__internal_0e282a56c89cd0ece38562a83f0eb3b5293d50cffe585fae98fc9645fb7a50c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 25
        echo "          ";
        $this->loadTemplate("AdminBundle:Default:index-header.html.twig", "AdminBundle:Default:layout.html.twig", 25)->display($context);
        // line 26
        echo "        ";
        
        $__internal_0e282a56c89cd0ece38562a83f0eb3b5293d50cffe585fae98fc9645fb7a50c3->leave($__internal_0e282a56c89cd0ece38562a83f0eb3b5293d50cffe585fae98fc9645fb7a50c3_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c4a469c6760b9e1b7b85ddc82e5c6bbe7a01c5738b76a8d87e0579e2864586e = $this->env->getExtension("native_profiler");
        $__internal_5c4a469c6760b9e1b7b85ddc82e5c6bbe7a01c5738b76a8d87e0579e2864586e->enter($__internal_5c4a469c6760b9e1b7b85ddc82e5c6bbe7a01c5738b76a8d87e0579e2864586e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "          ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 31
        echo "          ";
        $this->displayBlock('wrapper', $context, $blocks);
        // line 34
        echo "        ";
        
        $__internal_5c4a469c6760b9e1b7b85ddc82e5c6bbe7a01c5738b76a8d87e0579e2864586e->leave($__internal_5c4a469c6760b9e1b7b85ddc82e5c6bbe7a01c5738b76a8d87e0579e2864586e_prof);

    }

    // line 28
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2cbec7f06384484429013b12fee8082ed2c17efce2589a6bdb1c5575f708b071 = $this->env->getExtension("native_profiler");
        $__internal_2cbec7f06384484429013b12fee8082ed2c17efce2589a6bdb1c5575f708b071->enter($__internal_2cbec7f06384484429013b12fee8082ed2c17efce2589a6bdb1c5575f708b071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 29
        echo "            ";
        $this->loadTemplate("AdminBundle:Default:index-sidebar.html.twig", "AdminBundle:Default:layout.html.twig", 29)->display($context);
        // line 30
        echo "          ";
        
        $__internal_2cbec7f06384484429013b12fee8082ed2c17efce2589a6bdb1c5575f708b071->leave($__internal_2cbec7f06384484429013b12fee8082ed2c17efce2589a6bdb1c5575f708b071_prof);

    }

    // line 31
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_a79c776859b4b1dba84f6123494fc4d1809f135df9e331c3751ebd2cbb8bbe77 = $this->env->getExtension("native_profiler");
        $__internal_a79c776859b4b1dba84f6123494fc4d1809f135df9e331c3751ebd2cbb8bbe77->enter($__internal_a79c776859b4b1dba84f6123494fc4d1809f135df9e331c3751ebd2cbb8bbe77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 32
        echo "            ";
        $this->loadTemplate("WebBundle:Default:layout-wrapper.html.twig", "AdminBundle:Default:layout.html.twig", 32)->display($context);
        // line 33
        echo "          ";
        
        $__internal_a79c776859b4b1dba84f6123494fc4d1809f135df9e331c3751ebd2cbb8bbe77->leave($__internal_a79c776859b4b1dba84f6123494fc4d1809f135df9e331c3751ebd2cbb8bbe77_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a302179ccb1b94895697be6197e209f8f7a642f7b96854dc910ed5548167476b = $this->env->getExtension("native_profiler");
        $__internal_a302179ccb1b94895697be6197e209f8f7a642f7b96854dc910ed5548167476b->enter($__internal_a302179ccb1b94895697be6197e209f8f7a642f7b96854dc910ed5548167476b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 36
        echo "        ";
        
        $__internal_a302179ccb1b94895697be6197e209f8f7a642f7b96854dc910ed5548167476b->leave($__internal_a302179ccb1b94895697be6197e209f8f7a642f7b96854dc910ed5548167476b_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 36,  227 => 35,  220 => 33,  217 => 32,  211 => 31,  204 => 30,  201 => 29,  195 => 28,  188 => 34,  185 => 31,  182 => 28,  176 => 27,  169 => 26,  166 => 25,  160 => 24,  153 => 37,  150 => 35,  147 => 27,  144 => 24,  138 => 23,  131 => 18,  125 => 17,  118 => 16,  112 => 15,  101 => 14,  94 => 19,  91 => 17,  89 => 15,  84 => 14,  78 => 13,  68 => 38,  66 => 23,  61 => 20,  59 => 13,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  34 => 2,  32 => 1,);
    }
}
/* {% import 'AdminBundle::macro.html.twig' as admin_macro %}*/
/* */
/* <!DOCTYPE html>  */
/* <html>*/
/*   <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta content="{{ csrf_token(default_csrf_token_id) }}" name="csrf-token"/>*/
/*     <script src="{{ asset('assets/js/vendor.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/global.js') }}"></script>*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor.css') }}">*/
/*     {% block head %}*/
/*       <title>{% block title %}{% endblock %} - 工单系统</title>*/
/*       {% block stylesheets %}*/
/*       {% endblock %}*/
/*       {% block javascripts %}*/
/*       {% endblock %}*/
/*     {% endblock %}*/
/*   </head>*/
/*   <body class="hold-transition skin-green-light sidebar-mini">*/
/*     <div class="wrapper">*/
/*       {% block content %}*/
/*         {% block header %}*/
/*           {% include 'AdminBundle:Default:index-header.html.twig' %}*/
/*         {% endblock %}*/
/*         {% block body %}*/
/*           {% block sidebar %}*/
/*             {% include 'AdminBundle:Default:index-sidebar.html.twig'%}*/
/*           {% endblock %}*/
/*           {% block wrapper %}*/
/*             {% include 'WebBundle:Default:layout-wrapper.html.twig' %}*/
/*           {% endblock %}*/
/*         {% endblock %}*/
/*         {% block footer %}*/
/*         {% endblock %}*/
/*       {% endblock %}*/
/*     </div>*/
/*   </body>*/
/* </html>*/
/* */
