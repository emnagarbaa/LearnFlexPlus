<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* pagination/custom_pagination.html.twig */
class __TwigTemplate_e987be5ce18a3f87d6b4a3beb0e259f3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination/custom_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination/custom_pagination.html.twig"));

        // line 1
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 1, $this->source); })()) > 1)) {
            // line 2
            yield "<nav aria-label=\"Page navigation\" class=\"premium-pagination\">
    <ul class=\"pagination-list\">
        ";
            // line 4
            if (array_key_exists("previous", $context)) {
                // line 5
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 5, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 5, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 5, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 5, $this->source); })())])), "html", null, true);
                yield "\" class=\"pagination-btn pagination-prev\" title=\"Page précédente\">
                <i class=\"fas fa-chevron-left\"></i>
                <span>Précédent</span>
            </a>
        ";
            } else {
                // line 10
                yield "            <span class=\"pagination-btn pagination-prev disabled\">
                <i class=\"fas fa-chevron-left\"></i>
                <span>Précédent</span>
            </span>
        ";
            }
            // line 15
            yield "
        <div class=\"pagination-numbers\">
            ";
            // line 17
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 17, $this->source); })()) > 1)) {
                // line 18
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 18, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 18, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 18, $this->source); })()) => 1])), "html", null, true);
                yield "\" class=\"pagination-number\">1</a>
                ";
                // line 19
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 19, $this->source); })()) > 2)) {
                    // line 20
                    yield "                    <span class=\"pagination-ellipsis\">...</span>
                ";
                }
                // line 22
                yield "            ";
            }
            // line 23
            yield "
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 25
                yield "                ";
                if (($context["page"] == (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 25, $this->source); })()))) {
                    // line 26
                    yield "                    <span class=\"pagination-number active\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</span>
                ";
                } else {
                    // line 28
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 28, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 28, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 28, $this->source); })()) => $context["page"]])), "html", null, true);
                    yield "\" class=\"pagination-number\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                ";
                }
                // line 30
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "
            ";
            // line 32
            if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 32, $this->source); })()) < (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 32, $this->source); })()))) {
                // line 33
                yield "                ";
                if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 33, $this->source); })()) < ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 33, $this->source); })()) - 1))) {
                    // line 34
                    yield "                    <span class=\"pagination-ellipsis\">...</span>
                ";
                }
                // line 36
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 36, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 36, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 36, $this->source); })()) => (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 36, $this->source); })())])), "html", null, true);
                yield "\" class=\"pagination-number\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 36, $this->source); })()), "html", null, true);
                yield "</a>
            ";
            }
            // line 38
            yield "        </div>

        ";
            // line 40
            if (array_key_exists("next", $context)) {
                // line 41
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 41, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 41, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 41, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 41, $this->source); })())])), "html", null, true);
                yield "\" class=\"pagination-btn pagination-next\" title=\"Page suivante\">
                <span>Suivant</span>
                <i class=\"fas fa-chevron-right\"></i>
            </a>
        ";
            } else {
                // line 46
                yield "            <span class=\"pagination-btn pagination-next disabled\">
                <span>Suivant</span>
                <i class=\"fas fa-chevron-right\"></i>
            </span>
        ";
            }
            // line 51
            yield "    </ul>

    <div class=\"pagination-info\">
        Page <strong>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 54, $this->source); })()), "html", null, true);
            yield "</strong> sur <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 54, $this->source); })()), "html", null, true);
            yield "</strong>
    </div>
</nav>

<style>
.premium-pagination {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
    margin: 30px 0;
}

.pagination-list {
    display: flex;
    align-items: center;
    gap: 8px;
    list-style: none;
    padding: 0;
    margin: 0;
}

.pagination-btn {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 18px;
    background: white;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    color: #1e293b;
    font-weight: 600;
    font-size: 0.9rem;
    text-decoration: none;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
}

.pagination-btn:hover:not(.disabled) {
    background: var(--primary);
    color: white;
    border-color: var(--primary);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(151, 195, 162, 0.3);
}

.pagination-btn.disabled {
    opacity: 0.4;
    cursor: not-allowed;
    pointer-events: none;
}

.pagination-numbers {
    display: flex;
    align-items: center;
    gap: 6px;
}

