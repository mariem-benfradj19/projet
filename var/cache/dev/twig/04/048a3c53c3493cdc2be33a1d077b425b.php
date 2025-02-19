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

/* @Maker/security/formLogin/LoginController.tpl.php */
class __TwigTemplate_b49e31d846113dd201e80685edf42eea extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Maker/security/formLogin/LoginController.tpl.php"));

        // line 1
        yield "<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

<?= \$use_statements; ?>

class <?= \$controller_name ?> extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils \$authenticationUtils): Response
    {
        // get the login error if there is one
        \$error = \$authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        \$lastUsername = \$authenticationUtils->getLastUsername();

        return \$this->render('<?= \$template_path ?>/login.html.twig', [
            'last_username' => \$lastUsername,
            'error' => \$error,
        ]);
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
        return "@Maker/security/formLogin/LoginController.tpl.php";
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

class <?= \$controller_name ?> extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils \$authenticationUtils): Response
    {
        // get the login error if there is one
        \$error = \$authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        \$lastUsername = \$authenticationUtils->getLastUsername();

        return \$this->render('<?= \$template_path ?>/login.html.twig', [
            'last_username' => \$lastUsername,
            'error' => \$error,
        ]);
    }
}
", "@Maker/security/formLogin/LoginController.tpl.php", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\vendor\\symfony\\maker-bundle\\templates\\security\\formLogin\\LoginController.tpl.php");
    }
}
