<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Components/_card.html.twig */
class __TwigTemplate_e4945fa7e32faa932b738fadb349e6bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Components/_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Components/_card.html.twig"));

        // line 1
        echo "<div class=\"blog-card\">
    <div class=\"blog-card-content\">
        <p class=\"blog-card-content-date\">
            <i class=\"bi bi-calendar-range-fill\"></i>
            ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 5, $this->source); })()), "datePublication", [], "any", false, false, false, 5), "full", "none", "", null, "gregorian", "fr"), "html", null, true);
        echo "
        </p>
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.livres.show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\">
            <h2 class=\"blog-card-content-header\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), "html", null, true);
        echo "</h2>
        </a>
        <p class=\"blog-card-content-text\">";
        // line 10
        echo twig_escape_filter($this->env, (twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 10, $this->source); })()), "description", [], "any", false, false, false, 10)), 0, 150) . "..."), "html", null, true);
        echo "</p>
        <!-- Assuming Livre entity has an author property -->
        <p class=\"blog-card-content-user text-muted\">Par ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 12, $this->source); })()), "auteur", [], "any", false, false, false, 12), "nomComplet", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
        <div class=\"mb-3\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 14, $this->source); })()), "categories", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 15
            echo "                <!-- Ajout du lien pour chaque catégorie -->
                <span class=\"badge bg-secondary p-2\">
                            ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "get", ["_route"], "method", false, false, false, 17) == "admin.livres.index")) {
                // line 18
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categories.update", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 18)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 18), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 20
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.categories.show", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 20), "html", null, true);
                echo "</a>
                            ";
            }
            // line 22
            echo "                </span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>
        ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "get", ["_route"], "method", false, false, false, 25) == "admin.livres.index")) {
            // line 26
            echo "            <div class=\"d-flex justify-content-between align-items-center\">
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.livres.update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">
                    <i class=\"bi bi-pencil-square\"></i>
                    Modifier
                </a>
                ";
            // line 31
            $this->loadTemplate("Backend/Livre/_deleteForm.html.twig", "Components/_card.html.twig", 31)->display($context);
            // line 32
            echo "            </div>

        ";
        }
        // line 35
        echo "    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Components/_card.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  128 => 35,  123 => 32,  121 => 31,  114 => 27,  111 => 26,  109 => 25,  106 => 24,  99 => 22,  91 => 20,  83 => 18,  81 => 17,  77 => 15,  73 => 14,  68 => 12,  63 => 10,  58 => 8,  54 => 7,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"blog-card\">
    <div class=\"blog-card-content\">
        <p class=\"blog-card-content-date\">
            <i class=\"bi bi-calendar-range-fill\"></i>
            {{ livre.datePublication|format_datetime('full', 'none', locale='fr') }}
        </p>
        <a href=\"{{ path('app.livres.show', {id: livre.id}) }}\">
            <h2 class=\"blog-card-content-header\">{{ livre.titre }}</h2>
        </a>
        <p class=\"blog-card-content-text\">{{ livre.description|striptags|slice(0, 150) ~ '...' }}</p>
        <!-- Assuming Livre entity has an author property -->
        <p class=\"blog-card-content-user text-muted\">Par {{ livre.auteur.nomComplet }}</p>
        <div class=\"mb-3\">
            {% for categorie in livre.categories %}
                <!-- Ajout du lien pour chaque catégorie -->
                <span class=\"badge bg-secondary p-2\">
                            {% if app.request.get('_route') == 'admin.livres.index' %}
                                <a href=\"{{ path('admin.categories.update', {id: categorie.id}) }}\">{{ categorie.nom }}</a>
                            {% else %}
                                <a href=\"{{ path('app.categories.show', {id: categorie.id}) }}\">{{ categorie.nom }}</a>
                            {% endif %}
                </span>
            {% endfor %}
        </div>
        {% if app.request.get('_route') == 'admin.livres.index' %}
            <div class=\"d-flex justify-content-between align-items-center\">
                <a href=\"{{ path('admin.livres.update', {id: livre.id}) }}\" class=\"btn btn-warning\">
                    <i class=\"bi bi-pencil-square\"></i>
                    Modifier
                </a>
                {% include 'Backend/Livre/_deleteForm.html.twig' %}
            </div>

        {% endif %}
    </div>
</div>", "Components/_card.html.twig", "/home/danielo/Documents/dev/GitTpNote/templates/Components/_card.html.twig");
    }
}
