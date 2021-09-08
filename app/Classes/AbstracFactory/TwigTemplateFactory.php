<?php


namespace App\Classes\AbstracFactory;


class TwigTemplateFactory implements TemplateFactory
{

    public function createTitleTemplate(): TitleTemplate
    {
        // TODO: Implement createTitleTemplate() method.
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        // TODO: Implement createPageTemplate() method.
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        // TODO: Implement getRenderer() method.
        return new TwigRenderer();
    }
}
