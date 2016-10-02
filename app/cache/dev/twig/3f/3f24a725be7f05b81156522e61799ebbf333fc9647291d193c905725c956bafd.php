<?php

/* WebBundle:WorkSpace:notification-show.html.twig */
class __TwigTemplate_099a7e4cc988638d0f0580462c0acda1048a04eb3c52d08f5306a17c216cde0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle:Default:layout.html.twig", "WebBundle:WorkSpace:notification-show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63a35861877e6784a816fc3e9544ddaec8197cc21d5915487edcaabb966e2048 = $this->env->getExtension("native_profiler");
        $__internal_63a35861877e6784a816fc3e9544ddaec8197cc21d5915487edcaabb966e2048->enter($__internal_63a35861877e6784a816fc3e9544ddaec8197cc21d5915487edcaabb966e2048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:WorkSpace:notification-show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63a35861877e6784a816fc3e9544ddaec8197cc21d5915487edcaabb966e2048->leave($__internal_63a35861877e6784a816fc3e9544ddaec8197cc21d5915487edcaabb966e2048_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_48ceafb14931e183f5a6c392bbf7307115d8c4b75eb8f15a8a9c27a2c39eb196 = $this->env->getExtension("native_profiler");
        $__internal_48ceafb14931e183f5a6c392bbf7307115d8c4b75eb8f15a8a9c27a2c39eb196->enter($__internal_48ceafb14931e183f5a6c392bbf7307115d8c4b75eb8f15a8a9c27a2c39eb196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "通知";
        
        $__internal_48ceafb14931e183f5a6c392bbf7307115d8c4b75eb8f15a8a9c27a2c39eb196->leave($__internal_48ceafb14931e183f5a6c392bbf7307115d8c4b75eb8f15a8a9c27a2c39eb196_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0497d02e82d9fa19cbb403161a1ca50787dae4ba333c2db8b24506d4fad824bd = $this->env->getExtension("native_profiler");
        $__internal_0497d02e82d9fa19cbb403161a1ca50787dae4ba333c2db8b24506d4fad824bd->enter($__internal_0497d02e82d9fa19cbb403161a1ca50787dae4ba333c2db8b24506d4fad824bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div style=\"min-height: 916px;\">
    <div class=\"row\">
      <div class=\"col-md-2\"></div>
      <div class=\"col-md-8\">
      <div class=\"box\">
        <div class=\"panel panel-default panel-page\">
          <div class=\"panel-heading\">
            <h2> 通知 </h2>
          </div>
            <div id=\"message-table-container\">
              <table class=\"table table-striped table-hover\" align=\"center\" valign=\"middle\" id=\"message-table\" width=\"50%\">
                <tbody>
                  ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 19
            echo "                    <tr class=\"message-tr\" id=\"message-table-tr-3\">
                      <td>
                          ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "message", array()), "html", null, true);
            echo "
                      </td>
                    </tr>  
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  
                </tbody>
              </table>
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
            </div>
        </div><!-- /panel -->
      </div>
    </div>
    <div class=\"col-md-2\"></div>
    </div>
</div>
";
        
        $__internal_0497d02e82d9fa19cbb403161a1ca50787dae4ba333c2db8b24506d4fad824bd->leave($__internal_0497d02e82d9fa19cbb403161a1ca50787dae4ba333c2db8b24506d4fad824bd_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:WorkSpace:notification-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  85 => 24,  75 => 21,  71 => 19,  67 => 18,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WebBundle:Default:layout.html.twig" %}*/
/* */
/* {% block title %}通知{% endblock %}*/
/* */
/* {% block body %}*/
/* <div style="min-height: 916px;">*/
/*     <div class="row">*/
/*       <div class="col-md-2"></div>*/
/*       <div class="col-md-8">*/
/*       <div class="box">*/
/*         <div class="panel panel-default panel-page">*/
/*           <div class="panel-heading">*/
/*             <h2> 通知 </h2>*/
/*           </div>*/
/*             <div id="message-table-container">*/
/*               <table class="table table-striped table-hover" align="center" valign="middle" id="message-table" width="50%">*/
/*                 <tbody>*/
/*                   {% for notification in notifications %}*/
/*                     <tr class="message-tr" id="message-table-tr-3">*/
/*                       <td>*/
/*                           {{notification.message}}*/
/*                       </td>*/
/*                     </tr>  */
/*                   {% endfor %}  */
/*                 </tbody>*/
/*               </table>*/
/*             {{ admin_macro.paginator(paginator) }}*/
/*             </div>*/
/*         </div><!-- /panel -->*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-md-2"></div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
