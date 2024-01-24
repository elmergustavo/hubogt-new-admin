<?php

use JoelButcher\Socialstream\Providers;

return [
    'middleware' => ['web'],
    'prompt' => 'Or Login Via',
    'providers' => [
        Providers::google(),
        Providers::facebook(),
    ],
    'component' => 'socialstream::components.socialstream',
];
