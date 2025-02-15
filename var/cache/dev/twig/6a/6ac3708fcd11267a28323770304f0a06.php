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

/* @Maker/controller/Controller.tpl.php */
class __TwigTemplate_08a13c9e79aac0490649cae06a09f0b7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Maker/controller/Controller.tpl.php"));

        // line 1
        yield "<?= \"<?php\\n\" ?>

namespace <?= \$class_data->getNamespace(); ?>;

<?= \$class_data->getUseStatements(); ?>

<?= \$class_data->getClassDeclaration(); ?>
{
<?= \$generator->generateRouteForControllerMethod(\$route_path, \$route_name); ?>
    public function <?= \$method_name ?>(): <?php if (\$with_template) { ?>Response<?php } else { ?>JsonResponse<?php } ?>

    {
<?php if (\$with_template) { ?>
        return \$this->render('<?= \$template_name ?>', [
            'controller_name' => '<?= \$class_data->getClassName() ?>',
        ]);
<?php } else { ?>
        return \$this->json([
            'message' => 'Welcome to your new controller!',
            'path' => '<?= \$relative_path; ?>',
        ]);
<?php } ?>
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
        return "@Maker/controller/Controller.tpl.php";
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
<?= \$generator->generateRouteForControllerMethod(\$route_path, \$route_name); ?>
    public function <?= \$method_name ?>(): <?php if (\$with_template) { ?>Response<?php } else { ?>JsonResponse<?php } ?>

    {
<?php if (\$with_template) { ?>
        return \$this->render('<?= \$template_name ?>', [
            'controller_name' => '<?= \$class_data->getClassName() ?>',
        ]);
<?php } else { ?>
        return \$this->json([
            'message' => 'Welcome to your new controller!',
            'path' => '<?= \$relative_path; ?>',
        ]);
<?php } ?>
    }
}
", "@Maker/controller/Controller.tpl.php", "C:\\Users\\Lenovo IdeaPad 3i\\Desktop\\Novalearn-new_project\\vendor\\symfony\\maker-bundle\\templates\\controller\\Controller.tpl.php");
    }
}
