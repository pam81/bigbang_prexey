<?php

/* BackendAdminBundle:AreaTrabajo:_areaTrabajo.html.twig */
class __TwigTemplate_ee3aeca7acbfa232e4f5f2a634ed6cda65b59ee78c245fb7107e12d93a0bee20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"control-group\">

";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombre"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nombre"));
        echo "
<div class=\"controls\">
 ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombre"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
 <div id='backend_adminbundle_areaTrabajo_nombre_errorloc' class=\"help-inline error\" >";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombre"), 'errors');
        echo "</div>
  
</div>
</div>

<div class=\"control-group\">

";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "responsable"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Responsable"));
        echo "
<div class=\"controls\">
 ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "responsable"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
 <div id='backend_adminbundle_areaTrabajo_responsable_errorloc' class=\"help-inline error\" >";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "responsable"), 'errors');
        echo "</div>
  
</div>
</div>

<div class=\"control-group\">

";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "observaciones"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Observaciones"));
        echo "
<div class=\"controls\">
 ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "observaciones"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
 <div id='backend_adminbundle_areaTrabajo_calle_errorloc' class=\"help-inline error\" >";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "observaciones"), 'errors');
        echo "</div>
  
</div>
</div>

<div class=\"control-group\">

";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sucursal"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Sucursal"));
        echo "
<div class=\"controls\">
";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sucursal"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
    
  <div id='backend_adminbundle_areaTrabajo_sucursal_errorloc' class=\"help-inline error\" >";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sucursal"), 'errors');
        echo "</div>  
</div>
</div>  

";
    }

    public function getTemplateName()
    {
        return "BackendAdminBundle:AreaTrabajo:_areaTrabajo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 104,  226 => 102,  212 => 100,  261 => 112,  225 => 107,  150 => 63,  134 => 53,  118 => 53,  234 => 100,  216 => 104,  202 => 97,  192 => 93,  181 => 81,  167 => 76,  188 => 89,  124 => 52,  114 => 59,  236 => 126,  205 => 97,  191 => 97,  186 => 95,  153 => 64,  137 => 63,  100 => 33,  126 => 55,  113 => 48,  207 => 97,  198 => 95,  195 => 94,  184 => 88,  180 => 85,  172 => 81,  155 => 75,  127 => 56,  178 => 85,  170 => 77,  161 => 75,  146 => 66,  175 => 83,  165 => 76,  84 => 48,  77 => 29,  53 => 15,  23 => 3,  20 => 1,  104 => 45,  81 => 47,  174 => 84,  160 => 77,  152 => 74,  148 => 69,  110 => 55,  97 => 40,  90 => 37,  76 => 28,  70 => 26,  65 => 20,  34 => 5,  129 => 64,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 111,  241 => 77,  229 => 108,  220 => 99,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 67,  128 => 60,  107 => 45,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 110,  240 => 127,  238 => 85,  235 => 74,  230 => 103,  227 => 123,  224 => 71,  221 => 99,  219 => 105,  217 => 75,  208 => 99,  204 => 72,  179 => 84,  159 => 69,  143 => 56,  135 => 68,  119 => 51,  102 => 46,  71 => 27,  67 => 13,  63 => 34,  59 => 11,  38 => 10,  87 => 37,  201 => 96,  196 => 99,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 73,  151 => 63,  142 => 59,  138 => 69,  136 => 56,  121 => 49,  117 => 49,  105 => 35,  91 => 29,  62 => 21,  49 => 14,  28 => 5,  94 => 30,  89 => 36,  85 => 35,  75 => 19,  68 => 25,  56 => 35,  24 => 4,  31 => 4,  26 => 2,  25 => 3,  21 => 2,  19 => 1,  93 => 47,  88 => 38,  78 => 34,  46 => 11,  44 => 5,  27 => 10,  79 => 20,  72 => 36,  69 => 40,  47 => 15,  40 => 4,  37 => 5,  22 => 3,  246 => 90,  157 => 78,  145 => 74,  139 => 72,  131 => 61,  123 => 55,  120 => 50,  115 => 43,  111 => 37,  108 => 46,  101 => 33,  98 => 49,  96 => 48,  83 => 44,  74 => 26,  66 => 25,  55 => 17,  52 => 9,  50 => 29,  43 => 12,  41 => 11,  35 => 3,  32 => 6,  29 => 3,  209 => 82,  203 => 96,  199 => 96,  193 => 91,  189 => 92,  187 => 84,  182 => 85,  176 => 83,  173 => 124,  168 => 71,  164 => 59,  162 => 74,  154 => 71,  149 => 75,  147 => 62,  144 => 69,  141 => 60,  133 => 55,  130 => 54,  125 => 64,  122 => 51,  116 => 60,  112 => 47,  109 => 47,  106 => 49,  103 => 43,  99 => 42,  95 => 43,  92 => 27,  86 => 24,  82 => 29,  80 => 33,  73 => 25,  64 => 12,  60 => 20,  57 => 19,  54 => 17,  51 => 16,  48 => 12,  45 => 30,  42 => 13,  39 => 7,  36 => 10,  33 => 5,  30 => 21,);
    }
}
