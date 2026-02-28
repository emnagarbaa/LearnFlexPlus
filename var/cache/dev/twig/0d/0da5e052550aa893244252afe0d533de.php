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

/* User/index.html.twig */
class __TwigTemplate_e1fab323353af58950b4a69ed6abe9af extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/dashboard.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/users.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "<div class=\"dashboard\">
    <aside class=\"sidebar\">
        <div class=\"sidebar-header\">
    <div class=\"logo\">
        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\">
            <img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
        yield "\" alt=\"LearnFlexPlus Logo\" class=\"nav-logo\">
            <span>LearnFlex</span><span class=\"highlight\">Plus</span>
        </a>
    </div>
    <button class=\"sidebar-toggle\"><i class=\"fas fa-bars\"></i></button>
</div>


        <div class=\"sidebar-content\">
            <nav class=\"sidebar-menu\">
                <ul>
                    <li>
                        <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">
                            <i class=\"fas fa-tachometer-alt\"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class=\"active\">
                        <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users");
        yield "\">
                            <i class=\"fas fa-users\"></i>
                            <span>Utilisateurs</span>
                        </a>
                    </li>

                    <li><a href=\"#\"><i class=\"fas fa-book-open\"></i><span>Contenu pédagogique</span></a></li>
                    <li><a href=\"#\"><i class=\"fas fa-graduation-cap\"></i><span>Evaluation</span></a></li>
                    <li><a href=\"#\"><i class=\"fas fa-question-circle\"></i><span>Questionnaire</span></a></li>
                    <li><a href=\"#\"><i class=\"fas fa-directions\"></i><span>Orientation</span></a></li>
                    <li><a href=\"#\"><i class=\"fas fa-comments\"></i><span>Forum</span></a></li>
                </ul>
            </nav>
        </div>

                <div class=\"sidebar-footer\">
            <a href=\"#\" class=\"user-profile\">
                <img src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/placeholder-admin.png"), "html", null, true);
        yield "\" 
                    alt=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "nom", [], "any", false, false, false, 54), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "prenom", [], "any", false, false, false, 54), "html", null, true);
        yield "\" class=\"user-img\">
                <div class=\"user-info\">
                    <h4>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "nom", [], "any", false, false, false, 56), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "prenom", [], "any", false, false, false, 56), "html", null, true);
        yield "</h4>
                    <p>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "getRole", [], "method", false, false, false, 57), "html", null, true);
        yield "</p>
                </div>
            </a>
            <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"logout\">
                <i class=\"fas fa-sign-out-alt\"></i>
                <span>Déconnexion</span>
            </a>
        </div>
    </aside>

    <main class=\"main-content\">
        <header class=\"dashboard-header\">
            <div class=\"header-left\">
                <h1>Gestion des Utilisateurs</h1>
                <p>Ajoutez, modifiez et supprimez des utilisateurs</p>
            </div>

            <div class=\"header-right\">
                <div class=\"search-bar\">
                    <form method=\"GET\" action=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users");
        yield "\">
                        <input type=\"text\" name=\"search\" placeholder=\"Rechercher un utilisateur...\"
                            value=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 78, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                        <button type=\"submit\"><i class=\"fas fa-search\"></i></button>
                        ";
        // line 80
        if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 80, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users");
            yield "\" class=\"btn btn-outline-secondary ms-2\">Effacer</a>
                        ";
        }
        // line 83
        yield "                    </form>
                </div>


                <div class=\"actions\">
                    <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adduser");
        yield "\" class=\"btn primary\">
                        <i class=\"fas fa-plus\"></i> Ajouter un utilisateur
                    </a>
                </div>
            </div>
        </header>

        <div class=\"dashboard-content\">

            <!-- STATS -->
            <div class=\"stats-cards\">
                <div class=\"stat-card\">
                    <div class=\"icon neutral\"><i class=\"fas fa-users\"></i></div>
                    <div><h3>";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 101, $this->source); })()), "html", null, true);
        yield "</h3><span>Total</span></div>
                </div>

                <div class=\"stat-card\">
                    <div class=\"icon red\"><i class=\"fas fa-user-shield\"></i></div>
                    <div><h3>";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["adminsCount"]) || array_key_exists("adminsCount", $context) ? $context["adminsCount"] : (function () { throw new RuntimeError('Variable "adminsCount" does not exist.', 106, $this->source); })()), "html", null, true);
        yield "</h3><span>Admins</span></div>
                </div>

                <div class=\"stat-card\">
                    <div class=\"icon blue\"><i class=\"fas fa-car\"></i></div>
                    <div><h3>";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["enseignantsCount"]) || array_key_exists("enseignantsCount", $context) ? $context["enseignantsCount"] : (function () { throw new RuntimeError('Variable "enseignantsCount" does not exist.', 111, $this->source); })()), "html", null, true);
        yield "</h3><span>Enseignants</span></div>
                </div>

                <div class=\"stat-card\">
                    <div class=\"icon green\"><i class=\"fas fa-walking\"></i></div>
                    <div><h3>";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["etudiantsCount"]) || array_key_exists("etudiantsCount", $context) ? $context["etudiantsCount"] : (function () { throw new RuntimeError('Variable "etudiantsCount" does not exist.', 116, $this->source); })()), "html", null, true);
        yield "</h3><span>Étudiants</span></div>
                </div>
            </div>

            <!-- ACTION BAR -->
