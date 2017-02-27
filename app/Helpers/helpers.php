<?php
use App\Repositories\Contracts\SettingRepositoryInterface as SettingRepository;

function setting($key, $default = null)
{
    static $settings = [];

    if (array_key_exists($key, $settings)) {
        return $settings[$key];
    }

    $settingRepository = App::make(SettingRepository::class);
    $setting = $settingRepository->findBy('key', $key);

    $value = $setting ? $setting->value : $default;
    $settings[$key] = $value;

    return $value;
}
