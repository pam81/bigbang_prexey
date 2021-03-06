<?php

/* BackendUserBundle:User:change.html.twig */
class __TwigTemplate_7fb6007f89556e98acde6d7e2025103249d1e176eb2ecc0d1e5494b8206f622b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "

<form class=\"form-horizontal\" action='' method=\"POST\" name=\"formChange\" id=\"formChange\">
  <fieldset>
    <div id=\"legend\">
      <legend class=\"\">Cambiar Contraseña</legend>
    </div>
    <p>Ingrese una nueva contraseña. </p>
    <div class=\"control-group\">
      <label class=\"control-label\"  for=\"password\">Contraseña</label>
      <div class=\"controls\">
        <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"\" class=\"input-xlarge\">
        <div id='formChange_password_errorloc' class=\"help-inline error\" ></div>
      </div>
      
    </div>

    <div class=\"control-group\">
      <label class=\"control-label\"  for=\"confirm\">Confirmar Contraseña</label>
      <div class=\"controls\">
        <input type=\"password\" id=\"confirm\" name=\"confirm\" placeholder=\"\" class=\"input-xlarge\">
        <div id='formChange_confirm_errorloc' class=\"help-inline error\" ></div>
      </div>
      
    </div>


    <div class=\"control-group\">
      <!-- Button -->
      <div class=\"controls\">
        <input type=\"hidden\" name=\"codigo\" id=\"codigo\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getContext($context, "codigo"), "html", null, true);
        echo "\" />
        <button id=\"btn_change\" type=\"button\" class=\"btn btn-success\" data-url=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("change_pass");
        echo "\">Enviar</button>  
        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"btn btn-link\">Ir a Login del sitio</a>
      </div>
    </div>
  </fieldset>
</form>




";
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        // line 47
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 ";
        // line 48
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1db7934_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1db7934_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1db7934_change_pass_1.js");
            // line 49
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "1db7934"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1db7934") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1db7934.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 51
        echo "
";
    }

    public function getTemplateName()
    {
        return "BackendUserBundle:User:change.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 126,  205 => 105,  191 => 97,  186 => 95,  153 => 77,  137 => 64,  100 => 42,  126 => 56,  113 => 54,  207 => 97,  198 => 95,  195 => 94,  184 => 87,  180 => 86,  172 => 81,  155 => 67,  127 => 59,  178 => 125,  170 => 81,  161 => 118,  146 => 69,  175 => 79,  165 => 79,  84 => 22,  77 => 20,  53 => 18,  23 => 3,  20 => 1,  104 => 42,  81 => 34,  174 => 51,  160 => 77,  152 => 47,  148 => 46,  110 => 50,  97 => 29,  90 => 24,  76 => 37,  70 => 9,  65 => 22,  34 => 5,  129 => 61,  58 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 71,  132 => 61,  128 => 37,  107 => 48,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 127,  238 => 85,  235 => 74,  230 => 124,  227 => 123,  224 => 71,  221 => 99,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 43,  119 => 51,  102 => 46,  71 => 27,  67 => 26,  63 => 15,  59 => 26,  38 => 11,  87 => 25,  201 => 92,  196 => 99,  183 => 82,  171 => 86,  166 => 84,  163 => 62,  158 => 67,  156 => 48,  151 => 71,  142 => 59,  138 => 54,  136 => 56,  121 => 54,  117 => 26,  105 => 44,  91 => 27,  62 => 21,  49 => 14,  28 => 3,  94 => 48,  89 => 47,  85 => 33,  75 => 29,  68 => 35,  56 => 5,  24 => 4,  31 => 4,  26 => 2,  25 => 1,  21 => 2,  19 => 1,  93 => 40,  88 => 38,  78 => 34,  46 => 12,  44 => 11,  27 => 10,  79 => 15,  72 => 36,  69 => 28,  47 => 15,  40 => 10,  37 => 7,  22 => 2,  246 => 90,  157 => 78,  145 => 46,  139 => 45,  131 => 52,  123 => 53,  120 => 27,  115 => 43,  111 => 37,  108 => 36,  101 => 35,  98 => 49,  96 => 36,  83 => 36,  74 => 30,  66 => 24,  55 => 18,  52 => 16,  50 => 53,  43 => 12,  41 => 9,  35 => 3,  32 => 4,  29 => 3,  209 => 82,  203 => 96,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 126,  176 => 88,  173 => 124,  168 => 72,  164 => 59,  162 => 75,  154 => 58,  149 => 51,  147 => 61,  144 => 69,  141 => 67,  133 => 62,  130 => 68,  125 => 36,  122 => 57,  116 => 52,  112 => 51,  109 => 34,  106 => 49,  103 => 32,  99 => 41,  95 => 40,  92 => 43,  86 => 46,  82 => 22,  80 => 31,  73 => 36,  64 => 34,  60 => 20,  57 => 18,  54 => 10,  51 => 15,  48 => 16,  45 => 14,  42 => 11,  39 => 10,  36 => 10,  33 => 4,  30 => 7,);
    }
}
