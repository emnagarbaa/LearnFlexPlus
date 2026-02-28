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

/* etudiant/cours/list.html.twig */
class __TwigTemplate_44e1877f345085e1dbd3b0f62683abf8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/cours/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/cours/list.html.twig"));

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

        yield "Cours de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 3, $this->source); })()), "nomMatiere", [], "any", false, false, false, 3), "html", null, true);
        yield " - LearnFlex";
        
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
    .courses-hero { 
        padding: 80px 0; 
        background: linear-gradient(135deg, #065f46 0%, #10b981 100%); 
        color: white;
        text-align: center;
        border-radius: 0 0 50px 50px;
    }
    .courses-container { padding: 60px 0; background: #f8fafc; min-height: 80vh; }

    .course-card {
        background: white;
        border-radius: 20px;
        padding: 25px;
        margin-bottom: 25px;
        display: grid;
        grid-template-columns: 200px 1fr auto;
        gap: 30px;
        align-items: center;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);
        transition: all 0.3s ease;
        border: 1px solid transparent;
    }

    .course-card:hover {
        transform: scale(1.01);
        border-color: var(--primary);
        box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1);
    }

    .course-visual {
        width: 200px;
        height: 130px;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid #f1f5f9;
    }

    .course-visual img { width: 100%; height: 100%; object-fit: cover; }

    .course-meta { display: flex; gap: 20px; margin-top: 15px; }
    .meta-item { display: flex; align-items: center; gap: 8px; color: #64748b; font-size: 0.9rem; font-weight: 500; }
    .meta-item i { color: var(--primary); }

    .course-btn {
        background: var(--primary);
        color: white;
        padding: 12px 30px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 700;
        transition: all 0.3s ease;
    }
    .course-btn:hover { background: var(--secondary); transform: translateX(5px); }

    .back-link { margin-bottom: 30px; display: inline-flex; align-items: center; gap: 10px; color: #64748b; text-decoration: none; font-weight: 600; }
    .back-link:hover { color: var(--primary); }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 66
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

        // line 67
        yield "<div class=\"courses-hero\">
    <div class=\"container\">
        <span class=\"badge\" style=\"background: rgba(255,255,255,0.2); color: white; padding: 8px 16px; margin-bottom: 20px; display: inline-block;\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 69, $this->source); })()), "section", [], "any", false, false, false, 69), "html", null, true);
        yield "</span>
        <h1 style=\"font-size: 3rem; margin-bottom: 15px;\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 70, $this->source); })()), "nomMatiere", [], "any", false, false, false, 70), "html", null, true);
        yield "</h1>
        <p style=\"font-size: 1.2rem; opacity: 0.9; max-width: 700px; margin: 0 auto;\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 71, $this->source); })()), "description", [], "any", false, false, false, 71), "html", null, true);
        yield "</p>
    </div>
</div>

<div class=\"courses-container\">
    <div class=\"container\">
        <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_matiere_catalog");
        yield "\" class=\"back-link\">
            <i class=\"fas fa-chevron-left\"></i> Retour au catalogue
        </a>

        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cours_list"]) || array_key_exists("cours_list", $context) ? $context["cours_list"] : (function () { throw new RuntimeError('Variable "cours_list" does not exist.', 81, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 82
            yield "            <div class=\"course-card\">
                <div class=\"course-visual\">
                    ";
            // line 84
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "image", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 85
                yield "                        ";
                if (CoreExtension::inFilter("http", CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "image", [], "any", false, false, false, 85))) {
                    // line 86
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "image", [], "any", false, false, false, 86), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "titre", [], "any", false, false, false, 86), "html", null, true);
                    yield "\">
                        ";
                } else {
                    // line 88
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "image", [], "any", false, false, false, 88))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "titre", [], "any", false, false, false, 88), "html", null, true);
                    yield "\">
                        ";
                }
                // line 90
                yield "                    ";
            } else {
                // line 91
                yield "                        <div style=\"width: 100%; height: 100%; background: #f8fafc; display: flex; align-items: center; justify-content: center;\">
                            <i class=\"fas fa-play-circle fa-3x\" style=\"color: #cbd5e1;\"></i>
                        </div>
                    ";
            }
            // line 95
            yield "                </div>
                <div class=\"course-info\">
                    <h3 style=\"font-size: 1.5rem; color: #1e293b; margin-bottom: 10px;\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "titre", [], "any", false, false, false, 97), "html", null, true);
            yield "</h3>
                    <p style=\"color: #64748b; line-height: 1.5;\">";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "description", [], "any", false, false, false, 98), "html", null, true);
            yield "</p>
                        <div class=\"course-meta\">
                            <div class=\"meta-item\">
                                <i class=\"far fa-clock\"></i> ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "dureeTotale", [], "any", false, false, false, 101), "html", null, true);
            yield "
                            </div>
                            <div class=\"meta-item\">
                                <i class=\"fas fa-globe\"></i> ";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "langue", [], "any", false, false, false, 104), "html", null, true);
            yield "
                            </div>
                            <div class=\"meta-item\" style=\"color: var(--primary); font-size: 1.1rem; font-weight: 700;\">
                                <i class=\"fas fa-tag\"></i> ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "prix", [], "any", false, false, false, 107), "html", null, true);
            yield " USD
                            </div>
                        </div>
                </div>
                <div class=\"course-action\" style=\"display: grid; grid-template-columns: 1fr; gap: 10px;\">
                    <a href=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_payment_create_session", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "id", [], "any", false, false, false, 112)]), "html", null, true);
            yield "\" class=\"course-btn\">
                        <i class=\"fas fa-shopping-cart\"></i> Acheter (";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "prix", [], "any", false, false, false, 113), "html", null, true);
            yield " USD)
                    </a>
                    ";
            // line 115
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "pdfFile", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 116
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "pdfFile", [], "any", false, false, false, 116))), "html", null, true);
                yield "\" target=\"_blank\" class=\"course-btn\" style=\"background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);\">
                            <i class=\"fas fa-file-pdf\"></i>
                            <span>Télécharger Ressource</span>
                        </a>
                    ";
            }
            // line 121
            yield "                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 123
        if (!$context['_iterated']) {
            // line 124
            yield "            <div style=\"text-align: center; padding: 60px; background: white; border-radius: 20px;\">
                <i class=\"fas fa-graduation-cap fa-4x\" style=\"color: #e2e8f0; margin-bottom: 20px;\"></i>
                <h3 style=\"color: #64748b;\">Aucun cours n'est encore disponible pour cette matière.</h3>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cours'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        yield "    </div>
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
        return "etudiant/cours/list.html.twig";
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
        return array (  324 => 129,  314 => 124,  312 => 123,  306 => 121,  297 => 116,  295 => 115,  290 => 113,  286 => 112,  278 => 107,  272 => 104,  266 => 101,  260 => 98,  256 => 97,  252 => 95,  246 => 91,  243 => 90,  235 => 88,  227 => 86,  224 => 85,  222 => 84,  218 => 82,  213 => 81,  206 => 77,  197 => 71,  193 => 70,  189 => 69,  185 => 67,  172 => 66,  103 => 6,  90 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/home.html.twig' %}

{% block title %}Cours de {{ matiere.nomMatiere }} - LearnFlex{% endblock %}

{% block stylesheets %}
<style>
    .courses-hero { 
        padding: 80px 0; 
        background: linear-gradient(135deg, #065f46 0%, #10b981 100%); 
        color: white;
        text-align: center;
        border-radius: 0 0 50px 50px;
    }
    .courses-container { padding: 60px 0; background: #f8fafc; min-height: 80vh; }

    .course-card {
        background: white;
        border-radius: 20px;
        padding: 25px;
        margin-bottom: 25px;
        display: grid;
        grid-template-columns: 200px 1fr auto;
        gap: 30px;
        align-items: center;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);
        transition: all 0.3s ease;
        border: 1px solid transparent;
    }

    .course-card:hover {
        transform: scale(1.01);
        border-color: var(--primary);
        box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1);
    }

    .course-visual {
        width: 200px;
        height: 130px;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid #f1f5f9;
    }

    .course-visual img { width: 100%; height: 100%; object-fit: cover; }

    .course-meta { display: flex; gap: 20px; margin-top: 15px; }
    .meta-item { display: flex; align-items: center; gap: 8px; color: #64748b; font-size: 0.9rem; font-weight: 500; }
    .meta-item i { color: var(--primary); }

    .course-btn {
        background: var(--primary);
        color: white;
        padding: 12px 30px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 700;
        transition: all 0.3s ease;
    }
    .course-btn:hover { background: var(--secondary); transform: translateX(5px); }

    .back-link { margin-bottom: 30px; display: inline-flex; align-items: center; gap: 10px; color: #64748b; text-decoration: none; font-weight: 600; }
    .back-link:hover { color: var(--primary); }
</style>
{% endblock %}

{% block body %}
<div class=\"courses-hero\">
    <div class=\"container\">
        <span class=\"badge\" style=\"background: rgba(255,255,255,0.2); color: white; padding: 8px 16px; margin-bottom: 20px; display: inline-block;\">{{ matiere.section }}</span>
        <h1 style=\"font-size: 3rem; margin-bottom: 15px;\">{{ matiere.nomMatiere }}</h1>
        <p style=\"font-size: 1.2rem; opacity: 0.9; max-width: 700px; margin: 0 auto;\">{{ matiere.description }}</p>
    </div>
</div>

<div class=\"courses-container\">
    <div class=\"container\">
        <a href=\"{{ path('app_etudiant_matiere_catalog') }}\" class=\"back-link\">
            <i class=\"fas fa-chevron-left\"></i> Retour au catalogue
        </a>

        {% for cours in cours_list %}
            <div class=\"course-card\">
                <div class=\"course-visual\">
                    {% if cours.image %}
                        {% if 'http' in cours.image %}
                            <img src=\"{{ cours.image }}\" alt=\"{{ cours.titre }}\">
                        {% else %}
                            <img src=\"{{ asset('uploads/images/' ~ cours.image) }}\" alt=\"{{ cours.titre }}\">
                        {% endif %}
                    {% else %}
                        <div style=\"width: 100%; height: 100%; background: #f8fafc; display: flex; align-items: center; justify-content: center;\">
                            <i class=\"fas fa-play-circle fa-3x\" style=\"color: #cbd5e1;\"></i>
                        </div>
                    {% endif %}
                </div>
                <div class=\"course-info\">
                    <h3 style=\"font-size: 1.5rem; color: #1e293b; margin-bottom: 10px;\">{{ cours.titre }}</h3>
                    <p style=\"color: #64748b; line-height: 1.5;\">{{ cours.description }}</p>
                        <div class=\"course-meta\">
                            <div class=\"meta-item\">
                                <i class=\"far fa-clock\"></i> {{ cours.dureeTotale }}
                            </div>
                            <div class=\"meta-item\">
                                <i class=\"fas fa-globe\"></i> {{ cours.langue }}
                            </div>
                            <div class=\"meta-item\" style=\"color: var(--primary); font-size: 1.1rem; font-weight: 700;\">
                                <i class=\"fas fa-tag\"></i> {{ cours.prix }} USD
                            </div>
                        </div>
                </div>
                <div class=\"course-action\" style=\"display: grid; grid-template-columns: 1fr; gap: 10px;\">
                    <a href=\"{{ path('app_etudiant_payment_create_session', {'id': cours.id}) }}\" class=\"course-btn\">
                        <i class=\"fas fa-shopping-cart\"></i> Acheter ({{ cours.prix }} USD)
                    </a>
                    {% if cours.pdfFile %}
                        <a href=\"{{ asset('uploads/images/' ~ cours.pdfFile) }}\" target=\"_blank\" class=\"course-btn\" style=\"background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);\">
                            <i class=\"fas fa-file-pdf\"></i>
                            <span>Télécharger Ressource</span>
                        </a>
                    {% endif %}
                </div>
            </div>
        {% else %}
            <div style=\"text-align: center; padding: 60px; background: white; border-radius: 20px;\">
                <i class=\"fas fa-graduation-cap fa-4x\" style=\"color: #e2e8f0; margin-bottom: 20px;\"></i>
                <h3 style=\"color: #64748b;\">Aucun cours n'est encore disponible pour cette matière.</h3>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "etudiant/cours/list.html.twig", "C:\\Users\\pc\\Desktop\\LearnFlex-\\templates\\etudiant\\cours\\list.html.twig");
    }
}
