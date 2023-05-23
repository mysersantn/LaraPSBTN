<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Fortify;
use App\Models\Mkantor as ModelMkantor;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);

        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->auth)
                ->orWhere('name', $request->auth)
                ->first();

            if ($user && Hash::check($request->password, $user->password)) {
                return $user;
            }
        });

        Fortify::registerView(function () {
            $cabang = ModelMkantor::where('j_kantor', 'C')->orderby('kd_kantor')->get();
            return view('auth.register', compact('cabang'));
        });
    }

    /**
     * Configure the permissions that are available within the application.
     */
    protected function configurePermissions(): void
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions(['create', 'read', 'update', 'delete']);
    }
}
