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

/* themes/custom/mytheme/templates/layout/page--front.html.twig */
class __TwigTemplate_d0e5dd4cb0697eafa7012e04353f76fbe7b451fe5fa0cae2fffaa502675fe043 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        $this->loadTemplate("@tara/template-parts/header.html.twig", "themes/custom/mytheme/templates/layout/page--front.html.twig", 11)->display($context);
        // line 12
        echo "
<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
    ";
        // line 15
        if (($context["front_sidebar"] ?? null)) {
            // line 16
            echo "      <div class=\"main-container\">
    ";
        }
        // line 18
        echo "    <main id=\"front-main\" class=\"homepage-content page-content\" role=\"main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 20
        echo "      ";
        $this->loadTemplate("@tara/template-parts/content_top.html.twig", "themes/custom/mytheme/templates/layout/page--front.html.twig", 20)->display($context);
        // line 21
        echo "   <h1 class=\"welcome-message\">Welcome to our website</h1>
      ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 22)) {
            // line 23
            echo "    
\t\t\t\t";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "
        
\t\t\t";
        }
        // line 27
        echo "
   
\t\t\t";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_home", [], "any", false, false, true, 29)) {
            // line 30
            echo "\t\t\t\t<div class=\"homepage-content\">
    
\t\t\t\t\t";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_home", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "
\t\t\t\t</div><!--/.homepage-content -->
\t\t\t";
        }
        // line 35
        echo "             
      ";
        // line 36
        $this->loadTemplate("@tara/template-parts/content_bottom.html.twig", "themes/custom/mytheme/templates/layout/page--front.html.twig", 36)->display($context);
        // line 37
        echo "    </main>
    ";
        // line 38
        if (($context["front_sidebar"] ?? null)) {
            // line 39
            echo "      ";
            $this->loadTemplate("@tara/template-parts/left_sidebar.html.twig", "themes/custom/mytheme/templates/layout/page--front.html.twig", 39)->display($context);
            // line 40
            echo "      ";
            $this->loadTemplate("@tara/template-parts/right_sidebar.html.twig", "themes/custom/mytheme/templates/layout/page--front.html.twig", 40)->display($context);
            // line 41
            echo "      </div> ";
            // line 42
            echo "    ";
        }
        // line 43
        echo "  </div> <!--/.container -->
</div><!-- /main-wrapper -->
";
        // line 45
        $this->loadTemplate("@tara/template-parts/footer.html.twig", "themes/custom/mytheme/templates/layout/page--front.html.twig", 45)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 45,  109 => 43,  106 => 42,  104 => 41,  101 => 40,  98 => 39,  96 => 38,  93 => 37,  91 => 36,  88 => 35,  82 => 32,  78 => 30,  76 => 29,  72 => 27,  66 => 24,  63 => 23,  61 => 22,  58 => 21,  55 => 20,  52 => 18,  48 => 16,  46 => 15,  41 => 12,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Tara's theme implementation to display front page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template.
 *
 */
#}
{% include '@tara/template-parts/header.html.twig' %}

<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
    {% if front_sidebar %}
      <div class=\"main-container\">
    {% endif %}
    <main id=\"front-main\" class=\"homepage-content page-content\" role=\"main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}
      {% include '@tara/template-parts/content_top.html.twig' %}
   <h1 class=\"welcome-message\">Welcome to our website</h1>
      {% if page.content %}
    
\t\t\t\t{{ page.content }}
        
\t\t\t{% endif %}

   
\t\t\t{% if page.content_home %}
\t\t\t\t<div class=\"homepage-content\">
    
\t\t\t\t\t{{ page.content_home }}
\t\t\t\t</div><!--/.homepage-content -->
\t\t\t{% endif %}
             
      {% include '@tara/template-parts/content_bottom.html.twig' %}
    </main>
    {% if front_sidebar %}
      {% include '@tara/template-parts/left_sidebar.html.twig' %}
      {% include '@tara/template-parts/right_sidebar.html.twig' %}
      </div> {# /.main-container #}
    {% endif %}
  </div> <!--/.container -->
</div><!-- /main-wrapper -->
{% include '@tara/template-parts/footer.html.twig' %}
", "themes/custom/mytheme/templates/layout/page--front.html.twig", "C:\\wamp64\\www\\demo_project_drupal\\web\\themes\\custom\\mytheme\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 11, "if" => 15);
        static $filters = array("escape" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
