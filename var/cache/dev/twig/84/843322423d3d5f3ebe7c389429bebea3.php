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

/* login/forgetpassword.html.twig */
class __TwigTemplate_d16d96335b9631dffb83e3a0c071d5a9 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/forgetpassword.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/forgetpassword.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Réinitialisation de mot de passe - LearnFlexPlus</title>

    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/auth.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap\" rel=\"stylesheet\">

    <style>
        .verification-code {
            letter-spacing: 8px;
            font-size: 24px;
            text-align: center;
        }
        .step-indicator {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .step {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 10px;
            position: relative;
        }
        .step.active {
            background: #86b391;
            color: white;
        }
        .step::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 2px;
            background: #ddd;
            right: -20px;
            top: 50%;
        }
        .step:last-child::after {
            display: none;
        }
    </style>
</head>

<body>
<div class=\"auth-page\">
    <div class=\"auth-container\">
        <div class=\"auth-card\">

            <div class=\"auth-header\">
                <div class=\"logo-container\">
                    <img src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
        yield "\" alt=\"LearnFlexPlus Logo\" class=\"auth-logo\">
                    <span class=\"logo-text\">LearnFlexPlus</span>
                </div>
                <h1>Mot de passe oublié</h1>
                <p>Entrez votre adresse email pour réinitialiser votre mot de passe.</p>
            </div>

            ";
        // line 69
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 69, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 70, $this->source); })()), "html", null, true);
            yield "</div>
            ";
        }
        // line 72
        yield "
            ";
        // line 73
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 73, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield "                <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 74, $this->source); })()), "html", null, true);
            yield "</div>
            ";
        }
        // line 76
        yield "
            ";
        // line 77
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 77, $this->source); })()))) {
            // line 78
            yield "                <div class=\"step-indicator\">
                    <div class=\"step ";
            // line 79
            yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "session", [], "any", false, false, false, 79), "get", ["reset_password"], "method", false, false, false, 79))) ? ("active") : (""));
            yield "\">1</div>
                    <div class=\"step ";
            // line 80
            yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "session", [], "any", false, false, false, 80), "get", ["reset_password"], "method", false, false, false, 80))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
            yield "\">2</div>
                </div>

                <form class=\"auth-form\" method=\"post\">

                    ";
            // line 85
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "session", [], "any", false, false, false, 85), "get", ["reset_password"], "method", false, false, false, 85))) {
                // line 86
                yield "                        ";
                // line 87
                yield "                        <div class=\"form-group\">
                            <label for=\"email\">Email</label>
                            <div class=\"input-with-icon\">
                                <i class=\"fas fa-envelope\"></i>
                                <input
                                    type=\"email\"
                                    id=\"email\"
                                    name=\"email\"
                                    required
                                    placeholder=\"Entrez votre adresse email\"
                                    value=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", true, true, false, 97)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "email", [], "any", false, false, false, 97), "")) : ("")), "html", null, true);
                yield "\"
                                >
                            </div>
                        </div>

                        <button type=\"submit\" class=\"btn btn-primary btn-block\">
                            Envoyer le code de vérification
                        </button>

                    ";
            } else {
                // line 107
                yield "                        ";
                // line 108
                yield "                        <div class=\"form-section\">

                            <p class=\"text-muted\">
                                Un code a été envoyé à
                                <strong>";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "session", [], "any", false, false, false, 112), "get", ["reset_password"], "method", false, false, false, 112), "email", [], "any", false, false, false, 112), "html", null, true);
                yield "</strong>
                            </p>

                            <div class=\"form-group\">
                                <input
                                    type=\"text\"
                                    name=\"verification_code\"
                                    maxlength=\"6\"
                                    required
                                    placeholder=\"Entrez le code à 6 chiffres\"
                                >
                            </div>

                            <div class=\"form-group\">
                                <label for=\"new_password\">Nouveau mot de passe</label>
                                <input
                                    type=\"password\"
                                    name=\"new_password\"
                                    required
                                    minlength=\"8\"
                                    placeholder=\"8 caractères minimum\"
                                >
                            </div>

                            <div class=\"form-group\">
                                <label for=\"confirm_password\">Confirmer le nouveau mot de passe</label>
                                <input
                                    type=\"password\"
                                    name=\"confirm_password\"
                                    required
                                    minlength=\"8\"
                                    placeholder=\"Répétez le mot de passe\"
                                >
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary btn-block\">
                                Réinitialiser le mot de passe
                            </button>

                            <div class=\"text-center mt-3\">
                                <a href=\"";
                // line 152
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reset_password", ["new_code" => 1]);
                yield "\"
                                   style=\"color: #86b391; text-decoration: none; font-size: 0.9em;\">
                                    Renvoyer un nouveau code
                                </a>
                            </div>

                        </div>
                    ";
            }
            // line 160
            yield "                </form>
            ";
        }
        // line 162
        yield "
            <div class=\"auth-footer\">
                <p>Vous vous souvenez de votre mot de passe ?
                    <a href=\"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Se connecter</a>
                </p>
            </div>

        </div>
    </div>

    <div class=\"auth-image\">
        <div class=\"overlay\"></div>
    </div>
