<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_8e3d00a2a64349977b2a1acaf73287edf8e25fb54a2dd2ebf7037699cce1b4ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:layout.html.twig", "AdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'wrapper' => array($this, 'block_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39d5ac72d6490615ce445daf95aba41fd2a41a910d56e225a9694dc490825f80 = $this->env->getExtension("native_profiler");
        $__internal_39d5ac72d6490615ce445daf95aba41fd2a41a910d56e225a9694dc490825f80->enter($__internal_39d5ac72d6490615ce445daf95aba41fd2a41a910d56e225a9694dc490825f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39d5ac72d6490615ce445daf95aba41fd2a41a910d56e225a9694dc490825f80->leave($__internal_39d5ac72d6490615ce445daf95aba41fd2a41a910d56e225a9694dc490825f80_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_894a00e0d04890fd3541c7a5dd23b920a8076a92b90231df6255b3010489f73c = $this->env->getExtension("native_profiler");
        $__internal_894a00e0d04890fd3541c7a5dd23b920a8076a92b90231df6255b3010489f73c->enter($__internal_894a00e0d04890fd3541c7a5dd23b920a8076a92b90231df6255b3010489f73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "后台";
        
        $__internal_894a00e0d04890fd3541c7a5dd23b920a8076a92b90231df6255b3010489f73c->leave($__internal_894a00e0d04890fd3541c7a5dd23b920a8076a92b90231df6255b3010489f73c_prof);

    }

    // line 5
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_9871f5f7925c0419e25d6dc502b1e84436904fb9773053b75e92598181e68181 = $this->env->getExtension("native_profiler");
        $__internal_9871f5f7925c0419e25d6dc502b1e84436904fb9773053b75e92598181e68181->enter($__internal_9871f5f7925c0419e25d6dc502b1e84436904fb9773053b75e92598181e68181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 6
        echo "  ";
        $this->loadTemplate("AdminBundle:Default:index-body.html.twig", "AdminBundle:Default:index.html.twig", 6)->display($context);
        
        $__internal_9871f5f7925c0419e25d6dc502b1e84436904fb9773053b75e92598181e68181->leave($__internal_9871f5f7925c0419e25d6dc502b1e84436904fb9773053b75e92598181e68181_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AdminBundle:Default:layout.html.twig" %}*/
/* */
/* {% block title %}后台{% endblock %}*/
/* */
/* {% block wrapper %}*/
/*   {% include 'AdminBundle:Default:index-body.html.twig' %}*/
/* {% endblock %}*/
