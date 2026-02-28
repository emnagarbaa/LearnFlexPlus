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

/* User/pdfuser.html.twig */
class __TwigTemplate_39507dbe4393e7caccbd6f920ea45c85 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/pdfuser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/pdfuser.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Liste des utilisateurs</title>
    <style>
        body {
            font-family: \"Poppins\", sans-serif;
            font-size: 12px;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 18px;
            color: #1f4f65;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px 10px;
            text-align: left;
        }

        th {
            background-color: #97c3a2;
            color: #fff;
            font-weight: 600;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .avatar {
            display: inline-block;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: #1f4f65;
            color: #fff;
            text-align: center;
            line-height: 25px;
            font-weight: bold;
            font-size: 10px;
        }
    </style>
</head>
<body>

<h1>Liste des utilisateurs</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Rôle</th>
            <th>Avatar</th>
            <th>Téléphone</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 73, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 74
            yield "            <tr>
                <td>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 75), "html", null, true);
            yield "</td>
                <td>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
                <td>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 77), "html", null, true);
            yield "</td>
                <td>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>
                <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 79)), "html", null, true);
            yield "</td>
                <td>
                    <div class=\"avatar\">
                        ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 82)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 82)), "html", null, true);
            yield "
                    </div>
                </td>
                <td>";
            // line 85
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", true, true, false, 85) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 85)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 85), "html", null, true)) : ("—"));
            yield "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 87
        if (!$context['_iterated']) {
            // line 88
            yield "            <tr>
                <td colspan=\"7\" style=\"text-align: center;\">Aucun utilisateur trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "    </tbody>
</table>

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
        return "User/pdfuser.html.twig";
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
        return array (  177 => 92,  168 => 88,  166 => 87,  159 => 85,  152 => 82,  146 => 79,  142 => 78,  138 => 77,  134 => 76,  130 => 75,  127 => 74,  122 => 73,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Liste des utilisateurs</title>
    <style>
        body {
            font-family: \"Poppins\", sans-serif;
            font-size: 12px;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 18px;
            color: #1f4f65;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px 10px;
            text-align: left;
        }

        th {
            background-color: #97c3a2;
            color: #fff;
            font-weight: 600;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .avatar {
            display: inline-block;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: #1f4f65;
            color: #fff;
            text-align: center;
            line-height: 25px;
            font-weight: bold;
            font-size: 10px;
        }
    </style>
</head>
<body>

<h1>Liste des utilisateurs</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Rôle</th>
            <th>Avatar</th>
            <th>Téléphone</th>
        </tr>
    </thead>
    <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.nom }}</td>
                <td>{{ user.prenom }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.role|capitalize }}</td>
                <td>
                    <div class=\"avatar\">
                        {{ user.prenom|first }}{{ user.nom|first }}
                    </div>
                </td>
                <td>{{ user.telephone ?? '—' }}</td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\" style=\"text-align: center;\">Aucun utilisateur trouvé</td>
            </tr>
        {% endfor %}
    </tbody>
</table>

</body>
</html>
", "User/pdfuser.html.twig", "C:\\Users\\hassa\\Downloads\\LearnFlex-\\LearnFlex-\\templates\\User\\pdfuser.html.twig");
    }
}
