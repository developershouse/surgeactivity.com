<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:quote_show_processing.html.twig */
class __TwigTemplate_f2aa25363d63bb3c1d654a2f9c00369d84953deeb5cca74088d0c8f09d4db424 extends Twig_Template
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
        $__internal_d6028a20f1dc74be447e974c95a886be33d876b66015fa7dd5759312c65d2373 = $this->env->getExtension("native_profiler");
        $__internal_d6028a20f1dc74be447e974c95a886be33d876b66015fa7dd5759312c65d2373->enter($__internal_d6028a20f1dc74be447e974c95a886be33d876b66015fa7dd5759312c65d2373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:quote_show_processing.html.twig"));

        // line 1
        echo "<div class=\"custom-block\">
    <div class=\"custom-head clearfix\">
        <h3>Processing</h3>
    </div>
    <script type=\"text/javascript\">
        (function(\$) {
            \$(document).ready(function() {
                \$('#lead_event_create').on('block-data-validate', function(e, params) {
                    var values = params.values;

                    //var eventDate = new Date(eventDate);
                    // @TODO check past date/time

                });
                \$('#lead_processing_save').on('block-ajax-return', function(e, serverResponse) {
//                    var serverResponseObject = JSON.parse(serverResponse);
//                    var redirectUrl = serverResponseObject.redirectUrl;
//                    var sold = serverResponseObject.sold;
//                    console.log(redirectUrl);
//                    //console.log('ajax response', serverResponse);
//                    \$(this).find('input').not('[type=\"hidden\"]').val('').trigger('change');
//                    if (!sold) {
//                        if (redirectUrl) {
//                            window.location.replace(redirectUrl);
//                        } else {
//                            window.location.reload(); // todo - insert data without reload
//                        }
//                    }
                    \$(this).find('input').not('[type=\"hidden\"]').val('').trigger('change');
                    window.location.reload(); // todo - insert data without reload

                });

//                \$('button.btn-green-border').parents('form').on('submit', function(e){
//                    e.preventDefault();
//                    e.stopPropagation();
//                    return false;
//                })


            });
        })(jQuery);
    </script>
    <div id=\"lead_processing_save\" class=\"form-column display-block-persistent\" data-controller=\"leads_display\" data-action=\"leadProcessing\">
        <form>
            <div class=\"form-inline form-inline-processing\">
                <div class=\"form-group opportunity-processing-inline-select\">
                    ";
        // line 48
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 49
            echo "                        ";
            $context["disabled"] = false;
            // line 50
            echo "                    ";
        } else {
            // line 51
            echo "                        ";
            $context["disabled"] = true;
            // line 52
            echo "                    ";
        }
        // line 53
        echo "                    <label for=\"asign\">Asignee</label>
                    ";
        // line 54
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:assigneeSelect", array("activeId" => (( !twig_test_empty($this->getAttribute(        // line 55
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getAssignee", array(), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getAssignee", array(), "method"), "getId", array(), "method")) : (null)), "disabled" =>         // line 56
(isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")))));
        // line 57
        echo "
                    <input type=\"hidden\" id=\"lead_id\" name=\"lead_id\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getId", array(), "method"), "html", null, true);
        echo "\" />
                </div>
                <div class=\"form-group opportunity-processing-inline-select\">
                    <label for=\"compaign\">Priority</label>
                    ";
        // line 62
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:prioritySelect", array("activeValue" => (( !twig_test_empty($this->getAttribute(        // line 63
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getPriority", array(), "method"))) ? ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getPriority", array(), "method")) : (null)))));
        // line 64
        echo "
                </div>
            </div>
            ";
        // line 67
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getLabel", array(), "method") == "Lead")) {
            // line 68
            echo "                <div class=\"form-group\">
                    <p class=\"label-type\">Status</p>
                    <div class=\"clearfix\">
                        ";
            // line 71
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadStatusSelect", array("activeValue" => $this->getAttribute(            // line 72
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getType", array(), "method"))));
            // line 73
            echo "
                    </div>
                </div>
            ";
        }
        // line 77
        echo "            ";
        $context["score"] = $this->getAttribute((isset($context["lead_subject"]) ? $context["lead_subject"] : $this->getContext($context, "lead_subject")), "getLeadScoringByLead", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method");
        // line 78
        echo "            ";
        if ( !twig_test_empty((isset($context["score"]) ? $context["score"] : $this->getContext($context, "score")))) {
            // line 79
            echo "                <div class=\"form-horizontal\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-3\">Lead Score</label>
                        <div class=\"col-sm-6\">
                            ";
            // line 83
            $this->loadTemplate("ZesharCRMCoreBundle:FormItems:opportunity_show_score.html.twig", "ZesharCRMCoreBundle:CRUD/DisplayPartial:quote_show_processing.html.twig", 83)->display(array_merge($context, array("value" => $this->getAttribute((isset($context["score"]) ? $context["score"] : $this->getContext($context, "score")), "getTotal", array(), "method"))));
            // line 84
            echo "                        </div>

                    </div>
                </div>
            ";
        }
        // line 89
        echo "
            <div class=\"form-group\">
                <p class=\"label-type\">Lead Status</p>
                <div class=\"clearfix\">
                    ";
        // line 93
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadStatusSelect", array("activeValue" => $this->getAttribute($this->getAttribute(        // line 94
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLead", array(), "method"), "getType", array(), "method"))));
        // line 95
        echo "
                </div>
            </div>
            <div class=\"form-inline\">
                <div class=\"form-group opportunity-processing-inline-select\">
                    <label>Closing date</label>
                    <input type=\"text\" name=\"closing_date\" class=\"form-control datepicker-processing\" id=\"dp1413988887500\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getClosingDate", array(), "method"), "M d, Y"), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group opportunity-processing-inline-select\">
                    <label>Effective date</label>
                    <input type=\"text\" name=\"effective_date\" class=\"form-control datepicker-processing\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getEffectiveDate", array(), "method"), "M d, Y"), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <label for=\"compaign\">Product</label>
                    ";
        // line 111
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadCategorySelect", array("activeId" => (( !twig_test_empty($this->getAttribute(        // line 112
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadCategory", array(), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadCategory", array(), "method"), "getId", array(), "method")) : (null)))));
        // line 113
        echo "
                </div>
                <div class=\"col-md-4\">
                    <label>Quantity</label>
                    <input type=\"text\" name=\"quantity\" class=\"form-control\" id=\"lead_opportunity_quantity\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "quantity", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-md-4\">
                    <label>Amount</label>
                    <input type=\"text\" name=\"amount\" class=\"form-control\" id=\"lead_opportunity_amount\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "quotedAmount", array()), "html", null, true);
        echo "\" />
                </div>
            </div>

            ";
        // line 125
        if ( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getContactCard", array(), "method"))) {
            // line 126
            echo "                ";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getContactCard", array(), "method"), "getContacts", array(), "method"))) {
                // line 127
                echo "                    <div class=\"form-group row\">
                        <div class=\"col-md-6\">
                            <label for=\"type3\">Contact Type</label>
                            ";
                // line 130
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:contactTypeSelect", array("activeValue" => $this->getAttribute($this->getAttribute(                // line 131
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getContactCard", array(), "method"), "getContacts", array(), "method"))));
                // line 132
                echo "
                        </div>

                        <div class=\"col-md-6\">
                            <label for=\"type3\">Contact Result</label>
                            ";
                // line 137
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:contactResultSelect", array()));
                // line 138
                echo "
                        </div>
                    </div>
                ";
            }
            // line 142
            echo "            ";
        }
        // line 143
        echo "            
            <input type=\"hidden\" id=\"lead_id\" name=\"lead_id\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getId", array(), "method"), "html", null, true);
        echo "\" />
            ";
        // line 145
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig");
        echo "
        </form>
    </div>
