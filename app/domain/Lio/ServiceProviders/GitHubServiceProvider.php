<?php namespace Lio\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class GitHubServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton('github', function($app) {
            return \OAuth::consumer('GitHub');
        });

        $this->app->singleton('Lio\GitHub\GistEmbedFormatter', function($app) {
            return new \Lio\GitHub\GistEmbedFormatter;
        });
    }

    public function provides()
    {
        return ['github', 'Lio\GitHub\GistEmbedFormatter'];
    }
}