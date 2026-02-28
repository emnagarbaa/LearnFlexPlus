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

/* User/new.html.twig */
class __TwigTemplate_7884cfa8c73db32c54fb1f40d60f2c46 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/new.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield (((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier un Utilisateur") : ("Ajouter un Utilisateur"));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/dashboard.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/users.css"), "html", null, true);
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

        <div class=\"sidebar-content\">
            <nav class=\"sidebar-menu\">
                <ul>
                    <li>
                        <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">
                            <i class=\"fas fa-tachometer-alt\"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class=\"active\">
                        <a href=\"";
        // line 37
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
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/placeholder-admin.png"), "html", null, true);
        yield "\" 
                    alt=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "nom", [], "any", false, false, false, 55), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "prenom", [], "any", false, false, false, 55), "html", null, true);
        yield "\" class=\"user-img\">
                <div class=\"user-info\">
                    <h4>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "nom", [], "any", false, false, false, 57), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "prenom", [], "any", false, false, false, 57), "html", null, true);
        yield "</h4>
                    <p>";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "getRole", [], "method", false, false, false, 58), "html", null, true);
        yield "</p>
                </div>
            </a>
            <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"logout\">
                <i class=\"fas fa-sign-out-alt\"></i>
                <span>Déconnexion</span>
            </a>
        </div>
    </aside>

    ";
        // line 69
        yield "    <main class=\"main-content\">

        ";
        // line 72
        yield "        <header class=\"dashboard-header\">
            <div class=\"header-left\">
                <h1>";
        // line 74
        yield (((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 74, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier un Utilisateur") : ("Ajouter un Utilisateur"));
        yield "</h1>
                <p>";
        // line 75
        yield (((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 75, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modification des informations de l’utilisateur") : ("Création d’un nouvel utilisateur"));
        yield "</p>
            </div>
            <div class=\"header-right\">
                <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users");
        yield "\" class=\"btn secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour
                </a>
            </div>
        </header>

        ";
        // line 85
        yield "        <div class=\"dashboard-content\">
                        <div class=\"crud-container\">
                            <div class=\"crud-header\">
                                <h2>";
        // line 88
        yield (((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 88, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier l’utilisateur") : ("Informations de l’utilisateur"));
        yield "</h2>
                            </div>

                            <div class=\"crud-body\">
                ";
        // line 92
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'form_start', ["attr" => ["class" => "auth-form", "novalidate" => "novalidate"]]);
        yield "

                <div class=\"form-row\">
                    <div class=\"form-group\">
                        <label>Prénom</label>
                        <div class=\"input-with-icon\">
                            <i class=\"fas fa-user\"></i>
                            ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "prenom", [], "any", false, false, false, 99), 'widget', ["attr" => ["placeholder" => "Entrez votre prénom"]]);
        yield "
                        </div>
                        ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "prenom", [], "any", false, false, false, 101), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                        <label>Nom</label>
                        <div class=\"input-with-icon\">
                            <i class=\"fas fa-user\"></i>
                            ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "nom", [], "any", false, false, false, 108), 'widget', ["attr" => ["placeholder" => "Entrez votre nom"]]);
        yield "
                        </div>
                        ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "nom", [], "any", false, false, false, 110), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    <label>Email</label>
                    <div class=\"input-with-icon\">
                        <i class=\"fas fa-envelope\"></i>
                        ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "email", [], "any", false, false, false, 118), 'widget', ["attr" => ["placeholder" => "Entrez votre email"]]);
        yield "
                    </div>
                    ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "email", [], "any", false, false, false, 120), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    <label>Téléphone</label>
                    <div class=\"input-with-icon\">
                        <i class=\"fas fa-phone\"></i>
                        ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "telephone", [], "any", false, false, false, 127), 'widget', ["attr" => ["placeholder" => "Entrez votre numéro de téléphone"]]);
        yield "
                    </div>
                    ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "telephone", [], "any", false, false, false, 129), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    <label>Rôle <i class=\"fas fa-user-shield\"></i></label>
                    <div class=\"input-with-icon\" style=\"display: flex; align-items: center; gap: 5px;\">
                        ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "role", [], "any", false, false, false, 135), 'widget');
        yield "
                    </div>
                    ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "role", [], "any", false, false, false, 137), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    <label>Mot de passe</label>
                    <div class=\"input-with-icon\">
                        <i class=\"fas fa-lock\"></i>
                        ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "password", [], "any", false, false, false, 144), 'widget', ["attr" => ["placeholder" => "Créez un mot de passe"]]);
        yield "
                    </div>
                    ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "password", [], "any", false, false, false, 146), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    <label>Âge</label>
                    <div class=\"input-with-icon\">
                        <i class=\"fas fa-calendar\"></i>
                        ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "age", [], "any", false, false, false, 153), 'widget', ["attr" => ["placeholder" => "Entrez votre âge"]]);
        yield "
                    </div>
                    ";
        // line 155
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "age", [], "any", false, false, false, 155), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    <label>Adresse de résidence</label>
                    <div class=\"input-with-icon\">
                        <i class=\"fas fa-home\"></i>
                        ";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "adresseResidence", [], "any", false, false, false, 162), 'widget', ["attr" => ["placeholder" => "Numéro, Rue/Avenue, Gouvernorat", "style" => "padding-left: 30px;"]]);
        // line 167
        yield "
                    </div>
                    ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "adresseResidence", [], "any", false, false, false, 169), 'errors');
        yield "
                </div>

                <div class=\"form-actions\" style=\"margin-top: 1rem;\">
                    <button class=\"btn btn-primary btn-block\">
                        <i class=\"fas fa-save\"></i> ";
        // line 174
        yield (((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 174, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Enregistrer"));
        yield "
                    </button>
                    <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users");
        yield "\" class=\"btn btn-secondary btn-block\">Annuler</a>
                </div>

                ";
        // line 179
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), 'form_end');
        yield "
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

    // line 188
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

        // line 189
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
        return "User/new.html.twig";
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
        return array (  436 => 189,  423 => 188,  404 => 179,  398 => 176,  393 => 174,  385 => 169,  381 => 167,  379 => 162,  369 => 155,  364 => 153,  354 => 146,  349 => 144,  339 => 137,  334 => 135,  325 => 129,  320 => 127,  310 => 120,  305 => 118,  294 => 110,  289 => 108,  279 => 101,  274 => 99,  264 => 92,  257 => 88,  252 => 85,  243 => 78,  237 => 75,  233 => 74,  229 => 72,  225 => 69,  215 => 61,  209 => 58,  203 => 57,  196 => 55,  192 => 54,  172 => 37,  162 => 30,  148 => 19,  144 => 18,  138 => 14,  125 => 13,  111 => 9,  107 => 8,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/user/new.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{{ isEdit ? 'Modifier un Utilisateur' : 'Ajouter un Utilisateur' }}{% endblock %}

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
                    <span>LearnFlex</span><span class=\"highlight\">+</span>
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

    {# ===== MAIN CONTENT ===== #}
    <main class=\"main-content\">

        {# ===== HEADER ===== #}
        <header class=\"dashboard-header\">
            <div class=\"header-left\">
                <h1>{{ isEdit ? 'Modifier un Utilisateur' : 'Ajouter un Utilisateur' }}</h1>
                <p>{{ isEdit ? 'Modification des informations de l’utilisateur' : 'Création d’un nouvel utilisateur' }}</p>
            </div>
            <div class=\"header-right\">
                <a href=\"{{ path('app_users') }}\" class=\"btn secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour
                </a>
            </div>
        </header>

        {# ===== FORM CARD ===== #}
        <div class=\"dashboard-content\">
                        <div class=\"crud-container\">
                            <div class=\"crud-header\">
                                <h2>{{ isEdit ? 'Modifier l’utilisateur' : 'Informations de l’utilisateur' }}</h2>
                            </div>

                            <div class=\"crud-body\">
                {{ form_start(form, {'attr': {'class': 'auth-form', 'novalidate': 'novalidate'}}) }}

                <div class=\"form-row\">
                    <div class=\"form-group\">
                        <label>Prénom</label>
                        <div class=\"input-with-icon\">
                            <i class=\"fas fa-user\"></i>
                            {{ form_widget(form.prenom, {'attr': {'placeholder': 'Entrez votre prénom'}}) }}
                        </div>
                        {{ form_errors(form.prenom) }}
                    </div>

                    <div class=\"form-group\">
                        <label>Nom</label>
                        <div class=\"input-with-icon\">
                            <i class=\"fas fa-user\"></i>
                            {{ form_widget(form.nom, {'attr': {'placeholder': 'Entrez votre nom'}}) }}
                        </div>
                        {{ form_errors(form.nom) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    <label>Email</label>
                    <div class=\"input-with-icon\">
                        <i class=\"fas fa-envelope\"></i>
                        {{ form_widget(form.email, {'attr': {'placeholder': 'Entrez votre email'}}) }}
                    </div>
                    {{ form_errors(form.email) }}
                </div>

                <div class=\"form-group\">
                    <label>Téléphone</label>
                    <div class=\"input-with-icon\">
                        <i class=\"fas fa-phone\"></i>
                        {{ form_widget(form.telephone, {'attr': {'placeholder': 'Entrez votre numéro de téléphone'}}) }}
                    </div>
                    {{ form_errors(form.telephone) }}
                </div>

                <div class=\"form-group\">
                    <label>Rôle <i class=\"fas fa-user-shield\"></i></label>
                    <div class=\"input-with-icon\" style=\"display: flex; align-items: center; gap: 5px;\">
                        {{ form_widget(form.role) }}
                    </div>
                    {{ form_errors(form.role) }}
                </div>

                <div class=\"form-group\">
                    <label>Mot de passe</label>
                    <div class=\"input-with-icon\">
                        <i class=\"fas fa-lock\"></i>
                        {{ form_widget(form.password, {'attr': {'placeholder': 'Créez un mot de passe'}}) }}
                    </div>
                    {{ form_errors(form.password) }}
                </div>

                <div class=\"form-group\">
                    <label>Âge</label>
                    <div class=\"input-with-icon\">
                        <i class=\"fas fa-calendar\"></i>
                        {{ form_widget(form.age, {'attr': {'placeholder': 'Entrez votre âge'}}) }}
                    </div>
                    {{ form_errors(form.age) }}
                </div>

                <div class=\"form-group\">
                    <label>Adresse de résidence</label>
                    <div class=\"input-with-icon\">
                        <i class=\"fas fa-home\"></i>
                        {{ form_widget(form.adresseResidence, {
                            'attr': {
                                'placeholder': 'Numéro, Rue/Avenue, Gouvernorat',
                                'style': 'padding-left: 30px;'
                            }
                        }) }}
                    </div>
                    {{ form_errors(form.adresseResidence) }}
                </div>

                <div class=\"form-actions\" style=\"margin-top: 1rem;\">
                    <button class=\"btn btn-primary btn-block\">
                        <i class=\"fas fa-save\"></i> {{ isEdit ? 'Modifier' : 'Enregistrer' }}
                    </button>
                    <a href=\"{{ path('app_users') }}\" class=\"btn btn-secondary btn-block\">Annuler</a>
                </div>

                {{ form_end(form) }}
            </div>
            </div>
        </div>

    </main>
</div>
{% endblock %}

{% block javascripts %}
<script src=\"{{ asset('assets/js/main.js') }}\"></script>
{% endblock %}
", "User/new.html.twig", "C:\\Users\\pc\\Desktop\\LearnFlex-\\templates\\User\\new.html.twig");
    }
}
