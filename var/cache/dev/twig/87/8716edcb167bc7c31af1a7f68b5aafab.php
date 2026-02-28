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

/* front/home.html.twig */
class __TwigTemplate_c62f603862a95d3a094fb96fc09635ca extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap\" rel=\"stylesheet\">

    ";
        // line 13
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 14
        yield "</head>
<body>
    ";
        // line 16
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 66
        yield "    <main>
        <div class=\"container\" style=\"margin-top: 20px;\">
            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "flashes", [], "any", false, false, false, 68));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 69
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 70
                yield "                    <div style=\"padding: 15px; border-radius: 8px; margin-bottom: 20px; 
                        ";
                // line 71
                if (($context["label"] == "success")) {
                    yield " background: #dcfce7; color: #166534; border: 1px solid #bbf7d0;
                        ";
                } elseif ((                // line 72
$context["label"] == "error")) {
                    yield " background: #fee2e2; color: #991b1b; border: 1px solid #fecaca;
                        ";
                } else {
                    // line 73
                    yield " background: #fef9c3; color: #854d0e; border: 1px solid #fef08a;
                        ";
                }
                // line 74
                yield "\">
                        ";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "        </div>
        ";
        // line 80
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 81
        yield "    </main>
    ";
        // line 82
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 147
        yield "
    <!-- JS -->
    <script src=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>
    ";
        // line 150
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 151
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "LearnFlexPlus";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 17
        yield "    <header class=\"landing-header\">
        <div class=\"container\">
            <div class=\"header-left\">
                <div class=\"logo\">
                    ";
        // line 22
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22) && (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "roles", [], "any", false, false, false, 22)) || CoreExtension::inFilter("ROLE_ENSEIGNANT", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "roles", [], "any", false, false, false, 22))))) {
            // line 23
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            yield "\">
                            <img src=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
            yield "\" alt=\"LearnFlexPlus Logo\" class=\"main-logo\">
                            <span class=\"logo-text\">LearnFlexPlus</span>
                        </a>
                    ";
        } else {
            // line 28
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
            yield "\" alt=\"LearnFlexPlus Logo\" class=\"main-logo\">
                        <span class=\"logo-text\">LearnFlexPlus</span>
                    ";
        }
        // line 31
        yield "                </div>
            </div>

            <nav class=\"main-nav\">
                <ul>
                    <li class=\"active\"><a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\">Accueil</a></li>
                    <li><a href=\"#\">Contenus pédagogiques</a></li>
                    <li><a href=\"#\">Evaluation</a></li>
                    <li><a href=\"#\">Questionnaire</a></li>
                    <li><a href=\"#\">Orientation</a></li>
                    <li><a href=\"#\">Forum</a></li>
                </ul>
            </nav>

            <div class=\"header-right\">
                ";
        // line 47
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47) && (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "roles", [], "any", false, false, false, 47)) || CoreExtension::inFilter("ROLE_ENSEIGNANT", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "roles", [], "any", false, false, false, 47))))) {
            // line 48
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            yield "\" class=\"btn btn-outline dashboard-btn\">Dashboard</a>
                ";
        }
        // line 50
        yield "
                ";
        // line 52
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "                    <form action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" method=\"post\" style=\"display:inline;\">
                        <button type=\"submit\" class=\"btn btn-primary logout-btn\">Déconnexion</button>
                    </form>
                ";
        } else {
            // line 57
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-primary\">Connexion</a>
                ";
        }
        // line 59
        yield "                <button class=\"mobile-menu-btn\">
                    <i class=\"fas fa-bars\"></i>
                </button>
            </div>
        </div>
    </header>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 80
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 83
        yield "    <footer class=\"main-footer\">
      <div class=\"container\">
        <div class=\"footer-top\">
          <div class=\"footer-logo\">
            <img src=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
        yield "\" alt=\"LearnFlexPlus Logo\" class=\"footer-logo-img\">
            <span>LearnFlexPlus</span>
          </div>
          <div class=\"footer-slogan\">
            <p>Apprends malin, ton bac en main</p>
          </div>
          <div class=\"footer-social\">
            <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
            <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
            <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
          </div>
        </div>
    
        <div class=\"footer-middle\">
          <div class=\"footer-column\">
            <h4>Services</h4>
            <ul>
              <li><a href=\"#\">Cours</a></li>
              <li><a href=\"#\">Quiz & Evaluations</a></li>
              <li><a href=\"#\">Forum</a></li>
            </ul>
          </div>
          <div class=\"footer-column\">
            <h4>À propos</h4>
            <ul>
              <li><a href=\"#\">Notre mission</a></li>
              <li><a href=\"#\">Orientation</a></li>
            </ul>
          </div>
          <div class=\"footer-column\">
            <h4>Légal</h4>
            <ul>
              <li><a href=\"#\">Conditions d'utilisation</a></li>
              <li><a href=\"#\">Politique de confidentialité</a></li>
              <li><a href=\"#\">Cookies</a></li>
            </ul>
          </div>
          <div class=\"footer-column\">
            <h4>Contact</h4>
            <ul>
              <li><i class=\"fas fa-map-marker-alt\"></i> 123 Avenue Habib Bourguiba, Tunis</li>
              <li><i class=\"fas fa-phone\"></i> +216 71 123 456</li>
              <li><i class=\"fas fa-envelope\"></i> contact@learnflexplus.com</li>
            </ul>
          </div>
        </div>
    
        <div class=\"footer-bottom\">
          <p>&copy; 2026 LearnFlexPlus. Tous droits réservés.</p>
        </div>
      </div>
    </footer>
    
    <script>
      document.querySelector('.mobile-menu-btn')?.addEventListener('click', function() {
        document.querySelector('.main-nav').classList.toggle('active');
      });
    </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 150
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/home.html.twig";
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
        return array (  426 => 150,  355 => 87,  349 => 83,  336 => 82,  314 => 80,  297 => 59,  291 => 57,  283 => 53,  280 => 52,  277 => 50,  271 => 48,  268 => 47,  255 => 36,  248 => 31,  241 => 28,  234 => 24,  229 => 23,  226 => 22,  220 => 17,  207 => 16,  185 => 13,  162 => 6,  149 => 151,  147 => 150,  143 => 149,  139 => 147,  137 => 82,  134 => 81,  132 => 80,  129 => 79,  123 => 78,  114 => 75,  111 => 74,  107 => 73,  102 => 72,  98 => 71,  95 => 70,  90 => 69,  86 => 68,  82 => 66,  80 => 16,  76 => 14,  74 => 13,  67 => 9,  61 => 6,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}LearnFlexPlus{% endblock %}</title>

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap\" rel=\"stylesheet\">

    {% block stylesheets %}{% endblock %}