</div>
";
        
        $__internal_d6028a20f1dc74be447e974c95a886be33d876b66015fa7dd5759312c65d2373->leave($__internal_d6028a20f1dc74be447e974c95a886be33d876b66015fa7dd5759312c65d2373_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:quote_show_processing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 145,  237 => 144,  234 => 143,  231 => 142,  225 => 138,  223 => 137,  216 => 132,  214 => 131,  213 => 130,  208 => 127,  205 => 126,  203 => 125,  196 => 121,  189 => 117,  183 => 113,  181 => 112,  180 => 111,  171 => 105,  164 => 101,  156 => 95,  154 => 94,  153 => 93,  147 => 89,  140 => 84,  138 => 83,  132 => 79,  129 => 78,  126 => 77,  120 => 73,  118 => 72,  117 => 71,  112 => 68,  110 => 67,  105 => 64,  103 => 63,  102 => 62,  95 => 58,  92 => 57,  90 => 56,  89 => 55,  88 => 54,  85 => 53,  82 => 52,  79 => 51,  76 => 50,  73 => 49,  71 => 48,  22 => 1,);
    }
}
/* <div class="custom-block">*/
/*     <div class="custom-head clearfix">*/
/*         <h3>Processing</h3>*/
/*     </div>*/
/*     <script type="text/javascript">*/
/*         (function($) {*/
/*             $(document).ready(function() {*/
/*                 $('#lead_event_create').on('block-data-validate', function(e, params) {*/
/*                     var values = params.values;*/
/* */
/*                     //var eventDate = new Date(eventDate);*/
/*                     // @TODO check past date/time*/
/* */
/*                 });*/
/*                 $('#lead_processing_save').on('block-ajax-return', function(e, serverResponse) {*/
/* //                    var serverResponseObject = JSON.parse(serverResponse);*/
/* //                    var redirectUrl = serverResponseObject.redirectUrl;*/
/* //                    var sold = serverResponseObject.sold;*/
/* //                    console.log(redirectUrl);*/
/* //                    //console.log('ajax response', serverResponse);*/
/* //                    $(this).find('input').not('[type="hidden"]').val('').trigger('change');*/
/* //                    if (!sold) {*/
/* //                        if (redirectUrl) {*/
/* //                            window.location.replace(redirectUrl);*/
/* //                        } else {*/
/* //                            window.location.reload(); // todo - insert data without reload*/
/* //                        }*/
/* //                    }*/
/*                     $(this).find('input').not('[type="hidden"]').val('').trigger('change');*/
/*                     window.location.reload(); // todo - insert data without reload*/
/* */
/*                 });*/
/* */
/* //                $('button.btn-green-border').parents('form').on('submit', function(e){*/
/* //                    e.preventDefault();*/
/* //                    e.stopPropagation();*/
/* //                    return false;*/
/* //                })*/
/* */
/* */
/*             });*/
/*         })(jQuery);*/
/*     </script>*/
/*     <div id="lead_processing_save" class="form-column display-block-persistent" data-controller="leads_display" data-action="leadProcessing">*/
/*         <form>*/
/*             <div class="form-inline form-inline-processing">*/
/*                 <div class="form-group opportunity-processing-inline-select">*/
/*                     {% if is_granted('ROLE_ADMIN') %}*/
/*                         {% set disabled = false %}*/
/*                     {% else %}*/
/*                         {% set disabled = true %}*/
/*                     {% endif %}*/
/*                     <label for="asign">Asignee</label>*/
/*                     {{ render(controller('ZesharCRMCoreBundle:FormItems:assigneeSelect', {*/
/*                     'activeId': object.getAssignee() is not empty ? object.getAssignee().getId() : null,*/
/*                     'disabled': disabled*/
/*                     })) }}*/
/*                     <input type="hidden" id="lead_id" name="lead_id" value="{{ object.getId() }}" />*/
/*                 </div>*/
/*                 <div class="form-group opportunity-processing-inline-select">*/
/*                     <label for="compaign">Priority</label>*/
/*                     {{ render(controller('ZesharCRMCoreBundle:FormItems:prioritySelect', {*/
/*                     'activeValue': object.getPriority() is not empty ? object.getPriority() : null*/
/*                     })) }}*/
/*                 </div>*/
/*             </div>*/
/*             {% if admin.getLabel() == 'Lead' %}*/
/*                 <div class="form-group">*/
/*                     <p class="label-type">Status</p>*/
/*                     <div class="clearfix">*/
/*                         {{ render(controller('ZesharCRMCoreBundle:FormItems:leadStatusSelect', {*/
/*                         'activeValue': object.getType()*/
/*                         })) }}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% set score = lead_subject.getLeadScoringByLead(object) %}*/
/*             {% if score is not empty %}*/
/*                 <div class="form-horizontal">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3">Lead Score</label>*/
/*                         <div class="col-sm-6">*/
/*                             {% include('ZesharCRMCoreBundle:FormItems:opportunity_show_score.html.twig') with {'value': score.getTotal()} %}*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             <div class="form-group">*/
/*                 <p class="label-type">Lead Status</p>*/
/*                 <div class="clearfix">*/
/*                     {{ render(controller('ZesharCRMCoreBundle:FormItems:leadStatusSelect', {*/
/*                     'activeValue': object.getLead().getType()*/
/*                     })) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-inline">*/
/*                 <div class="form-group opportunity-processing-inline-select">*/
/*                     <label>Closing date</label>*/
/*                     <input type="text" name="closing_date" class="form-control datepicker-processing" id="dp1413988887500" value="{{ object.getClosingDate()|date('M d, Y') }}">*/
/*                 </div>*/
/*                 <div class="form-group opportunity-processing-inline-select">*/
/*                     <label>Effective date</label>*/
/*                     <input type="text" name="effective_date" class="form-control datepicker-processing" value="{{ object.getEffectiveDate()|date('M d, Y') }}">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-md-4">*/
/*                     <label for="compaign">Product</label>*/
/*                     {{ render(controller('ZesharCRMCoreBundle:FormItems:leadCategorySelect', {*/
/*                     'activeId': object.getLeadCategory() is not empty ? object.getLeadCategory().getId() : NULL*/
/*                     })) }}*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <label>Quantity</label>*/
/*                     <input type="text" name="quantity" class="form-control" id="lead_opportunity_quantity" value="{{ object.quantity }}">*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <label>Amount</label>*/
/*                     <input type="text" name="amount" class="form-control" id="lead_opportunity_amount" value="{{ object.quotedAmount }}" />*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {% if object.getContactCard() is not empty %}*/
/*                 {% if object.getContactCard().getContacts() is not empty %}*/
/*                     <div class="form-group row">*/
/*                         <div class="col-md-6">*/
/*                             <label for="type3">Contact Type</label>*/
/*                             {{ render(controller('ZesharCRMCoreBundle:FormItems:contactTypeSelect', {*/
/*                             'activeValue': object.getContactCard().getContacts()*/
/*                             })) }}*/
/*                         </div>*/
/* */
/*                         <div class="col-md-6">*/
/*                             <label for="type3">Contact Result</label>*/
/*                             {{ render(controller('ZesharCRMCoreBundle:FormItems:contactResultSelect', {*/
/*                             })) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*             */
/*             <input type="hidden" id="lead_id" name="lead_id" value="{{ object.getId() }}" />*/
/*             {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig') }}*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* */
