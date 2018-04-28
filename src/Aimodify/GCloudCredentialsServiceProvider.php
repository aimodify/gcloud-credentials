<?php
namespace Aimodify\GcloudCredentials;

class GCloudCredentialsServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/gcloud_credentials.php' => config_path('config.php'),
        ], "config");
    }
}

