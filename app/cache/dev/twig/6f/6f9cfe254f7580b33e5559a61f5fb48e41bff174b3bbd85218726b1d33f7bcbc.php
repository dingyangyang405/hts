<?php

/* WebBundle:Default:layout.html.twig */
class __TwigTemplate_b0c54aac4326db027b0d848ae7b891297c0f9c527c57ffdd7d93b7a70da7fbb0 extends Twig_Template
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
        $__internal_5840bb5acf4cb2ec04079720a4ee2413936ff4fe0a406f126d20664ea0f9b2b9 = $this->env->getExtension("native_profiler");
        $__internal_5840bb5acf4cb2ec04079720a4ee2413936ff4fe0a406f126d20664ea0f9b2b9->enter($__internal_5840bb5acf4cb2ec04079720a4ee2413936ff4fe0a406f126d20664ea0f9b2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Default:layout.html.twig"));

        // line 1
        $context["admin_macro"] = $this->loadTemplate("AdminBundle::macro.html.twig", "WebBundle:Default:layout.html.twig", 1);
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
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/web/operator/online.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/web/ticket/notification.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/vendor.css"), "html", null, true);
        echo "\">
    ";
        // line 15
        $this->displayBlock('head', $context, $blocks);
        // line 22
        echo "  </head>
  <body class=\"hold-transition skin-green-light sidebar-mini\">
    <div class=\"wrapper\">
      ";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "    </div>
  </body>
</html>
";
        
        $__internal_5840bb5acf4cb2ec04079720a4ee2413936ff4fe0a406f126d20664ea0f9b2b9->leave($__internal_5840bb5acf4cb2ec04079720a4ee2413936ff4fe0a406f126d20664ea0f9b2b9_prof);

    }

    // line 15
    public function block_head($context, array $blocks = array())
    {
        $__internal_347ebfb60a7990d91a6afdd2fb3f1ccf9a283673961ba08ba04e11363f0cd6aa = $this->env->getExtension("native_profiler");
        $__internal_347ebfb60a7990d91a6afdd2fb3f1ccf9a283673961ba08ba04e11363f0cd6aa->enter($__internal_347ebfb60a7990d91a6afdd2fb3f1ccf9a283673961ba08ba04e11363f0cd6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 16
        echo "      <title>";
        $this->displayBlock('title', $context, $blocks);
        echo " - 工单系统</title>
      ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "      ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    ";
        
        $__internal_347ebfb60a7990d91a6afdd2fb3f1ccf9a283673961ba08ba04e11363f0cd6aa->leave($__internal_347ebfb60a7990d91a6afdd2fb3f1ccf9a283673961ba08ba04e11363f0cd6aa_prof);

    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        $__internal_397f1f4c69449794a96fc2b9b4649cff0db109d33395e27c3681d078c0647376 = $this->env->getExtension("native_profiler");
        $__internal_397f1f4c69449794a96fc2b9b4649cff0db109d33395e27c3681d078c0647376->enter($__internal_397f1f4c69449794a96fc2b9b4649cff0db109d33395e27c3681d078c0647376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_397f1f4c69449794a96fc2b9b4649cff0db109d33395e27c3681d078c0647376->leave($__internal_397f1f4c69449794a96fc2b9b4649cff0db109d33395e27c3681d078c0647376_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3a623ab96f2757b86359696d0870907ba030c307496e0f853c6b2e867e02434d = $this->env->getExtension("native_profiler");
        $__internal_3a623ab96f2757b86359696d0870907ba030c307496e0f853c6b2e867e02434d->enter($__internal_3a623ab96f2757b86359696d0870907ba030c307496e0f853c6b2e867e02434d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "      ";
        
        $__internal_3a623ab96f2757b86359696d0870907ba030c307496e0f853c6b2e867e02434d->leave($__internal_3a623ab96f2757b86359696d0870907ba030c307496e0f853c6b2e867e02434d_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_14d28293627b11dbcdb841aa86e13c4ad323296c1a30ed8b04912fb73e32fd44 = $this->env->getExtension("native_profiler");
        $__internal_14d28293627b11dbcdb841aa86e13c4ad323296c1a30ed8b04912fb73e32fd44->enter($__internal_14d28293627b11dbcdb841aa86e13c4ad323296c1a30ed8b04912fb73e32fd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "      ";
        
        $__internal_14d28293627b11dbcdb841aa86e13c4ad323296c1a30ed8b04912fb73e32fd44->leave($__internal_14d28293627b11dbcdb841aa86e13c4ad323296c1a30ed8b04912fb73e32fd44_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_677b9a5a6fce7f6a48bf8a5a1fb5dcfc9091049f16eb3f44d1012d38fb00cfbc = $this->env->getExtension("native_profiler");
        $__internal_677b9a5a6fce7f6a48bf8a5a1fb5dcfc9091049f16eb3f44d1012d38fb00cfbc->enter($__internal_677b9a5a6fce7f6a48bf8a5a1fb5dcfc9091049f16eb3f44d1012d38fb00cfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 39
        echo "      ";
        
        $__internal_677b9a5a6fce7f6a48bf8a5a1fb5dcfc9091049f16eb3f44d1012d38fb00cfbc->leave($__internal_677b9a5a6fce7f6a48bf8a5a1fb5dcfc9091049f16eb3f44d1012d38fb00cfbc_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_f7da976d303e135d3448b641546825625436861f3b7407507cf24d85389c8c79 = $this->env->getExtension("native_profiler");
        $__internal_f7da976d303e135d3448b641546825625436861f3b7407507cf24d85389c8c79->enter($__internal_f7da976d303e135d3448b641546825625436861f3b7407507cf24d85389c8c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "          ";
        $this->loadTemplate("WebBundle:Default:index-header.html.twig", "WebBundle:Default:layout.html.twig", 27)->display($context);
        // line 28
        echo "        ";
        
        $__internal_f7da976d303e135d3448b641546825625436861f3b7407507cf24d85389c8c79->leave($__internal_f7da976d303e135d3448b641546825625436861f3b7407507cf24d85389c8c79_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_427aafe020ddf53d0b205fa8b373896c95c0552698c1da91bb892b77d72769c5 = $this->env->getExtension("native_profiler");
        $__internal_427aafe020ddf53d0b205fa8b373896c95c0552698c1da91bb892b77d72769c5->enter($__internal_427aafe020ddf53d0b205fa8b373896c95c0552698c1da91bb892b77d72769c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "          ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 33
        echo "          ";
        $this->displayBlock('wrapper', $context, $blocks);
        // line 36
        echo "        ";
        
        $__internal_427aafe020ddf53d0b205fa8b373896c95c0552698c1da91bb892b77d72769c5->leave($__internal_427aafe020ddf53d0b205fa8b373896c95c0552698c1da91bb892b77d72769c5_prof);

    }

    // line 30
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_bdaaee4c22a45ff4b4f4f254e689649c5f8411e40936694d939597b1cb6c9cae = $this->env->getExtension("native_profiler");
        $__internal_bdaaee4c22a45ff4b4f4f254e689649c5f8411e40936694d939597b1cb6c9cae->enter($__internal_bdaaee4c22a45ff4b4f4f254e689649c5f8411e40936694d939597b1cb6c9cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 31
        echo "            ";
        $this->loadTemplate("WebBundle:Default:index-sidebar.html.twig", "WebBundle:Default:layout.html.twig", 31)->display($context);
        // line 32
        echo "          ";
        
        $__internal_bdaaee4c22a45ff4b4f4f254e689649c5f8411e40936694d939597b1cb6c9cae->leave($__internal_bdaaee4c22a45ff4b4f4f254e689649c5f8411e40936694d939597b1cb6c9cae_prof);

    }

    // line 33
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_4bd999ab967d9f0dbd1bf0212f3aceb13237a5667f3b7ca4835c0ec91467dae6 = $this->env->getExtension("native_profiler");
        $__internal_4bd999ab967d9f0dbd1bf0212f3aceb13237a5667f3b7ca4835c0ec91467dae6->enter($__internal_4bd999ab967d9f0dbd1bf0212f3aceb13237a5667f3b7ca4835c0ec91467dae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 34
        echo "            ";
        $this->loadTemplate("WebBundle:Default:layout-wrapper.html.twig", "WebBundle:Default:layout.html.twig", 34)->display($context);
        // line 35
        echo "          ";
        
        $__internal_4bd999ab967d9f0dbd1bf0212f3aceb13237a5667f3b7ca4835c0ec91467dae6->leave($__internal_4bd999ab967d9f0dbd1bf0212f3aceb13237a5667f3b7ca4835c0ec91467dae6_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d3507c14657620c7f1190f40d1b82c87ad56bfbafbddfcbdabd64c87a42d43eb = $this->env->getExtension("native_profiler");
        $__internal_d3507c14657620c7f1190f40d1b82c87ad56bfbafbddfcbdabd64c87a42d43eb->enter($__internal_d3507c14657620c7f1190f40d1b82c87ad56bfbafbddfcbdabd64c87a42d43eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "        ";
        
        $__internal_d3507c14657620c7f1190f40d1b82c87ad56bfbafbddfcbdabd64c87a42d43eb->leave($__internal_d3507c14657620c7f1190f40d1b82c87ad56bfbafbddfcbdabd64c87a42d43eb_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 38,  235 => 37,  228 => 35,  225 => 34,  219 => 33,  212 => 32,  209 => 31,  203 => 30,  196 => 36,  193 => 33,  190 => 30,  184 => 29,  177 => 28,  174 => 27,  168 => 26,  161 => 39,  158 => 37,  155 => 29,  152 => 26,  146 => 25,  139 => 20,  133 => 19,  126 => 18,  120 => 17,  109 => 16,  102 => 21,  99 => 19,  97 => 17,  92 => 16,  86 => 15,  76 => 40,  74 => 25,  69 => 22,  67 => 15,  63 => 14,  59 => 13,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  34 => 2,  32 => 1,);
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
/*     <script src="{{ asset('assets/js/web/operator/online.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/web/ticket/notification.js') }}"></script>*/
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
/*           {% include 'WebBundle:Default:index-header.html.twig' %}*/
/*         {% endblock %}*/
/*         {% block body %}*/
/*           {% block sidebar %}*/
/*             {% include 'WebBundle:Default:index-sidebar.html.twig'%}*/
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
