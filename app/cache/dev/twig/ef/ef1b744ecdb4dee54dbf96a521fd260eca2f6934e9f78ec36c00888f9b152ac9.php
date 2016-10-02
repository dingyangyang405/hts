<?php

/* WebBundle:Default:index-sidebar.html.twig */
class __TwigTemplate_5ac9ea4417b832cb2ad10c435027b731c9fa399da15f878ace50e77844599fa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d151d6737bf0df91bb31ad2d5c63cc702b20ceb9c8fb0c618d4181169239713 = $this->env->getExtension("native_profiler");
        $__internal_8d151d6737bf0df91bb31ad2d5c63cc702b20ceb9c8fb0c618d4181169239713->enter($__internal_8d151d6737bf0df91bb31ad2d5c63cc702b20ceb9c8fb0c618d4181169239713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Default:index-sidebar.html.twig"));

        // line 1
        echo "  <aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\" style=\"height: auto;\">

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class=\"sidebar-menu\">
        ";
        // line 7
        if (twig_in_filter("ROLE_USER", (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "roles", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "roles", array()))) : ("")))) {
            // line 8
            echo "          <ul class=\"sidebar-menu\">
            <li class=\"treeview\">
              <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_ticket_list", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">
                <i class=\"fa fa-dashboard\"></i> <span>所有工单</span>
              </a>
            </li>
          </ul>
        ";
        }
        // line 16
        echo "        ";
        if (twig_in_filter("ROLE_SERVICE", (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "roles", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "roles", array()))) : ("")))) {
            // line 17
            echo "          <ul class=\"sidebar-menu\">
            <li class=\"treeview\">
              <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("workspace", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">
                <i class=\"fa fa-dashboard\"></i> <span>我的工作台</span>
              </a>
            </li>
          </ul>
          <ul class=\"sidebar-menu\">
            <li class=\"treeview\">
              <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ticket_processed_list", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">
                <i class=\"fa fa-dashboard\"></i> <span>已处理工单</span>
              </a>
            </li>
          </ul>
          <ul class=\"sidebar-menu\">
            <li class=\"treeview\">
              <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ticket_list", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">
                <i class=\"fa fa-dashboard\"></i> <span>所有工单</span>
              </a>
            </li>
          </ul>
        ";
        }
        // line 39
        echo "      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>";
        
        $__internal_8d151d6737bf0df91bb31ad2d5c63cc702b20ceb9c8fb0c618d4181169239713->leave($__internal_8d151d6737bf0df91bb31ad2d5c63cc702b20ceb9c8fb0c618d4181169239713_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Default:index-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 39,  72 => 33,  62 => 26,  52 => 19,  48 => 17,  45 => 16,  36 => 10,  32 => 8,  30 => 7,  22 => 1,);
    }
}
/*   <aside class="main-sidebar">*/
/*     <!-- sidebar: style can be found in sidebar.less -->*/
/*     <section class="sidebar" style="height: auto;">*/
/* */
/*       <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*       <ul class="sidebar-menu">*/
/*         {% if 'ROLE_USER' in app.user.roles|default() %}*/
/*           <ul class="sidebar-menu">*/
/*             <li class="treeview">*/
/*               <a href="{{ path('customer_ticket_list',{userId:user.id}) }}">*/
/*                 <i class="fa fa-dashboard"></i> <span>所有工单</span>*/
/*               </a>*/
/*             </li>*/
/*           </ul>*/
/*         {% endif %}*/
/*         {% if 'ROLE_SERVICE' in app.user.roles|default() %}*/
/*           <ul class="sidebar-menu">*/
/*             <li class="treeview">*/
/*               <a href="{{ path('workspace', {userId:user.id}) }}">*/
/*                 <i class="fa fa-dashboard"></i> <span>我的工作台</span>*/
/*               </a>*/
/*             </li>*/
/*           </ul>*/
/*           <ul class="sidebar-menu">*/
/*             <li class="treeview">*/
/*               <a href="{{ path('ticket_processed_list',{id:user.id}) }}">*/
/*                 <i class="fa fa-dashboard"></i> <span>已处理工单</span>*/
/*               </a>*/
/*             </li>*/
/*           </ul>*/
/*           <ul class="sidebar-menu">*/
/*             <li class="treeview">*/
/*               <a href="{{ path('ticket_list', {userId:user.id}) }}">*/
/*                 <i class="fa fa-dashboard"></i> <span>所有工单</span>*/
/*               </a>*/
/*             </li>*/
/*           </ul>*/
/*         {% endif %}*/
/*       </ul>*/
/*     </section>*/
/*     <!-- /.sidebar -->*/
/*   </aside>*/
