<?php

namespace App\Providers;
use App\Gates\AdminGate;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        // Gate::define('isAdmin', function ($user){
        //     if($user->email == 'admin@admin.com')
        //     {
        //         return true;
        //     }
        //     else{
        //         return false;
        //     }
        // });

        Gate::define('isAdmin', [AdminGate::class, 'checkAdmin']);
        
    }
}
