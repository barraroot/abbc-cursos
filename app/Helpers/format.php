<?php

function formatFilename($str) {
    if($str)
    {
        $str = strip_tags($str);
        $str = preg_replace('/[\r\n\t ]+/', ' ', $str);
        $str = preg_replace('/[\"\*\/\:\<\>\?\'\|]+/', ' ', $str);
        $str = strtolower($str);
        $str = html_entity_decode( $str, ENT_QUOTES, "utf-8" );
        $str = htmlentities($str, ENT_QUOTES, "utf-8");
        $str = preg_replace("/(&)([a-z])([a-z]+;)/i", '$2', $str);
        $str = str_replace(' ', '_', $str);
        $str = rawurlencode($str);
        $str = str_replace('%', '', $str);
        return $str;
    }
    else
        return null;
}

function formatCpf($str)
{
    if($str)
        return substr($str,0,3).'.'.substr($str,3,3).'.'.substr($str,6,3).'-'.substr($str,9);
    else
        return null;
}

function formatCnpj($str)
{
    if($str)
        return substr($str,0,2).'.'.substr($str,2,3).'.'.substr($str,5,3).'/'.substr($str,8,4).'-'.substr($str,12);
    else
        return null;
}

function formatTel($str)
{
    if($str)
        return '('.substr($str,0,2).') '.substr($str,2,5).'-'.substr($str,7);
    else
        return null;
}

function formatCep($str)
{
    if($str)
        return substr($str,0,5).'-'.substr($str,5);
    else
        return null;
}