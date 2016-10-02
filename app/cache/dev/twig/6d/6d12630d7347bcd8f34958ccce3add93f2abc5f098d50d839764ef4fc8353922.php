<?php

/* WebBundle:Ticket:add-ticket-wrapper.html.twig */
class __TwigTemplate_c0c4798863c19c8f89c9dea7ff44f425704c006bad873eb9498fc585f4f16968 extends Twig_Template
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
        $__internal_37643e7977d9012c1f4d239911866c822aadaf4a7e67a230ccc154726c4272c6 = $this->env->getExtension("native_profiler");
        $__internal_37643e7977d9012c1f4d239911866c822aadaf4a7e67a230ccc154726c4272c6->enter($__internal_37643e7977d9012c1f4d239911866c822aadaf4a7e67a230ccc154726c4272c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Ticket:add-ticket-wrapper.html.twig"));

        // line 1
        echo "<div class=\"content-wrapper\" style=\"min-height: 901px;\">
  <div class=\"row\">
        <div class=\"col-xs-12\">
          <div class=\"\">         
            <div class=\"box-header\">
              <h5 style=\"padding-left:8px; display:inline-block; border-left:2px solid rgb(0,166,90);\">提交工单</h5>
              <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_ticket_list", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-xs\" style=\"margin-left:8px;\"><span class=\"fa fa-fw fa-mail-reply\"></span>返回</a>
              <hr>
            </div>
            <div class=\"box-body\">
              <div class=\"\">
                <div class=\"box-header\" style=\" background-color:white;border-left:5px solid rgb(109,119,129); margin-top:-40px;\">
                  <h5>提交工单</h5>
                </div>
                <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("ticket_add", array("userId" => 1));
        echo "\"  method=\"post\" id=\"addticketform\">
                <div class=\"box-body\" style=\" border:1px solid white;border-bottom:0px;\">
                  <div class=\"row\">
                    <div class=\"col-md-12\">
                      <div class=\"col-md-2 \" ><p class=\"pull-right\">问题类别:</p></div>
                      <div class=\"col-md-10\">
                        <select name=\"category\" id=\"\" class=\"form-control\">
                          <option value=\"\">--问题类别--</option>
                          ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorys"]) ? $context["categorys"] : $this->getContext($context, "categorys")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 24
            echo "                          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</option>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                        </select>
                      </div>
                    </div>
                  </div>
                  <div class=\"row\" style=\"margin-top:30px;\">
                    <div class=\"col-md-12\">
                      <div class=\"col-md-2\"><p class=\"pull-right\">标题:</p></div>
                      <div class=\"col-md-10\">
                        <input type=\"text\" name=\"title\" class=\"form-control\">
                      </div>
                    </div>
                  </div>
                  <div class=\"row\" style=\"margin-top:30px;\">
                    <div class=\"col-md-12\">
                      <div class=\"col-md-2\"><p class=\"pull-right\">添加描述:</p></div>
                      <div class=\"col-md-10\">
                        <textarea name=\"about\" class=\"form-control\" name=\"\" id=\"\" cols=\"30\" rows=\"10\"></textarea>
                      </div>
                    </div>
                  </div>
                   <div class=\"row\" style=\"margin-top:30px;\">
                     <div class=\"col-md-2 img-inputs\">
                     </div>
                     <div class=\"col-md-10\">
                      <div class=\"form-group\">
                        <div id=\"upload\"></div>
                        <p class=\"help-block\">可上传5张图片每个附件大小不得超过2M。附件支持的格式有：'jpg', 'bmp', 'png', 'gif','txt','rar','zip','doc','docx','ini','conf','eml'</p>
                      </div>
                     </div>
                  </div>
                  <div class=\"row\" style=\"margin-top:30px;\">
                    <div class=\"col-md-12\">
                      <div class=\"col-md-2\"><p class=\"pull-right\">电子邮箱:</p></div>
                      <div class=\"col-md-10\">
                        <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\">
                      </div>
                    </div>
                  </div>
                  <div class=\"row\" style=\"margin-top:30px;\">
                    <div class=\"col-md-12\">
                      <div class=\"col-md-2\"><p class=\"pull-right\">手机号:</p></div>
                      <div class=\"col-md-10\">
                        <input type=\"text\" class=\"form-control\" id=\"phone\" name=\"phone\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone", array()), "html", null, true);
        echo "\">
                      </div>
                    </div>
                  </div>
                </div>
                ";
        // line 73
        echo $this->env->getExtension('app_helper')->rendorFormCsrfToken();
        echo "
                <div class=\"body-footer\" style=\"margin-top:50px;\">
                  <div class=\"col-md-offset-11\">
                    <button class=\"btn btn-primary\" type=\"submit\">提交</button>
                  </div>
                </div>
                </form>
            </div>
          </div>
        </div>
  </div>
