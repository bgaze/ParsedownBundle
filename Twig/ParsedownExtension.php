<?php

namespace Bgaze\ParsedownBundle\Twig;

class ParsedownExtension extends \Twig_Extension {

    protected $standartParser;
    protected $extraParser;

    public function __construct(\Parsedown $standartParser, \ParsedownExtra $extraParser) {
        $this->standartParser = $standartParser;
        $this->extraParser = $extraParser;
    }

    public function getFilters() {
        return array(
            'md' => new \Twig_Filter_Method($this, 'parsedownStandart', array('is_safe' => array('html'))),
            'mde' => new \Twig_Filter_Method($this, 'parsedownExtra', array('is_safe' => array('html'))),
        );
    }

    public function parsedownStandart($str) {
        return $this->standartParser->text($str);
    }

    public function parsedownExtra($str) {
        return $this->extraParser->text($str);
    }

    public function getName() {
        return 'parsedown';
    }

}
