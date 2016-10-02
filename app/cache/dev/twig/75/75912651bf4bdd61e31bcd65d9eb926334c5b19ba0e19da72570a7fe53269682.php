<?php

/* WebBundle:WorkSpace:ticket-wrapper.html.twig */
class __TwigTemplate_2b7991cee771773dde18cc240ea67364778f940b59c6e3f5c09b269212562aaf extends Twig_Template
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
        $__internal_df063467ae6d320b38cb81193713701ea2566d12b0a389dd21c748b3a4b86c42 = $this->env->getExtension("native_profiler");
        $__internal_df063467ae6d320b38cb81193713701ea2566d12b0a389dd21c748b3a4b86c42->enter($__internal_df063467ae6d320b38cb81193713701ea2566d12b0a389dd21c748b3a4b86c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:WorkSpace:ticket-wrapper.html.twig"));

        // line 1
        echo "<div style=\"min-height: 916px;\" class=\"content-wrapper\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
      <div class=\"box\" style=\"border-top:0px;border-radius:0px;\">
        <div class=\"box-header\" style=\"margin-bottom:10px;\">
          <h3 class=\"box-title\">所有工单</h3>
        </div>
        <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ticket_list", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "operatorNo", array(), "array"))), "html", null, true);
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
            <select name=\"priority\" class=\"form-control\" >
              <option value=\"\">--优先级--</option>
              ";
        // line 26
        echo $this->env->getExtension('html_twig')->selectOptions($this->env->getExtension('web_twig')->getDict("ticketPriority"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "priority"), "method"));
        echo "
            </select>
          </div>
          <div class=\"form-group\">
            <select name=\"status\" class=\"form-control\" >
              <option value=\"\">--状态--</option>
              ";
        // line 32
        echo $this->env->getExtension('html_twig')->selectOptions($this->env->getExtension('web_twig')->getDict("ticketStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "status"), "method"));
        echo "
            </select>
          </div>
          <div class=\"form-group\">
            <select id=\"keywordType\" name=\"keywordType\" class=\"form-control\">
              <option value=\"\">--关键词类型--</option>
              <option value=\"ticketNo\"";
        // line 38
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method") == "ticketNo")) {
            echo " selected=\"selected\" ";
        }
        echo ">编号</option>
              <option value=\"title\"";
        // line 39
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method") == "title")) {
            echo " selected=\"selected\" ";
        }
        echo ">标题</option>
              <option value=\"username\"";
        // line 40
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method") == "username")) {
            echo " selected=\"selected\" ";
        }
        echo ">工单发起人</option>
            </select>
          </div>
          <div class=\"form-group\">
            <input id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\" type=\"text\">
          </div>
          ";
        // line 46
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
                <th>优先级</th>
                <th>状态</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody class=\"list\">
              ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 65
            echo "              <tr>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "ticketNo", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_ticket_detail", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "title", array()), "html", null, true);
            echo "</a></td>
                <td>
                  ";
            // line 69
            $context["category"] = $this->env->getExtension('data_twig')->getData("Category", array("id" => $this->getAttribute($context["ticket"], "category", array())));
            // line 70
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
            echo "
                </td>
                <td style=\"text-align:center;\">";
            // line 72
            $context["userInfo"] = $this->env->getExtension('data_twig')->getData("User", array("userId" => $this->getAttribute($context["ticket"], "userId", array())));
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "username", array()), "无")) : ("无")), "html", null, true);
            echo "<h5><small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</small></h5></td>
                <td>";
            // line 73
            echo $this->env->getExtension('web_twig')->getDictText("ticketPriority:html", $this->getAttribute($context["ticket"], "priority", array()));
            echo "</td>
                <td>";
            // line 74
            echo $this->env->getExtension('web_twig')->getDictText("ticketStatus", $this->getAttribute($context["ticket"], "status", array()));
            echo "</td>
                <td><a type=\"button\" class=\"btn btn-sm btn-success js-update-btn\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_ticket_detail", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">查看</a></td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "            </tbody>
          </table>
          ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>
