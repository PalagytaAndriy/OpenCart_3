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

/* default/template/common/cart.twig */
class __TwigTemplate_47c8da4216b4fe40d89af6361a3f02ce81cc50898600da081fff6d87462da920 extends \Twig\Template
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
        // line 1
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
   <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 2
        echo ($context["text_loading"] ?? null);
        echo "\"
           class=\"btn btn-inverse btn-block btn-lg dropdown-toggle\"><i class=\"fa fa-shopping-cart\"></i> <span
            id=\"cart-total\">";
        // line 4
        echo ($context["text_items"] ?? null);
        echo "</span></button>
   <ul class=\"dropdown-menu pull-right\">
      ";
        // line 6
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 7
            echo "         <li>
            <table class=\"table table-striped\">
               ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 10
                echo "                  <tr>
                     <td class=\"text-center\">";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 11)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 11);
                    echo "\"><img
                                 src=\"";
                    // line 12
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 12);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
                    echo "\"
                                 class=\"img-thumbnail\"/></a> ";
                }
                // line 13
                echo "</td>
                     <td class=\"text-left\"><a href=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 14);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
                echo "</a> ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "                           ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 15));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br/>
                              - <small>";
                        // line 16
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 16);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 16);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "                        ";
                }
                // line 18
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 18)) {
                    echo " <br/>
                           - <small>";
                    // line 19
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 19);
                    echo "</small> ";
                }
                echo "</td>
                     <td class=\"text-right\">x ";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 20);
                echo "</td>
                     <td class=\"text-right\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 21);
                echo "</td>
                     <td class=\"text-center\">
                        <button type=\"button\" onclick=\"cart.remove('";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 23);
                echo "');\"
                                title=\"";
                // line 24
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i>
                        </button>
                     </td>
                  </tr>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "               ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 30
                echo "                  <tr>
                     <td class=\"text-center\"></td>
                     <td class=\"text-left\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 32);
                echo "</td>
                     <td class=\"text-right\">x&nbsp;1</td>
                     <td class=\"text-right\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 34);
                echo "</td>
                     <td class=\"text-center text-danger\">
                        <button type=\"button\" onclick=\"voucher.remove('";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 36);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\"
                                class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button>
                     </td>
                  </tr>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            </table>
         </li>
         <li>
            <div>
               <table class=\"table table-bordered\">
                  ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 47
                echo "                     <tr>
                        <td class=\"text-right\"><strong>";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 48);
                echo "</strong></td>
                        <td class=\"text-right\">";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 49);
                echo "</td>
                     </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "               </table>
               <p class=\"text-right\"><a href=\"";
            // line 53
            echo ($context["cart"] ?? null);
            echo "\"><strong><i class=\"fa fa-shopping-cart\"></i> ";
            echo ($context["text_cart"] ?? null);
            echo "
                     </strong></a>&nbsp;&nbsp;&nbsp;<a href=\"";
            // line 54
            echo ($context["checkout"] ?? null);
            echo "\"><strong><i
                              class=\"fa fa-share\"></i> ";
            // line 55
            echo ($context["text_checkout"] ?? null);
            echo "</strong></a></p>
            </div>
         </li>
      ";
        } else {
            // line 59
            echo "         <li>
            <p class=\"text-center\">";
            // line 60
            echo ($context["text_empty"] ?? null);
            echo "</p>
         </li>
      ";
        }
        // line 63
        echo "   </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 63,  225 => 60,  222 => 59,  215 => 55,  211 => 54,  205 => 53,  202 => 52,  193 => 49,  189 => 48,  186 => 47,  182 => 46,  175 => 41,  162 => 36,  157 => 34,  152 => 32,  148 => 30,  143 => 29,  132 => 24,  128 => 23,  123 => 21,  119 => 20,  111 => 19,  106 => 18,  103 => 17,  94 => 16,  87 => 15,  81 => 14,  78 => 13,  69 => 12,  63 => 11,  60 => 10,  56 => 9,  52 => 7,  50 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/cart.twig", "");
    }
}
