<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* emarger/show.html.twig */
class __TwigTemplate_33cd8f6fd37c37894976dc9ef49e56e4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emarger/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emarger/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "emarger/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Emarger";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Emarger</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["emarger"]) || array_key_exists("emarger", $context) ? $context["emarger"] : (function () { throw new RuntimeError('Variable "emarger" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Presence</th>
                <td>";
        // line 16
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["emarger"]) || array_key_exists("emarger", $context) ? $context["emarger"] : (function () { throw new RuntimeError('Variable "emarger" does not exist.', 16, $this->source); })()), "presence", [], "any", false, false, false, 16)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Alternative</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["emarger"]) || array_key_exists("emarger", $context) ? $context["emarger"] : (function () { throw new RuntimeError('Variable "emarger" does not exist.', 20, $this->source); })()), "alternative", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>HeureArrive</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["emarger"]) || array_key_exists("emarger", $context) ? $context["emarger"] : (function () { throw new RuntimeError('Variable "emarger" does not exist.', 24, $this->source); })()), "heureArrive", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["emarger"]) || array_key_exists("emarger", $context) ? $context["emarger"] : (function () { throw new RuntimeError('Variable "emarger" does not exist.', 24, $this->source); })()), "heureArrive", [], "any", false, false, false, 24), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>HeureDepart</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["emarger"]) || array_key_exists("emarger", $context) ? $context["emarger"] : (function () { throw new RuntimeError('Variable "emarger" does not exist.', 28, $this->source); })()), "heureDepart", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["emarger"]) || array_key_exists("emarger", $context) ? $context["emarger"] : (function () { throw new RuntimeError('Variable "emarger" does not exist.', 28, $this->source); })()), "heureDepart", [], "any", false, false, false, 28), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Signature</th>
                <td>";
        // line 32
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["emarger"]) || array_key_exists("emarger", $context) ? $context["emarger"] : (function () { throw new RuntimeError('Variable "emarger" does not exist.', 32, $this->source); })()), "signature", [], "any", false, false, false, 32)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_emarger_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_emarger_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["emarger"]) || array_key_exists("emarger", $context) ? $context["emarger"] : (function () { throw new RuntimeError('Variable "emarger" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "emarger/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "emarger/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  149 => 41,  144 => 39,  139 => 37,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Emarger{% endblock %}

{% block body %}
    <h1>Emarger</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ emarger.id }}</td>
            </tr>
            <tr>
                <th>Presence</th>
                <td>{{ emarger.presence ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Alternative</th>
                <td>{{ emarger.alternative }}</td>
            </tr>
            <tr>
                <th>HeureArrive</th>
                <td>{{ emarger.heureArrive ? emarger.heureArrive|date('H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>HeureDepart</th>
                <td>{{ emarger.heureDepart ? emarger.heureDepart|date('H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Signature</th>
                <td>{{ emarger.signature ? 'Yes' : 'No' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_emarger_index') }}\">back to list</a>

    <a href=\"{{ path('app_emarger_edit', {'id': emarger.id}) }}\">edit</a>

    {{ include('emarger/_delete_form.html.twig') }}
{% endblock %}
", "emarger/show.html.twig", "C:\\wamp64\\www\\bilal-project-main\\templates\\emarger\\show.html.twig");
    }
}
