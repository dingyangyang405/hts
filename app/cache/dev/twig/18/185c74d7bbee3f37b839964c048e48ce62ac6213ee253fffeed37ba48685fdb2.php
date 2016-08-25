<?php

/* WebBundle:Register:register-body.html.twig */
class __TwigTemplate_4874ed36c2f2da009564b86c92ad19bb61b24fe4671e83241c34aade1c557492 extends Twig_Template
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
        $__internal_c348c481735a7ae04337d4bc50036a529d98e389cd19b0f297545cb84b9ba339 = $this->env->getExtension("native_profiler");
        $__internal_c348c481735a7ae04337d4bc50036a529d98e389cd19b0f297545cb84b9ba339->enter($__internal_c348c481735a7ae04337d4bc50036a529d98e389cd19b0f297545cb84b9ba339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Register:register-body.html.twig"));

        // line 1
        echo "<div class=\"login-box\">
  <div class=\"login-logo\">
        <b>HERMES</b>TICKET
  </div>
  <!-- /.login-logo -->
  <div class=\"login-box-body\" style=\"box-shadow:21px 21px 21px #e5e5e5;\"> 
    <p class=\"login-box-msg\"></p>

    <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\" method=\"post\">
      <div class=\"form-group has-feedback\">
        <label>用户名:</label>
        <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" value=\"\">
        <span class=\"fa fa-fw fa-user form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <label>密码:</label>
        <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\">
        <span class=\"fa fa-fw fa-unlock-alt form-control-feedback\"></span>
      </div>
      <div class=\"row\">
        <div class=\"col-xs-8\">
          <div class=\"checkbox icheck col-xs-8\">
            <label>
              <input type=\"checkbox\">记住密码
            </label>
          </div>
        </div>
        <!-- /.col -->
        ";
        // line 29
        echo $this->env->getExtension('app_helper')->rendorFormCsrfToken();
        echo "
        <div class=\"col-xs-4\">
          <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">注册</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
</div>";
        
        $__internal_c348c481735a7ae04337d4bc50036a529d98e389cd19b0f297545cb84b9ba339->leave($__internal_c348c481735a7ae04337d4bc50036a529d98e389cd19b0f297545cb84b9ba339_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Register:register-body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 29,  32 => 9,  22 => 1,);
    }
}
/* <div class="login-box">*/
/*   <div class="login-logo">*/
/*         <b>HERMES</b>TICKET*/
/*   </div>*/
/*   <!-- /.login-logo -->*/
/*   <div class="login-box-body" style="box-shadow:21px 21px 21px #e5e5e5;"> */
/*     <p class="login-box-msg"></p>*/
/* */
/*     <form action="{{ path('register') }}" method="post">*/
/*       <div class="form-group has-feedback">*/
/*         <label>用户名:</label>*/
/*         <input type="text" id="username" name="username" class="form-control" value="">*/
/*         <span class="fa fa-fw fa-user form-control-feedback"></span>*/
/*       </div>*/
/*       <div class="form-group has-feedback">*/
/*         <label>密码:</label>*/
/*         <input type="password" id="password" name="password" class="form-control">*/
/*         <span class="fa fa-fw fa-unlock-alt form-control-feedback"></span>*/
/*       </div>*/
/*       <div class="row">*/
/*         <div class="col-xs-8">*/
/*           <div class="checkbox icheck col-xs-8">*/
/*             <label>*/
/*               <input type="checkbox">记住密码*/
/*             </label>*/
/*           </div>*/
/*         </div>*/
/*         <!-- /.col -->*/
/*         {{ form_csrf_token() }}*/
/*         <div class="col-xs-4">*/
/*           <button type="submit" class="btn btn-primary btn-block btn-flat">注册</button>*/
/*         </div>*/
/*         <!-- /.col -->*/
/*       </div>*/
/*     </form>*/
/*     <!-- /.social-auth-links -->*/
/*   </div>*/
/*   <!-- /.login-box-body -->*/
/* </div>*/
