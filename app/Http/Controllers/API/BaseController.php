<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller as Controller;

/**
 * @OA\Info(title="Satellite Web Service", version="0.1")
 */

class BaseController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public static function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];
        return  json_decode(json_encode( $response, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES));
        //return response()->json($response, 200);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];


        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }

        return  json_decode(json_encode( $response, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES));
        return response()->json($response, $code);
    }
}
