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

/* etudiant/payment/success.html.twig */
class __TwigTemplate_f33e8c478070cce56893fbe8d79ad774 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/payment/success.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/payment/success.html.twig"));

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

        yield "Paiement Réussi - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
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
    .success-container {
        padding: 100px 0;
        text-align: center;
        background: #f8fafc;
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .success-card {
        background: white;
        padding: 60px;
        border-radius: 24px;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        max-width: 600px;
        width: 100%;
        animation: fadeIn 0.8s ease-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .checkmark-wrapper {
        width: 100px;
        height: 100px;
        background: #dcfce7;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 30px;
    }
    .checkmark-wrapper i {
        font-size: 3rem;
        color: #22c55e;
        animation: scaleIn 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) 0.3s both;
    }
    @keyframes scaleIn {
        from { transform: scale(0); }
        to { transform: scale(1); }
    }
    h2 { color: var(--secondary); font-size: 2.2rem; margin-bottom: 20px; }
    p { color: #64748b; font-size: 1.1rem; line-height: 1.6; margin-bottom: 30px; }
    
    .course-summary {
        background: #f1f5f9;
        padding: 20px;
        border-radius: 16px;
        margin-bottom: 30px;
        text-align: left;
    }
    .course-summary h4 { color: var(--secondary); margin-bottom: 5px; }
    .course-summary span { color: var(--primary); font-weight: 600; font-size: 0.9rem; }

    .actions {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    .btn-action {
        padding: 16px 32px;
        border-radius: 12px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    .btn-primary { 
        background: var(--primary); 
        color: white; 
    }
    .btn-primary:hover { 
        background: #86b391; 
        transform: translateY(-2px); 
    }
    .btn-back {
        color: #64748b;
        font-size: 0.9rem;
    }
    .btn-back:hover { color: var(--secondary); }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 93
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

        // line 94
        yield "<div class=\"success-container\">
    <div class=\"success-card\">
        <div class=\"checkmark-wrapper\">
            <i class=\"fas fa-check\"></i>
        </div>
        
        <h2>Félicitations !</h2>
        <p>Votre paiement a été validé avec succès. Vous avez désormais un accès illimité à ce cours.</p>
        
        <div class=\"course-summary\">
            <span>Votre nouveau cours :</span>
            <h4>";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 105, $this->source); })()), "titre", [], "any", false, false, false, 105), "html", null, true);
        yield "</h4>
            <div style=\"font-size: 0.85rem; color: #94a3b8; margin-top: 5px;\">
                <i class=\"fas fa-clock\"></i> ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 107, $this->source); })()), "dureeTotale", [], "any", false, false, false, 107), "html", null, true);
        yield " • <i class=\"fas fa-language\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 107, $this->source); })()), "langue", [], "any", false, false, false, 107), "html", null, true);
        yield "
            </div>
        </div>
        
        <div class=\"actions\">
            <a href=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_cours_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 112, $this->source); })()), "id", [], "any", false, false, false, 112)]), "html", null, true);
        yield "\" class=\"btn-action btn-primary\">
                <i class=\"fas fa-play-circle\"></i> Commencer à apprendre
            </a>
            
            <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_matiere_catalog");
        yield "\" class=\"btn-action btn-back\">
                Retour au catalogue
            </a>
        </div>
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
        return "etudiant/payment/success.html.twig";
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
        return array (  246 => 116,  239 => 112,  229 => 107,  224 => 105,  211 => 94,  198 => 93,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/home.html.twig' %}

{% block title %}Paiement Réussi - {{ cours.titre }}{% endblock %}

{% block stylesheets %}
<style>
    .success-container {
        padding: 100px 0;
        text-align: center;
        background: #f8fafc;
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .success-card {
        background: white;
        padding: 60px;
        border-radius: 24px;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        max-width: 600px;
        width: 100%;
        animation: fadeIn 0.8s ease-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .checkmark-wrapper {
        width: 100px;
        height: 100px;
        background: #dcfce7;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 30px;
    }
    .checkmark-wrapper i {
        font-size: 3rem;
        color: #22c55e;
        animation: scaleIn 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) 0.3s both;
    }
    @keyframes scaleIn {
        from { transform: scale(0); }
        to { transform: scale(1); }
    }
    h2 { color: var(--secondary); font-size: 2.2rem; margin-bottom: 20px; }
    p { color: #64748b; font-size: 1.1rem; line-height: 1.6; margin-bottom: 30px; }
    
    .course-summary {
        background: #f1f5f9;
        padding: 20px;
        border-radius: 16px;
        margin-bottom: 30px;
        text-align: left;
    }
    .course-summary h4 { color: var(--secondary); margin-bottom: 5px; }
    .course-summary span { color: var(--primary); font-weight: 600; font-size: 0.9rem; }

    .actions {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    .btn-action {
        padding: 16px 32px;
        border-radius: 12px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    .btn-primary { 
        background: var(--primary); 
        color: white; 
    }
    .btn-primary:hover { 
        background: #86b391; 
        transform: translateY(-2px); 
    }
    .btn-back {
        color: #64748b;
        font-size: 0.9rem;
    }
    .btn-back:hover { color: var(--secondary); }
</style>
{% endblock %}

{% block body %}
<div class=\"success-container\">
    <div class=\"success-card\">
        <div class=\"checkmark-wrapper\">
            <i class=\"fas fa-check\"></i>
        </div>
        
        <h2>Félicitations !</h2>
        <p>Votre paiement a été validé avec succès. Vous avez désormais un accès illimité à ce cours.</p>
        
        <div class=\"course-summary\">
            <span>Votre nouveau cours :</span>
            <h4>{{ cours.titre }}</h4>
            <div style=\"font-size: 0.85rem; color: #94a3b8; margin-top: 5px;\">
                <i class=\"fas fa-clock\"></i> {{ cours.dureeTotale }} • <i class=\"fas fa-language\"></i> {{ cours.langue }}
            </div>
        </div>
        
        <div class=\"actions\">
            <a href=\"{{ path('app_etudiant_cours_view', {'id': cours.id}) }}\" class=\"btn-action btn-primary\">
                <i class=\"fas fa-play-circle\"></i> Commencer à apprendre
            </a>
            
            <a href=\"{{ path('app_etudiant_matiere_catalog') }}\" class=\"btn-action btn-back\">
                Retour au catalogue
            </a>
        </div>
    </div>
</div>
{% endblock %}
", "etudiant/payment/success.html.twig", "C:\\Users\\pc\\Desktop\\LearnFlex-\\templates\\etudiant\\payment\\success.html.twig");
    }
}
