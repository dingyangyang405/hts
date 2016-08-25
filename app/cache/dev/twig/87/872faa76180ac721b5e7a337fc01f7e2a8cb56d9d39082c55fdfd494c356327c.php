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
        $__internal_46f56a547298fe54c8fadca754a7377a8d3d5430f5b12e081732496e6708f6e6 = $this->env->getExtension("native_profiler");
        $__internal_46f56a547298fe54c8fadca754a7377a8d3d5430f5b12e081732496e6708f6e6->enter($__internal_46f56a547298fe54c8fadca754a7377a8d3d5430f5b12e081732496e6708f6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46f56a547298fe54c8fadca754a7377a8d3d5430f5b12e081732496e6708f6e6->leave($__internal_46f56a547298fe54c8fadca754a7377a8d3d5430f5b12e081732496e6708f6e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0899e19cc0efe192823192c61f63e5dc150ee5fa30467eec067557d9444dfca = $this->env->getExtension("native_profiler");
        $__internal_d0899e19cc0efe192823192c61f63e5dc150ee5fa30467eec067557d9444dfca->enter($__internal_d0899e19cc0efe192823192c61f63e5dc150ee5fa30467eec067557d9444dfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d0899e19cc0efe192823192c61f63e5dc150ee5fa30467eec067557d9444dfca->leave($__internal_d0899e19cc0efe192823192c61f63e5dc150ee5fa30467eec067557d9444dfca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab9541450825e372ed801ac64d9323c999170bb49a857838ada59a710d50527b = $this->env->getExtension("native_profiler");
        $__internal_ab9541450825e372ed801ac64d9323c999170bb49a857838ada59a710d50527b->enter($__internal_ab9541450825e372ed801ac64d9323c999170bb49a857838ada59a710d50527b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ab9541450825e372ed801ac64d9323c999170bb49a857838ada59a710d50527b->leave($__internal_ab9541450825e372ed801ac64d9323c999170bb49a857838ada59a710d50527b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bae4211f9ffda2e64da84076dcbadd6b80c2e61a0e840253f61568babb1ba9c = $this->env->getExtension("native_profiler");
        $__internal_8bae4211f9ffda2e64da84076dcbadd6b80c2e61a0e840253f61568babb1ba9c->enter($__internal_8bae4211f9ffda2e64da84076dcbadd6b80c2e61a0e840253f61568babb1ba9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8bae4211f9ffda2e64da84076dcbadd6b80c2e61a0e840253f61568babb1ba9c->leave($__internal_8bae4211f9ffda2e64da84076dcbadd6b80c2e61a0e840253f61568babb1ba9c_prof);

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
