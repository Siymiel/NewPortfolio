<?php

if(!function_exists('is_active_front')) {
    function is_active_front($uri) {
        return request()->is($uri) ? 'border-b-2 border-red-400' : '';
    }
}