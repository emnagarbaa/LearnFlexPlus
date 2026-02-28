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

/* back/matiere/index.html.twig */
class __TwigTemplate_3edec8b66d4e4941f71dd1f22eca9206 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/matiere/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/matiere/index.html.twig"));

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

        yield "Liste des Matières";
        
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
        yield "<div class=\"recent-parcels\">
    <div class=\"section-header\">
        <h3>Gestion des Matières</h3>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matiere_new");
        yield "\" class=\"btn primary\">
            <i class=\"fas fa-plus\"></i> Ajouter une Matière
        </a>
    </div>

    <!-- Stats and Charts Section -->
    <div class=\"charts-section\" style=\"margin-bottom: 30px;\">
        <div class=\"stat-card\" style=\"padding: 20px; display: flex; align-items: center; gap: 20px;\">
            <div class=\"stat-icon rides\" style=\"background: #f0fdf4; color: #10b981; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;\">
                <i class=\"fas fa-book\"></i>
            </div>
            <div>
                <h3 style=\"font-size: 1.8rem; margin: 0;\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 21, $this->source); })())), "html", null, true);
        yield "</h3>
                <p style=\"margin: 0; color: #64748b;\">Total Matières</p>
            </div>
        </div>
    </div>

    <!-- Charts Grid: Two charts side by side -->
    <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 30px;\">
        <div class=\"chart-container\" style=\"background: white; padding: 25px; border-radius: 16px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);\">
            <h4 style=\"margin-bottom: 20px; color: var(--secondary);\">Répartition par Section</h4>
            <div style=\"height: 300px;\">
                <canvas id=\"sectionChart\"></canvas>
            </div>
        </div>

        <div class=\"chart-container\" style=\"background: white; padding: 25px; border-radius: 16px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);\">
            <h4 style=\"margin-bottom: 20px; color: var(--secondary);\">Distribution par Niveau</h4>
            <div style=\"height: 300px;\">
                <canvas id=\"niveauChart\"></canvas>
            </div>
        </div>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Section Pie Chart
            const ctx1 = document.getElementById('sectionChart').getContext('2d');
            new Chart(ctx1, {
                type: 'pie',
                data: {
                    labels: ";
        // line 52
        yield json_encode((isset($context["section_labels"]) || array_key_exists("section_labels", $context) ? $context["section_labels"] : (function () { throw new RuntimeError('Variable "section_labels" does not exist.', 52, $this->source); })()));
        yield ",
                    datasets: [{
                        data: ";
        // line 54
        yield json_encode((isset($context["section_data"]) || array_key_exists("section_data", $context) ? $context["section_data"] : (function () { throw new RuntimeError('Variable "section_data" does not exist.', 54, $this->source); })()));
        yield ",
                        backgroundColor: [
                            '#1f4f65', '#97c3a2', '#d7dd83', '#f97316', '#3b82f6', '#8b5cf6'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'bottom' }
                    }
                }
            });

            // Niveau Bar Chart
            const ctx2 = document.getElementById('niveauChart').getContext('2d');
            new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: ";
        // line 75
        yield json_encode((isset($context["niveau_labels"]) || array_key_exists("niveau_labels", $context) ? $context["niveau_labels"] : (function () { throw new RuntimeError('Variable "niveau_labels" does not exist.', 75, $this->source); })()));
        yield ",
                    datasets: [{
                        label: 'Nombre de matières',
                        data: ";
        // line 78
        yield json_encode((isset($context["niveau_data"]) || array_key_exists("niveau_data", $context) ? $context["niveau_data"] : (function () { throw new RuntimeError('Variable "niveau_data" does not exist.', 78, $this->source); })()));
        yield ",
                        backgroundColor: '#97c3a2',
                        borderRadius: 8,
                        borderWidth: 0
                    }]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        x: {
                            beginAtZero: true,
                            grid: { display: false }
                        },
                        y: {
                            grid: { display: false }
                        }
                    }
                }
            });
        });
    </script>

    <div class=\"parcels-table-container\">
        <style>
            .parcels-table th, .parcels-table td {
                vertical-align: middle !important;
                padding: 12px 15px;
            }
        </style>
        <table class=\"parcels-table\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th style=\"text-align: center;\">Image</th>
                    <th>Nom</th>
                    <th>Code</th>
                    <th>Section</th>
                    <th>Niveau</th>
                    <th style=\"text-align: center;\">Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 125, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 126
            yield "                <tr>
                    <td>";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "id", [], "any", false, false, false, 127), "html", null, true);
            yield "</td>
                    <td style=\"text-align: center;\">
                        ";
            // line 129
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "image", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 130
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "image", [], "any", false, false, false, 130))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "nomMatiere", [], "any", false, false, false, 130), "html", null, true);
                yield "\" style=\"width: 50px; height: 50px; object-fit: cover; border-radius: 4px;\">
                        ";
            } else {
                // line 132
                yield "                            <i class=\"fas fa-image\" style=\"font-size: 24px; color: #ccc;\"></i>
                        ";
            }
            // line 134
            yield "                    </td>
                    <td>";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "nomMatiere", [], "any", false, false, false, 135), "html", null, true);
            yield "</td>
                    <td>";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "codeMatiere", [], "any", false, false, false, 136), "html", null, true);
            yield "</td>
                    <td>";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "section", [], "any", false, false, false, 137), "html", null, true);
            yield "</td>
                    <td>";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "niveau", [], "any", false, false, false, 138), "html", null, true);
            yield "</td>
                    <td class=\"actions\">
                        <a href=\"";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matiere_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "id", [], "any", false, false, false, 140)]), "html", null, true);
            yield "\" class=\"action-btn edit\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        ";
            // line 143
            yield Twig\Extension\CoreExtension::include($this->env, $context, "back/matiere/_delete_form.html.twig");
            yield "
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 146
        if (!$context['_iterated']) {
            // line 147
            yield "                <tr>
                    <td colspan=\"7\">Aucun enregistrement trouvé</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['matiere'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        yield "            </tbody>
        </table>

        <div class=\"navigation\" style=\"margin-top: 20px; display: flex; justify-content: center;\">
            ";
        // line 155
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 155, $this->source); })()));
        yield "
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
        return "back/matiere/index.html.twig";
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
        return array (  338 => 155,  332 => 151,  323 => 147,  321 => 146,  305 => 143,  299 => 140,  294 => 138,  290 => 137,  286 => 136,  282 => 135,  279 => 134,  275 => 132,  267 => 130,  265 => 129,  260 => 127,  257 => 126,  239 => 125,  189 => 78,  183 => 75,  159 => 54,  154 => 52,  120 => 21,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/index.html.twig' %}

{% block title %}Liste des Matières{% endblock %}

{% block dashboard_content %}
<div class=\"recent-parcels\">
    <div class=\"section-header\">
        <h3>Gestion des Matières</h3>
        <a href=\"{{ path('app_back_matiere_new') }}\" class=\"btn primary\">
            <i class=\"fas fa-plus\"></i> Ajouter une Matière
        </a>
    </div>

    <!-- Stats and Charts Section -->
    <div class=\"charts-section\" style=\"margin-bottom: 30px;\">
        <div class=\"stat-card\" style=\"padding: 20px; display: flex; align-items: center; gap: 20px;\">
            <div class=\"stat-icon rides\" style=\"background: #f0fdf4; color: #10b981; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;\">
                <i class=\"fas fa-book\"></i>
            </div>
            <div>
                <h3 style=\"font-size: 1.8rem; margin: 0;\">{{ matieres|length }}</h3>
                <p style=\"margin: 0; color: #64748b;\">Total Matières</p>
            </div>
        </div>
    </div>

    <!-- Charts Grid: Two charts side by side -->
    <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 30px;\">
        <div class=\"chart-container\" style=\"background: white; padding: 25px; border-radius: 16px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);\">
            <h4 style=\"margin-bottom: 20px; color: var(--secondary);\">Répartition par Section</h4>
            <div style=\"height: 300px;\">
                <canvas id=\"sectionChart\"></canvas>
            </div>
        </div>

        <div class=\"chart-container\" style=\"background: white; padding: 25px; border-radius: 16px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);\">
            <h4 style=\"margin-bottom: 20px; color: var(--secondary);\">Distribution par Niveau</h4>
            <div style=\"height: 300px;\">
                <canvas id=\"niveauChart\"></canvas>
            </div>
        </div>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Section Pie Chart
            const ctx1 = document.getElementById('sectionChart').getContext('2d');
            new Chart(ctx1, {
                type: 'pie',
                data: {
                    labels: {{ section_labels|json_encode|raw }},
                    datasets: [{
                        data: {{ section_data|json_encode|raw }},
                        backgroundColor: [
                            '#1f4f65', '#97c3a2', '#d7dd83', '#f97316', '#3b82f6', '#8b5cf6'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'bottom' }
                    }
                }
            });

            // Niveau Bar Chart
            const ctx2 = document.getElementById('niveauChart').getContext('2d');
            new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: {{ niveau_labels|json_encode|raw }},
                    datasets: [{
                        label: 'Nombre de matières',
                        data: {{ niveau_data|json_encode|raw }},
                        backgroundColor: '#97c3a2',
                        borderRadius: 8,
                        borderWidth: 0
                    }]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        x: {
                            beginAtZero: true,
                            grid: { display: false }
                        },
                        y: {
                            grid: { display: false }
                        }
                    }
                }
            });
        });
    </script>

    <div class=\"parcels-table-container\">
        <style>
            .parcels-table th, .parcels-table td {
                vertical-align: middle !important;
                padding: 12px 15px;
            }
        </style>
        <table class=\"parcels-table\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th style=\"text-align: center;\">Image</th>
                    <th>Nom</th>
                    <th>Code</th>
                    <th>Section</th>
                    <th>Niveau</th>
                    <th style=\"text-align: center;\">Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for matiere in pagination %}
                <tr>
                    <td>{{ matiere.id }}</td>
                    <td style=\"text-align: center;\">
                        {% if matiere.image %}
                            <img src=\"{{ asset('uploads/images/' ~ matiere.image) }}\" alt=\"{{ matiere.nomMatiere }}\" style=\"width: 50px; height: 50px; object-fit: cover; border-radius: 4px;\">
                        {% else %}
                            <i class=\"fas fa-image\" style=\"font-size: 24px; color: #ccc;\"></i>
                        {% endif %}
                    </td>
                    <td>{{ matiere.nomMatiere }}</td>
                    <td>{{ matiere.codeMatiere }}</td>
                    <td>{{ matiere.section }}</td>
                    <td>{{ matiere.niveau }}</td>
                    <td class=\"actions\">
                        <a href=\"{{ path('app_back_matiere_edit', {'id': matiere.id}) }}\" class=\"action-btn edit\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        {{ include('back/matiere/_delete_form.html.twig') }}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"7\">Aucun enregistrement trouvé</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <div class=\"navigation\" style=\"margin-top: 20px; display: flex; justify-content: center;\">
            {{ knp_pagination_render(pagination) }}
        </div>
    </div>
</div>
{% endblock %}
", "back/matiere/index.html.twig", "C:\\Users\\hassa\\Downloads\\LearnFlex-\\LearnFlex-\\templates\\back\\matiere\\index.html.twig");
    }
}
