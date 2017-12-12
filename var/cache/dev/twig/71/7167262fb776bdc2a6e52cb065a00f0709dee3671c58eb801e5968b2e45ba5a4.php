<?php

/* course/courses.html.twig */
class __TwigTemplate_8348e2b1f3c8aec29d9f209ffc814cb4ba6fc5768507f0dfac3c73441969f4cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/courses.html.twig", 1);
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
        $__internal_27693d67d273327540475a4c3bb8054c0c4c86e8f8c147e8bf48af6cc4d76aee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27693d67d273327540475a4c3bb8054c0c4c86e8f8c147e8bf48af6cc4d76aee->enter($__internal_27693d67d273327540475a4c3bb8054c0c4c86e8f8c147e8bf48af6cc4d76aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/courses.html.twig"));

        $__internal_974a2ab490603c100a0db8910c762d1070360df8f7c02295f30da9557d87efe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974a2ab490603c100a0db8910c762d1070360df8f7c02295f30da9557d87efe4->enter($__internal_974a2ab490603c100a0db8910c762d1070360df8f7c02295f30da9557d87efe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/courses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27693d67d273327540475a4c3bb8054c0c4c86e8f8c147e8bf48af6cc4d76aee->leave($__internal_27693d67d273327540475a4c3bb8054c0c4c86e8f8c147e8bf48af6cc4d76aee_prof);

        
        $__internal_974a2ab490603c100a0db8910c762d1070360df8f7c02295f30da9557d87efe4->leave($__internal_974a2ab490603c100a0db8910c762d1070360df8f7c02295f30da9557d87efe4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_49c78e2a7abb5ebb46ee6e56f28b918ee5f9476cb47794e77e3ef3d4ebee5497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49c78e2a7abb5ebb46ee6e56f28b918ee5f9476cb47794e77e3ef3d4ebee5497->enter($__internal_49c78e2a7abb5ebb46ee6e56f28b918ee5f9476cb47794e77e3ef3d4ebee5497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf6805634e4f2e90d04ede3cfc57b702bd40901635baa2a5bbb351c66b8802b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6805634e4f2e90d04ede3cfc57b702bd40901635baa2a5bbb351c66b8802b5->enter($__internal_bf6805634e4f2e90d04ede3cfc57b702bd40901635baa2a5bbb351c66b8802b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bf6805634e4f2e90d04ede3cfc57b702bd40901635baa2a5bbb351c66b8802b5->leave($__internal_bf6805634e4f2e90d04ede3cfc57b702bd40901635baa2a5bbb351c66b8802b5_prof);

        
        $__internal_49c78e2a7abb5ebb46ee6e56f28b918ee5f9476cb47794e77e3ef3d4ebee5497->leave($__internal_49c78e2a7abb5ebb46ee6e56f28b918ee5f9476cb47794e77e3ef3d4ebee5497_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11c081e49eccb2d2585f02255e784979ea7de43e5220539f7a9d797ab61eb3a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c081e49eccb2d2585f02255e784979ea7de43e5220539f7a9d797ab61eb3a9->enter($__internal_11c081e49eccb2d2585f02255e784979ea7de43e5220539f7a9d797ab61eb3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e45d427993f8a3b66173985b7d9f5895f2d34e77bc8432bf973bc7e7fea3515c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45d427993f8a3b66173985b7d9f5895f2d34e77bc8432bf973bc7e7fea3515c->enter($__internal_e45d427993f8a3b66173985b7d9f5895f2d34e77bc8432bf973bc7e7fea3515c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e45d427993f8a3b66173985b7d9f5895f2d34e77bc8432bf973bc7e7fea3515c->leave($__internal_e45d427993f8a3b66173985b7d9f5895f2d34e77bc8432bf973bc7e7fea3515c_prof);

        
        $__internal_11c081e49eccb2d2585f02255e784979ea7de43e5220539f7a9d797ab61eb3a9->leave($__internal_11c081e49eccb2d2585f02255e784979ea7de43e5220539f7a9d797ab61eb3a9_prof);

    }

    public function getTemplateName()
    {
        return "course/courses.html.twig";
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
{% block javascripts %}{% endblock %}", "course/courses.html.twig", "C:\\formation\\app\\Resources\\views\\course\\courses.html.twig");
    }
}
