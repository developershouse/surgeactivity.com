<?php

/* ZesharCRMCoreBundle:Goal:index.html.twig */
class __TwigTemplate_dc8ace70419c15443a9e890cd217f57626a141ff963edb181d0d2c57a8d2981f extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success_message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "    <div class=\"alert alert-success\">
        ";
            // line 3
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "<ul>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 8
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    <table>
        <tr>
            <td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'label');
        echo "</td>
            <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'label');
        echo "</td>
            <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'label');
        echo "</td>
            <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "goalCategory", array()), 'label');
        echo "</td>
            <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "goalCategory", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "estimated", array()), 'label');
        echo "</td>
            <td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "estimated", array()), 'widget');
        echo "</td>
        </tr>

        ";
        // line 34
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "users", array(), "any", true, true)) {
            // line 35
            echo "        <tr>
            <td>";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "users", array()), 'label');
            echo "</td>
            <td>";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "users", array()), 'widget');
            echo "</td>
        </tr>
        ";
        }
        // line 40
        echo "
        <tr>
            <td></td>
            <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "create", array()), 'widget');
        echo "</td>
        </tr>
    </table>
";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Goal:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 46,  130 => 43,  125 => 40,  119 => 37,  115 => 36,  112 => 35,  110 => 34,  104 => 31,  100 => 30,  94 => 27,  90 => 26,  84 => 23,  80 => 22,  74 => 19,  70 => 18,  64 => 15,  60 => 14,  54 => 11,  51 => 10,  42 => 8,  38 => 7,  35 => 6,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for flashMessage in app.session.flashbag.get('success_message') %}*/
/*     <div class="alert alert-success">*/
/*         {{ flashMessage }}*/
/*     </div>*/
/* {% endfor %}*/
/* <ul>*/
/*     {% for error in errors %}*/
/*         <li>{{ error.message }}</li>*/
/*     {% endfor %}*/
/* </ul>*/
/* {{ form_start(form) }}*/
/*     <table>*/
/*         <tr>*/
/*             <td>{{ form_label(form.title) }}</td>*/
/*             <td>{{ form_widget(form.title) }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>{{ form_label(form.description) }}</td>*/
/*             <td>{{ form_widget(form.description) }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>{{ form_label(form.type) }}</td>*/
/*             <td>{{ form_widget(form.type) }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>{{ form_label(form.goalCategory) }}</td>*/
/*             <td>{{ form_widget(form.goalCategory) }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>{{ form_label(form.estimated) }}</td>*/
/*             <td>{{ form_widget(form.estimated) }}</td>*/
/*         </tr>*/
/* */
/*         {% if form.users  is defined %}*/
/*         <tr>*/
/*             <td>{{ form_label(form.users) }}</td>*/
/*             <td>{{ form_widget(form.users) }}</td>*/
/*         </tr>*/
/*         {% endif %}*/
/* */
/*         <tr>*/
/*             <td></td>*/
/*             <td>{{ form_widget(form.create) }}</td>*/
/*         </tr>*/
/*     </table>*/
/* {{ form_end(form) }}*/
/* */
