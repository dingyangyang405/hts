<?php

/* AdminBundle:Default:index-sidebar.html.twig */
class __TwigTemplate_3620cfb68dcac4a685b94a939e13a7e933c6970135a276f37a3eb331b431dc7d extends Twig_Template
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
        $__internal_438885ab073aebe49dc796e63a2aa33c16a2e2a62502653cc7c9f7750350ac5f = $this->env->getExtension("native_profiler");
        $__internal_438885ab073aebe49dc796e63a2aa33c16a2e2a62502653cc7c9f7750350ac5f->enter($__internal_438885ab073aebe49dc796e63a2aa33c16a2e2a62502653cc7c9f7750350ac5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index-sidebar.html.twig"));

        // line 1
        echo "  <aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less --> 
    ";
        // line 3
        if (twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
            // line 4
            echo "      <section class=\"sidebar\" style=\"height: auto;\">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class=\"sidebar-menu\">
          <li class=\"treeview\">
            <a href=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("admin_user");
            echo "\">
              <i class=\"fa fa-dashboard\"></i> <span>用户管理</span>
            </a>
          </li>
        </ul>
      </section>
      ";
        }
        // line 15
        echo "      ";
        if ("ROLE_DIRECTOR") {
            // line 16
            echo "      <section class=\"sidebar\" style=\"height: auto;\">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class=\"sidebar-menu\">
          <li class=\"treeview\">
            <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("admin_service");
            echo "\">
              <i class=\"fa fa-dashboard\"></i> <span>客服管理</span>
            </a>
          </li>
        </ul>
      </section>
      <section class=\"sidebar\" style=\"height: auto;\">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class=\"sidebar-menu\">
          <li class=\"treeview\">
            <a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("admin_ticket_list");
            echo "\">
              <i class=\"fa fa-dashboard\"></i> <span>所有工单</span>
            </a>
          </li>
        </ul>
      </section>
      <section class=\"sidebar\" style=\"height: auto;\">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class=\"sidebar-menu\">
          <li class=\"treeview\">
            <a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("admin_category_list");
            echo "\">
              <i class=\"fa fa-dashboard\"></i> <span>类型管理</span>
            </a>
          </li>
        </ul>
      </section>
      <section class=\"sidebar\" style=\"height: auto;\">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class=\"sidebar-menu\">
          <li class=\"treeview\">
            <a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("admin_faq_list");
            echo "\">
              <i class=\"fa fa-dashboard\"></i> <span>常见问题模板</span>
            </a>
          </li>
        </ul>
      </section>
    ";
        }
        // line 57
        echo "    <!-- /.sidebar -->
  </aside>";
        
        $__internal_438885ab073aebe49dc796e63a2aa33c16a2e2a62502653cc7c9f7750350ac5f->leave($__internal_438885ab073aebe49dc796e63a2aa33c16a2e2a62502653cc7c9f7750350ac5f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 57,  92 => 50,  79 => 40,  66 => 30,  53 => 20,  47 => 16,  44 => 15,  34 => 8,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/*   <aside class="main-sidebar">*/
/*     <!-- sidebar: style can be found in sidebar.less --> */
/*     {% if 'ROLE_ADMIN' in app.user.roles %}*/
/*       <section class="sidebar" style="height: auto;">*/
/*         <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*         <ul class="sidebar-menu">*/
/*           <li class="treeview">*/
/*             <a href="{{path('admin_user')}}">*/
/*               <i class="fa fa-dashboard"></i> <span>用户管理</span>*/
/*             </a>*/
/*           </li>*/
/*         </ul>*/
/*       </section>*/
/*       {% endif %}*/
/*       {% if 'ROLE_DIRECTOR' %}*/
/*       <section class="sidebar" style="height: auto;">*/
/*         <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*         <ul class="sidebar-menu">*/
/*           <li class="treeview">*/
/*             <a href="{{path('admin_service')}}">*/
/*               <i class="fa fa-dashboard"></i> <span>客服管理</span>*/
/*             </a>*/
/*           </li>*/
/*         </ul>*/
/*       </section>*/
/*       <section class="sidebar" style="height: auto;">*/
/*         <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*         <ul class="sidebar-menu">*/
/*           <li class="treeview">*/
/*             <a href="{{path('admin_ticket_list')}}">*/
/*               <i class="fa fa-dashboard"></i> <span>所有工单</span>*/
/*             </a>*/
/*           </li>*/
/*         </ul>*/
/*       </section>*/
/*       <section class="sidebar" style="height: auto;">*/
/*         <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*         <ul class="sidebar-menu">*/
/*           <li class="treeview">*/
/*             <a href="{{path('admin_category_list')}}">*/
/*               <i class="fa fa-dashboard"></i> <span>类型管理</span>*/
/*             </a>*/
/*           </li>*/
/*         </ul>*/
/*       </section>*/
/*       <section class="sidebar" style="height: auto;">*/
/*         <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*         <ul class="sidebar-menu">*/
/*           <li class="treeview">*/
/*             <a href="{{path('admin_faq_list')}}">*/
/*               <i class="fa fa-dashboard"></i> <span>常见问题模板</span>*/
/*             </a>*/
/*           </li>*/
/*         </ul>*/
/*       </section>*/
/*     {% endif %}*/
/*     <!-- /.sidebar -->*/
/*   </aside>*/
