<?php
use App\Models\Setting;
function setting($key){
    $setting = Setting::pluck('value','key')->all();
    return $setting[$key] ?? false;
}