<div class=\"table-actions\">
    <div class=\"view-icons\">
        <button type=\"button\" class=\"icon-btn active\" title=\"Liste\" 
                onclick=\"switchView('list', this)\">
            <i class=\"fas fa-list\" style=\"font-size: 18px; color: #1f4f65;\"></i>
        </button>
        <button type=\"button\" class=\"icon-btn\" title=\"Grille\" 
                onclick=\"switchView('grid', this)\">
            <i class=\"fas fa-th\" style=\"font-size: 18px; color: #666;\"></i>
        </button>
    </div>

    <div class=\"actions-right\">
        <a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_pdf");
        yield "\" target=\"_blank\" 
           class=\"btn pdf\" title=\"Exporter PDF\"
           style=\"background-color: #007bff; color: #fff;\">
            <i class=\"fas fa-file-pdf\"></i> PDF
        </a>
        <button type=\"button\" class=\"btn ai\" title=\"Assistance IA\"
                style=\"background-color: #1d2a37; color: #fff;\">
            <i class=\"fas fa-robot\"></i> Assistance IA
        </button>
    </div>
</div>

<!-- USERS TABLE -->
<div class=\"parcels-table-container\" id=\"usersTableContainer\">
    <table class=\"parcels-table\" id=\"usersTable\">
        <thead>
    <tr>
        <th><a href=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users", ["sort" => "id", "direction" => ((((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 151, $this->source); })()) == "asc")) ? ("desc") : ("asc"))]), "html", null, true);
        yield "\">ID</a></th>
        <th><a href=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users", ["sort" => "nom", "direction" => ((((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 152, $this->source); })()) == "asc")) ? ("desc") : ("asc"))]), "html", null, true);
        yield "\">Nom</a></th>
        <th><a href=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users", ["sort" => "prenom", "direction" => ((((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 153, $this->source); })()) == "asc")) ? ("desc") : ("asc"))]), "html", null, true);
        yield "\">Prénom</a></th>
        <th>Email</th>
        <th><a href=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users", ["sort" => "role", "direction" => ((((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 155, $this->source); })()) == "asc")) ? ("desc") : ("asc"))]), "html", null, true);
        yield "\">Rôle</a></th>
        <th>Avatar</th>
        <th>Téléphone</th>
        <th>Actions</th>
    </tr>
