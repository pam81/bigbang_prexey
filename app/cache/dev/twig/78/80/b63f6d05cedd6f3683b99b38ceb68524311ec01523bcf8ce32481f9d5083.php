<?php

/* BackendAdminBundle:Sucursal:_sucursal.html.twig */
class __TwigTemplate_7880b63f6d05cedd6f3683b99b38ceb68524311ec01523bcf8ce32481f9d5083 extends Twig_Template
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
 <div id='backend_adminbundle_sucursal_nombre_errorloc' class=\"help-inline error\" >";
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
 <div id='backend_adminbundle_sucursal_responsable_errorloc' class=\"help-inline error\" >";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "responsable"), 'errors');
        echo "</div>
  
</div>
</div>

<div class=\"control-group\">

";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "calle"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Calle"));
        echo "
<div class=\"controls\">
 ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "calle"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
 <div id='backend_adminbundle_sucursal_calle_errorloc' class=\"help-inline error\" >";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "calle"), 'errors');
        echo "</div>
  
</div>
</div>

<div class=\"control-group\">

";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numero"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Número"));
        echo "
<div class=\"controls\">
 ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numero"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
 <div id='backend_adminbundle_sucursal_numero_errorloc' class=\"help-inline error\" >";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numero"), 'errors');
        echo "</div>
  
</div>
</div>

<div class=\"control-group\">

";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "piso"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Piso"));
        echo "
<div class=\"controls\">
 ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "piso"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
 <div id='backend_adminbundle_sucursal_piso_errorloc' class=\"help-inline error\" >";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "piso"), 'errors');
        echo "</div>
  
</div>
</div>

<div class=\"control-group\">

";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cp"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Código Postal"));
        echo "
<div class=\"controls\">
 ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cp"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
 <div id='backend_adminbundle_sucursal_cp_errorloc' class=\"help-inline error\" >";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cp"), 'errors');
        echo "</div>
  
</div>
</div>

<div class=\"control-group\">

";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "
<div class=\"controls\">
 ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
 <div id='backend_adminbundle_sucursal_email_errorloc' class=\"help-inline error\" >";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'errors');
        echo "</div>
 
</div>
</div>

<div class=\"control-group\">

";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "telefono"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Teléfono"));
        echo "
<div class=\"controls\">
 ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "telefono"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
 <div id='backend_adminbundle_sucursal_telefono_errorloc' class=\"help-inline error\" >";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "telefono"), 'errors');
        echo "</div>
  
</div>
</div>

<div class=\"control-group\">

";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fax"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Fax"));
        echo "
<div class=\"controls\">
 ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fax"), 'widget', array("attr" => array("class" => "input-xlarge")));
        echo "
 <div id='backend_adminbundle_sucursal_fax_errorloc' class=\"help-inline error\" >";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fax"), 'errors');
        echo "</div>
  
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BackendAdminBundle:Sucursal:_sucursal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 112,  225 => 107,  150 => 63,  134 => 57,  118 => 53,  234 => 100,  216 => 104,  202 => 96,  192 => 93,  181 => 81,  167 => 76,  188 => 88,  124 => 62,  114 => 52,  236 => 126,  205 => 97,  191 => 97,  186 => 95,  153 => 64,  137 => 63,  100 => 33,  126 => 55,  113 => 55,  207 => 97,  198 => 95,  195 => 94,  184 => 86,  180 => 85,  172 => 81,  155 => 75,  127 => 56,  178 => 85,  170 => 77,  161 => 75,  146 => 66,  175 => 83,  165 => 76,  84 => 48,  77 => 20,  53 => 15,  23 => 3,  20 => 1,  104 => 45,  81 => 47,  174 => 84,  160 => 77,  152 => 74,  148 => 69,  110 => 55,  97 => 40,  90 => 46,  76 => 28,  70 => 26,  65 => 20,  34 => 26,  129 => 64,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 111,  241 => 77,  229 => 108,  220 => 99,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 67,  128 => 60,  107 => 45,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 110,  240 => 127,  238 => 85,  235 => 74,  230 => 124,  227 => 123,  224 => 71,  221 => 99,  219 => 105,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 67,  143 => 56,  135 => 68,  119 => 51,  102 => 46,  71 => 24,  67 => 23,  63 => 34,  59 => 11,  38 => 10,  87 => 37,  201 => 96,  196 => 99,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 73,  151 => 70,  142 => 65,  138 => 69,  136 => 70,  121 => 60,  117 => 59,  105 => 35,  91 => 29,  62 => 19,  49 => 14,  28 => 5,  94 => 30,  89 => 36,  85 => 35,  75 => 43,  68 => 25,  56 => 35,  24 => 4,  31 => 25,  26 => 2,  25 => 3,  21 => 2,  19 => 1,  93 => 47,  88 => 38,  78 => 34,  46 => 11,  44 => 11,  27 => 5,  79 => 25,  72 => 36,  69 => 40,  47 => 15,  40 => 10,  37 => 7,  22 => 3,  246 => 90,  157 => 78,  145 => 71,  139 => 59,  131 => 61,  123 => 55,  120 => 50,  115 => 43,  111 => 37,  108 => 46,  101 => 41,  98 => 49,  96 => 48,  83 => 44,  74 => 26,  66 => 25,  55 => 17,  52 => 9,  50 => 29,  43 => 12,  41 => 11,  35 => 3,  32 => 6,  29 => 3,  209 => 82,  203 => 96,  199 => 67,  193 => 91,  189 => 92,  187 => 84,  182 => 85,  176 => 77,  173 => 124,  168 => 71,  164 => 59,  162 => 74,  154 => 71,  149 => 65,  147 => 62,  144 => 69,  141 => 60,  133 => 62,  130 => 56,  125 => 59,  122 => 54,  116 => 60,  112 => 47,  109 => 34,  106 => 49,  103 => 34,  99 => 43,  95 => 43,  92 => 43,  86 => 40,  82 => 29,  80 => 33,  73 => 25,  64 => 38,  60 => 20,  57 => 18,  54 => 17,  51 => 16,  48 => 7,  45 => 30,  42 => 13,  39 => 9,  36 => 10,  33 => 5,  30 => 21,);
    }
}
