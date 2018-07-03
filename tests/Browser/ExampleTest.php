<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel')
                ->click('div.top-right.links > a:nth-child(1)')
                ->type('email', 'itvrd2@yandex.ru')
                ->type('password', '123')
                ->press('Login')
                ->assertSee('These cred')
            ;
        });
    }
}
