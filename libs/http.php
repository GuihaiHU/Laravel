<?php

function respJsonOk($data, $cookie=null)
{
    $response = response()->json([
        "data" => $data,
        "message" => "success",
    ]);
    if ($cookie) {
        $response->cookie(...$cookie);
    }
    return $response;
}

function respJsonFail($message, $code)
{
    return response([
        'data' => null,
        'message' => $message
    ], $code);
}
