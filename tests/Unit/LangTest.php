<?php

use App\Lang\Lang;

it('can get associated language label', function () {
    expect(Lang::from('bn')->label())->toBe('Bangla');
});
