<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.title', '');
        $this->migrator->add('general.subtitle', '');
        $this->migrator->add('general.title_column1', '');
        $this->migrator->add('general.description_column1', '');
        $this->migrator->add('general.title_column2', '');
        $this->migrator->add('general.description_column2', '');
        $this->migrator->add('general.title_column3', '');
        $this->migrator->add('general.description_column3', '');
    }
};
