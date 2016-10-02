<?php

/* WebBundle:Ticket:similar-ticket.html.twig */
class __TwigTemplate_7d8f48a40b7e0598341d544b0695cb3fcf772d0b64ffb8e266801260ea58f6fb extends Twig_Template
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
        $__internal_526608cf4410917bc33294e2d866f5fec3e6f9c08c581654ad0b230b83fb7cf9 = $this->env->getExtension("native_profiler");
        $__internal_526608cf4410917bc33294e2d866f5fec3e6f9c08c581654ad0b230b83fb7cf9->enter($__internal_526608cf4410917bc33294e2d866f5fec3e6f9c08c581654ad0b230b83fb7cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Ticket:similar-ticket.html.twig"));

        // line 1
        echo "<div class=\"nav navbar-nav\" style=\"margin: 0px; width: 170px;\">
  <div class=\"box box-warning box-solid collapsed-box\">
    <div class=\"box-header with-border\">
      <h3 class=\"box-title\">相同类型工单</h3>
        <div class=\"box-tools pull-right\">
          <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i>
          </button>
        </div>
    </div>
    <div class=\"box-body\" style=\"display: none;\">
      <ul class=\"nav nav-pills nav-stacked longcontent\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sameCategoryTickets"]) ? $context["sameCategoryTickets"] : $this->getContext($context, "sameCategoryTickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["sameCategoryTicket"]) {
            // line 13
            echo "          <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_ticket_detail", array("id" => $this->getAttribute($context["sameCategoryTicket"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sameCategoryTicket"], "title", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sameCategoryTicket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        <li class=\"footer text-center\" style=\"display: block; style=\"font-size: 13px;\"\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("same_category_ticket", array("category" => (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")))), "html", null, true);
        echo "\" class=\"uppercase\">查看全部</a></li>
      </ul>
    </div>
  </div>
  <div class=\"box box-info box-solid collapsed-box\">
    <div class=\"box-header with-border\">
      <h3 class=\"box-title\">用户历史工单</h3>
        <div class=\"box-tools pull-right\">
          <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i>
          </button>
        </div>
    </div>
    <div class=\"box-body\" style=\"display: none;\">
      <ul class=\"nav nav-pills nav-stacked longcontent\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["otherTickets"]) ? $context["otherTickets"] : $this->getContext($context, "otherTickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["otherTicket"]) {
            // line 30
            echo "          <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_ticket_detail", array("id" => $this->getAttribute($context["otherTicket"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["otherTicket"], "title", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['otherTicket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        <li class=\"footer text-center\" style=\"display: block; style=\"font-size: 13px;\"\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("other_ticket", array("userId" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\" class=\"uppercase\">查看全部</a></li>
      </ul>
    </div>
  </div>
  <div class=\"dropdown notifications-menu open\" style=\"width: 170px; position: fixed; \">
    <div class=\"box box-success box-solid\">
      <div class=\"box-header with-border\">
        <h3 class=\"box-title\">FAQ</h3>
      </div>
      <div class=\"box-body no-padding\" style=\"display: block; height: 200px; overflow: auto;\">
        <ul class=\"nav nav-pills nav-stacked longcontent\">
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["faqs"]) ? $context["faqs"] : $this->getContext($context, "faqs")));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 44
            echo "          <li><a type=\"button\" class=\"faq-auto-reply\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_ticket_autoReply", array("ticketId" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()), "faqId" => $this->getAttribute($context["faq"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "question", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </ul>
      </div>
    </div>
  </div>
</div>

<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/web/ticket/similarticket.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_526608cf4410917bc33294e2d866f5fec3e6f9c08c581654ad0b230b83fb7cf9->leave($__internal_526608cf4410917bc33294e2d866f5fec3e6f9c08c581654ad0b230b83fb7cf9_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Ticket:similar-ticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 52,  113 => 46,  102 => 44,  98 => 43,  83 => 32,  72 => 30,  68 => 29,  50 => 15,  39 => 13,  35 => 12,  22 => 1,);
    }
}
/* <div class="nav navbar-nav" style="margin: 0px; width: 170px;">*/
/*   <div class="box box-warning box-solid collapsed-box">*/
/*     <div class="box-header with-border">*/
/*       <h3 class="box-title">相同类型工单</h3>*/
/*         <div class="box-tools pull-right">*/
/*           <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>*/
/*           </button>*/
/*         </div>*/
/*     </div>*/
/*     <div class="box-body" style="display: none;">*/
/*       <ul class="nav nav-pills nav-stacked longcontent">*/
/*         {% for sameCategoryTicket in sameCategoryTickets %}*/
/*           <li><a href="{{ path('operator_ticket_detail',{id:sameCategoryTicket.id}) }}">{{sameCategoryTicket.title}}</a></li>*/
/*         {% endfor %}*/
/*         <li class="footer text-center" style="display: block; style="font-size: 13px;""><a href="{{path('same_category_ticket',{category:category})}}" class="uppercase">查看全部</a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="box box-info box-solid collapsed-box">*/
/*     <div class="box-header with-border">*/
/*       <h3 class="box-title">用户历史工单</h3>*/
/*         <div class="box-tools pull-right">*/
/*           <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>*/
/*           </button>*/
/*         </div>*/
/*     </div>*/
/*     <div class="box-body" style="display: none;">*/
/*       <ul class="nav nav-pills nav-stacked longcontent">*/
/*         {% for otherTicket in otherTickets %}*/
/*           <li><a href="{{ path('operator_ticket_detail',{id:otherTicket.id}) }}">{{otherTicket.title}}</a></li>*/
/*         {% endfor %}*/
/*         <li class="footer text-center" style="display: block; style="font-size: 13px;""><a href="{{path('other_ticket',{userId:userId})}}" class="uppercase">查看全部</a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="dropdown notifications-menu open" style="width: 170px; position: fixed; ">*/
/*     <div class="box box-success box-solid">*/
/*       <div class="box-header with-border">*/
/*         <h3 class="box-title">FAQ</h3>*/
/*       </div>*/
/*       <div class="box-body no-padding" style="display: block; height: 200px; overflow: auto;">*/
/*         <ul class="nav nav-pills nav-stacked longcontent">*/
/*         {% for faq in faqs %}*/
/*           <li><a type="button" class="faq-auto-reply" data-url="{{ path('operator_ticket_autoReply', {ticketId:ticket.id, faqId:faq.id}) }}">{{faq.question}}</a></li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <script src="{{ asset('assets/js/web/ticket/similarticket.js') }}"></script>*/
