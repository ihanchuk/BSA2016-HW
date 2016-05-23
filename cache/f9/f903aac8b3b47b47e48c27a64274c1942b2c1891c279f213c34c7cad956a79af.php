<?php

/* index.html */
class __TwigTemplate_a5e575fe6eb425b294ea871c6cc0f994871c202e846d87e767942f1aa11dff3a extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Bootstrap Case</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
    <style type=\"text/css\">

        .numbers li{
            display:inline-block;
            padding:5px;
            margin:2px;
            width:120px;
            height:60px;
            background-color: aliceblue;
        }

        blockquote h4{
            margin-top:15px;
            font-style:Italic;
            font-weight:bold;
        }

    </style>
</head>
<body>

<div class=\"container\">
    <h2>Dynamic Tabs</h2>
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">Home</a></li>
        <li><a data-toggle=\"tab\" href=\"#menu1\">Рандомная цитата</a></li>
        <li><a data-toggle=\"tab\" href=\"#menu2\">Треугольные числа</a></li>
        <li><a data-toggle=\"tab\" href=\"#menu3\">Герои компании Marvell</a></li>
    </ul>

    <div class=\"tab-content\">
        <div id=\"home\" class=\"tab-pane fade in active\">
            <h3>HOME</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div id=\"menu1\" class=\"tab-pane fade\">
            <h3>Рандомная цитата</h3>
            <blockquote>
                <p>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "text", array()), "html", null, true);
        echo "</p>
                <h4>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "author", array()), "html", null, true);
        echo "</h4>
            </blockquote>
        </div>
        <div id=\"menu2\" class=\"tab-pane fade\">
            <h3>Треугольные числа</h3>
            <ul class=\"numbers\">
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["numbers"]) ? $context["numbers"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 56
            echo "                    <li><b>[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "] </b> => ";
            echo twig_escape_filter($this->env, $context["n"], "html", null, true);
            echo "</li>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </ul>
        </div>
        <div id=\"menu3\" class=\"tab-pane fade\">
            <h3>Герои компании Marvell</h3>
            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
    </div>
</div>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 58,  98 => 56,  81 => 55,  72 => 49,  68 => 48,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>Bootstrap Case</title>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*     <style type="text/css">*/
/* */
/*         .numbers li{*/
/*             display:inline-block;*/
/*             padding:5px;*/
/*             margin:2px;*/
/*             width:120px;*/
/*             height:60px;*/
/*             background-color: aliceblue;*/
/*         }*/
/* */
/*         blockquote h4{*/
/*             margin-top:15px;*/
/*             font-style:Italic;*/
/*             font-weight:bold;*/
/*         }*/
/* */
/*     </style>*/
/* </head>*/
/* <body>*/
/* */
/* <div class="container">*/
/*     <h2>Dynamic Tabs</h2>*/
/*     <ul class="nav nav-tabs">*/
/*         <li class="active"><a data-toggle="tab" href="#home">Home</a></li>*/
/*         <li><a data-toggle="tab" href="#menu1">Рандомная цитата</a></li>*/
/*         <li><a data-toggle="tab" href="#menu2">Треугольные числа</a></li>*/
/*         <li><a data-toggle="tab" href="#menu3">Герои компании Marvell</a></li>*/
/*     </ul>*/
/* */
/*     <div class="tab-content">*/
/*         <div id="home" class="tab-pane fade in active">*/
/*             <h3>HOME</h3>*/
/*             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>*/
/*         </div>*/
/*         <div id="menu1" class="tab-pane fade">*/
/*             <h3>Рандомная цитата</h3>*/
/*             <blockquote>*/
/*                 <p>{{quote.text}}</p>*/
/*                 <h4>{{quote.author}}</h4>*/
/*             </blockquote>*/
/*         </div>*/
/*         <div id="menu2" class="tab-pane fade">*/
/*             <h3>Треугольные числа</h3>*/
/*             <ul class="numbers">*/
/*                 {% for n in numbers %}*/
/*                     <li><b>[{{ loop.index}}] </b> => {{ n}}</li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*         <div id="menu3" class="tab-pane fade">*/
/*             <h3>Герои компании Marvell</h3>*/
/*             <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
