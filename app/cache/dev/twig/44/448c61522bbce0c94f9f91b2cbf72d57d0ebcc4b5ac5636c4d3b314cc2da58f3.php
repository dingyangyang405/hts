<?php

/* AdminBundle:Ticket:ticket-list-wrapper.html.twig */
class __TwigTemplate_a0fa5257116e650ebbbfa6bf8b2913b34350fed5ea864f9f8656b8d1dadea56e extends Twig_Template
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
        $__internal_b2b6b92019d568bbcd87b57584bb69fd932eb06333e96ebc426f6a9637608f89 = $this->env->getExtension("native_profiler");
        $__internal_b2b6b92019d568bbcd87b57584bb69fd932eb06333e96ebc426f6a9637608f89->enter($__internal_b2b6b92019d568bbcd87b57584bb69fd932eb06333e96ebc426f6a9637608f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Ticket:ticket-list-wrapper.html.twig"));

        // line 1
        echo "<div style=\"min-height: 916px;\" class=\"content-wrapper\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
      <div class=\"box\" style=\"border-top:0px;border-radius:0px;\">
        <div class=\"box-header\" style=\"margin-bottom:10px;\">
          <h3 class=\"box-title\">所有工单</h3>
          <div class=\"box-tools\">
            <div class=\"input-group input-group-sm\" style=\"width: 90px;\">
              <span><button type=\"button\" class=\"btn btn-success distribute-tickets\" data-toggle=\"modal\" data-target=\"#myModal\" data-url=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_ticket_distribute");
        echo "\">批量派发</button></span>
            </div>
          </div>
        </div>
         <form id=\"processed-search-form\" class=\"form-inline well well-sm\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_ticket_list");
        echo "\" method=\"get\" novalidate=\"\" style=\"border-radius:0px;\">
          <div class=\"form-group\" style=\"margin-bottom: 10px; \">
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
        // line 26
        echo "            </select>
          </div>
          <div class=\"form-group\">
            <select name=\"priority\" class=\"form-control\" >
              <option value=\"\">--优先级--</option>
              ";
        // line 31
        echo $this->env->getExtension('html_twig')->selectOptions($this->env->getExtension('web_twig')->getDict("ticketPriority"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "priority"), "method"));
        echo "
            </select>
          </div>
          <div class=\"form-group\">
            <select name=\"status\" class=\"form-control\" >
              <option value=\"\">--状态--</option>
              ";
        // line 37
        echo $this->env->getExtension('html_twig')->selectOptions($this->env->getExtension('web_twig')->getDict("ticketStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "status"), "method"));
        echo "
            </select>
          </div>
          <div class=\"form-group\">
            <select id=\"keywordType\" name=\"keywordType\" class=\"form-control\">
              <option value=\"\">--关键词类型--</option>
              <option value=\"ticketNo\"";
        // line 43
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method") == "ticketNo")) {
            echo " selected=\"selected\" ";
        }
        echo ">编号</option>
              <option value=\"title\"";
        // line 44
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method") == "title")) {
            echo " selected=\"selected\" ";
        }
        echo ">标题</option>
              <option value=\"operator\"";
        // line 45
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method") == "operator")) {
            echo " selected=\"selected\" ";
        }
        echo ">客服</option>
              <option value=\"username\"";
        // line 46
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method") == "username")) {
            echo " selected=\"selected\" ";
        }
        echo ">工单发起人</option>
            </select>
          </div>
          <div class=\"form-group\">
            <input id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\" type=\"text\">
          </div>
          ";
        // line 52
        echo $this->env->getExtension('app_helper')->rendorFormCsrfToken();
        echo "
          <button class=\"btn btn-primary\">搜索</button>
    </form>

        <div class=\"box-body table-responsive no-padding\">
          <table class=\"table table-striped\">
          <tr>
            <th>选择</th>
            <th>编号</th>
            <th>标题</th>
            <th>工单类型</th>
            <th style=\"text-align:center;\">工单发起人</th>
            <th>优先级</th>
            <th>状态</th>
            <th>客服</th>
            <th>操作</th>
          </tr>
          ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 70
            echo "          <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "id", array()), "html", null, true);
            echo "\">
            <td><input id=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\" autocomplete=\"off\" name=\"checkboxId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "id", array()), "html", null, true);
            echo "\"></td>
            <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "ticketNo", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "title", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 74
            $context["category"] = $this->env->getExtension('data_twig')->getData("Category", array("id" => $this->getAttribute($context["ticket"], "category", array())));
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
            echo "</td>
            <td style=\"text-align:center;\">";
            // line 75
            $context["user"] = $this->env->getExtension('data_twig')->getData("User", array("userId" => $this->getAttribute($context["ticket"], "userId", array())));
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "无")) : ("无")), "html", null, true);
            echo "<h5><small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</small></h5></td>
            <td>";
            // line 76
            echo $this->env->getExtension('web_twig')->getDictText("ticketPriority:html", $this->getAttribute($context["ticket"], "priority", array()));
            echo "</td>
            <td>";
            // line 77
            echo $this->env->getExtension('web_twig')->getDictText("ticketStatus", $this->getAttribute($context["ticket"], "status", array()));
            echo "</td>
            <td>";
            // line 78
            if (($this->getAttribute($context["ticket"], "operatorId", array()) != 0)) {
                $context["service"] = $this->env->getExtension('data_twig')->getData("User", array("userId" => $this->getAttribute($context["ticket"], "operatorId", array())));
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "username", array()), "无")) : ("无")), "html", null, true);
            } else {
                echo "<span style=\"color: #555;\">未分配</span>";
            }
            echo "</td>
            <td>
              <div class=\"btn-group\">
                <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_ticket_detail", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-default btn-sm\">查看</a>
                <a type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                  <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li>
                    <a class=\"change-priority\" data-toggle=\"modal\" data-url=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_ticket_priority_change", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">修改优先级</a>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        </table>
        ";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
      </div>
      <!-- /.box-body -->
    </div>
  </div>