</head>
<body>
    {% block header %}
    <header class=\"landing-header\">
        <div class=\"container\">
            <div class=\"header-left\">
                <div class=\"logo\">
                    {# Logo clickable for Admin and Enseignant only #}
                    {% if app.user and ('ROLE_ADMIN' in app.user.roles or 'ROLE_ENSEIGNANT' in app.user.roles) %}
                        <a href=\"{{ path('dashboard') }}\">
                            <img src=\"{{ asset('assets/images/logo1.png') }}\" alt=\"LearnFlexPlus Logo\" class=\"main-logo\">
                            <span class=\"logo-text\">LearnFlexPlus</span>
                        </a>
                    {% else %}
                        <img src=\"{{ asset('assets/images/logo1.png') }}\" alt=\"LearnFlexPlus Logo\" class=\"main-logo\">
                        <span class=\"logo-text\">LearnFlexPlus</span>
                    {% endif %}
                </div>
            </div>

            <nav class=\"main-nav\">
                <ul>
                    <li class=\"active\"><a href=\"{{ path('app_front') }}\">Accueil</a></li>
                    <li><a href=\"#\">Contenus pédagogiques</a></li>
                    <li><a href=\"#\">Evaluation</a></li>
                    <li><a href=\"#\">Questionnaire</a></li>
                    <li><a href=\"#\">Orientation</a></li>
                    <li><a href=\"#\">Forum</a></li>
                </ul>
            </nav>

            <div class=\"header-right\">
                {# Dashboard button now optional, you can even remove it if logo is enough #}
                {% if app.user and ('ROLE_ADMIN' in app.user.roles or 'ROLE_ENSEIGNANT' in app.user.roles) %}
                    <a href=\"{{ path('dashboard') }}\" class=\"btn btn-outline dashboard-btn\">Dashboard</a>
                {% endif %}

                {# Logout for logged-in users #}
                {% if app.user %}
                    <form action=\"{{ path('app_logout') }}\" method=\"post\" style=\"display:inline;\">
                        <button type=\"submit\" class=\"btn btn-primary logout-btn\">Déconnexion</button>
                    </form>
                {% else %}
                    <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary\">Connexion</a>
                {% endif %}
                <button class=\"mobile-menu-btn\">
                    <i class=\"fas fa-bars\"></i>
                </button>
            </div>
        </div>
    </header>
    {% endblock %}
    <main>
        <div class=\"container\" style=\"margin-top: 20px;\">
            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div style=\"padding: 15px; border-radius: 8px; margin-bottom: 20px; 
                        {% if label == 'success' %} background: #dcfce7; color: #166534; border: 1px solid #bbf7d0;
                        {% elseif label == 'error' %} background: #fee2e2; color: #991b1b; border: 1px solid #fecaca;
                        {% else %} background: #fef9c3; color: #854d0e; border: 1px solid #fef08a;
                        {% endif %}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        </div>
        {% block body %}{% endblock %}
    </main>
    {% block footer %}
    <footer class=\"main-footer\">
      <div class=\"container\">
        <div class=\"footer-top\">
          <div class=\"footer-logo\">
            <img src=\"{{ asset('assets/images/logo1.png') }}\" alt=\"LearnFlexPlus Logo\" class=\"footer-logo-img\">
            <span>LearnFlexPlus</span>
          </div>
          <div class=\"footer-slogan\">
            <p>Apprends malin, ton bac en main</p>
          </div>
          <div class=\"footer-social\">
            <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
            <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
            <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
          </div>
        </div>
    
        <div class=\"footer-middle\">
          <div class=\"footer-column\">
            <h4>Services</h4>
            <ul>
              <li><a href=\"#\">Cours</a></li>
              <li><a href=\"#\">Quiz & Evaluations</a></li>
              <li><a href=\"#\">Forum</a></li>
            </ul>
          </div>
          <div class=\"footer-column\">
            <h4>À propos</h4>
            <ul>
              <li><a href=\"#\">Notre mission</a></li>
              <li><a href=\"#\">Orientation</a></li>
            </ul>
          </div>
          <div class=\"footer-column\">
            <h4>Légal</h4>
            <ul>
              <li><a href=\"#\">Conditions d'utilisation</a></li>
              <li><a href=\"#\">Politique de confidentialité</a></li>
              <li><a href=\"#\">Cookies</a></li>
            </ul>
          </div>
          <div class=\"footer-column\">
            <h4>Contact</h4>
            <ul>
              <li><i class=\"fas fa-map-marker-alt\"></i> 123 Avenue Habib Bourguiba, Tunis</li>
              <li><i class=\"fas fa-phone\"></i> +216 71 123 456</li>
              <li><i class=\"fas fa-envelope\"></i> contact@learnflexplus.com</li>
            </ul>
          </div>
        </div>
    
        <div class=\"footer-bottom\">
          <p>&copy; 2026 LearnFlexPlus. Tous droits réservés.</p>
        </div>
      </div>
    </footer>
    
    <script>
      document.querySelector('.mobile-menu-btn')?.addEventListener('click', function() {
        document.querySelector('.main-nav').classList.toggle('active');
      });
    </script>
    {% endblock %}

    <!-- JS -->
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>
    {% block javascripts %}{% endblock %}
</body>
</html>
", "front/home.html.twig", "C:\\Users\\hassa\\Downloads\\LearnFlex-\\LearnFlex-\\templates\\front\\home.html.twig");
    }
}
