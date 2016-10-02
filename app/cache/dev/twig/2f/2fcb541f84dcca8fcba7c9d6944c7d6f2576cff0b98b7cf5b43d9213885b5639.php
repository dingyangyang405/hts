<?php

/* AdminBundle:User:update-tr-model.html.twig */
class __TwigTemplate_a48afc14f4b3bff6c842e8770007756da479379d1f783b3ec6917922eae2d0dc extends Twig_Template
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
        $__internal_9df1f694d0606059f3b6671e6b50bfc6f6eed80155f5ede3968f54a5d092e930 = $this->env->getExtension("native_profiler");
        $__internal_9df1f694d0606059f3b6671e6b50bfc6f6eed80155f5ede3968f54a5d092e930->enter($__internal_9df1f694d0606059f3b6671e6b50bfc6f6eed80155f5ede3968f54a5d092e930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:User:update-tr-model.html.twig"));

        // line 1
        echo "
  <td>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "operatorNo", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "currentWorkload", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "maxWorkload", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone", array()), "html", null, true);
        echo "</td>
  <td> 
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 11
            echo "      ";
            echo $this->env->getExtension('web_twig')->getDictText("userRoles", $context["role"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  </td>
  <td>
    <button type=\"button\" class=\"btn btn-sm btn-success js-update-btn\" data-toggle=\"modal\" data-target=\"#myModal\" data-id = \"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_update", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">编辑</button>
    <button type=\"button\" class=\"btn btn-sm btn-success js-delete-btn\" data-id = \"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#myModal\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">删除</button>
 </td>
 <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/admin/list/update.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_9df1f694d0606059f3b6671e6b50bfc6f6eed80155f5ede3968f54a5d092e930->leave($__internal_9df1f694d0606059f3b6671e6b50bfc6f6eed80155f5ede3968f54a5d092e930_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:User:update-tr-model.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  77 => 16,  71 => 15,  67 => 13,  58 => 11,  54 => 10,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/*   <td>{{user.username}}</td>*/
/*   <td>{{user.name}}</td>*/
/*   <td>{{user.operatorNo}}</td>*/
/*   <td>{{user.currentWorkload}}</td>*/
/*   <td>{{user.maxWorkload}}</td>*/
/*   <td>{{user.email}}</td>*/
/*   <td>{{user.phone}}</td>*/
/*   <td> */
/*     {% for role in user.roles %}*/
/*       {{ dict_text('userRoles', role) }}*/
/*     {% endfor %}*/
/*   </td>*/
/*   <td>*/
/*     <button type="button" class="btn btn-sm btn-success js-update-btn" data-toggle="modal" data-target="#myModal" data-id = "{{user.id}}" data-url="{{ path('admin_user_update',{id:user.id}) }}">编辑</button>*/
/*     <button type="button" class="btn btn-sm btn-success js-delete-btn" data-id = "{{user.id}}" data-toggle="modal" data-target="#myModal" data-url="{{ path('admin_user_delete',{id:user.id})}}">删除</button>*/
/*  </td>*/
/*  <script src="{{ asset('assets/js/admin/list/update.js') }}"></script>*/
/* */
