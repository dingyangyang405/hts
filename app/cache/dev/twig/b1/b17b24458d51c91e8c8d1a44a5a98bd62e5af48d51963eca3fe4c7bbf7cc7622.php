<?php

/* AdminBundle:Category:category-list.html.twig */
class __TwigTemplate_1c08a184a0d3fece0bd2b6a2d09f04b7ae9dfdd850f0e668de557b994ea634dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:layout.html.twig", "AdminBundle:Category:category-list.html.twig", 1);
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
        $__internal_d6c45fd806f459caacd2dc3972b7f112973a3483b7e64c2a2ed676eb6aadcf5b = $this->env->getExtension("native_profiler");
        $__internal_d6c45fd806f459caacd2dc3972b7f112973a3483b7e64c2a2ed676eb6aadcf5b->enter($__internal_d6c45fd806f459caacd2dc3972b7f112973a3483b7e64c2a2ed676eb6aadcf5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Category:category-list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6c45fd806f459caacd2dc3972b7f112973a3483b7e64c2a2ed676eb6aadcf5b->leave($__internal_d6c45fd806f459caacd2dc3972b7f112973a3483b7e64c2a2ed676eb6aadcf5b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_387563916d16d7b555aa17811d3835d643dd0bc849f7a315772f0b9301e4bee2 = $this->env->getExtension("native_profiler");
        $__internal_387563916d16d7b555aa17811d3835d643dd0bc849f7a315772f0b9301e4bee2->enter($__internal_387563916d16d7b555aa17811d3835d643dd0bc849f7a315772f0b9301e4bee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "后台";
        
        $__internal_387563916d16d7b555aa17811d3835d643dd0bc849f7a315772f0b9301e4bee2->leave($__internal_387563916d16d7b555aa17811d3835d643dd0bc849f7a315772f0b9301e4bee2_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_abcbdc809b16f38b61935fe36ec60bfb08b99be9339e39401c8b5b7a1e90a41c = $this->env->getExtension("native_profiler");
        $__internal_abcbdc809b16f38b61935fe36ec60bfb08b99be9339e39401c8b5b7a1e90a41c->enter($__internal_abcbdc809b16f38b61935fe36ec60bfb08b99be9339e39401c8b5b7a1e90a41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/validator/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/libs/validator/messages_cn.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_abcbdc809b16f38b61935fe36ec60bfb08b99be9339e39401c8b5b7a1e90a41c->leave($__internal_abcbdc809b16f38b61935fe36ec60bfb08b99be9339e39401c8b5b7a1e90a41c_prof);

    }

    // line 11
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_4d27ceadb51c516cf9c3443df9af8f0417842ee83c4ffc04b09be9046fcaa4c3 = $this->env->getExtension("native_profiler");
        $__internal_4d27ceadb51c516cf9c3443df9af8f0417842ee83c4ffc04b09be9046fcaa4c3->enter($__internal_4d27ceadb51c516cf9c3443df9af8f0417842ee83c4ffc04b09be9046fcaa4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 12
        echo "  ";
        $this->loadTemplate("AdminBundle:Category:category-wrapper.html.twig", "AdminBundle:Category:category-list.html.twig", 12)->display($context);
        
        $__internal_4d27ceadb51c516cf9c3443df9af8f0417842ee83c4ffc04b09be9046fcaa4c3->leave($__internal_4d27ceadb51c516cf9c3443df9af8f0417842ee83c4ffc04b09be9046fcaa4c3_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Category:category-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  63 => 8,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "AdminBundle:Default:layout.html.twig" %}*/
/* */
/* {% block title %}后台{% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   {{ parent() }}*/
/*   <script src="{{ asset('assets/libs/validator/jquery.validate.min.js') }}"></script>*/
/*   <script src="{{ asset('assets/libs/validator/messages_cn.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block wrapper %}*/
/*   {% include 'AdminBundle:Category:category-wrapper.html.twig' %}*/
/* {% endblock %}*/
