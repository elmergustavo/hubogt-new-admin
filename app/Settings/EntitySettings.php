<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class EntitySettings extends Settings
{

    public string $title;
    public string $subtitle;
    public string $title_column1;
    public string $description_column1;
    public string $title_column2;
    public string $description_column2;
    public string $title_column3;
    public string $description_column3;



    public static function group(): string
    {
        return 'general';
    }
}
