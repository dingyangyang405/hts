<?php

/* WebBundle:WorkSpace:processed-ticket-wrapper.html.twig */
class __TwigTemplate_3a3ae6d359b5093b61ae0a286fe8a824623752a86d5e65bcf8b7640bc2180df8 extends Twig_Template
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
        $__internal_4ed9f7eae817fd0d2ca2945f38bd3f522ee30bbd65aea58bb5bc29bdc6d3e972 = $this->env->getExtension("native_profiler");
        $__internal_4ed9f7eae817fd0d2ca2945f38bd3f522ee30bbd65aea58bb5bc29bdc6d3e972->enter($__internal_4ed9f7eae817fd0d2ca2945f38bd3f522ee30bbd65aea58bb5bc29bdc6d3e972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:WorkSpace:processed-ticket-wrapper.html.twig"));

        // line 1
        echo " <div style=\"min-height: 916px;\" class=\"content-wrapper\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
      <div class=\"box\" style=\"border-top:0px;border-radius:0px;\">
        <div class=\"box-header\" style=\"margin-bottom:10px;\">
          <h3 class=\"box-title\">已处理工单</h3>
        </div>
        <form id=\"processed-search-form\" class=\"form-inline well well-sm\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ticket_processed_list", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" method=\"get\" novalidate=\"\" style=\"border-radius:0px;\">
           <div class=\"form-group\" style=\"margin-bottom: 10px;\">
            <input size=\"16\" name=\"startTime\" class=\"form-control input-append date form_datetime\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "startTime"), "method"), "html", null, true);
        echo "\" placeholder=\"开始时间\">
            <span class=\"add-on\"><i class=\"icon-th\"></i></span>-
            <input size=\"16\" name=\"endTime\" class=\"form-control input-append date form_datetime\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "endTime"), "method"), "html", null, true);
        echo "\" placeholder=\"结束时间\">
            <span class=\"add-on\"><i class=\"icon-th\"></i></span>
          </div><br/>
          <div class=\"form-group\">
            <select name=\"category\" class=\"form-control\" >
              <option value=\"\">--工单类型--</option>
              ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorys"]) ? $context["categorys"] : $this->getContext($context, "categorys")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
            echo "              <option value=\"";
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
        // line 21
        echo "            </select>
          </div>
          <div class=\"form-group\">
            <select id=\"keywordType\" name=\"keywordType\" class=\"form-control\">
              <option value=\"\">--关键词类型--</option>
              <option value=\"ticketNo\"";
        // line 26
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method") == "ticketNo")) {
            echo " selected=\"selected\" ";
        }
        echo ">编号</option>
              <option value=\"title\" ";
        // line 27
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method") == "title")) {
            echo " selected=\"selected\" ";
        }
        echo ">标题</option>
              <option value=\"username\"";
        // line 28
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method") == "username")) {
            echo " selected=\"selected\" ";
        }
        echo ">工单发起人</option>
            </select>
          </div>
          <div class=\"form-group\">
            <input id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\" type=\"text\">
          </div>
          ";
        // line 34
        echo $this->env->getExtension('app_helper')->rendorFormCsrfToken();
        echo "
          <button class=\"btn btn-primary\">搜索</button>
        </form>

        <div class=\"box-body table-responsive no-padding\">
          <table id=\"assignedTable\" class=\"table table-hover js-table\">
            <thead >
              <tr>
                <th>编号</th>
                <th>标题</th>
                <th>工单类型</th>
                <th style=\"text-align:center;\">工单发起人</th>
                <th>状态</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody class=\"list\">
              ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 52
            echo "              <tr>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "ticketNo", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_ticket_detail", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "title", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 55
            $context["category"] = $this->env->getExtension('data_twig')->getData("Category", array("id" => $this->getAttribute($context["ticket"], "category", array())));
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
            echo "</td>
                <td style=\"text-align:center;\">";
            // line 56
            $context["userInfo"] = $this->env->getExtension('data_twig')->getData("User", array("userId" => $this->getAttribute($context["ticket"], "userId", array())));
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "username", array()), "无")) : ("无")), "html", null, true);
            echo "<h5><small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</small></h5></td>
                <td>";
            // line 57
            echo $this->env->getExtension('web_twig')->getDictText("ticketStatus", $this->getAttribute($context["ticket"], "status", array()));
            echo "</td>
                <td><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_ticket_detail", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success\">查看</a></td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </tbody>
          </table>
          ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>