.pagination-number {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 40px;
    height: 40px;
    padding: 0 12px;
    background: white;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    color: #64748b;
    font-weight: 600;
    font-size: 0.95rem;
    text-decoration: none;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.pagination-number:hover:not(.active) {
    background: #f8fafc;
    border-color: var(--primary);
    color: var(--primary);
    transform: translateY(-2px);
}

.pagination-number.active {
    background: linear-gradient(135deg, var(--primary) 0%, #86b391 100%);
    border-color: var(--primary);
    color: white;
    box-shadow: 0 4px 12px rgba(151, 195, 162, 0.4);
    transform: scale(1.05);
}

.pagination-ellipsis {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 40px;
    height: 40px;
    color: #94a3b8;
    font-weight: 600;
}

.pagination-info {
    color: #64748b;
    font-size: 0.9rem;
    font-weight: 500;
}

.pagination-info strong {
    color: var(--primary);
    font-weight: 700;
}

/* Responsive Design */
@media (max-width: 768px) {
    .pagination-btn span {
        display: none;
    }
    
    .pagination-number {
        min-width: 36px;
        height: 36px;
        font-size: 0.85rem;
    }
}
</style>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pagination/custom_pagination.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  169 => 54,  164 => 51,  157 => 46,  148 => 41,  146 => 40,  142 => 38,  134 => 36,  130 => 34,  127 => 33,  125 => 32,  122 => 31,  116 => 30,  108 => 28,  102 => 26,  99 => 25,  95 => 24,  92 => 23,  89 => 22,  85 => 20,  83 => 19,  78 => 18,  76 => 17,  72 => 15,  65 => 10,  56 => 5,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if pageCount > 1 %}
<nav aria-label=\"Page navigation\" class=\"premium-pagination\">
    <ul class=\"pagination-list\">
        {% if previous is defined %}
            <a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\" class=\"pagination-btn pagination-prev\" title=\"Page précédente\">
                <i class=\"fas fa-chevron-left\"></i>
                <span>Précédent</span>
            </a>
        {% else %}
            <span class=\"pagination-btn pagination-prev disabled\">
                <i class=\"fas fa-chevron-left\"></i>
                <span>Précédent</span>
            </span>
        {% endif %}

        <div class=\"pagination-numbers\">
            {% if startPage > 1 %}
                <a href=\"{{ path(route, query|merge({(pageParameterName): 1})) }}\" class=\"pagination-number\">1</a>
                {% if startPage > 2 %}
                    <span class=\"pagination-ellipsis\">...</span>
                {% endif %}
            {% endif %}

            {% for page in pagesInRange %}
                {% if page == current %}
                    <span class=\"pagination-number active\">{{ page }}</span>
                {% else %}
                    <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\" class=\"pagination-number\">{{ page }}</a>
                {% endif %}
            {% endfor %}

            {% if endPage < pageCount %}
                {% if endPage < pageCount - 1 %}
                    <span class=\"pagination-ellipsis\">...</span>
                {% endif %}
                <a href=\"{{ path(route, query|merge({(pageParameterName): pageCount})) }}\" class=\"pagination-number\">{{ pageCount }}</a>
            {% endif %}
        </div>

        {% if next is defined %}
            <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\" class=\"pagination-btn pagination-next\" title=\"Page suivante\">
                <span>Suivant</span>
                <i class=\"fas fa-chevron-right\"></i>
            </a>
        {% else %}
            <span class=\"pagination-btn pagination-next disabled\">
                <span>Suivant</span>
                <i class=\"fas fa-chevron-right\"></i>
            </span>
        {% endif %}
    </ul>

    <div class=\"pagination-info\">
        Page <strong>{{ current }}</strong> sur <strong>{{ pageCount }}</strong>
    </div>
</nav>

<style>
.premium-pagination {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
    margin: 30px 0;
}

.pagination-list {
    display: flex;
    align-items: center;
    gap: 8px;
    list-style: none;
    padding: 0;
    margin: 0;
}

.pagination-btn {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 18px;
    background: white;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    color: #1e293b;
    font-weight: 600;
    font-size: 0.9rem;
    text-decoration: none;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
}

.pagination-btn:hover:not(.disabled) {
    background: var(--primary);
    color: white;
    border-color: var(--primary);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(151, 195, 162, 0.3);
}

.pagination-btn.disabled {
    opacity: 0.4;
    cursor: not-allowed;
    pointer-events: none;
}

.pagination-numbers {
    display: flex;
    align-items: center;
    gap: 6px;
}

.pagination-number {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 40px;
    height: 40px;
    padding: 0 12px;
    background: white;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    color: #64748b;
    font-weight: 600;
    font-size: 0.95rem;
    text-decoration: none;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.pagination-number:hover:not(.active) {
    background: #f8fafc;
    border-color: var(--primary);
    color: var(--primary);
    transform: translateY(-2px);
}

.pagination-number.active {
    background: linear-gradient(135deg, var(--primary) 0%, #86b391 100%);
    border-color: var(--primary);
    color: white;
    box-shadow: 0 4px 12px rgba(151, 195, 162, 0.4);
    transform: scale(1.05);
}

.pagination-ellipsis {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 40px;
    height: 40px;
    color: #94a3b8;
    font-weight: 600;
}

.pagination-info {
    color: #64748b;
    font-size: 0.9rem;
    font-weight: 500;
}

.pagination-info strong {
    color: var(--primary);
    font-weight: 700;
}

/* Responsive Design */
@media (max-width: 768px) {
    .pagination-btn span {
        display: none;
    }
    
    .pagination-number {
        min-width: 36px;
        height: 36px;
        font-size: 0.85rem;
    }
}
</style>
{% endif %}
", "pagination/custom_pagination.html.twig", "C:\\Users\\hassa\\Downloads\\LearnFlex-\\LearnFlex-\\templates\\pagination\\custom_pagination.html.twig");
    }
}
