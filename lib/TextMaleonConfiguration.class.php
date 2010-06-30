<?php

abstract class TextMaleonConfiguration
{

    abstract public function text($text);

    /**
     * for use external transform
     */
    abstract public function transform();

}