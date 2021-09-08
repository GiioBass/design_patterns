<?php

namespace Tests\Feature;

use App\Classes\AbstracFactory\Page;
use App\Classes\AbstracFactory\PHPTemplateFactory;
use App\Classes\AbstracFactory\TwigTemplateFactory;
use App\Classes\Factory\FacebookPoster;
use App\Classes\Factory\LinkedInPoster;
use App\Classes\Factory\MainFactory;
use Tests\TestCase;

class ExampleTest extends TestCase
{
   public function testFactory(){
       (new MainFactory)->clientCode(new FacebookPoster("john_smith", "******"));
//       (new MainFactory)->clientCode(new LinkedInPoster("john_smith@example.com", "******"));
   }

   public function testAbstractFactory(){
       $page = new Page('Sample page', 'This it the body.');

       echo "Testing actual rendering with the PHPTemplate factory:\n";
       echo $page->render(new TwigTemplateFactory());
   }
}
