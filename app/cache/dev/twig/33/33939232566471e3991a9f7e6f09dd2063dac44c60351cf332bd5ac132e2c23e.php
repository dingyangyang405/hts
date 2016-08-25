<?php

/* AdminBundle:User:index.html.twig */
class __TwigTemplate_b58fe468ebe287c7b38bfb9a2cdf43e6d85b092243331b896d7239ab142940c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:layout.html.twig", "AdminBundle:User:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_99f0eab3ff019dbde437f6411344af8418d995d3fa2235f76a3a37dd15b58093 = $this->env->getExtension("native_profiler");
        $__internal_99f0eab3ff019dbde437f6411344af8418d995d3fa2235f76a3a37dd15b58093->enter($__internal_99f0eab3ff019dbde437f6411344af8418d995d3fa2235f76a3a37dd15b58093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99f0eab3ff019dbde437f6411344af8418d995d3fa2235f76a3a37dd15b58093->leave($__internal_99f0eab3ff019dbde437f6411344af8418d995d3fa2235f76a3a37dd15b58093_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4284daac1b967819123acd58b490a0786c8a7ffb68986adbb8922498347db4cf = $this->env->getExtension("native_profiler");
        $__internal_4284daac1b967819123acd58b490a0786c8a7ffb68986adbb8922498347db4cf->enter($__internal_4284daac1b967819123acd58b490a0786c8a7ffb68986adbb8922498347db4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "后台";
        
        $__internal_4284daac1b967819123acd58b490a0786c8a7ffb68986adbb8922498347db4cf->leave($__internal_4284daac1b967819123acd58b490a0786c8a7ffb68986adbb8922498347db4cf_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9e3a9376a205260b62f28a0b2ee29558ad629db3c58b17651f1d80cffb6f4f0c = $this->env->getExtension("native_profiler");
        $__internal_9e3a9376a205260b62f28a0b2ee29558ad629db3c58b17651f1d80cffb6f4f0c->enter($__internal_9e3a9376a205260b62f28a0b2ee29558ad629db3c58b17651f1d80cffb6f4f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/validator/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/validator/messages_cn.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_9e3a9376a205260b62f28a0b2ee29558ad629db3c58b17651f1d80cffb6f4f0c->leave($__internal_9e3a9376a205260b62f28a0b2ee29558ad629db3c58b17651f1d80cffb6f4f0c_prof);

    }

    // line 10
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_27bd4e18fbdb29f5a50951efab0099848def4f3918f41bc51bde2264593821e4 = $this->env->getExtension("native_profiler");
        $__internal_27bd4e18fbdb29f5a50951efab0099848def4f3918f41bc51bde2264593821e4->enter($__internal_27bd4e18fbdb29f5a50951efab0099848def4f3918f41bc51bde2264593821e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 11
        echo "  ";
        $this->loadTemplate("AdminBundle:User:index-wrapper.html.twig", "AdminBundle:User:index.html.twig", 11)->display($context);
        
        $__internal_27bd4e18fbdb29f5a50951efab0099848def4f3918f41bc51bde2264593821e4->leave($__internal_27bd4e18fbdb29f5a50951efab0099848def4f3918f41bc51bde2264593821e4_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  68 => 10,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "AdminBundle:Default:layout.html.twig" %}*/
/* */
/* {% block title %}后台{% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   <script src="{{ asset('assets/libs/validator/jquery.validate.min.js') }}"></script>*/
/*   <script src="{{ asset('assets/libs/validator/messages_cn.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block wrapper %}*/
/*   {% include 'AdminBundle:User:index-wrapper.html.twig' %}*/
/* {% endblock %}*/
