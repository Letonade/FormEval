<?php

/* course/course.html.twig */
class __TwigTemplate_bec3a69cd01d831930576daacdb566c9c0036c14b062c375bb7d547ea3a6a8b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/course.html.twig", 1);
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
        $__internal_65e92370f501281691ad146d539eab7b2cd223158c374f35c587b723c5b00b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e92370f501281691ad146d539eab7b2cd223158c374f35c587b723c5b00b33->enter($__internal_65e92370f501281691ad146d539eab7b2cd223158c374f35c587b723c5b00b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/course.html.twig"));

        $__internal_a16b38318a83f155175e789e1cf0db1ecdf8d8780c5c9b0ec7720ea0a4b7719a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16b38318a83f155175e789e1cf0db1ecdf8d8780c5c9b0ec7720ea0a4b7719a->enter($__internal_a16b38318a83f155175e789e1cf0db1ecdf8d8780c5c9b0ec7720ea0a4b7719a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/course.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65e92370f501281691ad146d539eab7b2cd223158c374f35c587b723c5b00b33->leave($__internal_65e92370f501281691ad146d539eab7b2cd223158c374f35c587b723c5b00b33_prof);

        
        $__internal_a16b38318a83f155175e789e1cf0db1ecdf8d8780c5c9b0ec7720ea0a4b7719a->leave($__internal_a16b38318a83f155175e789e1cf0db1ecdf8d8780c5c9b0ec7720ea0a4b7719a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_92da393cd0b8098e4188ec794eae3eba01c018ab42986fac43fdd234d746be29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92da393cd0b8098e4188ec794eae3eba01c018ab42986fac43fdd234d746be29->enter($__internal_92da393cd0b8098e4188ec794eae3eba01c018ab42986fac43fdd234d746be29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa7c0f6f5cb8d2c404194767053685913fde9af478d6c2d4fae5a29c9a97d159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7c0f6f5cb8d2c404194767053685913fde9af478d6c2d4fae5a29c9a97d159->enter($__internal_aa7c0f6f5cb8d2c404194767053685913fde9af478d6c2d4fae5a29c9a97d159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"col\">
    <h1>Formations</h1>
    <table class=\"table table-striped\">
        <tbody>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 10
            echo "
        <tr>
        <td><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("course.id", array("id" => $this->getAttribute($context["value"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array()), "html", null, true);
            echo "</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </tbody>
    </table>
";
        
        $__internal_aa7c0f6f5cb8d2c404194767053685913fde9af478d6c2d4fae5a29c9a97d159->leave($__internal_aa7c0f6f5cb8d2c404194767053685913fde9af478d6c2d4fae5a29c9a97d159_prof);

        
        $__internal_92da393cd0b8098e4188ec794eae3eba01c018ab42986fac43fdd234d746be29->leave($__internal_92da393cd0b8098e4188ec794eae3eba01c018ab42986fac43fdd234d746be29_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b05230456d6776f4b39cfaf1f558c29306ff3740ea11e4f6f5032785055ffc39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b05230456d6776f4b39cfaf1f558c29306ff3740ea11e4f6f5032785055ffc39->enter($__internal_b05230456d6776f4b39cfaf1f558c29306ff3740ea11e4f6f5032785055ffc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_92096a833a2aa019a8fea7c64a969b50f250fb5a69498b437a64c02c6262a4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92096a833a2aa019a8fea7c64a969b50f250fb5a69498b437a64c02c6262a4f7->enter($__internal_92096a833a2aa019a8fea7c64a969b50f250fb5a69498b437a64c02c6262a4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_92096a833a2aa019a8fea7c64a969b50f250fb5a69498b437a64c02c6262a4f7->leave($__internal_92096a833a2aa019a8fea7c64a969b50f250fb5a69498b437a64c02c6262a4f7_prof);

        
        $__internal_b05230456d6776f4b39cfaf1f558c29306ff3740ea11e4f6f5032785055ffc39->leave($__internal_b05230456d6776f4b39cfaf1f558c29306ff3740ea11e4f6f5032785055ffc39_prof);

    }

    public function getTemplateName()
    {
        return "course/course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  76 => 15,  65 => 12,  61 => 10,  57 => 9,  50 => 4,  41 => 3,  11 => 1,);
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
    <div class=\"col\">
    <h1>Formations</h1>
    <table class=\"table table-striped\">
        <tbody>
    {% for value in results %}

        <tr>
        <td><a href=\"{{ url('course.id',{ 'id' : value.id } ) }}\">{{  value.name }}</a></td>
        </tr>
    {% endfor %}
        </tbody>
    </table>
{% endblock %}
{% block javascripts %}{% endblock %}", "course/course.html.twig", "C:\\formation\\app\\Resources\\views\\course\\course.html.twig");
    }
}
