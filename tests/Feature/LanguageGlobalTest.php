<?php


use Illuminate\Support\Arr;

it('Contains a list available languages', function () {
    $this->get('/')
    ->assertInertia(function (\Inertia\Testing\AssertableInertia $page){
        $page->where('languages.0.value','en')
        ->where('languages.0.label','English');
    });

});
it('contains all translations', function (){
$this->get('/')->assertInertia(function (\Inertia\Testing\AssertableInertia $page){
    expect(Arr::get($page->toArray(),'props.translations'))->toMatchArray([
        'dashboard.welcome' => 'Welcome'
    ]);
});
});
