<?php
/**
 * Created by PhpStorm.
 * User: Ryan
 * Date: 2018/11/27
 * Time: 14:25
 */

if (!function_exists('api_success')) {

    function api_success($msg,$code = 0,$data = []){
        $send['code'] = $code;
        $send['msg'] = $msg;
        if (empty($data)) return $send;
        $send['data'] = $data;
        return $send;
    }

}

if (!function_exists('api_error')) {

    function api_error($msg,$code = 1,$data = []){
        $send['code'] = $code;
        $send['msg'] = $msg;
        if (empty($data)) return $send;
        $send['data'] = $data;
        return $send;
    }

}