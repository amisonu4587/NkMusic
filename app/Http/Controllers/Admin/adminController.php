<?php

namespace App\Http\Controllers\Admin;

use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Payout;

use App\Models\User;
use App\Models\Partner;
use App\Models\Release;
use App\Models\Subcategory;
use App\Models\Details;
use App\Models\Song;
use App\Models\Film;
use App\Models\Mrevenue;
use App\Models\Yrevenue;
use App\Models\Ppartner;
use App\Models\Url;
use App\Models\Crbt;
use App\Models\Additional;
use App\Models\Religioncategory;
use App\Models\Rsubcategory;
use App\Models\Rdetails;
use App\Models\Primepartner;
use App\Models\Contentstatus;
use App\Models\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{


    public function delete_service(Request $request)
    {
        $id = $request->id;
        $image = DB::table('service')->where('id', $request->id)
            ->first();
        $first1 = $image->service_image;


        unlink("service/{$first1}");

        $rrr = Service::where('id', $id)->delete();
        if ($rrr) {
            toastr()->success('Service Image Delete successfully!');
            return back();
        }
    }
    public function view_service(Request $request)
    {
        $data = [];
        $data['service_details'] = DB::table('service')
            ->get();
        return view('Admin.service.view_service', $data);
    }
    public function add_service(Request $request)
    {
        return view('Admin.service.add_service');
    }

    public function add_user(Request $request)
    {
        return view('Admin.add_user.add_user');
    }
    public function add_user_action(Request $req)
    {
        $input = $req->all();

        $validator = Validator::make($input, [
            'username' => 'required',

            'email' => 'required',
            'phone' => 'required',





            'name' => 'required',

            'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'price' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 400);
        }



        $add_register = [
            'name' => $input['name'],
            'username' => $input['username'],
            'email' => $input['email'],

            'phone' => $input['phone'],

            'password' => Hash::make($input['password']),
            'role' => 2
            //'price' => $input['price'],


        ];
        // dd( $add_register);
        $save = User::create($add_register);
        if ($save) {
            toastr()->success('User Add successfully!');
            return redirect()->route('add_user');
        }
    }
    public function add_service_action(Request $req)
    {
        $input = $req->all();
        $file_notice = null;
        if (isset($input['service_image'])) {
            $service_image = $input['service_image'];
            $file_notice = md5(uniqid()) . '.' . $service_image->getClientOriginalExtension();
            $profile_path = public_path('/service');
            $service_image->move($profile_path, $file_notice);
        }

        $add_pdf = [

            'service_image' => $file_notice,

        ];
        $save = Service::create($add_pdf);

        if ($save) {
            // return response()->json(['success' => true,'msg'=>'Folder Add Successfull'], 200);
            toastr()->success('Service Image Add successfully!');
            return redirect()->route('view_service');
        }
    }


    public function edit_category(Request $request)
    {
        $id = $request->id;
        $data = [];
        $data['event_details'] = DB::table('cats')->where('cat_id', $request->id)
            ->first();
        //dd($data);
        return view('Admin.category.edit_category', $data);
    }
    public function edit_category_action(Request $request)
    {
        $id = $request->id;
        // dd($id);
        $this->validate($request, ['category_name' => ['required']]);

        $gs = DB::table('cats')->where('cat_id', $request->id)
            ->update(['cat_name' => $request->category_name]);


        if ($gs) {
            toastr()->success('Category Update successfully!');
            return redirect()->route('viewcategory');
        } else {
            toastr()->error('Something Went Wrong!!!!!');
            return redirect()->route('viewcategory');
        }
    }

    public function edit_subcategory(Request $request)
    {
        $id = $request->id;
        $data = [];
        $data['event_details'] = DB::table('sub_cats')->where('sub_cat_id', $request->id)
            ->first();
        //dd($data);
        return view('Admin.subcategory.edit_subcategory', $data);
    }
    public function edit_subcategory_action(Request $request)
    {
        $id = $request->id;
        // dd($id);
        $this->validate($request, ['sub_cat_name' => ['required']]);

        $gs = DB::table('sub_cats')->where('sub_cat_id', $request->id)
            ->update(['sub_cat_name' => $request->sub_cat_name]);


        if ($gs) {
            toastr()->success('Sub Category Update successfully!');
            return redirect()->route('view_subcategory');
        } else {
            toastr()->error('Something Went Wrong!!!!!');
            return redirect()->route('view_subcategory');
        }
    }


    public function delete_details(Request $request)
    {
        $id = $request->id;


        $rrr = Details::where('sub_sub_cat_id', $id)->delete();
        if ($rrr) {
            toastr()->success('Details Delete successfully done');
            return redirect()->route('view_details');
        }
    }


    public function edit_religion_category(Request $request)
    {
        $id = $request->id;
        $data = [];
        $data['event_details'] = DB::table('religion_cat')->where('cat_id', $request->id)
            ->first();
        //dd($data);
        return view('Admin.religion_category.edit_religion_category', $data);
    }
    public function edit_religion_category_action(Request $request)
    {
        $id = $request->id;
        // dd($id);
        $this->validate($request, ['religion_category_name' => ['required']]);

        $gs = DB::table('religion_cat')->where('cat_id', $request->id)
            ->update(['cat_name' => $request->religion_category_name]);


        if ($gs) {
            toastr()->success('Category Update successfully!');
            return redirect()->route('view_religion_category');
        } else {
            toastr()->error('Something Went Wrong!!!!!');
            return redirect()->route('view_religion_category');
        }
    }




    public function edit_religion_subcategory(Request $request)
    {
        $id = $request->id;
        $data = [];
        $data['event_details'] = DB::table('religion_subcat')->where('sub_cat_id', $request->id)
            ->first();
        //dd($data);
        return view('Admin.religion_sub_category.edit_religion_sub_category', $data);
    }
    public function edit_religion_subcategory_action(Request $request)
    {
        $id = $request->id;
        // dd($id);
        $this->validate($request, ['religion_sub_cat_name' => ['required']]);

        $gs = DB::table('religion_subcat')->where('sub_cat_id', $request->id)
            ->update(['sub_cat_name' => $request->religion_sub_cat_name]);


        if ($gs) {
            toastr()->success('Sub Category Update successfully!');
            return redirect()->route('view_religion_subcategory');
        } else {
            toastr()->error('Something Went Wrong!!!!!');
            return redirect()->route('view_religion_subcategory');
        }
    }



    public function delete_religion_details(Request $request)
    {
        $id = $request->id;
        $rrr = Rdetails::where('sub_sub_cat_id', $id)->delete();
        if ($rrr) {
            toastr()->success('Details Delete successfully done');
            return redirect()->route('view_religion_details');
        }
    }
    public function delete_additional_info(Request $request)
    {
        $id = $request->id;
        $rrr = Additional::where('id', $id)->delete();
        if ($rrr) {
            toastr()->success('Additional Information Delete successfully done');
            return redirect()->route('view_additional');
        }
    }



    public function add_religion_details(Request $request)
    {
        $data4 = Religioncategory::orderBy('cat_id', 'DESC')->get();
        $data3 = Rsubcategory::orderBy('sub_cat_id', 'DESC')->get();

        return view('Admin.religion_details.add_religion_details')->with('data4', $data4)->with('data3', $data3);
    }

    public function add_url(Request $request)
    {
        $data = [];
        $data['user_details'] = DB::table('users')->where('status', 1)->where('role', 1)
            ->get();

        return view('Admin.url.add_url', $data);
    }


    public function add_url_action(Request $req)
    {
        $input = $req->all();
        $validator = Validator::make($input, [
            'user_id' => 'required',
            'url_image' => 'required',
            'name' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 400);
        }




        $file_notice = null;
        if (isset($input['url_image'])) {
            $url_image = $input['url_image'];
            $file_notice = md5(uniqid()) . '.' . $url_image->getClientOriginalExtension();
            $profile_path = public_path('/url');
            $url_image->move($profile_path, $file_notice);
        }




        $add_url = [
            'user_id' => $input['user_id'],
            'email' => $file_notice,
            'name' => $input['name'],


        ];
        $save = Url::create($add_url);

        if ($save) {
            toastr()->success('add Sucessfully');
            return redirect()->route('add_url');
        }
    }








    public function add_crbt(Request $request)
    {
        $data = [];
        $data['user_details'] = DB::table('users')->where('status', 1)->where('role', 1)
            ->get();

        return view('Admin.crbt.add_crbt', $data);
    }


    public function add_crbt_action(Request $req)
    {
        $input = $req->all();
        $validator = Validator::make($input, [
            'user_id' => 'required',
            'crbt_image' => 'required',
            'name' => 'required',



        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 400);
        }



        $file_notice = null;
        if (isset($input['crbt_image'])) {
            $crbt_image = $input['crbt_image'];
            $file_notice = md5(uniqid()) . '.' . $crbt_image->getClientOriginalExtension();
            $profile_path = public_path('/crbt');
            $crbt_image->move($profile_path, $file_notice);
        }

        $add_crbt = [
            'user_id' => $input['user_id'],
            'email' => $file_notice,
            'name' => $input['name'],


        ];
        $save = Crbt::create($add_crbt);

        if ($save) {
            toastr()->success('add Sucessfully');
            return redirect()->route('add_crbt');
        }
    }




    public function music_revenue(Request $request)
    {
        $data = [];
        $data['user_details'] = DB::table('users')->where('status', 1)->where('role', 1)
            ->get();

        return view('Admin.revenue_report.music_distribution', $data);
    }

    public function add_content_status(Request $request)
    {
        $data['user_details'] = DB::table('users')->where(['status' => 1, 'role' => 1])->get();

        return view('Admin.content_status.add_content_status', $data);
    }
    public function edit_content_status(Request $request)
    {
        $id = $request->id ?? null;
        $data['user_details'] = DB::table('users')->where(['status' => 1, 'role' => 1])->get();
        $data['content_status'] = DB::table('content_status')->where('id', $id)->get()->first();
        return view('Admin.content_status.add_content_status', $data);
    }

    public function add_payout(Request $request)
    {
        $data = [];
        $data['user_details'] = DB::table('users')->where(['status' => 1, 'role' => 1])->get();
        return view('Admin.payout.add_payout', $data);
    }
    public function edit_payout(Request $request)
    {
        $id = $request->id ?? null;
        $data['user_details'] = DB::table('users')->where(['status' => 1, 'role' => 1])->get();
        $data['payout_partner'] = DB::table('payout_partner')->where(['id' => $id])->get()->first();
        return view('Admin.payout.add_payout', $data);
        // return $data;
    }

    public function youtube_revenue(Request $request)
    {
        $data = [];
        $data['user_details'] = DB::table('users')->where('status', 1)->where('role', 1)
            ->get();

        return view('Admin.revenue_report.youtube_content', $data);
    }


    public function payout_partners(Request $request)
    {
        $data = [];
        $data['user_details'] = DB::table('users')->where('status', 1)->where('role', 1)
            ->get();
        return view('Admin.payout_partner.add_payout_partner', $data);
    }

    public function add_payout_action(Request $req)
    {
        $input = $req->all();
        $validator = Validator::make($input, [
            'user_name' => 'required',
            'transactionFile' => 'required|mimes:csv,txt'
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 400);
        }
        $transaction_file = $req->file('transactionFile');
        $filename = md5($input['user_name'] . '_' . rand()) . '.' . $transaction_file->getClientOriginalExtension();
        $destination = public_path('rexcel');
        $link = '/rexcel/' . $filename;
        $transaction_file->move($destination, $filename);
        $add_partner = [
            'user_id' => $input['user_name'],
            'transaction_file' => $link,
        ];
        if ($input['action'] == 'insert') {
            $save = Ppartner::create($add_partner);
            $msg = 'Payout partners add Sucessfully';
        } elseif ($input['action'] == 'update') {
            $save = Ppartner::where('id', $input['payout_id'])->update($add_partner);
            $del = $destination . '/' . $input['oldFileName'];
            if (file_exists($del))
                unlink($del);
            $msg = 'Payout partners update Sucessfully';
        }
        if ($save) {
            toastr()->success($msg);
            return redirect()->route('view_payout_partner');
        }
    }


    public function add_music_distribution_action(Request $req)
    {
        $input = $req->all();
        $validator = Validator::make($input, [
            'user_id' => 'required',
            'month' => 'required',
            'revenue' => 'required',
            'excel_image' => 'required',
            'revenue_for' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 400);
        }
        $file_notice = null;
        if (isset($input['excel_image'])) {
            $excel_image = $input['excel_image'];
            $file_notice = md5(uniqid()) . '.' . $excel_image->getClientOriginalExtension();
            $profile_path = public_path('/rexcel');
            $excel_image->move($profile_path, $file_notice);
        }

        $add_music = [
            'user_id' => $input['user_id'],
            'month' => $input['month'],

            'revenue' => $input['revenue'],
            'revenue_for' => $input['revenue_for'],
            'excel_image' => $file_notice,



        ];
        $save = Mrevenue::create($add_music);

        if ($save) {
            toastr()->success('Revenue Report Save Sucessfully');
            return redirect()->route('music_revenue');
        }
    }
    public function add_content_status_action(Request $req)
    {
        $input = $req->all();
        $validator = Validator::make($input, [
            'user_id' => 'required',
            'excel_image' => 'required|mimes:csv,txt',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 400);
        }
        $file_notice = null;
        if (isset($input['excel_image'])) {
            $excel_image = $input['excel_image'];
            $file_notice = md5(uniqid()) . '.' . $excel_image->getClientOriginalExtension();
            $profile_path = public_path('/cexcel');
            $excel_image->move($profile_path, $file_notice);
        }
        $add_music = [
            'user_id' => $input['user_id'],
            'excel_image' => $file_notice,
        ];
        if ($input['action'] == 'insert') {
            $save = Contentstatus::create($add_music);
            $msg = 'Revenue Report Save Sucessfully';
        } elseif ($input['action'] == 'update') {
            $save = Contentstatus::where('id', $input['content_status_id'])->update($add_music);
            $del = $profile_path . '/' . $input['oldFileName'];
            if (file_exists($del))
                unlink($del);
            $msg = 'Revenue Report Updated Sucessfully';
        }
        if ($save) {
            toastr()->success($msg);
            return redirect()->route('view_content_status');
        }
    }



    public function add_youtube_distribution_action(Request $req)
    {
        $input = $req->all();
        $validator = Validator::make($input, [
            'user_id' => 'required',
            'month' => 'required',
            'revenue' => 'required',


        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 400);
        }

        $add_youtube = [
            'user_id' => $input['user_id'],
            'month' => $input['month'],

            'revenue' => $input['revenue'],

        ];
        $save = Yrevenue::create($add_youtube);

        if ($save) {
            toastr()->success('Revenue Report Save Sucessfully');
            return redirect()->route('youtube_revenue');
        }
    }

    public function index(Request $request)
    {
        //    toastr()->success('Data has been saved successfully!');
        return view('Admin.index');
    }
    public function index1(Request $request)
    {
        //    toastr()->success('Data has been saved successfully!');
        return view('Admin.index');
    }

    public function add_category(Request $request)
    {
        //    toastr()->success('Category Add successfully!');
        return view('Admin.category.add_category');
    }
    public function add_religion_category(Request $request)
    {
        return view('Admin.religion_category.add_religion_category');
    }

    public function add_additional(Request $request)
    {
        //    toastr()->success('Category Add successfully!');
        return view('Admin.additional_info.add_additional_info');
    }




    public function add_subcategory(Request $request)
    {
        $data = [];
        $data['cat_details'] = DB::table('cats')
            ->get();

        return view('Admin.subcategory.add_subcategory', $data);
    }



    public function add_religion_subcategory(Request $request)
    {
        $data = [];
        $data['cat_details'] = DB::table('religion_cat')
            ->get();

        return view('Admin.religion_sub_category.add_religion_sub_category', $data);
    }
    public function view_category(Request $request)
    {
        $data = [];
        $data['category_detail'] = DB::table('cats')->get();
        // dd($data);
        return view('Admin.category.view_category', $data);
    }


    public function view_religion_category(Request $request)
    {
        $data = [];
        $data['category_detail'] = DB::table('religion_cat')->get();
        // dd($data);
        return view('Admin.religion_category.view_religion_category', $data);
    }

    public function view_url(Request $request)
    {
        $data = [];
        $data[''] = DB::table('url')->get();
        $data['url_detail'] = DB::table('users')->join('url', 'users.id', '=', 'url.user_id')->get();
        // dd($data);
        return view('Admin.url.view_url', $data);
    }


    public function view_additional(Request $request)
    {
        $data = [];
        $data[''] = DB::table('additional')->get();
        $data['additional_detail'] = DB::table('additional')->get();
        // dd($data);
        return view('Admin.additional_info.view_additional_info', $data);
    }



    public function view_crbt(Request $request)
    {
        $data = [];
        $data[''] = DB::table('crbt')->get();
        $data['crbt_detail'] = DB::table('users')->join('crbt', 'users.id', '=', 'crbt.user_id')->get();
        // dd($data);
        return view('Admin.crbt.view_crbt', $data);
    }






    public function add_ppartners(Request $request)
    {
        //toastr()->success('Category Add successfully!');
        return view('Admin.prime_partner.add_prime_partner');
    }
    public function add_partners(Request $request)
    {
        //toastr()->success('Category Add successfully!');
        return view('Admin.partner.add_partner');
    }
    public function album_details(Request $request)
    {
        $id = $request->id;
        $data = [];
        $data['albam_detail'] = DB::table('song')->where('id', $request->id)
            ->first();
        //toastr()->success('Category Add successfully!');
        return view('Admin.release.view_details', $data);
    }
    public function album_status(Request $request)
    {
        $id = $request->id;
        $data = [];
        $data['event_details'] = DB::table('song')->where('id', $request->id)
            ->first();
        //toastr()->success('Category Add successfully!');
        return view('Admin.release.add_status', $data);
    }
    public function add_isre(Request $request)
    {
        $id = $request->id;
        $data = [];
        $data['event_details'] = DB::table('song')->where('id', $request->id)
            ->first();
        return view('Admin.release.add_isre_code', $data);
    }
    public function add_status(Request $request)
    {
        //toastr()->success('Category Add successfully!');
        return view('Admin.release.add_isre_code');
    }






    public function film_details(Request $request)
    {
        //toastr()->success('Category Add successfully!');
        $id = $request->id;
        $data = [];
        $data['albam_detail'] = DB::table('film')->where('id', $request->id)
            ->first();
        //   dd($data);
        return view('Admin.film.view_details', $data);
    }
    public function film_isre(Request $request)
    {
        $id = $request->id;
        $data = [];
        $data['event_details'] = DB::table('film')->where('id', $request->id)
            ->first();
        return view('Admin.film.add_isre_code', $data);
    }
    public function movie_status(Request $request)
    {
        $id = $request->id;
        $data = [];
        $data['event_details'] = DB::table('film')->where('id', $request->id)
            ->first();
        return view('Admin.film.add_status', $data);
    }

    public function view_releases(Request $request)
    {
        //dd();
        // $data=[];
        // $data['albam_detail'] = DB::table('song')
        // ->get();


        $data = [];
        $data['albam_detail'] = DB::table('users')->join('song', 'users.id', '=', 'song.user_id')->get();
        // dd($data); 
        return view('Admin.release.view_release', $data);
    }

    public function view_youtube(Request $request)
    {

        $data = [];
        $data['youtube_details'] = DB::table('users')->join('youtube_revenue', 'users.id', '=', 'youtube_revenue.user_id')->get();
        // dd($data); 
        return view('Admin.revenue_report.view_youtube', $data);
    }

    public function view_payout_partner(Request $request)
    {

        $data = [];
        $data['events_details'] = DB::table('users')->join('payout_partner', 'users.id', '=', 'payout_partner.user_id')->get();
        // dd($data); 
        return view('Admin.payout.view_payout_partner', $data);
    }
    public function content_details(Request $request)
    {

        return view('Admin.content_details.content_details');
    }


    public function view_music_distribution(Request $request)
    {

        $data = [];
        $data['music_details'] = DB::table('users')->join('music_revenue', 'users.id', '=', 'music_revenue.user_id')->get();

        return view('Admin.revenue_report.view_music_distribution', $data);
    }

    public function view_content_status(Request $request)
    {

        $data = [];
        $data['content_details'] = DB::table('content_status')->get();

        return view('Admin.content_status.view_content_status', $data);
    }

    public function view_film(Request $request)
    {
        //dd();
        $data = [];
        $data['albam_detail'] = DB::table('users')->join('film', 'users.id', '=', 'film.user_id')->get();
        //dd($data);
        return view('Admin.film.view_film', $data);
    }


    public function view_register(Request $request)
    {
        //toastr()->success('Category Add successfully!');

        $data = [];
        $data['event_details'] = DB::table('users')->where('role', 1)
            ->get();
        // dd($data);
        return view('Admin.register.view_register', $data);
    }




    public function edit_register(Request $request)
    {


        $id = $request->id;
        $data = [];
        $data['event_details'] = DB::table('users')->where('id', $request->id)
            ->first();


        return view('Admin.register.edit_register', $data);
    }














    public function edit_details(Request $request)
    {


        $id = $request->id;
        $data = [];
        $data['event_details'] = DB::table('users')->where('id', $request->id)
            ->first();


        return view('Admin.register.edit_details', $data);
    }

    public function edit_password(Request $request)
    {


        $id = $request->id;
        $data = [];
        $data['event_details'] = DB::table('users')->where('id', $request->id)
            ->first();
        return view('Admin.register.change_password', $data);
    }







    public function view_message(Request $request)
    {
        $data = [];
        $data['events_details'] = DB::table('contact')
            ->get();
        //dd($data);
        //toastr()->success('Category Add successfully!');
        return view('Admin.message.message', $data);
    }







    public function deletealbams(Request $request)
    {
        $id = $request->id;
        $image = DB::table('song')->where('id', $request->id)
            ->first();

        $first1 = $image->album_image;
        // $first2 = $image->audio;
        unlink("albam/{$first1}");
        // unlink("audio/{$first2}");

        $rrr = Song::where('id', $id)->delete();
        if ($rrr) {
            toastr()->success('Album Delete successfully done');
            return redirect()->route('view_releases');
        }
    }





    public function deletealbummp3(Request $request)
    {
        $id = $request->id;
        $image = DB::table('song')->where('id', $request->id)
            ->first();


        $first2 = $image->audio;

        unlink("audio/{$first2}");


        $gs = DB::table('albam')->where('id', $request->id)
            ->update([
                'audio'  => NULL,
            ]);
        if ($gs) {
            toastr()->success('Audio Delete Successfully Done');
            return redirect()->route('view_releases');
        }
    }





    //  public function deletealbammp3(Request $request){
    //     $id=$request->id;
    //     $image = DB::table('song')->where('id', $request->id)
    //     ->first();


    //             $first2 = $image->audio;

    //             $rrr=unlink("audio/{$first2}");
    //                 if($rrr)
    //                 {
    //                     toastr()->success('mp3 Delete successfully done');
    //                     // return redirect()->route('view_releases');
    //                 } 
    //             }












    public function deletefilms(Request $request)
    {
        $id = $request->id;
        $image = DB::table('film')->where('id', $request->id)
            ->first();

        // $first1 = $image->album_image;
        $first2 = $image->audio;
        // unlink("albam/{$first1}");
        unlink("audio/{$first2}");

        $rrr = Film::where('id', $id)->delete();
        if ($rrr) {
            toastr()->success('Film Delete successfully done');
            return redirect()->route('view_films');
        }
    }





    public function deletefilmmp3(Request $request)
    {
        $id = $request->id;
        $image = DB::table('film')->where('id', $request->id)
            ->first();


        $first2 = $image->audio;

        unlink("audio/{$first2}");


        $gs = DB::table('film')->where('id', $request->id)
            ->update([
                'audio'  => NULL,
            ]);
        if ($gs) {
            toastr()->success('Audio Delete Successfully Done');
            return redirect()->route('view_films');
        }
    }








    public function edit_register_action(Request $request)
    {

        $this->validate($request, ['bank' => ['required'], 'ifcs' => ['required'], 'ac_name' => ['required'], 'bank_name' => ['required'], 'branch' => ['required']]);







        $gs = DB::table('users')->where('id', $request->id)
            ->update(['bank' => $request->bank, 'ifcs' => $request->ifcs, 'ac_name' => $request->ac_name, 'bank_name' => $request->bank_name, 'branch' => $request->branch,]);


        if ($gs) {
            toastr()->success('Bank Details Add successfully!');
            return redirect()->route('viewregister');
        } else {
            toastr()->error('Something Went Wrong!!!!!');
            return redirect()->route('viewregister');
        }
    }





    public function edit_details_action(Request $request)
    {

        // $this->validate($request, ['name' => ['required'],'subscription' => ['required'],'company_name' => ['required'],'label_name' => ['required'],'revenue_share' => ['required'],'membership' => ['required'],'service' => ['required']]);




        if ($request->user_image != '') {
            $event_details = DB::table('users')->where('id', $request->id)->first();
            $first1 = $event_details->user_image;
            try {
                unlink("user/{$first1}");
            } catch (\Exception $e) {
            }
            $file_notice = null;
            $user_image = $request->user_image;
            $file_notice = md5(uniqid()) . '.' . $user_image->getClientOriginalExtension();
            $profile_path = public_path('/user');
            $user_image->move($profile_path, $file_notice);
        } else {
            $event_details = DB::table('users')->where('id', $request->id)
                ->first();
            // dd($request->id);
            $file_notice = $event_details->user_image;
        }

        //  $gs = DB::table('users')->where('id', $request->id)
        //     ->update(['user_image' => $file_notice,'name' => $request->name,'subscription' => $request->subscription,'company_name' => $request->company_name,'label_name' => $request->label_name,'revenue_share' => $request->revenue_share,'membership' => $request->membership,'service' => $request->service,]);
        $gs = DB::table('users')->where('id', $request->id)
            ->update(['city' => $request->city, 'name' => $request->name, 'state' => $request->state, 'username' => $request->username, 'email' => $request->email, 'phone' => $request->phone, 'user_image' => $file_notice,]);


        if ($gs) {
            toastr()->success('User Update successfully!');
            return redirect()->route('viewregister');
        } else {
            toastr()->success('User Update successfully!');
            return redirect()->route('viewregister');
        }
    }










    public function edit_password_action(Request $request)
    {
        // dd($request->password);
        // $aaa=Hash::make($request->password);

        $gs = DB::table('users')->where('id', $request->id)
            ->update(['password' => Hash::make($request->password)]);


        if ($gs) {
            toastr()->success('Password Update successfully!');
            return redirect()->route('viewregister');
        } else {
            toastr()->success('Password Update successfully!');
            return redirect()->route('viewregister');
        }
    }








    public function edit_status_action(Request $request)
    {
        $input = $request->all();
        //    dd($input);
        $gs = DB::table('film')->where('id', $request->id)
            ->update(['status' => $request->film_status]);

        //dd($gs);
        if ($gs) {
            toastr()->success('Status Add successfully done');
            return redirect()->route('view_films');
        } else {
            toastr()->error('Something Wrong!! Please Try Again!!!');
            return redirect()->route('view_films');
        }
    }







    public function edit_astatus_action(Request $request)
    {
        $input = $request->all();

        $gs = DB::table('song')->where('id', $request->id)
            ->update(['status' => $request->film_status]);


        if ($gs) {
            toastr()->success('Status Add successfully done');
            return redirect()->route('view_releases');
        } else {
            toastr()->error('Status Add successfully done');
            return redirect()->route('view_releases');
        }
    }

    public function user_approval(Request $request)
    {
        $id = $request->id;
        $status = $request->status;
        if ($status == '0') {
            $re = User::where('id', $id)->update(['status' => '1']);
        } else if ($status == '1') {
            $re = User::where('id', $id)->update(['status' => '0']);
        }
        if ($re) {
            toastr()->success('User Approval/nonapproval Give Successfully');
            return redirect()
                ->back();
        } else {
            toastr()
                ->error('User Approval Did Not Give');
            return redirect()
                ->back();
        }
    }

    public function form_approval(Request $request)
    {
        $id = $request->id;
        $approve = $request->approve;
        if ($approve == '0') {
            $re = Song::where('id', $id)->update(['approve' => '1']);
        } else if ($approve == '1') {
            $re = Song::where('id', $id)->update(['approve' => '0']);
        }
        if ($re) {
            toastr()->success('Album Approval/nonapproval Give Successfully');
            return redirect()
                ->back();
        } else {
            toastr()
                ->error('Application Form Approval Did Not Give');
            return redirect()
                ->back();
        }
    }



    public function form_approval2(Request $request)
    {
        $id = $request->id;
        $approve = $request->approve;
        if ($approve == '0') {
            $re = Film::where('id', $id)->update(['approve' => '1']);
        } else if ($approve == '1') {
            $re = Film::where('id', $id)->update(['approve' => '0']);
        }
        if ($re) {
            toastr()->success('Film Approval/nonapproval Give Successfully');
            return redirect()
                ->back();
        } else {
            toastr()
                ->error('Application Form Approval Did Not Give');
            return redirect()
                ->back();
        }
    }









    public function edit_isre_action(Request $request)
    {
        $input = $request->all();

        $gs = DB::table('song')->where('id', $request->id)
            ->update(['generate_isre' => $request->isre_code, 'generate_upc' => $request->upc_code]);

        //dd($gs);
        if ($gs) {
            toastr()->success('Code Add successfully done');
            return redirect()->route('view_releases');
        } else {
            toastr()->success('Code Add successfully done');
            return redirect()->route('view_releases');
        }
    }













    public function edit_fisre_action(Request $request)
    {
        $input = $request->all();

        $gs = DB::table('film')->where('id', $request->id)
            ->update(['generate_isre' => $request->isre_code, 'generate_upc' => $request->upc_code]);

        //dd($gs);
        if ($gs) {
            toastr()->success('Code Add successfully done');
            return redirect()->route('view_films');
        } else {
            toastr()->error('Something Wrong!! Please Try Again!!!');
            return redirect()->route('view_newsdsfdf');
        }
    }





    public function add_partner_action(Request $req)
    {
        $input = $req->all();



        $file_notice = null;
        if (isset($input['partner_image'])) {
            $partner_image = $input['partner_image'];
            $file_notice = md5(uniqid()) . '.' . $partner_image->getClientOriginalExtension();
            $profile_path = public_path('/partner');
            $partner_image->move($profile_path, $file_notice);
        }



        $add_pdf = [





            'partner_image' => $file_notice,




            //'price' => $input['price'],


        ];
        $save = Partner::create($add_pdf);

        if ($save) {
            // return response()->json(['success' => true,'msg'=>'Folder Add Successfull'], 200);
            toastr()->success('Partners Image Add successfully!');
            return redirect()->route('add_partners');
        }
    }


    public function add_prime_partner_action(Request $req)
    {
        $input = $req->all();



        $file_notice = null;
        if (isset($input['ppartner_image'])) {
            $ppartner_image = $input['ppartner_image'];
            $file_notice = md5(uniqid()) . '.' . $ppartner_image->getClientOriginalExtension();
            $profile_path = public_path('/ppartner');
            $ppartner_image->move($profile_path, $file_notice);
        }



        $add_pdf = [





            'ppartner_image' => $file_notice,




            //'price' => $input['price'],


        ];
        $save = Primepartner::create($add_pdf);

        if ($save) {
            // return response()->json(['success' => true,'msg'=>'Folder Add Successfull'], 200);
            toastr()->success('Prime Partners Image Add successfully!');
            return redirect()->route('add_ppartners');
        }
    }










    public function viewpartner(Request $request)
    {
        $data = [];
        $data['partners_details'] = DB::table('partner')
            ->get();
        //dd($data);

        return view('Admin.partner.view_partner', $data);
    }



    public function view_prime_partner(Request $request)
    {
        $data = [];
        $data['ppartners_details'] = DB::table('prime_partner')
            ->get();
        return view('Admin.prime_partner.view_prime_partner', $data);
    }


    public function delete_prime_partner(Request $request)
    {
        $id = $request->id;
        $image = DB::table('prime_partner')->where('id', $request->id)
            ->first();
        $first1 = $image->ppartner_image;


        unlink("ppartner/{$first1}");

        $rrr = Primepartner::where('id', $id)->delete();
        if ($rrr) {
            toastr()->success('Delete successfully!');
            return back();
        }
    }



    public function deletepartner(Request $request)
    {
        $id = $request->id;
        $image = DB::table('partner')->where('id', $request->id)
            ->first();
        $first1 = $image->partner_image;


        unlink("partner/{$first1}");

        $rrr = Partner::where('id', $id)->delete();
        if ($rrr) {
            toastr()->success('Delete successfully!');
            return back();
            // return redirect()->back()->with(['message' => 'Folder Delete Successfully', 'alert' => 'alert-danger']);
        }
    }





    public function view_subcategory(Request $request)
    {
        $data = [];
        $data['subcategory_details'] = DB::table('cats')->join('sub_cats', 'cats.cat_id', '=', 'sub_cats.cat_id')->get();
        return view('Admin.subcategory.view_subcategory', $data);
    }


    public function view_religion_subcategory(Request $request)
    {
        $data = [];
        $data['subcategory_details'] = DB::table('religion_cat')->join('religion_subcat', 'religion_cat.cat_id', '=', 'religion_subcat.cat_id')->get();
        return view('Admin.religion_sub_category.view_religion_sub_category', $data);
    }



    public function add_details(Request $request)
    {
        $data4 = Category::orderBy('cat_id', 'DESC')->get();
        $data3 = Subcategory::orderBy('sub_cat_id', 'DESC')->get();
        return view('Admin.details.add_details')->with('data4', $data4)->with('data3', $data3);
    }








    public function view_details(Request $request)
    {


        $data = [];
        $data['details_details'] = DB::table('sub_cats')->join('sub_sub_cats', 'sub_cats.sub_cat_id', '=', 'sub_sub_cats.sub_cat_id')->get();

        return view('Admin.details.view_details', $data);
    }





    public function view_religion_details(Request $request)
    {

        $data = [];
        $data['details_details'] = DB::table('religion_subcat')->join('religion_details', 'religion_subcat.sub_cat_id', '=', 'religion_details.sub_cat_id')->get();
        return view('Admin.religion_details.view_religion_details', $data);
    }




    public function add_category_action(Request $req)
    {
        $input = $req->all();
        $validator = Validator::make($input, [
            'category_name' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 400);
        }

        $add_folder = [
            'cat_name' => $input['category_name'],
        ];
        $save = Category::create($add_folder);

        if ($save) {
            toastr()->success('Category add successfully done');
            return redirect()->route('adminCategory');
        }
    }

    public function add_religion_category_action(Request $req)
    {
        $input = $req->all();
        $validator = Validator::make($input, [
            'category_name' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 400);
        }

        $add_folder = [
            'cat_name' => $input['category_name'],
        ];
        $save = Religioncategory::create($add_folder);

        if ($save) {
            toastr()->success('Religion Category add successfully done');
            return redirect()->route('add_religion_category');
        }
    }


    public function add_additional_action(Request $req)
    {
        $input = $req->all();
        $validator = Validator::make($input, [
            'additional_info' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 400);
        }

        $add_folder = [
            'additional_info' => $input['additional_info'],
        ];
        $save = Additional::create($add_folder);

        if ($save) {
            toastr()->success('Additional Information add successfully done');
            return redirect()->route('add_additional');
        }
    }













    public function add_subcategory_action(Request $req)
    {
        $input = $req->all();
        $validator = Validator::make($input, [
            'cat_id' => 'required',
            'subcat_name' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 400);
        }

        $add_subcstegory = [
            'sub_cat_name' => $input['subcat_name'],
            'cat_id' => $input['cat_id'],
        ];
        $save = Subcategory::create($add_subcstegory);

        if ($save) {
            toastr()->success('SubCategory add successfully done');
            return redirect()->route('view_subcategory');
        }
    }

    public function add_religion_subcategory_action(Request $req)
    {
        $input = $req->all();
        $validator = Validator::make($input, [
            'cat_id' => 'required',
            'subcat_name' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 400);
        }

        $add_subcstegory = [
            'sub_cat_name' => $input['subcat_name'],
            'cat_id' => $input['cat_id'],
        ];
        $save = Rsubcategory::create($add_subcstegory);

        if ($save) {
            toastr()->success('SubCategory add successfully done');
            return redirect()->route('view_religion_subcategory');
        }
    }


    public function add_details_action(Request $req)
    {
        $input = $req->all();
        $validator = Validator::make($input, [
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'details' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 400);
        }

        $add_folder = [
            'cat_id' => $input['category_id'],
            'sub_cat_id' => $input['subcategory_id'],
            'sub_sub_cat_name' => $input['details'],
        ];
        $save = Details::create($add_folder);

        if ($save) {
            toastr()->success('details add successfully done');
            return redirect()->route('view_details');
        }
    }







    public function add_religion_details_action(Request $req)
    {
        $input = $req->all();
        $validator = Validator::make($input, [
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'details' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 400);
        }

        $add_folder = [
            'cat_id' => $input['category_id'],
            'sub_cat_id' => $input['subcategory_id'],
            'sub_sub_cat_name' => $input['details'],
        ];
        $save = Rdetails::create($add_folder);

        if ($save) {
            toastr()->success('details add successfully done');
            return redirect()->route('view_religion_details');
        }
    }




    protected function admin_logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
