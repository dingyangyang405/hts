<?php

/* AdminBundle:Ticket:change-priority-model.html.twig */
class __TwigTemplate_d88e2c08c5bdeb6b6a65109b218e42bc66d0ac13ef68f977c0699110693d99e3 extends Twig_Template
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
        $__internal_4875f578d0d2f42a4e475cdd9468de7793ff917b0d44f5db09d00a8605e9a861 = $this->env->getExtension("native_profiler");
        $__internal_4875f578d0d2f42a4e475cdd9468de7793ff917b0d44f5db09d00a8605e9a861->enter($__internal_4875f578d0d2f42a4e475cdd9468de7793ff917b0d44f5db09d00a8605e9a861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Ticket:change-priority-model.html.twig"));

        // line 1
        echo "<div class=\"modal-dialog \">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
      <h4 class=\"modal-title\">修改优先级</h4>
    </div>
    <div class=\"modal-body\">
      <form id=\"change-priority-form\" class=\"form-horizontal\" method=\"post\">
        <div class=\"radios\">
          <label>
            <input type=\"radio\" style=\"margin-left: 15px;\" name=\"priority\" value=\"5\" ";
        // line 11
        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "priority", array()) == 5)) {
            echo "checked=\"checked\"";
        }
        echo ">立即
          </label>
          <label>
            <input type=\"radio\" style=\"margin-left: 15px;\" name=\"priority\" value=\"4\" ";
        // line 14
        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "priority", array()) == 4)) {
            echo "checked=\"checked\"";
        }
        echo ">紧急
          </label>
          <label>
            <input type=\"radio\" style=\"margin-left: 15px;\" name=\"priority\" value=\"3\" ";
        // line 17
        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "priority", array()) == 3)) {
            echo "checked=\"checked\"";
        }
        echo ">高
          </label>
          <label>
            <input type=\"radio\" style=\"margin-left: 15px;\" name=\"priority\" value=\"2\" ";
        // line 20
        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "priority", array()) == 2)) {
            echo "checked=\"checked\"";
        }
        echo ">正常
          </label>
          <label>
            <input type=\"radio\" style=\"margin-left: 15px;\" name=\"priority\" value=\"1\" ";
        // line 23
        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "priority", array()) == 1)) {
            echo "checked=\"checked\"";
        }
        echo ">低
          </label>
        </div>
      </form>
    </div>
    ";
        // line 28
        echo $this->env->getExtension('app_helper')->rendorFormCsrfToken();
        echo "
    <div class=\"modal-footer\">  
      <button id=\"change-priority-btn\" data-submiting-text=\"正在提交\" class=\"btn btn-primary pull-right\" data-id=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_ticket_priority_change", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">保存</button>
      <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
    </div>
  </div>
</div>";
        
        $__internal_4875f578d0d2f42a4e475cdd9468de7793ff917b0d44f5db09d00a8605e9a861->leave($__internal_4875f578d0d2f42a4e475cdd9468de7793ff917b0d44f5db09d00a8605e9a861_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Ticket:change-priority-model.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 30,  76 => 28,  66 => 23,  58 => 20,  50 => 17,  42 => 14,  34 => 11,  22 => 1,);
    }
}
/* <div class="modal-dialog ">*/
/*   <div class="modal-content">*/
/*     <div class="modal-header">*/
/*       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/*       <h4 class="modal-title">修改优先级</h4>*/
/*     </div>*/
/*     <div class="modal-body">*/
/*       <form id="change-priority-form" class="form-horizontal" method="post">*/
/*         <div class="radios">*/
/*           <label>*/
/*             <input type="radio" style="margin-left: 15px;" name="priority" value="5" {% if ticket.priority == 5 %}checked="checked"{% endif %}>立即*/
/*           </label>*/
/*           <label>*/
/*             <input type="radio" style="margin-left: 15px;" name="priority" value="4" {% if ticket.priority == 4 %}checked="checked"{% endif %}>紧急*/
/*           </label>*/
/*           <label>*/
/*             <input type="radio" style="margin-left: 15px;" name="priority" value="3" {% if ticket.priority == 3 %}checked="checked"{% endif %}>高*/
/*           </label>*/
/*           <label>*/
/*             <input type="radio" style="margin-left: 15px;" name="priority" value="2" {% if ticket.priority == 2 %}checked="checked"{% endif %}>正常*/
/*           </label>*/
/*           <label>*/
/*             <input type="radio" style="margin-left: 15px;" name="priority" value="1" {% if ticket.priority == 1 %}checked="checked"{% endif %}>低*/
/*           </label>*/
/*         </div>*/
/*       </form>*/
/*     </div>*/
/*     {{ form_csrf_token() }}*/
/*     <div class="modal-footer">  */
/*       <button id="change-priority-btn" data-submiting-text="正在提交" class="btn btn-primary pull-right" data-id="{{ ticket.id }}" data-url="{{ path('admin_ticket_priority_change', {id:ticket.id}) }}" method="post">保存</button>*/
/*       <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