</div>

<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/web/ticket/list.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_4ed9f7eae817fd0d2ca2945f38bd3f522ee30bbd65aea58bb5bc29bdc6d3e972->leave($__internal_4ed9f7eae817fd0d2ca2945f38bd3f522ee30bbd65aea58bb5bc29bdc6d3e972_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:WorkSpace:processed-ticket-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 70,  168 => 63,  164 => 61,  155 => 58,  151 => 57,  144 => 56,  139 => 55,  133 => 54,  129 => 53,  126 => 52,  122 => 51,  102 => 34,  97 => 32,  88 => 28,  82 => 27,  76 => 26,  69 => 21,  54 => 19,  50 => 18,  41 => 12,  36 => 10,  31 => 8,  22 => 1,);
    }
}
/*  <div style="min-height: 916px;" class="content-wrapper">*/
/*   <div class="row">*/
/*     <div class="col-xs-12">*/
/*       <div class="box" style="border-top:0px;border-radius:0px;">*/
/*         <div class="box-header" style="margin-bottom:10px;">*/
/*           <h3 class="box-title">已处理工单</h3>*/
/*         </div>*/
/*         <form id="processed-search-form" class="form-inline well well-sm" action="{{ path('ticket_processed_list',{id:user.id}) }}" method="get" novalidate="" style="border-radius:0px;">*/
/*            <div class="form-group" style="margin-bottom: 10px;">*/
/*             <input size="16" name="startTime" class="form-control input-append date form_datetime" value="{{ app.request.query.get('startTime') }}" placeholder="开始时间">*/
/*             <span class="add-on"><i class="icon-th"></i></span>-*/
/*             <input size="16" name="endTime" class="form-control input-append date form_datetime" value="{{ app.request.query.get('endTime') }}" placeholder="结束时间">*/
/*             <span class="add-on"><i class="icon-th"></i></span>*/
/*           </div><br/>*/
/*           <div class="form-group">*/
/*             <select name="category" class="form-control" >*/
/*               <option value="">--工单类型--</option>*/
/*               {% for category in categorys %}*/
/*               <option value="{{ category.id }}"{% if app.request.query.get('category') ==  category.id %} selected="selected" {% endif %}>{{ category.name }}</option>*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <select id="keywordType" name="keywordType" class="form-control">*/
/*               <option value="">--关键词类型--</option>*/
/*               <option value="ticketNo"{% if app.request.query.get('keywordType') == "ticketNo"%} selected="selected" {% endif %}>编号</option>*/
/*               <option value="title" {% if app.request.query.get('keywordType') == "title"%} selected="selected" {% endif %}>标题</option>*/
/*               <option value="username"{% if app.request.query.get('keywordType') == "username"%} selected="selected" {% endif %}>工单发起人</option>*/
/*             </select>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <input id="keyword" name="keyword" class="form-control" value="{{ app.request.query.get('keyword') }}" placeholder="关键词" type="text">*/
/*           </div>*/
/*           {{ form_csrf_token() }}*/
/*           <button class="btn btn-primary">搜索</button>*/
/*         </form>*/
/* */
/*         <div class="box-body table-responsive no-padding">*/
/*           <table id="assignedTable" class="table table-hover js-table">*/
/*             <thead >*/
/*               <tr>*/
/*                 <th>编号</th>*/
/*                 <th>标题</th>*/
/*                 <th>工单类型</th>*/
/*                 <th style="text-align:center;">工单发起人</th>*/
/*                 <th>状态</th>*/
/*                 <th>操作</th>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody class="list">*/
/*               {% for ticket in tickets %}*/
/*               <tr>*/
/*                 <td>{{ ticket.ticketNo }}</td>*/
/*                 <td><a href="{{ path('operator_ticket_detail',{id:ticket.id}) }}">{{ ticket.title }}</a></td>*/
/*                 <td>{% set category = data('Category', {id:ticket.category}) %}{{ category.name }}</td>*/
/*                 <td style="text-align:center;">{% set userInfo = data('User', {userId:ticket.userId}) %}{{  userInfo.username|default('无') }}<h5><small>{{ ticket.created|date('Y-m-d H:i:s') }}</small></h5></td>*/
/*                 <td>{{ dict_text('ticketStatus', ticket.status) }}</td>*/
/*                 <td><a href="{{ path('operator_ticket_detail',{id:ticket.id}) }}" class="btn btn-sm btn-success">查看</a></td>*/
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