</div>
<div class=\"modal\" id=\"modal\"></div>
<script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/admin/ticket/ticket.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_b2b6b92019d568bbcd87b57584bb69fd932eb06333e96ebc426f6a9637608f89->leave($__internal_b2b6b92019d568bbcd87b57584bb69fd932eb06333e96ebc426f6a9637608f89_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Ticket:ticket-list-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 102,  233 => 95,  230 => 94,  217 => 87,  208 => 81,  197 => 78,  193 => 77,  189 => 76,  182 => 75,  177 => 74,  173 => 73,  169 => 72,  163 => 71,  158 => 70,  154 => 69,  134 => 52,  129 => 50,  120 => 46,  114 => 45,  108 => 44,  102 => 43,  93 => 37,  84 => 31,  77 => 26,  62 => 24,  58 => 23,  49 => 17,  44 => 15,  39 => 13,  32 => 9,  22 => 1,);
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
/*               <span><button type="button" class="btn btn-success distribute-tickets" data-toggle="modal" data-target="#myModal" data-url="{{ path('admin_ticket_distribute') }}">批量派发</button></span>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*          <form id="processed-search-form" class="form-inline well well-sm" action="{{ path('admin_ticket_list') }}" method="get" novalidate="" style="border-radius:0px;">*/
/*           <div class="form-group" style="margin-bottom: 10px; ">*/
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
/*               <option value="operator"{% if app.request.query.get('keywordType') == "operator"%} selected="selected" {% endif %}>客服</option>*/
/*               <option value="username"{% if app.request.query.get('keywordType') == "username"%} selected="selected" {% endif %}>工单发起人</option>*/
/*             </select>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <input id="keyword" name="keyword" class="form-control" value="{{app.request.query.get('keyword')}}" placeholder="关键词" type="text">*/
/*           </div>*/
/*           {{ form_csrf_token() }}*/
/*           <button class="btn btn-primary">搜索</button>*/
/*     </form>*/
/* */
/*         <div class="box-body table-responsive no-padding">*/
/*           <table class="table table-striped">*/
/*           <tr>*/
/*             <th>选择</th>*/
/*             <th>编号</th>*/
/*             <th>标题</th>*/
/*             <th>工单类型</th>*/
/*             <th style="text-align:center;">工单发起人</th>*/
/*             <th>优先级</th>*/
/*             <th>状态</th>*/
/*             <th>客服</th>*/
/*             <th>操作</th>*/
/*           </tr>*/
/*           {% for ticket in tickets %}*/
/*           <tr id="{{ticket.id}}">*/
/*             <td><input id="{{ticket.id}}" type="checkbox" autocomplete="off" name="checkboxId" value="{{ticket.id}}"></td>*/
/*             <td>{{ ticket.ticketNo }}</td>*/
/*             <td>{{ ticket.title }}</td>*/
/*             <td>{% set category = data('Category', {id:ticket.category}) %}{{ category.name }}</td>*/
/*             <td style="text-align:center;">{% set user = data('User', {userId:ticket.userId}) %}{{  user.username|default('无') }}<h5><small>{{ ticket.created|date('Y-m-d H:i:s') }}</small></h5></td>*/
/*             <td>{{ dict_text('ticketPriority:html', ticket.priority) }}</td>*/
/*             <td>{{ dict_text('ticketStatus', ticket.status) }}</td>*/
/*             <td>{% if ticket.operatorId != 0 %}{% set service = data('User', {userId:ticket.operatorId}) %}{{  service.username|default('无') }}{% else %}<span style="color: #555;">未分配</span>{% endif %}</td>*/
/*             <td>*/
/*               <div class="btn-group">*/
/*                 <a href="{{ path('operator_ticket_detail', {id:ticket.id}) }}"class="btn btn-default btn-sm">查看</a>*/
/*                 <a type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*                   <span class="caret"></span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li>*/
/*                     <a class="change-priority" data-toggle="modal" data-url="{{ path('admin_ticket_priority_change', {id:ticket.id}) }}">修改优先级</a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </div>*/
/*             </td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*         </table>*/
/*         {{ admin_macro.paginator(paginator) }}*/
/*       </div>*/
/*       <!-- /.box-body -->*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <div class="modal" id="modal"></div>*/
/* <script type="text/javascript" src="{{asset('assets/js/admin/ticket/ticket.js')}}"></script>*/
