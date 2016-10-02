<?php

/* WebBundle:WorkSpace:workspace-wrapper.html.twig */
class __TwigTemplate_f1da23c7bc7403b1c51f13571ee4adb02e8d98604d30ce3ab0f29b98adb78441 extends Twig_Template
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
        $__internal_6344b9305fb48d73d66d71d4bd4bab33936d4da483e5b41b13ce047eb38e3117 = $this->env->getExtension("native_profiler");
        $__internal_6344b9305fb48d73d66d71d4bd4bab33936d4da483e5b41b13ce047eb38e3117->enter($__internal_6344b9305fb48d73d66d71d4bd4bab33936d4da483e5b41b13ce047eb38e3117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:WorkSpace:workspace-wrapper.html.twig"));

        // line 1
        echo "<div style=\"min-height: 916px;\" class=\"content-wrapper\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
      <div class=\"box\">
        <div class=\"box-header\">
          <h3 class=\"box-title\">我的工作台</h3>
          <div class=\"box-tools\">
            <div class=\"input-group input-group-sm\" style=\"width: 90px;\">
              <span><i class=\"description-percentage text-green\" id=\"clock\">0</i>秒前刷新</span>
            </div>
          </div>
        </div>
        <div id=\"workspace-assigned-ticket\" class=\"box box-primary\" data-url=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("workspace_assigned_ticket", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\"></div>
        <div id=\"workspace-delayed-ticket\" class=\"box box-primary\" data-url=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("workspace_delayed_ticket");
        echo "\"></div>
        <div id=\"workspace-unassigned-ticket\" class=\"box box-primary\" data-url=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("workspace_unassigned_ticket");
        echo "\"></div>
      </div>
    </div>
  </div>
</div>";
        
        $__internal_6344b9305fb48d73d66d71d4bd4bab33936d4da483e5b41b13ce047eb38e3117->leave($__internal_6344b9305fb48d73d66d71d4bd4bab33936d4da483e5b41b13ce047eb38e3117_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:WorkSpace:workspace-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  40 => 14,  36 => 13,  22 => 1,);
    }
}
/* <div style="min-height: 916px;" class="content-wrapper">*/
/*   <div class="row">*/
/*     <div class="col-xs-12">*/
/*       <div class="box">*/
/*         <div class="box-header">*/
/*           <h3 class="box-title">我的工作台</h3>*/
/*           <div class="box-tools">*/
/*             <div class="input-group input-group-sm" style="width: 90px;">*/
/*               <span><i class="description-percentage text-green" id="clock">0</i>秒前刷新</span>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div id="workspace-assigned-ticket" class="box box-primary" data-url="{{ path('workspace_assigned_ticket', {userId:user.id}) }}"></div>*/
/*         <div id="workspace-delayed-ticket" class="box box-primary" data-url="{{ path('workspace_delayed_ticket') }}"></div>*/
/*         <div id="workspace-unassigned-ticket" class="box box-primary" data-url="{{ path('workspace_unassigned_ticket') }}"></div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
