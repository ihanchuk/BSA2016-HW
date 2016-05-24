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

        .numbers{
            display:block;
            margin-botto:20px;
        }

        .numbers li {
            display: inline-block;
            padding: 5px;
            margin: 2px;
            width: 120px;
            background-color: aliceblue;
            line-height: 40px;
            text-align: center;
        }

        blockquote h4{
            margin-top:15px;
            font-style:Italic;
            font-weight:bold;
        }

        .val{
            color:dodgerblue;
        }

    </style>
</head>
<body>

<div class=\"container\">
    <h1 class=\"omework\">Домашнее задание BSA 2016 #1 </h1>
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">Readme:</a></li>
        <li><a data-toggle=\"tab\" href=\"#menu1\">Рандомная цитата</a></li>
        <li><a data-toggle=\"tab\" href=\"#menu2\">Треугольные числа</a></li>
        <li><a data-toggle=\"tab\" href=\"#menu3\">Герои компании Marvell</a></li>
    </ul>

    <div class=\"tab-content\">
        <div id=\"home\" class=\"tab-pane fade in active\">
            <h3>Readme: </h3>
            <p>Раз уж по заданию мы все равно используем <code>Composer</code>, то я решил заодно добавить
                и <code>Twig</code> для удобной обработки вывода.
            </p>
            <p>В задании я использую просстранства имен по <code>PSR-4</code></p>
            <p>Есть 4 основных просстранства имен:</p>
            <ol>
                <li><code>App</code> - класс самого приложения с единственным методом <code>run()</code></li>
                <li><code>Greeting</code> - класс приветствия.</li>
                <li><code>Marvel</code> - это уже просстранства имен для супер героев.
                    Содержит вложенные просстранства имен для героев с учетом города. <br>
                    <code>Marvel\\Azgard\\Thor()</code>
                </li>
                <li>
                    <code>Utils</code> - трейты и классы-хелперы для работы. Содержит хелпер-класс
                    <code>TriangleNumbers</code> в котором есть 2 метода:
                    <ul>
                        <li>
                            <code>getNumbers()</code> генератор треугольных чисел по заданному диапозону
                        </li>
                        <li>
                            <code>getResult()</code> формирующий массив с результатом. Использует
                            <code>getNumbers()</code> как генератор для цикла.
                        </li>
                    </ul>

                    и 2 трейта для работы с героями и цитатами.
                    <ul>
                        <li><code>Utils\\Traits\\Marvel\\InfoTrait</code></li>
                        <li><code>Utils\\Traits\\RandomQuote\\RandomQuote</code></li>
                    </ul>
                </li>
            </ol>
        </div>
        <div id=\"menu1\" class=\"tab-pane fade\">
            <h2>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "greeting", array()), "html", null, true);
        echo "</h2>
            <blockquote>
                <p>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "body", array()), "text", array()), "html", null, true);
        echo "</p>
                <h4>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quote"]) ? $context["quote"] : null), "body", array()), "author", array()), "html", null, true);
        echo "</h4>
            </blockquote>
        </div>
        <div id=\"menu2\" class=\"tab-pane fade\">
            <h3>Треугольные числа</h3>

            <p>
                Треугольные числа генерятся классом <code>\\Utils\\Helpers\\TriangleNumbers</code>
            </p>
            <p>
                Класс  <code>\\Utils\\Helpers\\TriangleNumbers</code> состоит всего из 2 методов:
            <ul>
                <li><code>TriangleNumbers->getNumbers()</code> который по сути всего лиь генератор</li>
                <li><code>TriangleNumbers->getResult()</code> который используя генраторный метод формирует массив результатов.</li>
            </ul>

            </p>

            <h4>stdout:</h4>
            <ul class=\"numbers\">
                ";
        // line 110
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
            // line 111
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
        // line 113
        echo "            </ul>
        </div>
        <div id=\"menu3\" class=\"tab-pane fade\">
            <h3>Герои компании Marvell</h3>
            <p>
                Все герои живут мирно по своим неймэйам.Нэйсмпэйс врхнего уровня <span class=\"val\">Marvel</span>
                Пример создания героя: <code>\$ironChel = new Marvel\\NY\\IronMan();</code>
            </p>
            <p>Все герои наследуются от класса <code>Marvel\\SuperHuman</code></p>
            <p>
                В свою очередь класс <code>SuperHuman</code> содержит трейт <code> \\Utils\\Traits\\Marvel\\InfoTrait</code> который отвечает
                за привествие  героя.
            </p>
            <p>
                Честно говоря, я не особо понял, зачем функция <code>whoami()</code> должна вызываться статически...
                Это порождает много лишней статики...Ну да ладно. <br>
                Пример сообщения с приветствием от героя: <code>\$theMessage = Marvel\\Ontario\\Batman::whoami();</code>
            </p>
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
        return array (  175 => 113,  156 => 111,  139 => 110,  116 => 90,  112 => 89,  107 => 87,  19 => 1,);
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
/*         .numbers{*/
/*             display:block;*/
/*             margin-botto:20px;*/
/*         }*/
/* */
/*         .numbers li {*/
/*             display: inline-block;*/
/*             padding: 5px;*/
/*             margin: 2px;*/
/*             width: 120px;*/
/*             background-color: aliceblue;*/
/*             line-height: 40px;*/
/*             text-align: center;*/
/*         }*/
/* */
/*         blockquote h4{*/
/*             margin-top:15px;*/
/*             font-style:Italic;*/
/*             font-weight:bold;*/
/*         }*/
/* */
/*         .val{*/
/*             color:dodgerblue;*/
/*         }*/
/* */
/*     </style>*/
/* </head>*/
/* <body>*/
/* */
/* <div class="container">*/
/*     <h1 class="omework">Домашнее задание BSA 2016 #1 </h1>*/
/*     <ul class="nav nav-tabs">*/
/*         <li class="active"><a data-toggle="tab" href="#home">Readme:</a></li>*/
/*         <li><a data-toggle="tab" href="#menu1">Рандомная цитата</a></li>*/
/*         <li><a data-toggle="tab" href="#menu2">Треугольные числа</a></li>*/
/*         <li><a data-toggle="tab" href="#menu3">Герои компании Marvell</a></li>*/
/*     </ul>*/
/* */
/*     <div class="tab-content">*/
/*         <div id="home" class="tab-pane fade in active">*/
/*             <h3>Readme: </h3>*/
/*             <p>Раз уж по заданию мы все равно используем <code>Composer</code>, то я решил заодно добавить*/
/*                 и <code>Twig</code> для удобной обработки вывода.*/
/*             </p>*/
/*             <p>В задании я использую просстранства имен по <code>PSR-4</code></p>*/
/*             <p>Есть 4 основных просстранства имен:</p>*/
/*             <ol>*/
/*                 <li><code>App</code> - класс самого приложения с единственным методом <code>run()</code></li>*/
/*                 <li><code>Greeting</code> - класс приветствия.</li>*/
/*                 <li><code>Marvel</code> - это уже просстранства имен для супер героев.*/
/*                     Содержит вложенные просстранства имен для героев с учетом города. <br>*/
/*                     <code>Marvel\Azgard\Thor()</code>*/
/*                 </li>*/
/*                 <li>*/
/*                     <code>Utils</code> - трейты и классы-хелперы для работы. Содержит хелпер-класс*/
/*                     <code>TriangleNumbers</code> в котором есть 2 метода:*/
/*                     <ul>*/
/*                         <li>*/
/*                             <code>getNumbers()</code> генератор треугольных чисел по заданному диапозону*/
/*                         </li>*/
/*                         <li>*/
/*                             <code>getResult()</code> формирующий массив с результатом. Использует*/
/*                             <code>getNumbers()</code> как генератор для цикла.*/
/*                         </li>*/
/*                     </ul>*/
/* */
/*                     и 2 трейта для работы с героями и цитатами.*/
/*                     <ul>*/
/*                         <li><code>Utils\Traits\Marvel\InfoTrait</code></li>*/
/*                         <li><code>Utils\Traits\RandomQuote\RandomQuote</code></li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ol>*/
/*         </div>*/
/*         <div id="menu1" class="tab-pane fade">*/
/*             <h2>{{quote.greeting}}</h2>*/
/*             <blockquote>*/
/*                 <p>{{quote.body.text}}</p>*/
/*                 <h4>{{quote.body.author}}</h4>*/
/*             </blockquote>*/
/*         </div>*/
/*         <div id="menu2" class="tab-pane fade">*/
/*             <h3>Треугольные числа</h3>*/
/* */
/*             <p>*/
/*                 Треугольные числа генерятся классом <code>\Utils\Helpers\TriangleNumbers</code>*/
/*             </p>*/
/*             <p>*/
/*                 Класс  <code>\Utils\Helpers\TriangleNumbers</code> состоит всего из 2 методов:*/
/*             <ul>*/
/*                 <li><code>TriangleNumbers->getNumbers()</code> который по сути всего лиь генератор</li>*/
/*                 <li><code>TriangleNumbers->getResult()</code> который используя генраторный метод формирует массив результатов.</li>*/
/*             </ul>*/
/* */
/*             </p>*/
/* */
/*             <h4>stdout:</h4>*/
/*             <ul class="numbers">*/
/*                 {% for n in numbers %}*/
/*                     <li><b>[{{ loop.index}}] </b> => {{ n}}</li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*         <div id="menu3" class="tab-pane fade">*/
/*             <h3>Герои компании Marvell</h3>*/
/*             <p>*/
/*                 Все герои живут мирно по своим неймэйам.Нэйсмпэйс врхнего уровня <span class="val">Marvel</span>*/
/*                 Пример создания героя: <code>$ironChel = new Marvel\NY\IronMan();</code>*/
/*             </p>*/
/*             <p>Все герои наследуются от класса <code>Marvel\SuperHuman</code></p>*/
/*             <p>*/
/*                 В свою очередь класс <code>SuperHuman</code> содержит трейт <code> \Utils\Traits\Marvel\InfoTrait</code> который отвечает*/
/*                 за привествие  героя.*/
/*             </p>*/
/*             <p>*/
/*                 Честно говоря, я не особо понял, зачем функция <code>whoami()</code> должна вызываться статически...*/
/*                 Это порождает много лишней статики...Ну да ладно. <br>*/
/*                 Пример сообщения с приветствием от героя: <code>$theMessage = Marvel\Ontario\Batman::whoami();</code>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
