<?php

/* AdminBundle:User:index-service-detail.html.twig */
class __TwigTemplate_74458289e4deae7e4200595ce984b1f487007890caccb6cc268cbad7b6a057da extends Twig_Template
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
        $__internal_1630c22d4783975c92909bbae87b4565cc41dca31f2a54211a65c125e254837c = $this->env->getExtension("native_profiler");
        $__internal_1630c22d4783975c92909bbae87b4565cc41dca31f2a54211a65c125e254837c->enter($__internal_1630c22d4783975c92909bbae87b4565cc41dca31f2a54211a65c125e254837c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:User:index-service-detail.html.twig"));

        // line 1
        echo "    <!-- 模态框（Modal） -->
    <div tabindex=\"-1\" role=\"dialog\" 
      aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" 
              data-dismiss=\"modal\" aria-hidden=\"true\">
              &times;
            </button>
            <h4 class=\"modal-title\" id=\"myModalLabel\">
              客户详情
            </h4>
          </div>
          <div class=\"modal-body\">
            <table class=\"table table-striped table-condenseda table-bordered\">
              <tr>
                <th>用户名</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                <th>姓名</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                <th>编号</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "operatorNo", array()), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                <th>当前工作量</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "currentWorkload", array()), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                <th>最大工作量</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "maxWorkload", array()), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                <th>邮箱</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                <th>手机</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone", array()), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                <th>用户组</th>
                <td>
                  ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 49
            echo "                      ";
            echo $this->env->getExtension('web_twig')->getDictText("userRoles", $context["role"]);
            echo "
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </td>
              </tr>
            </table>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" 
            data-dismiss=\"modal\">关闭
            </button>
          </div>
        </div><!-- /.modal-content -->
      </div>
    </div>
<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/admin/list/update.js"), "html", null, true);
        echo "\"></script>
    <!-- /.modal -->";
        
        $__internal_1630c22d4783975c92909bbae87b4565cc41dca31f2a54211a65c125e254837c->leave($__internal_1630c22d4783975c92909bbae87b4565cc41dca31f2a54211a65c125e254837c_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:User:index-service-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 62,  105 => 51,  96 => 49,  92 => 48,  84 => 43,  77 => 39,  70 => 35,  63 => 31,  56 => 27,  49 => 23,  42 => 19,  22 => 1,);
    }
}
/*     <!-- 模态框（Modal） -->*/
/*     <div tabindex="-1" role="dialog" */
/*       aria-labelledby="myModalLabel" aria-hidden="true">*/
/*       <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*           <div class="modal-header">*/
/*             <button type="button" class="close" */
/*               data-dismiss="modal" aria-hidden="true">*/
/*               &times;*/
/*             </button>*/
/*             <h4 class="modal-title" id="myModalLabel">*/
/*               客户详情*/
/*             </h4>*/
/*           </div>*/
/*           <div class="modal-body">*/
/*             <table class="table table-striped table-condenseda table-bordered">*/
/*               <tr>*/
/*                 <th>用户名</th>*/
/*                 <td>{{user.username}}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <th>姓名</th>*/
/*                 <td>{{ user.name }}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <th>编号</th>*/
/*                 <td>{{ user.operatorNo }}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <th>当前工作量</th>*/
/*                 <td>{{user.currentWorkload}}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <th>最大工作量</th>*/
/*                 <td>{{user.maxWorkload}}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <th>邮箱</th>*/
/*                 <td>{{user.email}}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <th>手机</th>*/
/*                 <td>{{user.phone}}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <th>用户组</th>*/
/*                 <td>*/
/*                   {% for role in user.roles %}*/
/*                       {{ dict_text('userRoles', role) }}*/
/*                   {% endfor %}*/
/*                 </td>*/
/*               </tr>*/
/*             </table>*/
/*           <div class="modal-footer">*/
/*             <button type="button" class="btn btn-default" */
/*             data-dismiss="modal">关闭*/
/*             </button>*/
/*           </div>*/
/*         </div><!-- /.modal-content -->*/
/*       </div>*/
/*     </div>*/
/* <script src="{{ asset('assets/js/admin/list/update.js') }}"></script>*/
/*     <!-- /.modal -->*/
