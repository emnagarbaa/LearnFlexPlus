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

/* front/index.html.twig */
class __TwigTemplate_5c2d215cfc1d9569bf5b5c86f995fc1e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

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

        yield "Accueil - Learnflexplus";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<main>
    <!-- Hero Section -->
    <section class=\"hero-section\">
      <div class=\"container\">
        <div class=\"hero-content\">
<h1>Apprends malin ,Ton bac en main.</h1>
        <p>
  LearnFlexPlus aide les élèves du bac avec des cours interactifs, des quiz et un accompagnement intelligent.
</p>

          <div class=\"hero-buttons\">
           <a href=\"#\" class=\"btn btn-primary\">
  Commencer à apprendre
  <i class=\"fas fa-arrow-right\"></i>
</a>
<a href=\"#\" class=\"btn btn-outline\">
  Explorer les cours
</a>
          </div>
        </div>
        <div class=\"hero-image\">
<img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/learnflexplus.png"), "html", null, true);
        yield "\" alt=\"Learnflexplus Sustainable Mobility\">
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section class=\"features-section\">
      <div class=\"container\">
        <div class=\"feature-cards\">
          <div class=\"feature-card\">
            <div class=\"feature-icon\">
             <i class=\"fas fa-book-open\"></i>
  </div>
  <h3>Cours interactifs</h3>
  <p>Des cours clairs et structurés adaptés au programme du bac.</p>
</div>
          <div class=\"feature-card\">
  <div class=\"feature-icon\">
    <i class=\"fas fa-question-circle\"></i>
  </div>
  <h3>Quiz & Exercices</h3>
  <p>Testez vos connaissances avec des quiz corrigés automatiquement.</p>
</div>
          <div class=\"feature-card\">
  <div class=\"feature-icon\">
    <i class=\"fas fa-compass\"></i>
  </div>
  <h3>Orientation intelligente</h3>
  <p>Découvrez les filières qui correspondent à votre profil et vos résultats.</p>
</div>
        </div>
      </div>
    </section>

    <!-- Benefits Section -->
    <section class=\"benefits-section\">
      <div class=\"container\">
        <div class=\"section-header\">
          <span class=\"badge\">Nos avantages</span>
          <h2>Pourquoi choisir LearnFlexPlus ?</h2>
      <p>Des outils et contenus conçus pour réussir ton bac facilement et efficacement.</p>
        </div>
        <div class=\"benefits-grid\">
          <div class=\"benefit-item\">
            <div class=\"benefit-icon\">
          <i class=\"fas fa-clock\"></i>
            </div>
            <div class=\"benefit-content\">
          <h3>Gain de temps</h3>
          <p>Apprends à ton rythme avec des cours et quiz interactifs, sans perte de temps.</p>
        </div>
      </div>
      <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-book\"></i>
        </div>
        <div class=\"benefit-content\">
          <h3>Cours complets</h3>
          <p>Accède à tous les cours du programme du bac, expliqués clairement et avec exemples.</p>
        </div>
      </div>
          <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-tasks\"></i>
        </div>
        <div class=\"benefit-content\">
          <h3>Quiz et évaluations</h3>
          <p>Testez vos connaissances avec des quiz interactifs et des évaluations régulières.</p>
        </div>
      </div>
      <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-user-graduate\"></i>
        </div>
            <div class=\"benefit-content\">
              <h3>Fiabilité</h3>
              <p>Des services ponctuels et fiables, avec des notifications en cas de retard ou d'imprévu.</p>
            </div>
          </div>
          
          <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-chart-line\"></i>
        </div>
        <div class=\"benefit-content\">
          <h3>Suivi de progrès</h3>
          <p>Visualisez vos progrès et identifiez les points à améliorer grâce à nos outils.</p>
        </div>
      </div>
      <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-comments\"></i>
        </div>
        <div class=\"benefit-content\">
          <h3>Forum d’entraide</h3>
          <p>Pose tes questions et échange avec d’autres élèves et enseignants.</p>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Services Section -->
