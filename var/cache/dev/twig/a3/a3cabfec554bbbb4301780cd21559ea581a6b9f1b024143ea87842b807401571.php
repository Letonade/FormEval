<?php

/* base.html.twig */
class __TwigTemplate_429fb43c2efe8dc411128ef4c6ddeea6e45f89b25a33b5aab4318fa925b086db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c9265492c6b026a16aeac4f2478cfd6d0d7199bf28bf97b4efae107cc4972f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c9265492c6b026a16aeac4f2478cfd6d0d7199bf28bf97b4efae107cc4972f2->enter($__internal_3c9265492c6b026a16aeac4f2478cfd6d0d7199bf28bf97b4efae107cc4972f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f7d0d052eaa6bd370f337eaafdabc25491eba9f949ad3c09f0c842a9c4d0db84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d0d052eaa6bd370f337eaafdabc25491eba9f949ad3c09f0c842a9c4d0db84->enter($__internal_f7d0d052eaa6bd370f337eaafdabc25491eba9f949ad3c09f0c842a9c4d0db84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("libairies/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fontawesome-all.min.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_3c9265492c6b026a16aeac4f2478cfd6d0d7199bf28bf97b4efae107cc4972f2->leave($__internal_3c9265492c6b026a16aeac4f2478cfd6d0d7199bf28bf97b4efae107cc4972f2_prof);

        
        $__internal_f7d0d052eaa6bd370f337eaafdabc25491eba9f949ad3c09f0c842a9c4d0db84->leave($__internal_f7d0d052eaa6bd370f337eaafdabc25491eba9f949ad3c09f0c842a9c4d0db84_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_68f10032444867cc12845637f55da8443152190a34b5c14284217255a3bf09d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f10032444867cc12845637f55da8443152190a34b5c14284217255a3bf09d5->enter($__internal_68f10032444867cc12845637f55da8443152190a34b5c14284217255a3bf09d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c1521844a608da7290bea1252f7d3d80caa6a94a198046c7671d6033cacb958f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1521844a608da7290bea1252f7d3d80caa6a94a198046c7671d6033cacb958f->enter($__internal_c1521844a608da7290bea1252f7d3d80caa6a94a198046c7671d6033cacb958f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c1521844a608da7290bea1252f7d3d80caa6a94a198046c7671d6033cacb958f->leave($__internal_c1521844a608da7290bea1252f7d3d80caa6a94a198046c7671d6033cacb958f_prof);

        
        $__internal_68f10032444867cc12845637f55da8443152190a34b5c14284217255a3bf09d5->leave($__internal_68f10032444867cc12845637f55da8443152190a34b5c14284217255a3bf09d5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b431bf762877af56a03a602084586dd6aace18188624a015f43bfd9ff9529a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b431bf762877af56a03a602084586dd6aace18188624a015f43bfd9ff9529a6->enter($__internal_0b431bf762877af56a03a602084586dd6aace18188624a015f43bfd9ff9529a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5ff7d2bf24cdd064d7503caea0a02cd8e3dbc90843f1aaf81e472e80fa9143ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff7d2bf24cdd064d7503caea0a02cd8e3dbc90843f1aaf81e472e80fa9143ad->enter($__internal_5ff7d2bf24cdd064d7503caea0a02cd8e3dbc90843f1aaf81e472e80fa9143ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5ff7d2bf24cdd064d7503caea0a02cd8e3dbc90843f1aaf81e472e80fa9143ad->leave($__internal_5ff7d2bf24cdd064d7503caea0a02cd8e3dbc90843f1aaf81e472e80fa9143ad_prof);

        
        $__internal_0b431bf762877af56a03a602084586dd6aace18188624a015f43bfd9ff9529a6->leave($__internal_0b431bf762877af56a03a602084586dd6aace18188624a015f43bfd9ff9529a6_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e6ff3fdb8859c19b9590d7d8b7bebc84eabf77067672f6de815c1fe547c0084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6ff3fdb8859c19b9590d7d8b7bebc84eabf77067672f6de815c1fe547c0084->enter($__internal_1e6ff3fdb8859c19b9590d7d8b7bebc84eabf77067672f6de815c1fe547c0084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b55d0faf8d87d7a52dcd7da1938198cf4198dbcd9f71f1c7e46b22e384d33a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55d0faf8d87d7a52dcd7da1938198cf4198dbcd9f71f1c7e46b22e384d33a52->enter($__internal_b55d0faf8d87d7a52dcd7da1938198cf4198dbcd9f71f1c7e46b22e384d33a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b55d0faf8d87d7a52dcd7da1938198cf4198dbcd9f71f1c7e46b22e384d33a52->leave($__internal_b55d0faf8d87d7a52dcd7da1938198cf4198dbcd9f71f1c7e46b22e384d33a52_prof);

        
        $__internal_1e6ff3fdb8859c19b9590d7d8b7bebc84eabf77067672f6de815c1fe547c0084->leave($__internal_1e6ff3fdb8859c19b9590d7d8b7bebc84eabf77067672f6de815c1fe547c0084_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0312e08a42cfce13b3b1344269567a4524dd7d3f87db354baee5af1118460974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0312e08a42cfce13b3b1344269567a4524dd7d3f87db354baee5af1118460974->enter($__internal_0312e08a42cfce13b3b1344269567a4524dd7d3f87db354baee5af1118460974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bcc34f9a01f7ee043c21ab0be63509eb31c44feca9496f2aa370600921b0dc09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc34f9a01f7ee043c21ab0be63509eb31c44feca9496f2aa370600921b0dc09->enter($__internal_bcc34f9a01f7ee043c21ab0be63509eb31c44feca9496f2aa370600921b0dc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bcc34f9a01f7ee043c21ab0be63509eb31c44feca9496f2aa370600921b0dc09->leave($__internal_bcc34f9a01f7ee043c21ab0be63509eb31c44feca9496f2aa370600921b0dc09_prof);

        
        $__internal_0312e08a42cfce13b3b1344269567a4524dd7d3f87db354baee5af1118460974->leave($__internal_0312e08a42cfce13b3b1344269567a4524dd7d3f87db354baee5af1118460974_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 13,  108 => 12,  91 => 6,  73 => 5,  61 => 14,  58 => 13,  56 => 12,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('libairies/bootstrap/css/bootstrap.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/fontawesome-all.min.css') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\formation\\app\\Resources\\views\\base.html.twig");
    }
}
