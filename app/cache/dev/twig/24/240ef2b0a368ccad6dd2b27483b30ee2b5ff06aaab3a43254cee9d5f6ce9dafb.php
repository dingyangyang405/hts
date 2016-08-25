<?php

/* AdminBundle:Faq:faq-wrapper.html.twig */
class __TwigTemplate_53f113fe8e878434d9d21283a8ac8760ab80346224a6c8ed4dccfd50ec8e5a06 extends Twig_Template
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
        $__internal_22b9450ed1dcb1996dc1194497ef97391310a199dbca3368f197317dbf3e661d = $this->env->getExtension("native_profiler");
        $__internal_22b9450ed1dcb1996dc1194497ef97391310a199dbca3368f197317dbf3e661d->enter($__internal_22b9450ed1dcb1996dc1194497ef97391310a199dbca3368f197317dbf3e661d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Faq:faq-wrapper.html.twig"));

        // line 1
        echo "<div style=\"min-height: 916px;\" class=\"content-wrapper\">
<div class=\"row\">
    <div class=\"col-xs-12\">
      <div class=\"box\" style=\"border-top:0px;border-radius:0px;\">
        <div class=\"box-header\" style=\"margin-bottom:10px;\">
          <h3 class=\"box-title\">常见问题模板</h3>
          <div class=\"box-tools\">
            <div class=\"input-group input-group-sm\" style=\"width: 90px;\">
              <a class=\"btn btn-success\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_faq_create");
        echo "\"  ><span>添加模板</span></a>
            </div>
          </div>
        </div>
        <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_faq_list");
        echo "\" method=\"get\" novalidate=\"\" style=\"border-radius:0px;\">
          <div class=\"form-group\">
            <input name=\"id\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "id"), "method"), "html", null, true);
        echo "\" placeholder=\"编号\" type=\"text\">
          </div>
          <div class=\"form-group\">
            <select name=\"category\" class=\"form-control\" >
              <option value=\"\">--问题类型--</option>
              ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorys"]) ? $context["categorys"] : $this->getContext($context, "categorys")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 21
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
        // line 23
        echo "            </select>
          </div>
          <div class=\"form-group\">
            <input name=\"question\" class=\"form-control\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "question"), "method"), "html", null, true);
        echo "\" placeholder=\"问题标题\" type=\"text\">
          </div>
          <button class=\"btn btn-primary\">搜索</button>
        </form>
        <div class=\"box-body table-responsive no-padding\">
          <table id=\"assignedTable\" class=\"table table-hover js-table\">
            <thead >
              <tr>
                <th>编号</th>
                <th>问题类型</th>
                <th>问题标题</th>
                <th>附件</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody class=\"list\">
              ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["faqs"]) ? $context["faqs"] : $this->getContext($context, "faqs")));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 43
            echo "              <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "id", array()), "html", null, true);
            echo "\">
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                ";
            // line 46
            $context["category"] = $this->env->getExtension('data_twig')->getData("Category", array("id" => $this->getAttribute($context["faq"], "category", array())));
            // line 47
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
            echo "
                </td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "question", array()), "html", null, true);
            echo "</td>
                <td> 
                  <ul id=\"attachment-preview-";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "id", array()), "html", null, true);
            echo "\" class=\"attachment-preview\">
                    ";
            // line 52
            if ($this->getAttribute($context["faq"], "attachment1", array())) {
                // line 53
                echo "                      <li><img data-original=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["faq"], "attachment1", array())), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["faq"], "attachment1", array())), "html", null, true);
                echo "\"/></li>
                    ";
            }
            // line 55
            echo "                    ";
            if ($this->getAttribute($context["faq"], "attachment2", array())) {
                // line 56
                echo "                      <li><img data-original=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["faq"], "attachment2", array())), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["faq"], "attachment2", array())), "html", null, true);
                echo "\"/></li>
                    ";
            }
            // line 58
            echo "                    ";
            if ($this->getAttribute($context["faq"], "attachment3", array())) {
                // line 59
                echo "                      <li><img data-original=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["faq"], "attachment3", array())), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["faq"], "attachment3", array())), "html", null, true);
                echo "\"/></li>
                    ";
            }
            // line 61
            echo "                    ";
            if ($this->getAttribute($context["faq"], "attachment4", array())) {
                // line 62
                echo "                      <li><img data-original=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["faq"], "attachment4", array())), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["faq"], "attachment4", array())), "html", null, true);
                echo "\"/></li>
                    ";
            }
            // line 64
            echo "                    ";
            if ($this->getAttribute($context["faq"], "attachment5", array())) {
                // line 65
                echo "                      <li><img data-original=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["faq"], "attachment5", array())), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["faq"], "attachment5", array())), "html", null, true);
                echo "\"/></li>
                    ";
            }
            // line 67
            echo "                  </ul>
                </td>
                <td>
                  <a class=\"btn btn-sm btn-success\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_faq_update", array("id" => $this->getAttribute($context["faq"], "id", array()))), "html", null, true);
            echo "\"><span>编辑</span></a>
                  <button type=\"button\" class=\"btn btn-sm btn-success js-delete-btn\"  data-url=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_faq_delete", array("id" => $this->getAttribute($context["faq"], "id", array()))), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "id", array()), "html", null, true);
            echo "\">删除</button>
                </td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            </tbody>
          </table>
          ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"modal\" id=\"modal\"></div>