</div>
";
        
        $__internal_37643e7977d9012c1f4d239911866c822aadaf4a7e67a230ccc154726c4272c6->leave($__internal_37643e7977d9012c1f4d239911866c822aadaf4a7e67a230ccc154726c4272c6_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Ticket:add-ticket-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 73,  114 => 68,  103 => 60,  67 => 26,  56 => 24,  52 => 23,  41 => 15,  30 => 7,  22 => 1,);
    }
}
/* <div class="content-wrapper" style="min-height: 901px;">*/
/*   <div class="row">*/
/*         <div class="col-xs-12">*/
/*           <div class="">         */
/*             <div class="box-header">*/
/*               <h5 style="padding-left:8px; display:inline-block; border-left:2px solid rgb(0,166,90);">提交工单</h5>*/
/*               <a href="{{ path('customer_ticket_list',{userId:user.id}) }}" class="btn btn-default btn-xs" style="margin-left:8px;"><span class="fa fa-fw fa-mail-reply"></span>返回</a>*/
/*               <hr>*/
/*             </div>*/
/*             <div class="box-body">*/
/*               <div class="">*/
/*                 <div class="box-header" style=" background-color:white;border-left:5px solid rgb(109,119,129); margin-top:-40px;">*/
/*                   <h5>提交工单</h5>*/
/*                 </div>*/
/*                 <form action="{{ path('ticket_add',{userId:1}) }}"  method="post" id="addticketform">*/
/*                 <div class="box-body" style=" border:1px solid white;border-bottom:0px;">*/
/*                   <div class="row">*/
/*                     <div class="col-md-12">*/
/*                       <div class="col-md-2 " ><p class="pull-right">问题类别:</p></div>*/
/*                       <div class="col-md-10">*/
/*                         <select name="category" id="" class="form-control">*/
/*                           <option value="">--问题类别--</option>*/
/*                           {% for category in categorys %}*/
/*                           <option value="{{ category.id }}">{{ category.name }}</option>*/
/*                           {% endfor %}*/
/*                         </select>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="row" style="margin-top:30px;">*/
/*                     <div class="col-md-12">*/
/*                       <div class="col-md-2"><p class="pull-right">标题:</p></div>*/
/*                       <div class="col-md-10">*/
/*                         <input type="text" name="title" class="form-control">*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="row" style="margin-top:30px;">*/
/*                     <div class="col-md-12">*/
/*                       <div class="col-md-2"><p class="pull-right">添加描述:</p></div>*/
/*                       <div class="col-md-10">*/
/*                         <textarea name="about" class="form-control" name="" id="" cols="30" rows="10"></textarea>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                    <div class="row" style="margin-top:30px;">*/
/*                      <div class="col-md-2 img-inputs">*/
/*                      </div>*/
/*                      <div class="col-md-10">*/
/*                       <div class="form-group">*/
/*                         <div id="upload"></div>*/
/*                         <p class="help-block">可上传5张图片每个附件大小不得超过2M。附件支持的格式有：'jpg', 'bmp', 'png', 'gif','txt','rar','zip','doc','docx','ini','conf','eml'</p>*/
/*                       </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="row" style="margin-top:30px;">*/
/*                     <div class="col-md-12">*/
/*                       <div class="col-md-2"><p class="pull-right">电子邮箱:</p></div>*/
/*                       <div class="col-md-10">*/
/*                         <input type="text" class="form-control" id="email" name="email" value="{{ user.email }}">*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="row" style="margin-top:30px;">*/
/*                     <div class="col-md-12">*/
/*                       <div class="col-md-2"><p class="pull-right">手机号:</p></div>*/
/*                       <div class="col-md-10">*/
/*                         <input type="text" class="form-control" id="phone" name="phone" value="{{ user.phone }}">*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 {{ form_csrf_token() }}*/
/*                 <div class="body-footer" style="margin-top:50px;">*/
/*                   <div class="col-md-offset-11">*/
/*                     <button class="btn btn-primary" type="submit">提交</button>*/
/*                   </div>*/
/*                 </div>*/
/*                 </form>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*   </div>*/
/* </div>*/
/* */
