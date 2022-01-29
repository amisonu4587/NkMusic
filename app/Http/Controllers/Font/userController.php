<?php

namespace App\Http\Controllers\Font;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
   public function index(Request $request)
   {
      toastr()->success('Data has been saved successfully!');
      return view('User.index');
   }
   public function index1(Request $request)
   {
      toastr()->success('Data has been saved successfully!');
      return view('User.index');
   }

   protected function u_logout()
   {
      Auth::logout();
      return redirect('/');
   }


   public function content_status(Request $request)
   {
      $id = Auth::user()->id;
      $data = [];
      $data['content_details'] = DB::table('content_status')->where('user_id', $id)->first();
      return view('User.content_status.content_status', $data);
   }


   public function all_payout(Request $request)
   {
      $id = Auth::user()->id;
      $data = [];
      $data['payout_details'] = DB::table('payout_partner')->where('user_id', $id)->get();
      return view('User.payout.payout', $data);
   }

   public function all_revenue(Request $request)
   {
      $id = Auth::user()->id;
      $data = [];
      $data['revenue_details'] = DB::table('music_revenue')->where('user_id', $id)->get();
      return view('User.revenue.revenue', $data);
   }

   public function profile(Request $request)
   {
      $id = Auth::user()->id;
      $data = [];
      $data['profile_details'] = DB::table('users')->where('id', $id)->first();
      return view('User.profile.profile', $data);
   }
}
