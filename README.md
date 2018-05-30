# Bgaze Parsedown Bundle

> This project is not maintained anymore. Feel free to fork it and upgrade it as you want.

Add support for [parsedown](https://github.com/erusev/parsedown) and [parsedown-extra](https://github.com/erusev/parsedown-extra) in Symfony 2.

Provides :

* Two services: 
    * **parsedown.standart** : parsedown parser. 
    * **parsedown.extra** : parsedown-extra parser (support for [Markdown Extra](http://en.wikipedia.org/wiki/Markdown_Extra)).
* Two twig filter:
    * **md** : parse markdown with standart parser. 
    * **mde** : parse markdown with extra parser. 

## Install

Add the bundle in your *composer.json* :

    "require": {
        "bgaze/parsedown-bundle": "dev-master"
    }

Update your vendors, then enable bundle in *AppKernel.php* :

    new Bgaze\ParsedownBundle\BgazeParsedownBundle(),

## Usage

In twig templates:

    {# Parse markdown using parsedown standart parser #}
    {{ var|md }}
    
    {# Parse markdown using parsedown-extra parser #}
    {{ var|mde }}
    
In PHP :

    // Parse markdown using parsedown standart parser.
    echo $container->get('parsedown.standart')->text($var);
    
    // Parse markdown using parsedown-extra parser.
    echo $container->get('parsedown.extra')->text($var);
