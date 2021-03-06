<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:create_account_tab.html.twig */
class __TwigTemplate_e9e48863e41dabcac02c1608f1d2e1c811006a8c70d636612c6b786195e85f93 extends Twig_Template
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
        // line 1
        echo "
";
        // line 2
        $context["currentYear"] = twig_date_format_filter($this->env, "now", "Y");
        // line 3
        $context["maxYear"] = ((isset($context["currentYear"]) ? $context["currentYear"] : null) + 7);
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "successMsg"), "method")) {
            // line 6
            echo "    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "successMsg"), "method"), "html", null, true);
            echo "
    </div>
";
        }
        // line 11
        echo "

<div class=\"custom-block calendar-block\">
    <div class=\"custom-head clearfix\">
        <div class=\"custom-menu\">
            <button class=\"up-custom\"></button>
        </div>
        <h3>Create Account</h3>
    </div>
    <div class=\"clearfix\">
        <div id=\"account-info-create\" class=\"display-block-persistent\" data-controller=\"leads_display\" data-action=\"leadEvent\">
            <form>
                <div class=\"form-column\">
                    <div class=\"before-error\"></div>
                    <div class=\"small-table\">
                        <table>
                            <tbody>
                                <tr>
                                    <th width=\"50%\">Personal Info </th>
                                    <th width=\"50%\"></th>
                                </tr>
                                <tr>
                                    <td><input id=\"firstName\" class=\"form-control\" type=\"text\" placeholder=\"First Name\" /></td>
                                    <td><input id=\"lastName\" class=\"form-control\" type=\"text\" placeholder=\"Last Name\" /></td>
                                </tr>
                                <tr>
                                    <td><input id=\"userName\" class=\"form-control\" type=\"text\" placeholder=\"User Name\" /></td>
                                    <td><input id=\"email\" class=\"form-control\" type=\"email\" placeholder=\"Email Address\" /></td>
                                </tr>
                            </tbody>
                        </table>

                        <table>
                            <tbody>
                            <tr>
                                <th width=\"50%\">Company Information </th>
                                <th width=\"25%\"></th>
                                <th width=\"25%\"></th>
                            </tr>
                            <tr>
                                <td><input id=\"companyName\" class=\"form-control\" type=\"text\" placeholder=\"Company Name\" /></td>
                                <td><input id=\"phone\" class=\"form-control\" type=\"text\" placeholder=\"Phone\" /></td>
                                <td><input id=\"ext\" class=\"form-control\" type=\"text\" placeholder=\"Ext\" /></td>
                            </tr>
                            <tr>
                                <td>              <input id=\"address1\" class=\"form-control\" type=\"text\" placeholder=\"Address Line 1\" /></td>
                                <td colspan = \"2\"><input id=\"address2\" class=\"form-control\" type=\"text\" placeholder=\"Address Line 2\" /></td>
                            </tr>
                            <tr>
                                <td>              <input id=\"city\" class=\"form-control\" type=\"text\" placeholder=\"City\" /></td>
                                <td colspan = \"2\"><input id=\"state\" class=\"form-control\" type=\"text\" placeholder=\"State\" /></td>
                            </tr>
                            <tr>
                                <td>              <input id=\"postalCode\" class=\"form-control digits\" type=\"text\" placeholder=\"Postal Code\" /><span class=\"errmsg\"></span></td>
                                <td colspan = \"2\"><input id=\"country\" class=\"form-control\" type=\"text\" placeholder=\"Country\" /></td>
                            </tr>
                            <tr>
                                <td>
                                    <select id=\"industry\">
                                        <option disabled selected>Select Your Industry</option>
                                    </select>
                                </td>
                                <td colspan = \"2\">
                                    <select class=\"active-select\" id=\"product\">
                                        <option disabled selected data-mRate=\"\" data-yRate=\"\">Select Your Product</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select id=\"timeZone\">
                                        <option disabled selected>Select Your Time Zone</option>
                                    </select>
                                </td>
                                <td colspan = \"2\">
                                </td>
                            </tr>
                            </tbody>
                        </table>


                        <table>
                            <tbody>
                            <tr>
                                <th colspan=\"2\" >Billing Information  </th>
                                <th colspan=\"2\" width=\"50%\"></th>
                            </tr>
                            <tr>
                                <td style=\"width: 105px;\"><span> Number of users : </span></td>
                                <td>
                                    <select class=\"active-select\" style=\"width: 62%;\" id=\"usersNumber\">
                                        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 103
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                    </select>
                                </td>
                                <td style=\"width: 105px;\"><span> Amount : </span></td>
                                <td>
                                    <input id=\"amount\" style=\"width: 60%;\" type=\"text\" disabled name=\"amount\" class=\"form-control\" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan = \"2\"><input id=\"cardFirstName\" class=\"form-control\" type=\"text\" placeholder=\"Card Holder First Name\" /></td>
                                <td colspan = \"2\"><input id=\"cardLastName\" class=\"form-control\" type=\"text\" placeholder=\"Card Holder Last Name\" /></td>
                            </tr>
                            <tr>
                                <td colspan = \"2\"><input id=\"cardNumber\" class=\"form-control digits\" type=\"text\" placeholder=\"Card Number\" /><span class=\"errmsg\"></span></td>
                                <td colspan = \"2\">
                                    <select id=\"cardType\">
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"width: 105px;\">
                                    <select id=\"month\">
                                        ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 127
            echo "                                            <option value=\"";
            if (($context["i"] < 10)) {
                echo "0";
            }
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">(";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ") ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, (("2012-" . $context["i"]) . "-01")), "M"), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                                    </select>
                                </td>
                                <td>
                                    <select style=\"width: 62%;\" id=\"year\">
                                        ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["currentYear"]) ? $context["currentYear"] : null), (isset($context["maxYear"]) ? $context["maxYear"] : null)));
        foreach ($context['_seq'] as $context["i"] => $context["year"]) {
            // line 134
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                                    </select>
                                </td>
                                <td colspan = \"2\"><input id=\"cardCode\" class=\"form-control digits\" type=\"text\" placeholder=\"Card Security Code\" /><span class=\"errmsg\"></span></td>
                            </tr>
                            <tr>
                                <td colspan=\"2\">
                                    <select class=\"active-select\" id=\"frequency\">
                                        <option value=\"0\">Monthly</option>
                                        <option value=\"1\">Yearly</option>
                                    </select>
                                </td>
                                <td colspan = \"2\">
                                    <input id=\"acceptTerms\" type=\"checkbox\" />
                                    I accept <a href=\"https://surgeactivity.com/terms-and-conditions/\">Terms</a> and <a href=\"https://surgeactivity.com/privacy-policy/\">Private Policy</a
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <br />
                </div>

                <div class=\"show-display-per-block-actions\" style=\"margin-bottom: 15px; margin-left:20px;\">
                    <button class=\"btn-save-block btn btn-green\">Create Account</button>
                </div>
            </form>
        </div>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:create_account_tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 136,  202 => 134,  198 => 133,  192 => 129,  176 => 127,  172 => 126,  149 => 105,  138 => 103,  134 => 102,  41 => 11,  35 => 8,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% set currentYear = "now"|date("Y") %}*/
