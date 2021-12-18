<?php

namespace App\Providers;

use App\Repositories\Contracts\OfficeRepositoryInterface;
use App\Repositories\OfficeRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->bind(OfficeRepositoryInterface::class,OfficeRepository::class);
        parent::register();
    }

}
