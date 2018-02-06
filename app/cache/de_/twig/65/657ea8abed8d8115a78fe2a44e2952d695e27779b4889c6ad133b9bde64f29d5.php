<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:billing_info_tab_credit_card_info.html.twig */
class __TwigTemplate_e23e897b5fb9989a715a57cbbe0aaa9852c35aed56cc42d6301a1eee72fa5c67 extends Twig_Template
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
        $__internal_72e11145e7e805ee619e0175630e76feaa3a4a061d5439df2bafb07caa943957 = $this->env->getExtension("native_profiler");
        $__internal_72e11145e7e805ee619e0175630e76feaa3a4a061d5439df2bafb07caa943957->enter($__internal_72e11145e7e805ee619e0175630e76feaa3a4a061d5439df2bafb07caa943957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:billing_info_tab_credit_card_info.html.twig"));

        // line 1
        echo "<div class=\"small-table left-couple\">
    <table>
        <tbody>
            <tr>
                <th width=\"65%\">Credit Card Info</th>
                <th width=\"35%\"></th>
            </tr>
            <tr>
                <td>
                    <select id=\"creditCard\" ";
        // line 10
        if ( !$this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            echo " disabled ";
        }
        echo ">
                        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cards"]) ? $context["cards"] : $this->getContext($context, "cards")));
        foreach ($context['_seq'] as $context["i"] => $context["type"]) {
            // line 12
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "creditCards", array()), 0, array(), "array"), "type", array()) == $context["i"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                    </select>
                </td>
                <td>
                    <b>Billing Address</b>
                </td>
            </tr>
            <tr>
                <td>
                    <span class=\"red\">*</span>
                    <b>Name on card</b>
                    <input id=\"creditCardName\" class=\"form-control\" type=\"text\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "creditCards", array()), 0, array(), "array"), "name", array()), "html", null, true);
        echo "\" ";
        if ( !$this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            echo " disabled ";
        }
        echo " />
                </td>
                <td>
                    <span class=\"red\">*</span>
                    <b>Address</b>
                    <input id=\"creditCardAddress\" class=\"form-control\" type=\"text\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "creditCards", array()), 0, array(), "array"), "address", array()), "html", null, true);
        echo "\"  />
                </td>
            </tr>
            <tr>
                <td>
                    <span class=\"red\">*</span>
                    <b>Card number</b>
                    <input id=\"creditCardNumber\" class=\"form-control\" type=\"text\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "creditCards", array()), 0, array(), "array"), "number", array()), "html", null, true);
        echo "\" ";
        if ( !$this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            echo " disabled ";
        }
        echo "/>
                </td>
                <td>
                    <span class=\"red\">*</span>
                    <b>City</b>
                    <input id=\"creditCardCity\" class=\"form-control\" type=\"text\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "creditCards", array()), 0, array(), "array"), "city", array()), "html", null, true);
        echo "\" />
                </td>
            </tr>
            <tr>
                <td>
                    <span class=\"red\">*</span>
                    <b>Expiration month</b>
                    <br/>
                    <input class=\"form-control\" type=\"text\" id=\"creditCardExpirationMonth\" ";
        // line 49
        if ( !$this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            echo " disabled ";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "creditCards", array()), 0, array(), "array"), "expirationDate", array()), "m"), "html", null, true);
        echo "\">
                </td>
                <td>
                    <span class=\"red\">*</span>
                    <b>State</b>
                    <input id=\"creditCardState\" class=\"form-control\" type=\"text\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "creditCards", array()), 0, array(), "array"), "state", array()), "html", null, true);
        echo "\"  />
                </td>
            </tr>
            <tr>
                <td>
                    <span class=\"red\">*</span>
                    <b>Expiration year</b>
                    <br/>
                    <input class=\"form-control\" type=\"text\" id=\"creditCardExpirationYear\" ";
        // line 62
        if ( !$this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            echo " disabled ";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "creditCards", array()), 0, array(), "array"), "expirationDate", array()), "Y"), "html", null, true);
        echo "\">
                </td>
                <td>
                    <span class=\"red\">*</span>
                    <b>Zip code</b>
                    <input id=\"creditCardZip\" class=\"form-control\" type=\"text\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "creditCards", array()), 0, array(), "array"), "zipCode", array()), "html", null, true);
        echo "\" />
                </td>
            </tr>
        </tbody>
    </table>
