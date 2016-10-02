<?php

/* WebBundle:Login:login.html.twig */
class __TwigTemplate_795eda5e651abbc8c4a0f500823238c1993b1c4cd353a97db088c8f00490a1b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle:Default:layout.html.twig", "WebBundle:Login:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70fd69ce008e8ec6d52b3edbd06ab5d05ccceddfef966e279fde9407d864029c = $this->env->getExtension("native_profiler");
        $__internal_70fd69ce008e8ec6d52b3edbd06ab5d05ccceddfef966e279fde9407d864029c->enter($__internal_70fd69ce008e8ec6d52b3edbd06ab5d05ccceddfef966e279fde9407d864029c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70fd69ce008e8ec6d52b3edbd06ab5d05ccceddfef966e279fde9407d864029c->leave($__internal_70fd69ce008e8ec6d52b3edbd06ab5d05ccceddfef966e279fde9407d864029c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2c7687de76562a5ea667415def9fcea85d3ea5f1c0bee50be9b9631f561bd8d = $this->env->getExtension("native_profiler");
        $__internal_c2c7687de76562a5ea667415def9fcea85d3ea5f1c0bee50be9b9631f561bd8d->enter($__internal_c2c7687de76562a5ea667415def9fcea85d3ea5f1c0bee50be9b9631f561bd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "登陆";
        
        $__internal_c2c7687de76562a5ea667415def9fcea85d3ea5f1c0bee50be9b9631f561bd8d->leave($__internal_c2c7687de76562a5ea667415def9fcea85d3ea5f1c0bee50be9b9631f561bd8d_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_ea1fb99e5aa90a5ea90e8a84bc159cb61caac1153f492817eb4e1e87b2eeeda6 = $this->env->getExtension("native_profiler");
        $__internal_ea1fb99e5aa90a5ea90e8a84bc159cb61caac1153f492817eb4e1e87b2eeeda6->enter($__internal_ea1fb99e5aa90a5ea90e8a84bc159cb61caac1153f492817eb4e1e87b2eeeda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    ";
        $this->loadTemplate("WebBundle:Login:login-header.html.twig", "WebBundle:Login:login.html.twig", 6)->display($context);
        // line 7
        echo "  ";
        
        $__internal_ea1fb99e5aa90a5ea90e8a84bc159cb61caac1153f492817eb4e1e87b2eeeda6->leave($__internal_ea1fb99e5aa90a5ea90e8a84bc159cb61caac1153f492817eb4e1e87b2eeeda6_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_579d4074dee2bac8389575251d37d9dcd82666fc847d8c04aecb4ac70397443a = $this->env->getExtension("native_profiler");
        $__internal_579d4074dee2bac8389575251d37d9dcd82666fc847d8c04aecb4ac70397443a->enter($__internal_579d4074dee2bac8389575251d37d9dcd82666fc847d8c04aecb4ac70397443a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "      <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 12
        echo "    ";
        $this->loadTemplate("WebBundle:Login:login-body.html.twig", "WebBundle:Login:login.html.twig", 12)->display($context);
        // line 13
        echo "  ";
        
        $__internal_579d4074dee2bac8389575251d37d9dcd82666fc847d8c04aecb4ac70397443a->leave($__internal_579d4074dee2bac8389575251d37d9dcd82666fc847d8c04aecb4ac70397443a_prof);

    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ce68aa417c5ac5314ea760128ee853b1c645adbf9f32ec7d62ee986db8f6c0e4 = $this->env->getExtension("native_profiler");
        $__internal_ce68aa417c5ac5314ea760128ee853b1c645adbf9f32ec7d62ee986db8f6c0e4->enter($__internal_ce68aa417c5ac5314ea760128ee853b1c645adbf9f32ec7d62ee986db8f6c0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 15
        echo "      <style>
        body{
          background-color: rgb(249,250,252) ;
        }
      </style>
  ";
        
        $__internal_ce68aa417c5ac5314ea760128ee853b1c645adbf9f32ec7d62ee986db8f6c0e4->leave($__internal_ce68aa417c5ac5314ea760128ee853b1c645adbf9f32ec7d62ee986db8f6c0e4_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 15,  90 => 14,  83 => 13,  80 => 12,  74 => 10,  71 => 9,  65 => 8,  58 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "WebBundle:Default:layout.html.twig" %}*/
/* */
/* {% block title %}登陆{% endblock %}*/
/* */
/*   {% block header %}*/
/*     {% include 'WebBundle:Login:login-header.html.twig' %}*/
/*   {% endblock %}*/
/*   {% block body %}*/
/*     {% if error %}*/
/*       <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/*     {% include 'WebBundle:Login:login-body.html.twig' %}*/
/*   {% endblock %}*/
/*   {% block footer %}*/
/*       <style>*/
/*         body{*/
/*           background-color: rgb(249,250,252) ;*/
/*         }*/
/*       </style>*/
/*   {% endblock %}*/
