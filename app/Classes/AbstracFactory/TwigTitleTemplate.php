<?php


namespace App\Classes\AbstracFactory;


class TwigTitleTemplate implements TitleTemplate
{

    public function getTemplateString(): string
    {
        // TODO: Implement getTemplateString() method.
        return "<h1>{{ title }}</h1>";
    }
}