</thead>
        <tbody>
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 162, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 163
            yield "            <tr>
                <td>";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 164), "html", null, true);
            yield "</td>
                <td><strong>";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 165), "html", null, true);
            yield "</strong></td>
                <td>";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 166), "html", null, true);
            yield "</td>
                <td>";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 167), "html", null, true);
            yield "</td>
                <td>";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "getRole", [], "method", false, false, false, 168), "html", null, true);
            yield "</td>
                
                <td>
                    <div class=\"activity-icon\" style=\"background-color: var(--primary); color: var(--text-light); font-weight: bold;\">
                        ";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 172)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 172)), "html", null, true);
            yield "
                    </div>
                </td>
                <td>";
            // line 175
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", true, true, false, 175) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 175)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 175), "html", null, true)) : ("—"));
            yield "</td>
                <td class=\"actions\">
                    <a href=\"";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edituser", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 177)]), "html", null, true);
            yield "\" class=\"action-btn edit\" title=\"Éditer\">
                        <i class=\"fas fa-edit\"></i>
                    </a>
                    <a href=\"";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deleteuser", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 180)]), "html", null, true);
            yield "\" class=\"action-btn delete\"
                       onclick=\"return confirm('Voulez-vous vraiment supprimer cet utilisateur ?');\" title=\"Supprimer\">
                        <i class=\"fas fa-trash\"></i>
                    </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 186
        if (!$context['_iterated']) {
            // line 187
            yield "            <tr>
                <td colspan=\"8\" class=\"text-center\">Aucun utilisateur trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        yield "        </tbody>
    </table>
</div>

<script>
function switchView(view, btn) {
    const table = document.getElementById('usersTable');
    const container = document.getElementById('usersTableContainer');

    // Remove active from all buttons
    document.querySelectorAll('.view-icons button').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    if (view === 'grid') {
        // Switch table container to flex/grid view
        container.style.display = 'grid';
        container.style.gridTemplateColumns = 'repeat(auto-fill, minmax(250px, 1fr))';
        container.style.gap = '1rem';
        table.style.display = 'block';  // hide normal table layout
        table.querySelectorAll('tr').forEach(tr => {
            tr.style.display = 'flex';
            tr.style.flexDirection = 'column';
            tr.style.border = '1px solid var(--gray)';
            tr.style.padding = '0.5rem';
            tr.style.borderRadius = '8px';
            tr.style.background = 'white';
            tr.style.marginBottom = '0.5rem';
        });
        // Hide table header in grid view
        table.querySelector('thead').style.display = 'none';
    } else {
        // Reset to normal table view
        container.style.display = '';
        container.style.gridTemplateColumns = '';
        container.style.gap = '';
        table.style.display = '';
        table.querySelectorAll('tr').forEach(tr => {
            tr.style.display = '';
            tr.style.flexDirection = '';
            tr.style.border = '';
            tr.style.padding = '';
            tr.style.borderRadius = '';
            tr.style.background = '';
            tr.style.marginBottom = '';
        });
        table.querySelector('thead').style.display = '';
    }
}
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 243
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

        // line 244
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>
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
        return "User/index.html.twig";
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
        return array (  485 => 244,  472 => 243,  411 => 191,  402 => 187,  400 => 186,  389 => 180,  383 => 177,  378 => 175,  371 => 172,  364 => 168,  360 => 167,  356 => 166,  352 => 165,  348 => 164,  345 => 163,  340 => 162,  330 => 155,  325 => 153,  321 => 152,  317 => 151,  297 => 134,  276 => 116,  268 => 111,  260 => 106,  252 => 101,  236 => 88,  229 => 83,  223 => 81,  221 => 80,  216 => 78,  211 => 76,  192 => 60,  186 => 57,  180 => 56,  173 => 54,  169 => 53,  149 => 36,  139 => 29,  124 => 17,  120 => 16,  114 => 12,  101 => 11,  87 => 7,  83 => 6,  78 => 5,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/user/index.html.twig #}
{% extends 'base.html.twig' %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/dashboard.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/users.css') }}\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
{% endblock %}

{% block body %}
<div class=\"dashboard\">
    <aside class=\"sidebar\">
        <div class=\"sidebar-header\">
    <div class=\"logo\">
        <a href=\"{{ path('app_front') }}\">
            <img src=\"{{ asset('assets/images/logo1.png') }}\" alt=\"LearnFlexPlus Logo\" class=\"nav-logo\">
            <span>LearnFlex</span><span class=\"highlight\">Plus</span>
        </a>
    </div>
    <button class=\"sidebar-toggle\"><i class=\"fas fa-bars\"></i></button>
</div>


        <div class=\"sidebar-content\">
            <nav class=\"sidebar-menu\">
                <ul>
                    <li>
                        <a href=\"{{ path('dashboard') }}\">
                            <i class=\"fas fa-tachometer-alt\"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class=\"active\">
                        <a href=\"{{ path('app_users') }}\">
                            <i class=\"fas fa-users\"></i>
                            <span>Utilisateurs</span>
                        </a>
                    </li>

                    <li><a href=\"#\"><i class=\"fas fa-book-open\"></i><span>Contenu pédagogique</span></a></li>
                    <li><a href=\"#\"><i class=\"fas fa-graduation-cap\"></i><span>Evaluation</span></a></li>
                    <li><a href=\"#\"><i class=\"fas fa-question-circle\"></i><span>Questionnaire</span></a></li>
                    <li><a href=\"#\"><i class=\"fas fa-directions\"></i><span>Orientation</span></a></li>
                    <li><a href=\"#\"><i class=\"fas fa-comments\"></i><span>Forum</span></a></li>
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

    <main class=\"main-content\">
        <header class=\"dashboard-header\">
            <div class=\"header-left\">
                <h1>Gestion des Utilisateurs</h1>
                <p>Ajoutez, modifiez et supprimez des utilisateurs</p>
            </div>

            <div class=\"header-right\">
                <div class=\"search-bar\">
                    <form method=\"GET\" action=\"{{ path('app_users') }}\">
                        <input type=\"text\" name=\"search\" placeholder=\"Rechercher un utilisateur...\"
                            value=\"{{ search|default('') }}\">
                        <button type=\"submit\"><i class=\"fas fa-search\"></i></button>
                        {% if search %}
                            <a href=\"{{ path('app_users') }}\" class=\"btn btn-outline-secondary ms-2\">Effacer</a>
                        {% endif %}
                    </form>
                </div>


                <div class=\"actions\">
                    <a href=\"{{ path('app_adduser') }}\" class=\"btn primary\">
                        <i class=\"fas fa-plus\"></i> Ajouter un utilisateur
                    </a>
                </div>
            </div>
        </header>

        <div class=\"dashboard-content\">

            <!-- STATS -->
            <div class=\"stats-cards\">
                <div class=\"stat-card\">
                    <div class=\"icon neutral\"><i class=\"fas fa-users\"></i></div>
                    <div><h3>{{ totalUsers }}</h3><span>Total</span></div>
                </div>

                <div class=\"stat-card\">
                    <div class=\"icon red\"><i class=\"fas fa-user-shield\"></i></div>
                    <div><h3>{{ adminsCount }}</h3><span>Admins</span></div>
                </div>

                <div class=\"stat-card\">
                    <div class=\"icon blue\"><i class=\"fas fa-car\"></i></div>
                    <div><h3>{{ enseignantsCount }}</h3><span>Enseignants</span></div>
                </div>

                <div class=\"stat-card\">
                    <div class=\"icon green\"><i class=\"fas fa-walking\"></i></div>
                    <div><h3>{{ etudiantsCount }}</h3><span>Étudiants</span></div>
                </div>
            </div>

            <!-- ACTION BAR -->
<div class=\"table-actions\">
    <div class=\"view-icons\">
        <button type=\"button\" class=\"icon-btn active\" title=\"Liste\" 
                onclick=\"switchView('list', this)\">
            <i class=\"fas fa-list\" style=\"font-size: 18px; color: #1f4f65;\"></i>
        </button>
        <button type=\"button\" class=\"icon-btn\" title=\"Grille\" 
                onclick=\"switchView('grid', this)\">
            <i class=\"fas fa-th\" style=\"font-size: 18px; color: #666;\"></i>
        </button>
    </div>

    <div class=\"actions-right\">
        <a href=\"{{ path('app_users_pdf') }}\" target=\"_blank\" 
           class=\"btn pdf\" title=\"Exporter PDF\"
           style=\"background-color: #007bff; color: #fff;\">
            <i class=\"fas fa-file-pdf\"></i> PDF
        </a>
        <button type=\"button\" class=\"btn ai\" title=\"Assistance IA\"
                style=\"background-color: #1d2a37; color: #fff;\">
            <i class=\"fas fa-robot\"></i> Assistance IA
        </button>
    </div>
</div>

<!-- USERS TABLE -->
<div class=\"parcels-table-container\" id=\"usersTableContainer\">
    <table class=\"parcels-table\" id=\"usersTable\">
        <thead>
    <tr>
        <th><a href=\"{{ path('app_users', { sort: 'id', direction: direction == 'asc' ? 'desc' : 'asc' }) }}\">ID</a></th>
        <th><a href=\"{{ path('app_users', { sort: 'nom', direction: direction == 'asc' ? 'desc' : 'asc' }) }}\">Nom</a></th>
        <th><a href=\"{{ path('app_users', { sort: 'prenom', direction: direction == 'asc' ? 'desc' : 'asc' }) }}\">Prénom</a></th>
        <th>Email</th>
        <th><a href=\"{{ path('app_users', { sort: 'role', direction: direction == 'asc' ? 'desc' : 'asc' }) }}\">Rôle</a></th>
        <th>Avatar</th>
        <th>Téléphone</th>
        <th>Actions</th>
    </tr>
</thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.id }}</td>
                <td><strong>{{ user.nom }}</strong></td>
                <td>{{ user.prenom }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.getRole() }}</td>
                
                <td>
                    <div class=\"activity-icon\" style=\"background-color: var(--primary); color: var(--text-light); font-weight: bold;\">
                        {{ user.prenom|first }}{{ user.nom|first }}
                    </div>
                </td>
                <td>{{ user.telephone ?? '—' }}</td>
                <td class=\"actions\">
                    <a href=\"{{ path('app_edituser', { id: user.id }) }}\" class=\"action-btn edit\" title=\"Éditer\">
                        <i class=\"fas fa-edit\"></i>
                    </a>
                    <a href=\"{{ path('app_deleteuser', { id: user.id }) }}\" class=\"action-btn delete\"
                       onclick=\"return confirm('Voulez-vous vraiment supprimer cet utilisateur ?');\" title=\"Supprimer\">
                        <i class=\"fas fa-trash\"></i>
                    </a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\" class=\"text-center\">Aucun utilisateur trouvé</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>

