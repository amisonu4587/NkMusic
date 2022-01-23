<?php

namespace App\Http\Controllers\Font;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Redirect;
use Artisan;



class userAuthController extends Controller
{
    public function create()
    {
        return view('User.auth.login');
    }

    public function userLogin(Request $request)
    {
        $details = User::where('email', request('email'))->first();
           
        if($details)
        {
                $role = $details->role;
                // dd($role);
                if ($role == 1)
                {
                        Log::info($request);
                        if (Auth::attempt(['email' => request('email') , 'password' => request('password') ]))
                        {
                            return redirect('/userDashboard');
                        }
                        else
                        {
                            return Redirect::back()
                                ->with('error', 'Invalid credentials !');
                        }
                }
                else
                {
                    return Redirect::back()
                        ->with('error', 'Invalid credentials !');
                }
            }
            else
            {
                return Redirect::back()
                    ->with('error', 'Invalid credentials !');
            }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/userLogin');
    }


}
