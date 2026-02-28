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

/* etudiant/matiere/catalog.html.twig */
class __TwigTemplate_5420a0368b0a1ce0facac915705b8305 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/matiere/catalog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/matiere/catalog.html.twig"));

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

        yield "Nos Matières - LearnFlex";
        
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
    .catalog-container { padding: 80px 0; background: #f8fafc; min-height: 100vh; }
    .catalog-header { text-align: center; margin-bottom: 60px; }
    .catalog-header h1 { font-size: 2.8rem; color: var(--secondary); margin-bottom: 15px; }
    .catalog-header p { color: #64748b; font-size: 1.2rem; max-width: 600px; margin: 0 auto; }

    .catalog-grid { 
        display: grid; 
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); 
        gap: 35px; 
    }

    .catalog-card {
        background: white;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        text-decoration: none;
        display: flex;
        flex-direction: column;
        border: 1px solid #f1f5f9;
    }

    .catalog-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.1);
        border-color: var(--primary);
    }

    .catalog-img-wrapper {
        position: relative;
        height: 220px;
        overflow: hidden;
    }

    .catalog-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .catalog-card:hover .catalog-img-wrapper img { transform: scale(1.1); }

    .category-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: rgba(255, 255, 255, 0.9);
        padding: 6px 15px;
        border-radius: 12px;
        font-size: 0.8rem;
        font-weight: 700;
        color: var(--primary);
        backdrop-filter: blur(4px);
    }

    .catalog-body { padding: 30px; flex-grow: 1; }
    .catalog-body h3 { font-size: 1.4rem; color: #1e293b; margin-bottom: 12px; font-weight: 700; }
    .catalog-body p { color: #64748b; font-size: 1rem; line-height: 1.6; margin-bottom: 20px; }

    .catalog-footer { 
        padding: 20px 30px; 
        border-top: 1px solid #f1f5f9; 
        display: flex; 
        justify-content: space-between; 
        align-items: center;
        background: #fcfdfe;
    }

    .etudiant-info { display: flex; align-items: center; gap: 8px; color: #94a3b8; font-size: 0.9rem; }
    .btn-explore { color: var(--primary); font-weight: 700; display: flex; align-items: center; gap: 6px; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 82
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

        // line 83
        yield "<div class=\"catalog-container\">
    <div class=\"container\">
        <div class=\"catalog-header\">
            <h1>Explorez nos Matières 📚</h1>
            <p>Découvrez un monde de connaissances avec nos cours interactifs conçus par des experts.</p>
            
            <div class=\"search-container\" style=\"margin-top: 40px; max-width: 600px; margin-left: auto; margin-right: auto; position: relative;\">
                <input type=\"text\" id=\"catalog-search\" placeholder=\"Rechercher une matière...\" 
                       style=\"width: 100%; padding: 15px 25px 15px 50px; border-radius: 30px; border: 2px solid #e2e8f0; font-size: 1rem; transition: all 0.3s ease; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05);\">
                <i class=\"fas fa-search\" style=\"position: absolute; left: 20px; top: 50%; transform: translateY(-50%); color: #94a3b8;\"></i>
            </div>

            <div class=\"filter-chips\" style=\"margin-top: 30px; display: flex; justify-content: center; gap: 10px; flex-wrap: wrap;\">
                <button class=\"filter-chip active\" data-section=\"\">Tous</button>
                ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 98
            yield "                    <button class=\"filter-chip\" data-section=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["section"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["section"], "html", null, true);
            yield "</button>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['section'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "            </div>
        </div>

        <style>
            .filter-chip {
                background: white;
                border: 1px solid #e2e8f0;
                padding: 8px 20px;
                border-radius: 20px;
                cursor: pointer;
                transition: all 0.3s ease;
                color: #64748b;
                font-weight: 600;
            }
            .filter-chip:hover { border-color: var(--primary); color: var(--primary); }
            .filter-chip.active { background: var(--primary); border-color: var(--primary); color: white; }
        </style>

        <div class=\"catalog-grid\" id=\"catalog-results\">
            ";
        // line 119
        yield Twig\Extension\CoreExtension::include($this->env, $context, "etudiant/matiere/_catalog_list.html.twig", ["matieres" => (isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 119, $this->source); })())]);
        yield "
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('catalog-search');
    const filterChips = document.querySelectorAll('.filter-chip');
    const resultsContainer = document.getElementById('catalog-results');
    let timeout = null;
    let currentSection = '';

    function updateResults() {
        const query = searchInput.value;
        fetch(`";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_matiere_search");
        yield "?q=\${encodeURIComponent(query)}&section=\${encodeURIComponent(currentSection)}`)
            .then(response => response.text())
            .then(html => {
                resultsContainer.style.opacity = '0';
                setTimeout(() => {
                    resultsContainer.innerHTML = html;
                    resultsContainer.style.opacity = '1';
                }, 200);
            });
    }

    searchInput.addEventListener('input', function() {
        clearTimeout(timeout);
        timeout = setTimeout(updateResults, 300);
    });

    filterChips.forEach(chip => {
        chip.addEventListener('click', function() {
            filterChips.forEach(c => c.classList.remove('active'));
            this.classList.add('active');
            currentSection = this.getAttribute('data-section');
            updateResults();
        });
    });

    resultsContainer.style.transition = 'opacity 0.3s ease';
});
</script>
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
        return "etudiant/matiere/catalog.html.twig";
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
        return array (  269 => 134,  251 => 119,  230 => 100,  219 => 98,  215 => 97,  199 => 83,  186 => 82,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/home.html.twig' %}

{% block title %}Nos Matières - LearnFlex{% endblock %}

{% block stylesheets %}
<style>
    .catalog-container { padding: 80px 0; background: #f8fafc; min-height: 100vh; }
    .catalog-header { text-align: center; margin-bottom: 60px; }
    .catalog-header h1 { font-size: 2.8rem; color: var(--secondary); margin-bottom: 15px; }
    .catalog-header p { color: #64748b; font-size: 1.2rem; max-width: 600px; margin: 0 auto; }

    .catalog-grid { 
        display: grid; 
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); 
        gap: 35px; 
    }

    .catalog-card {
        background: white;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        text-decoration: none;
        display: flex;
        flex-direction: column;
        border: 1px solid #f1f5f9;
    }

    .catalog-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.1);
        border-color: var(--primary);
    }

    .catalog-img-wrapper {
        position: relative;
        height: 220px;
        overflow: hidden;
    }

    .catalog-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .catalog-card:hover .catalog-img-wrapper img { transform: scale(1.1); }

    .category-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: rgba(255, 255, 255, 0.9);
        padding: 6px 15px;
        border-radius: 12px;
        font-size: 0.8rem;
        font-weight: 700;
        color: var(--primary);
        backdrop-filter: blur(4px);
    }

    .catalog-body { padding: 30px; flex-grow: 1; }
    .catalog-body h3 { font-size: 1.4rem; color: #1e293b; margin-bottom: 12px; font-weight: 700; }
    .catalog-body p { color: #64748b; font-size: 1rem; line-height: 1.6; margin-bottom: 20px; }

    .catalog-footer { 
        padding: 20px 30px; 
        border-top: 1px solid #f1f5f9; 
        display: flex; 
        justify-content: space-between; 
        align-items: center;
        background: #fcfdfe;
    }

    .etudiant-info { display: flex; align-items: center; gap: 8px; color: #94a3b8; font-size: 0.9rem; }
    .btn-explore { color: var(--primary); font-weight: 700; display: flex; align-items: center; gap: 6px; }
</style>
{% endblock %}

{% block body %}
<div class=\"catalog-container\">
    <div class=\"container\">
        <div class=\"catalog-header\">
            <h1>Explorez nos Matières 📚</h1>
            <p>Découvrez un monde de connaissances avec nos cours interactifs conçus par des experts.</p>
            
            <div class=\"search-container\" style=\"margin-top: 40px; max-width: 600px; margin-left: auto; margin-right: auto; position: relative;\">
                <input type=\"text\" id=\"catalog-search\" placeholder=\"Rechercher une matière...\" 
                       style=\"width: 100%; padding: 15px 25px 15px 50px; border-radius: 30px; border: 2px solid #e2e8f0; font-size: 1rem; transition: all 0.3s ease; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05);\">
                <i class=\"fas fa-search\" style=\"position: absolute; left: 20px; top: 50%; transform: translateY(-50%); color: #94a3b8;\"></i>
            </div>

            <div class=\"filter-chips\" style=\"margin-top: 30px; display: flex; justify-content: center; gap: 10px; flex-wrap: wrap;\">
                <button class=\"filter-chip active\" data-section=\"\">Tous</button>
                {% for section in sections %}
                    <button class=\"filter-chip\" data-section=\"{{ section }}\">{{ section }}</button>
                {% endfor %}
            </div>
        </div>

        <style>
            .filter-chip {
                background: white;
                border: 1px solid #e2e8f0;
                padding: 8px 20px;
                border-radius: 20px;
                cursor: pointer;
                transition: all 0.3s ease;
                color: #64748b;
                font-weight: 600;
            }
            .filter-chip:hover { border-color: var(--primary); color: var(--primary); }
            .filter-chip.active { background: var(--primary); border-color: var(--primary); color: white; }
        </style>

        <div class=\"catalog-grid\" id=\"catalog-results\">
            {{ include('etudiant/matiere/_catalog_list.html.twig', {matieres: matieres}) }}
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('catalog-search');
    const filterChips = document.querySelectorAll('.filter-chip');
    const resultsContainer = document.getElementById('catalog-results');
    let timeout = null;
    let currentSection = '';

    function updateResults() {
        const query = searchInput.value;
        fetch(`{{ path('app_etudiant_matiere_search') }}?q=\${encodeURIComponent(query)}&section=\${encodeURIComponent(currentSection)}`)
            .then(response => response.text())
            .then(html => {
                resultsContainer.style.opacity = '0';
                setTimeout(() => {
                    resultsContainer.innerHTML = html;
                    resultsContainer.style.opacity = '1';
                }, 200);
            });
    }

    searchInput.addEventListener('input', function() {
        clearTimeout(timeout);
        timeout = setTimeout(updateResults, 300);
    });

    filterChips.forEach(chip => {
        chip.addEventListener('click', function() {
            filterChips.forEach(c => c.classList.remove('active'));
            this.classList.add('active');
            currentSection = this.getAttribute('data-section');
            updateResults();
        });
    });

    resultsContainer.style.transition = 'opacity 0.3s ease';
});
</script>
    </div>
</div>
{% endblock %}
", "etudiant/matiere/catalog.html.twig", "C:\\Users\\pc\\Desktop\\LearnFlex-\\templates\\etudiant\\matiere\\catalog.html.twig");
    }
}
