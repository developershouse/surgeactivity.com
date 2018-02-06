<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_20c1ea1af996600fe217e1658562698dac11d6c8ca4cfb0796226707b69b23af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9bbadc9873739c3e41f24b54eeeb038531384b584b0d50dfd9dbc18554b58f7 = $this->env->getExtension("native_profiler");
        $__internal_b9bbadc9873739c3e41f24b54eeeb038531384b584b0d50dfd9dbc18554b58f7->enter($__internal_b9bbadc9873739c3e41f24b54eeeb038531384b584b0d50dfd9dbc18554b58f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_b9bbadc9873739c3e41f24b54eeeb038531384b584b0d50dfd9dbc18554b58f7->leave($__internal_b9bbadc9873739c3e41f24b54eeeb038531384b584b0d50dfd9dbc18554b58f7_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_cdb0a41b023e86468c6c3d03e5ce88ddd22d52d45c5ef7272fd9ad6bab553c3f = $this->env->getExtension("native_profiler");
        $__internal_cdb0a41b023e86468c6c3d03e5ce88ddd22d52d45c5ef7272fd9ad6bab553c3f->enter($__internal_cdb0a41b023e86468c6c3d03e5ce88ddd22d52d45c5ef7272fd9ad6bab553c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_cdb0a41b023e86468c6c3d03e5ce88ddd22d52d45c5ef7272fd9ad6bab553c3f->leave($__internal_cdb0a41b023e86468c6c3d03e5ce88ddd22d52d45c5ef7272fd9ad6bab553c3f_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_46bb4bb48c2dbfa10da5eaa174ccc514cd326465b5e3e5cd1d88667e793e9ba5 = $this->env->getExtension("native_profiler");
        $__internal_46bb4bb48c2dbfa10da5eaa174ccc514cd326465b5e3e5cd1d88667e793e9ba5->enter($__internal_46bb4bb48c2dbfa10da5eaa174ccc514cd326465b5e3e5cd1d88667e793e9ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_46bb4bb48c2dbfa10da5eaa174ccc514cd326465b5e3e5cd1d88667e793e9ba5->leave($__internal_46bb4bb48c2dbfa10da5eaa174ccc514cd326465b5e3e5cd1d88667e793e9ba5_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_2a6ab3efdbf4e951fadfde2dfdba6f5b3f838f599e6fbdfcedcd068fc45ddf95 = $this->env->getExtension("native_profiler");
        $__internal_2a6ab3efdbf4e951fadfde2dfdba6f5b3f838f599e6fbdfcedcd068fc45ddf95->enter($__internal_2a6ab3efdbf4e951fadfde2dfdba6f5b3f838f599e6fbdfcedcd068fc45ddf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_2a6ab3efdbf4e951fadfde2dfdba6f5b3f838f599e6fbdfcedcd068fc45ddf95->leave($__internal_2a6ab3efdbf4e951fadfde2dfdba6f5b3f838f599e6fbdfcedcd068fc45ddf95_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
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
/* <th{% if(is_diff|default(false)) %} class="diff"{% endif %}>{% block name %}{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}{% endblock %}</th>*/
/* <td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>*/
/* */
/* {% block field_compare %}*/
/*     {% if(value_compare is defined) %}*/
/*         <td>*/
/*             {% set value = value_compare %}*/
/*             {{ block('field') }}*/
/*         </td>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
