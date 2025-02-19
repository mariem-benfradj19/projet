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

/* @Maker/controller/test/Test.tpl.php */
class __TwigTemplate_2fcba3e67f505a0106099b7d0fd786b0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Maker/controller/test/Test.tpl.php"));

        // line 1
        yield "<?= \"<?php\\n\" ?>

namespace <?= \$class_data->getNamespace(); ?>;

<?= \$class_data->getUseStatements(); ?>

<?= \$class_data->getClassDeclaration(); ?>
{
    public function testIndex(): void
    {
        \$client = static::createClient();
        \$client->request('GET', '<?= \$route_path; ?>');

        self::assertResponseIsSuccessful();
    }
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
        return "@Maker/controller/test/Test.tpl.php";
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
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$class_data->getNamespace(); ?>;

<?= \$class_data->getUseStatements(); ?>

<?= \$class_data->getClassDeclaration(); ?>
{
    public function testIndex(): void
    {
        \$client = static::createClient();
        \$client->request('GET', '<?= \$route_path; ?>');

        self::assertResponseIsSuccessful();
    }
}
", "@Maker/controller/test/Test.tpl.php", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\vendor\\symfony\\maker-bundle\\templates\\controller\\test\\Test.tpl.php");
    }
}
