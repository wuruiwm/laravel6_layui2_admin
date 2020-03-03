<?php
/*
 * @Author: 傍晚升起的太阳
 * @QQ: 1250201168
 * @Email: wuruiwm@qq.com
 * @Date: 2020-02-25 16:17:43
 * @LastEditors: 傍晚升起的太阳
 * @LastEditTime: 2020-03-02 11:31:37
 */
function adminConfig($key){
    $data = \Illuminate\Support\Facades\Cache::rememberForever('adminConfig', function(){
        return \App\Models\Configuration::pluck('val','key');
    });
    if(isset($data[$key]) && !empty($data[$key])){
        return $data[$key];
    }else{
        return '';
    }
}