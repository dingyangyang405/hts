<?php

/* WebBundle:WorkSpace:workspace-assigned-ticket.html.twig */
class __TwigTemplate_e693d214b8259f2c99b86e6a6cf6194ffaf3b27672a0d556cf870a7fc4c024ee extends Twig_Template
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
        $__internal_10df07c5832034298123065987fa85e7b46705cacb515570a8dc9384ba358f9d = $this->env->getExtension("native_profiler");
        $__internal_10df07c5832034298123065987fa85e7b46705cacb515570a8dc9384ba358f9d->enter($__internal_10df07c5832034298123065987fa85e7b46705cacb515570a8dc9384ba358f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:WorkSpace:workspace-assigned-ticket.html.twig"));

        // line 1
        echo "  <div class=\"row\">
    <div class=\"col-xs-12\">
      <div class=\"box\" style=\"border-top:0px;border-radius:0px;\">
        <div class=\"box-header\">
          <h3 class=\"box-title\">分配给我的工单</h3>
        </div>
        <div class=\"box-body table-responsive no-padding\">
          <table id=\"assignedTable\" class=\"table table-hover js-table\">
            <thead >
              <tr>
                <th>编号</th>
                <th>标题</th>
                <th>工单类型</th>
                <th style=\"text-align:center;\">工单发起人</th>
                <th>优先级</th>
                <th>状态</th>
              </tr>
            </thead>
            <tbody class=\"list\">
              ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 21
            echo "                <tr>
                  <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "ticketNo", array()), "html", null, true);
            echo "</td>
                  <td class=\"mailbox-name\">
                    ";
            // line 24
            if (($this->getAttribute($context["ticket"], "reminder", array()) == false)) {
                // line 25
                echo "                      <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_ticket_detail", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "title", array()), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 27
                echo "                      <span class=\"label label-warning\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_ticket_detail", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "title", array()), "html", null, true);
                echo "</a></span>
                    ";
            }
            // line 29
            echo "                  </td>
                  <td>
                    ";
            // line 31
            $context["category"] = $this->env->getExtension('data_twig')->getData("Category", array("id" => $this->getAttribute($context["ticket"], "category", array())));
            // line 32
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
            echo "
                  </td>
                  <td style=\"text-align:center;\">
                    ";
            // line 35
            $context["userInfo"] = $this->env->getExtension('data_twig')->getData("User", array("userId" => $this->getAttribute($context["ticket"], "userId", array())));
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "username", array()))) : ("")), "html", null, true);
            echo "<h5><small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</small></h5>
                  </td>
                  <td>";
            // line 37
            echo $this->env->getExtension('web_twig')->getDictText("ticketPriority:html", $this->getAttribute($context["ticket"], "priority", array()));
            echo "</td>
                  <td class=\"mailbox-date\">
                    ";
            // line 39
            echo $this->env->getExtension('web_twig')->getDictText("ticketStatus", $this->getAttribute($context["ticket"], "status", array()));
            echo "
                  </td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
          </table>
          <div class=\"col-md-4\"></div>
          <div class=\" pull-right\" >
            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ticket_assigned_list", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"\">更多...</a>
          </div>
        </div>
      </div>
    </div>

  <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/web/ticket/longcontent.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_10df07c5832034298123065987fa85e7b46705cacb515570a8dc9384ba358f9d->leave($__internal_10df07c5832034298123065987fa85e7b46705cacb515570a8dc9384ba358f9d_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:WorkSpace:workspace-assigned-ticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 53,  115 => 47,  109 => 43,  99 => 39,  94 => 37,  86 => 35,  79 => 32,  77 => 31,  73 => 29,  65 => 27,  57 => 25,  55 => 24,  50 => 22,  47 => 21,  43 => 20,  22 => 1,);
    }
}
/*   <div class="row">*/
/*     <div class="col-xs-12">*/
/*       <div class="box" style="border-top:0px;border-radius:0px;">*/
/*         <div class="box-header">*/
/*           <h3 class="box-title">分配给我的工单</h3>*/
/*         </div>*/
/*         <div class="box-body table-responsive no-padding">*/
/*           <table id="assignedTable" class="table table-hover js-table">*/
/*             <thead >*/
/*               <tr>*/
/*                 <th>编号</th>*/
/*                 <th>标题</th>*/
/*                 <th>工单类型</th>*/
/*                 <th style="text-align:center;">工单发起人</th>*/
/*                 <th>优先级</th>*/
/*                 <th>状态</th>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody class="list">*/
/*               {% for ticket in tickets %}*/
/*                 <tr>*/
/*                   <td>{{ ticket.ticketNo }}</td>*/
/*                   <td class="mailbox-name">*/
/*                     {% if ticket.reminder == false %}*/
/*                       <a href="{{ path('operator_ticket_detail',{id:ticket.id}) }}">{{ ticket.title }}</a>*/
/*                     {% else %}*/
/*                       <span class="label label-warning"><a href="{{ path('operator_ticket_detail',{id:ticket.id}) }}">{{ ticket.title }}</a></span>*/
/*                     {% endif %}*/
/*                   </td>*/
/*                   <td>*/
/*                     {% set category = data('Category', {id:ticket.category}) %}*/
/*                     {{ category.name }}*/
/*                   </td>*/
/*                   <td style="text-align:center;">*/
/*                     {% set userInfo = data('User', {userId:ticket.userId}) %}{{ userInfo.username|default() }}<h5><small>{{ ticket.created|date('Y-m-d H:i:s') }}</small></h5>*/
/*                   </td>*/
/*                   <td>{{ dict_text('ticketPriority:html', ticket.priority) }}</td>*/
/*                   <td class="mailbox-date">*/
/*                     {{ dict_text('ticketStatus', ticket.status) }}*/
/*                   </td>*/
/*                 </tr>*/
/*               {% endfor %}*/
/*             </tbody>*/
/*           </table>*/
/*           <div class="col-md-4"></div>*/
/*           <div class=" pull-right" >*/
/*             <a href="{{ path('ticket_assigned_list', {userId:user.id}) }}" class="">更多...</a>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*   <script src="{{ asset('assets/js/web/ticket/longcontent.js') }}"></script>*/
