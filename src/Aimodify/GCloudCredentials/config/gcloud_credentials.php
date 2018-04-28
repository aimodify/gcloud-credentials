<?php

return [
    'default' => env('GCLOUD_CREDENTIALS_DRIVER', 'file'),

    "drivers" => [
        "file"=> [
            "client_id"=>env("CREDENTIALS_GCLOUD_CLIENT_ID"),
            "client_secret"=>env("CREDENTIALS_GCLOUD_CLIENT_SECRET"),
        ]
    ]
];