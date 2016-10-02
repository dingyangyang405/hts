<?php

/* AdminBundle:User:index-service-wrapper.html.twig */
class __TwigTemplate_60df1d5fa56236f5e4624b9ecb1cd781727fce467ef080fb13791592d47bbfe8 extends Twig_Template
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
        $__internal_c59e5daff7c3893800a1fc206e12cd2c7d6cb47eb601956c3025054fd8c1b4b6 = $this->env->getExtension("native_profiler");
        $__internal_c59e5daff7c3893800a1fc206e12cd2c7d6cb47eb601956c3025054fd8c1b4b6->enter($__internal_c59e5daff7c3893800a1fc206e12cd2c7d6cb47eb601956c3025054fd8c1b4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:User:index-service-wrapper.html.twig"));

        // line 1
        echo "<div style=\"min-height: 916px;\" class=\"content-wrapper\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <div class=\"box\" style=\"border-top:0px;border-radius:0px;\">
            <div class=\"box-header\" style=\"margin-bottom:10px;\">
              <h3 class=\"box-title\">客服列表</h3>
            </div>
        <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\" method=\"get\" novalidate=\"\" style=\"border-radius:0px;\">

        <div class=\"form-group\">
          <select id=\"keywordType\" name=\"keywordType\" class=\"form-control\">
            <option value=\"\">--关键词类型--</option><option value=\"username\">用户名</option><option value=\"name\">姓名</option>
            <option value=\"operatorNo\">编号</option>
          </select>
        </div>
        <div class=\"form-group\">
          <input id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"\" placeholder=\"关键词\" type=\"text\">
        </div>
          <select id=\"roles\" name=\"roles\" class=\"form-control\">
            <option value=\"\">--权限--</option><option value=\"ROLE_ADMIN\">管理员</option><option value=\"ROLE_DIRECTOR\">客服主管</option>
            <option value=\"ROLE_SERVICE\">客服</option>
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
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 42
            echo "                <tr  id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">
                  <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "operatorNo", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "currentWorkload", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "maxWorkload", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "phone", array()), "html", null, true);
            echo "</td>
                  <td> 
                    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 52
                echo "                        ";
                echo $this->env->getExtension('web_twig')->getDictText("userRoles", $context["role"]);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                  <td>
                    <button type=\"button\" class=\"btn btn-sm btn-success js-update-btn\" data-toggle=\"modal\" data-id = \"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" data-target=\"#myModal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_service_detail", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">查看</button>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "              </tbody></table>
              ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
            </div>
          </div>
        </div>
        </div>
<div class=\"modal\" id=\"modal\"></div>
<script type=\"text/javascript\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/admin/list/list.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_c59e5daff7c3893800a1fc206e12cd2c7d6cb47eb601956c3025054fd8c1b4b6->leave($__internal_c59e5daff7c3893800a1fc206e12cd2c7d6cb47eb601956c3025054fd8c1b4b6_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:User:index-service-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 65,  135 => 59,  132 => 58,  121 => 55,  118 => 54,  109 => 52,  105 => 51,  100 => 49,  96 => 48,  92 => 47,  88 => 46,  84 => 45,  80 => 44,  76 => 43,  71 => 42,  67 => 41,  31 => 8,  22 => 1,);
    }
}
/* <div style="min-height: 916px;" class="content-wrapper">*/
/*       <div class="row">*/
/*         <div class="col-xs-12">*/
/*           <div class="box" style="border-top:0px;border-radius:0px;">*/
/*             <div class="box-header" style="margin-bottom:10px;">*/
/*               <h3 class="box-title">客服列表</h3>*/
/*             </div>*/
/*         <form id="user-search-form" class="form-inline well well-sm" action="{{path('admin_user')}}" method="get" novalidate="" style="border-radius:0px;">*/
/* */
/*         <div class="form-group">*/
/*           <select id="keywordType" name="keywordType" class="form-control">*/
/*             <option value="">--关键词类型--</option><option value="username">用户名</option><option value="name">姓名</option>*/
/*             <option value="operatorNo">编号</option>*/
/*           </select>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <input id="keyword" name="keyword" class="form-control" value="" placeholder="关键词" type="text">*/
/*         </div>*/
/*           <select id="roles" name="roles" class="form-control">*/
/*             <option value="">--权限--</option><option value="ROLE_ADMIN">管理员</option><option value="ROLE_DIRECTOR">客服主管</option>*/
/*             <option value="ROLE_SERVICE">客服</option>*/
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
/*                     <button type="button" class="btn btn-sm btn-success js-update-btn" data-toggle="modal" data-id = "{{user.id}}" data-target="#myModal" data-url="{{ path('admin_service_detail',{id:user.id}) }}">查看</button>*/
/*                 </tr>*/
/*                 {% endfor %}*/
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
