<?php

/* course/courseId.html.twig */
class __TwigTemplate_c6298c761e87ead02fec31ed9cd13c1669e969f78a97dc21173ef79cf616d964 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/courseId.html.twig", 1);
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
        $__internal_aee75e9df2f077f22e81ef3072cff10bdd7bb85639628ba8c894fdd5c205d8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aee75e9df2f077f22e81ef3072cff10bdd7bb85639628ba8c894fdd5c205d8c0->enter($__internal_aee75e9df2f077f22e81ef3072cff10bdd7bb85639628ba8c894fdd5c205d8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/courseId.html.twig"));

        $__internal_9fe48ee577b12d9ff4989acd27dd76561e9b452ede067289186e9fe43f75ff67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe48ee577b12d9ff4989acd27dd76561e9b452ede067289186e9fe43f75ff67->enter($__internal_9fe48ee577b12d9ff4989acd27dd76561e9b452ede067289186e9fe43f75ff67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/courseId.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aee75e9df2f077f22e81ef3072cff10bdd7bb85639628ba8c894fdd5c205d8c0->leave($__internal_aee75e9df2f077f22e81ef3072cff10bdd7bb85639628ba8c894fdd5c205d8c0_prof);

        
        $__internal_9fe48ee577b12d9ff4989acd27dd76561e9b452ede067289186e9fe43f75ff67->leave($__internal_9fe48ee577b12d9ff4989acd27dd76561e9b452ede067289186e9fe43f75ff67_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_baa896ba4e4f1d25e344ee679c9e657b30b5dfa6eb9fd468cd9070cb99113ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa896ba4e4f1d25e344ee679c9e657b30b5dfa6eb9fd468cd9070cb99113ed8->enter($__internal_baa896ba4e4f1d25e344ee679c9e657b30b5dfa6eb9fd468cd9070cb99113ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13ef0910ad95d2b40695c325657c9129f8756fc95da7a1df1d02efc5650a54f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ef0910ad95d2b40695c325657c9129f8756fc95da7a1df1d02efc5650a54f1->enter($__internal_13ef0910ad95d2b40695c325657c9129f8756fc95da7a1df1d02efc5650a54f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"col\">
        <h1>Formation ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "name", array()), "html", null, true);
        echo " : </h1>
            <table class=\"table table-striped\">
                <tbody>
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), "modules", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 10
            echo "            <tr>
                <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true);
            echo "</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                </tbody>
            </table>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("courses");
        echo "\" class=\"btn btn-primary\">Retour</a>
        ";
        
        $__internal_13ef0910ad95d2b40695c325657c9129f8756fc95da7a1df1d02efc5650a54f1->leave($__internal_13ef0910ad95d2b40695c325657c9129f8756fc95da7a1df1d02efc5650a54f1_prof);

        
        $__internal_baa896ba4e4f1d25e344ee679c9e657b30b5dfa6eb9fd468cd9070cb99113ed8->leave($__internal_baa896ba4e4f1d25e344ee679c9e657b30b5dfa6eb9fd468cd9070cb99113ed8_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_faf7e9eb5aa15ee5ecac2dd45e1f9ee0d05c6313d32cee77731ca5a0b8e6d5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf7e9eb5aa15ee5ecac2dd45e1f9ee0d05c6313d32cee77731ca5a0b8e6d5d1->enter($__internal_faf7e9eb5aa15ee5ecac2dd45e1f9ee0d05c6313d32cee77731ca5a0b8e6d5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f10fc3a79bec11f01994644eca754b3ba3682366bb96ba5014a96f02f63acb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f10fc3a79bec11f01994644eca754b3ba3682366bb96ba5014a96f02f63acb1->enter($__internal_6f10fc3a79bec11f01994644eca754b3ba3682366bb96ba5014a96f02f63acb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f10fc3a79bec11f01994644eca754b3ba3682366bb96ba5014a96f02f63acb1->leave($__internal_6f10fc3a79bec11f01994644eca754b3ba3682366bb96ba5014a96f02f63acb1_prof);

        
        $__internal_faf7e9eb5aa15ee5ecac2dd45e1f9ee0d05c6313d32cee77731ca5a0b8e6d5d1->leave($__internal_faf7e9eb5aa15ee5ecac2dd45e1f9ee0d05c6313d32cee77731ca5a0b8e6d5d1_prof);

    }

    public function getTemplateName()
    {
        return "course/courseId.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 17,  79 => 15,  75 => 13,  67 => 11,  64 => 10,  60 => 9,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
        <h1>Formation {{ results.name }} : </h1>
            <table class=\"table table-striped\">
                <tbody>
            {% for module in results.modules %}
            <tr>
                <td>{{ module.name }}</td></tr>
            {% endfor %}
                </tbody>
            </table>
        <a href=\"{{ url('courses') }}\" class=\"btn btn-primary\">Retour</a>
        {% endblock %}
{% block javascripts %}{% endblock %}", "course/courseId.html.twig", "C:\\formation\\app\\Resources\\views\\course\\courseId.html.twig");
    }
}
