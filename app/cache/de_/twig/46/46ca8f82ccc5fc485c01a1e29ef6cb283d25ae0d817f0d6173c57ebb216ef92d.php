<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_3f4e7fd97a965591d79ab34024a2b9a0969189ee530f3ba844a070d69e4d59c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ad2d8d6c9f162974f06038709ec29b6cd6057570c9ee05bf700179f90eb6970 = $this->env->getExtension("native_profiler");
        $__internal_3ad2d8d6c9f162974f06038709ec29b6cd6057570c9ee05bf700179f90eb6970->enter($__internal_3ad2d8d6c9f162974f06038709ec29b6cd6057570c9ee05bf700179f90eb6970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ad2d8d6c9f162974f06038709ec29b6cd6057570c9ee05bf700179f90eb6970->leave($__internal_3ad2d8d6c9f162974f06038709ec29b6cd6057570c9ee05bf700179f90eb6970_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_36cc0cc59c1ea85eb8d685ac23bc330988ab676d5c7134c6276ac336fe1c5ca2 = $this->env->getExtension("native_profiler");
        $__internal_36cc0cc59c1ea85eb8d685ac23bc330988ab676d5c7134c6276ac336fe1c5ca2->enter($__internal_36cc0cc59c1ea85eb8d685ac23bc330988ab676d5c7134c6276ac336fe1c5ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_36cc0cc59c1ea85eb8d685ac23bc330988ab676d5c7134c6276ac336fe1c5ca2->leave($__internal_36cc0cc59c1ea85eb8d685ac23bc330988ab676d5c7134c6276ac336fe1c5ca2_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
