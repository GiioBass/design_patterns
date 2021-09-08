<?php


namespace App\Classes\AbstracFactory;


abstract class BasePageTemplate implements PageTemplate
{

    protected $titleTemplate;

    public function __construct(TitleTemplate $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
}
