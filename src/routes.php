<?php

Route::group(array('prefix' => 'virtual-machines'), function () {

    Route::get('test', function () {
        return "test";
    });

});

