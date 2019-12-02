<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Club/club/test.html.twig */
class __TwigTemplate_e8d1ea2d5062927adf9fe9cdb45af706b10fdfc5f3f3f06d31c3afdb605af82f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Club/template/test.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Club/club/test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Club/club/test.html.twig"));

        $this->parent = $this->loadTemplate("@Club/template/test.html.twig", "@Club/club/test.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, "my First car"), "html", null, true);
        echo "<br>
";
        // line 7
        $context["var"] = "4infoB4";
        // line 8
        echo "the content of my variable is  :";
        echo twig_escape_filter($this->env, ($context["var"] ?? $this->getContext($context, "var")), "html", null, true);
        echo "<br>
";
        // line 10
        list($context["var1"], $context["var2"]) =         ["var1", "var2"];
        // line 11
        echo "the content of my first varible is :";
        echo twig_escape_filter($this->env, ($context["var1"] ?? $this->getContext($context, "var1")), "html", null, true);
        echo "<br>
the content of my second varible is :";
        // line 12
        echo twig_escape_filter($this->env, ($context["var2"] ?? $this->getContext($context, "var2")), "html", null, true);
        echo "<br>


";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tab"] ?? $this->getContext($context, "tab")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "    <li>
        first name: ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "firstName", []), "html", null, true);
            echo "<br>
    </li>
    <li>
        last name: ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "lastName", []), "html", null, true);
            echo "<br>

    <li>

        class:  ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", []), "html", null, true);
            echo "
        ";
            // line 26
            if (($this->getAttribute($context["item"], "class", []) == "infoB")) {
                // line 27
                echo "            <button>Edit</button>
        ";
            }
            // line 29
            echo "    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", []), "html", null, true);
        echo "<br>
";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "debug", []), "html", null, true);
        echo "<br>

";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "html", null, true);
        echo "<br>
";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "server", []), "get", [0 => "SERVER_NAME"], "method"), "html", null, true);
        echo "
<br>
";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "method", []), "html", null, true);
        echo "<br>

";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "cookies", []), "get", [0 => "nom_parametre"], "method"), "html", null, true);
        echo "


";
        // line 43
        echo twig_escape_filter($this->env, twig_trim_filter("hello world .", twig_upper_filter($this->env, ".")), "html", null, true);
        echo "=>HELLO WORLD <br>
";
        // line 44
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, "HELLO"), "html", null, true);
        echo "

";
        // line 47
        echo "
";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, "2009-10-14T19:00:00"), "m/d/Y"), "html", null, true);
        echo "<br>
";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_date_converter($this->env, "2009-10-14T19:00:00"), "+70 day"), "m/d/Y"), "html", null, true);
        echo "<br>
";
        // line 52
        $context["tab"] = [0 => 1, 1 => 5, 2 => 2, 3 => 3];
        // line 53
        echo "    ";
        echo twig_escape_filter($this->env, max(($context["tab"] ?? $this->getContext($context, "tab"))), "html", null, true);
        echo "
";
        // line 59
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Club/club/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 59,  172 => 53,  170 => 52,  166 => 50,  162 => 48,  159 => 47,  154 => 44,  150 => 43,  144 => 39,  139 => 37,  134 => 35,  130 => 34,  125 => 32,  121 => 31,  114 => 29,  110 => 27,  108 => 26,  104 => 25,  97 => 21,  91 => 18,  88 => 17,  84 => 16,  78 => 12,  73 => 11,  71 => 10,  66 => 8,  64 => 7,  60 => 6,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@Club/template/test.html.twig\" %}
{% block  title%}
{#write acomments here#}
{#filter lin of twig filter https://twig.symfony.com/doc/2.x/filters/index.html#}
{#capatlize#}
{{ 'my First car'|capitalize }}<br>
{% set var = \"4infoB4\" %}
the content of my variable is  :{{ var }}<br>
{#declare may variable in same time#}
{% set var1,var2= \"var1\",\"var2\" %}
the content of my first varible is :{{ var1 }}<br>
the content of my second varible is :{{ var2 }}<br>


{#show the content of table sent from controller#}
{% for item in tab %}
    <li>
        first name: {{ item.firstName }}<br>
    </li>
    <li>
        last name: {{ item.lastName }}<br>

    <li>

        class:  {{ item.class }}
        {% if item.class=='infoB' %}
            <button>Edit</button>
        {% endif %}
    </li>
{% endfor %}
{{app.environment}}<br>
{{app.debug}}<br>

{{app.request}}<br>
{{ app.request.server.get(\"SERVER_NAME\") }}
<br>
{{app.request.method}}<br>

{{app.request.cookies.get(\"nom_parametre\")}}


{#filter#}
{{ \"hello world .\"|trim('.'|upper)}}=>HELLO WORLD <br>
{{\"HELLO\"|lower}}

{#date filtre#}

{{date(\"2009-10-14T19:00:00\")|date(\"m/d/Y\")}}<br>
{#add one day to date#}
{{date(\"2009-10-14T19:00:00\")|date_modify(\"+70 day\")|date(\"m/d/Y\")}}<br>
{#max of the tab#}
{% set tab = [1, 5, 2, 3] %}
    {{ max(tab) }}
{#
{% include \"@Club/template/test.html.twig\" %}#}
{#
{{ render(controller('AppBundle:Default:index')) }}
#}



{% endblock %}
", "@Club/club/test.html.twig", "C:\\Users\\Radhouene\\Desktop\\symfony 3.4\\EspritAt2\\src\\Club\\Bundle\\Resources\\views\\Club\\test.html.twig");
    }
}
