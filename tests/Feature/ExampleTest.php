<?php

namespace Tests\Feature;

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
}
