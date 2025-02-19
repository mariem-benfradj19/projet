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

/* @Maker/scheduler/Schedule.tpl.php */
class __TwigTemplate_4dccaf666f1748eabe86544564aa743a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Maker/scheduler/Schedule.tpl.php"));

        // line 1
        yield "<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

<?= \$use_statements; ?>

#[AsSchedule<?php if (\$has_transport_name): ?>('<?= \$transport_name; ?>')<?php endif ?>]
final class <?= \$class_name; ?> implements ScheduleProviderInterface
{
    public function __construct(
        private CacheInterface \$cache,
    ) {
    }

    public function getSchedule(): Schedule
    {
        return (new Schedule())
            ->add(
<?php if (\$has_custom_message): ?>
            // @TODO - Modify the frequency to suite your needs
            RecurringMessage::every('1 hour', new <?= \$message_class_name; ?>()),
<?php else: ?>
            // @TODO - Create a Message to schedule
            // RecurringMessage::every('1 hour', new App\\Message\\Message()),
<?php endif ?>
            )
            ->stateful(\$this->cache)
        ;
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
        return "@Maker/scheduler/Schedule.tpl.php";
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

namespace <?= \$namespace; ?>;

<?= \$use_statements; ?>

#[AsSchedule<?php if (\$has_transport_name): ?>('<?= \$transport_name; ?>')<?php endif ?>]
final class <?= \$class_name; ?> implements ScheduleProviderInterface
{
    public function __construct(
        private CacheInterface \$cache,
    ) {
    }

    public function getSchedule(): Schedule
    {
        return (new Schedule())
            ->add(
<?php if (\$has_custom_message): ?>
            // @TODO - Modify the frequency to suite your needs
            RecurringMessage::every('1 hour', new <?= \$message_class_name; ?>()),
<?php else: ?>
            // @TODO - Create a Message to schedule
            // RecurringMessage::every('1 hour', new App\\Message\\Message()),
<?php endif ?>
            )
            ->stateful(\$this->cache)
        ;
    }
}
", "@Maker/scheduler/Schedule.tpl.php", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\vendor\\symfony\\maker-bundle\\templates\\scheduler\\Schedule.tpl.php");
    }
}
