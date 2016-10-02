<?php

/* WebBundle:Ticket:ticket-detail-wrapper.html.twig */
class __TwigTemplate_9adcf87efe78686d83286e9dcc032ea7bf6f0760d977830027ddebb852b943c9 extends Twig_Template
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
        $__internal_d73c893c5706edc6240d24544a5c897e3bebef33644fb0410cd85222e293a108 = $this->env->getExtension("native_profiler");
        $__internal_d73c893c5706edc6240d24544a5c897e3bebef33644fb0410cd85222e293a108->enter($__internal_d73c893c5706edc6240d24544a5c897e3bebef33644fb0410cd85222e293a108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Ticket:ticket-detail-wrapper.html.twig"));

        // line 1
        echo "<div class=\"content-wrapper\" style=\"min-height: 1036px;\">
  <div class=\"row\">
    <div class=\"col-md-10\" style=\"margin: 0px;\">
    <section class=\"content-header\">
      <div class=\"alert bg-gray disabled color-palette\">
        <h4>工单详情</h4>
          <div class=\"row\">
            <div class=\"col-md-3\">
              <span>标题：</span> <label>";
        // line 9
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "title", array()))) : ("")), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-md-3\">
               <span>工单编号：</span><label>";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "ticketNo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "ticketNo", array()))) : ("")), "html", null, true);
        echo "</label>
            </div>
            ";
        // line 14
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "service")) {
            // line 15
            echo "              <div class=\"col-md-3\">
                <span>用户电话 : <label>";
            // line 16
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "phone", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "phone", array()))) : ("")), "html", null, true);
            echo "</label></span>
              </div>
            ";
        }
        // line 19
        echo "          </div>
          <div class=\"row\">
            <div class=\"col-md-4\">
              <span>提交时间：</span><label>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-md-3\">
              <span>状态：</span><label class=\"label label-info\">";
        // line 25
        echo $this->env->getExtension('web_twig')->getDictText("ticketStatus", $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()));
        echo "</label>
            </div>
            <div class=\"col-md-2\"></div>

            <div class=\"col-md-3\">
              ";
        // line 30
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "customer")) {
            // line 31
            echo "                ";
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) != "closed")) {
                // line 32
                echo "                  <span class=\"btn btn-danger btn-xs ticket-close\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_ticket_close", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
                echo "\">关闭工单</span>
                ";
            }
            // line 34
            echo "                <span href=\"\" data-toggle=\"modal\" data-target=\"#myModal1\" class=\"btn btn-warning btn-xs complaint-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_ticket_complaint", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
            echo "\">一键投诉</span>
                ";
            // line 35
            if ((($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) == "confirmed") || ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) == "closed"))) {
                // line 36
                echo "                  <span href=\"###\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"btn btn-warning btn-xs evaluate-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_ticket_review", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
                echo "\">评价</span>
                ";
            }
            // line 38
            echo "              ";
        }
        // line 39
        echo "            </div>
          </div>
      </div>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <!-- row -->
      <div class=\"row\">
          <!-- The time line -->
          <ul class=\"timeline\">
            <!-- timeline time label -->
            <li class=\"time-label\">
                  <span class=\"bg-red\">
                    ";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "created", array()), "Y-M-d"), "html", null, true);
        echo "
                  </span>
            </li>
              ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ticketItems"]) ? $context["ticketItems"] : $this->getContext($context, "ticketItems")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ticketItem"]) {
            // line 57
            echo "                ";
            if (($this->getAttribute($context["ticketItem"], "role", array()) == "customer")) {
                // line 58
                echo "                  ";
                if (($this->getAttribute($context["ticketItem"], "type", array()) == "complaint")) {
                    // line 59
                    echo "                    ";
                    $this->loadTemplate("WebBundle:TimeLine:customer-timeline-complaint.html.twig", "WebBundle:Ticket:ticket-detail-wrapper.html.twig", 59)->display($context);
                    // line 60
                    echo "                  ";
                } elseif (($this->getAttribute($context["ticketItem"], "type", array()) == "review")) {
                    // line 61
                    echo "                    ";
                    $this->loadTemplate("WebBundle:TimeLine:customer-timeline-review.html.twig", "WebBundle:Ticket:ticket-detail-wrapper.html.twig", 61)->display($context);
                    // line 62
                    echo "                  ";
                } else {
                    // line 63
                    echo "                    ";
                    $this->loadTemplate("WebBundle:TimeLine:timeline-customer.html.twig", "WebBundle:Ticket:ticket-detail-wrapper.html.twig", 63)->display($context);
                    // line 64
                    echo "                  ";
                }
                // line 65
                echo "                ";
            }
            // line 66
            echo "                ";
            if (($this->getAttribute($context["ticketItem"], "role", array()) == "service")) {
                // line 67
                echo "                  ";
                $this->loadTemplate("WebBundle:TimeLine:timeline-operator.html.twig", "WebBundle:Ticket:ticket-detail-wrapper.html.twig", 67)->display($context);
                // line 68
                echo "                ";
            }
            // line 69
            echo "              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticketItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "            <li>
              <i class=\"fa fa-clock-o bg-gray\"></i>
            </li>
          </ul>
        </div>
    </section>
    </div>

    <section class=\"col-md-2\" style=\"margin-top: 10px; margin-left: -20px;\">
      ";
        // line 79
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "service")) {
            // line 80
            echo "        ";
            $this->loadTemplate("WebBundle:Ticket:similar-ticket.html.twig", "WebBundle:Ticket:ticket-detail-wrapper.html.twig", 80)->display($context);
            // line 81
            echo "      ";
        }
        // line 82
        echo "    </section>
  </div>
