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

/* enseignant/cours/manage.html.twig */
class __TwigTemplate_440837bd534dcd77c7f6b650451fe057 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/cours/manage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/cours/manage.html.twig"));

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

        yield "Gestion des Cours - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 3, $this->source); })()), "nomMatiere", [], "any", false, false, false, 3), "html", null, true);
        
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
    .manage-container { padding: 80px 0; background: #f1f5f9; min-height: 100vh; }
    .header-actions { display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px; }
    .header-actions h2 { font-size: 2rem; color: var(--secondary); }
    
    .btn-add {
        background: var(--primary); color: white; padding: 12px 24px; border-radius: 12px;
        display: flex; align-items: center; gap: 10px; font-weight: 600; cursor: pointer;
        transition: all 0.3s ease; border: none;
    }
    .btn-add:hover { background: #86b391; transform: translateY(-2px); }

    .cours-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 25px;
    }

    .cours-card {
        background: white; border-radius: 16px; overflow: hidden;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
        display: flex; flex-direction: column; height: 100%;
        transition: transform 0.3s ease;
    }
    .cours-card:hover { transform: translateY(-5px); }

    .cours-image { height: 180px; position: relative; }
    .cours-image img { width: 100%; height: 100%; object-fit: cover; }
    
    .cours-content { padding: 20px; flex-grow: 1; }
    .cours-content h4 { font-size: 1.1rem; color: #1e293b; margin-bottom: 10px; }
    .file-name-preview { margin-top: 10px; font-size: 0.9rem; color: #64748b; }
    
    /* AI Modal Styles */
    .ai-modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        align-items: center;
        justify-content: center;
        animation: fadeIn 0.3s;
    }

    .ai-modal-content {
        background: white;
        border-radius: 16px;
        width: 90%;
        max-width: 800px;
        max-height: 90vh;
        overflow-y: auto;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        animation: slideUp 0.3s;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideUp {
        from { transform: translateY(50px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    .ai-modal-header {
        padding: 24px;
        border-bottom: 2px solid #f1f5f9;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: linear-gradient(135deg, #8b5cf6 0%, #6366f1 100%);
        color: white;
        border-radius: 16px 16px 0 0;
    }

    .ai-modal-header h3 {
        margin: 0;
        font-size: 1.5rem;
    }

    .ai-modal-close {
        background: none;
        border: none;
        font-size: 2rem;
        color: white;
        cursor: pointer;
        line-height: 1;
        transition: transform 0.2s;
    }

    .ai-modal-close:hover {
        transform: scale(1.2);
    }

    .ai-modal-body {
        padding: 24px;
    }

    .ai-section {
        margin-bottom: 24px;
        padding: 20px;
        background: #f8fafc;
        border-radius: 12px;
        border-left: 4px solid #8b5cf6;
    }

    .ai-section h4 {
        color: #1e293b;
        margin: 0 0 12px 0;
        font-size: 1.1rem;
    }

    .ai-section h4 i {
        color: #8b5cf6;
        margin-right: 8px;
    }

    .ai-content {
        color: #475569;
        line-height: 1.7;
        margin: 12px 0;
    }

    .ai-list {
        list-style: none;
        padding: 0;
        margin: 12px 0;
    }

    .ai-list li {
        padding: 10px 12px;
        margin: 8px 0;
        background: white;
        border-radius: 8px;
        color: #475569;
        border-left: 3px solid #8b5cf6;
    }

    .btn-apply {
        background: #8b5cf6;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s;
        margin-top: 12px;
    }

    .btn-apply:hover {
        background: #7c3aed;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(139, 92, 246, 0.3);
    }
    .cours-content p { font-size: 0.9rem; color: #64748b; line-height: 1.4; margin-bottom: 15px; }

    .cours-meta { display: flex; gap: 15px; font-size: 0.85rem; color: #94a3b8; margin-bottom: 15px; }
    .cours-meta span { display: flex; align-items: center; gap: 5px; }

    .cours-actions {
        padding: 15px 20px; border-top: 1px solid #f1f5f9;
        display: flex; justify-content: flex-end; gap: 10px;
    }
    .action-btn { 
        width: 36px; height: 36px; border-radius: 8px; 
        display: flex; align-items: center; justify-content: center;
        transition: all 0.2s ease; border: none; cursor: pointer;
    }
    .btn-edit { background: #eff6ff; color: #2563eb; }
    .btn-edit:hover { background: #2563eb; color: white; }
    .btn-delete { background: #fff1f2; color: #e11d48; }
    .btn-delete:hover { background: #e11d48; color: white; }

    /* Modal Styling */
    .modal {
        display: none; position: fixed; z-index: 1000; left: 0; top: 0;
        width: 100%; height: 100%; background: rgba(0,0,0,0.5);
        backdrop-filter: blur(4px);
    }
    .modal-content {
        background: white; margin: 2% auto; padding: 30px; border-radius: 20px;
        width: 90%; max-width: 600px; position: relative;
        animation: slideDown 0.4s ease-out;
        max-height: 90vh; overflow-y: auto;
    }
    @keyframes slideDown { 
        from { transform: translateY(-50px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    /* Scrollbar for modal */
    .modal-content::-webkit-scrollbar { width: 8px; }
    .modal-content::-webkit-scrollbar-track { background: #f1f5f9; border-radius: 10px; }
    .modal-content::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    .modal-content::-webkit-scrollbar-thumb:hover { background: #94a3b8; }

    .close-modal { position: absolute; right: 25px; top: 20px; font-size: 1.5rem; cursor: pointer; color: #94a3b8; z-index: 10; }
    
    .form-group { margin-bottom: 20px; }
    .form-group label { display: block; margin-bottom: 8px; font-weight: 600; color: #1e293b; }
    .form-group input, .form-group textarea, .form-group select {
        width: 100%; padding: 12px; border: 1px solid #e2e8f0; border-radius: 10px;
        background-color: white; color: #1e293b; font-size: 0.95rem;
        transition: all 0.3s ease;
    }
    .form-group input:focus, .form-group textarea:focus, .form-group select:focus {
        border-color: var(--primary); outline: none; box-shadow: 0 0 0 3px rgba(151, 195, 162, 0.1);
    }

    /* Premium File Upload in Modal */
    .file-upload-wrapper {
        position: relative;
        width: 100%;
        margin-top: 5px;
    }
    .file-upload-label {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 30px 20px;
        background: #f8fafc;
        border: 2px dashed #e2e8f0;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.3s ease;
        color: #64748b;
    }
    .file-upload-label i { font-size: 2rem; color: var(--primary); margin-bottom: 10px; }
    .file-upload-label:hover { border-color: var(--primary); background: #f0fdf4; }
    .file-input-hidden { display: none; }
    .file-name-preview {
        margin-top: 8px;
        font-size: 0.85rem;
        color: var(--primary);
        font-weight: 500;
        text-align: center;
    }

    /* Validation Errors */
    .invalid-feedback {
        color: #e11d48;
        font-size: 0.85rem;
        margin-top: 5px;
        display: block;
        font-weight: 500;
    }
    .is-invalid {
        border-color: #e11d48 !important;
        background-color: #fff1f2 !important;
    }
    .is-invalid:focus {
        box-shadow: 0 0 0 3px rgba(225, 29, 72, 0.1) !important;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 269
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

        // line 270
        yield "<div class=\"manage-container\">
    <div class=\"container\">
        <div class=\"header-actions\">
            <div>
                <a href=\"";
        // line 274
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enseignant_matiere_index");
        yield "\" style=\"color: #64748b; text-decoration: none; font-size: 0.9rem;\">
                    <i class=\"fas fa-arrow-left\"></i> Retour aux matières
                </a>
                <h2>";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 277, $this->source); })()), "nomMatiere", [], "any", false, false, false, 277), "html", null, true);
        yield "</h2>
            </div>
            <button class=\"btn-add\" onclick=\"openModal('addModal')\">
                <i class=\"fas fa-plus\"></i> Nouveau Cours
            </button>
        </div>

        ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 284, $this->source); })()), "flashes", ["success"], "method", false, false, false, 284));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 285
            yield "            <div style=\"background: #dcfce7; color: #166534; padding: 16px; border-radius: 12px; margin-bottom: 30px; display: flex; align-items: center; gap: 10px;\">
                <i class=\"fas fa-check-circle\"></i> ";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        yield "
        <div class=\"cours-grid\">
            ";
        // line 291
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cours_list"]) || array_key_exists("cours_list", $context) ? $context["cours_list"] : (function () { throw new RuntimeError('Variable "cours_list" does not exist.', 291, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 292
            yield "                <div class=\"cours-card\">
                    <div class=\"cours-image\">
                        ";
            // line 294
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "image", [], "any", false, false, false, 294)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 295
                yield "                            ";
                if (CoreExtension::inFilter("http", CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "image", [], "any", false, false, false, 295))) {
                    // line 296
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "image", [], "any", false, false, false, 296), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "titre", [], "any", false, false, false, 296), "html", null, true);
                    yield "\">
                            ";
                } else {
                    // line 298
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "image", [], "any", false, false, false, 298))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "titre", [], "any", false, false, false, 298), "html", null, true);
                    yield "\">
                            ";
                }
                // line 300
                yield "                        ";
            } else {
                // line 301
                yield "                            <div style=\"display: flex; align-items: center; justify-content: center; height: 100%; background: #f1f5f9; color: #cbd5e1;\">
                                <i class=\"fas fa-image fa-3x\"></i>
                            </div>
                        ";
            }
            // line 305
            yield "                    </div>
                    <div class=\"cours-content\">
                        <h4>";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "titre", [], "any", false, false, false, 307), "html", null, true);
            yield "</h4>
                        <p>";
            // line 308
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "description", [], "any", false, false, false, 308), 0, 120), "html", null, true);
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "description", [], "any", false, false, false, 308)) > 120)) ? ("...") : (""));
            yield "</p>
                        <div class=\"cours-meta\">
                            <span><i class=\"fas fa-clock\"></i> ";
            // line 310
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "dureeTotale", [], "any", false, false, false, 310), "html", null, true);
            yield "</span>
                            <span><i class=\"fas fa-language\"></i> ";
            // line 311
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "langue", [], "any", false, false, false, 311), "html", null, true);
            yield "</span>
                            <span style=\"font-weight: bold; color: var(--primary);\"><i class=\"fas fa-tag\"></i> ";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "prix", [], "any", false, false, false, 312), "html", null, true);
            yield " USD</span>
                        </div>
                    </div>
                    <div class=\"cours-actions\">
                        <button class=\"action-btn btn-edit\" title=\"Modifier\" onclick=\"openEditModal(";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "id", [], "any", false, false, false, 316), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "titre", [], "any", false, false, false, 316), "js"), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "description", [], "any", false, false, false, 316), "js"), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "section", [], "any", false, false, false, 316), "js"), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "dureeTotale", [], "any", false, false, false, 316), "js"), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "langue", [], "any", false, false, false, 316), "js"), "html", null, true);
            yield "', ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "matiere", [], "any", false, false, false, 316), "id", [], "any", false, false, false, 316), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "image", [], "any", false, false, false, 316), "js"), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "prix", [], "any", false, false, false, 316), "html", null, true);
            yield "')\">
                            <i class=\"fas fa-edit\"></i>
                        </button>
                        <form method=\"post\" action=\"";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enseignant_cours_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "id", [], "any", false, false, false, 319)]), "html", null, true);
            yield "\" style=\"display: inline-block\" onsubmit=\"return confirm('Supprimer ce cours ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "id", [], "any", false, false, false, 320))), "html", null, true);
            yield "\">
                            <button class=\"action-btn btn-delete\" title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        </form>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 327
        if (!$context['_iterated']) {
            // line 328
            yield "                <div style=\"grid-column: 1/-1; text-align: center; padding: 50px; background: white; border-radius: 20px;\">
                    <i class=\"fas fa-book fa-3x\" style=\"color: #cbd5e1; margin-bottom: 20px;\"></i>
                    <p style=\"color: #64748b;\">Aucun cours créé pour cette matière.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cours'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
        yield "        </div>
    </div>
</div>

<!-- ajouter  form -->
<div id=\"addModal\" class=\"modal\">
    <div class=\"modal-content\">
        <span class=\"close-modal\" onclick=\"closeModal('addModal')\">&times;</span>
        <h3 style=\"margin-bottom: 25px; color: var(--secondary);\">Ajouter un nouveau cours</h3>
        ";
        // line 342
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 342, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
            <div class=\"form-group\">
                ";
        // line 344
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 344, $this->source); })()), "titre", [], "any", false, false, false, 344), 'label');
        yield "
                ";
        // line 345
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 345, $this->source); })()), "titre", [], "any", false, false, false, 345), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 345, $this->source); })()), "titre", [], "any", false, false, false, 345), "vars", [], "any", false, false, false, 345), "errors", [], "any", false, false, false, 345)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
                ";
        // line 346
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 346, $this->source); })()), "titre", [], "any", false, false, false, 346), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 349
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 349, $this->source); })()), "description", [], "any", false, false, false, 349), 'label');
        yield "
                ";
        // line 350
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), "description", [], "any", false, false, false, 350), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), "description", [], "any", false, false, false, 350), "vars", [], "any", false, false, false, 350), "errors", [], "any", false, false, false, 350)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
                ";
        // line 351
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 351, $this->source); })()), "description", [], "any", false, false, false, 351), 'errors');
        yield "
            </div>
            <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px;\">
                <div class=\"form-group\">
                    ";
        // line 355
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 355, $this->source); })()), "section", [], "any", false, false, false, 355), 'label');
        yield "
                    ";
        // line 356
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 356, $this->source); })()), "section", [], "any", false, false, false, 356), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 356, $this->source); })()), "section", [], "any", false, false, false, 356), "vars", [], "any", false, false, false, 356), "errors", [], "any", false, false, false, 356)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
                    ";
        // line 357
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 357, $this->source); })()), "section", [], "any", false, false, false, 357), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 360
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 360, $this->source); })()), "duree_totale", [], "any", false, false, false, 360), 'label');
        yield "
                    ";
        // line 361
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 361, $this->source); })()), "duree_totale", [], "any", false, false, false, 361), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 361, $this->source); })()), "duree_totale", [], "any", false, false, false, 361), "vars", [], "any", false, false, false, 361), "errors", [], "any", false, false, false, 361)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
                    ";
        // line 362
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 362, $this->source); })()), "duree_totale", [], "any", false, false, false, 362), 'errors');
        yield "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 366
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 366, $this->source); })()), "prix", [], "any", false, false, false, 366), 'label');
        yield "
                ";
        // line 367
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 367, $this->source); })()), "prix", [], "any", false, false, false, 367), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 367, $this->source); })()), "prix", [], "any", false, false, false, 367), "vars", [], "any", false, false, false, 367), "errors", [], "any", false, false, false, 367)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
                ";
        // line 368
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 368, $this->source); })()), "prix", [], "any", false, false, false, 368), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 371
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 371, $this->source); })()), "langue", [], "any", false, false, false, 371), 'label');
        yield "
                ";
        // line 372
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 372, $this->source); })()), "langue", [], "any", false, false, false, 372), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 372, $this->source); })()), "langue", [], "any", false, false, false, 372), "vars", [], "any", false, false, false, 372), "errors", [], "any", false, false, false, 372)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
                ";
        // line 373
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 373, $this->source); })()), "langue", [], "any", false, false, false, 373), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 376
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 376, $this->source); })()), "matiere", [], "any", false, false, false, 376), 'label');
        yield "
                ";
        // line 377
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 377, $this->source); })()), "matiere", [], "any", false, false, false, 377), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 377, $this->source); })()), "matiere", [], "any", false, false, false, 377), "vars", [], "any", false, false, false, 377), "errors", [], "any", false, false, false, 377)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
                ";
        // line 378
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 378, $this->source); })()), "matiere", [], "any", false, false, false, 378), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 381
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 381, $this->source); })()), "image", [], "any", false, false, false, 381), 'label');
        yield "
                <div class=\"file-upload-wrapper\">
                    <label for=\"";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 383, $this->source); })()), "image", [], "any", false, false, false, 383), "vars", [], "any", false, false, false, 383), "id", [], "any", false, false, false, 383), "html", null, true);
        yield "\" class=\"file-upload-label\">
                        <i class=\"fas fa-cloud-upload-alt\"></i>
                        <span>Cliquez pour choisir une image</span>
                    </label>
                    ";
        // line 387
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 387, $this->source); })()), "image", [], "any", false, false, false, 387), 'widget', ["attr" => ["class" => "file-input-hidden", "onchange" => "updateFileName(this, \"add-file-preview\")"]]);
        yield "
                    <div id=\"add-file-preview\" class=\"file-name-preview\">Aucun fichier sélectionné</div>
                </div>
                ";
        // line 390
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 390, $this->source); })()), "image", [], "any", false, false, false, 390), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 393
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 393, $this->source); })()), "pdf_file", [], "any", false, false, false, 393), 'label');
        yield "
                <div class=\"file-upload-wrapper\">
                    <label for=\"";
        // line 395
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 395, $this->source); })()), "pdf_file", [], "any", false, false, false, 395), "vars", [], "any", false, false, false, 395), "id", [], "any", false, false, false, 395), "html", null, true);
        yield "\" class=\"file-upload-label\">
                        <i class=\"fas fa-file-pdf\"></i>
                        <span>Cliquez pour choisir un PDF</span>
                    </label>
                    ";
        // line 399
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 399, $this->source); })()), "pdf_file", [], "any", false, false, false, 399), 'widget', ["attr" => ["class" => "file-input-hidden", "onchange" => "updateFileName(this, \"add-pdf-preview\")"]]);
        yield "
                    <div id=\"add-pdf-preview\" class=\"file-name-preview\">Aucun fichier sélectionné</div>
                </div>
                ";
        // line 402
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 402, $this->source); })()), "pdf_file", [], "any", false, false, false, 402), 'errors');
        yield "
            </div>
            <div style=\"margin-top: 20px; display: flex; gap: 10px;\">
                <button type=\"submit\" class=\"btn-add\" style=\"flex: 1; justify-content: center;\">
                    Créer le cours
                </button>
                <button type=\"button\" id=\"generate-content-btn-teacher\" class=\"btn-add\" style=\"background: #8b5cf6; border: none;\">
                    <i class=\"fas fa-robot\"></i> Générer avec AI
                </button>
                <button type=\"button\" class=\"btn-add ai-gen-btn\" style=\"background: #3b82f6; border: none;\">
                    <i class=\"fas fa-magic\"></i> AI Tips
                </button>
            </div>
            <div class=\"ai-tips-box\" style=\"display: none; margin-top: 20px; padding: 15px; background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 12px; color: #1e3a8a; font-size: 0.9rem;\">
                <h5 style=\"margin-bottom: 8px; font-weight: 700;\"><i class=\"fas fa-lightbulb\"></i> Suggestions AI</h5>
                <div class=\"ai-tips-content\"></div>
            </div>
        ";
        // line 419
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 419, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<!-- edit  form -->
<div id=\"editModal\" class=\"modal\">
    <div class=\"modal-content\">
        <span class=\"close-modal\" onclick=\"closeModal('editModal')\">&times;</span>
        <h3 style=\"margin-bottom: 25px; color: var(--secondary);\">Modifier le cours</h3>
        <form id=\"editForm\" method=\"post\" enctype=\"multipart/form-data\" novalidate>
            <input type=\"hidden\" name=\"cours[_token]\" id=\"editToken\">
            <input type=\"hidden\" name=\"cours[matiere]\" id=\"editMatiereId\">
            
            <div id=\"currentImageContainer\" style=\"margin-bottom: 20px; text-align: center; display: none;\">
                <label>Image actuelle</label>
                <img id=\"editImagePreview\" src=\"\" alt=\"Aperçu\" style=\"width: 100%; max-height: 150px; object-fit: contain; border-radius: 12px; margin-top: 10px; border: 1px solid #e2e8f0;\">
            </div>

            <div class=\"form-group\">
                <label>Titre</label>
                <input type=\"text\" name=\"cours[titre]\" id=\"editTitre\" required>
            </div>
            <div class=\"form-group\">
                <label>Description</label>
                <textarea name=\"cours[description]\" id=\"editDescription\" rows=\"4\" required></textarea>
            </div>
            <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px;\">
                <div class=\"form-group\">
                    <label>Section</label>
                    <input type=\"text\" name=\"cours[section]\" id=\"editSection\" required>
                </div>
                <div class=\"form-group\">
                    <label>Durée totale</label>
                    <input type=\"text\" name=\"cours[duree_totale]\" id=\"editDurée\" required>
                </div>
            </div>
            <div class=\"form-group\">
                <label>Prix</label>
                <input type=\"text\" name=\"cours[prix]\" id=\"editPrix\" required>
            </div>
            <div class=\"form-group\">
                <label>Langue</label>
                <input type=\"text\" name=\"cours[langue]\" id=\"editLangue\" required>
            </div>
            <div class=\"form-group\">
                <label>Changer l'image (optionnel)</label>
                <div class=\"file-upload-wrapper\">
                    <label for=\"editImageInput\" class=\"file-upload-label\">
                        <i class=\"fas fa-cloud-upload-alt\"></i>
                        <span>Cliquez pour changer l'image</span>
                    </label>
                    <input type=\"file\" name=\"cours[image]\" id=\"editImageInput\" class=\"file-input-hidden\" onchange=\"updateFileName(this, 'edit-file-preview')\">
                    <div id=\"edit-file-preview\" class=\"file-name-preview\">Aucun fichier sélectionné</div>
                </div>
            </div>
            <div class=\"form-group\">
                <label>Changer le PDF (optionnel)</label>
                <div class=\"file-upload-wrapper\">
                    <label for=\"editPdfInput\" class=\"file-upload-label\">
                        <i class=\"fas fa-file-pdf\"></i>
                        <span>Cliquez pour changer le PDF</span>
                    </label>
                    <input type=\"file\" name=\"cours[pdf_file]\" id=\"editPdfInput\" class=\"file-input-hidden\" accept=\".pdf\" onchange=\"updateFileName(this, 'edit-pdf-preview')\">
                    <div id=\"edit-pdf-preview\" class=\"file-name-preview\">Aucun fichier sélectionné</div>
                </div>
            </div>
            <div style=\"margin-top: 20px; display: flex; gap: 10px;\">
                <button type=\"submit\" class=\"btn-add\" style=\"flex: 1; justify-content: center;\">
                    Enregistrer les modifications
                </button>
                <button type=\"button\" class=\"btn-add ai-gen-btn\" style=\"background: #3b82f6; border: none;\">
                    <i class=\"fas fa-magic\"></i> AI Tips
                </button>
            </div>
            <div class=\"ai-tips-box\" style=\"display: none; margin-top: 20px; padding: 15px; background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 12px; color: #1e3a8a; font-size: 0.9rem;\">
                <h5 style=\"margin-bottom: 8px; font-weight: 700;\"><i class=\"fas fa-lightbulb\"></i> Suggestions AI</h5>
                <div class=\"ai-tips-content\"></div>
            </div>
        </form>
    </div>
