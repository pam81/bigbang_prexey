<?php

/* BackendAdminBundle:AreaTrabajo:edit.html.twig */
class __TwigTemplate_55d05f40550d8ff3ee00ec42d4e1281630a5cb4a5e8fb1f2e1a6194480d7e870 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::backend.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "<h3>Editar Area de Trabajo</h3>    
    
    <div class=\"well\">
    <div id=\"myTabContent\" class=\"tab-content\">
    <div class=\"tab-pane active in\" id=\"home\">
    <form class=\"form-horizontal\" id=\"tab\" method=\"post\" novalidate  ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("areaTrabajo_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" >
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
     ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
     
     
   
    
     ";
        // line 16
        $this->env->loadTemplate("BackendAdminBundle:AreaTrabajo:_areaTrabajo.html.twig")->display($context);
        echo " 
        
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

    <div class=\"control-group\">
    <!-- Button -->
    <div class=\"controls\">
    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-ok icon-white\"></i>Actualizar</button>
    <button type=\"button\" class=\"btn btn-inverse\" data-url=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("areaTrabajo");
        echo "\" ><i class=\"icon-chevron-left icon-white\"></i> Back</button>
    ";
        // line 25
        if ($this->env->getExtension('security')->isGranted("ROLE_DELSUCURSAL")) {
            // line 26
            echo "  
    <a href=\"#myModal\" class=\"btn btn-danger confirm-delete\" role=\"button\" data-toggle=\"modal\" data-id=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "\" ><i class=\"icon-remove icon-white\"></i>Borrar</a>
    
    ";
        }
        // line 30
        echo "    
    </div>
    
    
    </div>
    
    
    
    
    
    </form>
    </div>
    
    </div>
     </div>
    
    <div class=\"modal small hide fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
     <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
      <h3 id=\"myModalLabel\">Confirmar Borrado</h3>
     </div>
     <div class=\"modal-body\">
       <p class=\"error-text\">¿Esta seguro que desea borrar los datos del area de trabajo?</p>
     </div>
     <div class=\"modal-footer\">
      <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancelar</button>
      <button class=\"btn btn-danger \" data-id=\"0\"  data-url=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("areaTrabajo_delete", array("id" => "id"));
        echo "\" >Borrar</button>
     </div>
    </div>

<form action=\"\" id=\"delete-form\" method=\"post\" ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'enctype');
        echo ">
    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
    <input type=\"hidden\" value=\"DELETE\" name=\"_method\">
    
    </form>

    
";
    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        // line 69
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
        // line 71
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bf55089_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bf55089_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bf55089_validate_t_deposito_1.js");
            // line 72
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "bf55089"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bf55089") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bf55089.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "BackendAdminBundle:AreaTrabajo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 104,  226 => 102,  212 => 100,  261 => 112,  225 => 107,  150 => 63,  134 => 53,  118 => 60,  234 => 100,  216 => 104,  202 => 97,  192 => 93,  181 => 81,  167 => 76,  188 => 89,  124 => 52,  114 => 59,  236 => 126,  205 => 97,  191 => 97,  186 => 95,  153 => 64,  137 => 63,  100 => 33,  126 => 55,  113 => 48,  207 => 97,  198 => 95,  195 => 94,  184 => 88,  180 => 85,  172 => 81,  155 => 75,  127 => 56,  178 => 85,  170 => 77,  161 => 75,  146 => 72,  175 => 83,  165 => 76,  84 => 48,  77 => 27,  53 => 15,  23 => 3,  20 => 1,  104 => 45,  81 => 47,  174 => 84,  160 => 77,  152 => 74,  148 => 69,  110 => 55,  97 => 40,  90 => 37,  76 => 28,  70 => 26,  65 => 20,  34 => 5,  129 => 64,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 111,  241 => 77,  229 => 108,  220 => 99,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 67,  128 => 60,  107 => 45,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 110,  240 => 127,  238 => 85,  235 => 74,  230 => 103,  227 => 123,  224 => 71,  221 => 99,  219 => 105,  217 => 75,  208 => 99,  204 => 72,  179 => 84,  159 => 69,  143 => 56,  135 => 68,  119 => 51,  102 => 46,  71 => 27,  67 => 13,  63 => 34,  59 => 18,  38 => 10,  87 => 37,  201 => 96,  196 => 99,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 73,  151 => 63,  142 => 71,  138 => 69,  136 => 69,  121 => 49,  117 => 49,  105 => 35,  91 => 29,  62 => 21,  49 => 14,  28 => 3,  94 => 30,  89 => 36,  85 => 35,  75 => 19,  68 => 24,  56 => 35,  24 => 4,  31 => 4,  26 => 2,  25 => 3,  21 => 2,  19 => 1,  93 => 47,  88 => 38,  78 => 34,  46 => 11,  44 => 7,  27 => 10,  79 => 20,  72 => 25,  69 => 40,  47 => 15,  40 => 6,  37 => 5,  22 => 3,  246 => 90,  157 => 78,  145 => 74,  139 => 72,  131 => 61,  123 => 55,  120 => 50,  115 => 43,  111 => 56,  108 => 46,  101 => 33,  98 => 49,  96 => 48,  83 => 30,  74 => 26,  66 => 25,  55 => 17,  52 => 9,  50 => 29,  43 => 12,  41 => 11,  35 => 3,  32 => 4,  29 => 3,  209 => 82,  203 => 96,  199 => 96,  193 => 91,  189 => 92,  187 => 84,  182 => 85,  176 => 83,  173 => 124,  168 => 71,  164 => 59,  162 => 74,  154 => 71,  149 => 75,  147 => 62,  144 => 69,  141 => 60,  133 => 68,  130 => 54,  125 => 64,  122 => 61,  116 => 60,  112 => 47,  109 => 47,  106 => 49,  103 => 43,  99 => 42,  95 => 43,  92 => 27,  86 => 24,  82 => 29,  80 => 33,  73 => 25,  64 => 12,  60 => 20,  57 => 19,  54 => 16,  51 => 16,  48 => 12,  45 => 30,  42 => 13,  39 => 9,  36 => 10,  33 => 4,  30 => 21,);
    }
}