/* {% set maxYear = currentYear + 7 %}*/
/* */
/* {% if app.session.get('successMsg') %}*/
/*     <div class="alert alert-success alert-dismissible" role="alert">*/
/*         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*         {{app.session.get('successMsg')}}*/
/*     </div>*/
/* {% endif %}*/
/* */
/* */
/* <div class="custom-block calendar-block">*/
/*     <div class="custom-head clearfix">*/
/*         <div class="custom-menu">*/
/*             <button class="up-custom"></button>*/
/*         </div>*/
/*         <h3>Create Account</h3>*/
/*     </div>*/
/*     <div class="clearfix">*/
/*         <div id="account-info-create" class="display-block-persistent" data-controller="leads_display" data-action="leadEvent">*/
/*             <form>*/
/*                 <div class="form-column">*/
/*                     <div class="before-error"></div>*/
/*                     <div class="small-table">*/
/*                         <table>*/
/*                             <tbody>*/
/*                                 <tr>*/
/*                                     <th width="50%">Personal Info </th>*/
/*                                     <th width="50%"></th>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td><input id="firstName" class="form-control" type="text" placeholder="First Name" /></td>*/
/*                                     <td><input id="lastName" class="form-control" type="text" placeholder="Last Name" /></td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td><input id="userName" class="form-control" type="text" placeholder="User Name" /></td>*/
/*                                     <td><input id="email" class="form-control" type="email" placeholder="Email Address" /></td>*/
/*                                 </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/* */
/*                         <table>*/
/*                             <tbody>*/
/*                             <tr>*/
/*                                 <th width="50%">Company Information </th>*/
/*                                 <th width="25%"></th>*/
/*                                 <th width="25%"></th>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td><input id="companyName" class="form-control" type="text" placeholder="Company Name" /></td>*/
/*                                 <td><input id="phone" class="form-control" type="text" placeholder="Phone" /></td>*/
/*                                 <td><input id="ext" class="form-control" type="text" placeholder="Ext" /></td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>              <input id="address1" class="form-control" type="text" placeholder="Address Line 1" /></td>*/
/*                                 <td colspan = "2"><input id="address2" class="form-control" type="text" placeholder="Address Line 2" /></td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>              <input id="city" class="form-control" type="text" placeholder="City" /></td>*/
/*                                 <td colspan = "2"><input id="state" class="form-control" type="text" placeholder="State" /></td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>              <input id="postalCode" class="form-control digits" type="text" placeholder="Postal Code" /><span class="errmsg"></span></td>*/
/*                                 <td colspan = "2"><input id="country" class="form-control" type="text" placeholder="Country" /></td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>*/
/*                                     <select id="industry">*/
/*                                         <option disabled selected>Select Your Industry</option>*/
/*                                     </select>*/
/*                                 </td>*/
/*                                 <td colspan = "2">*/
/*                                     <select class="active-select" id="product">*/
/*                                         <option disabled selected data-mRate="" data-yRate="">Select Your Product</option>*/
/*                                     </select>*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>*/
/*                                     <select id="timeZone">*/
/*                                         <option disabled selected>Select Your Time Zone</option>*/
/*                                     </select>*/
/*                                 </td>*/
/*                                 <td colspan = "2">*/
/*                                 </td>*/
/*                             </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/* */
/* */
/*                         <table>*/
/*                             <tbody>*/
/*                             <tr>*/
/*                                 <th colspan="2" >Billing Information  </th>*/
/*                                 <th colspan="2" width="50%"></th>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td style="width: 105px;"><span> Number of users : </span></td>*/
/*                                 <td>*/
/*                                     <select class="active-select" style="width: 62%;" id="usersNumber">*/
/*                                         {% for i in 1..15 %}*/
/*                                             <option value="{{ i }}">{{ i }}</option>*/
/*                                         {% endfor %}*/
/*                                     </select>*/
/*                                 </td>*/
/*                                 <td style="width: 105px;"><span> Amount : </span></td>*/
/*                                 <td>*/
/*                                     <input id="amount" style="width: 60%;" type="text" disabled name="amount" class="form-control" />*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td colspan = "2"><input id="cardFirstName" class="form-control" type="text" placeholder="Card Holder First Name" /></td>*/
/*                                 <td colspan = "2"><input id="cardLastName" class="form-control" type="text" placeholder="Card Holder Last Name" /></td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td colspan = "2"><input id="cardNumber" class="form-control digits" type="text" placeholder="Card Number" /><span class="errmsg"></span></td>*/
/*                                 <td colspan = "2">*/
/*                                     <select id="cardType">*/
/*                                     </select>*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td style="width: 105px;">*/
/*                                     <select id="month">*/
/*                                         {% for i in 1 .. 12 %}*/
/*                                             <option value="{% if i < 10 %}0{% endif %}{{ i }}">({{ i }}) {{ date('2012-' ~ i ~ '-01') |date('M') }}</option>*/
/*                                         {% endfor %}*/
/*                                     </select>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <select style="width: 62%;" id="year">*/
/*                                         {% for i, year in currentYear .. maxYear %}*/
/*                                             <option value="{{ year }}">{{ year }}</option>*/
/*                                         {% endfor %}*/
/*                                     </select>*/
/*                                 </td>*/
/*                                 <td colspan = "2"><input id="cardCode" class="form-control digits" type="text" placeholder="Card Security Code" /><span class="errmsg"></span></td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td colspan="2">*/
/*                                     <select class="active-select" id="frequency">*/
/*                                         <option value="0">Monthly</option>*/
/*                                         <option value="1">Yearly</option>*/
/*                                     </select>*/
/*                                 </td>*/
/*                                 <td colspan = "2">*/
/*                                     <input id="acceptTerms" type="checkbox" />*/
/*                                     I accept <a href="https://surgeactivity.com/terms-and-conditions/">Terms</a> and <a href="https://surgeactivity.com/privacy-policy/">Private Policy</a*/
/*                                 </td>*/
/*                             </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                     <br />*/
/*                 </div>*/
/* */
/*                 <div class="show-display-per-block-actions" style="margin-bottom: 15px; margin-left:20px;">*/
/*                     <button class="btn-save-block btn btn-green">Create Account</button>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
