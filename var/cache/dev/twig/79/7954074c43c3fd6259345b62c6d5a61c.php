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

/* back/cours/edit.html.twig */
class __TwigTemplate_66dd0815810417015e1ef2e05e8f2871 extends Template
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
            'dashboard_content' => [$this, 'block_dashboard_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "back/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/cours/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/cours/edit.html.twig"));

        $this->parent = $this->load("back/index.html.twig", 1);
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

        yield "Modifier le Cours";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dashboard_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_content"));

        // line 6
        yield "<div class=\"recent-activity\">
    <div class=\"section-header\">
        <h3>Modifier le Cours: ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), "html", null, true);
        yield "</h3>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_cours_index");
        yield "\" class=\"btn-outline\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
    </div>

    <div class=\"form-container\" style=\"padding: 20px; background: white; border-radius: 8px;\">
        ";
        // line 15
        yield Twig\Extension\CoreExtension::include($this->env, $context, "back/cours/_form.html.twig", ["button_label" => "Mettre à jour"]);
        yield "
    </div>
</div>

<style>
    .form-error { color: #dc3545; font-size: 0.875rem; margin-top: 5px; font-weight: bold; }
    .btn.primary { background: #1f4f65; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background 0.3s ease; }
    .btn.primary:hover { background: #163a4a; }
    .btn-outline { 
        display: inline-flex; align-items: center; gap: 8px;
        padding: 10px 18px; border: 2px solid #1f4f65; border-radius: 8px;
        color: #1f4f65; font-weight: 600; text-decoration: none;
        transition: all 0.3s ease; background: transparent;
    }
    .btn-outline:hover { background: #1f4f65; color: white; transform: translateX(-5px); }
    .form-group { margin-bottom: 20px; }
    label { display: block; margin-bottom: 8px; font-weight: 600; color: #333; }
    input, textarea, select { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; transition: border-color 0.3s ease; }
    input:focus, textarea:focus, select:focus { border-color: #1f4f65; outline: none; }

    /* Custom File Upload Styling */
    .file-upload-wrapper { position: relative; width: 100%; }
    .file-input-hidden { position: absolute; left: 0; top: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; z-index: 2; }
    .file-upload-label { 
        display: flex; flex-direction: column; align-items: center; justify-content: center;
        padding: 30px; border: 2px dashed #1f4f65; border-radius: 12px;
        background: #f8fafc; color: #1f4f65; cursor: pointer; transition: all 0.3s ease;
        position: relative; z-index: 1;
    }
    .file-upload-label i { font-size: 2.5rem; margin-bottom: 10px; }
    .file-upload-label:hover { background: #eff6ff; border-color: #163a4a; }
    .file-upload-label.has-file { background: #e0f2f1; border-color: #2e7d32; color: #2e7d32; border-style: solid; }
    .file-name-preview { margin-top: 10px; font-size: 0.9rem; color: #666; font-style: italic; text-align: center; }
</style>
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
        return "back/cours/edit.html.twig";
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
        return array (  117 => 15,  108 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/index.html.twig' %}

{% block title %}Modifier le Cours{% endblock %}

{% block dashboard_content %}
<div class=\"recent-activity\">
    <div class=\"section-header\">
        <h3>Modifier le Cours: {{ cour.titre }}</h3>
        <a href=\"{{ path('app_back_cours_index') }}\" class=\"btn-outline\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
    </div>

    <div class=\"form-container\" style=\"padding: 20px; background: white; border-radius: 8px;\">
        {{ include('back/cours/_form.html.twig', {'button_label': 'Mettre à jour'}) }}
    </div>
</div>

<style>
    .form-error { color: #dc3545; font-size: 0.875rem; margin-top: 5px; font-weight: bold; }
    .btn.primary { background: #1f4f65; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background 0.3s ease; }
    .btn.primary:hover { background: #163a4a; }
    .btn-outline { 
        display: inline-flex; align-items: center; gap: 8px;
        padding: 10px 18px; border: 2px solid #1f4f65; border-radius: 8px;
        color: #1f4f65; font-weight: 600; text-decoration: none;
        transition: all 0.3s ease; background: transparent;
    }
    .btn-outline:hover { background: #1f4f65; color: white; transform: translateX(-5px); }
    .form-group { margin-bottom: 20px; }
    label { display: block; margin-bottom: 8px; font-weight: 600; color: #333; }
    input, textarea, select { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; transition: border-color 0.3s ease; }
    input:focus, textarea:focus, select:focus { border-color: #1f4f65; outline: none; }

    /* Custom File Upload Styling */
    .file-upload-wrapper { position: relative; width: 100%; }
    .file-input-hidden { position: absolute; left: 0; top: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; z-index: 2; }
    .file-upload-label { 
        display: flex; flex-direction: column; align-items: center; justify-content: center;
        padding: 30px; border: 2px dashed #1f4f65; border-radius: 12px;
        background: #f8fafc; color: #1f4f65; cursor: pointer; transition: all 0.3s ease;
        position: relative; z-index: 1;
    }
    .file-upload-label i { font-size: 2.5rem; margin-bottom: 10px; }
    .file-upload-label:hover { background: #eff6ff; border-color: #163a4a; }
    .file-upload-label.has-file { background: #e0f2f1; border-color: #2e7d32; color: #2e7d32; border-style: solid; }
    .file-name-preview { margin-top: 10px; font-size: 0.9rem; color: #666; font-style: italic; text-align: center; }
</style>
{% endblock %}
", "back/cours/edit.html.twig", "C:\\Users\\hassa\\Downloads\\LearnFlex-\\LearnFlex-\\templates\\back\\cours\\edit.html.twig");
    }
}
