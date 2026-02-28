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

/* back/cours/index.html.twig */
class __TwigTemplate_5aabac6967fc13bbecf2dd17784e0ad8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/cours/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/cours/index.html.twig"));

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

        yield "Liste des Cours";
        
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
        <h3>Gestion des Cours</h3>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_cours_new");
        yield "\" class=\"btn primary\">
            <i class=\"fas fa-plus\"></i> Ajouter un Cours
        </a>
    </div>

    <!-- Stats and Charts Section -->
    <div class=\"charts-section\" style=\"margin-bottom: 30px; display: grid; grid-template-columns: 1fr 1fr; gap: 20px;\">
        <div class=\"stat-card\" style=\"padding: 20px; display: flex; align-items: center; gap: 20px;\">
            <div class=\"stat-icon rides\" style=\"background: #f0fdf4; color: #10b981; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;\">
                <i class=\"fas fa-graduation-cap\"></i>
            </div>
            <div>
                <h3 style=\"font-size: 1.8rem; margin: 0;\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 21, $this->source); })())), "html", null, true);
        yield "</h3>
                <p style=\"margin: 0; color: #64748b;\">Total Cours</p>
            </div>
        </div>

        <div class=\"stat-card\" style=\"padding: 20px; display: flex; align-items: center; gap: 20px;\">
            <div class=\"stat-icon users\" style=\"background: #faf5ff; color: #a855f7; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;\">
                <i class=\"fas fa-clock\"></i>
            </div>
            <div>
                <h3 style=\"font-size: 1.8rem; margin: 0;\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_hours"]) || array_key_exists("total_hours", $context) ? $context["total_hours"] : (function () { throw new RuntimeError('Variable "total_hours" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "h</h3>
                <p style=\"margin: 0; color: #64748b;\">Volume Horaire</p>
            </div>
        </div>
    </div>

    <!-- Charts Grid: Two charts side by side -->
    <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 30px;\">
        <div class=\"chart-container\" style=\"background: white; padding: 25px; border-radius: 16px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);\">
            <h4 style=\"margin-bottom: 20px; color: var(--secondary);\">Volume Horaire par Matière</h4>
            <div style=\"height: 300px;\">
                <canvas id=\"scoreChart\"></canvas>
            </div>
        </div>

        <div class=\"chart-container\" style=\"background: white; padding: 25px; border-radius: 16px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);\">
            <h4 style=\"margin-bottom: 20px; color: var(--secondary);\">Répartition par Langue</h4>
            <div style=\"height: 300px;\">
                <canvas id=\"langueChart\"></canvas>
            </div>
        </div>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Volume Horaire Chart (replaces Score Chart)
            const ctxScore = document.getElementById('scoreChart').getContext('2d');
            new Chart(ctxScore, {
                type: 'bar',
                data: {
                    labels: ";
        // line 62
        yield json_encode((isset($context["subject_avg_labels"]) || array_key_exists("subject_avg_labels", $context) ? $context["subject_avg_labels"] : (function () { throw new RuntimeError('Variable "subject_avg_labels" does not exist.', 62, $this->source); })()));
        yield ",
                    datasets: [{
                        label: 'Volume Horaire (heures)',
                        data: ";
        // line 65
        yield json_encode((isset($context["subject_avg_data"]) || array_key_exists("subject_avg_data", $context) ? $context["subject_avg_data"] : (function () { throw new RuntimeError('Variable "subject_avg_data" does not exist.', 65, $this->source); })()));
        yield ",
                        backgroundColor: '#10b981',
                        borderRadius: 8,
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: { display: false }
                        },
                        x: {
                            grid: { display: false }
                        }
                    }
                }
            });

            // Language Doughnut Chart
            const ctxLang = document.getElementById('langueChart').getContext('2d');
            new Chart(ctxLang, {
                type: 'doughnut',
                data: {
                    labels: ";
        // line 94
        yield json_encode((isset($context["langue_labels"]) || array_key_exists("langue_labels", $context) ? $context["langue_labels"] : (function () { throw new RuntimeError('Variable "langue_labels" does not exist.', 94, $this->source); })()));
        yield ",
                    datasets: [{
                        data: ";
        // line 96
        yield json_encode((isset($context["langue_data"]) || array_key_exists("langue_data", $context) ? $context["langue_data"] : (function () { throw new RuntimeError('Variable "langue_data" does not exist.', 96, $this->source); })()));
        yield ",
                        backgroundColor: [
                            '#3b82f6', '#10b981', '#f59e0b', '#ef4444', '#8b5cf6', '#ec4899'
                        ],
                        borderWidth: 2,
                        borderColor: '#fff'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { 
                            position: 'bottom',
                            labels: {
                                padding: 15,
                                font: { size: 12 }
                            }
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
            .parcels-table img {
                display: block;
                margin: 0 auto;
            }
        </style>
        <table class=\"parcels-table\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th style=\"text-align: center;\">Image</th>
                    <th>Titre</th>
                    <th>Matière</th>
                    <th>Section</th>
                    <th>Durée</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 144, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 145
            yield "                <tr>
                    <td>";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 146), "html", null, true);
            yield "</td>
                    <td style=\"text-align: center;\">
                        ";
            // line 148
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "image", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 149
                yield "                            ";
                if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "image", [], "any", false, false, false, 149)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) {
                    // line 150
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "image", [], "any", false, false, false, 150), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "titre", [], "any", false, false, false, 150), "html", null, true);
                    yield "\" style=\"width: 50px; height: 50px; object-fit: cover; border-radius: 4px;\">
                            ";
                } else {
                    // line 152
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "image", [], "any", false, false, false, 152))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "titre", [], "any", false, false, false, 152), "html", null, true);
                    yield "\" style=\"width: 50px; height: 50px; object-fit: cover; border-radius: 4px;\">
                            ";
                }
                // line 154
                yield "                        ";
            } else {
                // line 155
                yield "                            <i class=\"fas fa-image\" style=\"font-size: 24px; color: #ccc;\"></i>
                        ";
            }
            // line 157
            yield "                    </td>
                    <td>";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "titre", [], "any", false, false, false, 158), "html", null, true);
            yield "</td>
                    <td>";
            // line 159
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "matiere", [], "any", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "matiere", [], "any", false, false, false, 159), "nomMatiere", [], "any", false, false, false, 159), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "section", [], "any", false, false, false, 160), "html", null, true);
            yield "</td>
                    <td>";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "dureeTotale", [], "any", false, false, false, 161), "html", null, true);
            yield "</td>

                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 164
        if (!$context['_iterated']) {
            // line 165
            yield "                <tr>
                    <td colspan=\"7\">Aucun enregistrement trouvé</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cour'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        yield "            </tbody>
        </table>

        <div class=\"navigation\" style=\"margin-top: 20px; display: flex; justify-content: center;\">
            ";
        // line 173
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 173, $this->source); })()));
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
        return "back/cours/index.html.twig";
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
        return array (  342 => 173,  336 => 169,  327 => 165,  325 => 164,  317 => 161,  313 => 160,  309 => 159,  305 => 158,  302 => 157,  298 => 155,  295 => 154,  287 => 152,  279 => 150,  276 => 149,  274 => 148,  269 => 146,  266 => 145,  261 => 144,  210 => 96,  205 => 94,  173 => 65,  167 => 62,  133 => 31,  120 => 21,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/index.html.twig' %}

{% block title %}Liste des Cours{% endblock %}

{% block dashboard_content %}
<div class=\"recent-parcels\">
    <div class=\"section-header\">
        <h3>Gestion des Cours</h3>
        <a href=\"{{ path('app_back_cours_new') }}\" class=\"btn primary\">
            <i class=\"fas fa-plus\"></i> Ajouter un Cours
        </a>
    </div>

    <!-- Stats and Charts Section -->
    <div class=\"charts-section\" style=\"margin-bottom: 30px; display: grid; grid-template-columns: 1fr 1fr; gap: 20px;\">
        <div class=\"stat-card\" style=\"padding: 20px; display: flex; align-items: center; gap: 20px;\">
            <div class=\"stat-icon rides\" style=\"background: #f0fdf4; color: #10b981; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;\">
                <i class=\"fas fa-graduation-cap\"></i>
            </div>
            <div>
                <h3 style=\"font-size: 1.8rem; margin: 0;\">{{ cours|length }}</h3>
                <p style=\"margin: 0; color: #64748b;\">Total Cours</p>
            </div>
        </div>

        <div class=\"stat-card\" style=\"padding: 20px; display: flex; align-items: center; gap: 20px;\">
            <div class=\"stat-icon users\" style=\"background: #faf5ff; color: #a855f7; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;\">
                <i class=\"fas fa-clock\"></i>
            </div>
            <div>
                <h3 style=\"font-size: 1.8rem; margin: 0;\">{{ total_hours }}h</h3>
                <p style=\"margin: 0; color: #64748b;\">Volume Horaire</p>
            </div>
        </div>
    </div>

    <!-- Charts Grid: Two charts side by side -->
    <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 30px;\">
        <div class=\"chart-container\" style=\"background: white; padding: 25px; border-radius: 16px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);\">
            <h4 style=\"margin-bottom: 20px; color: var(--secondary);\">Volume Horaire par Matière</h4>
            <div style=\"height: 300px;\">
                <canvas id=\"scoreChart\"></canvas>
            </div>
        </div>

        <div class=\"chart-container\" style=\"background: white; padding: 25px; border-radius: 16px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);\">
            <h4 style=\"margin-bottom: 20px; color: var(--secondary);\">Répartition par Langue</h4>
            <div style=\"height: 300px;\">
                <canvas id=\"langueChart\"></canvas>
            </div>
        </div>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Volume Horaire Chart (replaces Score Chart)
            const ctxScore = document.getElementById('scoreChart').getContext('2d');
            new Chart(ctxScore, {
                type: 'bar',
                data: {
                    labels: {{ subject_avg_labels|json_encode|raw }},
                    datasets: [{
                        label: 'Volume Horaire (heures)',
                        data: {{ subject_avg_data|json_encode|raw }},
                        backgroundColor: '#10b981',
                        borderRadius: 8,
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: { display: false }
                        },
                        x: {
                            grid: { display: false }
                        }
                    }
                }
            });

            // Language Doughnut Chart
            const ctxLang = document.getElementById('langueChart').getContext('2d');
            new Chart(ctxLang, {
                type: 'doughnut',
                data: {
                    labels: {{ langue_labels|json_encode|raw }},
                    datasets: [{
                        data: {{ langue_data|json_encode|raw }},
                        backgroundColor: [
                            '#3b82f6', '#10b981', '#f59e0b', '#ef4444', '#8b5cf6', '#ec4899'
                        ],
                        borderWidth: 2,
                        borderColor: '#fff'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { 
                            position: 'bottom',
                            labels: {
                                padding: 15,
                                font: { size: 12 }
                            }
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
            .parcels-table img {
                display: block;
                margin: 0 auto;
            }
        </style>
        <table class=\"parcels-table\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th style=\"text-align: center;\">Image</th>
                    <th>Titre</th>
                    <th>Matière</th>
                    <th>Section</th>
                    <th>Durée</th>
                </tr>
            </thead>
            <tbody>
            {% for cour in pagination %}
                <tr>
                    <td>{{ cour.id }}</td>
                    <td style=\"text-align: center;\">
                        {% if cour.image %}
                            {% if cour.image starts with 'http' %}
                                <img src=\"{{ cour.image }}\" alt=\"{{ cour.titre }}\" style=\"width: 50px; height: 50px; object-fit: cover; border-radius: 4px;\">
                            {% else %}
                                <img src=\"{{ asset('uploads/images/' ~ cour.image) }}\" alt=\"{{ cour.titre }}\" style=\"width: 50px; height: 50px; object-fit: cover; border-radius: 4px;\">
                            {% endif %}
                        {% else %}
                            <i class=\"fas fa-image\" style=\"font-size: 24px; color: #ccc;\"></i>
                        {% endif %}
                    </td>
                    <td>{{ cour.titre }}</td>
                    <td>{{ cour.matiere ? cour.matiere.nomMatiere : '' }}</td>
                    <td>{{ cour.section }}</td>
                    <td>{{ cour.dureeTotale }}</td>

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
", "back/cours/index.html.twig", "C:\\Users\\hassa\\Downloads\\LearnFlex-\\LearnFlex-\\templates\\back\\cours\\index.html.twig");
    }
}
