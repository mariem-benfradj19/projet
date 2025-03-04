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

/* admin.html.twig */
class __TwigTemplate_acc0bb613ccfdba32bbfd10bf6e193d3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Admin Dashboard</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background: #ecf0f1;
        }
        .sidebar {
            width: 170px;
            background: #2c3e50;
            color: white;
            height: 100vh;
            padding: 20px;
            position: fixed;
            left: 0;
        }
        .sidebar h2 {
            text-align: center;
            font-size: 18px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 12px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        .sidebar ul li a i {
            margin-right: 10px;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
            flex-grow: 1;
            background: #ecf0f1;
            min-height: 100vh;
            width: calc(100% - 220px);
        }
        .dashboard {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .card {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            width: 30%;
            text-align: center;
        }
        .menu-btn {
            position: absolute;
            top: 15px;
            left: 210px;
            font-size: 20px;
            cursor: pointer;
            background: none;
            border: none;
            color: #2c3e50;
        }
        .table-container {
            margin-top: 20px;
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #2c3e50;
            color: white;
        }
        .btn {
            padding: 5px 10px;
            margin: 2px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        .btn-edit {
            background: #f1c40f;
            color: white;
        }
        .btn-delete {
            background: #e74c3c;
            color: white;
        }
    </style>
</head>
<body>
    <button class=\"menu-btn\" onclick=\"toggleSidebar()\"><i class=\"fa fa-bars\"></i></button>
    <div class=\"sidebar\" id=\"sidebar\">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href=\"#\"><i class=\"fa fa-home\"></i> Tableau de bord</a></li>
            <li><a href=\"#\"><i class=\"fa fa-users\"></i> Utilisateurs</a></li>
            <li><a href=\"#\"><i class=\"fa fa-cogs\"></i> Paramètres</a></li>
        </ul>
    </div>
    <div class=\"content\">
        <h1>Tableau de bord</h1>
        <div class=\"dashboard\">
            <div class=\"card users\">
                <h3>Utilisateurs</h3>
                <p>150</p>
            </div>
            <div class=\"card\">
                <h3>Ventes</h3>
                <p>320</p>
            </div>
            <div class=\"card\">
                <h3>Revenus</h3>
                <p>\$12,500</p>
            </div>
        </div>
        
        <div class=\"table-container\">
            <h2>Liste des utilisateurs</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Dupont</td>
                    <td>jean.dupont@example.com</td>
                    <td>
                        <button class=\"btn btn-edit\">Modifier</button>
                        <button class=\"btn btn-delete\">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Marie Curie</td>
                    <td>marie.curie@example.com</td>
                    <td>
                        <button class=\"btn btn-edit\">Modifier</button>
                        <button class=\"btn btn-delete\">Supprimer</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById(\"sidebar\");
            if (sidebar.style.left === \"0px\") {
                sidebar.style.left = \"-200px\";
            } else {
                sidebar.style.left = \"0px\";
            }
        }
    </script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin.html.twig";
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
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Admin Dashboard</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background: #ecf0f1;
        }
        .sidebar {
            width: 170px;
            background: #2c3e50;
            color: white;
            height: 100vh;
            padding: 20px;
            position: fixed;
            left: 0;
        }
        .sidebar h2 {
            text-align: center;
            font-size: 18px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 12px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        .sidebar ul li a i {
            margin-right: 10px;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
            flex-grow: 1;
            background: #ecf0f1;
            min-height: 100vh;
            width: calc(100% - 220px);
        }
        .dashboard {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .card {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            width: 30%;
            text-align: center;
        }
        .menu-btn {
            position: absolute;
            top: 15px;
            left: 210px;
            font-size: 20px;
            cursor: pointer;
            background: none;
            border: none;
            color: #2c3e50;
        }
        .table-container {
            margin-top: 20px;
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #2c3e50;
            color: white;
        }
        .btn {
            padding: 5px 10px;
            margin: 2px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        .btn-edit {
            background: #f1c40f;
            color: white;
        }
        .btn-delete {
            background: #e74c3c;
            color: white;
        }
    </style>
</head>
<body>
    <button class=\"menu-btn\" onclick=\"toggleSidebar()\"><i class=\"fa fa-bars\"></i></button>
    <div class=\"sidebar\" id=\"sidebar\">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href=\"#\"><i class=\"fa fa-home\"></i> Tableau de bord</a></li>
            <li><a href=\"#\"><i class=\"fa fa-users\"></i> Utilisateurs</a></li>
            <li><a href=\"#\"><i class=\"fa fa-cogs\"></i> Paramètres</a></li>
        </ul>
    </div>
    <div class=\"content\">
        <h1>Tableau de bord</h1>
        <div class=\"dashboard\">
            <div class=\"card users\">
                <h3>Utilisateurs</h3>
                <p>150</p>
            </div>
            <div class=\"card\">
                <h3>Ventes</h3>
                <p>320</p>
            </div>
            <div class=\"card\">
                <h3>Revenus</h3>
                <p>\$12,500</p>
            </div>
        </div>
        
        <div class=\"table-container\">
            <h2>Liste des utilisateurs</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jean Dupont</td>
                    <td>jean.dupont@example.com</td>
                    <td>
                        <button class=\"btn btn-edit\">Modifier</button>
                        <button class=\"btn btn-delete\">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Marie Curie</td>
                    <td>marie.curie@example.com</td>
                    <td>
                        <button class=\"btn btn-edit\">Modifier</button>
                        <button class=\"btn btn-delete\">Supprimer</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById(\"sidebar\");
            if (sidebar.style.left === \"0px\") {
                sidebar.style.left = \"-200px\";
            } else {
                sidebar.style.left = \"0px\";
            }
        }
    </script>
</body>
</html>
", "admin.html.twig", "C:\\Users\\Lenovo IdeaPad 3i\\Desktop\\Novalearn-new_project\\templates\\admin.html.twig");
    }
}
