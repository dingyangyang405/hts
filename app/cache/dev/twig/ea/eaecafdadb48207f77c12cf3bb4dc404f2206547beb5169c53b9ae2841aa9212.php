<?php

/* WebBundle:TimeLine:timeline-customer.html.twig */
class __TwigTemplate_e6d43f51611944c8b9db47d66aa95380b487050d277e5e4730ad63ef589ddd08 extends Twig_Template
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
        $__internal_c7a09c04c4f2ab99830c46b870a46c364d0a414fbca06a27677483565935cecb = $this->env->getExtension("native_profiler");
        $__internal_c7a09c04c4f2ab99830c46b870a46c364d0a414fbca06a27677483565935cecb->enter($__internal_c7a09c04c4f2ab99830c46b870a46c364d0a414fbca06a27677483565935cecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:TimeLine:timeline-customer.html.twig"));

        // line 1
        echo "<li>
  <i class=\"fa fa-comments bg-yellow\"></i>

  <div class=\"timeline-item\">
    <span class=\"time\"><i class=\"fa fa-clock-o\"></i>";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticketItem"]) ? $context["ticketItem"] : $this->getContext($context, "ticketItem")), "created", array()), "H:i"), "html", null, true);
        echo "</span>

    <h3 class=\"timeline-header\">";
        // line 7
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "customer")) {
            echo "我";
        } else {
            echo "客户";
        }
        echo "</h3>

    <div class=\"timeline-body\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticketItem"]) ? $context["ticketItem"] : $this->getContext($context, "ticketItem")), "about", array()), "html", null, true);
        echo "
      <p>
        <ul id=\"attachment-preview-";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticketItem"]) ? $context["ticketItem"] : $this->getContext($context, "ticketItem")), "id", array()), "html", null, true);
        echo "\" class=\"attachment-preview\">
          ";
        // line 12
        if ($this->getAttribute((isset($context["ticketItem"]) ? $context["ticketItem"] : $this->getContext($context, "ticketItem")), "attachment1", array())) {
            // line 13
            echo "            <li><img data-original=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["ticketItem"]) ? $context["ticketItem"] : $this->getContext($context, "ticketItem")), "attachment1", array())), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["ticketItem"]) ? $context["ticketItem"] : $this->getContext($context, "ticketItem")), "attachment1", array())), "html", null, true);
            echo "\"/></li>
          ";
        }
        // line 15
        echo "          ";
        if ($this->getAttribute((isset($context["ticketItem"]) ? $context["ticketItem"] : $this->getContext($context, "ticketItem")), "attachment2", array())) {
            // line 16
            echo "            <li><img data-original=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["ticketItem"]) ? $context["ticketItem"] : $this->getContext($context, "ticketItem")), "attachment2", array())), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["ticketItem"]) ? $context["ticketItem"] : $this->getContext($context, "ticketItem")), "attachment2", array())), "html", null, true);
            echo "\"/></li>
          ";
        }
        // line 18
        echo "          ";
        if ($this->getAttribute((isset($context["ticketItem"]) ? $context["ticketItem"] : $this->getContext($context, "ticketItem")), "attachment3", array())) {
            // line 19
            echo "            <li><img data-original=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["ticketItem"]) ? $context["ticketItem"] : $this->getContext($context, "ticketItem")), "attachment3", array())), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["ticketItem"]) ? $context["ticketItem"] : $this->getContext($context, "ticketItem")), "attachment3", array())), "html", null, true);
            echo "\"/></li>
          ";
        }
        // line 21
        echo "          ";
        if ($this->getAttribute((isset($context["ticketItem"]) ? $context["ticketItem"] : $this->getContext($context, "ticketItem")), "attachment4", array())) {
            // line 22
            echo "            <li><img data-original=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["ticketItem"]) ? $context["ticketItem"] : $this->getContext($context, "ticketItem")), "attachment4", array())), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["ticketItem"]) ? $context["ticketItem"] : $this->getContext($context, "ticketItem")), "attachment4", array())), "html", null, true);
            echo "\"/></li>
          ";
        }
        // line 24
        echo "          ";
        if ($this->getAttribute((isset($context["ticketItem"]) ? $context["ticketItem"] : $this->getContext($context, "ticketItem")), "attachment5", array())) {
            // line 25
            echo "            <li><img data-original=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["ticketItem"]) ? $context["ticketItem"] : $this->getContext($context, "ticketItem")), "attachment5", array())), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["ticketItem"]) ? $context["ticketItem"] : $this->getContext($context, "ticketItem")), "attachment5", array())), "html", null, true);
            echo "\"/></li>
          ";
        }
        // line 27
        echo "        </ul>
      </p>
    </div>
    
    ";
        // line 31
        if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last", array()) == 1)) {
            // line 32
            echo "      ";
            if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "customer")) {
                // line 33
                echo "        ";
                $this->loadTemplate("WebBundle:TimeLine:customer-timeline-footer.html.twig", "WebBundle:TimeLine:timeline-customer.html.twig", 33)->display($context);
                // line 34
                echo "      ";
            }
            // line 35
            echo "      ";
            if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "service")) {
                // line 36
                echo "        ";
                $this->loadTemplate("WebBundle:TimeLine:operator-timeline-footer.html.twig", "WebBundle:TimeLine:timeline-customer.html.twig", 36)->display($context);
                // line 37
                echo "      ";
            }
            // line 38
            echo "    ";
        }
        // line 39
        echo "    
  </div>
