<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


if (!function_exists('getmsg')) {

    function getmsg($msgId)
    {
        $CI = &get_instance();
        $data =  $CI->db->where('id',$msgId)->get('chat')->row();
        return $data;
    }
    
}
?>