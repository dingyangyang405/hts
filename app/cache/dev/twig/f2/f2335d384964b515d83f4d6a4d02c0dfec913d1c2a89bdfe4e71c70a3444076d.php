<?php

/* WebBundle:Default:index-header.html.twig */
class __TwigTemplate_ff3ab3275a34eeee8b374e54ec35eff2d994c1292f9f8adfe4e2c90fb04ad18c extends Twig_Template
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
        $__internal_6805b7d1492db02175284bcb7c31b75e6c924233bddf997a1983c0c41d07714f = $this->env->getExtension("native_profiler");
        $__internal_6805b7d1492db02175284bcb7c31b75e6c924233bddf997a1983c0c41d07714f->enter($__internal_6805b7d1492db02175284bcb7c31b75e6c924233bddf997a1983c0c41d07714f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Default:index-header.html.twig"));

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
          ";
        // line 41
        if (twig_in_filter("ROLE_SERVICE", (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "roles", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "roles", array()))) : ("")))) {
            // line 42
            echo "            <li class=\"dropdown notifications-menu\">
              <a id=\"onoffline\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              ";
            // line 44
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "status", array()) == "online")) {
                echo " <i class=\"fa fa-check-circle text-aqua\"></i>  在线 ";
            } else {
                echo " <i class=\"fa fa-times-circle text-yellow\"></i> 离线 ";
            }
            // line 45
            echo "              </a>
              <ul class=\"dropdown-menu\" style=\"background-color: #3D9970; min-width: 70px; text-align: center; width:80px;\">
                <li >
                  <button type=\"button\" class=\"btn bg-olive btn-flat margin\" data-url=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_status_update", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" id=\"online\" style=\"margin: 0px; width: 80px;\">
                    <i class=\"fa fa-check-circle text-aqua\"></i>  在线
                  </button>
                </li>
                <li>
                  <button type=\"button\" class=\"btn bg-olive btn-flat margin\" id=\"offline\" data-url=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_status_update", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" style=\"margin: 0px; width: 80px;\">
                    <i class=\"fa fa-times-circle text-yellow\"></i> 离线
                  </button>
                </li>
              </ul>
            </li>
          ";
        }
        // line 60
        echo "          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
              <span class=\"hidden-xs\">";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()))) : ("")), "html", null, true);
        echo "</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header\">
                <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
              </li>
              <li class=\"user-footer\">
                ";
        // line 71
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 72
            echo "                  <div class=\"pull-right\">
                    <a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\" class=\"btn btn-default btn-flat\">登录</a>
                  </div>
                  ";
        } else {
            // line 76
            echo "                  ";
            if ((twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array())) || twig_in_filter("ROLE_DIRECTOR", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array())))) {
                // line 77
                echo "                  <div class=\"pull-left\">
                    <a href=\"";
                // line 78
                echo $this->env->getExtension('routing')->getPath("admin");
                echo "\" class=\"btn btn-default btn-flat\">后台</a>
                  </div>
                  ";
            }
            // line 81
            echo "                  <div class=\"pull-right\">
                    <a href=\"";
            // line 82
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" class=\"btn btn-default btn-flat\">退出</a>
                  </div>
                ";
        }
        // line 85
        echo "              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>";
        
        $__internal_6805b7d1492db02175284bcb7c31b75e6c924233bddf997a1983c0c41d07714f->leave($__internal_6805b7d1492db02175284bcb7c31b75e6c924233bddf997a1983c0c41d07714f_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Default:index-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 85,  159 => 82,  156 => 81,  150 => 78,  147 => 77,  144 => 76,  138 => 73,  135 => 72,  133 => 71,  127 => 68,  119 => 63,  115 => 62,  111 => 60,  101 => 53,  93 => 48,  88 => 45,  82 => 44,  78 => 42,  76 => 41,  69 => 37,  49 => 20,  44 => 18,  25 => 2,  22 => 1,);
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
/*           {% if 'ROLE_SERVICE' in app.user.roles|default() %}*/
/*             <li class="dropdown notifications-menu">*/
/*               <a id="onoffline" href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*               {% if app.user.status == 'online' %} <i class="fa fa-check-circle text-aqua"></i>  在线 {% else %} <i class="fa fa-times-circle text-yellow"></i> 离线 {% endif %}*/
/*               </a>*/
/*               <ul class="dropdown-menu" style="background-color: #3D9970; min-width: 70px; text-align: center; width:80px;">*/
/*                 <li >*/
/*                   <button type="button" class="btn bg-olive btn-flat margin" data-url="{{path('operator_status_update',{id:app.user.id})}}" id="online" style="margin: 0px; width: 80px;">*/
/*                     <i class="fa fa-check-circle text-aqua"></i>  在线*/
/*                   </button>*/
/*                 </li>*/
/*                 <li>*/
/*                   <button type="button" class="btn bg-olive btn-flat margin" id="offline" data-url="{{path('operator_status_update',{id:app.user.id})}}" style="margin: 0px; width: 80px;">*/
/*                     <i class="fa fa-times-circle text-yellow"></i> 离线*/
/*                   </button>*/
/*                 </li>*/
/*               </ul>*/
/*             </li>*/
/*           {% endif %}*/
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
/*                   {% if 'ROLE_ADMIN' in app.user.roles or 'ROLE_DIRECTOR' in app.user.roles %}*/
/*                   <div class="pull-left">*/
/*                     <a href="{{ path('admin') }}" class="btn btn-default btn-flat">后台</a>*/
/*                   </div>*/
/*                   {% endif %}*/
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
