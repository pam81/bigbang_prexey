<?php

/* BackendAdminBundle:Modelo:index.html.twig */
class __TwigTemplate_eacbb5531b7b6396e96c363721bf26d8281c4e6a72d6653b33d1a20348a57877 extends Twig_Template
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
        echo "    
    
        <h4>Listado de Modelos </h4>

<div class=\"row-fluid\">
  
  
  <div class=\"span2\">  ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ADDMODELO")) {
            echo " <button class=\"btn btn-primary\" type=\"button\" id=\"new_button\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("modelo_new");
            echo "\" >Nuevo Modelo</button> ";
        }
        echo " </div>
  
    <div class=\"span3\">
     
    <form id=\"custom-search-form\" class=\"form-search form-horizontal pull-right\" action=\"#\">
      <div class=\"input-append span12\">
      <input type=\"text\" class=\"search-query\" name=\"search-query\" id=\"search-query\" placeholder=\"Buscar\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "search"), "html", null, true);
        echo "\">
      <button type=\"button\" id=\"search-button\" class=\"btn\" data-url=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("modelo");
        echo "\" ><i class=\"icon-search\"></i></button>
      </div>
      </form>
    
    
    
    </div>
    
     <div class=\"span2\">
          ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_VIEWMODELO")) {
            echo " <button class=\"btn btn-primary\" type=\"button\" id=\"exportar_button\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("modelo_exportar");
            echo "\" >Exportar </button> ";
        }
        // line 28
        echo "    </div>
    
 </div>
    
    
    
    
    <div class=\"well\">
    <table class=\"table\">
    <thead>
    <tr>
    
    <th ";
        // line 40
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "u.name"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Nombre", "u.name");
        echo "</th>
    <th>Nombre Fábrica</th>
    <th>Variante</th>
    <th ";
        // line 43
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "u.marca"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Marca", "u.marca");
        echo "</th>
    <th style=\"width: 36px;\">Acciones</th>
    </tr>
    </thead>
    <tbody>
     ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagination"));
        foreach ($context['_seq'] as $context["_key"] => $context["modelo"]) {
            // line 49
            echo "   
    
     <tr>
                
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "modelo"), "name")), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "modelo"), "nameManufacture"), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "modelo"), "variante"), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "modelo"), "marca"), "html", null, true);
            echo "</td>
                <td>
                ";
            // line 58
            if ($this->env->getExtension('security')->isGranted("ROLE_MODMODELO")) {
                // line 59
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modelo_edit", array("id" => $this->getAttribute($this->getContext($context, "modelo"), "id"))), "html", null, true);
                echo "\"><i class=\"icon-pencil\"></i></a>
                ";
            }
            // line 61
            echo "                 ";
            if ($this->env->getExtension('security')->isGranted("ROLE_DELMODELO")) {
                // line 62
                echo "                <a href=\"#myModal\" role=\"button\" class=\"confirm-delete\" data-toggle=\"modal\" data-id=";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "modelo"), "id"), "html", null, true);
                echo " ><i class=\"icon-remove\"></i></a>
                
                 ";
            }
            // line 65
            echo "                </td>
    </tr>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modelo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "   
    </tbody>
    </table>
    </div>
    
    <div class=\"pagination\">
     ";
        // line 75
        echo $this->env->getExtension('knp_pagination')->render($this->getContext($context, "pagination"));
        echo "
    
    </div>
    
    <div class=\"modal small hide fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
     <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
      <h3 id=\"myModalLabel\">Confirmar Borrado</h3>
     </div>
     <div class=\"modal-body\">
       <p class=\"error-text\">Esta seguro que desea borrar el modelo?</p>
     </div>
     <div class=\"modal-footer\">
      <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancelar</button>
      <button class=\"btn btn-danger \" data-id=\"0\"  data-url=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("modelo_delete", array("id" => "id"));
        echo "\">Borrar</button>
     </div>
    </div>
    
    
    <form action=\"\" id=\"delete-form\" method=\"post\" ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'enctype');
        echo ">
    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
    <input type=\"hidden\" value=\"DELETE\" name=\"_method\">
    
    </form>
    
    
    ";
    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        // line 103
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 
";
        // line 105
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c34c3ec_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c34c3ec_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c34c3ec_search_index_1.js");
            // line 106
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "c34c3ec"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c34c3ec") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c34c3ec.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 108
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "22315e7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_22315e7_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/22315e7_exportar_entidad_1.js");
            // line 109
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "22315e7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_22315e7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/22315e7.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 110
        echo "      
  
