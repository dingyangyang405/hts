<?php

/* AdminBundle:User:index-wrapper.html.twig */
class __TwigTemplate_680158816ab2c8e8fd448979ee4bee7e5070b214e03abab4ad7319710c15d4b2 extends Twig_Template
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
        $__internal_8509f0ac41fcecb0398c76375873186f76b52f1d70db895bed4a1f1ab1344c60 = $this->env->getExtension("native_profiler");
        $__internal_8509f0ac41fcecb0398c76375873186f76b52f1d70db895bed4a1f1ab1344c60->enter($__internal_8509f0ac41fcecb0398c76375873186f76b52f1d70db895bed4a1f1ab1344c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:User:index-wrapper.html.twig"));

        // line 1
        echo "<div style=\"min-height: 916px;\" class=\"content-wrapper\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <div class=\"box\" style=\"border-top:0px;border-radius:0px;\">
            <div class=\"box-header\" style=\"margin-bottom:10px;\">
              <h3 class=\"box-title\">用户列表</h3>
            </div>
        <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\" method=\"get\" novalidate=\"\" style=\"border-radius:0px;\">

        <div class=\"form-group\">
          <select id=\"keywordType\" name=\"keywordType\" class=\"form-control\">
            <option value=\"\">--关键词类型--</option>
            <option value=\"username\"";
        // line 13
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method") == "username")) {
            echo " selected=\"selected\" ";
        }
        echo ">用户名</option>
            <option value=\"name\"";
        // line 14
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method") == "name")) {
            echo " selected=\"selected\" ";
        }
        echo ">姓名</option>
            <option value=\"operatorNo\"";
        // line 15
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method") == "operatorNo")) {
            echo " selected=\"selected\" ";
        }
        echo ">编号</option>
          </select>
        </div>
        <div class=\"form-group\">
          <input id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\" type=\"text\">
        </div>
          <select id=\"roles\" name=\"roles\" class=\"form-control\">
            <option value=\"\">--权限--</option>
            <option value=\"ROLE_ADMIN\"";
        // line 23
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "roles"), "method") == "ROLE_ADMIN")) {
            echo " selected=\"selected\" ";
        }
        echo ">管理员</option>
            <option value=\"ROLE_DIRECTOR\"";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "roles"), "method") == "ROLE_DIRECTOR")) {
            echo " selected=\"selected\" ";
        }
        echo ">客服主管</option>
            <option value=\"ROLE_SERVICE\"";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "roles"), "method") == "ROLE_SERVICE")) {
            echo " selected=\"selected\" ";
        }
        echo ">客服</option>
          </select>
        <button class=\"btn btn-primary\">搜索</button>
        </form>
            <div class=\"box-body table-responsive no-padding\">
              <table class=\"table table-hover js-table\">
                <thead >
                  <tr>
                  <th>用户名</th>
                  <th>姓名</th>
                  <th>编号</th>
                  <th>当前工作量</th>
                  <th>最大工作量</th>
                  <th>邮箱</th>
                  <th>手机号</th>
                  <th>权限</th>
                  <th>操作</th>
                  </tr>
                </thead>
                <tbody class=\"list\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            echo "                <tr  id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">
                  <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "operatorNo", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "currentWorkload", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "maxWorkload", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "phone", array()), "html", null, true);
            echo "</td>
                  <td> 
                    ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 56
                echo "                        ";
                echo $this->env->getExtension('web_twig')->getDictText("userRoles", $context["role"]);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                  <td>
                    <button type=\"button\" class=\"btn btn-sm btn-success js-update-btn\" data-toggle=\"modal\" data-id = \"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" data-target=\"#myModal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_update", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">编辑</button>
                    <button type=\"button\" class=\"btn btn-sm btn-success js-delete-btn\"  data-url=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">删除</button></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo " 
              </tbody></table>
              ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
            </div>
          </div>
        </div>
        </div>
