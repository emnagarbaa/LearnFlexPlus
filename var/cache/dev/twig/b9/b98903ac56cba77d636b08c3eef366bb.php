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

/* back/cours/_form.html.twig */
class __TwigTemplate_3bb404bebf25655e231dd9b29245ad86 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/cours/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/cours/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "course-form"]]);
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
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 15
$context["field"], "vars", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15) == "pdf_file")) {
                    // line 16
                    yield "                    <div class=\"file-upload-wrapper\">
                        <label for=\"";
                    // line 17
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), "html", null, true);
                    yield "\" class=\"file-upload-label\">
                            <i class=\"fas fa-file-pdf\"></i>
                            <span>Cliquez pour choisir un PDF</span>
                        </label>
                        ";
                    // line 21
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "file-input-hidden"]]);
                    yield "
                        <div id=\"pdf-name-preview\" class=\"file-name-preview\">Aucun fichier sélectionné</div>
                    </div>
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 24
$context["field"], "vars", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24) == "prix")) {
                    // line 25
                    yield "                    <div class=\"input-group\">
                        ";
                    // line 26
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["style" => "border-right: none; border-radius: 8px 0 0 8px;"]]);
                    yield "
                        <span style=\"background: #f1f5f9; border: 1px solid #ddd; padding: 12px; border-radius: 0 8px 8px 0; font-weight: bold; color: #1f4f65;\">USD</span>
                    </div>
";
                } else {
                    // line 30
                    yield "                    ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
                    yield "
                ";
                }
                // line 32
                yield "                <div class=\"form-error\">
                    ";
                // line 33
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
                yield "
                </div>
            </div>
        ";
            }
            // line 37
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "    
    <div style=\"margin-top: 20px; display: flex; gap: 10px;\">
        <button class=\"btn primary\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 40, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
        <button type=\"button\" id=\"generate-content-btn\" class=\"btn-outline\" style=\"border-color: #8b5cf6; color: #8b5cf6;\">
            <i class=\"fas fa-robot\"></i> Générer le contenu avec AI
        </button>
        <button type=\"button\" id=\"generate-tips-btn\" class=\"btn-outline\" style=\"border-color: #3b82f6; color: #3b82f6;\">
            <i class=\"fas fa-magic\"></i> Suggestions AI
        </button>
    </div>

    <div id=\"ai-tips-container\" style=\"display: none; margin-top: 20px; padding: 20px; background: #f0f9ff; border: 1px solid #bae6fd; border-radius: 8px;\">
        <h4 style=\"color: #0369a1; margin-bottom: 10px;\"><i class=\"fas fa-lightbulb\"></i> Conseils de l'IA Gemini</h4>
        <div id=\"ai-tips-content\" style=\"color: #0c4a6e; font-size: 0.95rem; line-height: 1.6;\"></div>
    </div>

";
        // line 54
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
        yield "

