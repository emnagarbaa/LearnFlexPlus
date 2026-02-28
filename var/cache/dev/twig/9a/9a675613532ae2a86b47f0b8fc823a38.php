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

/* dashboard/index.html.twig */
class __TwigTemplate_6557bd5eaf9b668c386304ffb4e9dd3f extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Dashboard";
        
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
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/dashboard.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/crud.css"), "html", null, true);
        yield "\">

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
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

        // line 14
        yield "<div class=\"dashboard\">
    <aside class=\"sidebar\">
        <div class=\"sidebar-header\">
            <div class=\"logo\">
                <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\">
                    <img src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
        yield "\" alt=\"LearnFlexPlus Logo\" class=\"nav-logo\">
                    <span>LearnFlex</span><span class=\"highlight\">+</span>
                </a>
            </div>
            <button class=\"sidebar-toggle\"><i class=\"fas fa-bars\"></i></button>
        </div>

      <!-- Sidebar -->
          <div class=\"sidebar-content\">
              <nav class=\"sidebar-menu\">
                  <ul>
                            <li class=\"active\">
                          <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">
                              <i class=\"fas fa-tachometer-alt\"></i>
                              <span>Dashboard</span>
                          </a>
                      </li>

                      <li>
                          <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users");
        yield "\">
                              <i class=\"fas fa-users\"></i>
                              <span>Utilisateurs</span>
                          </a>
                      </li>
                      
                      <li>
                          <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_cours_index");
        yield "\"><i class=\"fas fa-book-open\"></i><span>Cours</span></a>
                      </li>
                      <li>
                          <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matiere_index");
        yield "\"><i class=\"fas fa-book\"></i><span>Matières</span></a>
                      </li>
                      <li>
                          <a href=\"#\"><i class=\"fas fa-graduation-cap\"></i><span>Evaluation</span></a>
                      </li>
                      <li>
                          <a href=\"#\"><i class=\"fas fa-question-circle\"></i><span>Questionnaire</span></a>
                      </li>
                      <li>
                          <a href=\"#\"><i class=\"fas fa-directions\"></i><span>Orientation</span></a>
                      </li>
                      <li>
                          <a href=\"#\"><i class=\"fas fa-comments\"></i><span>Forum</span></a>
                      </li>
                  </ul>
              </nav>
          </div>

                <div class=\"sidebar-footer\">
            <a href=\"#\" class=\"user-profile\">
                <img src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/placeholder-admin.png"), "html", null, true);
        yield "\" 
                    alt=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "nom", [], "any", false, false, false, 69), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "prenom", [], "any", false, false, false, 69), "html", null, true);
        yield "\" class=\"user-img\">
                <div class=\"user-info\">
                    <h4>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "nom", [], "any", false, false, false, 71), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "prenom", [], "any", false, false, false, 71), "html", null, true);
        yield "</h4>
                    <p>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "getRole", [], "method", false, false, false, 72), "html", null, true);
        yield "</p>
                </div>
            </a>
            <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"logout\">
                <i class=\"fas fa-sign-out-alt\"></i>
                <span>Déconnexion</span>
            </a>
        </div>
    </aside>
      
    <!-- Main Content -->
    <main class=\"main-content\">
        <header>
            <button class=\"sidebar-toggle\"><i class=\"fas fa-bars\"></i></button>
            <h1>Dashboard</h1>
        </header>

        <section class=\"stats-cards\">
            <div class=\"stat-card\">
                <h3 class=\"stat-value\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 91, $this->source); })()), "html", null, true);
        yield "</h3>
                <p>Utilisateurs</p>
            </div>
        </section>

                <section class=\"dashboard-grid\">
            <div class=\"chart-card dashboard-card\">
                <div class=\"dashboard-card-header\">
                    <h3>Utilisateurs</h3>
                    <p>Statistiques des utilisateurs</p>
                </div>
                <div class=\"dashboard-card-body\">
                    <canvas id=\"usersChart\"></canvas>
                </div>
            </div>
        </section>

        <section class=\"recent-activity\">
            <h2>Derniers utilisateurs</h2>
            <table class=\"activity-table\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Inscription</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentUsers"]) || array_key_exists("recentUsers", $context) ? $context["recentUsers"] : (function () { throw new RuntimeError('Variable "recentUsers" does not exist.', 121, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 122
            yield "                        <tr>
                            <td>";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 123), "html", null, true);
            yield "</td>
                            <td>";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 124), "html", null, true);
            yield "</td>
                            <td>";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 125), "html", null, true);
            yield "</td>
                            <td>";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 126), "html", null, true);
            yield "</td>
                            <td>";
            // line 127
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 127), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
            yield "</td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 129
        if (!$context['_iterated']) {
            // line 130
            yield "                        <tr><td colspan=\"5\">Aucun utilisateur récent</td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "                </tbody>
            </table>
        </section>
    </main>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 139
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

        // line 140
        yield "<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Sidebar toggle
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');
    sidebarToggle?.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
        mainContent.classList.toggle('expanded');
    });

    // Charts
    const usersChartCtx = document.getElementById('usersChart');
    new Chart(usersChartCtx, {
        type: 'bar',
        data: {
            labels: ";
        // line 157
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["usersChart"]) || array_key_exists("usersChart", $context) ? $context["usersChart"] : (function () { throw new RuntimeError('Variable "usersChart" does not exist.', 157, $this->source); })()), "labels", [], "any", false, false, false, 157);
        yield ",
            datasets: [{
                label: 'Utilisateurs',
                data: ";
        // line 160
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["usersChart"]) || array_key_exists("usersChart", $context) ? $context["usersChart"] : (function () { throw new RuntimeError('Variable "usersChart" does not exist.', 160, $this->source); })()), "data", [], "any", false, false, false, 160);
        yield ",
                backgroundColor: 'rgba(54, 162, 235, 0.6)'
            }]
        },
        options: { responsive: true }
    });
});
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
        return "dashboard/index.html.twig";
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
        return array (  382 => 160,  376 => 157,  357 => 140,  344 => 139,  328 => 132,  321 => 130,  319 => 129,  312 => 127,  308 => 126,  304 => 125,  300 => 124,  296 => 123,  293 => 122,  288 => 121,  255 => 91,  236 => 75,  230 => 72,  224 => 71,  217 => 69,  213 => 68,  190 => 48,  184 => 45,  174 => 38,  164 => 31,  149 => 19,  145 => 18,  139 => 14,  126 => 13,  111 => 8,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/dashboard.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/crud.css') }}\">

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
{% endblock %}

{% block body %}
<div class=\"dashboard\">
    <aside class=\"sidebar\">
        <div class=\"sidebar-header\">
            <div class=\"logo\">
                <a href=\"{{ path('app_front') }}\">
                    <img src=\"{{ asset('assets/images/logo1.png') }}\" alt=\"LearnFlexPlus Logo\" class=\"nav-logo\">
                    <span>LearnFlex</span><span class=\"highlight\">+</span>
                </a>
            </div>
            <button class=\"sidebar-toggle\"><i class=\"fas fa-bars\"></i></button>
        </div>

      <!-- Sidebar -->
          <div class=\"sidebar-content\">
              <nav class=\"sidebar-menu\">
                  <ul>
                            <li class=\"active\">
                          <a href=\"{{ path('dashboard') }}\">
                              <i class=\"fas fa-tachometer-alt\"></i>
                              <span>Dashboard</span>
                          </a>
                      </li>

                      <li>
                          <a href=\"{{ path('app_users') }}\">
                              <i class=\"fas fa-users\"></i>
                              <span>Utilisateurs</span>
                          </a>
                      </li>
                      
                      <li>
                          <a href=\"{{ path('app_back_cours_index') }}\"><i class=\"fas fa-book-open\"></i><span>Cours</span></a>
                      </li>
                      <li>
                          <a href=\"{{ path('app_back_matiere_index') }}\"><i class=\"fas fa-book\"></i><span>Matières</span></a>
                      </li>
                      <li>
                          <a href=\"#\"><i class=\"fas fa-graduation-cap\"></i><span>Evaluation</span></a>
                      </li>
                      <li>
                          <a href=\"#\"><i class=\"fas fa-question-circle\"></i><span>Questionnaire</span></a>
                      </li>
                      <li>
                          <a href=\"#\"><i class=\"fas fa-directions\"></i><span>Orientation</span></a>
                      </li>
                      <li>
                          <a href=\"#\"><i class=\"fas fa-comments\"></i><span>Forum</span></a>
                      </li>
                  </ul>
              </nav>
          </div>

                <div class=\"sidebar-footer\">
            <a href=\"#\" class=\"user-profile\">
                <img src=\"{{ asset('assets/images/placeholder-admin.png') }}\" 
                    alt=\"{{ app.user.nom }} {{ app.user.prenom }}\" class=\"user-img\">
                <div class=\"user-info\">
                    <h4>{{ app.user.nom }} {{ app.user.prenom }}</h4>
                    <p>{{ app.user.getRole() }}</p>
                </div>
            </a>
            <a href=\"{{ path('app_logout') }}\" class=\"logout\">
                <i class=\"fas fa-sign-out-alt\"></i>
                <span>Déconnexion</span>
            </a>
        </div>
    </aside>
      
    <!-- Main Content -->
    <main class=\"main-content\">
        <header>
            <button class=\"sidebar-toggle\"><i class=\"fas fa-bars\"></i></button>
            <h1>Dashboard</h1>
        </header>

        <section class=\"stats-cards\">
            <div class=\"stat-card\">
                <h3 class=\"stat-value\">{{ totalUsers }}</h3>
                <p>Utilisateurs</p>
            </div>
        </section>

                <section class=\"dashboard-grid\">
            <div class=\"chart-card dashboard-card\">
                <div class=\"dashboard-card-header\">
                    <h3>Utilisateurs</h3>
                    <p>Statistiques des utilisateurs</p>
                </div>
                <div class=\"dashboard-card-body\">
                    <canvas id=\"usersChart\"></canvas>
                </div>
            </div>
        </section>

        <section class=\"recent-activity\">
            <h2>Derniers utilisateurs</h2>
            <table class=\"activity-table\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Inscription</th>
                    </tr>
                </thead>
                <tbody>
                    {% for user in recentUsers %}
                        <tr>
                            <td>{{ user.nom }}</td>
                            <td>{{ user.prenom }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.role }}</td>
                            <td>{{ user.createdAt ? user.createdAt|date('d/m/Y H:i') : 'N/A' }}</td>
                        </tr>
                    {% else %}
                        <tr><td colspan=\"5\">Aucun utilisateur récent</td></tr>
                    {% endfor %}
                </tbody>
            </table>
        </section>
    </main>
</div>
{% endblock %}

{% block javascripts %}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Sidebar toggle
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');
    sidebarToggle?.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
        mainContent.classList.toggle('expanded');
    });

    // Charts
    const usersChartCtx = document.getElementById('usersChart');
    new Chart(usersChartCtx, {
        type: 'bar',
        data: {
            labels: {{ usersChart.labels|raw }},
            datasets: [{
                label: 'Utilisateurs',
                data: {{ usersChart.data|raw }},
                backgroundColor: 'rgba(54, 162, 235, 0.6)'
            }]
        },
        options: { responsive: true }
    });
});
</script>
{% endblock %}
", "dashboard/index.html.twig", "C:\\Users\\hassa\\Downloads\\LearnFlex-\\LearnFlex-\\templates\\dashboard\\index.html.twig");
    }
}
