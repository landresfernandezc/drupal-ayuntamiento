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

/* modules/contrib/eu_cookie_compliance/templates/eu_cookie_compliance_popup_info.html.twig */
class __TwigTemplate_824661e2b97ef1993f12471ddb51bac6 extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        yield "
";
        // line 41
        if (($context["privacy_settings_tab_label"] ?? null)) {
            // line 42
            yield "  <button type=\"button\" class=\"eu-cookie-withdraw-tab\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["privacy_settings_tab_label"] ?? null), 42, $this->source), "html", null, true);
            yield "</button>
";
        }
        // line 44
        $context["classes"] = ["eu-cookie-compliance-banner", "eu-cookie-compliance-banner-info", ("eu-cookie-compliance-banner--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 47
($context["method"] ?? null), 47, $this->source)))];
        // line 49
        yield "<div aria-labelledby=\"popup-text\" ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
        yield ">
  <div class=\"popup-content info eu-cookie-compliance-content\">
    ";
        // line 51
        if (($context["close_button_enabled"] ?? null)) {
            // line 52
            yield "      <button class=\"eu-cookie-compliance-close-button\">Close</button>
    ";
        }
        // line 54
        yield "    <div id=\"popup-text\" class=\"eu-cookie-compliance-message\" role=\"document\">
      ";
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 55, $this->source), "html", null, true);
        yield "
      ";
        // line 56
        if (($context["more_info_button"] ?? null)) {
            // line 57
            yield "        <button type=\"button\" class=\"find-more-button eu-cookie-compliance-more-button\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more_info_button"] ?? null), 57, $this->source), "html", null, true);
            yield "</button>
      ";
        }
        // line 59
        yield "    </div>

    ";
        // line 61
        if (($context["cookie_categories"] ?? null)) {
            // line 62
            yield "      <div id=\"eu-cookie-compliance-categories\" class=\"eu-cookie-compliance-categories\">
        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["cookie_categories"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 64
                yield "          <div class=\"eu-cookie-compliance-category\">
            <div>
              <input type=\"checkbox\" name=\"cookie-categories\" class=\"eu-cookie-compliance-category-checkbox\" id=\"cookie-category-";
                // line 66
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 66, $this->source), "html", null, true);
                yield "\"
                     value=\"";
                // line 67
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 67, $this->source), "html", null, true);
                yield "\"
                     ";
                // line 68
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "checkbox_default_state", [], "any", false, false, true, 68), ["checked", "required"])) {
                    yield " checked ";
                }
                // line 69
                yield "                     ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "checkbox_default_state", [], "any", false, false, true, 69) == "required")) {
                    yield " disabled ";
                }
                yield " >
              <label for=\"cookie-category-";
                // line 70
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 70, $this->source), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "label", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                yield "</label>
            </div>
            ";
                // line 72
                if (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, true, 72)) {
                    // line 73
                    yield "              <div class=\"eu-cookie-compliance-category-description\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                    yield "</div>
            ";
                }
                // line 75
                yield "          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "        ";
            if (($context["save_preferences_button_label"] ?? null)) {
                // line 78
                yield "          <div class=\"eu-cookie-compliance-categories-buttons\">
            <button type=\"button\"
                    class=\"eu-cookie-compliance-save-preferences-button ";
                // line 80
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["olivero_secondary_button_classes"] ?? null), 80, $this->source), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["save_preferences_button_label"] ?? null), 80, $this->source), "html", null, true);
                yield "</button>
          </div>
        ";
            }
            // line 83
            yield "      </div>
    ";
        }
        // line 85
        yield "
    <div id=\"popup-buttons\" class=\"eu-cookie-compliance-buttons";
        // line 86
        if (($context["cookie_categories"] ?? null)) {
            yield " eu-cookie-compliance-has-categories";
        }
        yield "\">
      ";
        // line 87
        if (($context["tertiary_button_label"] ?? null)) {
            // line 88
            yield "        <button type=\"button\" class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tertiary_button_class"] ?? null), 88, $this->source), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tertiary_button_label"] ?? null), 88, $this->source), "html", null, true);
            yield "</button>
      ";
        }
        // line 90
        yield "      <button type=\"button\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary_button_class"] ?? null), 90, $this->source), "html", null, true);
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["agree_button"] ?? null), 90, $this->source), "html", null, true);
        yield "</button>
      ";
        // line 91
        if (($context["secondary_button_label"] ?? null)) {
            // line 92
            yield "        <button type=\"button\" class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_button_class"] ?? null), 92, $this->source), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_button_label"] ?? null), 92, $this->source), "html", null, true);
            yield "</button>
      ";
        }
        // line 94
        yield "    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["privacy_settings_tab_label", "method", "attributes", "close_button_enabled", "message", "more_info_button", "cookie_categories", "save_preferences_button_label", "olivero_secondary_button_classes", "tertiary_button_label", "tertiary_button_class", "primary_button_class", "agree_button", "secondary_button_label", "secondary_button_class"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/eu_cookie_compliance/templates/eu_cookie_compliance_popup_info.html.twig";
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
        return array (  194 => 94,  186 => 92,  184 => 91,  177 => 90,  169 => 88,  167 => 87,  161 => 86,  158 => 85,  154 => 83,  146 => 80,  142 => 78,  139 => 77,  132 => 75,  126 => 73,  124 => 72,  117 => 70,  110 => 69,  106 => 68,  102 => 67,  98 => 66,  94 => 64,  90 => 63,  87 => 62,  85 => 61,  81 => 59,  75 => 57,  73 => 56,  69 => 55,  66 => 54,  62 => 52,  60 => 51,  54 => 49,  52 => 47,  51 => 44,  45 => 42,  43 => 41,  40 => 40,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/eu_cookie_compliance/templates/eu_cookie_compliance_popup_info.html.twig", "/var/www/html/web/modules/contrib/eu_cookie_compliance/templates/eu_cookie_compliance_popup_info.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 41, "set" => 44, "for" => 63);
        static $filters = array("escape" => 42, "clean_class" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'clean_class'],
                [],
                $this->source
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