</div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/forgetpassword.html.twig";
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
        return array (  266 => 165,  261 => 162,  257 => 160,  246 => 152,  203 => 112,  197 => 108,  195 => 107,  182 => 97,  170 => 87,  168 => 86,  166 => 85,  158 => 80,  154 => 79,  151 => 78,  149 => 77,  146 => 76,  140 => 74,  138 => 73,  135 => 72,  129 => 70,  127 => 69,  117 => 62,  62 => 10,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Réinitialisation de mot de passe - LearnFlexPlus</title>

    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/auth.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap\" rel=\"stylesheet\">

    <style>
        .verification-code {
            letter-spacing: 8px;
            font-size: 24px;
            text-align: center;
        }
        .step-indicator {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .step {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 10px;
            position: relative;
        }
        .step.active {
            background: #86b391;
            color: white;
        }
        .step::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 2px;
            background: #ddd;
            right: -20px;
            top: 50%;
        }
        .step:last-child::after {
            display: none;
        }
    </style>
</head>

<body>
<div class=\"auth-page\">
    <div class=\"auth-container\">
        <div class=\"auth-card\">

            <div class=\"auth-header\">
                <div class=\"logo-container\">
                    <img src=\"{{ asset('assets/images/logo1.png') }}\" alt=\"LearnFlexPlus Logo\" class=\"auth-logo\">
                    <span class=\"logo-text\">LearnFlexPlus</span>
                </div>
                <h1>Mot de passe oublié</h1>
                <p>Entrez votre adresse email pour réinitialiser votre mot de passe.</p>
            </div>

            {% if error is not empty %}
                <div class=\"alert alert-danger\">{{ error }}</div>
            {% endif %}

            {% if success is not empty %}
                <div class=\"alert alert-success\">{{ success }}</div>
            {% endif %}

            {% if success is empty %}
                <div class=\"step-indicator\">
                    <div class=\"step {{ app.session.get('reset_password') is empty ? 'active' : '' }}\">1</div>
                    <div class=\"step {{ app.session.get('reset_password') is not empty ? 'active' : '' }}\">2</div>
                </div>

                <form class=\"auth-form\" method=\"post\">

                    {% if app.session.get('reset_password') is empty %}
                        {# STEP 1: EMAIL #}
                        <div class=\"form-group\">
                            <label for=\"email\">Email</label>
                            <div class=\"input-with-icon\">
                                <i class=\"fas fa-envelope\"></i>
                                <input
                                    type=\"email\"
                                    id=\"email\"
                                    name=\"email\"
                                    required
                                    placeholder=\"Entrez votre adresse email\"
                                    value=\"{{ form.email|default('') }}\"
                                >
                            </div>
                        </div>

                        <button type=\"submit\" class=\"btn btn-primary btn-block\">
                            Envoyer le code de vérification
                        </button>

                    {% else %}
                        {# STEP 2: CODE + PASSWORD #}
                        <div class=\"form-section\">

                            <p class=\"text-muted\">
                                Un code a été envoyé à
                                <strong>{{ app.session.get('reset_password').email }}</strong>
                            </p>

                            <div class=\"form-group\">
                                <input
                                    type=\"text\"
                                    name=\"verification_code\"
                                    maxlength=\"6\"
                                    required
                                    placeholder=\"Entrez le code à 6 chiffres\"
                                >
                            </div>

                            <div class=\"form-group\">
                                <label for=\"new_password\">Nouveau mot de passe</label>
                                <input
                                    type=\"password\"
                                    name=\"new_password\"
                                    required
                                    minlength=\"8\"
                                    placeholder=\"8 caractères minimum\"
                                >
                            </div>

                            <div class=\"form-group\">
                                <label for=\"confirm_password\">Confirmer le nouveau mot de passe</label>
                                <input
                                    type=\"password\"
                                    name=\"confirm_password\"
                                    required
                                    minlength=\"8\"
                                    placeholder=\"Répétez le mot de passe\"
                                >
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary btn-block\">
                                Réinitialiser le mot de passe
                            </button>

                            <div class=\"text-center mt-3\">
                                <a href=\"{{ path('app_reset_password', { new_code: 1 }) }}\"
                                   style=\"color: #86b391; text-decoration: none; font-size: 0.9em;\">
                                    Renvoyer un nouveau code
                                </a>
                            </div>

                        </div>
                    {% endif %}
                </form>
            {% endif %}

            <div class=\"auth-footer\">
                <p>Vous vous souvenez de votre mot de passe ?
                    <a href=\"{{ path('app_login') }}\">Se connecter</a>
                </p>
            </div>

        </div>
    </div>

    <div class=\"auth-image\">
        <div class=\"overlay\"></div>
    </div>
</div>
</body>
</html>
", "login/forgetpassword.html.twig", "C:\\Users\\hassa\\Downloads\\LearnFlex-\\LearnFlex-\\templates\\login\\forgetpassword.html.twig");
    }
}
