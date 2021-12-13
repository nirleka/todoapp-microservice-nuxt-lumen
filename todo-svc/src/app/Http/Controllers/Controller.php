<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    /**
     * @OA\Info(
     *   title="Todo API",
     *   version="1.0",
     *   @OA\Contact(
     *     email="m.eko.budi.p@gmail.com",
     *     name="Eko Prasetyo"
     *   )
     * )
     */
    public function respondWithToken($token)
    {
        return response()->json([
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => null
        ], 200);
    }
}
