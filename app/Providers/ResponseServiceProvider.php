<?php

namespace App\Providers;

use Illuminate\Http\Response;
use Illuminate\Support\ServiceProvider;

class ResponseServiceProvider extends ServiceProvider
{
    public function register()
    {
        Response::macro('api', function (array $status, ?array $data = null) {
            return array_filter([
                'status' => [
                    'status' => $status['status'],
                    'reason' => $status['reason']
                ],
                'data' => $data
            ]);
        });
    }
}
