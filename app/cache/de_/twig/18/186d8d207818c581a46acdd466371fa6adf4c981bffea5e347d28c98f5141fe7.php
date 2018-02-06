<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:billing_info_tab.html.twig */
class __TwigTemplate_0f54e26dbefb6df0aa865d4978c1320602add535b87bf8b4123aeef05f9d45fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'spinner' => array($this, 'block_spinner'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b3951438fa7e896e7005fd63733f5ed7c50114c0db3aa1d891988967d6b8290 = $this->env->getExtension("native_profiler");
        $__internal_4b3951438fa7e896e7005fd63733f5ed7c50114c0db3aa1d891988967d6b8290->enter($__internal_4b3951438fa7e896e7005fd63733f5ed7c50114c0db3aa1d891988967d6b8290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:billing_info_tab.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 3
                echo "        <div class=\"alert alert-error\">
            ";
                // line 4
                echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('spinner', $context, $blocks);
        // line 12
        echo "
<script>
    (function() {
        var _init = function () {
            \$('.btn').on('click', function() {
                var formId = \$(this).closest('[data-controller]').attr('id');
                var spinner = new Spinner(formId);
                spinner.create();
                setTimeout(spinner.hide, 2000);
            })
        };
        \$(document).ready(setTimeout(_init, 30));
    })();
</script>

<div class=\"custom-block calendar-block\">
    <div class=\"custom-head clearfix\">
        <div class=\"custom-menu\">
            <button class=\"up-custom\"></button>
        </div>
        <h3>Account Info</h3>
    </div>
    <div class=\"clearfix\">
        <div id=\"billing-info\" class=\"display-block-persistent\" data-controller=\"leads_display\" data-action=\"leadEvent\">
            <div class=\"form-column\">
                <h4 class=\"company-id\">Company ID : ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "company", array()), "id", array()), "html", null, true);
        echo " </h4><br />
                <div class=\"before-error\"></div>
                <div class=\"before-success\"></div>
                <div class=\"small-table\">
                    <table>
                        <tbody>
                            <tr>
                                <th width=\"15%\">Subscription Status</th>
                                <th width=\"35%\"></th>
                                <th width=\"15%\">Credits</th>
                                <th width=\"35%\"></th>
                            </tr>
                            <tr>
                                <td><b>Product</b></td>
                                <td>
                                    ";
        // line 52
        if ($this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            // line 53
            echo "                                        <input style=\"width:307px;\" type=\"text\" class=\"form-control\" disabled value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "subscriptionProduct", array()), "name", array()), "html", null, true);
            echo "\" >
                                    ";
        } else {
            // line 55
            echo "                                        <select class=\"active-select\" style=\"width: 50%;\" id=\"product\">
                                            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["i"] => $context["product"]) {
                // line 57
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["product"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "subscriptionProduct", array()), "id", array()))) {
                    echo " selected ";
                }
                // line 58
                echo "                                                    data-billingProduct=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\"
                                                    data-billingMRate=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "mRate", array()), "html", null, true);
                echo "\"
                                                    data-billingYRate=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "yRate", array()), "html", null, true);
                echo "\"
                                                >";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo " </option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                                        </select>
                                    ";
        }
        // line 65
        echo "                                </td>
                                <td><b>License</b></td>
                                <td>
                                    ";
        // line 68
        if ($this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            // line 69
            echo "                                        <input style=\"width:307px;\" id=\"billingLicense\" type=\"text\" class=\"form-control\" disabled value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "license", array()), "html", null, true);
            echo "\" >
                                    ";
        } else {
            // line 71
            echo "                                        <select class=\"active-select\" style=\"width: 50%;\" id=\"usersNumber\">
                                            ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 73
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "license", array()))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                                        </select>
                                    ";
        }
        // line 77
        echo "                                </td>
                            </tr>
                            <tr>
                                <td><b>Status</b></td>
                                <td>
                                    <input id=\"billingStatus\" style=\"width:307px;\" type=\"text\" class=\"form-control\" disabled value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "subscriptionStatusString", array()), "html", null, true);
        echo "\" >
                                </td>
                                <td><b>Next payment</b></td>
                                <td>
                                    <input style=\"width:307px;\" id=\"billingCredit\" type=\"text\" class=\"form-control\" disabled value=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "credit", array()), "html", null, true);
        echo "\" >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br />

                <div class=\"small-table\">
                    <table style=\"width:96%;\">
                        <tbody>
                        <tr>
                            <th width=\"15%\">Billing Frequency</th>
                            <th width=\"35%\"></th>
                            <th width=\"15%\">License Info</th>
                            <th width=\"35%\"></th>
                        </tr>
                        <tr>
                            <td><b>This subscription is currently billed</b></td>
                            <td>
                                <input name=\"frequency\" ";
        // line 106
        if ($this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            echo " disabled ";
        }
        echo " type=\"radio\" value=\"0\" ";
        if ( !$this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "frequency", array())) {
            echo " checked ";
        }
        echo "/>Monthly
                            </td>
                            <td><b>Effective Date</b></td>
                            <td>
                                <input id=\"effectiveDate\" disabled type=\"text\"  value=\"";
        // line 110
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "effectiveDate", array()), "M d, Y"), "html", null, true);
        echo "\" class=\"form-control datepicker\" name=\"date\"/>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input name=\"frequency\" ";
        // line 116
        if ($this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            echo " disabled ";
        }
        echo " type=\"radio\" value=\"1\" ";
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "frequency", array())) {
            echo " checked ";
        }
        echo "/>Yearly
                            </td>
                            <td><b>Expiration Date</b></td>
                            <td>
                                <input id=\"expirationDate\" disabled type=\"text\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "expirationDate", array()), "M d, Y"), "html", null, true);
        echo "\"
                                class=\"form-control datepicker\" name=\"date\"/>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <br />

                ";
        // line 129
        $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/billing_info_tab_credit_card_info.html.twig", "ZesharCRMCoreBundle:CRUD/DisplayPartial:billing_info_tab.html.twig", 129)->display($context);
        // line 130
        echo "                ";
        $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/billing_info_tab_payment_history.html.twig", "ZesharCRMCoreBundle:CRUD/DisplayPartial:billing_info_tab.html.twig", 130)->display($context);
        // line 131
        echo "            </div>
            ";
        // line 132
        if ( !$this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            // line 133
            echo "                ";
            $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig", "ZesharCRMCoreBundle:CRUD/DisplayPartial:billing_info_tab.html.twig", 133)->display(array_merge($context, array("show_cancel_link" => false, "save_button_title" => "Save")));
            // line 134
            echo "            ";
        }
        // line 135
        echo "
        </div>
    </div>
