<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_0e33bbdaf42410ba75772c1d91e82bf3be1f5a56b8bc04f7735b12db5b5669fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66ad66a8aad75a1f63305281435ab169229b86921bcc3a1b6db7aa42d7decc0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ad66a8aad75a1f63305281435ab169229b86921bcc3a1b6db7aa42d7decc0a->enter($__internal_66ad66a8aad75a1f63305281435ab169229b86921bcc3a1b6db7aa42d7decc0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8629040038e8b7c9cf51a54cc68229bc77a079e9dd470c9dd5df9f22f7bb8900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8629040038e8b7c9cf51a54cc68229bc77a079e9dd470c9dd5df9f22f7bb8900->enter($__internal_8629040038e8b7c9cf51a54cc68229bc77a079e9dd470c9dd5df9f22f7bb8900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66ad66a8aad75a1f63305281435ab169229b86921bcc3a1b6db7aa42d7decc0a->leave($__internal_66ad66a8aad75a1f63305281435ab169229b86921bcc3a1b6db7aa42d7decc0a_prof);

        
        $__internal_8629040038e8b7c9cf51a54cc68229bc77a079e9dd470c9dd5df9f22f7bb8900->leave($__internal_8629040038e8b7c9cf51a54cc68229bc77a079e9dd470c9dd5df9f22f7bb8900_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f1bf96c543fce72aa5b056387ae2d8da68c2e758930601a167d5d9e40d7cc5c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1bf96c543fce72aa5b056387ae2d8da68c2e758930601a167d5d9e40d7cc5c8->enter($__internal_f1bf96c543fce72aa5b056387ae2d8da68c2e758930601a167d5d9e40d7cc5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fd574f2a282bdb2d505d0d3599c0106c0bf432dce0db3270301c7357162ee086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd574f2a282bdb2d505d0d3599c0106c0bf432dce0db3270301c7357162ee086->enter($__internal_fd574f2a282bdb2d505d0d3599c0106c0bf432dce0db3270301c7357162ee086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_fd574f2a282bdb2d505d0d3599c0106c0bf432dce0db3270301c7357162ee086->leave($__internal_fd574f2a282bdb2d505d0d3599c0106c0bf432dce0db3270301c7357162ee086_prof);

        
        $__internal_f1bf96c543fce72aa5b056387ae2d8da68c2e758930601a167d5d9e40d7cc5c8->leave($__internal_f1bf96c543fce72aa5b056387ae2d8da68c2e758930601a167d5d9e40d7cc5c8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\formation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
