<?php

/* WebBundle:WorkSpace:workspace-delayed-ticket.html.twig */
class __TwigTemplate_9b2e0b5a6901db3ed6fd6d93b630bde916716d986fdc1bfc36a845cc150201ec extends Twig_Template
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
        $__internal_d9a65a51c67eede4526579cb00c81b1b22072679510dcdfc13b1497df8076cee = $this->env->getExtension("native_profiler");
        $__internal_d9a65a51c67eede4526579cb00c81b1b22072679510dcdfc13b1497df8076cee->enter($__internal_d9a65a51c67eede4526579cb00c81b1b22072679510dcdfc13b1497df8076cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:WorkSpace:workspace-delayed-ticket.html.twig"));

        // line 1
        echo "  <div class=\"row\">
    <div class=\"col-xs-12\">
      <div class=\"box\" style=\"border-top:0px;border-radius:0px;\">
        <div class=\"box-header\">
          <h3 class=\"box-title\">滞留工单</h3>
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
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_ticket_detail", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "title", array()), "html", null, true);
            echo "</a>
                  </td>
                  <td>
                    ";
            // line 27
            $context["category"] = $this->env->getExtension('data_twig')->getData("Category", array("id" => $this->getAttribute($context["ticket"], "category", array())));
            // line 28
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
            echo "
                  </td>
                  <td style=\"text-align:center;\">
                    ";
            // line 31
            $context["userInfo"] = $this->env->getExtension('data_twig')->getData("User", array("userId" => $this->getAttribute($context["ticket"], "userId", array())));
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "username", array()))) : ("")), "html", null, true);
            echo "<h5><small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</small></h5>
                  </td>
                  <td>";
            // line 33
            echo $this->env->getExtension('web_twig')->getDictText("ticketPriority:html", $this->getAttribute($context["ticket"], "priority", array()));
            echo "</td>
                  <td class=\"mailbox-date\">
                    ";
            // line 35
            echo $this->env->getExtension('web_twig')->getDictText("ticketStatus", $this->getAttribute($context["ticket"], "status", array()));
            echo "
                  </td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
          </table>
          <div class=\"col-md-4\"></div>
          <div class=\" pull-right\" >
            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("ticket_delayed_list");
        echo "\" class=\"\">更多...</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/web/ticket/longcontent.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_d9a65a51c67eede4526579cb00c81b1b22072679510dcdfc13b1497df8076cee->leave($__internal_d9a65a51c67eede4526579cb00c81b1b22072679510dcdfc13b1497df8076cee_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:WorkSpace:workspace-delayed-ticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 51,  101 => 43,  95 => 39,  85 => 35,  80 => 33,  72 => 31,  65 => 28,  63 => 27,  55 => 24,  50 => 22,  47 => 21,  43 => 20,  22 => 1,);
    }
}
/*   <div class="row">*/
/*     <div class="col-xs-12">*/
/*       <div class="box" style="border-top:0px;border-radius:0px;">*/
/*         <div class="box-header">*/
/*           <h3 class="box-title">滞留工单</h3>*/
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
/*                     <a href="{{ path('operator_ticket_detail',{id:ticket.id}) }}">{{ ticket.title }}</a>*/
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
/*             <a href="{{ path('ticket_delayed_list') }}" class="">更多...</a>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <script src="{{ asset('assets/js/web/ticket/longcontent.js') }}"></script>*/
