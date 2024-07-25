<?php

function decodeEncryptedPassword($request): void
{
    $request->password = openssl_decrypt($request->input('password'), 'AES-128-CBC', env("ENCRIPT_CODE"), 0, env("ENCRIPT_CODE"));
// if need uncomment
//    if ($decryptedPassword === false) {
//        return response()->json([
//            'success' => false,
//            'message' => 'Invalid encrypted password'
//        ], 400);
//    }
}
