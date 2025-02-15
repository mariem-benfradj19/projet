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

/* @Maker/serializer/Encoder.tpl.php */
class __TwigTemplate_bdca4b6dec2855b638b7c7af83551325 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Maker/serializer/Encoder.tpl.php"));

        // line 1
        yield "<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

<?= \$use_statements; ?>

class <?= \$class_name ?> implements EncoderInterface, DecoderInterface
{
    public const FORMAT = '<?= \$format ?>';

    public function encode(mixed \$data, string \$format, array \$context = []): string
    {
        // TODO: return your encoded data
        return '';
    }

    public function supportsEncoding(string \$format): bool
    {
        return self::FORMAT === \$format;
    }

    public function decode(string \$data, string \$format, array \$context = [])<?php if (\$use_decoder_return_type): ?>: mixed<?php endif; ?>
    {
        // TODO: return your decoded data
        return '';
    }

    public function supportsDecoding(string \$format): bool
    {
        return self::FORMAT === \$format;
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
        return "@Maker/serializer/Encoder.tpl.php";
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

class <?= \$class_name ?> implements EncoderInterface, DecoderInterface
{
    public const FORMAT = '<?= \$format ?>';

    public function encode(mixed \$data, string \$format, array \$context = []): string
    {
        // TODO: return your encoded data
        return '';
    }

    public function supportsEncoding(string \$format): bool
    {
        return self::FORMAT === \$format;
    }

    public function decode(string \$data, string \$format, array \$context = [])<?php if (\$use_decoder_return_type): ?>: mixed<?php endif; ?>
    {
        // TODO: return your decoded data
        return '';
    }

    public function supportsDecoding(string \$format): bool
    {
        return self::FORMAT === \$format;
    }
}
", "@Maker/serializer/Encoder.tpl.php", "C:\\Users\\Lenovo IdeaPad 3i\\Desktop\\Novalearn-new_project\\vendor\\symfony\\maker-bundle\\templates\\serializer\\Encoder.tpl.php");
    }
}
