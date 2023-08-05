<?php

namespace App;

trait GeneralTrits
{


    public function Return_Data($key, $vlaue, $success_code, $msg)
    {

        return response()->json([

            'status' => true,
            'success_code' => $success_code,
            'success_message' => $msg,
            $key => $vlaue,



        ]);
    }
    public function Return_Error($error_code = 500, $error_message)
    {

        return response()->json([

            'status' => false,
            'error_code' => $error_code,
            'error_message' => $error_message,


        ]);
    }
    public function Return_Success($success_code, $success_message)
    {

        return response()->json([

            'status' => true,
            'success_code' => $success_code,
            'success_message' => $success_message,


        ]);
    }
}
