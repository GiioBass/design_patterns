<?php


namespace App\Classes\AbstracFactory;


interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}