<script>
document.addEventListener('DOMContentLoaded', function() {
    // File upload logic
    const fileInputs = document.querySelectorAll('.file-input-hidden');
    fileInputs.forEach(input => {
        input.addEventListener('change', function() {
            const preview = this.nextElementSibling;
            const label = this.previousElementSibling;
            if (this.files && this.files.length > 0) {
                if (preview) preview.textContent = this.files[0].name;
                if (label) label.classList.add('has-file');
            } else {
                if (preview) preview.textContent = 'Aucun fichier sélectionné';
                if (label) label.classList.remove('has-file');
            }
        });
    });

    // AI Tips generation logic
    const generateBtn = document.getElementById('generate-tips-btn');
    const tipsContainer = document.getElementById('ai-tips-container');
    const tipsContent = document.getElementById('ai-tips-content');

    // Autodetect field IDs - Symfony typical IDs are cour_titre, cour_description
    // We can also find them by their name attributes
    const titleInput = document.querySelector('input[name*=\"[titre]\"]');
    const descInput = document.querySelector('textarea[name*=\"[description]\"]');

    if (generateBtn) {
        generateBtn.addEventListener('click', async function() {
            if (!titleInput.value || !descInput.value) {
                alert('Veuillez remplir le titre et la description avant de demander des conseils.');
                return;
            }

            generateBtn.disabled = true;
            generateBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Analyse en cours...';
            
            try {
                const response = await fetch('";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_ai_generate_tips");
        yield "', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        title: titleInput.value,
                        description: descInput.value
                    })
                });

                const data = await response.json();
                if (data.tips) {
                    tipsContent.innerHTML = data.tips.replace(/\\n/g, '<br>');
                    tipsContainer.style.display = 'block';
                    tipsContainer.scrollIntoView({ behavior: 'smooth' });
                } else {
                    alert('Erreur: ' + (data.error || 'Impossible de générer des conseils.'));
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Une erreur est survenue lors de la communication avec l\\'IA.');
            } finally {
                generateBtn.disabled = false;
                generateBtn.innerHTML = '<i class=\"fas fa-magic\"></i> Suggestions AI';
            }
        });
    }

    // AI Content Generator
    const generateContentBtn = document.getElementById('generate-content-btn');
    
    if (generateContentBtn) {
        generateContentBtn.addEventListener('click', async function() {
            if (!titleInput.value) {
                alert('Veuillez entrer un titre de cours avant de générer le contenu.');
                return;
            }

            generateContentBtn.disabled = true;
            generateContentBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Génération en cours...';
            
            try {
                const response = await fetch('";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_ai_generate_course_content");
        yield "', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        title: titleInput.value
                    })
                });

                const result = await response.json();
                if (result.success && result.data) {
                    showAIContentModal(result.data);
                } else {
                    alert('Erreur: ' + (result.error || 'Impossible de générer le contenu.'));
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Une erreur est survenue lors de la communication avec l\\'IA.');
            } finally {
                generateContentBtn.disabled = false;
                generateContentBtn.innerHTML = '<i class=\"fas fa-robot\"></i> Générer le contenu avec AI';
            }
        });
    }

    function showAIContentModal(data) {
        // Create modal if it doesn't exist
        let modal = document.getElementById('ai-content-modal');
        if (!modal) {
            modal = document.createElement('div');
            modal.id = 'ai-content-modal';
            modal.className = 'ai-modal';
            document.body.appendChild(modal);
        }

        modal.innerHTML = `
            <div class=\"ai-modal-content\">
                <div class=\"ai-modal-header\">
                    <h3><i class=\"fas fa-robot\"></i> Contenu généré par l'IA</h3>
                    <button onclick=\"closeAIModal()\" class=\"ai-modal-close\">&times;</button>
                </div>
                
                <div class=\"ai-modal-body\">
                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-align-left\"></i> Description</h4>
                        <p class=\"ai-content\">\${data.description || 'Aucune description générée'}</p>
                        <button onclick=\"applyDescription()\" class=\"btn-apply\">
                            <i class=\"fas fa-check\"></i> Utiliser cette description
                        </button>
                    </div>

                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-book\"></i> Plan de cours suggéré</h4>
                        <ul class=\"ai-list\">
                            \${(data.chapters || []).map(ch => `<li>\${ch}</li>`).join('')}
                        </ul>
                    </div>

                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-bullseye\"></i> Objectifs d'apprentissage</h4>
                        <ul class=\"ai-list\">
                            \${(data.objectives || []).map(obj => `<li>\${obj}</li>`).join('')}
                        </ul>
                    </div>

                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-graduation-cap\"></i> Prérequis</h4>
                        <ul class=\"ai-list\">
                            \${(data.prerequisites || []).map(pre => `<li>\${pre}</li>`).join('')}
                        </ul>
                    </div>

                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-tasks\"></i> Idées d'exercices</h4>
                        <ul class=\"ai-list\">
                            \${(data.exercises || []).map(ex => `<li>\${ex}</li>`).join('')}
                        </ul>
                    </div>
                </div>
            </div>
        `;

        modal.style.display = 'flex';
        
        // Store data for later use
        window.aiGeneratedData = data;
    }

    window.closeAIModal = function() {
        const modal = document.getElementById('ai-content-modal');
        if (modal) modal.style.display = 'none';
    };

    window.applyDescription = function() {
        if (window.aiGeneratedData && window.aiGeneratedData.description) {
            descInput.value = window.aiGeneratedData.description;
            alert('Description appliquée avec succès !');
            closeAIModal();
        }
    };
});
</script>

