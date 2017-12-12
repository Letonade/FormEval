<?php

/* librairieEval/detail.html.twig */
class __TwigTemplate_e3746963a35d6e1a8ade6a038bd0193c22421aace77120d0f9155fbc87d90c01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "librairieEval/detail.html.twig", 1);
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
        $__internal_154f85ee60c14d9d4dfd2629a7372d71c52b610ad56222dbebb7dd7c4dcfa143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_154f85ee60c14d9d4dfd2629a7372d71c52b610ad56222dbebb7dd7c4dcfa143->enter($__internal_154f85ee60c14d9d4dfd2629a7372d71c52b610ad56222dbebb7dd7c4dcfa143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "librairieEval/detail.html.twig"));

        $__internal_e64a6a638f5845e39e5ba04118d006864fdaa509e607b90ee07ec9d669ca188f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64a6a638f5845e39e5ba04118d006864fdaa509e607b90ee07ec9d669ca188f->enter($__internal_e64a6a638f5845e39e5ba04118d006864fdaa509e607b90ee07ec9d669ca188f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "librairieEval/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_154f85ee60c14d9d4dfd2629a7372d71c52b610ad56222dbebb7dd7c4dcfa143->leave($__internal_154f85ee60c14d9d4dfd2629a7372d71c52b610ad56222dbebb7dd7c4dcfa143_prof);

        
        $__internal_e64a6a638f5845e39e5ba04118d006864fdaa509e607b90ee07ec9d669ca188f->leave($__internal_e64a6a638f5845e39e5ba04118d006864fdaa509e607b90ee07ec9d669ca188f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_272c19e2b05d139574b60adcf434fa314ae14685b4b1005606791af692a31547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_272c19e2b05d139574b60adcf434fa314ae14685b4b1005606791af692a31547->enter($__internal_272c19e2b05d139574b60adcf434fa314ae14685b4b1005606791af692a31547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6f27948c53f0138ca29b8409575a4569653b0744556e708147faffbfb0d09a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f27948c53f0138ca29b8409575a4569653b0744556e708147faffbfb0d09a5->enter($__internal_f6f27948c53f0138ca29b8409575a4569653b0744556e708147faffbfb0d09a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <ul class=\"nav nav-pills\">
                    <li class=\"nav-item blue-text\"><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("categories");
        echo "\" class=\"nav-link\"><i class=\"fas fa-home\"></i>Accueil</a></li>
                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <h1>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "name", array()), "html", null, true);
        echo "</h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"card\">
                <img src=\"http://dummyimage.com/400x400/000/fff.jpg&text=";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "name", array()), "html", null, true);
        echo "\" alt=\"cover\" class=\"img-fluid card-img-left\" />
                <div class=\"card-body\">
                    <p><strong class=\"text-uppercase\">Author :</strong> ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "author", array()), "html", null, true);
        echo "</p>
                    <p><strong class=\"text-uppercase\">Description :</strong> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "decription", array()), "html", null, true);
        echo "</p>
                    <p><strong class=\"text-uppercase\">Publication date :</strong> ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "publication", array()), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_f6f27948c53f0138ca29b8409575a4569653b0744556e708147faffbfb0d09a5->leave($__internal_f6f27948c53f0138ca29b8409575a4569653b0744556e708147faffbfb0d09a5_prof);

        
        $__internal_272c19e2b05d139574b60adcf434fa314ae14685b4b1005606791af692a31547->leave($__internal_272c19e2b05d139574b60adcf434fa314ae14685b4b1005606791af692a31547_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0131a5e027f9110739586e80098ef099ae86412a11117677d9dc509d3f1351b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0131a5e027f9110739586e80098ef099ae86412a11117677d9dc509d3f1351b0->enter($__internal_0131a5e027f9110739586e80098ef099ae86412a11117677d9dc509d3f1351b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f1a567ff6359113ea51c0149bb6837df8e6012d53fbea8ea53624a472cdc2431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a567ff6359113ea51c0149bb6837df8e6012d53fbea8ea53624a472cdc2431->enter($__internal_f1a567ff6359113ea51c0149bb6837df8e6012d53fbea8ea53624a472cdc2431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f1a567ff6359113ea51c0149bb6837df8e6012d53fbea8ea53624a472cdc2431->leave($__internal_f1a567ff6359113ea51c0149bb6837df8e6012d53fbea8ea53624a472cdc2431_prof);

        
        $__internal_0131a5e027f9110739586e80098ef099ae86412a11117677d9dc509d3f1351b0->leave($__internal_0131a5e027f9110739586e80098ef099ae86412a11117677d9dc509d3f1351b0_prof);

    }

    public function getTemplateName()
    {
        return "librairieEval/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 29,  86 => 23,  82 => 22,  78 => 21,  73 => 19,  65 => 14,  56 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
                    <li class=\"nav-item blue-text\"><a href=\"{{ url('categories') }}\" class=\"nav-link\"><i class=\"fas fa-home\"></i>Accueil</a></li>
                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <h1>{{ result.name }}</h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"card\">
                <img src=\"http://dummyimage.com/400x400/000/fff.jpg&text={{ result.name }}\" alt=\"cover\" class=\"img-fluid card-img-left\" />
                <div class=\"card-body\">
                    <p><strong class=\"text-uppercase\">Author :</strong> {{ result.author }}</p>
                    <p><strong class=\"text-uppercase\">Description :</strong> {{ result.decription }}</p>
                    <p><strong class=\"text-uppercase\">Publication date :</strong> {{ result.publication }}</p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}{% endblock %}", "librairieEval/detail.html.twig", "C:\\formation\\app\\Resources\\views\\librairieEval\\detail.html.twig");
    }
}
