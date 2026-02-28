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

/* login/index.html.twig */
class __TwigTemplate_3dac2e807a76120076a7c6525226e681 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>LearnFlexPlus - Connexion</title>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/auth.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <style>
        .cooldown-timer {
            background: #ff4444;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 15px;
            animation: pulse 1s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.02); }
            100% { transform: scale(1); }
        }

        .cooldown-progress {
            width: 100%;
            height: 4px;
            background: rgba(255, 255, 255, 0.3);
            margin-top: 5px;
            border-radius: 2px;
            overflow: hidden;
        }

        .cooldown-bar {
            height: 100%;
            background: white;
            width: 100%;
            transition: width 1s linear;
        }
    </style>
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap\" rel=\"stylesheet\">
</head>

<body>
    <div class=\"auth-page\">
        <div class=\"auth-container\">
            <div class=\"auth-card\">
                <div class=\"auth-header\">
                    <div class=\"logo-container\">
                        <img src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
        yield "\" alt=\"LearnFlexPlus Logo\" class=\"auth-logo\">
                        <span class=\"logo-text\">LearnFlexPlus</span>
                    </div>
                    <h1>Connexion</h1>
                    <p>Bienvenue sur LearnFlexPlus. Veuillez vous connecter pour continuer.</p>
                </div>

                <form class=\"auth-form\" method=\"post\">
                    ";
        // line 62
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "                        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 63, $this->source); })()));
            yield "</div>
                    ";
        }
        // line 65
        yield "
                    <div class=\"form-group\">
                        <label for=\"email\">Email</label>
                        <div class=\"input-with-icon\">
                            <i class=\"fas fa-envelope\"></i>
                            <input type=\"email\" id=\"email\" name=\"_username\" placeholder=\"Entrez votre email\" required
                                value=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 71, $this->source); })()));
        yield "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\">Mot de passe</label>
                        <div class=\"input-with-icon\">
                            <i class=\"fas fa-lock\"></i>
                            <input type=\"password\" id=\"password\" name=\"_password\" required placeholder=\"Entrez votre mot de passe\">
                        </div>
                        <div class=\"text-right\" style=\"margin-top: 5px;\">
                            <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reset_password");
        yield "\" class=\"forgot-password\"
                               style=\"color: #86b391; text-decoration: none; font-size: 0.9em;\">Mot de passe oublié ?</a>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"h-captcha\" data-sitekey=\"3bde0e2e-31d0-4140-bf90-10b6a89c299c\"></div>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary btn-block\">
                        <i class=\"fas fa-right-to-bracket\"></i> Se connecter
                    </button>

                    <div class=\"social-login\">
                        <p>Ou connectez-vous avec</p>
                        <div class=\"social-buttons\">
                            <button type=\"button\" id=\"faceIdBtn\" class=\"social-btn faceid\">
                                <i class=\"fas fa-face-smile\"></i>
                            </button>
                            <a href=\"#\" class=\"social-btn google\">
                                <i class=\"fab fa-google\"></i>
                            </a>
                        </div>
                    </div>
                </form>

                <div class=\"auth-footer\">
                    <p>Vous n'avez pas de compte? <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">S'inscrire</a></p>
                </div>
            </div>
        </div>

        <div class=\"auth-image\">
            <div class=\"overlay\"></div>
        </div>
    </div>

    <!-- Face ID Modal -->
    <div id=\"faceIdModal\" class=\"faceid-modal-overlay\">
        <div class=\"faceid-modal-content\">
            <div class=\"faceid-modal-header\">
                <h3>Connexion Face ID</h3>
            </div>
            <div id=\"faceIdError\" class=\"faceid-error-message\" style=\"display:none;\"></div>
            <video id=\"loginFaceVideo\" width=\"600\" height=\"500\" autoplay></video>
            <br>
            <div class=\"faceid-modal-buttons\">
                <button id=\"loginCaptureFaceBtn\" class=\"btn btn-primary\">
                    <i class=\"fas fa-camera\"></i> Capturer et se connecter
                </button>
                <button id=\"closeFaceModal\" class=\"btn btn-secondary\" type=\"button\">
                    <i class=\"fas fa-xmark\"></i> Annuler
                </button>
            </div>
            <canvas id=\"loginFaceCanvas\" width=\"600\" height=\"500\" style=\"display:none;\"></canvas>
            <input type=\"hidden\" name=\"face_image\" id=\"face_image\">
        </div>
    </div>

    <script defer src=\"https://cdn.jsdelivr.net/npm/face-api.js@0.22.2/dist/face-api.min.js\"></script>
    <script defer src=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/face-login.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://js.hcaptcha.com/1/api.js\" async defer></script>
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
        return "login/index.html.twig";
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
        return array (  215 => 142,  179 => 109,  149 => 82,  135 => 71,  127 => 65,  121 => 63,  119 => 62,  108 => 54,  61 => 10,  57 => 9,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/login/index.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>LearnFlexPlus - Connexion</title>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/auth.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <style>
        .cooldown-timer {
            background: #ff4444;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 15px;
            animation: pulse 1s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.02); }
            100% { transform: scale(1); }
        }

        .cooldown-progress {
            width: 100%;
            height: 4px;
            background: rgba(255, 255, 255, 0.3);
            margin-top: 5px;
            border-radius: 2px;
            overflow: hidden;
        }

        .cooldown-bar {
            height: 100%;
            background: white;
            width: 100%;
            transition: width 1s linear;
        }
    </style>
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
                    <h1>Connexion</h1>
                    <p>Bienvenue sur LearnFlexPlus. Veuillez vous connecter pour continuer.</p>
                </div>

                <form class=\"auth-form\" method=\"post\">
                    {% if error %}
                        <div class=\"alert alert-danger\">{{ error|e }}</div>
                    {% endif %}

                    <div class=\"form-group\">
                        <label for=\"email\">Email</label>
                        <div class=\"input-with-icon\">
                            <i class=\"fas fa-envelope\"></i>
                            <input type=\"email\" id=\"email\" name=\"_username\" placeholder=\"Entrez votre email\" required
                                value=\"{{ last_username|e }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\">Mot de passe</label>
                        <div class=\"input-with-icon\">
                            <i class=\"fas fa-lock\"></i>
                            <input type=\"password\" id=\"password\" name=\"_password\" required placeholder=\"Entrez votre mot de passe\">
                        </div>
                        <div class=\"text-right\" style=\"margin-top: 5px;\">
                            <a href=\"{{ path('app_reset_password') }}\" class=\"forgot-password\"
                               style=\"color: #86b391; text-decoration: none; font-size: 0.9em;\">Mot de passe oublié ?</a>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"h-captcha\" data-sitekey=\"3bde0e2e-31d0-4140-bf90-10b6a89c299c\"></div>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary btn-block\">
                        <i class=\"fas fa-right-to-bracket\"></i> Se connecter
                    </button>

                    <div class=\"social-login\">
                        <p>Ou connectez-vous avec</p>
                        <div class=\"social-buttons\">
                            <button type=\"button\" id=\"faceIdBtn\" class=\"social-btn faceid\">
                                <i class=\"fas fa-face-smile\"></i>
                            </button>
                            <a href=\"#\" class=\"social-btn google\">
                                <i class=\"fab fa-google\"></i>
                            </a>
                        </div>
                    </div>
                </form>

                <div class=\"auth-footer\">
                    <p>Vous n'avez pas de compte? <a href=\"{{ path('app_register') }}\">S'inscrire</a></p>
                </div>
            </div>
        </div>

        <div class=\"auth-image\">
            <div class=\"overlay\"></div>
        </div>
    </div>

    <!-- Face ID Modal -->
    <div id=\"faceIdModal\" class=\"faceid-modal-overlay\">
        <div class=\"faceid-modal-content\">
            <div class=\"faceid-modal-header\">
                <h3>Connexion Face ID</h3>
            </div>
            <div id=\"faceIdError\" class=\"faceid-error-message\" style=\"display:none;\"></div>
            <video id=\"loginFaceVideo\" width=\"600\" height=\"500\" autoplay></video>
            <br>
            <div class=\"faceid-modal-buttons\">
                <button id=\"loginCaptureFaceBtn\" class=\"btn btn-primary\">
                    <i class=\"fas fa-camera\"></i> Capturer et se connecter
                </button>
                <button id=\"closeFaceModal\" class=\"btn btn-secondary\" type=\"button\">
                    <i class=\"fas fa-xmark\"></i> Annuler
                </button>
            </div>
            <canvas id=\"loginFaceCanvas\" width=\"600\" height=\"500\" style=\"display:none;\"></canvas>
            <input type=\"hidden\" name=\"face_image\" id=\"face_image\">
        </div>
    </div>

    <script defer src=\"https://cdn.jsdelivr.net/npm/face-api.js@0.22.2/dist/face-api.min.js\"></script>
    <script defer src=\"{{ asset('js/face-login.js') }}\"></script>
    <script src=\"https://js.hcaptcha.com/1/api.js\" async defer></script>
</body>

</html>
", "login/index.html.twig", "C:\\Users\\pc\\Desktop\\LearnFlex-\\templates\\login\\index.html.twig");
    }
}
