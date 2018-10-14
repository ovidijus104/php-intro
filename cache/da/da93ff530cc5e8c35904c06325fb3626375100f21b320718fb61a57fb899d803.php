<?php

/* base.twig */
class __TwigTemplate_80a6b98acb19b4a81dbabde4c1e3fa5b8e120ca6d0457dcb712551ba847d1995 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">

    <title>Strict types</title>
    <meta name=\"description\" content=\"About strict type in php\">
    <meta name=\"author\" content=\"Ovidijus\">

</head>

<body>

    <h1>Strict types</h1>
    <hr />
    ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["strict"] ?? null), "prefixForName", array()), "html", null, true);
        echo "

    <ul>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["strict"] ?? null), "salaryWithCommision", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["people"]) {
            // line 20
            echo "    <li>";
            echo twig_escape_filter($this->env, $context["people"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['people'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </ul>

    <h1>Non strict types</h1>
    <hr />
    ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["non_strict"] ?? null), "prefixForName", array()), "html", null, true);
        echo "
    <br>

    <ul>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["non_strict"] ?? null), "salaryWithCommision", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["people"]) {
            // line 31
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["people"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['people'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </ul>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 33,  76 => 31,  72 => 30,  65 => 26,  59 => 22,  50 => 20,  46 => 19,  40 => 16,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">

    <title>Strict types</title>
    <meta name=\"description\" content=\"About strict type in php\">
    <meta name=\"author\" content=\"Ovidijus\">

</head>

<body>

    <h1>Strict types</h1>
    <hr />
    {{ strict.prefixForName }}

    <ul>
    {% for people in strict.salaryWithCommision %}
    <li>{{ people }}</li>
        {% endfor %}
    </ul>

    <h1>Non strict types</h1>
    <hr />
    {{ non_strict.prefixForName }}
    <br>

    <ul>
        {% for people in non_strict.salaryWithCommision %}
            <li>{{ people }}</li>
        {% endfor %}
    </ul>
</body>
</html>", "base.twig", "C:\\laragon\\www\\strict\\templates\\base.twig");
    }
}
