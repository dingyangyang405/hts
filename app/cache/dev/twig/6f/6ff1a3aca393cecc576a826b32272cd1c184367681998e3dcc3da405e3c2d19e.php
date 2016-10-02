<?php

/* AdminBundle:Default:index-header.html.twig */
class __TwigTemplate_fc973168186f398ac1a6c7bce068ea49518b30963fbec1fd610252155953e71d extends Twig_Template
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
        $__internal_e1da0f5c627ca8798fc1a2495b7e5fef4bcdc2f2fb7d177753526815b285e0d1 = $this->env->getExtension("native_profiler");
        $__internal_e1da0f5c627ca8798fc1a2495b7e5fef4bcdc2f2fb7d177753526815b285e0d1->enter($__internal_e1da0f5c627ca8798fc1a2495b7e5fef4bcdc2f2fb7d177753526815b285e0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index-header.html.twig"));

        // line 1
        echo "  <header class=\"main-header\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"logo\">
      <span class=\"logo-mini\"><b>H</b>TI</span>
      <span class=\"logo-lg\"><b>HERMES</b> TICKET</span>
    </a>
    <nav class=\"navbar navbar-static-top\">
      <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </a>

      <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">
          <!-- Messages: style can be found in dropdown.less-->
          <li class=\"dropdown notifications-menu\" >
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" id=\"notification-list\" data-url=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("notification_list");
        echo "\" >
              <i class=\"fa fa-bell-o\"></i>
              <span class=\"label label-warning notification-count\" data-url=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("notification");
        echo "\"></span>
            </a>
            <ul class=\"dropdown-menu show-notifiaction\" >
              <li class=\"header\">通知</li>
              <li>
                <div class=\"slimScrollDiv\" style=\"position: relative; overflow: hidden; width: auto; height: 200px;\">
                  <ul id=\"notification-part-list\" class=\"menu\" style=\"overflow: hidden; width: 100%; height: 200px;\">
                    
                  </ul>
                  <div class=\"slimScrollBar\" style=\"width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(0, 0, 0);\">
                    
                  </div>
                  <div class=\"slimScrollRail\" style=\"width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);\">
                    
                  </div>
                </div>
              </li>
              <li class=\"footer\"><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("notifiction_show");
        echo "\">更多</a></li>
            </ul>
          </li>
          <li class=\"dropdown tasks-menu\"></li>
          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
              <span class=\"hidden-xs\">";
        // line 44
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()))) : ("")), "html", null, true);
        echo "</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header\">
                <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
              </li>
              <li class=\"user-footer\">
                ";
        // line 52
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 53
            echo "                  <div class=\"pull-right\">
                    <a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\" class=\"btn btn-default btn-flat\">登录</a>
                  </div>
                  ";
        } else {
            // line 57
            echo "                  <div class=\"pull-left\">
                    <a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\" class=\"btn btn-default btn-flat\">回首页</a>
                  </div>
                  <div class=\"pull-right\">
                    <a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" class=\"btn btn-default btn-flat\">退出</a>
                  </div>
                ";
        }
        // line 64
        echo "              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>";
        
        $__internal_e1da0f5c627ca8798fc1a2495b7e5fef4bcdc2f2fb7d177753526815b285e0d1->leave($__internal_e1da0f5c627ca8798fc1a2495b7e5fef4bcdc2f2fb7d177753526815b285e0d1_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 64,  116 => 61,  110 => 58,  107 => 57,  101 => 54,  98 => 53,  96 => 52,  90 => 49,  82 => 44,  78 => 43,  69 => 37,  49 => 20,  44 => 18,  25 => 2,  22 => 1,);
    }
}
/*   <header class="main-header">*/
/*     <a href="{{ path('homepage') }}" class="logo">*/
/*       <span class="logo-mini"><b>H</b>TI</span>*/
/*       <span class="logo-lg"><b>HERMES</b> TICKET</span>*/
/*     </a>*/
/*     <nav class="navbar navbar-static-top">*/
/*       <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </a>*/
/* */
/*       <div class="navbar-custom-menu">*/
/*         <ul class="nav navbar-nav">*/
/*           <!-- Messages: style can be found in dropdown.less-->*/
/*           <li class="dropdown notifications-menu" >*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="notification-list" data-url="{{ path('notification_list') }}" >*/
/*               <i class="fa fa-bell-o"></i>*/
/*               <span class="label label-warning notification-count" data-url="{{path('notification')}}"></span>*/
/*             </a>*/
/*             <ul class="dropdown-menu show-notifiaction" >*/
/*               <li class="header">通知</li>*/
/*               <li>*/
/*                 <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;">*/
/*                   <ul id="notification-part-list" class="menu" style="overflow: hidden; width: 100%; height: 200px;">*/
/*                     */
/*                   </ul>*/
/*                   <div class="slimScrollBar" style="width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(0, 0, 0);">*/
/*                     */
/*                   </div>*/
/*                   <div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);">*/
/*                     */
/*                   </div>*/
/*                 </div>*/
/*               </li>*/
/*               <li class="footer"><a href="{{path('notifiction_show')}}">更多</a></li>*/
/*             </ul>*/
/*           </li>*/
/*           <li class="dropdown tasks-menu"></li>*/
/*           <li class="dropdown user user-menu">*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*               <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">*/
/*               <span class="hidden-xs">{{ app.user.username|default() }}</span>*/
/*             </a>*/
/*             <ul class="dropdown-menu">*/
/*               <!-- User image -->*/
/*               <li class="user-header">*/
/*                 <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">*/
/*               </li>*/
/*               <li class="user-footer">*/
/*                 {% if not app.user %}*/
/*                   <div class="pull-right">*/
/*                     <a href="{{ path('login') }}" class="btn btn-default btn-flat">登录</a>*/
/*                   </div>*/
/*                   {% else %}*/
/*                   <div class="pull-left">*/
/*                     <a href="{{ path('homepage') }}" class="btn btn-default btn-flat">回首页</a>*/
/*                   </div>*/
/*                   <div class="pull-right">*/
/*                     <a href="{{ path('logout') }}" class="btn btn-default btn-flat">退出</a>*/
/*                   </div>*/
/*                 {% endif %}*/
/*               </li>*/
/*             </ul>*/
/*           </li>*/
/*         </ul>*/
/*       </div>*/
/*     </nav>*/
/*   </header>*/