</div>
<div class=\"modal\" id=\"complaintModal\"></div>
<div class=\"modal\" id=\"evaluateModal\"></div>
";
        
        $__internal_d73c893c5706edc6240d24544a5c897e3bebef33644fb0410cd85222e293a108->leave($__internal_d73c893c5706edc6240d24544a5c897e3bebef33644fb0410cd85222e293a108_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Ticket:ticket-detail-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 82,  205 => 81,  202 => 80,  200 => 79,  189 => 70,  175 => 69,  172 => 68,  169 => 67,  166 => 66,  163 => 65,  160 => 64,  157 => 63,  154 => 62,  151 => 61,  148 => 60,  145 => 59,  142 => 58,  139 => 57,  122 => 56,  116 => 53,  100 => 39,  97 => 38,  91 => 36,  89 => 35,  84 => 34,  78 => 32,  75 => 31,  73 => 30,  65 => 25,  59 => 22,  54 => 19,  48 => 16,  45 => 15,  43 => 14,  38 => 12,  32 => 9,  22 => 1,);
    }
}
/* <div class="content-wrapper" style="min-height: 1036px;">*/
/*   <div class="row">*/
/*     <div class="col-md-10" style="margin: 0px;">*/
/*     <section class="content-header">*/
/*       <div class="alert bg-gray disabled color-palette">*/
/*         <h4>工单详情</h4>*/
/*           <div class="row">*/
/*             <div class="col-md-3">*/
/*               <span>标题：</span> <label>{{ ticket.title|default() }}</label>*/
/*             </div>*/
/*             <div class="col-md-3">*/
/*                <span>工单编号：</span><label>{{ ticket.ticketNo|default() }}</label>*/
/*             </div>*/
/*             {% if role == "service" %}*/
/*               <div class="col-md-3">*/
/*                 <span>用户电话 : <label>{{ ticket.phone|default() }}</label></span>*/
/*               </div>*/
/*             {% endif %}*/
/*           </div>*/
/*           <div class="row">*/
/*             <div class="col-md-4">*/
/*               <span>提交时间：</span><label>{{ ticket.created|date('Y-m-d H:i:s')}}</label>*/
/*             </div>*/
/*             <div class="col-md-3">*/
/*               <span>状态：</span><label class="label label-info">{{ dict_text('ticketStatus', ticket.status) }}</label>*/
/*             </div>*/
/*             <div class="col-md-2"></div>*/
/* */
/*             <div class="col-md-3">*/
/*               {% if role == 'customer' %}*/
/*                 {% if ticket.status != 'closed' %}*/
/*                   <span class="btn btn-danger btn-xs ticket-close" data-url="{{ path('customer_ticket_close', {id:ticket.id}) }}">关闭工单</span>*/
/*                 {% endif %}*/
/*                 <span href="" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-xs complaint-btn" data-url="{{ path('customer_ticket_complaint', {id:ticket.id}) }}">一键投诉</span>*/
/*                 {% if ticket.status == 'confirmed' or ticket.status == 'closed' %}*/
/*                   <span href="###" data-toggle="modal" data-target="#myModal" class="btn btn-warning btn-xs evaluate-btn" data-url="{{ path('customer_ticket_review', {id:ticket.id}) }}">评价</span>*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*       </div>*/
/*     </section>*/
/* */
/*     <!-- Main content -->*/
/*     <section class="content">*/
/*       <!-- row -->*/
/*       <div class="row">*/
/*           <!-- The time line -->*/
/*           <ul class="timeline">*/
/*             <!-- timeline time label -->*/
/*             <li class="time-label">*/
/*                   <span class="bg-red">*/
/*                     {{ ticket.created|date('Y-M-d') }}*/
/*                   </span>*/
/*             </li>*/
/*               {% for ticketItem in ticketItems %}*/
/*                 {% if ticketItem.role == 'customer' %}*/
/*                   {% if ticketItem.type == 'complaint' %}*/
/*                     {% include 'WebBundle:TimeLine:customer-timeline-complaint.html.twig' %}*/
/*                   {% elseif ticketItem.type == 'review' %}*/
/*                     {% include 'WebBundle:TimeLine:customer-timeline-review.html.twig' %}*/
/*                   {% else %}*/
/*                     {% include 'WebBundle:TimeLine:timeline-customer.html.twig' %}*/
/*                   {% endif %}*/
/*                 {% endif %}*/
/*                 {% if ticketItem.role == 'service' %}*/
/*                   {% include 'WebBundle:TimeLine:timeline-operator.html.twig' %}*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             <li>*/
/*               <i class="fa fa-clock-o bg-gray"></i>*/
/*             </li>*/
/*           </ul>*/
/*         </div>*/
/*     </section>*/
/*     </div>*/
/* */
/*     <section class="col-md-2" style="margin-top: 10px; margin-left: -20px;">*/
/*       {% if role == 'service' %}*/
/*         {% include 'WebBundle:Ticket:similar-ticket.html.twig' %}*/
/*       {% endif %}*/
/*     </section>*/
/*   </div>*/
/* </div>*/
/* <div class="modal" id="complaintModal"></div>*/
/* <div class="modal" id="evaluateModal"></div>*/
/* */