";
    }

    public function getTemplateName()
    {
        return "BackendAdminBundle:Modelo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 110,  245 => 109,  223 => 105,  194 => 88,  190 => 87,  244 => 104,  226 => 92,  212 => 91,  261 => 112,  225 => 107,  150 => 62,  134 => 56,  118 => 44,  234 => 100,  216 => 104,  202 => 97,  192 => 93,  181 => 84,  167 => 76,  188 => 89,  124 => 47,  114 => 59,  236 => 126,  205 => 97,  191 => 89,  186 => 95,  153 => 64,  137 => 63,  100 => 43,  126 => 54,  113 => 48,  207 => 97,  198 => 95,  195 => 94,  184 => 85,  180 => 85,  172 => 81,  155 => 75,  127 => 56,  178 => 85,  170 => 77,  161 => 75,  146 => 72,  175 => 83,  165 => 76,  84 => 38,  77 => 29,  53 => 15,  23 => 3,  20 => 1,  104 => 39,  81 => 47,  174 => 75,  160 => 77,  152 => 74,  148 => 69,  110 => 55,  97 => 42,  90 => 40,  76 => 28,  70 => 27,  65 => 20,  34 => 5,  129 => 64,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 111,  241 => 108,  229 => 108,  220 => 99,  214 => 102,  177 => 65,  169 => 60,  140 => 69,  132 => 67,  128 => 60,  107 => 45,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 110,  240 => 127,  238 => 85,  235 => 74,  230 => 103,  227 => 106,  224 => 71,  221 => 99,  219 => 105,  217 => 103,  208 => 90,  204 => 72,  179 => 84,  159 => 69,  143 => 56,  135 => 68,  119 => 51,  102 => 46,  71 => 27,  67 => 13,  63 => 34,  59 => 18,  38 => 10,  87 => 39,  201 => 96,  196 => 99,  183 => 82,  171 => 81,  166 => 69,  163 => 78,  158 => 71,  156 => 73,  151 => 63,  142 => 71,  138 => 69,  136 => 69,  121 => 49,  117 => 49,  105 => 35,  91 => 29,  62 => 21,  49 => 14,  28 => 5,  94 => 30,  89 => 36,  85 => 35,  75 => 28,  68 => 24,  56 => 35,  24 => 4,  31 => 4,  26 => 2,  25 => 3,  21 => 2,  19 => 1,  93 => 41,  88 => 38,  78 => 34,  46 => 11,  44 => 11,  27 => 10,  79 => 20,  72 => 24,  69 => 40,  47 => 15,  40 => 10,  37 => 5,  22 => 3,  246 => 90,  157 => 65,  145 => 74,  139 => 58,  131 => 66,  123 => 55,  120 => 59,  115 => 43,  111 => 56,  108 => 46,  101 => 33,  98 => 49,  96 => 36,  83 => 30,  74 => 26,  66 => 24,  55 => 17,  52 => 9,  50 => 29,  43 => 12,  41 => 11,  35 => 3,  32 => 4,  29 => 3,  209 => 82,  203 => 95,  199 => 94,  193 => 91,  189 => 92,  187 => 84,  182 => 85,  176 => 83,  173 => 124,  168 => 71,  164 => 59,  162 => 74,  154 => 71,  149 => 75,  147 => 61,  144 => 70,  141 => 59,  133 => 51,  130 => 55,  125 => 64,  122 => 53,  116 => 49,  112 => 48,  109 => 54,  106 => 40,  103 => 43,  99 => 37,  95 => 43,  92 => 35,  86 => 33,  82 => 29,  80 => 30,  73 => 25,  64 => 12,  60 => 20,  57 => 18,  54 => 17,  51 => 15,  48 => 12,  45 => 30,  42 => 12,  39 => 9,  36 => 10,  33 => 4,  30 => 21,);
    }
}
