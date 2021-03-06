<?php

/* ZesharCRMCoreBundle:CRUD:contact_card_show.html.twig */
class __TwigTemplate_b22051eda98d7d02059cd2bb72bee7eb6ae59b841461047aa45897dbd04ea37c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "ZesharCRMCoreBundle:CRUD:contact_card_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_045b40eb3f78507eaf562e67d1b065eda5b5b87dd62338e99b32e52bb8891db0 = $this->env->getExtension("native_profiler");
        $__internal_045b40eb3f78507eaf562e67d1b065eda5b5b87dd62338e99b32e52bb8891db0->enter($__internal_045b40eb3f78507eaf562e67d1b065eda5b5b87dd62338e99b32e52bb8891db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:contact_card_show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_045b40eb3f78507eaf562e67d1b065eda5b5b87dd62338e99b32e52bb8891db0->leave($__internal_045b40eb3f78507eaf562e67d1b065eda5b5b87dd62338e99b32e52bb8891db0_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_df508b46d93862bfa35e2f38a7e6cba1ed45409fecd9f04b8346f4884eed8ab0 = $this->env->getExtension("native_profiler");
        $__internal_df508b46d93862bfa35e2f38a7e6cba1ed45409fecd9f04b8346f4884eed8ab0->enter($__internal_df508b46d93862bfa35e2f38a7e6cba1ed45409fecd9f04b8346f4884eed8ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig", "ZesharCRMCoreBundle:CRUD:contact_card_show.html.twig", 15)->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->loadTemplate("SonataAdminBundle:Button:history_button.html.twig", "ZesharCRMCoreBundle:CRUD:contact_card_show.html.twig", 16)->display($context);
        echo "</li>
    <li>";
        // line 17
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "ZesharCRMCoreBundle:CRUD:contact_card_show.html.twig", 17)->display($context);
        echo "</li>
    <li>";
        // line 18
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "ZesharCRMCoreBundle:CRUD:contact_card_show.html.twig", 18)->display($context);
        echo "</li>
";
        
        $__internal_df508b46d93862bfa35e2f38a7e6cba1ed45409fecd9f04b8346f4884eed8ab0->leave($__internal_df508b46d93862bfa35e2f38a7e6cba1ed45409fecd9f04b8346f4884eed8ab0_prof);

    }

    // line 21
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_904d7d934d54615eab1a34c5fb027c8088126e58c2f4e3282dff38db90943b6e = $this->env->getExtension("native_profiler");
        $__internal_904d7d934d54615eab1a34c5fb027c8088126e58c2f4e3282dff38db90943b6e->enter($__internal_904d7d934d54615eab1a34c5fb027c8088126e58c2f4e3282dff38db90943b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
        
        $__internal_904d7d934d54615eab1a34c5fb027c8088126e58c2f4e3282dff38db90943b6e->leave($__internal_904d7d934d54615eab1a34c5fb027c8088126e58c2f4e3282dff38db90943b6e_prof);

    }

    // line 23
    public function block_show($context, array $blocks = array())
    {
        $__internal_053007f13e18618f521f663399d024c831913130ba7e830485b8302bd74714cd = $this->env->getExtension("native_profiler");
        $__internal_053007f13e18618f521f663399d024c831913130ba7e830485b8302bd74714cd->enter($__internal_053007f13e18618f521f663399d024c831913130ba7e830485b8302bd74714cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        // line 24
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 25
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 28
            echo "            <table class=\"table table-bordered\">
                ";
            // line 29
            if ($context["name"]) {
                // line 30
                echo "                    <thead>
                    <tr class=\"sonata-ba-view-title\">
                        <th colspan=\"2\">
                            ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $context["name"]), "method"), "html", null, true);
                echo "
                        </th>
                    </tr>
                    </thead>
                ";
            }
            // line 38
            echo "
                <tbody>
                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 41
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 42
                if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), $context["field_name"], array(), "array", true, true)) {
                    // line 43
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 45
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                <tr class=\"sonata-ba-view-container\">
                    ";
            // line 48
            if ($this->getAttribute((isset($context["enable_bundles"]) ? $context["enable_bundles"] : null), "ZesharCRMLeadsRegenerationBundle", array(), "any", true, true)) {
                // line 49
                echo "                        <td>Action:</td>
                        <td>
                            <a class=\"btn btn-sm btn-default\" title=\"X-Sell Page\" href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_crosssell", array("card" => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id", array()))), "html", null, true);
                echo "\" >X-Sell Page</a>
                        </td>
                    ";
            }
            // line 54
            echo "                </tr>

                </tbody>
            </table>
            <table class=\"table table-bordered\">
                <thead>
                <tr class=\"sonata-ba-view-title\">
                    <th colspan=\"3\">
                        Quote on ";
            // line 62
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "
                    </th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 67
            if (array_key_exists("quote", $context)) {
                // line 68
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 69
                    echo "                        <tr class=\"sonata-ba-view-container\">
                            <td>
                                ";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                    echo "
                            </td>
                            <td>
                                ";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "opportunityCategory", array()), "html", null, true);
                    echo "
                            </td>
                            <td>
                                <a class=\"btn btn-sm btn-default\" title=\"Win-Back Product\" href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "winBackQuote", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => array("quote" => $this->getAttribute($context["item"], "id", array()))), "method"), "html", null, true);
                    echo "\">Win-Back</a>
                            </td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "                ";
            }
            // line 82
            echo "                </tbody>
            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        <div class=\"pull-left\">
            <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-success\"><i class=\"fa fa-edit\"></i> Edit ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getLabel", array(), "method"), "html", null, true);
        echo "</button></a>
        </div>
        ";
        // line 88
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

    </div>
