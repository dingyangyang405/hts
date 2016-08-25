<?php

/* WebBundle:Ticket:ticket-list-wrapper.html.twig */
class __TwigTemplate_f37c4f0cc22090418c7a6d9916f5c188afee7cfcd2ad0d1b0d45f9e5eaa5b0ce extends Twig_Template
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
        $__internal_9f9d574ddfe75b0f0bd03681055ce3ff95093094f05553bc682103c04b34acfe = $this->env->getExtension("native_profiler");
        $__internal_9f9d574ddfe75b0f0bd03681055ce3ff95093094f05553bc682103c04b34acfe->enter($__internal_9f9d574ddfe75b0f0bd03681055ce3ff95093094f05553bc682103c04b34acfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Ticket:ticket-list-wrapper.html.twig"));

        // line 1
        echo "<div style=\"min-height: 916px;\" class=\"content-wrapper\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
      <div class=\"box\" style=\"border-top:0px;border-radius:0px;\">
        <div class=\"box-header\" style=\"margin-bottom:10px;\">
          <h3 class=\"box-title\">所有工单</h3>
          <div class=\"box-tools\">
            <div class=\"input-group input-group-sm\" style=\"width: 90px;\">
              <span><a class=\"btn btn-success js-add-btn\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ticket_add", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">新增工单</a></span>
            </div>
          </div>
        </div>
    <form class=\"form-inline well well-sm\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_ticket_list", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" method=\"get\" novalidate=\"\" style=\"border-radius:0px;\">
       <div class=\"form-group\" style=\"margin-bottom: 10px;\">
        <input size=\"16\" name=\"startTime\" class=\"form-control input-append date form_datetime\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "startTime"), "method"), "html", null, true);
        echo "\" placeholder=\"开始时间\">
        <span class=\"add-on\"><i class=\"icon-th\"></i></span>-
        <input size=\"16\" name=\"endTime\" class=\"form-control input-append date form_datetime\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "endTime"), "method"), "html", null, true);
        echo "\" placeholder=\"结束时间\">
        <span class=\"add-on\"><i class=\"icon-th\"></i></span>
      </div><br/>
      <div class=\"form-group\">
        <select name=\"category\" class=\"form-control\" >
          <option value=\"\">--工单类型--</option>
          ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorys"]) ? $context["categorys"] : $this->getContext($context, "categorys")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 24
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\"";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "category"), "method") == $this->getAttribute($context["category"], "id", array()))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </select>
      </div>
      <div class=\"form-group\">
        <select name=\"status\" class=\"form-control\" >
          <option value=\"\">--状态--</option>
          ";
        // line 31
        echo $this->env->getExtension('html_twig')->selectOptions($this->env->getExtension('web_twig')->getDict("ticketStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "status"), "method"));
        echo "
        </select>
      </div>
      <div class=\"form-group\">
        <select id=\"keywordType\" name=\"keywordType\" class=\"form-control\">
          <option value=\"\">--关键词类型--</option>
          <option value=\"ticketNo\"";
        // line 37
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method") == "ticketNo")) {
            echo " selected=\"selected\" ";
        }
        echo ">编号</option>
          <option value=\"title\"";
        // line 38
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method") == "title")) {
            echo " selected=\"selected\" ";
        }
        echo ">标题</option>
        </select>
      </div>
      <div class=\"form-group\">
        <input id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\" type=\"text\">
      </div>
      <button class=\"btn btn-primary\">搜索</button>
    </form>

        <div class=\"box-body table-responsive no-padding\">
          <table id=\"assignedTable\" class=\"table table-hover js-table\">
            <thead >
              <tr>
                <th>工单编号</th>
                <th>标题</th>
                <th>工单类型</th>
                <th>提交时间</th>
                <th>状态</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody class=\"list\">
              ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 61
            echo "              <tr>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "ticketNo", array()), "html", null, true);
            echo "</td>
                <td title=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "title", array()), "html", null, true);
            echo "\" class=\"title\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_ticket_detail", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "title", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 64
            $context["category"] = $this->env->getExtension('data_twig')->getData("Category", array("id" => $this->getAttribute($context["ticket"], "category", array())));
            // line 65
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo $this->env->getExtension('web_twig')->getDictText("ticketStatus", $this->getAttribute($context["ticket"], "status", array()));
            echo "</td>
                <td><a type=\"button\" class=\"btn btn-sm btn-success js-update-btn\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_ticket_detail", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">查看</a></td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            </tbody>
          </table>
          ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>
</div>

