<?php


namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
class ProviderController extends Controller
{
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function loginWithGoogle()
    {
        try {

            $user = Socialite::driver('google')->user();
            $existingUser = User::where('email', $user->email)->first();

            if($existingUser){
                Auth::login($existingUser);
                return redirect('/');
            }
            else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt($user->password),
                ]);
                Auth::login($createUser);
                return redirect('/');
            }

        } catch (\Throwable $th) {
          throw $th;
       }
    }

    public function logoutWithGoogle()
    {
        Auth::logout();
        return redirect('/');
    }


}