</div>

";
        // line 501
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 731
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 501
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 502
        yield "<script>
    function openModal(id) {
        document.getElementById(id).style.display = 'block';
    }

    function closeModal(id) {
        document.getElementById(id).style.display = 'none';
    }

    function openEditModal(id, titre, desc, section, duree, langue, matiereId, imagePath, prix) {
        const form = document.getElementById('editForm');
        form.action = '/enseignant/cours/' + id + '/edit';
        
        document.getElementById('editTitre').value = titre;
        document.getElementById('editDescription').value = desc;
        document.getElementById('editSection').value = section;
        document.getElementById('editDurée').value = duree;
        document.getElementById('editLangue').value = langue;
        document.getElementById('editPrix').value = prix;
        document.getElementById('editMatiereId').value = matiereId;
        document.getElementById('editToken').value = '";
        // line 522
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("cours"), "html", null, true);
        yield "';

        const imgContainer = document.getElementById('currentImageContainer');
        const imgPreview = document.getElementById('editImagePreview');
        if (imagePath) {
            if (imagePath.startsWith('http')) {
                imgPreview.src = imagePath;
            } else {
                imgPreview.src = '/uploads/images/' + imagePath;
            }
            imgContainer.style.display = 'block';
        } else {
            imgContainer.style.display = 'none';
        }
        
        openModal('editModal');
    }

    function updateFileName(input, previewId) {
        const preview = document.getElementById(previewId);
        if (input.files && input.files[0]) {
            preview.textContent = 'Fichier sélectionné : ' + input.files[0].name;
            preview.style.color = 'var(--primary)';
        } else {
            preview.textContent = 'Aucun fichier sélectionné';
            preview.style.color = '#64748b';
        }
    }

    // Auto-open modals if there are errors
    document.addEventListener('DOMContentLoaded', function() {
        ";
        // line 553
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 553, $this->source); })()), "vars", [], "any", false, false, false, 553), "valid", [], "any", false, false, false, 553)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 554
            yield "            openModal('addModal');
        ";
        }
        // line 556
        yield "        
        ";
        // line 557
        if ((array_key_exists("edit_cours", $context) &&  !(isset($context["edit_form_valid"]) || array_key_exists("edit_form_valid", $context) ? $context["edit_form_valid"] : (function () { throw new RuntimeError('Variable "edit_form_valid" does not exist.', 557, $this->source); })()))) {
            // line 558
            yield "            // If we're coming from a failed edit submission
            openEditModal(";
            // line 559
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_cours"]) || array_key_exists("edit_cours", $context) ? $context["edit_cours"] : (function () { throw new RuntimeError('Variable "edit_cours" does not exist.', 559, $this->source); })()), "id", [], "any", false, false, false, 559), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_cours"]) || array_key_exists("edit_cours", $context) ? $context["edit_cours"] : (function () { throw new RuntimeError('Variable "edit_cours" does not exist.', 559, $this->source); })()), "titre", [], "any", false, false, false, 559), "js"), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_cours"]) || array_key_exists("edit_cours", $context) ? $context["edit_cours"] : (function () { throw new RuntimeError('Variable "edit_cours" does not exist.', 559, $this->source); })()), "description", [], "any", false, false, false, 559), "js"), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_cours"]) || array_key_exists("edit_cours", $context) ? $context["edit_cours"] : (function () { throw new RuntimeError('Variable "edit_cours" does not exist.', 559, $this->source); })()), "section", [], "any", false, false, false, 559), "js"), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_cours"]) || array_key_exists("edit_cours", $context) ? $context["edit_cours"] : (function () { throw new RuntimeError('Variable "edit_cours" does not exist.', 559, $this->source); })()), "dureeTotale", [], "any", false, false, false, 559), "js"), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_cours"]) || array_key_exists("edit_cours", $context) ? $context["edit_cours"] : (function () { throw new RuntimeError('Variable "edit_cours" does not exist.', 559, $this->source); })()), "langue", [], "any", false, false, false, 559), "js"), "html", null, true);
            yield "');
        ";
        }
        // line 561
        yield "    });

    // AI Tips generation logic
    document.querySelectorAll('.ai-gen-btn').forEach(btn => {
        btn.addEventListener('click', async function() {
            const modal = this.closest('.modal-content');
            const titleInput = modal.querySelector('input[name*=\"[titre]\"]');
            const descInput = modal.querySelector('textarea[name*=\"[description]\"]');
            const tipsBox = modal.querySelector('.ai-tips-box');
            const tipsContent = modal.querySelector('.ai-tips-content');

            if (!titleInput.value || !descInput.value) {
                alert('Veuillez remplir le titre et la description.');
                return;
            }

            this.disabled = true;
            this.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i>...';

            try {
                const response = await fetch('";
        // line 581
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enseignant_ai_generate_tips");
        yield "', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        title: titleInput.value,
                        description: descInput.value
                    })
                });

                const data = await response.json();
                if (data.tips) {
                    tipsContent.innerHTML = data.tips.replace(/\\n/g, '<br>');
                    tipsBox.style.display = 'block';
                } else {
                    alert('Erreur: ' + (data.error || 'AI Indisponible.'));
                }
            } catch (error) {
                alert('Erreur lors de la génération.');
            } finally {
                this.disabled = false;
                this.innerHTML = '<i class=\"fas fa-magic\"></i> AI Tips';
            }
        });
    });

    // AI Content Generator for Teacher
    const generateContentBtnTeacher = document.getElementById('generate-content-btn-teacher');
    if (generateContentBtnTeacher) {
        generateContentBtnTeacher.addEventListener('click', async function() {
            const titleInput = document.querySelector('input[name*=\"[titre]\"]');
            if (!titleInput || !titleInput.value) {
                alert('Veuillez entrer un titre de cours avant de générer le contenu.');
                return;
            }

            this.disabled = true;
            this.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Génération...';
            
            try {
                const response = await fetch('";
        // line 620
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enseignant_ai_generate_course_content");
        yield "', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        title: titleInput.value
                    })
                });

                const result = await response.json();
                if (result.success && result.data) {
                    showAIContentModalTeacher(result.data);
                } else {
                    alert('Erreur: ' + (result.error || 'Impossible de générer le contenu.'));
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Une erreur est survenue lors de la communication avec l\\'IA.');
            } finally {
                this.disabled = false;
                this.innerHTML = '<i class=\"fas fa-robot\"></i> Générer avec AI';
            }
        });
    }

    function showAIContentModalTeacher(data) {
        let modal = document.getElementById('ai-content-modal-teacher');
        if (!modal) {
            modal = document.createElement('div');
            modal.id = 'ai-content-modal-teacher';
            modal.className = 'ai-modal';
            document.body.appendChild(modal);
        }

        modal.innerHTML = `
            <div class=\"ai-modal-content\">
                <div class=\"ai-modal-header\">
                    <h3><i class=\"fas fa-robot\"></i> Contenu généré par l'IA</h3>
                    <button onclick=\"closeAIModalTeacher()\" class=\"ai-modal-close\">&times;</button>
                </div>
                
                <div class=\"ai-modal-body\">
                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-align-left\"></i> Description</h4>
                        <p class=\"ai-content\">\${data.description || 'Aucune description générée'}</p>
                        <button onclick=\"applyDescriptionTeacher()\" class=\"btn-apply\">
                            <i class=\"fas fa-check\"></i> Utiliser cette description
                        </button>
                    </div>

                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-book\"></i> Plan de cours suggéré</h4>
                        <ul class=\"ai-list\">
                            \${(data.chapters || []).map(ch => `<li>\${ch}</li>`).join('')}
                        </ul>
                    </div>

                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-bullseye\"></i> Objectifs d'apprentissage</h4>
                        <ul class=\"ai-list\">
                            \${(data.objectives || []).map(obj => `<li>\${obj}</li>`).join('')}
                        </ul>
                    </div>

                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-graduation-cap\"></i> Prérequis</h4>
                        <ul class=\"ai-list\">
                            \${(data.prerequisites || []).map(pre => `<li>\${pre}</li>`).join('')}
                        </ul>
                    </div>

                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-tasks\"></i> Idées d'exercices</h4>
                        <ul class=\"ai-list\">
                            \${(data.exercises || []).map(ex => `<li>\${ex}</li>`).join('')}
                        </ul>
                    </div>
                </div>
            </div>
        `;

        modal.style.display = 'flex';
        window.aiGeneratedDataTeacher = data;
    }

    window.closeAIModalTeacher = function() {
        const modal = document.getElementById('ai-content-modal-teacher');
        if (modal) modal.style.display = 'none';
    };

    window.applyDescriptionTeacher = function() {
        if (window.aiGeneratedDataTeacher && window.aiGeneratedDataTeacher.description) {
            const descInput = document.querySelector('textarea[name*=\"[description]\"]');
            if (descInput) {
                descInput.value = window.aiGeneratedDataTeacher.description;
                alert('Description appliquée avec succès !');
                closeAIModalTeacher();
            }
        }
    };


    window.onclick = function(event) {
        if (event.target.className === 'modal') {
            event.target.style.display = 'none';
        }
        if (event.target.className === 'ai-modal') {
            event.target.style.display = 'none';
        }
    }
