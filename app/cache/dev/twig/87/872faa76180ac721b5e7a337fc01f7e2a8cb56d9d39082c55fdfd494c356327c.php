<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ac428949b8f896f9f4cd0aa5448810b7ca51f6651ff6495b8f03a68b7d71bb66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80f05ff6464ec6c6f51a2a59fca6ec7ac0e7ae3217e7b2a753fdbfb1e56b42d8 = $this->env->getExtension("native_profiler");
        $__internal_80f05ff6464ec6c6f51a2a59fca6ec7ac0e7ae3217e7b2a753fdbfb1e56b42d8->enter($__internal_80f05ff6464ec6c6f51a2a59fca6ec7ac0e7ae3217e7b2a753fdbfb1e56b42d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80f05ff6464ec6c6f51a2a59fca6ec7ac0e7ae3217e7b2a753fdbfb1e56b42d8->leave($__internal_80f05ff6464ec6c6f51a2a59fca6ec7ac0e7ae3217e7b2a753fdbfb1e56b42d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e8797e281be57bdd0c074bf833b7d351c6225a5042415fd2efb99b36346af46 = $this->env->getExtension("native_profiler");
        $__internal_3e8797e281be57bdd0c074bf833b7d351c6225a5042415fd2efb99b36346af46->enter($__internal_3e8797e281be57bdd0c074bf833b7d351c6225a5042415fd2efb99b36346af46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3e8797e281be57bdd0c074bf833b7d351c6225a5042415fd2efb99b36346af46->leave($__internal_3e8797e281be57bdd0c074bf833b7d351c6225a5042415fd2efb99b36346af46_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a310d6c8588aabf61bb4ca9b976e13c5412d09726ece7b425ccd95e92007a3c = $this->env->getExtension("native_profiler");
        $__internal_4a310d6c8588aabf61bb4ca9b976e13c5412d09726ece7b425ccd95e92007a3c->enter($__internal_4a310d6c8588aabf61bb4ca9b976e13c5412d09726ece7b425ccd95e92007a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4a310d6c8588aabf61bb4ca9b976e13c5412d09726ece7b425ccd95e92007a3c->leave($__internal_4a310d6c8588aabf61bb4ca9b976e13c5412d09726ece7b425ccd95e92007a3c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e78d40ca853135b5e50a78ab2cbae7b060a373122dab7147d06a61b829634ba = $this->env->getExtension("native_profiler");
        $__internal_1e78d40ca853135b5e50a78ab2cbae7b060a373122dab7147d06a61b829634ba->enter($__internal_1e78d40ca853135b5e50a78ab2cbae7b060a373122dab7147d06a61b829634ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1e78d40ca853135b5e50a78ab2cbae7b060a373122dab7147d06a61b829634ba->leave($__internal_1e78d40ca853135b5e50a78ab2cbae7b060a373122dab7147d06a61b829634ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
