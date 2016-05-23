<?php
namespace App;
require_once '/vendor/autoload.php';
use Utils\Helpers;
use Quotes;

class BaseApp{

    public function __construct()
    {
        $this->loader = new \Twig_Loader_Filesystem('templates');
        $this->twig = new \Twig_Environment($this->loader,[
            'cache' => 'cache',
            'auto_reload'=>true,
        ]);

        $this->template = $this->twig->loadTemplate('index.html');

    }

    public function run(){
        /**
         *
         */

        $data = [];

        $numbersGenerator = new Helpers\TriangleNumbers(15);
        $data["numbers"]= $numbersGenerator->getResult();

        $quote = (new Quotes\Quotes())->getRandomQuote();
        $data["quote"] =  $quote;

        echo $this->template->render($data);
    }
}