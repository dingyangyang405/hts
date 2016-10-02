<?php

/* WebBundle:TimeLine:customer-timeline-footer.html.twig */
class __TwigTemplate_77a9fbae921d315d260a513892c4cdf3054d22335361f4cf38b6e8152a2b93c0 extends Twig_Template
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
        $__internal_7fb990b024bd2094803f0c0c476255cabcf2441abcab581cee638ba970004356 = $this->env->getExtension("native_profiler");
        $__internal_7fb990b024bd2094803f0c0c476255cabcf2441abcab581cee638ba970004356->enter($__internal_7fb990b024bd2094803f0c0c476255cabcf2441abcab581cee638ba970004356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:TimeLine:customer-timeline-footer.html.twig"));

        // line 1
        echo "<div class=\"timeline-footer\">
    <div class=\"box box-default collapsed-box\">
          ";
        // line 3
        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) == "waiting")) {
            // line 4
            echo "            ";
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "reminder", array()) == false)) {
                // line 5
                echo "              <span class=\"btn btn-warning btn-xs ticket-urge\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_ticket_urge", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
                echo "\">催单</span>
            ";
            }
            // line 7
            echo "            <span class=\"btn btn-primary btn-xs\" data-widget=\"collapse\">补充说明</span>
          ";
        } elseif (($this->getAttribute(        // line 8
(isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) == "processing")) {
            // line 9
            echo "            ";
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "reminder", array()) == false)) {
                // line 10
                echo "              <span class=\"btn btn-warning btn-xs ticket-urge\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_ticket_urge", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
                echo "\">催单</span>
            ";
            }
            // line 12
            echo "            <span class=\"btn btn-primary btn-xs\" data-widget=\"collapse\">补充说明</span>
          ";
        } elseif (($this->getAttribute(        // line 13
(isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) == "tickling")) {
            // line 14
            echo "            <span class=\"btn btn-success btn-xs ticket-confirm\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_ticket_confirm", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
            echo "\">已解决</span>
            <span class=\"btn btn-primary btn-xs ticket-asked\" data-widget=\"collapse\">继续追问</span>
          ";
        } elseif (($this->getAttribute(        // line 16
(isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) == "appraising")) {
            // line 17
            echo "            <span class=\"btn btn-success btn-xs\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_ticket_confirm", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
            echo "\">已解决</span>
          ";
        } elseif (($this->getAttribute(        // line 18
(isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) == "confirmed")) {
            // line 19
            echo "          ";
        } elseif (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) == "closed")) {
            // line 20
            echo "          ";
        }
        // line 21
        echo "      <div class=\"box-body\" style=\"display: none;\">
        <div class=\"box box-primary\">
            <form role=\"form\" method=\"POST\">
              <div class=\"box-body\">
                <div class=\"form-group\">
                  <textarea class=\"form-control\" rows=\"3\" name=\"about\"></textarea>
                  <input type=\"text\" class=\"hidden\" name=\"ticketId\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()), "html", null, true);
        echo "\">
                  <input type=\"text\" class=\"hidden\" name=\"role\" value=\"customer\">
                </div>
                <div class=\"form-group img-inputs\">
                </div>
                <div class=\"form-group\">
                  <div id=\"upload\"></div>
                  <p class=\"help-block\">可上传5张图片每个附件大小不得超过2M。附件支持的格式有：'jpg', 'bmp', 'png', 'gif','txt','rar','zip','doc','docx','ini','conf','eml'</p>
                </div>
              </div>
              ";
        // line 37
        echo $this->env->getExtension('app_helper')->rendorFormCsrfToken();
        echo "
              <div class=\"box-footer\">
                <button id=\"customer-reply\" type=\"submit\" class=\"btn btn-primary\" data-url=\"
            ";
        // line 40
        if ((($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) == "waiting") || ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) == "processing"))) {
            // line 41
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_ticket_supplement", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
            echo "
            ";
        } elseif (($this->getAttribute(        // line 42
(isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) == "tickling")) {
            // line 43
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_ticket_asked", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
            echo "
            ";
        } elseif (($this->getAttribute(        // line 44
(isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) == "confirmed")) {
            // line 45
            echo "              ";
            // line 46
            echo "            ";
        } elseif (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) == "appraising")) {
            // line 47
            echo "              ";
            // line 48
            echo "            ";
        } elseif (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) == "closed")) {
            // line 49
            echo "              ";
            // line 50
            echo "            ";
        }
        echo "\">提交</button>
              </div>
            </form>
          </div>
      </div>
    </div>
