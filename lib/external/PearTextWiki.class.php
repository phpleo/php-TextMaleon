<?php

/**
 * Use Pear package "text_wiki" for transform text wiki
 * to xhtml
 */
class PearTextWiki
{

    /**
     * transform the wiki text.
     *
     * @param  string $text
     * @param  array  $rules
     * @return Text_Wiki
     */
    public function execute($text, $rules = null)
    {
        $wiki = new Text_Wiki($rules);

        return $wiki->transform($text);
    }

}