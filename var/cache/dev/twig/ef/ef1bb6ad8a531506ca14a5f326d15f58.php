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

/* @JoseFramework/data_collector/tab/claim_checker/checkers.html.twig */
class __TwigTemplate_709a13fc95f975d724cedf0a20cd6ad1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/claim_checker/checkers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/claim_checker/checkers.html.twig"));

        // line 1
        echo "<h3>Available Claim Checkers</h3>
<p class=\"help\">
    Each Claim Checker will check a specific header parameter.
</p>
<table>
    <thead>
    <tr>
        <th>Alias</th>
        <th>Checked claim</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 13
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 13, $this->source); })()), "getData", [], "method", false, false, false, 13), "checker", [], "any", false, false, false, 13), "claim_checkers", [], "any", false, false, false, 13))) {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "getData", [], "method", false, false, false, 14), "checker", [], "any", false, false, false, 14), "claim_checkers", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["alias"] => $context["data"]) {
                // line 15
                echo "            <tr>
                <td>";
                // line 16
                echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
                echo "</td>
                <td>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "claim", [], "any", false, false, false, 17), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "        <tr>
            <td colspan=\"2\">There is no registered claim checker</td>
        </tr>
    ";
        }
        // line 25
        echo "    </tbody>
</table>

<h4>Checked Claims</h4>
<p class=\"help\">
    The following table list all claims parameters checked by the Claim Checker Managers.
</p>
<table>
    <thead>
    <tr>
        <th scope=\"col\">Status</th>
        <th scope=\"col\">Claims to check</th>
        <th scope=\"col\">Mandatory claims</th>
        <th scope=\"col\">Checked claims</th>
        <th scope=\"col\">Error</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 43
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "getData", [], "method", false, false, false, 43), "checker", [], "any", false, false, false, 43), "events", [], "any", false, false, false, 43), "claim_check_success", [], "any", false, false, false, 43)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "getData", [], "method", false, false, false, 43), "checker", [], "any", false, false, false, 43), "events", [], "any", false, false, false, 43), "claim_check_failure", [], "any", false, false, false, 43)))) {
            // line 44
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 44, $this->source); })()), "getData", [], "method", false, false, false, 44), "checker", [], "any", false, false, false, 44), "events", [], "any", false, false, false, 44), "claim_check_success", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 45
                echo "            <tr class=\"status-success\">
                <td>Success</td>
                <td>";
                // line 47
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "seek", ["claims"], "method", false, false, false, 47));
                echo "</td>
                <td>";
                // line 48
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "seek", ["mandatoryClaims"], "method", false, false, false, 48));
                echo "</td>
                <td>";
                // line 49
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "seek", ["checkedClaims"], "method", false, false, false, 49));
                echo "</td>
                <td>---</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 53, $this->source); })()), "getData", [], "method", false, false, false, 53), "checker", [], "any", false, false, false, 53), "events", [], "any", false, false, false, 53), "claim_check_failure", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 54
                echo "            <tr class=\"status-error\">
                <td>Failure</td>
                <td>";
                // line 56
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "seek", ["claims"], "method", false, false, false, 56));
                echo "</td>
                <td>";
                // line 57
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "seek", ["mandatoryClaims"], "method", false, false, false, 57));
                echo "</td>
                <td>---</td>
                <td>";
                // line 59
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "seek", ["throwable"], "method", false, false, false, 59));
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "    ";
        } else {
            // line 63
            echo "        <tr>
            <td colspan=\"1\">No checked claims</td>
        </tr>
    ";
        }
        // line 67
        echo "    </tbody>
</table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@JoseFramework/data_collector/tab/claim_checker/checkers.html.twig";
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
        return array (  174 => 67,  168 => 63,  165 => 62,  156 => 59,  151 => 57,  147 => 56,  143 => 54,  138 => 53,  128 => 49,  124 => 48,  120 => 47,  116 => 45,  111 => 44,  109 => 43,  89 => 25,  83 => 21,  80 => 20,  71 => 17,  67 => 16,  64 => 15,  59 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Available Claim Checkers</h3>
<p class=\"help\">
    Each Claim Checker will check a specific header parameter.
</p>
<table>
    <thead>
    <tr>
        <th>Alias</th>
        <th>Checked claim</th>
    </tr>
    </thead>
    <tbody>
    {% if not collector.getData().checker.claim_checkers is empty %}
        {% for alias, data in collector.getData().checker.claim_checkers %}
            <tr>
                <td>{{ alias }}</td>
                <td>{{ data.claim }}</td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"2\">There is no registered claim checker</td>
        </tr>
    {% endif %}
    </tbody>
</table>

<h4>Checked Claims</h4>
<p class=\"help\">
    The following table list all claims parameters checked by the Claim Checker Managers.
</p>
<table>
    <thead>
    <tr>
        <th scope=\"col\">Status</th>
        <th scope=\"col\">Claims to check</th>
        <th scope=\"col\">Mandatory claims</th>
        <th scope=\"col\">Checked claims</th>
        <th scope=\"col\">Error</th>
    </tr>
    </thead>
    <tbody>
    {% if not collector.getData().checker.events.claim_check_success is empty or not collector.getData().checker.events.claim_check_failure is empty %}
        {% for event in collector.getData().checker.events.claim_check_success %}
            <tr class=\"status-success\">
                <td>Success</td>
                <td>{{ profiler_dump(event.seek(\"claims\")) }}</td>
                <td>{{ profiler_dump(event.seek(\"mandatoryClaims\")) }}</td>
                <td>{{ profiler_dump(event.seek(\"checkedClaims\")) }}</td>
                <td>---</td>
            </tr>
        {% endfor %}
        {% for event in collector.getData().checker.events.claim_check_failure %}
            <tr class=\"status-error\">
                <td>Failure</td>
                <td>{{ profiler_dump(event.seek(\"claims\")) }}</td>
                <td>{{ profiler_dump(event.seek(\"mandatoryClaims\")) }}</td>
                <td>---</td>
                <td>{{ profiler_dump(event.seek(\"throwable\")) }}</td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"1\">No checked claims</td>
        </tr>
    {% endif %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/claim_checker/checkers.html.twig", "C:\\wamp64\\www\\bilal-project-main\\vendor\\web-token\\jwt-bundle\\Resources\\views\\data_collector\\tab\\claim_checker\\checkers.html.twig");
    }
}
