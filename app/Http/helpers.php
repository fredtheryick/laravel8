<?php
/**
 * Helper Functions
 * Included in composer.json
 * Here you can define global variable/function
 */

use App\Models\GeneralInformation;

/**
 * Generate an asset path for the application.
 * @param  string $path
 * @param  bool   $secure
 * @return string
 */
function assetVersioned($path, $secure = null)
{
    return app('url')->asset($path, $secure) . '?v=' . getenv('STATIC_VERSION') ?: '1.0';
}

/**
 * Return get param
 * @param  array $array      input array
 * @param  array $arrayMerge array to be merge
 * @return string            get param
 */
function urlGetParams($array, $arrayMerge = null)
{
    if ($arrayMerge) {
        foreach ($arrayMerge as $key => $value) {
            $array[$key] = $value;
        }
    }
    
    $ret = '';
    
    foreach ($array as $key => $value) {
        if ($value) {
            $ret .= (('' == $ret) ? '?' : '&') . $key . '=' . $value;
        }
    }
    
    return $ret;
}

/**
 * Return General Information
 * @return array $data
 */
function generalInformation()
{
    $data = array(
        'application_name'  => GeneralInformation::where('key', 'application_name')->first()->value,
        'home_url'          => GeneralInformation::where('key', 'home_url')->first()->value,
        'logo_url'          => GeneralInformation::where('key', 'logo_url')->first()->value,
        'telephone'         => GeneralInformation::where('key', 'telephone')->first()->value,
        'mobile_phone'      => GeneralInformation::where('key', 'mobile_phone')->first()->value,
        'email_support'     => GeneralInformation::where('key', 'email_support')->first()->value,
        'fb_link'           => GeneralInformation::where('key', 'facebook_link')->first()->value,
        'ig_link'           => GeneralInformation::where('key', 'instagram_link')->first()->value,
        'fb_name'           => GeneralInformation::where('key', 'facebook_name')->first()->value,
        'ig_name'           => GeneralInformation::where('key', 'instagram_name')->first()->value,
        'copyright'         => GeneralInformation::where('key', 'copyright')->first()->value,
    );
    
    return $data;
}