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

/* main/index.html.twig */
class __TwigTemplate_f32fccb233b936a478678772d470b2d35bb8715f93e8442a0775678a6a59f0fa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello MainController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <div class=\"jumbotron\">
        <h2>Ajouter une note</h2>
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new RuntimeError('Variable "formNote" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
            <select name=\"matiere\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 12
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matiere"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matiere"], "nom", [], "any", false, false, false, 12), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </select>
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new RuntimeError('Variable "formNote" does not exist.', 15, $this->source); })()), 'rest');
        echo "
        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new RuntimeError('Variable "formNote" does not exist.', 16, $this->source); })()), 'form_end');
        echo "
    </div>

    <div class=\"jumbotron\">
        <h2>Bulletin de notes</h2>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 22
            echo "            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["note"], "matiere", [], "any", false, false, false, 24), "nom", [], "any", false, false, false, 24), "html", null, true);
            echo "</h5>
                    <p class=\"card-text\">Note:  ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "note", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
                    <p class=\"card-text\">Coefficient:  ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["note"], "matiere", [], "any", false, false, false, 26), "coefficient", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
                    <p class=\"card-text\">Ajouter le :  ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "date", [], "any", false, false, false, 27), "d/m/Y H:i:s"), "html", null, true);
            echo "</p>
                    
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 33,  148 => 27,  144 => 26,  140 => 25,  136 => 24,  132 => 22,  128 => 21,  120 => 16,  116 => 15,  113 => 14,  102 => 12,  98 => 11,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MainController!{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"jumbotron\">
        <h2>Ajouter une note</h2>
        {{ form_start(formNote) }}
            <select name=\"matiere\">
                {% for matiere in matieres %}
                    <option value=\"{{ matiere.id }}\">{{ matiere.nom }}</option>
                {% endfor %}
            </select>
        {{ form_rest(formNote) }}
        {{ form_end(formNote) }}
    </div>

    <div class=\"jumbotron\">
        <h2>Bulletin de notes</h2>
        {% for note in notes %}
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{note.matiere.nom}}</h5>
                    <p class=\"card-text\">Note:  {{ note.note }}</p>
                    <p class=\"card-text\">Coefficient:  {{ note.matiere.coefficient }}</p>
                    <p class=\"card-text\">Ajouter le :  {{ note.date | date('d/m/Y H:i:s') }}</p>
                    
                </div>
            </div>

        {% endfor %}
    </div>
</div>
{% endblock %}
", "main/index.html.twig", "/Applications/MAMP/htdocs/A2/SYMFONY/symfonyStudent/templates/main/index.html.twig");
    }
}
