<?php

/* AdminBundle:Category:category-wrapper.html.twig */
class __TwigTemplate_a046793b445b3a9c451c3e709f5e4d2892573245ae178c90b283ab1339887343 extends Twig_Template
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
        $__internal_bb2db92e4dbe0db4546cad6d6e9498354a842ce5f6f93d8883afb77885fc6fac = $this->env->getExtension("native_profiler");
        $__internal_bb2db92e4dbe0db4546cad6d6e9498354a842ce5f6f93d8883afb77885fc6fac->enter($__internal_bb2db92e4dbe0db4546cad6d6e9498354a842ce5f6f93d8883afb77885fc6fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Category:category-wrapper.html.twig"));

        // line 1
        echo "<div style=\"min-height: 916px;\" class=\"content-wrapper\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
      <div class=\"box\" style=\"border-top:0px;border-radius:0px;\">
        <div class=\"box-header\" style=\"margin-bottom:10px;\">
          <h3 class=\"box-title\">问题类型</h3>
          <div class=\"box-tools\">
            <div class=\"input-group input-group-sm\" style=\"width: 90px;\">
              <span><button type=\"button\" class=\"btn btn-success js-add-btn\" data-toggle=\"modal\" data-target=\"#myModal\" data-url=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_category_create");
        echo "\">添加类型</button></span>
            </div>
          </div>
        </div>
        <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_category_list");
        echo "\" method=\"get\" novalidate=\"\" style=\"border-radius:0px;\">
          <div class=\"form-group\">
            <input name=\"id\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "id"), "method"), "html", null, true);
        echo "\" placeholder=\"编号\" type=\"text\">
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-10\">
              <select name=\"priority\" class=\"form-control\" >
                <option value=\"\">--优先级--</option>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["otherCategorys"]) ? $context["otherCategorys"] : $this->getContext($context, "otherCategorys")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "priority", array()), "html", null, true);
            echo "\"";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "priority"), "method") == $this->getAttribute($context["category"], "priority", array()))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo $this->env->getExtension('web_twig')->getDictText("ticketPriority:html", $this->getAttribute($context["category"], "priority", array()));
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <input name=\"name\" class=\"form-control\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "name"), "method"), "html", null, true);
        echo "\" placeholder=\"类型名\" type=\"text\">
          </div>
          <div class=\"form-group\">
            <input name=\"delayedTime\" class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "delayedTime"), "method"), "html", null, true);
        echo "\" placeholder=\"滞留时间\" type=\"text\">
          </div>
          <button class=\"btn btn-primary\">搜索</button>
        </form>

        <div class=\"box-body table-responsive no-padding\">
          <table id=\"assignedTable\" class=\"table table-hover js-table\">
            <thead >
              <tr>
                <th>编号</th>
                <th>优先级</th>
                <th>类型名</th>
                <th>滞留时间</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody class=\"list\">
              ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorys"]) ? $context["categorys"] : $this->getContext($context, "categorys")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 49
            echo "              <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo $this->env->getExtension('web_twig')->getDictText("ticketPriority:html", $this->getAttribute($context["category"], "priority", array()));
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "delayedTime", array()), "html", null, true);
            echo "</td>
                <td>
                  <button type=\"button\" class=\"btn btn-sm btn-success js-update-btn\" data-toggle=\"modal\" data-id = \"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\" data-target=\"#myModal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_update", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">编辑</button>
                  <button type=\"button\" class=\"btn btn-sm btn-success js-delete-btn\"  data-url=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_delete", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">删除</button>
                </td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </tbody>
          </table>
          ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"modal\" id=\"modal\"></div>
<script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/admin/category/category.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_bb2db92e4dbe0db4546cad6d6e9498354a842ce5f6f93d8883afb77885fc6fac->leave($__internal_bb2db92e4dbe0db4546cad6d6e9498354a842ce5f6f93d8883afb77885fc6fac_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Category:category-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 69,  152 => 62,  148 => 60,  136 => 56,  130 => 55,  125 => 53,  121 => 52,  117 => 51,  113 => 50,  108 => 49,  104 => 48,  84 => 31,  78 => 28,  72 => 24,  57 => 22,  53 => 21,  44 => 15,  39 => 13,  32 => 9,  22 => 1,);
    }
}
/* <div style="min-height: 916px;" class="content-wrapper">*/
/*   <div class="row">*/
/*     <div class="col-xs-12">*/
/*       <div class="box" style="border-top:0px;border-radius:0px;">*/
/*         <div class="box-header" style="margin-bottom:10px;">*/
/*           <h3 class="box-title">问题类型</h3>*/
/*           <div class="box-tools">*/
/*             <div class="input-group input-group-sm" style="width: 90px;">*/
/*               <span><button type="button" class="btn btn-success js-add-btn" data-toggle="modal" data-target="#myModal" data-url="{{ path('admin_category_create') }}">添加类型</button></span>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <form id="user-search-form" class="form-inline well well-sm" action="{{path('admin_category_list')}}" method="get" novalidate="" style="border-radius:0px;">*/
/*           <div class="form-group">*/
/*             <input name="id" class="form-control" value="{{app.request.query.get('id')}}" placeholder="编号" type="text">*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <div class="col-sm-10">*/
/*               <select name="priority" class="form-control" >*/
/*                 <option value="">--优先级--</option>*/
/*                 {% for category in otherCategorys %}*/
/*                 <option value="{{category.priority}}"{% if app.request.query.get('priority') ==  category.priority %} selected="selected" {% endif %}>{{ dict_text('ticketPriority:html', category.priority) }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <input name="name" class="form-control" value="{{app.request.query.get('name')}}" placeholder="类型名" type="text">*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <input name="delayedTime" class="form-control" value="{{app.request.query.get('delayedTime')}}" placeholder="滞留时间" type="text">*/
/*           </div>*/
/*           <button class="btn btn-primary">搜索</button>*/
/*         </form>*/
/* */
/*         <div class="box-body table-responsive no-padding">*/
/*           <table id="assignedTable" class="table table-hover js-table">*/
/*             <thead >*/
/*               <tr>*/
/*                 <th>编号</th>*/
/*                 <th>优先级</th>*/
/*                 <th>类型名</th>*/
/*                 <th>滞留时间</th>*/
/*                 <th>操作</th>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody class="list">*/
/*               {% for category in categorys %}*/
/*               <tr id="{{category.id}}">*/
/*                 <td>{{ category.id }}</td>*/
/*                 <td>{{ dict_text('ticketPriority:html', category.priority) }}</td>*/
/*                 <td>{{ category.name }}</td>*/
/*                 <td>{{ category.delayedTime }}</td>*/
/*                 <td>*/
/*                   <button type="button" class="btn btn-sm btn-success js-update-btn" data-toggle="modal" data-id = "{{category.id}}" data-target="#myModal" data-url="{{ path('admin_category_update',{id:category.id}) }}">编辑</button>*/
/*                   <button type="button" class="btn btn-sm btn-success js-delete-btn"  data-url="{{ path('admin_category_delete', {id:category.id})}}" data-id="{{category.id}}">删除</button>*/
/*                 </td>*/
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
/* <div class="modal" id="modal"></div>*/
/* <script type="text/javascript" src="{{asset('assets/js/admin/category/category.js')}}"></script>*/
