<?php

/* AdminBundle:User:update-model.html.twig */
class __TwigTemplate_75ffdc8f2e7b265724c2eb33c6830552b12c09cb3b3e07a2803a3ece9214a4c9 extends Twig_Template
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
        $__internal_4f653715ed4027ee911eed24a8b2667ef9fcd87a0d6c8b1ad11182f2f133e516 = $this->env->getExtension("native_profiler");
        $__internal_4f653715ed4027ee911eed24a8b2667ef9fcd87a0d6c8b1ad11182f2f133e516->enter($__internal_4f653715ed4027ee911eed24a8b2667ef9fcd87a0d6c8b1ad11182f2f133e516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:User:update-model.html.twig"));

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
              编辑信息
            </h4>
          </div>
          <div class=\"modal-body\">
            <form  class=\"form-horizontal\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_update", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" accept-charset=\"utf-8\" id=\"updateForm\">

              <input type=\"text\" style=\"visibility:hidden\" name=\"id\" value=";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "><br/>

              <div class=\"form-group\">
                <label for=\"username\" class=\"col-sm-2 control-label\" >用户名</label>
                <div class=\"col-sm-10\">
                  <input name=\"username\" type=\"text\" readonly=\"readonly\" class=\"form-control\" id=\"username\" 
                  value=";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo ">
                </div>
              </div>

              <div class=\"form-group\">
                <label for=\"name\" class=\"col-sm-2 control-label\">姓名</label>
                <div class=\"col-sm-10\">
                  <input name=\"name\" type=\"text\" class=\"form-control\" id=\"name\" 
                 value=";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo ">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"operatorNo\" class=\"col-sm-2 control-label\">编号</label>
                <div class=\"col-sm-10\">
                  <input name=\"operatorNo\" type=\"text\" readonly=\"readonly\" class=\"form-control\" id=\"operatorNo\" 
                  value=";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "operatorNo", array()), "html", null, true);
        echo ">
                </div>
              </div>

              <div class=\"form-group\">
                <label for=\"currentWorkload\" class=\"col-sm-2 control-label\">当前工作量</label>
                <div class=\"col-sm-10\">
                  <input name=\"currentWorkload\" type=\"text\" readonly=\"readonly\" class=\"form-control\" id=\"currentWorkload\" 
                  value=";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "currentWorkload", array()), "html", null, true);
        echo ">
                </div>
              </div>

              <div class=\"form-group\">
                <label for=\"maxWorkload\" class=\"col-sm-2 control-label\">最大工作量</label>
                <div class=\"col-sm-10\">
                  <input name=\"maxWorkload\" type=\"text\" class=\"form-control\" id=\"maxWorkload\" 
                  value=";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "maxWorkload", array()), "html", null, true);
        echo ">
                </div>
              </div>

              <div class=\"form-group\">
                <label for=\"email\" class=\"col-sm-2 control-label\">邮箱</label>
                <div class=\"col-sm-10\">
                  <input name=\"email\" type=\"text\" class=\"form-control\" id=\"email\" 
                  value=";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo ">
                </div>
              </div>

               <div class=\"form-group\">
                <label for=\"phone\" class=\"col-sm-2 control-label\">手机</label>
                <div class=\"col-sm-10\">
                  <input name=\"phone\" type=\"text\" class=\"form-control\" id=\"phone\" 
                  value=";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone", array()), "html", null, true);
        echo ">
                </div>
              </div>

              <div class=\"form-group\">
                <label for=\"roles\" class=\"col-sm-2 control-label\">权限</label>
                <div class=\"col-sm-10\">

                  <label class=\"checkbox-inline\">
                    <input type=\"checkbox\" name=\"roles[]\" id=\"roles\" 
                    value=\"ROLE_USER\"
                  ";
        // line 82
        if (twig_in_filter("ROLE_USER", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()))) {
            echo " checked='checked'";
        }
        echo "> 用户
                  </label>
                  <label class=\"checkbox-inline\">
                    <input type=\"checkbox\" name=\"roles[]\" id=\"roles\" 
                    value=\"ROLE_SERVICE\"
                  ";
        // line 87
        if (twig_in_filter("ROLE_SERVICE", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()))) {
            echo " checked='checked'";
        }
        echo "> 客服
                  </label>
                  <label class=\"checkbox-inline\">
                    <input type=\"checkbox\" name=\"roles[]\" id=\"roles\" 
                    value=\"ROLE_DIRECTOR\"
                    ";
        // line 92
        if (twig_in_filter("ROLE_DIRECTOR", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()))) {
            // line 93
            echo "                      checked='checked'
                    ";
        }
        // line 94
        echo "> 客服主管
                  </label>
                  <label class=\"checkbox-inline\">
                    <input type=\"checkbox\" name=\"roles[]\" id=\"roles\" 
                    value=\"ROLE_ADMIN\"
                     ";
        // line 99
        if (twig_in_filter("ROLE_ADMIN", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()))) {
            echo " checked='checked' ";
        }
        echo "> 管理员
                  </label>

                </div>
              </div>            
          </div>
          ";
        // line 105
        echo $this->env->getExtension('app_helper')->rendorFormCsrfToken();
        echo "
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" 
            data-dismiss=\"modal\">取消
            </button>
            <button id=\"update\" data-id=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary\">
            保存
            </button>
          </div>
          </form>
        </div><!-- /.modal-content -->
      </div>
    </div>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/admin/list/update.js"), "html", null, true);
        echo "\"></script>
    <!-- /.modal -->";
        
        $__internal_4f653715ed4027ee911eed24a8b2667ef9fcd87a0d6c8b1ad11182f2f133e516->leave($__internal_4f653715ed4027ee911eed24a8b2667ef9fcd87a0d6c8b1ad11182f2f133e516_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:User:update-model.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 118,  184 => 110,  176 => 105,  165 => 99,  158 => 94,  154 => 93,  152 => 92,  142 => 87,  132 => 82,  118 => 71,  107 => 63,  96 => 55,  85 => 47,  74 => 39,  64 => 32,  53 => 24,  44 => 18,  39 => 16,  22 => 1,);
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
/*               编辑信息*/
/*             </h4>*/
/*           </div>*/
/*           <div class="modal-body">*/
/*             <form  class="form-horizontal" action="{{ path('admin_user_update',{id:user.id}) }}" method="post" accept-charset="utf-8" id="updateForm">*/
/* */
/*               <input type="text" style="visibility:hidden" name="id" value={{user.id}}><br/>*/
/* */
/*               <div class="form-group">*/
/*                 <label for="username" class="col-sm-2 control-label" >用户名</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input name="username" type="text" readonly="readonly" class="form-control" id="username" */
/*                   value={{user.username}}>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label for="name" class="col-sm-2 control-label">姓名</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input name="name" type="text" class="form-control" id="name" */
/*                  value={{user.name}}>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label for="operatorNo" class="col-sm-2 control-label">编号</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input name="operatorNo" type="text" readonly="readonly" class="form-control" id="operatorNo" */
/*                   value={{user.operatorNo}}>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label for="currentWorkload" class="col-sm-2 control-label">当前工作量</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input name="currentWorkload" type="text" readonly="readonly" class="form-control" id="currentWorkload" */
/*                   value={{user.currentWorkload}}>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label for="maxWorkload" class="col-sm-2 control-label">最大工作量</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input name="maxWorkload" type="text" class="form-control" id="maxWorkload" */
/*                   value={{user.maxWorkload}}>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label for="email" class="col-sm-2 control-label">邮箱</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input name="email" type="text" class="form-control" id="email" */
/*                   value={{user.email}}>*/
/*                 </div>*/
/*               </div>*/
/* */
/*                <div class="form-group">*/
/*                 <label for="phone" class="col-sm-2 control-label">手机</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input name="phone" type="text" class="form-control" id="phone" */
/*                   value={{user.phone}}>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label for="roles" class="col-sm-2 control-label">权限</label>*/
/*                 <div class="col-sm-10">*/
/* */
/*                   <label class="checkbox-inline">*/
/*                     <input type="checkbox" name="roles[]" id="roles" */
/*                     value="ROLE_USER"*/
/*                   {% if "ROLE_USER" in user.roles %} checked='checked'{% endif %}> 用户*/
/*                   </label>*/
/*                   <label class="checkbox-inline">*/
/*                     <input type="checkbox" name="roles[]" id="roles" */
/*                     value="ROLE_SERVICE"*/
/*                   {% if "ROLE_SERVICE" in user.roles %} checked='checked'{% endif %}> 客服*/
/*                   </label>*/
/*                   <label class="checkbox-inline">*/
/*                     <input type="checkbox" name="roles[]" id="roles" */
/*                     value="ROLE_DIRECTOR"*/
/*                     {% if "ROLE_DIRECTOR" in user.roles %}*/
/*                       checked='checked'*/
/*                     {% endif %}> 客服主管*/
/*                   </label>*/
/*                   <label class="checkbox-inline">*/
/*                     <input type="checkbox" name="roles[]" id="roles" */
/*                     value="ROLE_ADMIN"*/
/*                      {% if "ROLE_ADMIN" in user.roles %} checked='checked' {% endif %}> 管理员*/
/*                   </label>*/
/* */
/*                 </div>*/
/*               </div>            */
/*           </div>*/
/*           {{ form_csrf_token() }}*/
/*           <div class="modal-footer">*/
/*             <button type="button" class="btn btn-default" */
/*             data-dismiss="modal">取消*/
/*             </button>*/
/*             <button id="update" data-id="{{user.id}}" type="button" class="btn btn-primary">*/
/*             保存*/
/*             </button>*/
/*           </div>*/
/*           </form>*/
/*         </div><!-- /.modal-content -->*/
/*       </div>*/
/*     </div>*/
/* <script src="{{ asset('assets/js/admin/list/update.js') }}"></script>*/
/*     <!-- /.modal -->*/