<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/web/ticket/list.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_9f9d574ddfe75b0f0bd03681055ce3ff95093094f05553bc682103c04b34acfe->leave($__internal_9f9d574ddfe75b0f0bd03681055ce3ff95093094f05553bc682103c04b34acfe_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Ticket:ticket-list-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 80,  176 => 73,  172 => 71,  163 => 68,  159 => 67,  155 => 66,  150 => 65,  148 => 64,  140 => 63,  136 => 62,  133 => 61,  129 => 60,  108 => 42,  99 => 38,  93 => 37,  84 => 31,  77 => 26,  62 => 24,  58 => 23,  49 => 17,  44 => 15,  39 => 13,  32 => 9,  22 => 1,);
    }
}
/* <div style="min-height: 916px;" class="content-wrapper">*/
/*   <div class="row">*/
/*     <div class="col-xs-12">*/
/*       <div class="box" style="border-top:0px;border-radius:0px;">*/
/*         <div class="box-header" style="margin-bottom:10px;">*/
/*           <h3 class="box-title">所有工单</h3>*/
/*           <div class="box-tools">*/
/*             <div class="input-group input-group-sm" style="width: 90px;">*/
/*               <span><a class="btn btn-success js-add-btn" href="{{ path('ticket_add',{userId:user.id}) }}">新增工单</a></span>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*     <form class="form-inline well well-sm" action="{{ path('customer_ticket_list',{userId:user.id}) }}" method="get" novalidate="" style="border-radius:0px;">*/
/*        <div class="form-group" style="margin-bottom: 10px;">*/
/*         <input size="16" name="startTime" class="form-control input-append date form_datetime" value="{{app.request.query.get('startTime')}}" placeholder="开始时间">*/
/*         <span class="add-on"><i class="icon-th"></i></span>-*/
/*         <input size="16" name="endTime" class="form-control input-append date form_datetime" value="{{app.request.query.get('endTime')}}" placeholder="结束时间">*/
/*         <span class="add-on"><i class="icon-th"></i></span>*/
/*       </div><br/>*/
/*       <div class="form-group">*/
/*         <select name="category" class="form-control" >*/
/*           <option value="">--工单类型--</option>*/
/*           {% for category in categorys %}*/
/*           <option value="{{ category.id }}"{% if app.request.query.get('category') ==  category.id %} selected="selected" {% endif %}>{{ category.name }}</option>*/
/*           {% endfor %}*/
/*         </select>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <select name="status" class="form-control" >*/
/*           <option value="">--状态--</option>*/
/*           {{ select_options(dict('ticketStatus'), app.request.query.get('status')) }}*/
/*         </select>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <select id="keywordType" name="keywordType" class="form-control">*/
/*           <option value="">--关键词类型--</option>*/
/*           <option value="ticketNo"{% if app.request.query.get('keywordType') == "ticketNo"%} selected="selected" {% endif %}>编号</option>*/
/*           <option value="title"{% if app.request.query.get('keywordType') == "title"%} selected="selected" {% endif %}>标题</option>*/
/*         </select>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <input id="keyword" name="keyword" class="form-control" value="{{ app.request.query.get('keyword') }}" placeholder="关键词" type="text">*/
/*       </div>*/
/*       <button class="btn btn-primary">搜索</button>*/
/*     </form>*/
/* */
/*         <div class="box-body table-responsive no-padding">*/
/*           <table id="assignedTable" class="table table-hover js-table">*/
/*             <thead >*/
/*               <tr>*/
/*                 <th>工单编号</th>*/
/*                 <th>标题</th>*/
/*                 <th>工单类型</th>*/
/*                 <th>提交时间</th>*/
/*                 <th>状态</th>*/
/*                 <th>操作</th>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody class="list">*/
/*               {% for ticket in tickets %}*/
/*               <tr>*/
/*                 <td>{{ ticket.ticketNo }}</td>*/
/*                 <td title="{{ ticket.title }}" class="title"><a href="{{ path('customer_ticket_detail', {id:ticket.id}) }}">{{ticket.title}}</a></td>*/
/*                 <td>{% set category = data('Category', {id:ticket.category}) %}*/
/*                   {{ category.name }}</td>*/
/*                 <td>{{ ticket.created|date('Y-m-d H:i:s') }}</td>*/
/*                 <td>{{ dict_text('ticketStatus', ticket.status) }}</td>*/
/*                 <td><a type="button" class="btn btn-sm btn-success js-update-btn" href="{{ path('customer_ticket_detail', {id:ticket.id}) }}">查看</a></td>*/
/*               </tr>*/
/*               {% endfor %}*/
/*             </tbody>*/
/*           </table>*/
/*           {{ admin_macro.paginator(paginator) }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <script src="{{ asset('assets/js/web/ticket/list.js') }}"></script>*/