</div>";
        
        $__internal_7fb990b024bd2094803f0c0c476255cabcf2441abcab581cee638ba970004356->leave($__internal_7fb990b024bd2094803f0c0c476255cabcf2441abcab581cee638ba970004356_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:TimeLine:customer-timeline-footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 50,  130 => 49,  127 => 48,  125 => 47,  122 => 46,  120 => 45,  118 => 44,  113 => 43,  111 => 42,  106 => 41,  104 => 40,  98 => 37,  85 => 27,  77 => 21,  74 => 20,  71 => 19,  69 => 18,  64 => 17,  62 => 16,  56 => 14,  54 => 13,  51 => 12,  45 => 10,  42 => 9,  40 => 8,  37 => 7,  31 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="timeline-footer">*/
/*     <div class="box box-default collapsed-box">*/
/*           {% if ticket.status == 'waiting' %}*/
/*             {% if ticket.reminder == false %}*/
/*               <span class="btn btn-warning btn-xs ticket-urge" data-url="{{ path('customer_ticket_urge', {id:ticket.id}) }}">催单</span>*/
/*             {% endif %}*/
/*             <span class="btn btn-primary btn-xs" data-widget="collapse">补充说明</span>*/
/*           {% elseif ticket.status == 'processing' %}*/
/*             {% if ticket.reminder == false %}*/
/*               <span class="btn btn-warning btn-xs ticket-urge" data-url="{{ path('customer_ticket_urge', {id:ticket.id}) }}">催单</span>*/
/*             {% endif %}*/
/*             <span class="btn btn-primary btn-xs" data-widget="collapse">补充说明</span>*/
/*           {% elseif ticket.status == 'tickling' %}*/
/*             <span class="btn btn-success btn-xs ticket-confirm" data-url="{{ path('customer_ticket_confirm', {id:ticket.id}) }}">已解决</span>*/
/*             <span class="btn btn-primary btn-xs ticket-asked" data-widget="collapse">继续追问</span>*/
/*           {% elseif ticket.status == 'appraising' %}*/
/*             <span class="btn btn-success btn-xs" data-url="{{ path('customer_ticket_confirm', {id:ticket.id}) }}">已解决</span>*/
/*           {% elseif ticket.status == 'confirmed' %}*/
/*           {% elseif ticket.status == 'closed' %}*/
/*           {% endif %}*/
/*       <div class="box-body" style="display: none;">*/
/*         <div class="box box-primary">*/
/*             <form role="form" method="POST">*/
/*               <div class="box-body">*/
/*                 <div class="form-group">*/
/*                   <textarea class="form-control" rows="3" name="about"></textarea>*/
/*                   <input type="text" class="hidden" name="ticketId" value="{{ ticket.id }}">*/
/*                   <input type="text" class="hidden" name="role" value="customer">*/
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
/*                 <button id="customer-reply" type="submit" class="btn btn-primary" data-url="*/
/*             {% if ticket.status == 'waiting' or ticket.status == 'processing' %}*/
/*               {{ path('customer_ticket_supplement', {id:ticket.id}) }}*/
/*             {% elseif ticket.status == 'tickling' %}*/
/*               {{ path('customer_ticket_asked', {id:ticket.id}) }}*/
/*             {% elseif ticket.status == 'confirmed' %}*/
/*               {# 评价路由 #}*/
/*             {% elseif ticket.status == 'appraising' %}*/
/*               {# 空路由 #}*/
/*             {% elseif ticket.status == 'closed' %}*/
/*               {# 空路由 #}*/
/*             {% endif %}">提交</button>*/
/*               </div>*/
/*             </form>*/
/*           </div>*/
/*       </div>*/
/*     </div>*/
/* </div>*/
