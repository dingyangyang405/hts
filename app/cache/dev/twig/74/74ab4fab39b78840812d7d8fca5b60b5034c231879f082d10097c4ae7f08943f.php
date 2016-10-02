<?php

/* WebBundle:Ticket:complaint-ticket-modal.html.twig */
class __TwigTemplate_1fa245faacb7607633bfc0f6522fa0540983b5b31a5c3794ccec3289f6c70b61 extends Twig_Template
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
        $__internal_5e397dd376c573552c094af9615a508c3813700c092fedaf7962e0ae8cae7e44 = $this->env->getExtension("native_profiler");
        $__internal_5e397dd376c573552c094af9615a508c3813700c092fedaf7962e0ae8cae7e44->enter($__internal_5e397dd376c573552c094af9615a508c3813700c092fedaf7962e0ae8cae7e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Ticket:complaint-ticket-modal.html.twig"));

        // line 1
        echo "<!-- Modal complaint -->
<div tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\"><i class=\"fa fa-edit\"></i>投诉</h4>
      </div>
      <form id=\"complaintform\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_ticket_complaint", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
      <div class=\"modal-body\">
        <div class=\"row\">
          <div class=\"col-md-10 col-md-offset-1\">
            <div class=\"box box-widget\">
              <div class=\"widget-user-header \">
                <div class=\"widget-user-image\">
                </div>
                <h4><span class=\"fa fa-bullhorn\"></span>工单投诉</h4>
                <div class=\"info-box bg-red\">
                  <span class=\"info-box-icon\"><i class=\"fa fa-envelope-o\"></i></span>
                  <div class=\"info-box-content\">
                  <span class=\"info-box-text\">工单编号</span>
                  <span class=\"info-box-number\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "ticketNo", array()), "html", null, true);
        echo "</span>
                  <div class=\"progress\">
                  <div class=\"progress-bar\" style=\"width: 100%\"></div>
                  </div>
                  <span class=\"progress-description\">
                    <span>工单标题:";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "title", array()), "html", null, true);
        echo "</span>
                  </span>
            </div>
          </div>
              </div>
              <div class=\"box-footer no-padding\">
                <ul class=\"nav nav-stacked\">
                  <li><h4><i class=\"fa fa-thumbs-o-down\"></i>投诉原因</h4><textarea class=\"form-control\" name=\"about\" id=\"complaint\" style=\"resize:none;\" cols=\"60\" rows=\"8\"></textarea></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      ";
        // line 41
        echo $this->env->getExtension('app_helper')->rendorFormCsrfToken();
        echo "
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">取消</button>
        <button type=\"submit\" id=\"complaint\" class=\"btn btn-primary\">提交</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal end -->";
        
        $__internal_5e397dd376c573552c094af9615a508c3813700c092fedaf7962e0ae8cae7e44->leave($__internal_5e397dd376c573552c094af9615a508c3813700c092fedaf7962e0ae8cae7e44_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Ticket:complaint-ticket-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 41,  56 => 27,  48 => 22,  32 => 9,  22 => 1,);
    }
}
/* <!-- Modal complaint -->*/
/* <div tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*         <h4 class="modal-title" id="myModalLabel"><i class="fa fa-edit"></i>投诉</h4>*/
/*       </div>*/
/*       <form id="complaintform" action="{{ path('customer_ticket_complaint', {id:ticket.id}) }}" method="post">*/
/*       <div class="modal-body">*/
/*         <div class="row">*/
/*           <div class="col-md-10 col-md-offset-1">*/
/*             <div class="box box-widget">*/
/*               <div class="widget-user-header ">*/
/*                 <div class="widget-user-image">*/
/*                 </div>*/
/*                 <h4><span class="fa fa-bullhorn"></span>工单投诉</h4>*/
/*                 <div class="info-box bg-red">*/
/*                   <span class="info-box-icon"><i class="fa fa-envelope-o"></i></span>*/
/*                   <div class="info-box-content">*/
/*                   <span class="info-box-text">工单编号</span>*/
/*                   <span class="info-box-number">{{ ticket.ticketNo }}</span>*/
/*                   <div class="progress">*/
/*                   <div class="progress-bar" style="width: 100%"></div>*/
/*                   </div>*/
/*                   <span class="progress-description">*/
/*                     <span>工单标题:{{ ticket.title }}</span>*/
/*                   </span>*/
/*             </div>*/
/*           </div>*/
/*               </div>*/
/*               <div class="box-footer no-padding">*/
/*                 <ul class="nav nav-stacked">*/
/*                   <li><h4><i class="fa fa-thumbs-o-down"></i>投诉原因</h4><textarea class="form-control" name="about" id="complaint" style="resize:none;" cols="60" rows="8"></textarea></li>*/
/*                 </ul>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {{ form_csrf_token() }}*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>*/
/*         <button type="submit" id="complaint" class="btn btn-primary">提交</button>*/
/*       </div>*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <!-- Modal end -->*/
