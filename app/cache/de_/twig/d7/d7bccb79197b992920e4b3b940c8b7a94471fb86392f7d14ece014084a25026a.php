<?php

/* ZesharCRMCoreBundle:ListField:operation_filter_form.html.twig */
class __TwigTemplate_6a3e52eba2ece3460e879ced2a088cf54c261d6219d77574d32f99260d244800 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d0519e8b89adda0b645580c353a42fe743f291e62d6b80a51f051634355d9e1 = $this->env->getExtension("native_profiler");
        $__internal_2d0519e8b89adda0b645580c353a42fe743f291e62d6b80a51f051634355d9e1->enter($__internal_2d0519e8b89adda0b645580c353a42fe743f291e62d6b80a51f051634355d9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:ListField:operation_filter_form.html.twig"));

        // line 1
        $this->displayBlock('list_filters', $context, $blocks);
        
        $__internal_2d0519e8b89adda0b645580c353a42fe743f291e62d6b80a51f051634355d9e1->leave($__internal_2d0519e8b89adda0b645580c353a42fe743f291e62d6b80a51f051634355d9e1_prof);

    }

    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_d513c4f98383d7dd980004ea4bcb739c213025b1d1aece6be2ad9948a7440a70 = $this->env->getExtension("native_profiler");
        $__internal_d513c4f98383d7dd980004ea4bcb739c213025b1d1aece6be2ad9948a7440a70->enter($__internal_d513c4f98383d7dd980004ea4bcb739c213025b1d1aece6be2ad9948a7440a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 2
        echo "    ";
        $context["currentYear"] = twig_date_format_filter($this->env, "now", "Y");
        // line 3
        echo "    ";
        $context["startYear"] = ((isset($context["currentYear"]) ? $context["currentYear"] : $this->getContext($context, "currentYear")) - 10);
        // line 4
        echo "
    ";
        // line 5
        $context["monthId"] = 0;
        // line 6
        echo "    ";
        $context["yearId"] = 0;
        // line 7
        echo "
    ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "dateFilter", array()), "month", array(), "array")) {
            // line 9
            echo "        ";
            $context["monthId"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "dateFilter", array()), "month", array(), "array");
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "dateFilter", array()), "year", array(), "array")) {
            // line 12
            echo "        ";
            $context["yearId"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "dateFilter", array()), "year", array(), "array");
            // line 13
            echo "    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "filter"), "method", false, true), "performedAt", array(), "array", false, true), "value", array(), "array", false, true), "date", array(), "array", false, true), "month", array(), "array", true, true)) {
            // line 16
            echo "        ";
            $context["monthId"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "filter"), "method"), "performedAt", array(), "array"), "value", array(), "array"), "date", array(), "array"), "month", array(), "array");
            // line 17
            echo "    ";
        }
        // line 18
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "filter"), "method", false, true), "performedAt", array(), "array", false, true), "value", array(), "array", false, true), "date", array(), "array", false, true), "year", array(), "array", true, true)) {
            // line 19
            echo "        ";
            $context["yearId"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "filter"), "method"), "performedAt", array(), "array"), "value", array(), "array"), "date", array(), "array"), "year", array(), "array");
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 23
            echo "        ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SonataAdminBundle:Form:filter_admin_fields.html.twig"));
            // line 24
            echo "        <div id=\"box-box-primary\" class=\"box box-primary\">
            <div id=\"box-box-body\" class=\"box-body\">
                <form class=\"custom sonata-filter-form ";
            // line 26
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                    <div class=\"filter_container ";
            // line 27
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasActiveFilters", array())) ? ("active") : ("inactive"));
            echo "\">
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 29
                echo "                            ";
                if (($this->getAttribute($context["filter"], "name", array()) == "performedAt")) {
                    // line 30
                    echo "                                <div class=\"form-group\">
                                    <select id=\"filter_performedAt_value_date_month\" name=\"filter[performedAt][value][date][month]\" class=\" form-control\">
                                        <option value=\"\">Month</option>
                                        <option ";
                    // line 33
                    if (("1" == (isset($context["monthId"]) ? $context["monthId"] : $this->getContext($context, "monthId")))) {
                        echo " selected ";
                    }
                    echo " value=\"1\">Jan</option>
                                        <option ";
                    // line 34
                    if (("2" == (isset($context["monthId"]) ? $context["monthId"] : $this->getContext($context, "monthId")))) {
                        echo " selected ";
                    }
                    echo " value=\"2\">Feb</option>
                                        <option ";
                    // line 35
                    if (("3" == (isset($context["monthId"]) ? $context["monthId"] : $this->getContext($context, "monthId")))) {
                        echo " selected ";
                    }
                    echo " value=\"3\">Mar</option>
                                        <option ";
                    // line 36
                    if (("4" == (isset($context["monthId"]) ? $context["monthId"] : $this->getContext($context, "monthId")))) {
                        echo " selected ";
                    }
                    echo " value=\"4\">Apr</option>
                                        <option ";
                    // line 37
                    if (("5" == (isset($context["monthId"]) ? $context["monthId"] : $this->getContext($context, "monthId")))) {
                        echo " selected ";
                    }
                    echo " value=\"5\">May</option>
                                        <option ";
                    // line 38
                    if (("6" == (isset($context["monthId"]) ? $context["monthId"] : $this->getContext($context, "monthId")))) {
                        echo " selected ";
                    }
                    echo " value=\"6\">Jun</option>
                                        <option ";
                    // line 39
                    if (("7" == (isset($context["monthId"]) ? $context["monthId"] : $this->getContext($context, "monthId")))) {
                        echo " selected ";
                    }
                    echo " value=\"7\">Jul</option>
                                        <option ";
                    // line 40
                    if (("8" == (isset($context["monthId"]) ? $context["monthId"] : $this->getContext($context, "monthId")))) {
                        echo " selected ";
                    }
                    echo " value=\"8\">Aug</option>
                                        <option ";
                    // line 41
                    if (("9" == (isset($context["monthId"]) ? $context["monthId"] : $this->getContext($context, "monthId")))) {
                        echo " selected ";
                    }
                    echo " value=\"9\">Sep</option>
                                        <option ";
                    // line 42
                    if (("10" == (isset($context["monthId"]) ? $context["monthId"] : $this->getContext($context, "monthId")))) {
                        echo " selected ";
                    }
                    echo " value=\"10\">Oct</option>
                                        <option ";
                    // line 43
                    if (("11" == (isset($context["monthId"]) ? $context["monthId"] : $this->getContext($context, "monthId")))) {
                        echo " selected ";
                    }
                    echo " value=\"11\">Nov</option>
                                        <option ";
                    // line 44
                    if (("12" == (isset($context["monthId"]) ? $context["monthId"] : $this->getContext($context, "monthId")))) {
                        echo " selected ";
                    }
                    echo " value=\"12\">Dec</option>
                                    </select>
                                    <select id=\"filter_performedAt_value_date_year\" name=\"filter[performedAt][value][date][year]\" class=\" form-control\">
                                        <option value=\"\">Year</option>
                                        ";
                    // line 48
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range((isset($context["currentYear"]) ? $context["currentYear"] : $this->getContext($context, "currentYear")), (isset($context["startYear"]) ? $context["startYear"] : $this->getContext($context, "startYear"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 49
                        echo "                                            <option ";
                        if (($context["i"] == (isset($context["yearId"]) ? $context["yearId"] : $this->getContext($context, "yearId")))) {
                            echo " selected ";
                        }
                        echo " value=\"";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</option>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "                                    </select>
                                </div>
                            ";
                }
                // line 54
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
                        <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                        ";
            // line 58
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 59
            echo "                        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

                        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</button>

                        <a class=\"btn btn-default\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    </div>

                    ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 67
                echo "                        <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                </form>
            </div>
        </div>

<style>
    #box-box-body{
        width: 485px;
    }
    #box-box-primary{
        width: 485px;
    }
    .custom .filter_container .form-group{
        float: left;
        padding-right: 5px;
    }
    #filter_performedAt_value_date_month{
        width: 160px;
        float: left;
        margin-top: 0!important;
        margin-bottom: 0!important;
    }
    #filter_performedAt_value_date_year{
        width: 160px;
        margin-top: 0!important;
        margin-bottom: 0!important;
    }