<style>
.ai-modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    align-items: center;
    justify-content: center;
    animation: fadeIn 0.3s;
}

.ai-modal-content {
    background: white;
    border-radius: 16px;
    width: 90%;
    max-width: 800px;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    animation: slideUp 0.3s;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideUp {
    from { transform: translateY(50px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

.ai-modal-header {
    padding: 24px;
    border-bottom: 2px solid #f1f5f9;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(135deg, #8b5cf6 0%, #6366f1 100%);
    color: white;
    border-radius: 16px 16px 0 0;
}

.ai-modal-header h3 {
    margin: 0;
    font-size: 1.5rem;
}

.ai-modal-close {
    background: none;
    border: none;
    font-size: 2rem;
    color: white;
    cursor: pointer;
    line-height: 1;
    transition: transform 0.2s;
}

.ai-modal-close:hover {
    transform: scale(1.2);
}

.ai-modal-body {
    padding: 24px;
}

.ai-section {
    margin-bottom: 24px;
    padding: 20px;
    background: #f8fafc;
    border-radius: 12px;
    border-left: 4px solid #8b5cf6;
}

.ai-section h4 {
    color: #1e293b;
    margin: 0 0 12px 0;
    font-size: 1.1rem;
}

.ai-section h4 i {
    color: #8b5cf6;
    margin-right: 8px;
}

.ai-content {
    color: #475569;
    line-height: 1.7;
    margin: 12px 0;
}

.ai-list {
    list-style: none;
    padding: 0;
    margin: 12px 0;
}

.ai-list li {
    padding: 10px 12px;
    margin: 8px 0;
    background: white;
    border-radius: 8px;
    color: #475569;
    border-left: 3px solid #8b5cf6;
}

.btn-apply {
    background: #8b5cf6;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s;
    margin-top: 12px;
}

.btn-apply:hover {
    background: #7c3aed;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(139, 92, 246, 0.3);
}
</style>
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
        return "back/cours/_form.html.twig";
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
        return array (  245 => 136,  201 => 95,  157 => 54,  140 => 40,  136 => 38,  130 => 37,  123 => 33,  120 => 32,  114 => 30,  107 => 26,  104 => 25,  102 => 24,  96 => 21,  89 => 17,  86 => 16,  84 => 15,  78 => 12,  71 => 8,  68 => 7,  66 => 6,  62 => 5,  59 => 4,  56 => 3,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate', 'id': 'course-form'}}) }}
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
                {% elseif field.vars.name == 'pdf_file' %}
                    <div class=\"file-upload-wrapper\">
                        <label for=\"{{ field.vars.id }}\" class=\"file-upload-label\">
                            <i class=\"fas fa-file-pdf\"></i>
                            <span>Cliquez pour choisir un PDF</span>
                        </label>
                        {{ form_widget(field, {'attr': {'class': 'file-input-hidden'}}) }}
                        <div id=\"pdf-name-preview\" class=\"file-name-preview\">Aucun fichier sélectionné</div>
                    </div>
                {% elseif field.vars.name == 'prix' %}
                    <div class=\"input-group\">
                        {{ form_widget(field, {'attr': {'style': 'border-right: none; border-radius: 8px 0 0 8px;'}}) }}
                        <span style=\"background: #f1f5f9; border: 1px solid #ddd; padding: 12px; border-radius: 0 8px 8px 0; font-weight: bold; color: #1f4f65;\">USD</span>
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
    
    <div style=\"margin-top: 20px; display: flex; gap: 10px;\">
        <button class=\"btn primary\">{{ button_label|default('Enregistrer') }}</button>
        <button type=\"button\" id=\"generate-content-btn\" class=\"btn-outline\" style=\"border-color: #8b5cf6; color: #8b5cf6;\">
            <i class=\"fas fa-robot\"></i> Générer le contenu avec AI
        </button>
        <button type=\"button\" id=\"generate-tips-btn\" class=\"btn-outline\" style=\"border-color: #3b82f6; color: #3b82f6;\">
            <i class=\"fas fa-magic\"></i> Suggestions AI
        </button>
    </div>

    <div id=\"ai-tips-container\" style=\"display: none; margin-top: 20px; padding: 20px; background: #f0f9ff; border: 1px solid #bae6fd; border-radius: 8px;\">
        <h4 style=\"color: #0369a1; margin-bottom: 10px;\"><i class=\"fas fa-lightbulb\"></i> Conseils de l'IA Gemini</h4>
        <div id=\"ai-tips-content\" style=\"color: #0c4a6e; font-size: 0.95rem; line-height: 1.6;\"></div>
    </div>

{{ form_end(form) }}

<script>
document.addEventListener('DOMContentLoaded', function() {
    // File upload logic
    const fileInputs = document.querySelectorAll('.file-input-hidden');
    fileInputs.forEach(input => {
        input.addEventListener('change', function() {
            const preview = this.nextElementSibling;
            const label = this.previousElementSibling;
            if (this.files && this.files.length > 0) {
                if (preview) preview.textContent = this.files[0].name;
                if (label) label.classList.add('has-file');
            } else {
                if (preview) preview.textContent = 'Aucun fichier sélectionné';
                if (label) label.classList.remove('has-file');
            }
        });
    });

    // AI Tips generation logic
    const generateBtn = document.getElementById('generate-tips-btn');
    const tipsContainer = document.getElementById('ai-tips-container');
    const tipsContent = document.getElementById('ai-tips-content');

    // Autodetect field IDs - Symfony typical IDs are cour_titre, cour_description
    // We can also find them by their name attributes
    const titleInput = document.querySelector('input[name*=\"[titre]\"]');
    const descInput = document.querySelector('textarea[name*=\"[description]\"]');

    if (generateBtn) {
        generateBtn.addEventListener('click', async function() {
            if (!titleInput.value || !descInput.value) {
                alert('Veuillez remplir le titre et la description avant de demander des conseils.');
                return;
            }

            generateBtn.disabled = true;
            generateBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Analyse en cours...';
            
            try {
                const response = await fetch('{{ path(\"app_back_ai_generate_tips\") }}', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        title: titleInput.value,
                        description: descInput.value
                    })
                });

                const data = await response.json();
                if (data.tips) {
                    tipsContent.innerHTML = data.tips.replace(/\\n/g, '<br>');
                    tipsContainer.style.display = 'block';
                    tipsContainer.scrollIntoView({ behavior: 'smooth' });
                } else {
                    alert('Erreur: ' + (data.error || 'Impossible de générer des conseils.'));
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Une erreur est survenue lors de la communication avec l\\'IA.');
            } finally {
                generateBtn.disabled = false;
                generateBtn.innerHTML = '<i class=\"fas fa-magic\"></i> Suggestions AI';
            }
        });
    }

    // AI Content Generator
    const generateContentBtn = document.getElementById('generate-content-btn');
    
    if (generateContentBtn) {
        generateContentBtn.addEventListener('click', async function() {
            if (!titleInput.value) {
                alert('Veuillez entrer un titre de cours avant de générer le contenu.');
                return;
            }

            generateContentBtn.disabled = true;
            generateContentBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Génération en cours...';
            
            try {
                const response = await fetch('{{ path(\"app_back_ai_generate_course_content\") }}', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        title: titleInput.value
                    })
                });

                const result = await response.json();
                if (result.success && result.data) {
                    showAIContentModal(result.data);
                } else {
                    alert('Erreur: ' + (result.error || 'Impossible de générer le contenu.'));
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Une erreur est survenue lors de la communication avec l\\'IA.');
            } finally {
                generateContentBtn.disabled = false;
                generateContentBtn.innerHTML = '<i class=\"fas fa-robot\"></i> Générer le contenu avec AI';
            }
        });
    }

    function showAIContentModal(data) {
        // Create modal if it doesn't exist
        let modal = document.getElementById('ai-content-modal');
        if (!modal) {
            modal = document.createElement('div');
            modal.id = 'ai-content-modal';
            modal.className = 'ai-modal';
            document.body.appendChild(modal);
        }

        modal.innerHTML = `
            <div class=\"ai-modal-content\">
                <div class=\"ai-modal-header\">
                    <h3><i class=\"fas fa-robot\"></i> Contenu généré par l'IA</h3>
                    <button onclick=\"closeAIModal()\" class=\"ai-modal-close\">&times;</button>
                </div>
                
                <div class=\"ai-modal-body\">
                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-align-left\"></i> Description</h4>
                        <p class=\"ai-content\">\${data.description || 'Aucune description générée'}</p>
                        <button onclick=\"applyDescription()\" class=\"btn-apply\">
                            <i class=\"fas fa-check\"></i> Utiliser cette description
                        </button>
                    </div>

                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-book\"></i> Plan de cours suggéré</h4>
                        <ul class=\"ai-list\">
                            \${(data.chapters || []).map(ch => `<li>\${ch}</li>`).join('')}
                        </ul>
                    </div>

                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-bullseye\"></i> Objectifs d'apprentissage</h4>
                        <ul class=\"ai-list\">
                            \${(data.objectives || []).map(obj => `<li>\${obj}</li>`).join('')}
                        </ul>
                    </div>

                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-graduation-cap\"></i> Prérequis</h4>
                        <ul class=\"ai-list\">
                            \${(data.prerequisites || []).map(pre => `<li>\${pre}</li>`).join('')}
                        </ul>
                    </div>

                    <div class=\"ai-section\">
                        <h4><i class=\"fas fa-tasks\"></i> Idées d'exercices</h4>
                        <ul class=\"ai-list\">
                            \${(data.exercises || []).map(ex => `<li>\${ex}</li>`).join('')}
                        </ul>
                    </div>
                </div>
            </div>
        `;

        modal.style.display = 'flex';
        
        // Store data for later use
        window.aiGeneratedData = data;
    }

    window.closeAIModal = function() {
        const modal = document.getElementById('ai-content-modal');
        if (modal) modal.style.display = 'none';
    };

    window.applyDescription = function() {
        if (window.aiGeneratedData && window.aiGeneratedData.description) {
            descInput.value = window.aiGeneratedData.description;
            alert('Description appliquée avec succès !');
            closeAIModal();
        }
    };
});
</script>

