<?php
/*
    get('{locale?}', ['as' => 'index', 'uses' => '\App\Http\Controllers\Site\HomeController@index'])
        ->where('locale', ($c = config('app.locales')) ? $c->implode('|') : '');
*/

require storage_path('telenok/route/route.php');
