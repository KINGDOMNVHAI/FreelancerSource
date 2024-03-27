<?php
namespace App\Ultis;

use Illuminate\Support\ServiceProvider;

class StringUltis extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     * https://regex101.com/
     * @return void
     */
    public function __construct()
    {

    }

    public function removeSpecialCharacter($string) {
        $string = str_replace('%', ' ', $string); // Replaces all spaces with hyphens.
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    }
}
