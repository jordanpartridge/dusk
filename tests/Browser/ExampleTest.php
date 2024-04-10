<?php

use Laravel\Dusk\Browser;

it('can go to laracasts', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
                ->click('@laravel');
        $browser->waitForLink(5);
        $browser->assertSee('Laracasts');

    });
});