</li>";
        
        $__internal_c7a09c04c4f2ab99830c46b870a46c364d0a414fbca06a27677483565935cecb->leave($__internal_c7a09c04c4f2ab99830c46b870a46c364d0a414fbca06a27677483565935cecb_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:TimeLine:timeline-customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 39,  131 => 38,  128 => 37,  125 => 36,  122 => 35,  119 => 34,  116 => 33,  113 => 32,  111 => 31,  105 => 27,  97 => 25,  94 => 24,  86 => 22,  83 => 21,  75 => 19,  72 => 18,  64 => 16,  61 => 15,  53 => 13,  51 => 12,  47 => 11,  42 => 9,  33 => 7,  28 => 5,  22 => 1,);
    }
}
/* <li>*/
/*   <i class="fa fa-comments bg-yellow"></i>*/
/* */
/*   <div class="timeline-item">*/
/*     <span class="time"><i class="fa fa-clock-o"></i>{{ ticketItem.created|date('H:i') }}</span>*/
/* */
/*     <h3 class="timeline-header">{% if role == 'customer' %}我{% else %}客户{% endif %}</h3>*/
/* */
/*     <div class="timeline-body">{{ ticketItem.about }}*/
/*       <p>*/
/*         <ul id="attachment-preview-{{ticketItem.id}}" class="attachment-preview">*/
/*           {% if ticketItem.attachment1 %}*/
/*             <li><img data-original="{{ asset(ticketItem.attachment1) }}" src="{{ asset(ticketItem.attachment1) }}"/></li>*/
/*           {% endif %}*/
/*           {% if ticketItem.attachment2 %}*/
/*             <li><img data-original="{{ asset(ticketItem.attachment2) }}" src="{{ asset(ticketItem.attachment2) }}"/></li>*/
/*           {% endif %}*/
/*           {% if ticketItem.attachment3 %}*/
/*             <li><img data-original="{{ asset(ticketItem.attachment3) }}" src="{{ asset(ticketItem.attachment3) }}"/></li>*/
/*           {% endif %}*/
/*           {% if ticketItem.attachment4 %}*/
/*             <li><img data-original="{{ asset(ticketItem.attachment4) }}" src="{{ asset(ticketItem.attachment4) }}"/></li>*/
/*           {% endif %}*/
/*           {% if ticketItem.attachment5 %}*/
/*             <li><img data-original="{{ asset(ticketItem.attachment5) }}" src="{{ asset(ticketItem.attachment5) }}"/></li>*/
/*           {% endif %}*/
/*         </ul>*/
/*       </p>*/
/*     </div>*/
/*     */
/*     {% if loop.last == 1 %}*/
/*       {% if role == 'customer' %}*/
/*         {% include 'WebBundle:TimeLine:customer-timeline-footer.html.twig' %}*/
/*       {% endif %}*/
/*       {% if role == 'service' %}*/
/*         {% include 'WebBundle:TimeLine:operator-timeline-footer.html.twig' %}*/
/*       {% endif %}*/
/*     {% endif %}*/
/*     */
/*   </div>*/
/* </li>*/
