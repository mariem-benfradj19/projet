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

/* @Maker/stimulus/Controller.tpl.php */
class __TwigTemplate_c0af9234903e9b306ef51145bbc854a4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Maker/stimulus/Controller.tpl.php"));

        // line 1
        yield "import { Controller } from '@hotwired/stimulus';

/*
* The following line makes this controller \"lazy\": it won't be downloaded until needed
* See https://github.com/symfony/stimulus-bridge#lazy-controllers
*/
/* stimulusFetch: 'lazy' */
export default class extends Controller {
<?= \$targets ? \"    static targets = \$targets\\n\" : \"\" ?>
<?php if (\$values) { ?>
    static values = {
<?php foreach (\$values as \$value): ?>
        <?= \$value['name'] ?>: <?= \$value['type'] ?>,
<?php endforeach; ?>
    }
<?php } ?>
    // ...
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Maker/stimulus/Controller.tpl.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("import { Controller } from '@hotwired/stimulus';

/*
* The following line makes this controller \"lazy\": it won't be downloaded until needed
* See https://github.com/symfony/stimulus-bridge#lazy-controllers
*/
/* stimulusFetch: 'lazy' */
export default class extends Controller {
<?= \$targets ? \"    static targets = \$targets\\n\" : \"\" ?>
<?php if (\$values) { ?>
    static values = {
<?php foreach (\$values as \$value): ?>
        <?= \$value['name'] ?>: <?= \$value['type'] ?>,
<?php endforeach; ?>
    }
<?php } ?>
    // ...
}
", "@Maker/stimulus/Controller.tpl.php", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\vendor\\symfony\\maker-bundle\\templates\\stimulus\\Controller.tpl.php");
    }
}
