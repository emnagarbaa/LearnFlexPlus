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

/* back/matiere/_form.html.twig */
class __TwigTemplate_7715f87a39b46714e33bc2b5ebbcdea5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/matiere/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/matiere/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 3
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3) != "_token")) {
                // line 4
                yield "            <div class=\"form-group\">
                ";
                // line 5
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label');
                yield "
                ";
                // line 6
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6) == "image")) {
                    // line 7
                    yield "                    <div class=\"file-upload-wrapper\">
                        <label for=\"";
                    // line 8
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8), "html", null, true);
                    yield "\" class=\"file-upload-label\">
                            <i class=\"fas fa-cloud-upload-alt\"></i>
                            <span>Cliquez pour choisir une image</span>
                        </label>
                        ";
                    // line 12
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "file-input-hidden"]]);
                    yield "
                        <div id=\"file-name-preview\" class=\"file-name-preview\">Aucun fichier sélectionné</div>
                    </div>
                ";
                } else {
                    // line 16
                    yield "                    ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
                    yield "
                ";
                }
                // line 18
                yield "                <div class=\"form-error\">
                    ";
                // line 19
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
                yield "
                </div>
            </div>
        ";
            }
            // line 23
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "    <button class=\"btn primary\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 24, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_end');
        yield "

<script>
document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.querySelector('.file-input-hidden');
    const fileNamePreview = document.getElementById('file-name-preview');
    const uploadLabel = document.querySelector('.file-upload-label');

    if (fileInput) {
        fileInput.addEventListener('change', function() {
            if (this.files && this.files.length > 0) {
                fileNamePreview.textContent = this.files[0].name;
                uploadLabel.classList.add('has-file');
            } else {
                fileNamePreview.textContent = 'Aucun fichier sélectionné';
                uploadLabel.classList.remove('has-file');
            }
        });
    }
});
</script>
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
        return "back/matiere/_form.html.twig";
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
        return array (  112 => 25,  107 => 24,  101 => 23,  94 => 19,  91 => 18,  85 => 16,  78 => 12,  71 => 8,  68 => 7,  66 => 6,  62 => 5,  59 => 4,  56 => 3,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    {% for field in form %}
        {% if field.vars.name != '_token' %}
            <div class=\"form-group\">
                {{ form_label(field) }}
                {% if field.vars.name == 'image' %}
                    <div class=\"file-upload-wrapper\">
                        <label for=\"{{ field.vars.id }}\" class=\"file-upload-label\">
                            <i class=\"fas fa-cloud-upload-alt\"></i>
                            <span>Cliquez pour choisir une image</span>
                        </label>
                        {{ form_widget(field, {'attr': {'class': 'file-input-hidden'}}) }}
                        <div id=\"file-name-preview\" class=\"file-name-preview\">Aucun fichier sélectionné</div>
                    </div>
                {% else %}
                    {{ form_widget(field) }}
                {% endif %}
                <div class=\"form-error\">
                    {{ form_errors(field) }}
                </div>
            </div>
        {% endif %}
    {% endfor %}
    <button class=\"btn primary\">{{ button_label|default('Enregistrer') }}</button>
{{ form_end(form) }}

<script>
document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.querySelector('.file-input-hidden');
    const fileNamePreview = document.getElementById('file-name-preview');
    const uploadLabel = document.querySelector('.file-upload-label');

    if (fileInput) {
        fileInput.addEventListener('change', function() {
            if (this.files && this.files.length > 0) {
                fileNamePreview.textContent = this.files[0].name;
                uploadLabel.classList.add('has-file');
            } else {
                fileNamePreview.textContent = 'Aucun fichier sélectionné';
                uploadLabel.classList.remove('has-file');
            }
        });
    }
});
</script>
", "back/matiere/_form.html.twig", "C:\\Users\\pc\\Desktop\\LearnFlex-\\templates\\back\\matiere\\_form.html.twig");
    }
}