</div>";
        
        $__internal_72e11145e7e805ee619e0175630e76feaa3a4a061d5439df2bafb07caa943957->leave($__internal_72e11145e7e805ee619e0175630e76feaa3a4a061d5439df2bafb07caa943957_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:billing_info_tab_credit_card_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 67,  138 => 62,  127 => 54,  115 => 49,  104 => 41,  92 => 36,  82 => 29,  70 => 24,  58 => 14,  43 => 12,  39 => 11,  33 => 10,  22 => 1,);
    }
}
/* <div class="small-table left-couple">*/
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th width="65%">Credit Card Info</th>*/
/*                 <th width="35%"></th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <select id="creditCard" {% if not is_granted('ROLE_ULTRA_ADMIN') %} disabled {% endif %}>*/
/*                         {% for i,type in cards %}*/
/*                             <option value="{{ i }}" {% if object.creator.creditCards[0].type == i %} selected {% endif %}>{{ type }}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 </td>*/
/*                 <td>*/
/*                     <b>Billing Address</b>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <span class="red">*</span>*/
/*                     <b>Name on card</b>*/
/*                     <input id="creditCardName" class="form-control" type="text" value="{{ object.creator.creditCards[0].name }}" {% if not is_granted('ROLE_ULTRA_ADMIN') %} disabled {% endif %} />*/
/*                 </td>*/
/*                 <td>*/
/*                     <span class="red">*</span>*/
/*                     <b>Address</b>*/
/*                     <input id="creditCardAddress" class="form-control" type="text" value="{{object.creator.creditCards[0].address }}"  />*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <span class="red">*</span>*/
/*                     <b>Card number</b>*/
/*                     <input id="creditCardNumber" class="form-control" type="text" value="{{object.creator.creditCards[0].number }}" {% if not is_granted('ROLE_ULTRA_ADMIN') %} disabled {% endif %}/>*/
/*                 </td>*/
/*                 <td>*/
/*                     <span class="red">*</span>*/
/*                     <b>City</b>*/
/*                     <input id="creditCardCity" class="form-control" type="text" value="{{object.creator.creditCards[0].city }}" />*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <span class="red">*</span>*/
/*                     <b>Expiration month</b>*/
/*                     <br/>*/
/*                     <input class="form-control" type="text" id="creditCardExpirationMonth" {% if not is_granted('ROLE_ULTRA_ADMIN') %} disabled {% endif %} value="{{ object.creator.creditCards[0].expirationDate|date('m') }}">*/
/*                 </td>*/
/*                 <td>*/
/*                     <span class="red">*</span>*/
/*                     <b>State</b>*/
/*                     <input id="creditCardState" class="form-control" type="text" value="{{ object.creator.creditCards[0].state }}"  />*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <span class="red">*</span>*/
/*                     <b>Expiration year</b>*/
/*                     <br/>*/
/*                     <input class="form-control" type="text" id="creditCardExpirationYear" {% if not is_granted('ROLE_ULTRA_ADMIN') %} disabled {% endif %} value="{{ object.creator.creditCards[0].expirationDate|date('Y') }}">*/
/*                 </td>*/
/*                 <td>*/
/*                     <span class="red">*</span>*/
/*                     <b>Zip code</b>*/
/*                     <input id="creditCardZip" class="form-control" type="text" value="{{ object.creator.creditCards[0].zipCode }}" />*/
/*                 </td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
