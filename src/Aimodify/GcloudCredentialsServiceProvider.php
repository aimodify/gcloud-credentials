<?php
namespace Aimodify\GcloudCredentials;

class GcloudCredentialsServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/gcloud_credentials.php' => config_path('gcloud.php'),
        ], "config");
    }
}