<section class=\"services-section\">
  <div class=\"container\">
    <div class=\"section-header\">
      <h2>Nos Services</h2>
      <p>Tout ce dont tu as besoin pour réussir ton bac en un seul endroit.</p>
    </div>

    <!-- Cours interactifs -->
    <div class=\"service-item\">
      <div class=\"service-content\">
        <span class=\"badge\">Cours</span>
        <h3>Apprends facilement</h3>
        <p>Des cours interactifs pour tous les sujets du bac, avec exemples et exercices pratiques.</p>
        <a href=\"#\" class=\"btn btn-primary\">
          Voir les cours
          <i class=\"fas fa-arrow-right\"></i>
        </a>
      </div>
      <div class=\"service-image\">
        <img src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cours-service.jpg"), "html", null, true);
        yield "\" alt=\"Cours LearnFlexPlus\">
      </div>
    </div>

    <!-- Quiz et évaluations -->
    <div class=\"service-item reverse\">
      <div class=\"service-image\">
        <img src=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/quiz-service.jpg"), "html", null, true);
        yield "\" alt=\"Quiz LearnFlexPlus\">
      </div>
      <div class=\"service-content\">
        <span class=\"badge\">Quiz & Evaluations</span>
        <h3>Testez vos connaissances</h3>
        <p>Évaluez vos acquis avec des quiz interactifs et des examens blancs pour chaque matière.</p>
        <a href=\"#\" class=\"btn btn-primary\">
          Passer un quiz
          <i class=\"fas fa-arrow-right\"></i>
        </a>
      </div>
    </div>

    <!-- Forum d'entraide -->
    <div class=\"service-item\">
      <div class=\"service-content\">
        <span class=\"badge\">Forum</span>
        <h3>Échangez et progressez</h3>
        <p>Discutez avec d’autres élèves et enseignants pour poser vos questions et partager vos astuces.</p>
        <a href=\"#\" class=\"btn btn-primary\">
          Accéder au forum
          <i class=\"fas fa-arrow-right\"></i>
        </a>
      </div>
      <div class=\"service-image\">
        <img src=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/forum-service.jpg"), "html", null, true);
        yield "\" alt=\"Forum LearnFlexPlus\">
      </div>
    </div>
  </div>
