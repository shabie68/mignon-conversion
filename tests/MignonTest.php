<?php

it('can test', function () {
    // expect(true)->toBeTrue();
    $user = "Hello user";
    expect($user)->toStartWith('Hello');
});
