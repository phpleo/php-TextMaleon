<?php
require_once 'PHPUnit/Framework.php';
require_once dirname(__FILE__).'/../lib/TextMaleonParser.class.php';

class TextMaleonParserTest extends PHPUnit_Framework_TestCase
{

    private $_parser = null;

    protected function setUp()
    {
        $this->_parser = $this->getMockForAbstractClass('TextMaleonParser');
    }

    public function testName()
    {
        $this->_parser->setName('sfWiki');

        $this->assertEquals('sfWiki', $this->_parser->getName());
    }

    public function testExistsParserOk()
    {
        $this->_parser->setName('sfWiki');

        $this->assertEquals('sfWiki', $this->_parser->getName());
        $this->assertEquals(true, $this->_parser->has());
    }

    public function testExistsParserFail()
    {
        $this->_parser->setName('someParser');

        $this->assertEquals('someParser', $this->_parser->getName());
        $this->assertEquals(false, $this->_parser->has());
    }

}