</style>
    ";
        }
        
        $__internal_d513c4f98383d7dd980004ea4bcb739c213025b1d1aece6be2ad9948a7440a70->leave($__internal_d513c4f98383d7dd980004ea4bcb739c213025b1d1aece6be2ad9948a7440a70_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:ListField:operation_filter_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  269 => 69,  258 => 67,  254 => 66,  246 => 63,  241 => 61,  235 => 59,  233 => 58,  228 => 55,  222 => 54,  217 => 51,  202 => 49,  198 => 48,  189 => 44,  183 => 43,  177 => 42,  171 => 41,  165 => 40,  159 => 39,  153 => 38,  147 => 37,  141 => 36,  135 => 35,  129 => 34,  123 => 33,  118 => 30,  115 => 29,  111 => 28,  107 => 27,  101 => 26,  97 => 24,  94 => 23,  92 => 22,  89 => 21,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  72 => 15,  69 => 14,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  52 => 8,  49 => 7,  46 => 6,  44 => 5,  41 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block list_filters %}*/
/*     {% set currentYear = "now"|date("Y") %}*/
/*     {% set startYear = currentYear - 10 %}*/
/* */
/*     {% set monthId = 0 %}*/
/*     {% set yearId = 0 %}*/
/* */
/*     {% if admin.dateFilter['month'] %}*/
/*         {% set monthId = admin.dateFilter['month'] %}*/
/*     {% endif %}*/
/*     {% if admin.dateFilter['year'] %}*/
/*         {% set yearId = admin.dateFilter['year'] %}*/
/*     {% endif %}*/
/* */
/*     {% if app.request.get('filter')['performedAt']['value']['date']['month'] is defined %}*/
/*         {% set monthId = app.request.get('filter')['performedAt']['value']['date']['month'] %}*/
/*     {% endif %}*/
/*     {% if app.request.get('filter')['performedAt']['value']['date']['year'] is defined %}*/
/*         {% set yearId = app.request.get('filter')['performedAt']['value']['date']['year'] %}*/
/*     {% endif %}*/
/* */
/*     {% if admin.datagrid.filters %}*/
/*         {% form_theme form "SonataAdminBundle:Form:filter_admin_fields.html.twig" %}*/
/*         <div id="box-box-primary" class="box box-primary">*/
/*             <div id="box-box-body" class="box-body">*/
/*                 <form class="custom sonata-filter-form {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}" action="{{ admin.generateUrl('list') }}" method="GET" role="form">*/
/*                     <div class="filter_container {{ admin.datagrid.hasActiveFilters ? 'active' : 'inactive' }}">*/
/*                         {% for filter in admin.datagrid.filters %}*/
/*                             {% if filter.name == "performedAt" %}*/
/*                                 <div class="form-group">*/
/*                                     <select id="filter_performedAt_value_date_month" name="filter[performedAt][value][date][month]" class=" form-control">*/
/*                                         <option value="">Month</option>*/
/*                                         <option {% if '1' == monthId %} selected {% endif %} value="1">Jan</option>*/
/*                                         <option {% if '2' == monthId %} selected {% endif %} value="2">Feb</option>*/
/*                                         <option {% if '3' == monthId %} selected {% endif %} value="3">Mar</option>*/
/*                                         <option {% if '4' == monthId %} selected {% endif %} value="4">Apr</option>*/
/*                                         <option {% if '5' == monthId %} selected {% endif %} value="5">May</option>*/
/*                                         <option {% if '6' == monthId %} selected {% endif %} value="6">Jun</option>*/
/*                                         <option {% if '7' == monthId %} selected {% endif %} value="7">Jul</option>*/
/*                                         <option {% if '8' == monthId %} selected {% endif %} value="8">Aug</option>*/
/*                                         <option {% if '9' == monthId %} selected {% endif %} value="9">Sep</option>*/
/*                                         <option {% if '10' == monthId %} selected {% endif %} value="10">Oct</option>*/
/*                                         <option {% if '11' == monthId %} selected {% endif %} value="11">Nov</option>*/
/*                                         <option {% if '12' == monthId %} selected {% endif %} value="12">Dec</option>*/
/*                                     </select>*/
/*                                     <select id="filter_performedAt_value_date_year" name="filter[performedAt][value][date][year]" class=" form-control">*/
/*                                         <option value="">Year</option>*/
/*                                         {% for i in currentYear..startYear  %}*/
/*                                             <option {% if i == yearId %} selected {% endif %} value="{{ i }}">{{ i }}</option>*/
/*                                         {% endfor %}*/
/*                                     </select>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/* */
/*                         <input type="hidden" name="filter[_page]" id="filter__page" value="1">*/
/* */
/*                         {% set foo = form.children['_page'].setRendered() %}*/
/*                         {{ form_rest(form) }}*/
/* */
/*                         <button type="submit" class="btn btn-primary"><i class="fa fa-filter"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}</button>*/
/* */
/*                         <a class="btn btn-default" href="{{ admin.generateUrl('list', {filters: 'reset'}) }}">{{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}</a>*/
/*                     </div>*/
/* */
/*                     {% for paramKey, paramValue in admin.persistentParameters %}*/
/*                         <input type="hidden" name="{{ paramKey }}" value="{{ paramValue }}">*/
/*                     {% endfor %}*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/* */
/* <style>*/
/*     #box-box-body{*/
/*         width: 485px;*/
/*     }*/
/*     #box-box-primary{*/
/*         width: 485px;*/
/*     }*/
/*     .custom .filter_container .form-group{*/
/*         float: left;*/
/*         padding-right: 5px;*/
/*     }*/
/*     #filter_performedAt_value_date_month{*/
/*         width: 160px;*/
/*         float: left;*/
/*         margin-top: 0!important;*/
/*         margin-bottom: 0!important;*/
/*     }*/
/*     #filter_performedAt_value_date_year{*/
/*         width: 160px;*/
/*         margin-top: 0!important;*/
/*         margin-bottom: 0!important;*/
/*     }*/
/* </style>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
