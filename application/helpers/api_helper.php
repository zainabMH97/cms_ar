<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function returnError( $errNum , $msg, $ajx )
    {
        $myObj=new stdClass();
        $myObj->status = false;
        $myObj->errNum = $errNum;
        $myObj->msg = $msg;
        if($ajx==1){

            return  $myJSON = json_encode($myObj,JSON_UNESCAPED_UNICODE);
        }
        else{
            echo $myJSON = json_encode($myObj,JSON_UNESCAPED_UNICODE);
        }
    }

    function returnSuccess( $errNum = "S000" , $msg = "" ,$ajx)
    {
        $myObj=new stdClass();
        $myObj->status = true;
        $myObj->errNum = $errNum;
        $myObj->msg = $msg;
        if($ajx==1){

            return  $myJSON = json_encode($myObj,JSON_UNESCAPED_UNICODE);
        }else{
            echo $myJSON=json_encode($myObj,JSON_UNESCAPED_UNICODE);
        }
    }
     function returnData($key, $value, $msg = "",$ajx)
    {
        
        $myObj=new stdClass();
        $myObj->status = true;
        $myObj->errNum = "S000";
        $myObj->msg = $msg;
        $myObj->$key = $value;

        if($ajx==1){

            return  $myObj ;
        }else{
            print_r($myObj);
        }
    }