";
        
        $__internal_053007f13e18618f521f663399d024c831913130ba7e830485b8302bd74714cd->leave($__internal_053007f13e18618f521f663399d024c831913130ba7e830485b8302bd74714cd_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:contact_card_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 88,  217 => 86,  214 => 85,  206 => 82,  203 => 81,  193 => 77,  187 => 74,  181 => 71,  177 => 69,  172 => 68,  170 => 67,  162 => 62,  152 => 54,  146 => 51,  142 => 49,  140 => 48,  137 => 47,  130 => 45,  124 => 43,  122 => 42,  119 => 41,  115 => 40,  111 => 38,  103 => 33,  98 => 30,  96 => 29,  93 => 28,  89 => 27,  84 => 25,  81 => 24,  75 => 23,  63 => 21,  54 => 18,  50 => 17,  46 => 16,  41 => 15,  35 => 14,  20 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     <li>{% include 'SonataAdminBundle:Button:edit_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:history_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:list_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:create_button.html.twig' %}</li>*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active'}, 'list') }}{% endblock %}*/
/* */
/* {% block show %}*/
/*     <div class="sonata-ba-view">*/
/*         {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}*/
/* */
/*         {% for name, view_group in admin.showgroups %}*/
/*             <table class="table table-bordered">*/
/*                 {% if name %}*/
/*                     <thead>*/
/*                     <tr class="sonata-ba-view-title">*/
/*                         <th colspan="2">*/
/*                             {{ admin.trans(name) }}*/
/*                         </th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                 {% endif %}*/
/* */
/*                 <tbody>*/
/*                 {% for field_name in view_group.fields %}*/
/*                     <tr class="sonata-ba-view-container">*/
/*                         {% if elements[field_name] is defined %}*/
/*                             {{ elements[field_name]|render_view_element(object) }}*/
/*                         {% endif %}*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 <tr class="sonata-ba-view-container">*/
/*                     {% if enable_bundles.ZesharCRMLeadsRegenerationBundle is defined %}*/
/*                         <td>Action:</td>*/
/*                         <td>*/
/*                             <a class="btn btn-sm btn-default" title="X-Sell Page" href="{{ url('sonata_admin_crosssell',{ 'card': object.id }) }}" >X-Sell Page</a>*/
/*                         </td>*/
/*                     {% endif %}*/
/*                 </tr>*/
/* */
/*                 </tbody>*/
/*             </table>*/
/*             <table class="table table-bordered">*/
/*                 <thead>*/
/*                 <tr class="sonata-ba-view-title">*/
/*                     <th colspan="3">*/
/*                         Quote on {{ name }}*/
/*                     </th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% if quote is defined %}*/
/*                     {% for item in quote %}*/
/*                         <tr class="sonata-ba-view-container">*/
/*                             <td>*/
/*                                 {{ item.name }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ item.opportunityCategory }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a class="btn btn-sm btn-default" title="Win-Back Product" href="{{ admin.generateObjectUrl('winBackQuote', object,{'quote': item.id}) }}">Win-Back</a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*                 </tbody>*/
/*             </table>*/
/*         {% endfor %}*/
/*         <div class="pull-left">*/
/*             <a href="{{ admin.generateObjectUrl('edit', object) }}"><button type="button" class="btn btn-success"><i class="fa fa-edit"></i> Edit {{ admin.getLabel() }}</button></a>*/
/*         </div>*/
/*         {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