<script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/admin/faq/delete.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_22b9450ed1dcb1996dc1194497ef97391310a199dbca3368f197317dbf3e661d->leave($__internal_22b9450ed1dcb1996dc1194497ef97391310a199dbca3368f197317dbf3e661d_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Faq:faq-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 84,  205 => 77,  201 => 75,  189 => 71,  185 => 70,  180 => 67,  172 => 65,  169 => 64,  161 => 62,  158 => 61,  150 => 59,  147 => 58,  139 => 56,  136 => 55,  128 => 53,  126 => 52,  122 => 51,  117 => 49,  111 => 47,  109 => 46,  104 => 44,  99 => 43,  95 => 42,  76 => 26,  71 => 23,  56 => 21,  52 => 20,  44 => 15,  39 => 13,  32 => 9,  22 => 1,);
    }
}
/* <div style="min-height: 916px;" class="content-wrapper">*/
/* <div class="row">*/
/*     <div class="col-xs-12">*/
/*       <div class="box" style="border-top:0px;border-radius:0px;">*/
/*         <div class="box-header" style="margin-bottom:10px;">*/
/*           <h3 class="box-title">常见问题模板</h3>*/
/*           <div class="box-tools">*/
/*             <div class="input-group input-group-sm" style="width: 90px;">*/
/*               <a class="btn btn-success" href="{{ path('admin_faq_create') }}"  ><span>添加模板</span></a>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <form id="user-search-form" class="form-inline well well-sm" action="{{path('admin_faq_list')}}" method="get" novalidate="" style="border-radius:0px;">*/
/*           <div class="form-group">*/
/*             <input name="id" class="form-control" value="{{app.request.query.get('id')}}" placeholder="编号" type="text">*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <select name="category" class="form-control" >*/
/*               <option value="">--问题类型--</option>*/
/*               {% for category in categorys %}*/
/*               <option value="{{ category.id }}"{% if app.request.query.get('category') ==  category.id %} selected="selected" {% endif %}>{{ category.name }}</option>*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <input name="question" class="form-control" value="{{app.request.query.get('question')}}" placeholder="问题标题" type="text">*/
/*           </div>*/
/*           <button class="btn btn-primary">搜索</button>*/
/*         </form>*/
/*         <div class="box-body table-responsive no-padding">*/
/*           <table id="assignedTable" class="table table-hover js-table">*/
/*             <thead >*/
/*               <tr>*/
/*                 <th>编号</th>*/
/*                 <th>问题类型</th>*/
/*                 <th>问题标题</th>*/
/*                 <th>附件</th>*/
/*                 <th>操作</th>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody class="list">*/
/*               {% for faq in faqs %}*/
/*               <tr id="{{faq.id}}">*/
/*                 <td>{{ faq.id }}</td>*/
/*                 <td>*/
/*                 {% set category = data('Category', {id:faq.category}) %}*/
/*                 {{ category.name }}*/
/*                 </td>*/
/*                 <td>{{ faq.question }}</td>*/
/*                 <td> */
/*                   <ul id="attachment-preview-{{faq.id}}" class="attachment-preview">*/
/*                     {% if faq.attachment1 %}*/
/*                       <li><img data-original="{{ asset(faq.attachment1) }}" src="{{ asset(faq.attachment1) }}"/></li>*/
/*                     {% endif %}*/
/*                     {% if faq.attachment2 %}*/
/*                       <li><img data-original="{{ asset(faq.attachment2) }}" src="{{ asset(faq.attachment2) }}"/></li>*/
/*                     {% endif %}*/
/*                     {% if faq.attachment3 %}*/
/*                       <li><img data-original="{{ asset(faq.attachment3) }}" src="{{ asset(faq.attachment3) }}"/></li>*/
/*                     {% endif %}*/
/*                     {% if faq.attachment4 %}*/
/*                       <li><img data-original="{{ asset(faq.attachment4) }}" src="{{ asset(faq.attachment4) }}"/></li>*/
/*                     {% endif %}*/
/*                     {% if faq.attachment5 %}*/
/*                       <li><img data-original="{{ asset(faq.attachment5) }}" src="{{ asset(faq.attachment5) }}"/></li>*/
/*                     {% endif %}*/
/*                   </ul>*/
/*                 </td>*/
/*                 <td>*/
/*                   <a class="btn btn-sm btn-success" href="{{ path('admin_faq_update', {id:faq.id}) }}"><span>编辑</span></a>*/
/*                   <button type="button" class="btn btn-sm btn-success js-delete-btn"  data-url="{{ path('admin_faq_delete', {id:faq.id})}}" data-id="{{faq.id}}">删除</button>*/
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
/* <script type="text/javascript" src="{{asset('assets/js/admin/faq/delete.js')}}"></script>*/
