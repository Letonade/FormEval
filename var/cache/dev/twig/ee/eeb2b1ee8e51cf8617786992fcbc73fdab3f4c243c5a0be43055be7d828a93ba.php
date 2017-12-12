<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c40193700c43849b17745eb5abfeca5c8df45b7a4f99058185c5b98f641c1361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd584f41863cfc05e71c3a6c18202e9af380dc44506ec46745e806da06a0efde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd584f41863cfc05e71c3a6c18202e9af380dc44506ec46745e806da06a0efde->enter($__internal_dd584f41863cfc05e71c3a6c18202e9af380dc44506ec46745e806da06a0efde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f44944bae249476e7dee3ab72602cafa737a42548f7ddb0e6daa9d6429e65cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44944bae249476e7dee3ab72602cafa737a42548f7ddb0e6daa9d6429e65cbd->enter($__internal_f44944bae249476e7dee3ab72602cafa737a42548f7ddb0e6daa9d6429e65cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd584f41863cfc05e71c3a6c18202e9af380dc44506ec46745e806da06a0efde->leave($__internal_dd584f41863cfc05e71c3a6c18202e9af380dc44506ec46745e806da06a0efde_prof);

        
        $__internal_f44944bae249476e7dee3ab72602cafa737a42548f7ddb0e6daa9d6429e65cbd->leave($__internal_f44944bae249476e7dee3ab72602cafa737a42548f7ddb0e6daa9d6429e65cbd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34e9b1f293b68c9451be4567c9512414efaa527298e90b4a194d7b924077464b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34e9b1f293b68c9451be4567c9512414efaa527298e90b4a194d7b924077464b->enter($__internal_34e9b1f293b68c9451be4567c9512414efaa527298e90b4a194d7b924077464b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a55b46baaa35b20e14521ff4c50e0909e107c7cb310278dd1d22f40152ad29fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55b46baaa35b20e14521ff4c50e0909e107c7cb310278dd1d22f40152ad29fe->enter($__internal_a55b46baaa35b20e14521ff4c50e0909e107c7cb310278dd1d22f40152ad29fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a55b46baaa35b20e14521ff4c50e0909e107c7cb310278dd1d22f40152ad29fe->leave($__internal_a55b46baaa35b20e14521ff4c50e0909e107c7cb310278dd1d22f40152ad29fe_prof);

        
        $__internal_34e9b1f293b68c9451be4567c9512414efaa527298e90b4a194d7b924077464b->leave($__internal_34e9b1f293b68c9451be4567c9512414efaa527298e90b4a194d7b924077464b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7938c89e03aa8012e83a1c3e8b085157a44d667b031cee66eb70a2dbf3da5c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7938c89e03aa8012e83a1c3e8b085157a44d667b031cee66eb70a2dbf3da5c34->enter($__internal_7938c89e03aa8012e83a1c3e8b085157a44d667b031cee66eb70a2dbf3da5c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_044336cd5ed9231d8018d46c72266c6d16f94c4a57c320a6b74cdd536e8ee022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044336cd5ed9231d8018d46c72266c6d16f94c4a57c320a6b74cdd536e8ee022->enter($__internal_044336cd5ed9231d8018d46c72266c6d16f94c4a57c320a6b74cdd536e8ee022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_044336cd5ed9231d8018d46c72266c6d16f94c4a57c320a6b74cdd536e8ee022->leave($__internal_044336cd5ed9231d8018d46c72266c6d16f94c4a57c320a6b74cdd536e8ee022_prof);

        
        $__internal_7938c89e03aa8012e83a1c3e8b085157a44d667b031cee66eb70a2dbf3da5c34->leave($__internal_7938c89e03aa8012e83a1c3e8b085157a44d667b031cee66eb70a2dbf3da5c34_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1165eaec4bce200ca1459fdb7f412fc8fa8f5a7609fc7182ef9aeaed0afe6b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1165eaec4bce200ca1459fdb7f412fc8fa8f5a7609fc7182ef9aeaed0afe6b6->enter($__internal_c1165eaec4bce200ca1459fdb7f412fc8fa8f5a7609fc7182ef9aeaed0afe6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1a985395048bcfdb39aa710b7a778eae242455891163259644f18dc9dc2181f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a985395048bcfdb39aa710b7a778eae242455891163259644f18dc9dc2181f->enter($__internal_b1a985395048bcfdb39aa710b7a778eae242455891163259644f18dc9dc2181f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b1a985395048bcfdb39aa710b7a778eae242455891163259644f18dc9dc2181f->leave($__internal_b1a985395048bcfdb39aa710b7a778eae242455891163259644f18dc9dc2181f_prof);

        
        $__internal_c1165eaec4bce200ca1459fdb7f412fc8fa8f5a7609fc7182ef9aeaed0afe6b6->leave($__internal_c1165eaec4bce200ca1459fdb7f412fc8fa8f5a7609fc7182ef9aeaed0afe6b6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\formation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
