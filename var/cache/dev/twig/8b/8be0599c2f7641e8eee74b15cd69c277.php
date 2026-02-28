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

/* register/register.html.twig */
class __TwigTemplate_59fbde7ccd53c17e831a35e904db0bd1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/register.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>LearnFlexPlus - Inscription</title>
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
</head>

<body>
    <div class=\"auth-page\">
        <div class=\"auth-container\">
            <div class=\"auth-card\">
                <div class=\"auth-header\">
                    <div class=\"logo-container\">
                        <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
        yield "\" alt=\"LearnFlexPlus Logo\" class=\"auth-logo\">
                        <span class=\"logo-text\">LearnFlexPlus</span>
                    </div>
                    <h1>Inscription</h1>
                    <p>Créez votre compte LearnFlexPlus pour profiter de tous nos services.</p>
                </div>

                ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["class" => "auth-form", "novalidate" => "novalidate"]]);
        yield "
                    
                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label>Prénom</label>
                            <div class=\"input-with-icon\">
                                <i class=\"fas fa-user\"></i>
                                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "prenom", [], "any", false, false, false, 35), 'widget', ["attr" => ["placeholder" => "Entrez votre prénom"]]);
        yield "
                            </div>
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "prenom", [], "any", false, false, false, 37), 'errors');
        yield "
                        </div>
                        <div class=\"form-group\">
                            <label>Nom</label>
                            <div class=\"input-with-icon\">
                                <i class=\"fas fa-user\"></i>
                                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "nom", [], "any", false, false, false, 43), 'widget', ["attr" => ["placeholder" => "Entrez votre nom"]]);
        yield "
                            </div>
                            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "nom", [], "any", false, false, false, 45), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label>Email</label>
                        <div class=\"input-with-icon\">
                            <i class=\"fas fa-envelope\"></i>
                            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53), 'widget', ["attr" => ["placeholder" => "Entrez votre email"]]);
        yield "
                        </div>
                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                        <label>Téléphone</label>
                        <div class=\"input-with-icon\">
                            <i class=\"fas fa-phone\"></i>
                            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "telephone", [], "any", false, false, false, 62), 'widget', ["attr" => ["placeholder" => "Entrez votre numéro de téléphone"]]);
        yield "
                        </div>
                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "telephone", [], "any", false, false, false, 64), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                        <label>Rôle <i class=\"fas fa-user-shield\"></i></label>
                        <div class=\"input-with-icon\" style=\"display: flex; align-items: center; gap: 5px;\">
                            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "role", [], "any", false, false, false, 70), 'widget');
        yield "
                        </div>
                        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "role", [], "any", false, false, false, 72), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                        <label>Mot de passe</label>
                        <div class=\"input-with-icon\">
                            <i class=\"fas fa-lock\"></i>
                            ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 79, $this->source); })()), "password", [], "any", false, false, false, 79), 'widget', ["attr" => ["placeholder" => "Créez un mot de passe"]]);
        yield "
                        </div>
                        ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), "password", [], "any", false, false, false, 81), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                    <label>Âge</label>
                    <div class=\"input-with-icon\">
                        <i class=\"fas fa-calendar\"></i>
                        ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 88, $this->source); })()), "age", [], "any", false, false, false, 88), 'widget', ["attr" => ["placeholder" => "Entrez votre âge"]]);
        yield "
                    </div>
                    ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), "age", [], "any", false, false, false, 90), 'errors');
        yield "
                     </div>

                    <div class=\"form-group\">
                    <label>Adresse de résidence</label>
                    <div class=\"input-with-icon\">
                        <i class=\"fas fa-home\"></i>
                        ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 97, $this->source); })()), "adresseResidence", [], "any", false, false, false, 97), 'widget', ["attr" => ["placeholder" => "Entrez votre adresse"]]);
        yield "
                    </div>
                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 99, $this->source); })()), "adresseResidence", [], "any", false, false, false, 99), 'errors');
        yield "
                     </div>

                    <button type=\"button\" id=\"openRegFaceIdModal\" class=\"btn btn-primary btn-block\">
                        <i class=\"fas fa-face-smile\"></i> Enregistrer mon visage (optionnel)
                    </button>
                    <input type=\"hidden\" name=\"face_descriptor\" id=\"face_descriptor\">

                    <button type=\"submit\" class=\"btn btn-primary btn-block\">S'inscrire</button>
                ";
        // line 108
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 108, $this->source); })()), 'form_end');
        yield "

                <div class=\"auth-footer\">
                    <p>Vous avez déjà un compte? <a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Se connecter</a></p>
                </div>
            </div>
        </div>

        <div class=\"auth-image\">
            <div class=\"overlay\"></div>
        </div>
    </div>

    ";
        // line 122
        yield "    <div id=\"regFaceIdModal\" class=\"faceid-modal-overlay\">
        <div class=\"faceid-modal-content\">
            <div class=\"faceid-modal-header\">
                <h3>Enregistrement Face ID</h3>
            </div>
            <div id=\"regFaceIdError\" class=\"faceid-error-message\" style=\"display:none;\"></div>
            <video id=\"regFaceIdVideo\" width=\"600\" height=\"500\" autoplay></video>
            <br>
            <div class=\"faceid-modal-buttons\">
                <button id=\"regCaptureFaceIdBtn\" class=\"btn btn-primary\">
                    <i class=\"fas fa-camera\"></i> Capturer et enregistrer
                </button>
                <button id=\"closeRegFaceIdModal\" class=\"btn btn-secondary\" type=\"button\">
                    <i class=\"fas fa-xmark\"></i> Annuler
                </button>
            </div>
            <canvas id=\"regFaceIdCanvas\" width=\"600\" height=\"500\" style=\"display:none;\"></canvas>
        </div>
    </div>

    <script defer src=\"https://cdn.jsdelivr.net/npm/face-api.js@0.22.2/dist/face-api.min.js\"></script>
    <script defer src=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/register-face.js"), "html", null, true);
        yield "\"></script>

    <script>
        // Password confirmation check
        document.querySelector('.auth-form').addEventListener('submit', function (e) {
            if (document.getElementById('password').value !== document.getElementById('confirm-password').value) {
                e.preventDefault();
                alert('Les mots de passe ne correspondent pas.');
            }
        });
    </script>
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
        return "register/register.html.twig";
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
        return array (  258 => 143,  235 => 122,  222 => 111,  216 => 108,  204 => 99,  199 => 97,  189 => 90,  184 => 88,  174 => 81,  169 => 79,  159 => 72,  154 => 70,  145 => 64,  140 => 62,  130 => 55,  125 => 53,  114 => 45,  109 => 43,  100 => 37,  95 => 35,  85 => 28,  75 => 21,  61 => 10,  57 => 9,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/register.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>LearnFlexPlus - Inscription</title>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/auth.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap\" rel=\"stylesheet\">
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
                    <h1>Inscription</h1>
                    <p>Créez votre compte LearnFlexPlus pour profiter de tous nos services.</p>
                </div>

                {{ form_start(registrationForm, {'attr': {'class': 'auth-form', 'novalidate': 'novalidate'}}) }}
                    
                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label>Prénom</label>
                            <div class=\"input-with-icon\">
                                <i class=\"fas fa-user\"></i>
                                {{ form_widget(registrationForm.prenom, {'attr': {'placeholder': 'Entrez votre prénom'}}) }}
                            </div>
                            {{ form_errors(registrationForm.prenom) }}
                        </div>
                        <div class=\"form-group\">
                            <label>Nom</label>
                            <div class=\"input-with-icon\">
                                <i class=\"fas fa-user\"></i>
                                {{ form_widget(registrationForm.nom, {'attr': {'placeholder': 'Entrez votre nom'}}) }}
                            </div>
                            {{ form_errors(registrationForm.nom) }}
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label>Email</label>
                        <div class=\"input-with-icon\">
                            <i class=\"fas fa-envelope\"></i>
                            {{ form_widget(registrationForm.email, {'attr': {'placeholder': 'Entrez votre email'}}) }}
                        </div>
                        {{ form_errors(registrationForm.email) }}
                    </div>

                    <div class=\"form-group\">
                        <label>Téléphone</label>
                        <div class=\"input-with-icon\">
                            <i class=\"fas fa-phone\"></i>
                            {{ form_widget(registrationForm.telephone, {'attr': {'placeholder': 'Entrez votre numéro de téléphone'}}) }}
                        </div>
                        {{ form_errors(registrationForm.telephone) }}
                    </div>

                    <div class=\"form-group\">
                        <label>Rôle <i class=\"fas fa-user-shield\"></i></label>
                        <div class=\"input-with-icon\" style=\"display: flex; align-items: center; gap: 5px;\">
                            {{ form_widget(registrationForm.role) }}
                        </div>
                        {{ form_errors(registrationForm.role) }}
                    </div>

                    <div class=\"form-group\">
                        <label>Mot de passe</label>
                        <div class=\"input-with-icon\">
                            <i class=\"fas fa-lock\"></i>
                            {{ form_widget(registrationForm.password, {'attr': {'placeholder': 'Créez un mot de passe'}}) }}
                        </div>
                        {{ form_errors(registrationForm.password) }}
                    </div>

                    <div class=\"form-group\">
                    <label>Âge</label>
                    <div class=\"input-with-icon\">
                        <i class=\"fas fa-calendar\"></i>
                        {{ form_widget(registrationForm.age, {'attr': {'placeholder': 'Entrez votre âge'}}) }}
                    </div>
                    {{ form_errors(registrationForm.age) }}
                     </div>

                    <div class=\"form-group\">
                    <label>Adresse de résidence</label>
                    <div class=\"input-with-icon\">
                        <i class=\"fas fa-home\"></i>
                        {{ form_widget(registrationForm.adresseResidence, {'attr': {'placeholder': 'Entrez votre adresse'}}) }}
                    </div>
                    {{ form_errors(registrationForm.adresseResidence) }}
                     </div>

                    <button type=\"button\" id=\"openRegFaceIdModal\" class=\"btn btn-primary btn-block\">
                        <i class=\"fas fa-face-smile\"></i> Enregistrer mon visage (optionnel)
                    </button>
                    <input type=\"hidden\" name=\"face_descriptor\" id=\"face_descriptor\">

                    <button type=\"submit\" class=\"btn btn-primary btn-block\">S'inscrire</button>
                {{ form_end(registrationForm) }}

                <div class=\"auth-footer\">
                    <p>Vous avez déjà un compte? <a href=\"{{ path('app_login') }}\">Se connecter</a></p>
                </div>
            </div>
        </div>

        <div class=\"auth-image\">
            <div class=\"overlay\"></div>
        </div>
    </div>

    {# Face ID Modal #}
    <div id=\"regFaceIdModal\" class=\"faceid-modal-overlay\">
        <div class=\"faceid-modal-content\">
            <div class=\"faceid-modal-header\">
                <h3>Enregistrement Face ID</h3>
            </div>
            <div id=\"regFaceIdError\" class=\"faceid-error-message\" style=\"display:none;\"></div>
            <video id=\"regFaceIdVideo\" width=\"600\" height=\"500\" autoplay></video>
            <br>
            <div class=\"faceid-modal-buttons\">
                <button id=\"regCaptureFaceIdBtn\" class=\"btn btn-primary\">
                    <i class=\"fas fa-camera\"></i> Capturer et enregistrer
                </button>
                <button id=\"closeRegFaceIdModal\" class=\"btn btn-secondary\" type=\"button\">
                    <i class=\"fas fa-xmark\"></i> Annuler
                </button>
            </div>
            <canvas id=\"regFaceIdCanvas\" width=\"600\" height=\"500\" style=\"display:none;\"></canvas>
        </div>
    </div>

    <script defer src=\"https://cdn.jsdelivr.net/npm/face-api.js@0.22.2/dist/face-api.min.js\"></script>
    <script defer src=\"{{ asset('js/register-face.js') }}\"></script>

    <script>
        // Password confirmation check
        document.querySelector('.auth-form').addEventListener('submit', function (e) {
            if (document.getElementById('password').value !== document.getElementById('confirm-password').value) {
                e.preventDefault();
                alert('Les mots de passe ne correspondent pas.');
            }
        });
    </script>
</body>

</html>
", "register/register.html.twig", "C:\\Users\\pc\\Desktop\\LearnFlex-\\templates\\register\\register.html.twig");
    }
}
