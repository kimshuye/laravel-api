<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;

/**
 * Class PingController.
 *
 * @author Jose Fonseca <jose@ditecnologia.com>
 */
class PingController extends Controller
{

    /**
     * Responds with a status for heath check.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json([
            'status' => 'ok',
            'timestamp' => Carbon::now(),
        ]);
    }
}
