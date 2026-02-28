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

/* etudiant/cours/view.html.twig */
class __TwigTemplate_bd11732ff7c54d653bb30893a8dfa495 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/cours/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/cours/view.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " - Mode Apprentissage";
        
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
    :root {
        --glass: rgba(255, 255, 255, 0.7);
        --glass-border: rgba(255, 255, 255, 0.2);
    }

    body {
        background: #f1f5f9;
        overflow-x: hidden;
    }

    .learning-layout {
        display: grid;
        grid-template-columns: 350px 1fr;
        height: calc(100vh - 70px);
        gap: 0;
    }

    /* Sidebar Styles */
    .course-sidebar {
        background: white;
        border-right: 1px solid #e2e8f0;
        overflow-y: auto;
        padding: 30px 0;
        z-index: 10;
        box-shadow: 10px 0 30px rgba(0,0,0,0.02);
    }

    .sidebar-header {
        padding: 0 25px 30px 25px;
        border-bottom: 1px solid #f1f5f9;
    }

    .progress-wrapper {
        margin-top: 15px;
    }

    .progress-bar-custom {
        height: 8px;
        background: #f1f5f9;
        border-radius: 10px;
        overflow: hidden;
    }

    .progress-fill {
        height: 100%;
        background: linear-gradient(90deg, #10b981, #059669);
        width: 45%; /* Simulated progress */
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(16, 185, 129, 0.3);
    }

    .chapter-list {
        list-style: none;
        padding: 20px 0;
    }

    .chapter-item {
        padding: 15px 25px;
        display: flex;
        align-items: center;
        gap: 15px;
        cursor: pointer;
        transition: all 0.2s ease;
        border-left: 4px solid transparent;
        color: #64748b;
    }

    .chapter-item:hover {
        background: #f8fafc;
        color: var(--primary);
    }

    .chapter-item.active {
        background: #ecfdf5;
        color: #065f46;
        border-left-color: #10b981;
        font-weight: 600;
    }

    .chapter-icon {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f1f5f9;
        font-size: 0.9rem;
    }

    .active .chapter-icon {
        background: #10b981;
        color: white;
    }

    /* Main Content Styles */
    .learning-content {
        background: #f8fafc;
        overflow-y: auto;
        padding: 40px;
        position: relative;
    }

    .video-hero {
        width: 100%;
        max-width: 1000px;
        margin: 0 auto 40px auto;
        aspect-ratio: 16/9;
        background: #1e293b;
        border-radius: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 25px 50px -12px rgba(0,0,0,0.15);
        position: relative;
        overflow: hidden;
    }

    .video-hero::after {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: linear-gradient(to bottom, transparent 60%, rgba(0,0,0,0.8));
    }

    .play-overlay {
        position: absolute;
        z-index: 5;
        text-align: center;
        color: white;
    }

    .play-btn {
        width: 80px;
        height: 80px;
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        margin: 0 auto 20px auto;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid rgba(255,255,255,0.3);
    }

    .play-btn:hover {
        transform: scale(1.1);
        background: #10b981;
        border-color: #10b981;
    }

    .content-card {
        background: white;
        border-radius: 24px;
        padding: 40px;
        max-width: 1000px;
        margin: 0 auto;
        border: 1px solid #e2e8f0;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    }

    .badge-premium {
        background: #fef3c7;
        color: #92400e;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 0.8rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .action-row {
        display: flex;
        gap: 20px;
        margin-top: 30px;
    }

    .btn-action {
        flex: 1;
        padding: 16px;
        border-radius: 12px;
        text-align: center;
        text-decoration: none;
        font-weight: 700;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .btn-pdf {
        background: #ef4444;
        color: white;
    }

    .btn-pdf:hover { background: #dc2626; box-shadow: 0 10px 15px -3px rgba(239, 68, 68, 0.3); }

    .btn-ai {
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        color: white;
    }

    .btn-ai:hover { box-shadow: 0 10px 15px -3px rgba(124, 58, 237, 0.3); transform: translateY(-2px); }

    .ai-bubble {
        background: #f0f9ff;
        border: 1px solid #bae6fd;
        padding: 20px;
        border-radius: 16px;
        margin-top: 30px;
        display: flex;
        gap: 15px;
    }

    .ai-avatar {
        width: 40px;
        height: 40px;
        background: #0ea5e9;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        flex-shrink: 0;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 239
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

        // line 240
        yield "<div class=\"learning-layout\">
    <!-- Sidebar -->
    <aside class=\"course-sidebar\">
        <div class=\"sidebar-header\">
            <a href=\"";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_cours_list", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 244, $this->source); })()), "matiere", [], "any", false, false, false, 244), "id", [], "any", false, false, false, 244)]), "html", null, true);
        yield "\" style=\"color: #64748b; text-decoration: none; font-size: 0.9rem; margin-bottom: 20px; display: block;\">
                <i class=\"fas fa-arrow-left\"></i> Retour au catalogue
            </a>
            <h5 style=\"color: #0f172a; font-weight: 700; font-size: 1.1rem; line-height: 1.4;\">";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 247, $this->source); })()), "titre", [], "any", false, false, false, 247), "html", null, true);
        yield "</h5>
            
            <div class=\"progress-wrapper\">
                <div style=\"display: flex; justify-content: space-between; font-size: 0.8rem; margin-bottom: 5px;\">
                    <span style=\"color: #64748b;\">Progression</span>
                    <span style=\"color: #10b981; font-weight: 700;\">45%</span>
                </div>
                <div class=\"progress-bar-custom\">
                    <div class=\"progress-fill\"></div>
                </div>
            </div>
        </div>

        <ul class=\"chapter-list\">
            <li class=\"chapter-item\">
                <div class=\"chapter-icon\"><i class=\"fas fa-check\"></i></div>
                <span>1. Introduction & Concepts</span>
            </li>
            <li class=\"chapter-item active\">
                <div class=\"chapter-icon\"><i class=\"fas fa-play\"></i></div>
                <span>2. Analyse approfondie</span>
            </li>
            <li class=\"chapter-item\">
                <div class=\"chapter-icon\">3</div>
                <span>3. Cas pratique guidé</span>
            </li>
            <li class=\"chapter-item\">
                <div class=\"chapter-icon\">4</div>
                <span>4. Mise en situation</span>
            </li>
            <li class=\"chapter-item\">
                <div class=\"chapter-icon\">5</div>
                <span>5. Conclusion & Quiz</span>
            </li>
        </ul>
    </aside>

    <!-- Content -->
    <main class=\"learning-content\">
        <div class=\"video-hero\">
            <div class=\"play-overlay\">
                <div class=\"play-btn\">
                    <i class=\"fas fa-play fa-lg\"></i>
                </div>
                <h4 style=\"font-weight: 700;\">Continuer la lecture</h4>
                <p style=\"opacity: 0.8;\">Chapitre 2 : Analyse approfondie (15:42)</p>
            </div>
            ";
        // line 294
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 294, $this->source); })()), "image", [], "any", false, false, false, 294)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 295
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 295, $this->source); })()), "image", [], "any", false, false, false, 295))), "html", null, true);
            yield "\" style=\"width: 100%; height: 100%; object-fit: cover; opacity: 0.4;\" alt=\"\">
            ";
        }
        // line 297
        yield "        </div>

        <div class=\"content-card\">
            <div style=\"display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;\">
                <span class=\"badge-premium\">Certifié LearnFlex</span>
                <span style=\"color: #94a3b8; font-size: 0.9rem;\">Dernière consultation: Aujourd'hui</span>
            </div>

            <h2 style=\"font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 20px;\">";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 305, $this->source); })()), "titre", [], "any", false, false, false, 305), "html", null, true);
        yield "</h2>
            
            <p style=\"color: #475569; font-size: 1.1rem; line-height: 1.8;\">
                ";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 308, $this->source); })()), "description", [], "any", false, false, false, 308), "html", null, true);
        yield "
            </p>

            ";
        // line 311
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 311, $this->source); })()), "pdfFile", [], "any", false, false, false, 311)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 312
            yield "                <div class=\"action-row\">
                    <a href=\"";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 313, $this->source); })()), "pdfFile", [], "any", false, false, false, 313))), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn-action btn-pdf\">
                        <i class=\"fas fa-file-pdf\"></i>
                        Ouvrir le Support de Cours (PDF)
                    </a>
                </div>
            ";
        }
        // line 319
        yield "
            <div class=\"ai-bubble\">
                <div class=\"ai-avatar\">
                    <i class=\"fas fa-robot\"></i>
                </div>
                <div>
                    <h6 style=\"color: #0369a1; font-weight: 700; margin-bottom: 5px;\">Assistant Pédagogique IA</h6>
                    <p style=\"color: #0c4a6e; font-size: 0.95rem; margin-bottom: 12px; line-height: 1.5;\">
                        Besoin d'aide sur le chapitre actuel ? Je peux vous résumer les points clés ou répondre à vos questions sur <strong>\"";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 327, $this->source); })()), "titre", [], "any", false, false, false, 327), "html", null, true);
        yield "\"</strong>.
                    </p>
                    <a href=\"#\" style=\"color: #0ea5e9; text-decoration: none; font-weight: 700; font-size: 0.9rem;\">
                        <i class=\"fas fa-magic\"></i> Poser une question maintenant
                    </a>
                </div>
            </div>
        </div>
    </main>
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
        return "etudiant/cours/view.html.twig";
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
        return array (  473 => 327,  463 => 319,  454 => 313,  451 => 312,  449 => 311,  443 => 308,  437 => 305,  427 => 297,  421 => 295,  419 => 294,  369 => 247,  363 => 244,  357 => 240,  344 => 239,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/home.html.twig' %}

{% block title %}{{ cours.titre }} - Mode Apprentissage{% endblock %}

{% block stylesheets %}
<style>
    :root {
        --glass: rgba(255, 255, 255, 0.7);
        --glass-border: rgba(255, 255, 255, 0.2);
    }

    body {
        background: #f1f5f9;
        overflow-x: hidden;
    }

    .learning-layout {
        display: grid;
        grid-template-columns: 350px 1fr;
        height: calc(100vh - 70px);
        gap: 0;
    }

    /* Sidebar Styles */
    .course-sidebar {
        background: white;
        border-right: 1px solid #e2e8f0;
        overflow-y: auto;
        padding: 30px 0;
        z-index: 10;
        box-shadow: 10px 0 30px rgba(0,0,0,0.02);
    }

    .sidebar-header {
        padding: 0 25px 30px 25px;
        border-bottom: 1px solid #f1f5f9;
    }

    .progress-wrapper {
        margin-top: 15px;
    }

    .progress-bar-custom {
        height: 8px;
        background: #f1f5f9;
        border-radius: 10px;
        overflow: hidden;
    }

    .progress-fill {
        height: 100%;
        background: linear-gradient(90deg, #10b981, #059669);
        width: 45%; /* Simulated progress */
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(16, 185, 129, 0.3);
    }

    .chapter-list {
        list-style: none;
        padding: 20px 0;
    }

    .chapter-item {
        padding: 15px 25px;
        display: flex;
        align-items: center;
        gap: 15px;
        cursor: pointer;
        transition: all 0.2s ease;
        border-left: 4px solid transparent;
        color: #64748b;
    }

    .chapter-item:hover {
        background: #f8fafc;
        color: var(--primary);
    }

    .chapter-item.active {
        background: #ecfdf5;
        color: #065f46;
        border-left-color: #10b981;
        font-weight: 600;
    }

    .chapter-icon {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f1f5f9;
        font-size: 0.9rem;
    }

    .active .chapter-icon {
        background: #10b981;
        color: white;
    }

    /* Main Content Styles */
    .learning-content {
        background: #f8fafc;
        overflow-y: auto;
        padding: 40px;
        position: relative;
    }

    .video-hero {
        width: 100%;
        max-width: 1000px;
        margin: 0 auto 40px auto;
        aspect-ratio: 16/9;
        background: #1e293b;
        border-radius: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 25px 50px -12px rgba(0,0,0,0.15);
        position: relative;
        overflow: hidden;
    }

    .video-hero::after {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: linear-gradient(to bottom, transparent 60%, rgba(0,0,0,0.8));
    }

    .play-overlay {
        position: absolute;
        z-index: 5;
        text-align: center;
        color: white;
    }

    .play-btn {
        width: 80px;
        height: 80px;
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        margin: 0 auto 20px auto;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid rgba(255,255,255,0.3);
    }

    .play-btn:hover {
        transform: scale(1.1);
        background: #10b981;
        border-color: #10b981;
    }

    .content-card {
        background: white;
        border-radius: 24px;
        padding: 40px;
        max-width: 1000px;
        margin: 0 auto;
        border: 1px solid #e2e8f0;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    }

    .badge-premium {
        background: #fef3c7;
        color: #92400e;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 0.8rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .action-row {
        display: flex;
        gap: 20px;
        margin-top: 30px;
    }

    .btn-action {
        flex: 1;
        padding: 16px;
        border-radius: 12px;
        text-align: center;
        text-decoration: none;
        font-weight: 700;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .btn-pdf {
        background: #ef4444;
        color: white;
    }

    .btn-pdf:hover { background: #dc2626; box-shadow: 0 10px 15px -3px rgba(239, 68, 68, 0.3); }

    .btn-ai {
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        color: white;
    }

    .btn-ai:hover { box-shadow: 0 10px 15px -3px rgba(124, 58, 237, 0.3); transform: translateY(-2px); }

    .ai-bubble {
        background: #f0f9ff;
        border: 1px solid #bae6fd;
        padding: 20px;
        border-radius: 16px;
        margin-top: 30px;
        display: flex;
        gap: 15px;
    }

    .ai-avatar {
        width: 40px;
        height: 40px;
        background: #0ea5e9;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        flex-shrink: 0;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"learning-layout\">
    <!-- Sidebar -->
    <aside class=\"course-sidebar\">
        <div class=\"sidebar-header\">
            <a href=\"{{ path('app_etudiant_cours_list', {'id': cours.matiere.id}) }}\" style=\"color: #64748b; text-decoration: none; font-size: 0.9rem; margin-bottom: 20px; display: block;\">
                <i class=\"fas fa-arrow-left\"></i> Retour au catalogue
            </a>
            <h5 style=\"color: #0f172a; font-weight: 700; font-size: 1.1rem; line-height: 1.4;\">{{ cours.titre }}</h5>
            
            <div class=\"progress-wrapper\">
                <div style=\"display: flex; justify-content: space-between; font-size: 0.8rem; margin-bottom: 5px;\">
                    <span style=\"color: #64748b;\">Progression</span>
                    <span style=\"color: #10b981; font-weight: 700;\">45%</span>
                </div>
                <div class=\"progress-bar-custom\">
                    <div class=\"progress-fill\"></div>
                </div>
            </div>
        </div>

        <ul class=\"chapter-list\">
            <li class=\"chapter-item\">
                <div class=\"chapter-icon\"><i class=\"fas fa-check\"></i></div>
                <span>1. Introduction & Concepts</span>
            </li>
            <li class=\"chapter-item active\">
                <div class=\"chapter-icon\"><i class=\"fas fa-play\"></i></div>
                <span>2. Analyse approfondie</span>
            </li>
            <li class=\"chapter-item\">
                <div class=\"chapter-icon\">3</div>
                <span>3. Cas pratique guidé</span>
            </li>
            <li class=\"chapter-item\">
                <div class=\"chapter-icon\">4</div>
                <span>4. Mise en situation</span>
            </li>
            <li class=\"chapter-item\">
                <div class=\"chapter-icon\">5</div>
                <span>5. Conclusion & Quiz</span>
            </li>
        </ul>
    </aside>

    <!-- Content -->
    <main class=\"learning-content\">
        <div class=\"video-hero\">
            <div class=\"play-overlay\">
                <div class=\"play-btn\">
                    <i class=\"fas fa-play fa-lg\"></i>
                </div>
                <h4 style=\"font-weight: 700;\">Continuer la lecture</h4>
                <p style=\"opacity: 0.8;\">Chapitre 2 : Analyse approfondie (15:42)</p>
            </div>
            {% if cours.image %}
                <img src=\"{{ asset('uploads/images/' ~ cours.image) }}\" style=\"width: 100%; height: 100%; object-fit: cover; opacity: 0.4;\" alt=\"\">
            {% endif %}
        </div>

        <div class=\"content-card\">
            <div style=\"display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;\">
                <span class=\"badge-premium\">Certifié LearnFlex</span>
                <span style=\"color: #94a3b8; font-size: 0.9rem;\">Dernière consultation: Aujourd'hui</span>
            </div>

            <h2 style=\"font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 20px;\">{{ cours.titre }}</h2>
            
            <p style=\"color: #475569; font-size: 1.1rem; line-height: 1.8;\">
                {{ cours.description }}
            </p>

            {% if cours.pdfFile %}
                <div class=\"action-row\">
                    <a href=\"{{ asset('uploads/images/' ~ cours.pdfFile) }}\" target=\"_blank\" class=\"btn-action btn-pdf\">
                        <i class=\"fas fa-file-pdf\"></i>
                        Ouvrir le Support de Cours (PDF)
                    </a>
                </div>
            {% endif %}

            <div class=\"ai-bubble\">
                <div class=\"ai-avatar\">
                    <i class=\"fas fa-robot\"></i>
                </div>
                <div>
                    <h6 style=\"color: #0369a1; font-weight: 700; margin-bottom: 5px;\">Assistant Pédagogique IA</h6>
                    <p style=\"color: #0c4a6e; font-size: 0.95rem; margin-bottom: 12px; line-height: 1.5;\">
                        Besoin d'aide sur le chapitre actuel ? Je peux vous résumer les points clés ou répondre à vos questions sur <strong>\"{{ cours.titre }}\"</strong>.
                    </p>
                    <a href=\"#\" style=\"color: #0ea5e9; text-decoration: none; font-weight: 700; font-size: 0.9rem;\">
                        <i class=\"fas fa-magic\"></i> Poser une question maintenant
                    </a>
                </div>
            </div>
        </div>
    </main>
</div>
{% endblock %}
", "etudiant/cours/view.html.twig", "C:\\Users\\pc\\Desktop\\LearnFlex-\\templates\\etudiant\\cours\\view.html.twig");
    }
}
