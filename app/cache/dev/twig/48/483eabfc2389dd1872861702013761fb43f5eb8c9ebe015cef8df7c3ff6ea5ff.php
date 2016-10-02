<?php

/* WebBundle:TimeLine:operator-timeline-footer.html.twig */
class __TwigTemplate_e9a0ce46858980e637f2ad75a8f0251b688fcedef7c0a68a9aeb916d676d6c08 extends Twig_Template
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
        $__internal_433c71bf09cd19f42f40a4a1c9f10d5593397d091b538d4cae906de22b49d386 = $this->env->getExtension("native_profiler");
        $__internal_433c71bf09cd19f42f40a4a1c9f10d5593397d091b538d4cae906de22b49d386->enter($__internal_433c71bf09cd19f42f40a4a1c9f10d5593397d091b538d4cae906de22b49d386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:TimeLine:operator-timeline-footer.html.twig"));

        // line 1
        echo "<div class=\"timeline-footer\">
    <div class=\"box box-default collapsed-box\">
          ";
        // line 3
        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) != "closed")) {
            // line 4
            echo "            <a class=\"btn btn-primary btn-xs\" data-widget=\"collapse\">回复</a>
          ";
        }
        // line 6
        echo "      <div class=\"box-body\" style=\"display: block;\">
        <div class=\"box box-primary\">
            <form id=\"operator-detail\" method=\"POST\">
              <div class=\"box-body\">
                <div class=\"form-group\">
                  <textarea class=\"form-control\" rows=\"3\" name=\"about\"></textarea>
                  <input type=\"text\" class=\"hidden\" name=\"ticketId\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()), "html", null, true);
        echo "\">
                  <input type=\"text\" class=\"hidden\" name=\"role\" value=\"service\">
                </div>
                <div class=\"form-group img-inputs\">
                </div>
                <div class=\"form-group\">
                  <div id=\"upload\"></div>
                  <p class=\"help-block\">可上传5张图片每个附件大小不得超过2M。附件支持的格式有：'jpg', 'bmp', 'png', 'gif','txt','rar','zip','doc','docx','ini','conf','eml'</p>
                </div>
              </div>
              ";
        // line 22
        echo $this->env->getExtension('app_helper')->rendorFormCsrfToken();
        echo "
              <div class=\"box-footer\">
                <button id=\"operator-reply\" data-url=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_ticket_reply", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">提交</button>
              </div>
            </form>
          </div>
      </div>
    </div>
</div>";
        
        $__internal_433c71bf09cd19f42f40a4a1c9f10d5593397d091b538d4cae906de22b49d386->leave($__internal_433c71bf09cd19f42f40a4a1c9f10d5593397d091b538d4cae906de22b49d386_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:TimeLine:operator-timeline-footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 24,  53 => 22,  40 => 12,  32 => 6,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="timeline-footer">*/
/*     <div class="box box-default collapsed-box">*/
/*           {% if ticket.status != 'closed' %}*/
/*             <a class="btn btn-primary btn-xs" data-widget="collapse">回复</a>*/
/*           {% endif %}*/
/*       <div class="box-body" style="display: block;">*/
/*         <div class="box box-primary">*/
/*             <form id="operator-detail" method="POST">*/
/*               <div class="box-body">*/
/*                 <div class="form-group">*/
/*                   <textarea class="form-control" rows="3" name="about"></textarea>*/
/*                   <input type="text" class="hidden" name="ticketId" value="{{ ticket.id }}">*/
/*                   <input type="text" class="hidden" name="role" value="service">*/
/*                 </div>*/
/*                 <div class="form-group img-inputs">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <div id="upload"></div>*/
/*                   <p class="help-block">可上传5张图片每个附件大小不得超过2M。附件支持的格式有：'jpg', 'bmp', 'png', 'gif','txt','rar','zip','doc','docx','ini','conf','eml'</p>*/
/*                 </div>*/
/*               </div>*/
/*               {{ form_csrf_token() }}*/
/*               <div class="box-footer">*/
/*                 <button id="operator-reply" data-url="{{ path('operator_ticket_reply', {id:ticket.id}) }}" class="btn btn-primary">提交</button>*/
/*               </div>*/
/*             </form>*/
/*           </div>*/
/*       </div>*/
/*     </div>*/
/* </div>*/
