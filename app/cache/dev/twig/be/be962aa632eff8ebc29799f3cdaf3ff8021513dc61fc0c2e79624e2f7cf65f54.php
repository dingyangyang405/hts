<?php

/* WebBundle:Login:login-body.html.twig */
class __TwigTemplate_c9176e8669d41b8557dcfdcbdd241394f2b6b3749f54401e206497a65bc99b5b extends Twig_Template
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
        $__internal_9c1234648a971715f28bf41de51d89152a9ccacd6747eded3fd02ec1e4a98db3 = $this->env->getExtension("native_profiler");
        $__internal_9c1234648a971715f28bf41de51d89152a9ccacd6747eded3fd02ec1e4a98db3->enter($__internal_9c1234648a971715f28bf41de51d89152a9ccacd6747eded3fd02ec1e4a98db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Login:login-body.html.twig"));

        // line 1
        echo "<div class=\"login-box\">
  <div class=\"login-logo\">
    <a href=\"../../index2.html\"><b>HERMES</b>TICKET</a>
  </div>
  <!-- /.login-logo -->
  <div class=\"login-box-body\" style=\"box-shadow:21px 21px 21px #e5e5e5;\"> 
    <p class=\"login-box-msg\"></p>

    <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
      <div class=\"form-group has-feedback\">
        <label>用户名:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
        <span class=\"fa fa-fw fa-user form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <label>密码:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\">
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
          <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">登录</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
</div>";
        
        $__internal_9c1234648a971715f28bf41de51d89152a9ccacd6747eded3fd02ec1e4a98db3->leave($__internal_9c1234648a971715f28bf41de51d89152a9ccacd6747eded3fd02ec1e4a98db3_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Login:login-body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 29,  38 => 12,  32 => 9,  22 => 1,);
    }
}
/* <div class="login-box">*/
/*   <div class="login-logo">*/
/*     <a href="../../index2.html"><b>HERMES</b>TICKET</a>*/
/*   </div>*/
/*   <!-- /.login-logo -->*/
/*   <div class="login-box-body" style="box-shadow:21px 21px 21px #e5e5e5;"> */
/*     <p class="login-box-msg"></p>*/
/* */
/*     <form action="{{ path('login_check') }}" method="post">*/
/*       <div class="form-group has-feedback">*/
/*         <label>用户名:</label>*/
/*         <input type="text" id="username" name="_username" class="form-control" value="{{last_username}}">*/
/*         <span class="fa fa-fw fa-user form-control-feedback"></span>*/
/*       </div>*/
/*       <div class="form-group has-feedback">*/
/*         <label>密码:</label>*/
/*         <input type="password" id="password" name="_password" class="form-control">*/
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
/*           <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>*/
/*         </div>*/
/*         <!-- /.col -->*/
/*       </div>*/
/*     </form>*/
/*     <!-- /.social-auth-links -->*/
/*   </div>*/
/*   <!-- /.login-box-body -->*/
/* </div>*/
