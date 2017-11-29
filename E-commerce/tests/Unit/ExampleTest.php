<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use \Cart as Cart;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    /*public function testBasicTest()
    {
        $this->get('/')->assertSee('Welcome to BootsForU');
        
    }*/

     public function it_loads_the_shop_page()
    {
        $this->visit('/shop')
             ->see('BootsForU')
             ->see('Adidas Nemeziz FG');
    }
}
