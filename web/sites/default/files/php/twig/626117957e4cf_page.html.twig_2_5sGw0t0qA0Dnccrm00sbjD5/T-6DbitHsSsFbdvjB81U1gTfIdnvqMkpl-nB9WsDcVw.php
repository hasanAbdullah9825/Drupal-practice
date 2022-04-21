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

/* themes/custom/mytheme/templates/layout/page.html.twig */
class __TwigTemplate_5370104e67249d3911c0c16a3dd08b94bb0671c6bbc6a5c7d58c3b05c218361f extends \Twig\Template
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
        // line 52
        $this->loadTemplate("@tara/template-parts/header.html.twig", "themes/custom/mytheme/templates/layout/page.html.twig", 52)->display($context);
        // line 53
        $this->loadTemplate("@tara/template-parts/breadcrumb_region.html.twig", "themes/custom/mytheme/templates/layout/page.html.twig", 53)->display($context);
        // line 54
        $this->loadTemplate("@tara/template-parts/highlighted.html.twig", "themes/custom/mytheme/templates/layout/page.html.twig", 54)->display($context);
        // line 55
        echo "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
  <div class=\"main-container\">
    <main id=\"main\" class=\"page-content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 60
        echo "      ";
        $this->loadTemplate("@tara/template-parts/content_top.html.twig", "themes/custom/mytheme/templates/layout/page.html.twig", 60)->display($context);
        // line 61
        echo "         
         ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "welcome_mesage", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "
      ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
       
  
      ";
        // line 66
        $this->loadTemplate("@tara/template-parts/content_bottom.html.twig", "themes/custom/mytheme/templates/layout/page.html.twig", 66)->display($context);
        // line 67
        echo "    </main>
    ";
        // line 68
        $this->loadTemplate("@tara/template-parts/left_sidebar.html.twig", "themes/custom/mytheme/templates/layout/page.html.twig", 68)->display($context);
        // line 69
        echo "    ";
        $this->loadTemplate("@tara/template-parts/right_sidebar.html.twig", "themes/custom/mytheme/templates/layout/page.html.twig", 69)->display($context);
        // line 70
        echo "  </div> ";
        // line 71
        echo "  </div> ";
        // line 72
        echo "</div>";
        // line 73
        $this->loadTemplate("@tara/template-parts/footer.html.twig", "themes/custom/mytheme/templates/layout/page.html.twig", 73)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 73,  81 => 72,  79 => 71,  77 => 70,  74 => 69,  72 => 68,  69 => 67,  67 => 66,  61 => 63,  57 => 62,  54 => 61,  51 => 60,  45 => 55,  43 => 54,  41 => 53,  39 => 52,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Tara's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header_top: Items for the header top region.
 * - page.site_branding: Items (logo / site name / site slogan) for the site branding region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.search_box: Items for the full page search region.
 * - page.breadcrumb: Items for the breadcrumb region.
 * - page.highlighted: Items for the highlighted region.
 * - page.content: The main content of the current page.
 * - page.content_top: Items for the content top region.
 * - page.content_bottom: Items for the content bottom region.
 * - page.sidebar_first: Items for the first / left sidebar.
 * - page.sidebar_second: Items for the second / right sidebar.
 * - page.footer_top: Items for the footer top region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_bottom: Items for the footer bottom region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% include '@tara/template-parts/header.html.twig' %}
{% include '@tara/template-parts/breadcrumb_region.html.twig' %}
{% include '@tara/template-parts/highlighted.html.twig' %}
<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
  <div class=\"main-container\">
    <main id=\"main\" class=\"page-content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}
      {% include '@tara/template-parts/content_top.html.twig' %}
         
         {{page.welcome_mesage}}
      {{ page.content }}
       
  
      {% include '@tara/template-parts/content_bottom.html.twig' %}
    </main>
    {% include '@tara/template-parts/left_sidebar.html.twig' %}
    {% include '@tara/template-parts/right_sidebar.html.twig' %}
  </div> {# /.main-container #}
  </div> {# /.container #}
</div>{# /main-wrapper #}
{% include '@tara/template-parts/footer.html.twig' %}
", "themes/custom/mytheme/templates/layout/page.html.twig", "C:\\wamp64\\www\\demo_project_drupal\\web\\themes\\custom\\mytheme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 52);
        static $filters = array("escape" => 62);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
