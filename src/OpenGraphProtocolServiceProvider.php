<?php

namespace FilippoToso\OpenGraphProtocol;

use Illuminate\Support\ServiceProvider;
use ChrisKonnertz\OpenGraph\OpenGraph;
use Illuminate\Support\Facades\Blade;

class OpenGraphProtocolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('opengraphprotocol', function () {
            return new OpenGraph;
        });

        Blade::directive('ogp', function () {
            return "<?php echo (\\FilippoToso\\OpenGraphProtocol\\OpenGraphProtocolFacade::renderTags()); ?>";
        });
    }
}
