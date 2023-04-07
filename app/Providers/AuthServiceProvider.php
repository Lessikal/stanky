<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as erviceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends erviceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
