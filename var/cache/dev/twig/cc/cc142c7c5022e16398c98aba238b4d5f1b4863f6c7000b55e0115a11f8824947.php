<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e5031d41acbcb032689de3331c1652f9086f09fe9ad23427aad69fea6c052a62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a967b1a646da27172fd29812bee18989e07eb1b0dd39e3455b62f59c3454f01b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a967b1a646da27172fd29812bee18989e07eb1b0dd39e3455b62f59c3454f01b->enter($__internal_a967b1a646da27172fd29812bee18989e07eb1b0dd39e3455b62f59c3454f01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_eebe2ec7052704ef7612ccd4f73444ac7f994e169093aeb5ba3f266848a5386a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eebe2ec7052704ef7612ccd4f73444ac7f994e169093aeb5ba3f266848a5386a->enter($__internal_eebe2ec7052704ef7612ccd4f73444ac7f994e169093aeb5ba3f266848a5386a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a967b1a646da27172fd29812bee18989e07eb1b0dd39e3455b62f59c3454f01b->leave($__internal_a967b1a646da27172fd29812bee18989e07eb1b0dd39e3455b62f59c3454f01b_prof);

        
        $__internal_eebe2ec7052704ef7612ccd4f73444ac7f994e169093aeb5ba3f266848a5386a->leave($__internal_eebe2ec7052704ef7612ccd4f73444ac7f994e169093aeb5ba3f266848a5386a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e1450f57b401ca055bac9d0bcd7c81dce4b75942e042f053e2560a6034bb38e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e1450f57b401ca055bac9d0bcd7c81dce4b75942e042f053e2560a6034bb38e->enter($__internal_0e1450f57b401ca055bac9d0bcd7c81dce4b75942e042f053e2560a6034bb38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f2f023e06c546326c30e070a0c0f3ed13c51bcac53ff708a7347c6d39ab9cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2f023e06c546326c30e070a0c0f3ed13c51bcac53ff708a7347c6d39ab9cf6->enter($__internal_8f2f023e06c546326c30e070a0c0f3ed13c51bcac53ff708a7347c6d39ab9cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8f2f023e06c546326c30e070a0c0f3ed13c51bcac53ff708a7347c6d39ab9cf6->leave($__internal_8f2f023e06c546326c30e070a0c0f3ed13c51bcac53ff708a7347c6d39ab9cf6_prof);

        
        $__internal_0e1450f57b401ca055bac9d0bcd7c81dce4b75942e042f053e2560a6034bb38e->leave($__internal_0e1450f57b401ca055bac9d0bcd7c81dce4b75942e042f053e2560a6034bb38e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f57e789b2c65021acd9987558643ca6bd5e71b55508265586bd166f2095d4252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f57e789b2c65021acd9987558643ca6bd5e71b55508265586bd166f2095d4252->enter($__internal_f57e789b2c65021acd9987558643ca6bd5e71b55508265586bd166f2095d4252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_97a0b0892dc918b5b56f493470f197250918fc5c84ffd05836bb647f0b37cf09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a0b0892dc918b5b56f493470f197250918fc5c84ffd05836bb647f0b37cf09->enter($__internal_97a0b0892dc918b5b56f493470f197250918fc5c84ffd05836bb647f0b37cf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_97a0b0892dc918b5b56f493470f197250918fc5c84ffd05836bb647f0b37cf09->leave($__internal_97a0b0892dc918b5b56f493470f197250918fc5c84ffd05836bb647f0b37cf09_prof);

        
        $__internal_f57e789b2c65021acd9987558643ca6bd5e71b55508265586bd166f2095d4252->leave($__internal_f57e789b2c65021acd9987558643ca6bd5e71b55508265586bd166f2095d4252_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_80ff7bd244510039bbc402402301cf93e0a5d73dce8b3d968283c7e512e3f8a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ff7bd244510039bbc402402301cf93e0a5d73dce8b3d968283c7e512e3f8a3->enter($__internal_80ff7bd244510039bbc402402301cf93e0a5d73dce8b3d968283c7e512e3f8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ce2dd5f317bdd7e2dcce019184280ca6d31a32b19de1351ed1c5172e1ee0484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce2dd5f317bdd7e2dcce019184280ca6d31a32b19de1351ed1c5172e1ee0484->enter($__internal_7ce2dd5f317bdd7e2dcce019184280ca6d31a32b19de1351ed1c5172e1ee0484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7ce2dd5f317bdd7e2dcce019184280ca6d31a32b19de1351ed1c5172e1ee0484->leave($__internal_7ce2dd5f317bdd7e2dcce019184280ca6d31a32b19de1351ed1c5172e1ee0484_prof);

        
        $__internal_80ff7bd244510039bbc402402301cf93e0a5d73dce8b3d968283c7e512e3f8a3->leave($__internal_80ff7bd244510039bbc402402301cf93e0a5d73dce8b3d968283c7e512e3f8a3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\formation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
