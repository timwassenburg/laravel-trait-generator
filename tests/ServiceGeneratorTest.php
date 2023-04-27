<?php

it('can execute make:trait command', function () {
    $this->artisan('make:trait Test')
        ->assertExitCode(0);
});
