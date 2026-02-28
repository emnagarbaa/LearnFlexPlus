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

/* etudiant/matiere/_catalog_list.html.twig */
class __TwigTemplate_cf2353deb8a514da1631e2ee2c75e056 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/matiere/_catalog_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/matiere/_catalog_list.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 1, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 2
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_cours_list", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "id", [], "any", false, false, false, 2)]), "html", null, true);
            yield "\" class=\"catalog-card\">
        <div class=\"catalog-img-wrapper\">
            ";
            // line 4
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "image", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 5
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "image", [], "any", false, false, false, 5))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "nomMatiere", [], "any", false, false, false, 5), "html", null, true);
                yield "\">
            ";
            } else {
                // line 7
                yield "                <div style=\"height: 100%; background: #f1f5f9; display: flex; align-items: center; justify-content: center;\">
                    <i class=\"fas fa-book-atlas fa-4x\" style=\"color: #cbd5e1;\"></i>
                </div>
            ";
            }
            // line 11
            yield "            <span class=\"category-badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "section", [], "any", false, false, false, 11), "html", null, true);
            yield "</span>
        </div>
        <div class=\"catalog-body\">
            <h3>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "nomMatiere", [], "any", false, false, false, 14), "html", null, true);
            yield "</h3>
            <p>";
            // line 15
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "description", [], "any", false, false, false, 15)) > 120)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "description", [], "any", false, false, false, 15), 0, 120) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "description", [], "any", false, false, false, 15), "html", null, true)));
            yield "</p>
            
        </div>
        <div class=\"catalog-footer\">
            <div class=\"etudiant-info\">
                <i class=\"fas fa-layer-group\"></i> ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "cours", [], "any", false, false, false, 20)), "html", null, true);
            yield " cours
            </div>
            <div class=\"btn-explore\">
                Apprendre <i class=\"fas fa-chevron-right\"></i>
            </div>
        </div>
    </a>
";
            $context['_iterated'] = true;
        }
        // line 27
        if (!$context['_iterated']) {
            // line 28
            yield "    <div style=\"grid-column: 1 / -1; text-align: center; padding: 40px; color: #64748b;\">
        <i class=\"fas fa-search fa-3x\" style=\"margin-bottom: 15px; opacity: 0.5;\"></i>
        <p>Aucune matière ne correspond à votre recherche.</p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['matiere'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "etudiant/matiere/_catalog_list.html.twig";
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
        return array (  108 => 28,  106 => 27,  94 => 20,  86 => 15,  82 => 14,  75 => 11,  69 => 7,  61 => 5,  59 => 4,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for matiere in matieres %}
    <a href=\"{{ path('app_etudiant_cours_list', {'id': matiere.id}) }}\" class=\"catalog-card\">
        <div class=\"catalog-img-wrapper\">
            {% if matiere.image %}
                <img src=\"{{ asset('uploads/images/' ~ matiere.image) }}\" alt=\"{{ matiere.nomMatiere }}\">
            {% else %}
                <div style=\"height: 100%; background: #f1f5f9; display: flex; align-items: center; justify-content: center;\">
                    <i class=\"fas fa-book-atlas fa-4x\" style=\"color: #cbd5e1;\"></i>
                </div>
            {% endif %}
            <span class=\"category-badge\">{{ matiere.section }}</span>
        </div>
        <div class=\"catalog-body\">
            <h3>{{ matiere.nomMatiere }}</h3>
            <p>{{ matiere.description|length > 120 ? matiere.description|slice(0, 120) ~ '...' : matiere.description }}</p>
            
        </div>
        <div class=\"catalog-footer\">
            <div class=\"etudiant-info\">
                <i class=\"fas fa-layer-group\"></i> {{ matiere.cours|length }} cours
            </div>
            <div class=\"btn-explore\">
                Apprendre <i class=\"fas fa-chevron-right\"></i>
            </div>
        </div>
    </a>
{% else %}
    <div style=\"grid-column: 1 / -1; text-align: center; padding: 40px; color: #64748b;\">
        <i class=\"fas fa-search fa-3x\" style=\"margin-bottom: 15px; opacity: 0.5;\"></i>
        <p>Aucune matière ne correspond à votre recherche.</p>
    </div>
{% endfor %}
", "etudiant/matiere/_catalog_list.html.twig", "C:\\Users\\pc\\Desktop\\LearnFlex-\\templates\\etudiant\\matiere\\_catalog_list.html.twig");
    }
}
