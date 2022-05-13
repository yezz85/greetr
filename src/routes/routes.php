<?php
use Yezzdesign\TestModule\Greetr;

Route::get('/greet/{name}', function ($sName) {
    $oGreetr = new Greetr();
    return $oGreetr->greet($sName);
});