<script>
function switchView(view, btn) {
    const table = document.getElementById('usersTable');
    const container = document.getElementById('usersTableContainer');

    // Remove active from all buttons
    document.querySelectorAll('.view-icons button').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    if (view === 'grid') {
        // Switch table container to flex/grid view
        container.style.display = 'grid';
        container.style.gridTemplateColumns = 'repeat(auto-fill, minmax(250px, 1fr))';
        container.style.gap = '1rem';
        table.style.display = 'block';  // hide normal table layout
        table.querySelectorAll('tr').forEach(tr => {
            tr.style.display = 'flex';
            tr.style.flexDirection = 'column';
            tr.style.border = '1px solid var(--gray)';
            tr.style.padding = '0.5rem';
            tr.style.borderRadius = '8px';
            tr.style.background = 'white';
            tr.style.marginBottom = '0.5rem';
        });
        // Hide table header in grid view
        table.querySelector('thead').style.display = 'none';
    } else {
        // Reset to normal table view
        container.style.display = '';
        container.style.gridTemplateColumns = '';
        container.style.gap = '';
        table.style.display = '';
        table.querySelectorAll('tr').forEach(tr => {
            tr.style.display = '';
            tr.style.flexDirection = '';
            tr.style.border = '';
            tr.style.padding = '';
            tr.style.borderRadius = '';
            tr.style.background = '';
            tr.style.marginBottom = '';
        });
        table.querySelector('thead').style.display = '';
    }
}
</script>

{% endblock %} {# body #}

{% block javascripts %}
<script src=\"{{ asset('assets/js/main.js') }}\"></script>
{% endblock %}", "User/index.html.twig", "C:\\Users\\pc\\Desktop\\LearnFlex-\\templates\\User\\index.html.twig");
    }
}
