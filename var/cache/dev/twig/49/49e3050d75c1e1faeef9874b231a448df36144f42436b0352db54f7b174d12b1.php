<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7b4a186033becf563b602d840c5dbb698aea9622544e121fc67e793cdfb7c171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d11e945a71ce4ca01e3eecad43a1c341d5d5baad5fa5785a196531edd03f34d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d11e945a71ce4ca01e3eecad43a1c341d5d5baad5fa5785a196531edd03f34d->enter($__internal_6d11e945a71ce4ca01e3eecad43a1c341d5d5baad5fa5785a196531edd03f34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a7beb7e0fb249211f71b0788cc4105688232e7d5e1dcaf17551160bae5ee75d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7beb7e0fb249211f71b0788cc4105688232e7d5e1dcaf17551160bae5ee75d5->enter($__internal_a7beb7e0fb249211f71b0788cc4105688232e7d5e1dcaf17551160bae5ee75d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d11e945a71ce4ca01e3eecad43a1c341d5d5baad5fa5785a196531edd03f34d->leave($__internal_6d11e945a71ce4ca01e3eecad43a1c341d5d5baad5fa5785a196531edd03f34d_prof);

        
        $__internal_a7beb7e0fb249211f71b0788cc4105688232e7d5e1dcaf17551160bae5ee75d5->leave($__internal_a7beb7e0fb249211f71b0788cc4105688232e7d5e1dcaf17551160bae5ee75d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b44f380b3c4b6f9efd900be244e6fc7ff7b2d40da821ea540bf92e0b0f622d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b44f380b3c4b6f9efd900be244e6fc7ff7b2d40da821ea540bf92e0b0f622d99->enter($__internal_b44f380b3c4b6f9efd900be244e6fc7ff7b2d40da821ea540bf92e0b0f622d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_55be4ca4e82bafcc440e2730f28c4e3f13c1a52654cac1dc59d39f06e72b6d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55be4ca4e82bafcc440e2730f28c4e3f13c1a52654cac1dc59d39f06e72b6d15->enter($__internal_55be4ca4e82bafcc440e2730f28c4e3f13c1a52654cac1dc59d39f06e72b6d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_55be4ca4e82bafcc440e2730f28c4e3f13c1a52654cac1dc59d39f06e72b6d15->leave($__internal_55be4ca4e82bafcc440e2730f28c4e3f13c1a52654cac1dc59d39f06e72b6d15_prof);

        
        $__internal_b44f380b3c4b6f9efd900be244e6fc7ff7b2d40da821ea540bf92e0b0f622d99->leave($__internal_b44f380b3c4b6f9efd900be244e6fc7ff7b2d40da821ea540bf92e0b0f622d99_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7608235a383c11edba5c3ae11aca21948e80d0418e569e9103258aa509e57e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7608235a383c11edba5c3ae11aca21948e80d0418e569e9103258aa509e57e59->enter($__internal_7608235a383c11edba5c3ae11aca21948e80d0418e569e9103258aa509e57e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_294381052115822162384a2eea4fc65eb0850a4bb09442f0a58222f3b6ea907a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294381052115822162384a2eea4fc65eb0850a4bb09442f0a58222f3b6ea907a->enter($__internal_294381052115822162384a2eea4fc65eb0850a4bb09442f0a58222f3b6ea907a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_294381052115822162384a2eea4fc65eb0850a4bb09442f0a58222f3b6ea907a->leave($__internal_294381052115822162384a2eea4fc65eb0850a4bb09442f0a58222f3b6ea907a_prof);

        
        $__internal_7608235a383c11edba5c3ae11aca21948e80d0418e569e9103258aa509e57e59->leave($__internal_7608235a383c11edba5c3ae11aca21948e80d0418e569e9103258aa509e57e59_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33a5358f603e601f4133ab633dddd3906a005e359423b596147fd9b621987b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a5358f603e601f4133ab633dddd3906a005e359423b596147fd9b621987b7f->enter($__internal_33a5358f603e601f4133ab633dddd3906a005e359423b596147fd9b621987b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_206c5d2b4779280c8b8b50073d8c7f5a48a2edc0bdf95547e56eeac3865658b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206c5d2b4779280c8b8b50073d8c7f5a48a2edc0bdf95547e56eeac3865658b4->enter($__internal_206c5d2b4779280c8b8b50073d8c7f5a48a2edc0bdf95547e56eeac3865658b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_206c5d2b4779280c8b8b50073d8c7f5a48a2edc0bdf95547e56eeac3865658b4->leave($__internal_206c5d2b4779280c8b8b50073d8c7f5a48a2edc0bdf95547e56eeac3865658b4_prof);

        
        $__internal_33a5358f603e601f4133ab633dddd3906a005e359423b596147fd9b621987b7f->leave($__internal_33a5358f603e601f4133ab633dddd3906a005e359423b596147fd9b621987b7f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\formation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
