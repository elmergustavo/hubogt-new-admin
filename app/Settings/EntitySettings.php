<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class EntitySettings extends Settings
{

    public string $name;
    public string|null $location;
    public string|null $email;
    public string|null $phone;
    public string $nit;
    public string $legal_reason;


    public string $title;
    public string|null $subtitle;
    public string|null $title_column1;
    public string|null $description_column1;
    public string|null $title_column2;
    public string|null $description_column2;
    public string|null $title_column3;
    public string|null $description_column3;

    public string $terms_conditions;
    public string $privacy_policies;
    public string $sales_polices;



    public static function group(): string
    {
        return 'general';
    }
}