</div>


";
        
        $__internal_4b3951438fa7e896e7005fd63733f5ed7c50114c0db3aa1d891988967d6b8290->leave($__internal_4b3951438fa7e896e7005fd63733f5ed7c50114c0db3aa1d891988967d6b8290_prof);

    }

    // line 9
    public function block_spinner($context, array $blocks = array())
    {
        $__internal_2aeba961f3e6b9298bbb90bd015def5f33a530e03ef0b47474c05c9f6405e74f = $this->env->getExtension("native_profiler");
        $__internal_2aeba961f3e6b9298bbb90bd015def5f33a530e03ef0b47474c05c9f6405e74f->enter($__internal_2aeba961f3e6b9298bbb90bd015def5f33a530e03ef0b47474c05c9f6405e74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spinner"));

        // line 10
        echo "    ";
        $this->loadTemplate("loading_spinner.html.twig", "ZesharCRMCoreBundle:CRUD/DisplayPartial:billing_info_tab.html.twig", 10)->display($context);
        
        $__internal_2aeba961f3e6b9298bbb90bd015def5f33a530e03ef0b47474c05c9f6405e74f->leave($__internal_2aeba961f3e6b9298bbb90bd015def5f33a530e03ef0b47474c05c9f6405e74f_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:billing_info_tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 10,  297 => 9,  284 => 135,  281 => 134,  278 => 133,  276 => 132,  273 => 131,  270 => 130,  268 => 129,  256 => 120,  243 => 116,  234 => 110,  221 => 106,  198 => 86,  191 => 82,  184 => 77,  180 => 75,  165 => 73,  161 => 72,  158 => 71,  152 => 69,  150 => 68,  145 => 65,  141 => 63,  133 => 61,  129 => 60,  125 => 59,  120 => 58,  113 => 57,  109 => 56,  106 => 55,  100 => 53,  98 => 52,  80 => 37,  53 => 12,  51 => 9,  48 => 8,  35 => 4,  32 => 3,  27 => 2,  23 => 1,);
    }
}
/* {% for label, flashes in app.session.flashbag.all %}*/
/*     {% for flash in flashes %}*/
/*         <div class="alert alert-error">*/
/*             {{ flash }}*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endfor %}*/
/* */
/* {% block spinner %}*/
/*     {% include 'loading_spinner.html.twig' %}*/
/* {% endblock %}*/
/* */
/* <script>*/
/*     (function() {*/
/*         var _init = function () {*/
/*             $('.btn').on('click', function() {*/
/*                 var formId = $(this).closest('[data-controller]').attr('id');*/
/*                 var spinner = new Spinner(formId);*/
/*                 spinner.create();*/
/*                 setTimeout(spinner.hide, 2000);*/
/*             })*/
/*         };*/
/*         $(document).ready(setTimeout(_init, 30));*/
/*     })();*/
/* </script>*/
/* */
/* <div class="custom-block calendar-block">*/
/*     <div class="custom-head clearfix">*/
/*         <div class="custom-menu">*/
/*             <button class="up-custom"></button>*/
/*         </div>*/
/*         <h3>Account Info</h3>*/
/*     </div>*/
/*     <div class="clearfix">*/
/*         <div id="billing-info" class="display-block-persistent" data-controller="leads_display" data-action="leadEvent">*/
/*             <div class="form-column">*/
/*                 <h4 class="company-id">Company ID : {{ object.creator.company.id }} </h4><br />*/
/*                 <div class="before-error"></div>*/
/*                 <div class="before-success"></div>*/
/*                 <div class="small-table">*/
/*                     <table>*/
/*                         <tbody>*/
/*                             <tr>*/
/*                                 <th width="15%">Subscription Status</th>*/
/*                                 <th width="35%"></th>*/
/*                                 <th width="15%">Credits</th>*/
/*                                 <th width="35%"></th>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td><b>Product</b></td>*/
/*                                 <td>*/
/*                                     {% if is_granted('ROLE_ULTRA_ADMIN') %}*/
/*                                         <input style="width:307px;" type="text" class="form-control" disabled value="{{ object.subscriptionProduct.name }}" >*/
/*                                     {% else %}*/
/*                                         <select class="active-select" style="width: 50%;" id="product">*/
/*                                             {% for i,product in products %}*/
/*                                                 <option value="{{ i }}" {% if product.id == object.subscriptionProduct.id %} selected {% endif %}*/
/*                                                     data-billingProduct="{{ product.id }}"*/
/*                                                     data-billingMRate="{{ product.mRate }}"*/
/*                                                     data-billingYRate="{{ product.yRate }}"*/
/*                                                 >{{ product.name }} </option>*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                                 <td><b>License</b></td>*/
/*                                 <td>*/
/*                                     {% if is_granted('ROLE_ULTRA_ADMIN') %}*/
/*                                         <input style="width:307px;" id="billingLicense" type="text" class="form-control" disabled value="{{ object.license }}" >*/
/*                                     {% else %}*/
/*                                         <select class="active-select" style="width: 50%;" id="usersNumber">*/
/*                                             {% for i in 1..15 %}*/
/*                                                 <option value="{{ i }}" {% if i == object.license %} selected {% endif %}>{{ i }}</option>*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td><b>Status</b></td>*/
/*                                 <td>*/
/*                                     <input id="billingStatus" style="width:307px;" type="text" class="form-control" disabled value="{{ object.subscriptionStatusString }}" >*/
/*                                 </td>*/
/*                                 <td><b>Next payment</b></td>*/
/*                                 <td>*/
/*                                     <input style="width:307px;" id="billingCredit" type="text" class="form-control" disabled value="{{ object.credit }}" >*/
/*                                 </td>*/
/*                             </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 <br />*/
/* */
/*                 <div class="small-table">*/
/*                     <table style="width:96%;">*/
/*                         <tbody>*/
/*                         <tr>*/
/*                             <th width="15%">Billing Frequency</th>*/
/*                             <th width="35%"></th>*/
/*                             <th width="15%">License Info</th>*/
/*                             <th width="35%"></th>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td><b>This subscription is currently billed</b></td>*/
/*                             <td>*/
/*                                 <input name="frequency" {% if is_granted('ROLE_ULTRA_ADMIN') %} disabled {% endif %} type="radio" value="0" {% if not object.frequency %} checked {% endif %}/>Monthly*/
/*                             </td>*/
/*                             <td><b>Effective Date</b></td>*/
/*                             <td>*/
/*                                 <input id="effectiveDate" disabled type="text"  value="{{ object.effectiveDate|date('M d, Y') }}" class="form-control datepicker" name="date"/>*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td></td>*/
/*                             <td>*/
/*                                 <input name="frequency" {% if is_granted('ROLE_ULTRA_ADMIN') %} disabled {% endif %} type="radio" value="1" {% if object.frequency %} checked {% endif %}/>Yearly*/
/*                             </td>*/
/*                             <td><b>Expiration Date</b></td>*/
/*                             <td>*/
/*                                 <input id="expirationDate" disabled type="text" value="{{ object.expirationDate|date('M d, Y') }}"*/
/*                                 class="form-control datepicker" name="date"/>*/
/*                             </td>*/
/*                         </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 <br />*/
/* */
/*                 {% include('ZesharCRMCoreBundle:CRUD:DisplayPartial/billing_info_tab_credit_card_info.html.twig') %}*/
/*                 {% include('ZesharCRMCoreBundle:CRUD:DisplayPartial/billing_info_tab_payment_history.html.twig') %}*/
/*             </div>*/
/*             {% if not is_granted('ROLE_ULTRA_ADMIN') %}*/
/*                 {% include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig') with {'show_cancel_link': false, 'save_button_title': 'Save'} %}*/
/*             {% endif %}*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
