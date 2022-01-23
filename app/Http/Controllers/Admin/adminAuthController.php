<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Redirect;
use Artisan;



class adminAuthController extends Controller
{
    public function create()
    {
        return view('Admin.auth.login');
    }

    public function adminLogin(Request $request)
    {
        $details = User::where('email', request('email'))->first();
           
        if($details)
        {
                $role = $details->role;
                if ($role == 2)
                {
                        Log::info($request);
                        if (Auth::attempt(['email' => request('email') , 'password' => request('password') ]))
                        {
                            return redirect('/adminDashboard');
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

        return redirect('/adminLogin');
    }


}
