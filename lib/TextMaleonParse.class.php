<?php

class TextMaleonParse
{

    private $_parseName = null;
    private $_folderPath = null;
    private $_classPath = null;

    public function __construct()
    {
        $this->initialize();
    }

    private function initialize()
    {
        $base = (getcwd()) ? dirname(getcwd()).'/lib' : dirname(__FILE__);

        $this->_folderPath = $base.'/parse/%s';
        $this->_classPath = $base.'/parse/%s/%s.class.php';
    }

    public function has($name = null)
    {
        $name = ($name == null) ? $this->getParseName() : $name;
        $file = file_exists(sprintf($this->_folderPath, $name));
        $class = file_exists(sprintf($this->_classPath, $name, $name));

        return ($file && $class);
    }

    //
    // getters & setter
    //

    // {{{

    public function setParseName($v)
    {
        $this->_parseName = $v;
    }

    public function getParseName()
    {
        return $this->_parseName;
    }

    // }}}

}