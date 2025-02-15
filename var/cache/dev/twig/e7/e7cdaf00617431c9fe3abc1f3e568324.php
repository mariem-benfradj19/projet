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

/* delete.html.twig */
class __TwigTemplate_fa102ac448230b0c800d0fca5e4ecba4 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "delete.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Supprimer un cours";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <h1>Êtes-vous sûr de vouloir supprimer le cours : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), "html", null, true);
        yield " ?</h1>

    <form action=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]), "html", null, true);
        yield "\" method=\"post\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7))), "html", null, true);
        yield "\">
        <button type=\"submit\" class=\"btn btn-danger\">Oui, supprimer</button>
    </form>

    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours");
        yield "\" class=\"btn btn-secondary\">Retour à la liste</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "delete.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  104 => 11,  97 => 7,  93 => 6,  87 => 4,  77 => 3,  60 => 1,  52 => 3,  49 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block title %}Supprimer un cours{% endblock %}

{% block body %}
    <h1>Êtes-vous sûr de vouloir supprimer le cours : {{ course.titre }} ?</h1>

    <form action=\"{{ path('course_delete', {'id': course.id}) }}\" method=\"post\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ course.id) }}\">
        <button type=\"submit\" class=\"btn btn-danger\">Oui, supprimer</button>
    </form>

    <a href=\"{{ path('app_cours') }}\" class=\"btn btn-secondary\">Retour à la liste</a>
{% endblock %}
", "delete.html.twig", "C:\\Users\\Lenovo IdeaPad 3i\\Desktop\\Novalearn-new_project\\templates\\delete.html.twig");
    }
}
