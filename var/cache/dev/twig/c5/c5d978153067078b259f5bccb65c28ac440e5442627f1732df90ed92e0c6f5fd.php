<?php

/* librairieEval/librairieByCategories.html.twig */
class __TwigTemplate_aa213b33349880fd7b1d26857d316d308c83e3bf801ff283e9ee8e4b22a5bc3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "librairieEval/librairieByCategories.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57e292d5649bcbd6411fbe0b8b4333a40e753ee3641dee6e2dccb40b4ac80c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e292d5649bcbd6411fbe0b8b4333a40e753ee3641dee6e2dccb40b4ac80c68->enter($__internal_57e292d5649bcbd6411fbe0b8b4333a40e753ee3641dee6e2dccb40b4ac80c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "librairieEval/librairieByCategories.html.twig"));

        $__internal_01c0be12832130a28756d8dbcd17d7fa285c21027712dc36ce3132476903e560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c0be12832130a28756d8dbcd17d7fa285c21027712dc36ce3132476903e560->enter($__internal_01c0be12832130a28756d8dbcd17d7fa285c21027712dc36ce3132476903e560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "librairieEval/librairieByCategories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57e292d5649bcbd6411fbe0b8b4333a40e753ee3641dee6e2dccb40b4ac80c68->leave($__internal_57e292d5649bcbd6411fbe0b8b4333a40e753ee3641dee6e2dccb40b4ac80c68_prof);

        
        $__internal_01c0be12832130a28756d8dbcd17d7fa285c21027712dc36ce3132476903e560->leave($__internal_01c0be12832130a28756d8dbcd17d7fa285c21027712dc36ce3132476903e560_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a91c6ac816c5ad288075f7c7bf811cf366b7389edaa579a00835b29a23f24490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91c6ac816c5ad288075f7c7bf811cf366b7389edaa579a00835b29a23f24490->enter($__internal_a91c6ac816c5ad288075f7c7bf811cf366b7389edaa579a00835b29a23f24490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3fc2a7c5911d5c6dea22785d5953a4a9a34fe496041c54a2ecd9e3a924a37e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc2a7c5911d5c6dea22785d5953a4a9a34fe496041c54a2ecd9e3a924a37e44->enter($__internal_3fc2a7c5911d5c6dea22785d5953a4a9a34fe496041c54a2ecd9e3a924a37e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <ul class=\"nav nav-pills\">
                <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\"><i class=\"fas fa-home\"></i></a></li>
            </ul>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <h1>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "name", array()), "html", null, true);
        echo "</h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"row\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "livres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 21
            echo "                    <div class=\"col-sm-4\">
                        <div class=\"thumbnail\">
                            <img src=\"http://dummyimage.com/400x400/000/fff.jpg&text=";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "name", array()), "html", null, true);
            echo "\" alt=\"cover\" class=\"img-fluid\" />
                            <div class=\"caption\">
                                <h3>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "name", array()), "html", null, true);
            echo "</h3>
                                <p>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "author", array()), "html", null, true);
            echo "</p>
                                <p><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("livre.id", array("id" => $this->getAttribute($context["livre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Details</a></p>
                            </div>
                        </div>
                    </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </div></div></div></div>
        ";
        
        $__internal_3fc2a7c5911d5c6dea22785d5953a4a9a34fe496041c54a2ecd9e3a924a37e44->leave($__internal_3fc2a7c5911d5c6dea22785d5953a4a9a34fe496041c54a2ecd9e3a924a37e44_prof);

        
        $__internal_a91c6ac816c5ad288075f7c7bf811cf366b7389edaa579a00835b29a23f24490->leave($__internal_a91c6ac816c5ad288075f7c7bf811cf366b7389edaa579a00835b29a23f24490_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6a8b1ad4ee6500c77105bd28979e13cf23805301612eef57fa7737efbbccdc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a8b1ad4ee6500c77105bd28979e13cf23805301612eef57fa7737efbbccdc1->enter($__internal_a6a8b1ad4ee6500c77105bd28979e13cf23805301612eef57fa7737efbbccdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5e0469cd11dfe54f11d337bbea35df7447c9463a7fda03562030f3fa4af4b659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0469cd11dfe54f11d337bbea35df7447c9463a7fda03562030f3fa4af4b659->enter($__internal_5e0469cd11dfe54f11d337bbea35df7447c9463a7fda03562030f3fa4af4b659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5e0469cd11dfe54f11d337bbea35df7447c9463a7fda03562030f3fa4af4b659->leave($__internal_5e0469cd11dfe54f11d337bbea35df7447c9463a7fda03562030f3fa4af4b659_prof);

        
        $__internal_a6a8b1ad4ee6500c77105bd28979e13cf23805301612eef57fa7737efbbccdc1->leave($__internal_a6a8b1ad4ee6500c77105bd28979e13cf23805301612eef57fa7737efbbccdc1_prof);

    }

    public function getTemplateName()
    {
        return "librairieEval/librairieByCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  103 => 32,  92 => 27,  88 => 26,  84 => 25,  79 => 23,  75 => 21,  71 => 20,  62 => 14,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <ul class=\"nav nav-pills\">
                <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\"><i class=\"fas fa-home\"></i></a></li>
            </ul>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <h1>{{ results.name }}</h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"row\">
            {% for livre in results.livres %}
                    <div class=\"col-sm-4\">
                        <div class=\"thumbnail\">
                            <img src=\"http://dummyimage.com/400x400/000/fff.jpg&text={{ livre.name }}\" alt=\"cover\" class=\"img-fluid\" />
                            <div class=\"caption\">
                                <h3>{{ livre.name }}</h3>
                                <p>{{ livre.author }}</p>
                                <p><a href=\"{{ url('livre.id',{ 'id' : livre.id } ) }}\" class=\"btn btn-primary\">Details</a></p>
                            </div>
                        </div>
                    </div>
            {% endfor %}
            </div></div></div></div>
        {% endblock %}
{% block javascripts %}{% endblock %}", "librairieEval/librairieByCategories.html.twig", "C:\\formation\\app\\Resources\\views\\librairieEval\\librairieByCategories.html.twig");
    }
}
