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

/* etudiant/dashboard.html.twig */
class __TwigTemplate_e9e618a87e512c3d0ed3c280cb15f980 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/dashboard.html.twig"));

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

        yield "Dashboard Étudiant - LearnFlex";
        
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
    .etudiant-dashboard { padding: 60px 0; background: #f8fafc; min-height: 100vh; }
    .welcome-section { margin-bottom: 40px; }
    .welcome-section h1 { font-size: 2.2rem; color: var(--secondary); margin-bottom: 8px; }
    .welcome-section p { color: #64748b; font-size: 1.1rem; }

    .stats-grid { 
        display: grid; 
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); 
        gap: 25px; 
        margin-bottom: 50px;
    }

    .stat-card {
        background: white;
        padding: 30px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        gap: 20px;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);
        transition: transform 0.3s ease;
    }

    .stat-card:hover { transform: translateY(-5px); }

    .stat-icon {
        width: 65px;
        height: 65px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
    }

    .icon-blue { background: #eff6ff; color: #3b82f6; }
    .icon-green { background: #f0fdf4; color: #10b981; }
    .icon-purple { background: #faf5ff; color: #a855f7; }
    .icon-orange { background: #fff7ed; color: #f97316; }
    .icon-red { background: #fef2f2; color: #ef4444; }

    .stat-info h3 { font-size: 2rem; font-weight: 700; color: #1e293b; margin: 0; }
    .stat-info p { color: #64748b; margin: 0; font-size: 0.95rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; }

    .recent-section { background: white; padding: 35px; border-radius: 24px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05); }
    .recent-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; }
    .recent-header h2 { font-size: 1.5rem; color: var(--secondary); margin: 0; }
    .view-all { color: var(--primary); font-weight: 600; text-decoration: none; display: flex; align-items: center; gap: 8px; }

    .recent-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px; }
    .mini-card {
        border: 1px solid #f1f5f9;
        border-radius: 12px;
        padding: 15px;
        display: flex;
        gap: 15px;
        align-items: center;
        text-decoration: none;
        transition: all 0.2s ease;
    }
    .mini-card:hover { background: #f8fafc; border-color: var(--primary); }
    .mini-img { width: 60px; height: 60px; border-radius: 8px; object-fit: cover; }
    .mini-info h4 { margin: 0 0 5px 0; color: #1e293b; font-size: 1.1rem; }
    .mini-info span { font-size: 0.85rem; color: #94a3b8; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
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

        // line 75
        yield "<div class=\"etudiant-dashboard\">
    <div class=\"container\">
        <div class=\"welcome-section\">
            <h1>Bonjour, Étudiant ! 👋</h1>
            <p>Ravi de vous revoir. Prêt à continuer votre apprentissage ?</p>
        </div>

        <div class=\"stats-grid\">
            <div class=\"stat-card\">
                <div class=\"stat-icon icon-blue\">
                    <i class=\"fas fa-book-open\"></i>
                </div>
                <div class=\"stat-info\">
                    <h3>";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_matieres"]) || array_key_exists("total_matieres", $context) ? $context["total_matieres"] : (function () { throw new RuntimeError('Variable "total_matieres" does not exist.', 88, $this->source); })()), "html", null, true);
        yield "</h3>
                    <p>Matières</p>
                </div>
            </div>

            <div class=\"stat-card\">
                <div class=\"stat-icon icon-green\">
                    <i class=\"fas fa-graduation-cap\"></i>
                </div>
                <div class=\"stat-info\">
                    <h3>";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_cours"]) || array_key_exists("total_cours", $context) ? $context["total_cours"] : (function () { throw new RuntimeError('Variable "total_cours" does not exist.', 98, $this->source); })()), "html", null, true);
        yield "</h3>
                    <p>Cours Disponibles</p>
                </div>
            </div>

            <div class=\"stat-card\">
                <div class=\"stat-icon icon-purple\">
                    <i class=\"fas fa-clock\"></i>
                </div>
                <div class=\"stat-info\">
                    <h3>";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_hours"]) || array_key_exists("total_hours", $context) ? $context["total_hours"] : (function () { throw new RuntimeError('Variable "total_hours" does not exist.', 108, $this->source); })()), "html", null, true);
        yield "h</h3>
                    <p>Volume Horaire</p>
                </div>
            </div>
        </div>


        <div class=\"recent-section\">
            <div class=\"recent-header\">
                <h2>Matières Récemment Ajoutées</h2>
                <a href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_matiere_catalog");
        yield "\" class=\"view-all\">Tout voir <i class=\"fas fa-arrow-right\"></i></a>
            </div>
            <div class=\"recent-grid\">
                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recent_matieres"]) || array_key_exists("recent_matieres", $context) ? $context["recent_matieres"] : (function () { throw new RuntimeError('Variable "recent_matieres" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 122
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_cours_list", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "id", [], "any", false, false, false, 122)]), "html", null, true);
            yield "\" class=\"mini-card\">
                        ";
            // line 123
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "image", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 124
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "image", [], "any", false, false, false, 124))), "html", null, true);
                yield "\" class=\"mini-img\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "nomMatiere", [], "any", false, false, false, 124), "html", null, true);
                yield "\">
                        ";
            } else {
                // line 126
                yield "                            <div class=\"mini-img\" style=\"background: #e2e8f0; display: flex; align-items: center; justify-content: center;\">
                                <i class=\"fas fa-image\" style=\"color: #94a3b8;\"></i>
                            </div>
                        ";
            }
            // line 130
            yield "                        <div class=\"mini-info\">
                            <h4>";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "nomMatiere", [], "any", false, false, false, 131), "html", null, true);
            yield "</h4>
                            <span>";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "cours", [], "any", false, false, false, 132)), "html", null, true);
            yield " cours • ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "niveau", [], "any", false, false, false, 132), "html", null, true);
            yield "</span>
                        </div>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['matiere'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "            </div>
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
        return "etudiant/dashboard.html.twig";
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
        return array (  295 => 136,  283 => 132,  279 => 131,  276 => 130,  270 => 126,  262 => 124,  260 => 123,  255 => 122,  251 => 121,  245 => 118,  232 => 108,  219 => 98,  206 => 88,  191 => 75,  178 => 74,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/home.html.twig' %}

{% block title %}Dashboard Étudiant - LearnFlex{% endblock %}

{% block stylesheets %}
<style>
    .etudiant-dashboard { padding: 60px 0; background: #f8fafc; min-height: 100vh; }
    .welcome-section { margin-bottom: 40px; }
    .welcome-section h1 { font-size: 2.2rem; color: var(--secondary); margin-bottom: 8px; }
    .welcome-section p { color: #64748b; font-size: 1.1rem; }

    .stats-grid { 
        display: grid; 
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); 
        gap: 25px; 
        margin-bottom: 50px;
    }

    .stat-card {
        background: white;
        padding: 30px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        gap: 20px;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);
        transition: transform 0.3s ease;
    }

    .stat-card:hover { transform: translateY(-5px); }

    .stat-icon {
        width: 65px;
        height: 65px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
    }

    .icon-blue { background: #eff6ff; color: #3b82f6; }
    .icon-green { background: #f0fdf4; color: #10b981; }
    .icon-purple { background: #faf5ff; color: #a855f7; }
    .icon-orange { background: #fff7ed; color: #f97316; }
    .icon-red { background: #fef2f2; color: #ef4444; }

    .stat-info h3 { font-size: 2rem; font-weight: 700; color: #1e293b; margin: 0; }
    .stat-info p { color: #64748b; margin: 0; font-size: 0.95rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; }

    .recent-section { background: white; padding: 35px; border-radius: 24px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05); }
    .recent-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; }
    .recent-header h2 { font-size: 1.5rem; color: var(--secondary); margin: 0; }
    .view-all { color: var(--primary); font-weight: 600; text-decoration: none; display: flex; align-items: center; gap: 8px; }

    .recent-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px; }
    .mini-card {
        border: 1px solid #f1f5f9;
        border-radius: 12px;
        padding: 15px;
        display: flex;
        gap: 15px;
        align-items: center;
        text-decoration: none;
        transition: all 0.2s ease;
    }
    .mini-card:hover { background: #f8fafc; border-color: var(--primary); }
    .mini-img { width: 60px; height: 60px; border-radius: 8px; object-fit: cover; }
    .mini-info h4 { margin: 0 0 5px 0; color: #1e293b; font-size: 1.1rem; }
    .mini-info span { font-size: 0.85rem; color: #94a3b8; }
</style>
{% endblock %}

{% block body %}
<div class=\"etudiant-dashboard\">
    <div class=\"container\">
        <div class=\"welcome-section\">
            <h1>Bonjour, Étudiant ! 👋</h1>
            <p>Ravi de vous revoir. Prêt à continuer votre apprentissage ?</p>
        </div>

        <div class=\"stats-grid\">
            <div class=\"stat-card\">
                <div class=\"stat-icon icon-blue\">
                    <i class=\"fas fa-book-open\"></i>
                </div>
                <div class=\"stat-info\">
                    <h3>{{ total_matieres }}</h3>
                    <p>Matières</p>
                </div>
            </div>

            <div class=\"stat-card\">
                <div class=\"stat-icon icon-green\">
                    <i class=\"fas fa-graduation-cap\"></i>
                </div>
                <div class=\"stat-info\">
                    <h3>{{ total_cours }}</h3>
                    <p>Cours Disponibles</p>
                </div>
            </div>

            <div class=\"stat-card\">
                <div class=\"stat-icon icon-purple\">
                    <i class=\"fas fa-clock\"></i>
                </div>
                <div class=\"stat-info\">
                    <h3>{{ total_hours }}h</h3>
                    <p>Volume Horaire</p>
                </div>
            </div>
        </div>


        <div class=\"recent-section\">
            <div class=\"recent-header\">
                <h2>Matières Récemment Ajoutées</h2>
                <a href=\"{{ path('app_etudiant_matiere_catalog') }}\" class=\"view-all\">Tout voir <i class=\"fas fa-arrow-right\"></i></a>
            </div>
            <div class=\"recent-grid\">
                {% for matiere in recent_matieres %}
                    <a href=\"{{ path('app_etudiant_cours_list', {'id': matiere.id}) }}\" class=\"mini-card\">
                        {% if matiere.image %}
                            <img src=\"{{ asset('uploads/images/' ~ matiere.image) }}\" class=\"mini-img\" alt=\"{{ matiere.nomMatiere }}\">
                        {% else %}
                            <div class=\"mini-img\" style=\"background: #e2e8f0; display: flex; align-items: center; justify-content: center;\">
                                <i class=\"fas fa-image\" style=\"color: #94a3b8;\"></i>
                            </div>
                        {% endif %}
                        <div class=\"mini-info\">
                            <h4>{{ matiere.nomMatiere }}</h4>
                            <span>{{ matiere.cours|length }} cours • {{ matiere.niveau }}</span>
                        </div>
                    </a>
                {% endfor %}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "etudiant/dashboard.html.twig", "C:\\Users\\pc\\Desktop\\LearnFlex-\\templates\\etudiant\\dashboard.html.twig");
    }
}
