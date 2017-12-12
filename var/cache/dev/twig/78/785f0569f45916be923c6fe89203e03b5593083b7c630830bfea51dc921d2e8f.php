<?php

/* librairieEval/librairieCategories.html.twig */
class __TwigTemplate_09de5cce9c7059fdb7d741adf2d27724bfe19d2f56f99c5df8a9d055abd81867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "librairieEval/librairieCategories.html.twig", 1);
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
        $__internal_419f9612cc7d4c26a3c43bb744e84e10725c593ff5837126c93936268581bacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_419f9612cc7d4c26a3c43bb744e84e10725c593ff5837126c93936268581bacc->enter($__internal_419f9612cc7d4c26a3c43bb744e84e10725c593ff5837126c93936268581bacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "librairieEval/librairieCategories.html.twig"));

        $__internal_2a228465facad1fd395fc04a3cf7d496a87d0568c867f4ac2f8658bde138f88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a228465facad1fd395fc04a3cf7d496a87d0568c867f4ac2f8658bde138f88b->enter($__internal_2a228465facad1fd395fc04a3cf7d496a87d0568c867f4ac2f8658bde138f88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "librairieEval/librairieCategories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_419f9612cc7d4c26a3c43bb744e84e10725c593ff5837126c93936268581bacc->leave($__internal_419f9612cc7d4c26a3c43bb744e84e10725c593ff5837126c93936268581bacc_prof);

        
        $__internal_2a228465facad1fd395fc04a3cf7d496a87d0568c867f4ac2f8658bde138f88b->leave($__internal_2a228465facad1fd395fc04a3cf7d496a87d0568c867f4ac2f8658bde138f88b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f56849b484c1f682fc03806d7dd2611234658e7edc9ad6e83da0400a0b6d9c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56849b484c1f682fc03806d7dd2611234658e7edc9ad6e83da0400a0b6d9c0b->enter($__internal_f56849b484c1f682fc03806d7dd2611234658e7edc9ad6e83da0400a0b6d9c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_651ddd6a976c8d55cb5b0b423f9aa75a91a02f1f834ef9cbb54cff3415f1276b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651ddd6a976c8d55cb5b0b423f9aa75a91a02f1f834ef9cbb54cff3415f1276b->enter($__internal_651ddd6a976c8d55cb5b0b423f9aa75a91a02f1f834ef9cbb54cff3415f1276b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <h1>Evaluation du 12 décembre 2017  </h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"jumbotron\">
                <h1>Welcome !</h1>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"page-header\">
                <h1>Categories</h1>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <p>
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 28
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("category.id", array("id" => $this->getAttribute($context["value"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array()), "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </p></div></div>

        <body>

        ";
        
        $__internal_651ddd6a976c8d55cb5b0b423f9aa75a91a02f1f834ef9cbb54cff3415f1276b->leave($__internal_651ddd6a976c8d55cb5b0b423f9aa75a91a02f1f834ef9cbb54cff3415f1276b_prof);

        
        $__internal_f56849b484c1f682fc03806d7dd2611234658e7edc9ad6e83da0400a0b6d9c0b->leave($__internal_f56849b484c1f682fc03806d7dd2611234658e7edc9ad6e83da0400a0b6d9c0b_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23aaa8a677b3d29de60fcf24fb9c281d396cf1bf07f0bb37e6d89315ec67415a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23aaa8a677b3d29de60fcf24fb9c281d396cf1bf07f0bb37e6d89315ec67415a->enter($__internal_23aaa8a677b3d29de60fcf24fb9c281d396cf1bf07f0bb37e6d89315ec67415a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e31d39d1d3945d4bd4f9abd5e6f2d424889e998500d88e8470ff32629b0c0f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31d39d1d3945d4bd4f9abd5e6f2d424889e998500d88e8470ff32629b0c0f71->enter($__internal_e31d39d1d3945d4bd4f9abd5e6f2d424889e998500d88e8470ff32629b0c0f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e31d39d1d3945d4bd4f9abd5e6f2d424889e998500d88e8470ff32629b0c0f71->leave($__internal_e31d39d1d3945d4bd4f9abd5e6f2d424889e998500d88e8470ff32629b0c0f71_prof);

        
        $__internal_23aaa8a677b3d29de60fcf24fb9c281d396cf1bf07f0bb37e6d89315ec67415a->leave($__internal_23aaa8a677b3d29de60fcf24fb9c281d396cf1bf07f0bb37e6d89315ec67415a_prof);

    }

    public function getTemplateName()
    {
        return "librairieEval/librairieCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  90 => 30,  79 => 28,  75 => 27,  50 => 4,  41 => 3,  11 => 1,);
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
            <h1>Evaluation du 12 décembre 2017  </h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"jumbotron\">
                <h1>Welcome !</h1>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"page-header\">
                <h1>Categories</h1>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <p>
            {% for value in results %}
                    <a  href=\"{{ url('category.id',{ 'id' : value.id } ) }}\"class=\"btn btn-primary\">{{  value.name }}</a>
            {% endfor %}
            </p></div></div>

        <body>

        {% endblock %}
{% block javascripts %}{% endblock %}", "librairieEval/librairieCategories.html.twig", "C:\\formation\\app\\Resources\\views\\librairieEval\\librairieCategories.html.twig");
    }
}
