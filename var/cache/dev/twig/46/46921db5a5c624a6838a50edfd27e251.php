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

/* enseignant/matiere/index.html.twig */
class __TwigTemplate_20576c69a0af53481125585809dbd9de extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "front/home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/matiere/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/matiere/index.html.twig"));

        $this->parent = $this->load("front/home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Mes Matières - Enseignant";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "<style>
    .enseignant-container { padding: 80px 0; background: #f8fafc; min-height: 100vh; }
    .section-header { text-align: center; margin-bottom: 50px; }
    .section-header h2 { font-size: 2.5rem; color: var(--secondary); margin-bottom: 10px; }
    .section-header p { color: #64748b; font-size: 1.1rem; }

    .matiere-grid { 
        display: grid; 
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); 
        gap: 30px; 
        padding: 20px;
    }

    .matiere-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        position: relative;
        text-decoration: none;
        display: block;
    }

    .matiere-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
    }

    .card-image {
        height: 200px;
        width: 100%;
        background-color: #e2e8f0;
        position: relative;
        overflow: hidden;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .matiere-card:hover .card-image img {
        transform: scale(1.1);
    }

    .card-content { padding: 24px; }
    .card-content h3 { font-size: 1.25rem; color: #1e293b; margin-bottom: 8px; }
    .card-content p { color: #64748b; font-size: 0.95rem; line-height: 1.5; margin-bottom: 16px; }

    .card-footer {
        padding: 16px 24px;
        background: #f8fafc;
        border-top: 1px solid #f1f5f9;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .btn-manage {
        color: var(--primary);
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .btn-manage i { transition: transform 0.3s ease; }
    .matiere-card:hover .btn-manage i { transform: translateX(5px); }

    .badge {
        padding: 4px 12px;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 600;
        background: rgba(151, 195, 162, 0.2);
        color: var(--primary);
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 91
        yield "<div class=\"enseignant-container\">
    <div class=\"container\">
        <div class=\"section-header\">
            <h2>Espace Enseignant</h2>
            <p>Sélectionnez une matière pour gérer vos cours</p>
        </div>

        <div class=\"matiere-grid\">
            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 99, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 100
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enseignant_cours_manage", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            yield "\" class=\"matiere-card\">
                    <div class=\"card-image\">
                        ";
            // line 102
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "image", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 103
                yield "                            ";
                if (CoreExtension::inFilter("http", CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "image", [], "any", false, false, false, 103))) {
                    // line 104
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "image", [], "any", false, false, false, 104), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "nomMatiere", [], "any", false, false, false, 104), "html", null, true);
                    yield "\">
                            ";
                } else {
                    // line 106
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "image", [], "any", false, false, false, 106))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "nomMatiere", [], "any", false, false, false, 106), "html", null, true);
                    yield "\">
                            ";
                }
                // line 108
                yield "                        ";
            } else {
                // line 109
                yield "                            <div style=\"display: flex; align-items: center; justify-content: center; height: 100%; color: #94a3b8;\">
                                <i class=\"fas fa-image fa-3x\"></i>
                            </div>
                        ";
            }
            // line 113
            yield "                        <div style=\"position: absolute; top: 12px; right: 12px;\">
                            <span class=\"badge\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "section", [], "any", false, false, false, 114), "html", null, true);
            yield "</span>
                        </div>
                    </div>
                    <div class=\"card-content\">
                        <h3>";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "nomMatiere", [], "any", false, false, false, 118), "html", null, true);
            yield "</h3>
                        <p>";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "description", [], "any", false, false, false, 119), 0, 100), "html", null, true);
            yield "...</p>
                    </div>
                    <div class=\"card-footer\">
                        <span style=\"font-size: 0.85rem; color: #94a3b8;\">
                            <i class=\"fas fa-graduation-cap\"></i> ";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "niveau", [], "any", false, false, false, 123), "html", null, true);
            yield "
                        </span>
                        <div class=\"btn-manage\">
                            Gérer les cours <i class=\"fas fa-arrow-right\"></i>
                        </div>
                    </div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        // line 130
        if (!$context['_iterated']) {
            // line 131
            yield "                <div style=\"grid-column: 1/-1; text-align: center; padding: 50px;\">
                    <i class=\"fas fa-folder-open fa-3x\" style=\"color: #cbd5e1; margin-bottom: 20px;\"></i>
                    <p>Aucune matière disponible pour le moment.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['matiere'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "enseignant/matiere/index.html.twig";
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
        return array (  303 => 136,  293 => 131,  291 => 130,  279 => 123,  272 => 119,  268 => 118,  261 => 114,  258 => 113,  252 => 109,  249 => 108,  241 => 106,  233 => 104,  230 => 103,  228 => 102,  222 => 100,  217 => 99,  207 => 91,  194 => 90,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/home.html.twig' %}

{% block title %}Mes Matières - Enseignant{% endblock %}

{% block stylesheets %}
<style>
    .enseignant-container { padding: 80px 0; background: #f8fafc; min-height: 100vh; }
    .section-header { text-align: center; margin-bottom: 50px; }
    .section-header h2 { font-size: 2.5rem; color: var(--secondary); margin-bottom: 10px; }
    .section-header p { color: #64748b; font-size: 1.1rem; }

    .matiere-grid { 
        display: grid; 
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); 
        gap: 30px; 
        padding: 20px;
    }

    .matiere-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        position: relative;
        text-decoration: none;
        display: block;
    }

    .matiere-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
    }

    .card-image {
        height: 200px;
        width: 100%;
        background-color: #e2e8f0;
        position: relative;
        overflow: hidden;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .matiere-card:hover .card-image img {
        transform: scale(1.1);
    }

    .card-content { padding: 24px; }
    .card-content h3 { font-size: 1.25rem; color: #1e293b; margin-bottom: 8px; }
    .card-content p { color: #64748b; font-size: 0.95rem; line-height: 1.5; margin-bottom: 16px; }

    .card-footer {
        padding: 16px 24px;
        background: #f8fafc;
        border-top: 1px solid #f1f5f9;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .btn-manage {
        color: var(--primary);
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .btn-manage i { transition: transform 0.3s ease; }
    .matiere-card:hover .btn-manage i { transform: translateX(5px); }

    .badge {
        padding: 4px 12px;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 600;
        background: rgba(151, 195, 162, 0.2);
        color: var(--primary);
    }
</style>
{% endblock %}

{% block body %}
<div class=\"enseignant-container\">
    <div class=\"container\">
        <div class=\"section-header\">
            <h2>Espace Enseignant</h2>
            <p>Sélectionnez une matière pour gérer vos cours</p>
        </div>

        <div class=\"matiere-grid\">
            {% for matiere in matieres %}
                <a href=\"{{ path('app_enseignant_cours_manage', {'id': matiere.id}) }}\" class=\"matiere-card\">
                    <div class=\"card-image\">
                        {% if matiere.image %}
                            {% if 'http' in matiere.image %}
                                <img src=\"{{ matiere.image }}\" alt=\"{{ matiere.nomMatiere }}\">
                            {% else %}
                                <img src=\"{{ asset('uploads/images/' ~ matiere.image) }}\" alt=\"{{ matiere.nomMatiere }}\">
                            {% endif %}
                        {% else %}
                            <div style=\"display: flex; align-items: center; justify-content: center; height: 100%; color: #94a3b8;\">
                                <i class=\"fas fa-image fa-3x\"></i>
                            </div>
                        {% endif %}
                        <div style=\"position: absolute; top: 12px; right: 12px;\">
                            <span class=\"badge\">{{ matiere.section }}</span>
                        </div>
                    </div>
                    <div class=\"card-content\">
                        <h3>{{ matiere.nomMatiere }}</h3>
                        <p>{{ matiere.description|slice(0, 100) }}...</p>
                    </div>
                    <div class=\"card-footer\">
                        <span style=\"font-size: 0.85rem; color: #94a3b8;\">
                            <i class=\"fas fa-graduation-cap\"></i> {{ matiere.niveau }}
                        </span>
                        <div class=\"btn-manage\">
                            Gérer les cours <i class=\"fas fa-arrow-right\"></i>
                        </div>
                    </div>
                </a>
            {% else %}
                <div style=\"grid-column: 1/-1; text-align: center; padding: 50px;\">
                    <i class=\"fas fa-folder-open fa-3x\" style=\"color: #cbd5e1; margin-bottom: 20px;\"></i>
                    <p>Aucune matière disponible pour le moment.</p>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}
", "enseignant/matiere/index.html.twig", "C:\\Users\\pc\\Desktop\\LearnFlex-\\templates\\enseignant\\matiere\\index.html.twig");
    }
}