<div class=\"modal\" id=\"modal\"></div>
<script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/admin/list/list.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_8509f0ac41fcecb0398c76375873186f76b52f1d70db895bed4a1f1ab1344c60->leave($__internal_8509f0ac41fcecb0398c76375873186f76b52f1d70db895bed4a1f1ab1344c60_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:User:index-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 70,  179 => 64,  175 => 62,  164 => 60,  158 => 59,  155 => 58,  146 => 56,  142 => 55,  137 => 53,  133 => 52,  129 => 51,  125 => 50,  121 => 49,  117 => 48,  113 => 47,  108 => 46,  104 => 45,  79 => 25,  73 => 24,  67 => 23,  60 => 19,  51 => 15,  45 => 14,  39 => 13,  31 => 8,  22 => 1,);
    }
}
/* <div style="min-height: 916px;" class="content-wrapper">*/
/*       <div class="row">*/
/*         <div class="col-xs-12">*/
/*           <div class="box" style="border-top:0px;border-radius:0px;">*/
/*             <div class="box-header" style="margin-bottom:10px;">*/
/*               <h3 class="box-title">用户列表</h3>*/
/*             </div>*/
/*         <form id="user-search-form" class="form-inline well well-sm" action="{{path('admin_user')}}" method="get" novalidate="" style="border-radius:0px;">*/
/* */
/*         <div class="form-group">*/
/*           <select id="keywordType" name="keywordType" class="form-control">*/
/*             <option value="">--关键词类型--</option>*/
/*             <option value="username"{% if app.request.query.get('keywordType') == "username"%} selected="selected" {% endif %}>用户名</option>*/
/*             <option value="name"{% if app.request.query.get('keywordType') == "name"%} selected="selected" {% endif %}>姓名</option>*/
/*             <option value="operatorNo"{% if app.request.query.get('keywordType') == "operatorNo"%} selected="selected" {% endif %}>编号</option>*/
/*           </select>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <input id="keyword" name="keyword" class="form-control" value="{{app.request.query.get('keyword')}}" placeholder="关键词" type="text">*/
/*         </div>*/
/*           <select id="roles" name="roles" class="form-control">*/
/*             <option value="">--权限--</option>*/
/*             <option value="ROLE_ADMIN"{% if app.request.query.get('roles') == "ROLE_ADMIN"%} selected="selected" {% endif %}>管理员</option>*/
/*             <option value="ROLE_DIRECTOR"{% if app.request.query.get('roles') == "ROLE_DIRECTOR"%} selected="selected" {% endif %}>客服主管</option>*/
/*             <option value="ROLE_SERVICE"{% if app.request.query.get('roles') == "ROLE_SERVICE"%} selected="selected" {% endif %}>客服</option>*/
/*           </select>*/
/*         <button class="btn btn-primary">搜索</button>*/
/*         </form>*/
/*             <div class="box-body table-responsive no-padding">*/
/*               <table class="table table-hover js-table">*/
/*                 <thead >*/
/*                   <tr>*/
/*                   <th>用户名</th>*/
/*                   <th>姓名</th>*/
/*                   <th>编号</th>*/
/*                   <th>当前工作量</th>*/
/*                   <th>最大工作量</th>*/
/*                   <th>邮箱</th>*/
/*                   <th>手机号</th>*/
/*                   <th>权限</th>*/
/*                   <th>操作</th>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody class="list">*/
/*                 {% for user in users %}*/
/*                 <tr  id="{{user.id}}">*/
/*                   <td>{{user.username}}</td>*/
/*                   <td>{{user.name}}</td>*/
/*                   <td>{{user.operatorNo}}</td>*/
/*                   <td>{{user.currentWorkload}}</td>*/
/*                   <td>{{user.maxWorkload}}</td>*/
/*                   <td>{{user.email}}</td>*/
/*                   <td>{{user.phone}}</td>*/
/*                   <td> */
/*                     {% for role in user.roles %}*/
/*                         {{ dict_text('userRoles', role) }}*/
/*                     {% endfor %}*/
/*                   <td>*/
/*                     <button type="button" class="btn btn-sm btn-success js-update-btn" data-toggle="modal" data-id = "{{user.id}}" data-target="#myModal" data-url="{{ path('admin_user_update',{id:user.id}) }}">编辑</button>*/
/*                     <button type="button" class="btn btn-sm btn-success js-delete-btn"  data-url="{{ path('admin_user_delete',{id:user.id})}}" data-id="{{user.id}}">删除</button></td>*/
/*                 </tr>*/
/*                 {% endfor %} */
/*               </tbody></table>*/
/*               {{ admin_macro.paginator(paginator) }}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         </div>*/
/* <div class="modal" id="modal"></div>*/
/* <script type="text/javascript" src="{{asset('assets/js/admin/list/list.js')}}"></script>*/
/* */
/*     */
