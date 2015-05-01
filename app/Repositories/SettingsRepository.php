<?php

class SettingsRepository
{

    /**
     * Return a cached array of all settings.
     * @return array - Key/value array of settings.
     */
    public function all()
    {
        return Cache::rememberForever('settings', function() {
            return DB::table('settings')->lists('value', 'key');
        });


    }
}
