<?php

function front_css($file){
    return asset('public/css/'.$file);
}
function front_js($file){
    return asset('public/js/'.$file);
}
function front_image($file){
    return asset('public/images/'.$file);
}
function front_plugin($file){
    return asset('public/plugins/'.$file);
}
function isCurrentRoute($name){
    return request()->route()->getName()==$name?true:false;
}