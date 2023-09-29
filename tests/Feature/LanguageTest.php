<?php

it('set the language currectly', function () {
    $response = $this->post('/language',[
        'language' => $language = 'bn'
    ]);

    $response
        ->assertSessionHas('language',$language)
        ->assertStatus(302);
});
it('set the default language is invalid', function () {
    $response = $this->post('/language',[
        'language' => $language = 'es'
    ]);

    $response
        ->assertSessionHas('language',config('app.locale'))
        ->assertStatus(302);
});