<style>
.ai-modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    align-items: center;
    justify-content: center;
    animation: fadeIn 0.3s;
}

.ai-modal-content {
    background: white;
    border-radius: 16px;
    width: 90%;
    max-width: 800px;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    animation: slideUp 0.3s;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideUp {
    from { transform: translateY(50px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

.ai-modal-header {
    padding: 24px;
    border-bottom: 2px solid #f1f5f9;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(135deg, #8b5cf6 0%, #6366f1 100%);
    color: white;
    border-radius: 16px 16px 0 0;
}

.ai-modal-header h3 {
    margin: 0;
    font-size: 1.5rem;
}

.ai-modal-close {
    background: none;
    border: none;
    font-size: 2rem;
    color: white;
    cursor: pointer;
    line-height: 1;
    transition: transform 0.2s;
}

.ai-modal-close:hover {
    transform: scale(1.2);
}

.ai-modal-body {
    padding: 24px;
}

.ai-section {
    margin-bottom: 24px;
    padding: 20px;
    background: #f8fafc;
    border-radius: 12px;
    border-left: 4px solid #8b5cf6;
}

.ai-section h4 {
    color: #1e293b;
    margin: 0 0 12px 0;
    font-size: 1.1rem;
}

.ai-section h4 i {
    color: #8b5cf6;
    margin-right: 8px;
}

.ai-content {
    color: #475569;
    line-height: 1.7;
    margin: 12px 0;
}

.ai-list {
    list-style: none;
    padding: 0;
    margin: 12px 0;
}

.ai-list li {
    padding: 10px 12px;
    margin: 8px 0;
    background: white;
    border-radius: 8px;
    color: #475569;
    border-left: 3px solid #8b5cf6;
}

.btn-apply {
    background: #8b5cf6;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s;
    margin-top: 12px;
}

.btn-apply:hover {
    background: #7c3aed;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(139, 92, 246, 0.3);
}
</style>
", "back/cours/_form.html.twig", "C:\\Users\\pc\\Desktop\\LearnFlex-\\templates\\back\\cours\\_form.html.twig");
    }
}