</section>
  </main>
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
        return "front/index.html.twig";
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
        return array (  286 => 183,  258 => 158,  248 => 151,  123 => 29,  100 => 8,  87 => 7,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/home.html.twig' %}

{% block title %}Accueil - Learnflexplus{% endblock %}



{% block body %}
<main>
    <!-- Hero Section -->
    <section class=\"hero-section\">
      <div class=\"container\">
        <div class=\"hero-content\">
<h1>Apprends malin ,Ton bac en main.</h1>
        <p>
  LearnFlexPlus aide les élèves du bac avec des cours interactifs, des quiz et un accompagnement intelligent.
</p>

          <div class=\"hero-buttons\">
           <a href=\"#\" class=\"btn btn-primary\">
  Commencer à apprendre
  <i class=\"fas fa-arrow-right\"></i>
</a>
<a href=\"#\" class=\"btn btn-outline\">
  Explorer les cours
</a>
          </div>
        </div>
        <div class=\"hero-image\">
<img src=\"{{ asset('assets/images/learnflexplus.png') }}\" alt=\"Learnflexplus Sustainable Mobility\">
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section class=\"features-section\">
      <div class=\"container\">
        <div class=\"feature-cards\">
          <div class=\"feature-card\">
            <div class=\"feature-icon\">
             <i class=\"fas fa-book-open\"></i>
  </div>
  <h3>Cours interactifs</h3>
  <p>Des cours clairs et structurés adaptés au programme du bac.</p>
</div>
          <div class=\"feature-card\">
  <div class=\"feature-icon\">
    <i class=\"fas fa-question-circle\"></i>
  </div>
  <h3>Quiz & Exercices</h3>
  <p>Testez vos connaissances avec des quiz corrigés automatiquement.</p>
</div>
          <div class=\"feature-card\">
  <div class=\"feature-icon\">
    <i class=\"fas fa-compass\"></i>
  </div>
  <h3>Orientation intelligente</h3>
  <p>Découvrez les filières qui correspondent à votre profil et vos résultats.</p>
</div>
        </div>
      </div>
    </section>

    <!-- Benefits Section -->
    <section class=\"benefits-section\">
      <div class=\"container\">
        <div class=\"section-header\">
          <span class=\"badge\">Nos avantages</span>
          <h2>Pourquoi choisir LearnFlexPlus ?</h2>
      <p>Des outils et contenus conçus pour réussir ton bac facilement et efficacement.</p>
        </div>
        <div class=\"benefits-grid\">
          <div class=\"benefit-item\">
            <div class=\"benefit-icon\">
          <i class=\"fas fa-clock\"></i>
            </div>
            <div class=\"benefit-content\">
          <h3>Gain de temps</h3>
          <p>Apprends à ton rythme avec des cours et quiz interactifs, sans perte de temps.</p>
        </div>
      </div>
      <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-book\"></i>
        </div>
        <div class=\"benefit-content\">
          <h3>Cours complets</h3>
          <p>Accède à tous les cours du programme du bac, expliqués clairement et avec exemples.</p>
        </div>
      </div>
          <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-tasks\"></i>
        </div>
        <div class=\"benefit-content\">
          <h3>Quiz et évaluations</h3>
          <p>Testez vos connaissances avec des quiz interactifs et des évaluations régulières.</p>
        </div>
      </div>
      <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-user-graduate\"></i>
        </div>
            <div class=\"benefit-content\">
              <h3>Fiabilité</h3>
              <p>Des services ponctuels et fiables, avec des notifications en cas de retard ou d'imprévu.</p>
            </div>
          </div>
          
          <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-chart-line\"></i>
        </div>
        <div class=\"benefit-content\">
          <h3>Suivi de progrès</h3>
          <p>Visualisez vos progrès et identifiez les points à améliorer grâce à nos outils.</p>
        </div>
      </div>
      <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-comments\"></i>
        </div>
        <div class=\"benefit-content\">
          <h3>Forum d’entraide</h3>
          <p>Pose tes questions et échange avec d’autres élèves et enseignants.</p>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Services Section -->
<section class=\"services-section\">
  <div class=\"container\">
    <div class=\"section-header\">
      <h2>Nos Services</h2>
      <p>Tout ce dont tu as besoin pour réussir ton bac en un seul endroit.</p>
    </div>

    <!-- Cours interactifs -->
    <div class=\"service-item\">
      <div class=\"service-content\">
        <span class=\"badge\">Cours</span>
        <h3>Apprends facilement</h3>
        <p>Des cours interactifs pour tous les sujets du bac, avec exemples et exercices pratiques.</p>
        <a href=\"#\" class=\"btn btn-primary\">
          Voir les cours
          <i class=\"fas fa-arrow-right\"></i>
        </a>
      </div>
      <div class=\"service-image\">
        <img src=\"{{ asset('assets/images/cours-service.jpg') }}\" alt=\"Cours LearnFlexPlus\">
      </div>
    </div>

    <!-- Quiz et évaluations -->
    <div class=\"service-item reverse\">
      <div class=\"service-image\">
        <img src=\"{{ asset('assets/images/quiz-service.jpg') }}\" alt=\"Quiz LearnFlexPlus\">
      </div>
      <div class=\"service-content\">
        <span class=\"badge\">Quiz & Evaluations</span>
        <h3>Testez vos connaissances</h3>
        <p>Évaluez vos acquis avec des quiz interactifs et des examens blancs pour chaque matière.</p>
        <a href=\"#\" class=\"btn btn-primary\">
          Passer un quiz
          <i class=\"fas fa-arrow-right\"></i>
        </a>
      </div>
    </div>

    <!-- Forum d'entraide -->
    <div class=\"service-item\">
      <div class=\"service-content\">
        <span class=\"badge\">Forum</span>
        <h3>Échangez et progressez</h3>
        <p>Discutez avec d’autres élèves et enseignants pour poser vos questions et partager vos astuces.</p>
        <a href=\"#\" class=\"btn btn-primary\">
          Accéder au forum
          <i class=\"fas fa-arrow-right\"></i>
        </a>
      </div>
      <div class=\"service-image\">
        <img src=\"{{ asset('assets/images/forum-service.jpg') }}\" alt=\"Forum LearnFlexPlus\">
      </div>
    </div>
  </div>
</section>
  </main>
  {% endblock %}


", "front/index.html.twig", "C:\\Users\\hassa\\Downloads\\LearnFlex-\\LearnFlex-\\templates\\front\\index.html.twig");
    }
}
