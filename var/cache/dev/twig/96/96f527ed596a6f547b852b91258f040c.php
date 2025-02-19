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

/* @Maker/crud/templates/edit.tpl.php */
class __TwigTemplate_f1089924485dfc855388ed8771ad26ff extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Maker/crud/templates/edit.tpl.php"));

        // line 1
        yield "<?= \$helper->getHeadPrintCode('Edit '.\$entity_class_name) ?>

";
        // line 3
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <h1>Edit <?= \$entity_class_name ?></h1>

    ";
        // line 6
        yield Twig\Extension\CoreExtension::include($this->env, $context, "<?= \$templates_path ?>/_form.html.twig", ["button_label" => "Update"]);
        yield "

    <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("<?= \$route_name ?>_index");
        yield "\">back to list</a>

    ";
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "<?= \$templates_path ?>/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Maker/crud/templates/edit.tpl.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  81 => 10,  76 => 8,  71 => 6,  67 => 4,  50 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<?= \$helper->getHeadPrintCode('Edit '.\$entity_class_name) ?>

{% block body %}
    <h1>Edit <?= \$entity_class_name ?></h1>

    {{ include('<?= \$templates_path ?>/_form.html.twig', {'button_label': 'Update'}) }}

    <a href=\"{{ path('<?= \$route_name ?>_index') }}\">back to list</a>

    {{ include('<?= \$templates_path ?>/_delete_form.html.twig') }}
{% endblock %}
", "@Maker/crud/templates/edit.tpl.php", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\vendor\\symfony\\maker-bundle\\templates\\crud\\templates\\edit.tpl.php");
    }
}
