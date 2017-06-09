<?php

class Response
{
    public function json($code, $message, $data=array())
    {
        if(!is_numeric($code)){
             return json_encode("Code is not number");
        }
        $result = array(
            "code"=>$code,
            "message"=>$message,
            "data"=>$data,
        );
        return json_encode($result);
    }

    public function xml($code, $message, $data=array())
    {
        if(!is_numeric($code)){
            return json_encode("Code is not number");
        }
        $result = array(
            "code"=>$code,
            "message"=>$message,
            "data"=>$data
        );
        $xml = "<?xml version='1.0' coding='UTF-8'?>";
        $xml .= "<root>";
        $xml .= is_array($result)?self::xmlEncode($result):$result;
        $xml .= "</root>";
        return $xml;
    }

    static private function xmlEncode($result)
    {
        $xml = "";
        foreach($result as $key=>$value){
            $attr = "";
            if(is_numeric($key)){
                $attr = " id=".$key;
                $key = "item";
            }
            $xml .= "<{$key}{$attr}>";
            $xml .= is_array($value)?self::xmlEncode($value):$value;
            $xml .= "</{$key}>";
        }
        return $xml;
    }
}