</script>
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
        return "enseignant/cours/manage.html.twig";
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
        return array (  987 => 620,  945 => 581,  923 => 561,  908 => 559,  905 => 558,  903 => 557,  900 => 556,  896 => 554,  894 => 553,  860 => 522,  838 => 502,  825 => 501,  813 => 731,  811 => 501,  726 => 419,  706 => 402,  700 => 399,  693 => 395,  688 => 393,  682 => 390,  676 => 387,  669 => 383,  664 => 381,  658 => 378,  654 => 377,  650 => 376,  644 => 373,  640 => 372,  636 => 371,  630 => 368,  626 => 367,  622 => 366,  615 => 362,  611 => 361,  607 => 360,  601 => 357,  597 => 356,  593 => 355,  586 => 351,  582 => 350,  578 => 349,  572 => 346,  568 => 345,  564 => 344,  559 => 342,  548 => 333,  538 => 328,  536 => 327,  524 => 320,  520 => 319,  498 => 316,  491 => 312,  487 => 311,  483 => 310,  477 => 308,  473 => 307,  469 => 305,  463 => 301,  460 => 300,  452 => 298,  444 => 296,  441 => 295,  439 => 294,  435 => 292,  430 => 291,  426 => 289,  417 => 286,  414 => 285,  410 => 284,  400 => 277,  394 => 274,  388 => 270,  375 => 269,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/home.html.twig' %}

{% block title %}Gestion des Cours - {{ matiere.nomMatiere }}{% endblock %}

{% block stylesheets %}
<style>
    .manage-container { padding: 80px 0; background: #f1f5f9; min-height: 100vh; }
    .header-actions { display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px; }
    .header-actions h2 { font-size: 2rem; color: var(--secondary); }
    
    .btn-add {
        background: var(--primary); color: white; padding: 12px 24px; border-radius: 12px;
        display: flex; align-items: center; gap: 10px; font-weight: 600; cursor: pointer;
        transition: all 0.3s ease; border: none;
    }
    .btn-add:hover { background: #86b391; transform: translateY(-2px); }

    .cours-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 25px;
    }

    .cours-card {
        background: white; border-radius: 16px; overflow: hidden;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
        display: flex; flex-direction: column; height: 100%;
        transition: transform 0.3s ease;
    }
    .cours-card:hover { transform: translateY(-5px); }

    .cours-image { height: 180px; position: relative; }
    .cours-image img { width: 100%; height: 100%; object-fit: cover; }
    
    .cours-content { padding: 20px; flex-grow: 1; }
    .cours-content h4 { font-size: 1.1rem; color: #1e293b; margin-bottom: 10px; }
    .file-name-preview { margin-top: 10px; font-size: 0.9rem; color: #64748b; }
    
    /* AI Modal Styles */
    .ai-modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        align-items: center;
        justify-content: center;
        animation: fadeIn 0.3s;
    }

    .ai-modal-content {
        background: white;
        border-radius: 16px;
        width: 90%;
        max-width: 800px;
        max-height: 90vh;
        overflow-y: auto;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        animation: slideUp 0.3s;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideUp {
        from { transform: translateY(50px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    .ai-modal-header {
        padding: 24px;
        border-bottom: 2px solid #f1f5f9;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: linear-gradient(135deg, #8b5cf6 0%, #6366f1 100%);
        color: white;
        border-radius: 16px 16px 0 0;
    }

    .ai-modal-header h3 {
        margin: 0;
        font-size: 1.5rem;
    }

    .ai-modal-close {
        background: none;
        border: none;
        font-size: 2rem;
        color: white;
        cursor: pointer;
        line-height: 1;
        transition: transform 0.2s;
    }

    .ai-modal-close:hover {
        transform: scale(1.2);
    }

    .ai-modal-body {
        padding: 24px;
    }

    .ai-section {
        margin-bottom: 24px;
        padding: 20px;
        background: #f8fafc;
        border-radius: 12px;
        border-left: 4px solid #8b5cf6;
    }

    .ai-section h4 {
        color: #1e293b;
        margin: 0 0 12px 0;
        font-size: 1.1rem;
    }

    .ai-section h4 i {
        color: #8b5cf6;
        margin-right: 8px;
    }

    .ai-content {
        color: #475569;
        line-height: 1.7;
        margin: 12px 0;
    }

    .ai-list {
        list-style: none;
        padding: 0;
        margin: 12px 0;
    }

    .ai-list li {
        padding: 10px 12px;
        margin: 8px 0;
        background: white;
        border-radius: 8px;
        color: #475569;
        border-left: 3px solid #8b5cf6;
    }

    .btn-apply {
        background: #8b5cf6;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s;
        margin-top: 12px;
    }

    .btn-apply:hover {
        background: #7c3aed;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(139, 92, 246, 0.3);
    }
    .cours-content p { font-size: 0.9rem; color: #64748b; line-height: 1.4; margin-bottom: 15px; }

    .cours-meta { display: flex; gap: 15px; font-size: 0.85rem; color: #94a3b8; margin-bottom: 15px; }
    .cours-meta span { display: flex; align-items: center; gap: 5px; }

    .cours-actions {
        padding: 15px 20px; border-top: 1px solid #f1f5f9;
        display: flex; justify-content: flex-end; gap: 10px;
    }
    .action-btn { 
        width: 36px; height: 36px; border-radius: 8px; 
        display: flex; align-items: center; justify-content: center;
        transition: all 0.2s ease; border: none; cursor: pointer;
    }
    .btn-edit { background: #eff6ff; color: #2563eb; }
    .btn-edit:hover { background: #2563eb; color: white; }
    .btn-delete { background: #fff1f2; color: #e11d48; }
    .btn-delete:hover { background: #e11d48; color: white; }

    /* Modal Styling */
    .modal {
        display: none; position: fixed; z-index: 1000; left: 0; top: 0;
        width: 100%; height: 100%; background: rgba(0,0,0,0.5);
        backdrop-filter: blur(4px);
    }
    .modal-content {
        background: white; margin: 2% auto; padding: 30px; border-radius: 20px;
        width: 90%; max-width: 600px; position: relative;
        animation: slideDown 0.4s ease-out;
        max-height: 90vh; overflow-y: auto;
    }
    @keyframes slideDown { 
        from { transform: translateY(-50px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    /* Scrollbar for modal */
    .modal-content::-webkit-scrollbar { width: 8px; }
    .modal-content::-webkit-scrollbar-track { background: #f1f5f9; border-radius: 10px; }
    .modal-content::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    .modal-content::-webkit-scrollbar-thumb:hover { background: #94a3b8; }

    .close-modal { position: absolute; right: 25px; top: 20px; font-size: 1.5rem; cursor: pointer; color: #94a3b8; z-index: 10; }
    
    .form-group { margin-bottom: 20px; }
    .form-group label { display: block; margin-bottom: 8px; font-weight: 600; color: #1e293b; }
    .form-group input, .form-group textarea, .form-group select {
        width: 100%; padding: 12px; border: 1px solid #e2e8f0; border-radius: 10px;
        background-color: white; color: #1e293b; font-size: 0.95rem;
        transition: all 0.3s ease;
    }
    .form-group input:focus, .form-group textarea:focus, .form-group select:focus {
        border-color: var(--primary); outline: none; box-shadow: 0 0 0 3px rgba(151, 195, 162, 0.1);
    }

    /* Premium File Upload in Modal */
    .file-upload-wrapper {
        position: relative;
        width: 100%;
        margin-top: 5px;
    }
    .file-upload-label {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 30px 20px;
        background: #f8fafc;
        border: 2px dashed #e2e8f0;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.3s ease;
        color: #64748b;
    }
    .file-upload-label i { font-size: 2rem; color: var(--primary); margin-bottom: 10px; }
    .file-upload-label:hover { border-color: var(--primary); background: #f0fdf4; }
    .file-input-hidden { display: none; }
    .file-name-preview {
        margin-top: 8px;
        font-size: 0.85rem;
        color: var(--primary);
        font-weight: 500;
        text-align: center;
    }

    /* Validation Errors */
    .invalid-feedback {
        color: #e11d48;
        font-size: 0.85rem;
        margin-top: 5px;
        display: block;
        font-weight: 500;
    }
    .is-invalid {
        border-color: #e11d48 !important;
        background-color: #fff1f2 !important;
    }
    .is-invalid:focus {
        box-shadow: 0 0 0 3px rgba(225, 29, 72, 0.1) !important;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"manage-container\">
    <div class=\"container\">
        <div class=\"header-actions\">
            <div>
                <a href=\"{{ path('app_enseignant_matiere_index') }}\" style=\"color: #64748b; text-decoration: none; font-size: 0.9rem;\">
                    <i class=\"fas fa-arrow-left\"></i> Retour aux matières
                </a>
                <h2>{{ matiere.nomMatiere }}</h2>
            </div>
            <button class=\"btn-add\" onclick=\"openModal('addModal')\">
                <i class=\"fas fa-plus\"></i> Nouveau Cours
            </button>
        </div>

        {% for message in app.flashes('success') %}
            <div style=\"background: #dcfce7; color: #166534; padding: 16px; border-radius: 12px; margin-bottom: 30px; display: flex; align-items: center; gap: 10px;\">
                <i class=\"fas fa-check-circle\"></i> {{ message }}
            </div>
        {% endfor %}

        <div class=\"cours-grid\">
            {% for cours in cours_list %}
                <div class=\"cours-card\">
                    <div class=\"cours-image\">
                        {% if cours.image %}
                            {% if 'http' in cours.image %}
                                <img src=\"{{ cours.image }}\" alt=\"{{ cours.titre }}\">
                            {% else %}
                                <img src=\"{{ asset('uploads/images/' ~ cours.image) }}\" alt=\"{{ cours.titre }}\">
                            {% endif %}
                        {% else %}
                            <div style=\"display: flex; align-items: center; justify-content: center; height: 100%; background: #f1f5f9; color: #cbd5e1;\">
                                <i class=\"fas fa-image fa-3x\"></i>
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"cours-content\">
                        <h4>{{ cours.titre }}</h4>
                        <p>{{ cours.description|slice(0, 120) }}{{ cours.description|length > 120 ? '...' : '' }}</p>
                        <div class=\"cours-meta\">
                            <span><i class=\"fas fa-clock\"></i> {{ cours.dureeTotale }}</span>
                            <span><i class=\"fas fa-language\"></i> {{ cours.langue }}</span>
                            <span style=\"font-weight: bold; color: var(--primary);\"><i class=\"fas fa-tag\"></i> {{ cours.prix }} USD</span>
                        </div>
                    </div>
                    <div class=\"cours-actions\">
                        <button class=\"action-btn btn-edit\" title=\"Modifier\" onclick=\"openEditModal({{ cours.id }}, '{{ cours.titre|e('js') }}', '{{ cours.description|e('js') }}', '{{ cours.section|e('js') }}', '{{ cours.dureeTotale|e('js') }}', '{{ cours.langue|e('js') }}', {{ cours.matiere.id }}, '{{ cours.image|e('js') }}', '{{ cours.prix }}')\">
                            <i class=\"fas fa-edit\"></i>
                        </button>
                        <form method=\"post\" action=\"{{ path('app_enseignant_cours_delete', {'id': cours.id}) }}\" style=\"display: inline-block\" onsubmit=\"return confirm('Supprimer ce cours ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ cours.id) }}\">
                            <button class=\"action-btn btn-delete\" title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        </form>
                    </div>
                </div>
            {% else %}
                <div style=\"grid-column: 1/-1; text-align: center; padding: 50px; background: white; border-radius: 20px;\">
                    <i class=\"fas fa-book fa-3x\" style=\"color: #cbd5e1; margin-bottom: 20px;\"></i>
                    <p style=\"color: #64748b;\">Aucun cours créé pour cette matière.</p>
                </div>
            {% endfor %}
        </div>
    </div>
</div>

<!-- ajouter  form -->
<div id=\"addModal\" class=\"modal\">
    <div class=\"modal-content\">
        <span class=\"close-modal\" onclick=\"closeModal('addModal')\">&times;</span>
        <h3 style=\"margin-bottom: 25px; color: var(--secondary);\">Ajouter un nouveau cours</h3>
        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
            <div class=\"form-group\">
                {{ form_label(form.titre) }}
                {{ form_widget(form.titre, {'attr': {'class': form.titre.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
                {{ form_errors(form.titre) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.description) }}
                {{ form_widget(form.description, {'attr': {'class': form.description.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
                {{ form_errors(form.description) }}
            </div>
            <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px;\">
                <div class=\"form-group\">
                    {{ form_label(form.section) }}
                    {{ form_widget(form.section, {'attr': {'class': form.section.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
                    {{ form_errors(form.section) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.duree_totale) }}
                    {{ form_widget(form.duree_totale, {'attr': {'class': form.duree_totale.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
                    {{ form_errors(form.duree_totale) }}
                </div>
            </div>
            <div class=\"form-group\">
                {{ form_label(form.prix) }}
                {{ form_widget(form.prix, {'attr': {'class': form.prix.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
                {{ form_errors(form.prix) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.langue) }}
                {{ form_widget(form.langue, {'attr': {'class': form.langue.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
                {{ form_errors(form.langue) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.matiere) }}
                {{ form_widget(form.matiere, {'attr': {'class': form.matiere.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
                {{ form_errors(form.matiere) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.image) }}
                <div class=\"file-upload-wrapper\">
                    <label for=\"{{ form.image.vars.id }}\" class=\"file-upload-label\">
                        <i class=\"fas fa-cloud-upload-alt\"></i>
                        <span>Cliquez pour choisir une image</span>
                    </label>
                    {{ form_widget(form.image, {'attr': {'class': 'file-input-hidden', 'onchange': 'updateFileName(this, \"add-file-preview\")'}}) }}
                    <div id=\"add-file-preview\" class=\"file-name-preview\">Aucun fichier sélectionné</div>
                </div>
                {{ form_errors(form.image) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.pdf_file) }}
                <div class=\"file-upload-wrapper\">
                    <label for=\"{{ form.pdf_file.vars.id }}\" class=\"file-upload-label\">
                        <i class=\"fas fa-file-pdf\"></i>
                        <span>Cliquez pour choisir un PDF</span>
                    </label>
                    {{ form_widget(form.pdf_file, {'attr': {'class': 'file-input-hidden', 'onchange': 'updateFileName(this, \"add-pdf-preview\")'}}) }}
                    <div id=\"add-pdf-preview\" class=\"file-name-preview\">Aucun fichier sélectionné</div>
                </div>
                {{ form_errors(form.pdf_file) }}
            </div>
            <div style=\"margin-top: 20px; display: flex; gap: 10px;\">
                <button type=\"submit\" class=\"btn-add\" style=\"flex: 1; justify-content: center;\">
                    Créer le cours
                </button>
                <button type=\"button\" id=\"generate-content-btn-teacher\" class=\"btn-add\" style=\"background: #8b5cf6; border: none;\">
                    <i class=\"fas fa-robot\"></i> Générer avec AI
                </button>
                <button type=\"button\" class=\"btn-add ai-gen-btn\" style=\"background: #3b82f6; border: none;\">
                    <i class=\"fas fa-magic\"></i> AI Tips
                </button>
            </div>
            <div class=\"ai-tips-box\" style=\"display: none; margin-top: 20px; padding: 15px; background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 12px; color: #1e3a8a; font-size: 0.9rem;\">
                <h5 style=\"margin-bottom: 8px; font-weight: 700;\"><i class=\"fas fa-lightbulb\"></i> Suggestions AI</h5>
                <div class=\"ai-tips-content\"></div>
            </div>
        {{ form_end(form) }}
    </div>
</div>

<!-- edit  form -->
<div id=\"editModal\" class=\"modal\">
    <div class=\"modal-content\">
        <span class=\"close-modal\" onclick=\"closeModal('editModal')\">&times;</span>
        <h3 style=\"margin-bottom: 25px; color: var(--secondary);\">Modifier le cours</h3>
        <form id=\"editForm\" method=\"post\" enctype=\"multipart/form-data\" novalidate>
            <input type=\"hidden\" name=\"cours[_token]\" id=\"editToken\">
            <input type=\"hidden\" name=\"cours[matiere]\" id=\"editMatiereId\">
            
            <div id=\"currentImageContainer\" style=\"margin-bottom: 20px; text-align: center; display: none;\">
                <label>Image actuelle</label>
                <img id=\"editImagePreview\" src=\"\" alt=\"Aperçu\" style=\"width: 100%; max-height: 150px; object-fit: contain; border-radius: 12px; margin-top: 10px; border: 1px solid #e2e8f0;\">
            </div>

            <div class=\"form-group\">
                <label>Titre</label>
                <input type=\"text\" name=\"cours[titre]\" id=\"editTitre\" required>
            </div>
            <div class=\"form-group\">
                <label>Description</label>
                <textarea name=\"cours[description]\" id=\"editDescription\" rows=\"4\" required></textarea>
            </div>
            <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px;\">
                <div class=\"form-group\">
                    <label>Section</label>
                    <input type=\"text\" name=\"cours[section]\" id=\"editSection\" required>
                </div>
                <div class=\"form-group\">
                    <label>Durée totale</label>
                    <input type=\"text\" name=\"cours[duree_totale]\" id=\"editDurée\" required>
                </div>
            </div>
            <div class=\"form-group\">
                <label>Prix</label>
                <input type=\"text\" name=\"cours[prix]\" id=\"editPrix\" required>
            </div>
            <div class=\"form-group\">
                <label>Langue</label>
                <input type=\"text\" name=\"cours[langue]\" id=\"editLangue\" required>
            </div>
            <div class=\"form-group\">
                <label>Changer l'image (optionnel)</label>
                <div class=\"file-upload-wrapper\">
                    <label for=\"editImageInput\" class=\"file-upload-label\">
                        <i class=\"fas fa-cloud-upload-alt\"></i>
                        <span>Cliquez pour changer l'image</span>
                    </label>
                    <input type=\"file\" name=\"cours[image]\" id=\"editImageInput\" class=\"file-input-hidden\" onchange=\"updateFileName(this, 'edit-file-preview')\">
                    <div id=\"edit-file-preview\" class=\"file-name-preview\">Aucun fichier sélectionné</div>
                </div>
            </div>
            <div class=\"form-group\">
                <label>Changer le PDF (optionnel)</label>
                <div class=\"file-upload-wrapper\">
                    <label for=\"editPdfInput\" class=\"file-upload-label\">
                        <i class=\"fas fa-file-pdf\"></i>
                        <span>Cliquez pour changer le PDF</span>
                    </label>
                    <input type=\"file\" name=\"cours[pdf_file]\" id=\"editPdfInput\" class=\"file-input-hidden\" accept=\".pdf\" onchange=\"updateFileName(this, 'edit-pdf-preview')\">
                    <div id=\"edit-pdf-preview\" class=\"file-name-preview\">Aucun fichier sélectionné</div>
                </div>
            </div>
            <div style=\"margin-top: 20px; display: flex; gap: 10px;\">
                <button type=\"submit\" class=\"btn-add\" style=\"flex: 1; justify-content: center;\">
                    Enregistrer les modifications
                </button>
                <button type=\"button\" class=\"btn-add ai-gen-btn\" style=\"background: #3b82f6; border: none;\">
                    <i class=\"fas fa-magic\"></i> AI Tips
                </button>
            </div>
            <div class=\"ai-tips-box\" style=\"display: none; margin-top: 20px; padding: 15px; background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 12px; color: #1e3a8a; font-size: 0.9rem;\">
                <h5 style=\"margin-bottom: 8px; font-weight: 700;\"><i class=\"fas fa-lightbulb\"></i> Suggestions AI</h5>
                <div class=\"ai-tips-content\"></div>
            </div>
        </form>
    </div>
</div>

{% block javascripts %}
<script>
    function openModal(id) {
        document.getElementById(id).style.display = 'block';
    }

    function closeModal(id) {
        document.getElementById(id).style.display = 'none';
    }

    function openEditModal(id, titre, desc, section, duree, langue, matiereId, imagePath, prix) {
        const form = document.getElementById('editForm');
        form.action = '/enseignant/cours/' + id + '/edit';
        
        document.getElementById('editTitre').value = titre;
        document.getElementById('editDescription').value = desc;
        document.getElementById('editSection').value = section;
        document.getElementById('editDurée').value = duree;
        document.getElementById('editLangue').value = langue;
        document.getElementById('editPrix').value = prix;
        document.getElementById('editMatiereId').value = matiereId;
        document.getElementById('editToken').value = '{{ csrf_token(\"cours\") }}';

        const imgContainer = document.getElementById('currentImageContainer');
        const imgPreview = document.getElementById('editImagePreview');
        if (imagePath) {
            if (imagePath.startsWith('http')) {
                imgPreview.src = imagePath;
            } else {
                imgPreview.src = '/uploads/images/' + imagePath;
            }
            imgContainer.style.display = 'block';
        } else {
            imgContainer.style.display = 'none';
        }
        
        openModal('editModal');
    }

    function updateFileName(input, previewId) {
        const preview = document.getElementById(previewId);
        if (input.files && input.files[0]) {
            preview.textContent = 'Fichier sélectionné : ' + input.files[0].name;
            preview.style.color = 'var(--primary)';
        } else {
            preview.textContent = 'Aucun fichier sélectionné';
            preview.style.color = '#64748b';
        }
    }

    // Auto-open modals if there are errors
    document.addEventListener('DOMContentLoaded', function() {
        {% if not form.vars.valid %}
            openModal('addModal');
        {% endif %}
        
        {% if edit_cours is defined and not edit_form_valid %}
            // If we're coming from a failed edit submission
            openEditModal({{ edit_cours.id }}, '{{ edit_cours.titre|e('js') }}', '{{ edit_cours.description|e('js') }}', '{{ edit_cours.section|e('js') }}', '{{ edit_cours.dureeTotale|e('js') }}', '{{ edit_cours.langue|e('js') }}');
        {% endif %}
    });

    // AI Tips generation logic
    document.querySelectorAll('.ai-gen-btn').forEach(btn => {
        btn.addEventListener('click', async function() {
            const modal = this.closest('.modal-content');
            const titleInput = modal.querySelector('input[name*=\"[titre]\"]');
            const descInput = modal.querySelector('textarea[name*=\"[description]\"]');
            const tipsBox = modal.querySelector('.ai-tips-box');
            const tipsContent = modal.querySelector('.ai-tips-content');

            if (!titleInput.value || !descInput.value) {
                alert('Veuillez remplir le titre et la description.');
                return;
            }

            this.disabled = true;
            this.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i>...';

            try {
                const response = await fetch('{{ path(\"app_enseignant_ai_generate_tips\") }}', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        title: titleInput.value,
                        description: descInput.value
                    })
                });

                const data = await response.json();
                if (data.tips) {
                    tipsContent.innerHTML = data.tips.replace(/\\n/g, '<br>');
                    tipsBox.style.display = 'block';
                } else {
                    alert('Erreur: ' + (data.error || 'AI Indisponible.'));
                }
            } catch (error) {
                alert('Erreur lors de la génération.');
            } finally {
                this.disabled = false;
                this.innerHTML = '<i class=\"fas fa-magic\"></i> AI Tips';
            }
        });
    });

    // AI Content Generator for Teacher
    const generateContentBtnTeacher = document.getElementById('generate-content-btn-teacher');
    if (generateContentBtnTeacher) {
        generateContentBtnTeacher.addEventListener('click', async function() {
            const titleInput = document.querySelector('input[name*=\"[titre]\"]');
            if (!titleInput || !titleInput.value) {
                alert('Veuillez entrer un titre de cours avant de générer le contenu.');
                return;
            }

            this.disabled = true;
            this.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Génération...';
            
            try {
                const response = await fetch('{{ path(\"app_enseignant_ai_generate_course_content\") }}', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        title: titleInput.value
                    })
                });

                const result = await response.json();
                if (result.success && result.data) {
                    showAIContentModalTeacher(result.data);
                } else {
                    alert('Erreur: ' + (result.error || 'Impossible de générer le contenu.'));
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Une erreur est survenue lors de la communication avec l\\'IA.');
            } finally {
                this.disabled = false;
                this.innerHTML = '<i class=\"fas fa-robot\"></i> Générer avec AI';
            }
        });
    }

    function showAIContentModalTeacher(data) {
        let modal = document.getElementById('ai-content-modal-teacher');
        if (!modal) {
            modal = document.createElement('div');
            modal.id = 'ai-content-modal-teacher';
            modal.className = 'ai-modal';
            document.body.appendChild(modal);
        }

        modal.innerHTML = `
            <div class=\"ai-modal-content\">
                <div class=\"ai-modal-header\">
                    <h3><i class=\"fas fa-robot\"></i> Contenu généré par l'IA</h3>
                    <button onclick=\"closeAIModalTeacher()\" class=\"ai-modal-close\">&times;</button>
                </div>
                
                <div class=\"ai-modal-body\">
                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-align-left\"></i> Description</h4>
                        <p class=\"ai-content\">\${data.description || 'Aucune description générée'}</p>
                        <button onclick=\"applyDescriptionTeacher()\" class=\"btn-apply\">
                            <i class=\"fas fa-check\"></i> Utiliser cette description
                        </button>
                    </div>

                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-book\"></i> Plan de cours suggéré</h4>
                        <ul class=\"ai-list\">
                            \${(data.chapters || []).map(ch => `<li>\${ch}</li>`).join('')}
                        </ul>
                    </div>

                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-bullseye\"></i> Objectifs d'apprentissage</h4>
                        <ul class=\"ai-list\">
                            \${(data.objectives || []).map(obj => `<li>\${obj}</li>`).join('')}
                        </ul>
                    </div>

                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-graduation-cap\"></i> Prérequis</h4>
                        <ul class=\"ai-list\">
                            \${(data.prerequisites || []).map(pre => `<li>\${pre}</li>`).join('')}
                        </ul>
                    </div>

                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-tasks\"></i> Idées d'exercices</h4>
                        <ul class=\"ai-list\">
                            \${(data.exercises || []).map(ex => `<li>\${ex}</li>`).join('')}
                        </ul>
                    </div>
                </div>
            </div>
        `;

        modal.style.display = 'flex';
        window.aiGeneratedDataTeacher = data;
    }

    window.closeAIModalTeacher = function() {
        const modal = document.getElementById('ai-content-modal-teacher');
        if (modal) modal.style.display = 'none';
    };

    window.applyDescriptionTeacher = function() {
        if (window.aiGeneratedDataTeacher && window.aiGeneratedDataTeacher.description) {
            const descInput = document.querySelector('textarea[name*=\"[description]\"]');
            if (descInput) {
                descInput.value = window.aiGeneratedDataTeacher.description;
                alert('Description appliquée avec succès !');
                closeAIModalTeacher();
            }
        }
    };


    window.onclick = function(event) {
        if (event.target.className === 'modal') {
            event.target.style.display = 'none';
        }
        if (event.target.className === 'ai-modal') {
            event.target.style.display = 'none';
        }
    }
</script>
{% endblock %}

{% endblock %}
", "enseignant/cours/manage.html.twig", "C:\\Users\\pc\\Desktop\\LearnFlex-\\templates\\enseignant\\cours\\manage.html.twig");
    }
}
