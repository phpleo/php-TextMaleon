<?php

abstract class TextMaleonParser
{

    private $_name = null;
    private $_folderPath = null;
    private $_classPath = null;

    public function __construct()
    {
        $this->initialize();
    }

    private function initialize()
    {
        $base = (getcwd()) ? dirname(getcwd()).'/lib' : dirname(__FILE__);

        $this->_folderPath = $base.'/parser/%s';
        $this->_classPath = $base.'/parser/%s/%s.class.php';
    }

    // {{{ has

    public function has()
    {
        return ($this->hasFolder() && $this->hasClass());
    }

    public function hasFolder()
    {
        return file_exists(sprintf($this->_folderPath, $this->getName()));
    }

    public function hasClass()
    {
        return file_exists(sprintf($this->_classPath, $this->getName(), $this->getName()));
    }

    // }}}

    public function errors()
    {
        if (!$this->hasFolder())
        {
            throw new Exception(sprintf('%s parser "folder" no exists', $this->getName()));
        }
        elseif(!hasClass())
        {
            throw new Exception(sprintf('%s parser "class" no exists', $this->getName()));
        }
    }

    //
    // getters & setter
    //

    // {{{

    public function setName($v)
    {
        $this->_name = $v;
    }

    public function getName()
    {
        return $this->_name;
    }

    // }}}

}