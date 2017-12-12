<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7671c5deca4b957eb89f92f01ed41783aba8befc0cb318ee647dd9fb009acff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c027e6583c58af0677e8c663b2aeb8f059ef6fc6cee76dd46358fbe72493d9ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c027e6583c58af0677e8c663b2aeb8f059ef6fc6cee76dd46358fbe72493d9ee->enter($__internal_c027e6583c58af0677e8c663b2aeb8f059ef6fc6cee76dd46358fbe72493d9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_69cf8a6114cc39936acbae0f7c01873176856f6ef282a9d8d5dc3dbf6636e1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69cf8a6114cc39936acbae0f7c01873176856f6ef282a9d8d5dc3dbf6636e1a0->enter($__internal_69cf8a6114cc39936acbae0f7c01873176856f6ef282a9d8d5dc3dbf6636e1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c027e6583c58af0677e8c663b2aeb8f059ef6fc6cee76dd46358fbe72493d9ee->leave($__internal_c027e6583c58af0677e8c663b2aeb8f059ef6fc6cee76dd46358fbe72493d9ee_prof);

        
        $__internal_69cf8a6114cc39936acbae0f7c01873176856f6ef282a9d8d5dc3dbf6636e1a0->leave($__internal_69cf8a6114cc39936acbae0f7c01873176856f6ef282a9d8d5dc3dbf6636e1a0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_96cf5a25139a58684dc3d580cf3af2ac1bd54ce2702310693a702b30fd3ec3f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96cf5a25139a58684dc3d580cf3af2ac1bd54ce2702310693a702b30fd3ec3f3->enter($__internal_96cf5a25139a58684dc3d580cf3af2ac1bd54ce2702310693a702b30fd3ec3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b7ab0fab2fe3e5864be4a504a853035700095b0f6cb60bc8c3d9f862e3bba291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ab0fab2fe3e5864be4a504a853035700095b0f6cb60bc8c3d9f862e3bba291->enter($__internal_b7ab0fab2fe3e5864be4a504a853035700095b0f6cb60bc8c3d9f862e3bba291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b7ab0fab2fe3e5864be4a504a853035700095b0f6cb60bc8c3d9f862e3bba291->leave($__internal_b7ab0fab2fe3e5864be4a504a853035700095b0f6cb60bc8c3d9f862e3bba291_prof);

        
        $__internal_96cf5a25139a58684dc3d580cf3af2ac1bd54ce2702310693a702b30fd3ec3f3->leave($__internal_96cf5a25139a58684dc3d580cf3af2ac1bd54ce2702310693a702b30fd3ec3f3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad76c15cd1d6c375e372a0fb63a3a81dd3dfb3c7a351bbe58a22a8e638fcc30c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad76c15cd1d6c375e372a0fb63a3a81dd3dfb3c7a351bbe58a22a8e638fcc30c->enter($__internal_ad76c15cd1d6c375e372a0fb63a3a81dd3dfb3c7a351bbe58a22a8e638fcc30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_33c09edeab3cf8749e10d9b628c63a13f0d0dcddd5a0cd46ad491f76dc947cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c09edeab3cf8749e10d9b628c63a13f0d0dcddd5a0cd46ad491f76dc947cbc->enter($__internal_33c09edeab3cf8749e10d9b628c63a13f0d0dcddd5a0cd46ad491f76dc947cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_33c09edeab3cf8749e10d9b628c63a13f0d0dcddd5a0cd46ad491f76dc947cbc->leave($__internal_33c09edeab3cf8749e10d9b628c63a13f0d0dcddd5a0cd46ad491f76dc947cbc_prof);

        
        $__internal_ad76c15cd1d6c375e372a0fb63a3a81dd3dfb3c7a351bbe58a22a8e638fcc30c->leave($__internal_ad76c15cd1d6c375e372a0fb63a3a81dd3dfb3c7a351bbe58a22a8e638fcc30c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d689be39a525c78e5588f92b9e6292dd8c5b0b0aa647c9112c80919ddee0d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d689be39a525c78e5588f92b9e6292dd8c5b0b0aa647c9112c80919ddee0d8c->enter($__internal_2d689be39a525c78e5588f92b9e6292dd8c5b0b0aa647c9112c80919ddee0d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c95ae92df1cc66a4caf698150a82468a650713a27e0c16f09fe7f587297ee7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95ae92df1cc66a4caf698150a82468a650713a27e0c16f09fe7f587297ee7b6->enter($__internal_c95ae92df1cc66a4caf698150a82468a650713a27e0c16f09fe7f587297ee7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c95ae92df1cc66a4caf698150a82468a650713a27e0c16f09fe7f587297ee7b6->leave($__internal_c95ae92df1cc66a4caf698150a82468a650713a27e0c16f09fe7f587297ee7b6_prof);

        
        $__internal_2d689be39a525c78e5588f92b9e6292dd8c5b0b0aa647c9112c80919ddee0d8c->leave($__internal_2d689be39a525c78e5588f92b9e6292dd8c5b0b0aa647c9112c80919ddee0d8c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\formation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