</div>";
        
        $__internal_df063467ae6d320b38cb81193713701ea2566d12b0a389dd21c748b3a4b86c42->leave($__internal_df063467ae6d320b38cb81193713701ea2566d12b0a389dd21c748b3a4b86c42_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:WorkSpace:ticket-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 80,  191 => 78,  182 => 75,  178 => 74,  174 => 73,  167 => 72,  161 => 70,  159 => 69,  152 => 67,  148 => 66,  145 => 65,  141 => 64,  120 => 46,  115 => 44,  106 => 40,  100 => 39,  94 => 38,  85 => 32,  76 => 26,  69 => 21,  54 => 19,  50 => 18,  41 => 12,  36 => 10,  31 => 8,  22 => 1,);
    }
}
/* <div style="min-height: 916px;" class="content-wrapper">*/
/*   <div class="row">*/
/*     <div class="col-xs-12">*/
/*       <div class="box" style="border-top:0px;border-radius:0px;">*/
/*         <div class="box-header" style="margin-bottom:10px;">*/
/*           <h3 class="box-title">所有工单</h3>*/
/*         </div>*/
/*         <form id="user-search-form" class="form-inline well well-sm" action="{{path('ticket_list', {userId:user['operatorNo']})}}" method="get" novalidate="" style="border-radius:0px;">*/
/*            <div class="form-group" style="margin-bottom: 10px;">*/
/*             <input size="16" name="startTime" class="form-control input-append date form_datetime" value="{{app.request.query.get('startTime')}}" placeholder="开始时间">*/
/*             <span class="add-on"><i class="icon-th"></i></span>-*/
/*             <input size="16" name="endTime" class="form-control input-append date form_datetime" value="{{app.request.query.get('endTime')}}" placeholder="结束时间">*/
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
/*             <select name="priority" class="form-control" >*/
/*               <option value="">--优先级--</option>*/
/*               {{ select_options(dict('ticketPriority'), app.request.query.get('priority')) }}*/
/*             </select>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <select name="status" class="form-control" >*/
/*               <option value="">--状态--</option>*/
/*               {{ select_options(dict('ticketStatus'), app.request.query.get('status')) }}*/
/*             </select>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <select id="keywordType" name="keywordType" class="form-control">*/
/*               <option value="">--关键词类型--</option>*/
/*               <option value="ticketNo"{% if app.request.query.get('keywordType') == "ticketNo"%} selected="selected" {% endif %}>编号</option>*/
/*               <option value="title"{% if app.request.query.get('keywordType') == "title"%} selected="selected" {% endif %}>标题</option>*/
/*               <option value="username"{% if app.request.query.get('keywordType') == "username"%} selected="selected" {% endif %}>工单发起人</option>*/
/*             </select>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <input id="keyword" name="keyword" class="form-control" value="{{app.request.query.get('keyword')}}" placeholder="关键词" type="text">*/
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
/*                 <th>优先级</th>*/
/*                 <th>状态</th>*/
/*                 <th>操作</th>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody class="list">*/
/*               {% for ticket in tickets %}*/
/*               <tr>*/
/*                 <td>{{ ticket.ticketNo }}</td>*/
/*                 <td><a href="{{ path('operator_ticket_detail',{id:ticket.id}) }}">{{ ticket.title }}</a></td>*/
/*                 <td>*/
/*                   {% set category = data('Category', {id:ticket.category}) %}*/
/*                   {{ category.name }}*/
/*                 </td>*/
/*                 <td style="text-align:center;">{% set userInfo = data('User', {userId:ticket.userId}) %}{{  userInfo.username|default('无') }}<h5><small>{{ ticket.created|date('Y-m-d H:i:s') }}</small></h5></td>*/
/*                 <td>{{ dict_text('ticketPriority:html', ticket.priority) }}</td>*/
/*                 <td>{{ dict_text('ticketStatus', ticket.status) }}</td>*/
/*                 <td><a type="button" class="btn btn-sm btn-success js-update-btn" href="{{ path('operator_ticket_detail',{id:ticket.id}) }}">查看</a></td>*/
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
