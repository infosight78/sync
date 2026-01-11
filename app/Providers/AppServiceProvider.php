<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Repositories\VendorRepository;
use App\Repositories\Contracts\VendorRepositoryInterface;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Filesystem\Filesystem;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

    public function register(): void
    {
        $this->app->bind(
            VendorRepositoryInterface::class,
            VendorRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('vendor_create', function (User $user) {
            return $user->hasPermission('vendor_create');
        });
    }
}
