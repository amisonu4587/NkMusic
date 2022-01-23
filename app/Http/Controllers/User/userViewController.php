<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;
use Redirect;
use DB;
use App\Models\Contact;
use App\Models\Song;
use App\Models\Film;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Details;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use App\Models\Release;
use App\Models\Mrevenue;
use App\Models\Yrevenue;
use App\Models\Ppartner;
use App\Models\Url;
use App\Models\Crbt;
use App\Models\Primepartner;
use App\Models\Partner;
use App\Models\Additional;

use App\Models\Service;

use App\Models\Religioncategory;
use App\Models\Rsubcategory;
use App\Models\Rdetails;

class userViewController extends Controller
{


    public function our_service(Request $request){
    
        $data4 = Service::orderBy('id','DESC')->take(8)->get();
        return view('our_service.our_service')->with('data4',$data4);
    }
    
    public function user_profile(Request $request){
        $user_detail = User::orderBy('id','DESC')->where('id', Auth::user()->id)->first();
        
        return view('user_profile.user_profile')->with('user_detail',$user_detail);
    }
    public function revenue_repoart(Request $request){
        $data4 = Mrevenue::orderBy('id','DESC')->where('user_id', Auth::user()->id)->get();
        // $data3 = Yrevenue::orderBy('id','DESC')->where('user_id', Auth::user()->id)->get();
        // dd($data4);
        return view('revenue_repoart.revenue_repoart')->with('data4',$data4);
    }

    public function truck_url(Request $request){
        $data4 = Url::orderBy('id','DESC')->where('user_id', Auth::user()->id)->get();
        // dd($data4);
        return view('truck_url.truck_url')->with('data4',$data4);
    }
    public function crbt(Request $request){
        $data4 = Crbt::orderBy('id','DESC')->where('user_id', Auth::user()->id)->get();
        return view('crbt.crbt')->with('data4',$data4);
    }


    public function payout_partner(Request $request){
        $data4 = Ppartner::orderBy('id','DESC')->where('user_id', Auth::user()->id)->get();
        return view('payout_partner.payout_partner')->with('data4',$data4);
    }

    public function index(Request $request){
        $data4 = Primepartner::orderBy('id','DESC')->get();
        $data3 = Partner::orderBy('id','DESC')->get();
        // dd($data4);
        return view('home.home')->with('data3',$data3)->with('data4',$data4);
    }
    public function about(Request $request){
        return view('about.about');
    }
    public function album(Request $request){
        $data4 = Category::orderBy('cat_id','DESC')->get();
        $data3 = Subcategory::orderBy('sub_cat_id','DESC')->get();
        $data2 = Details::orderBy('sub_sub_cat_id','DESC')->get();
        $data1 = Additional::orderBy('id','DESC')->get();


        $data5 = Religioncategory::orderBy('cat_id','DESC')->get();
        $data6 = Rsubcategory::orderBy('sub_cat_id','DESC')->get();
        $data7 = Rdetails::orderBy('sub_sub_cat_id','DESC')->get();
        return view('album.add_album')->with('data4',$data4)->with('data3',$data3)->with('data2',$data2)->with('data1',$data1)->with('data5',$data5)->with('data6',$data6)->with('data7',$data7);
    }
    function show_subcategory(Request $req){
        $cat_id=$req->cat_id;
        $getSubcategory=Subcategory::where('cat_id', $cat_id)->get();
        return response()->json(['success' => true,'data'=>$getSubcategory], 200);
    }

    function show_religion_subcategory(Request $req){
        $cat_id=$req->cat_id;
        $getSubcategory=Rsubcategory::where('cat_id', $cat_id)->get();
        return response()->json(['success' => true,'data'=>$getSubcategory], 200);
    }


    function show_religion_details(Request $req){
        $sub_cat_id=$req->sub_cat_id;
        $getDescription=Rdetails::where('sub_cat_id', $sub_cat_id)->get();
        return response()->json(['success' => true,'data'=>$getDescription], 200);
    }

    
    function show_description(Request $req){
        $sub_cat_id=$req->sub_cat_id;
        $getDescription=Details::where('sub_cat_id', $sub_cat_id)->get();
        return response()->json(['success' => true,'data'=>$getDescription], 200);
    }

    public function partners(Request $request){
        $data3 = Partner::orderBy('id','DESC')->get();
        return view('partners.partners')->with('data3',$data3);
    }

    

    public function contact(Request $request){
        return view('contact.contact');
    }
    public function add_film(Request $request){
        $data5 = Religioncategory::orderBy('cat_id','DESC')->get();
        $data6 = Rsubcategory::orderBy('sub_cat_id','DESC')->get();
        $data7 = Rdetails::orderBy('sub_sub_cat_id','DESC')->get();
        $data1 = Additional::orderBy('id','DESC')->get();
        $data4 = Category::orderBy('cat_id','DESC')->get();
        $data3 = Subcategory::orderBy('sub_cat_id','DESC')->get();
        $data2 = Details::orderBy('sub_sub_cat_id','DESC')->get();
        return view('album.add_film')->with('data4',$data4)->with('data3',$data3)->with('data2',$data2)->with('data1',$data1)->with('data5',$data5)->with('data6',$data6)->with('data7',$data7);
    }

    public function register_now(Request $request){
        return view('register.register');
    }
    public function login_now(Request $request){
        return view('login.login');
    }

    public function truck(Request $request){
        $id=$request->id;
        $data=[];
        $data['event_details'] = DB::table('albam')->where('id', $request->id)
        ->first();
        //dd($data);
        return view('release.track',$data);
    }
    public function store(Request $request){
        $id=$request->id;
        $data=[];
        $data['events_details'] = DB::table('albam')->where('id', $request->id)
        ->first();
        // dd($data);
        return view('release.store',$data);
    }

    public function release(Request $request){
        return view('release.release');
    }


    public function view_release(Request $request){
        //dd();
        $data=[];
        $data['albam_details'] = DB::table('song')->where('user_id', Auth::user()->id)
        ->get();
        //dd($data);
        return view('release.view_release',$data);
    }

    public function view_movie(Request $request){
        //dd();
        $data=[];
        $data['movie_details'] = DB::table('film')->where('user_id', Auth::user()->id)
        ->get();
        //dd($data);
        return view('release.view_film',$data);
    }

    public function add_register_action(Request $req)
    {
        $input = $req->all();
        
        $validator = Validator::make($input, [
            'username' => 'required',
         
            'email' => 'required',
            'phone' => 'required',

            

         
            
           // 'price' => 'required',
            
           'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'price' => 'required',
           
            ]);
        if($validator->fails()){
                return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 400);
            }
        
            

        $add_register =[
            'username' => $input['username'],
            'email' => $input['email'],
          
           'phone' => $input['phone'],
         
            'password' => Hash::make($input['password']),
            'role' => 2
            //'price' => $input['price'],
         
            
        ];
       // dd( $add_register);
        $save = User::create($add_register);
        if($save){
            return response()->json(['success' => true,'msg'=>'Register Successfully Done'], 200);
        }
    }


public function sand_otp(Request $req){
      

        //$otp=rand(000000,999999);
        $otp=123456;
         $name=$req->name;
         $phone=$req->number;
       
    
        //  self::smsRequest($phone,"Hi ".$name." Please use this OTP ".$otp." for complete your registration process on DrVoice Public School.");
    
        return $otp;
    
    }



    public function userLogin(Request $request)
    {
        $details = User::where('email', request('email'))->first();
         //  dd($details);
        if($details)
        {
                $role = $details->role;
                $status = $details->status;
                //dd($role);
                if ($role == 1 && $status==1)
                {
                        Log::info($request);
                        if (Auth::attempt(['email' => request('email') , 'password' => request('password') ]))
                        {
                            return redirect('/');
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



    
    protected function user_logout(){
        Auth::logout();
        return redirect()->route('login_now');
    }











    public function add_release_action(Request $req)
    {
        $input = $req->all();

        $validator = Validator::make($input, [
            'albam_title' => 'required',
         
            'release_version' => 'required',
            
            'artist_name' => 'required',
         
            'sportify_artist_url' => 'required',
            'metadata_language' => 'required',
         
            'release_date' => 'required',
            'type' => 'required',
         
            'level' => 'required',
         
            'albam_image' => 'required',
            'audio' => 'required',


         
            
           // 'price' => 'required',
                //'price' => 'required',
           
            ]);
        if($validator->fails()){
                return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 400);
            }
        
            $input = $req->all();
            $file_notice = null;
            if(isset($input['albam_image'])){
                $albam_image = $input['albam_image'];
                $file_notice = md5(uniqid()) . '.' . $albam_image->getClientOriginalExtension();
                $profile_path = public_path('/albam');
                $albam_image->move($profile_path, $file_notice);
            }








            $file_albam = null;
            if(isset($input['audio'])){
                $audio = $input['audio'];
                $file_albam = md5(uniqid()) . '.' . $audio->getClientOriginalExtension();
                $profile_path = public_path('/audio');
                $audio->move($profile_path, $file_albam);
            }
        $add_albam=[
            'albam_title' => $input['albam_title'],
            'release_version' => $input['release_version'],
            'artist_name' => $input['artist_name'],
            'sportify_artist_url' => $input['sportify_artist_url'],
            'metadata_language' => $input['metadata_language'],
            'release_date' => $input['release_date'],
            'type' => $input['type'],
            'level' => $input['level'],
           
            'albam_image' => $file_notice,
            'audio' => $file_albam,

            'user_id' =>Auth::User()->id,
            //'price' => $input['price'],
         
            
        ];
       // dd( $add_register);
        $save = Release::create($add_albam);

        if($save){
            return response()->json(['success' => true,'msg'=>'Release add Successfully Done','id'=>$save->id], 200);
        }
    }











    public function add_song_action(Request $req)
    {
        $input = $req->all();

        $validator = Validator::make($input, [
            'album_title' => 'required',
            'album_category' => 'required',
            // 'all_genre' => 'required',
            // 'all_sub_category' => 'required',
            // 'all_secondary_genre' => 'required',
            'release_date' => 'required',

            'religion' => 'required',
            // 'genre' => 'required',
            // 'sub_category' => 'required',
            // 'secondary_genre' => 'required',
            'language' => 'required',
            'isre' => 'required',


        
            'level' => 'required',
            'pline' => 'required',
            'cline' => 'required',
            'lyrics' => 'required',
         
            

            'composer' => 'required',
            'artist' => 'required',
            'mood' => 'required',
            'additional_information' => 'required',
            'callertune' => 'required',
            'album_image' => 'require',
       

            'music_release_date' => 'required',
            'premier_release_date' => 'required',
       
       
             
           
            ]);
        if($validator->fails()){
                return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 400);
            }
        
            $input = $req->all();
            $file_notice = null;
            if(isset($input['albam_image'])){
                $albam_image = $input['albam_image'];
                $file_notice = md5(uniqid()) . '.' . $albam_image->getClientOriginalExtension();
                $profile_path = public_path('/albam');
                $albam_image->move($profile_path, $file_notice);
            }








            $file_albam = null;
            if(isset($input['audio'])){
                $audio = $input['audio'];
                $file_albam = md5(uniqid()) . '.' . $audio->getClientOriginalExtension();
                $profile_path = public_path('/audio');
                $audio->move($profile_path, $file_albam);
            }
        $genre = NULL;
        if(isset($input['genre'])){
            $genre = $input['genre'];
        }
        $sub_category = NULL;
        if(isset($input['sub_category'])){
            $sub_category = $input['sub_category'];
        }
        $secondary_genre = NULL;
        if(isset($input['secondary_genre'])){
            $secondary_genre = $input['secondary_genre'];
        }

        $all_genre = NULL;
        if(isset($input['all_genre'])){
            $all_genre = $input['all_genre'];
        }
        $all_sub_category = NULL;
        if(isset($input['all_sub_category'])){
            $all_sub_category = $input['all_sub_category'];
        }

        $all_secondary_genre = NULL;
        if(isset($input['all_secondary_genre'])){
            $all_secondary_genre = $input['all_secondary_genre'];
        }

        $generate_isre = NULL;
        if(isset($input['generate_isre'])){
            $generate_isre = $input['generate_isre'];
        }
        $generate_upc = NULL;
        if(isset($input['generate_upc'])){
            $generate_upc = $input['generate_upc'];
        }
        $add_song=[
            'album_title' => $input['album_title'],
            'album_category' => $input['album_category'],
            'all_genre' => $all_genre,
            'all_sub_category' => $all_sub_category,
            'description' => $all_secondary_genre,
            'release_date' => $input['release_date'],
            'religion' => $input['religion'],
         

            'religion_category' =>  $genre,
            'religion_sub_category' =>  $sub_category,





            'religion_description' => $secondary_genre,
            'language' => $input['language'],
            'isre' => $input['isre'],
            'generate_isre' =>$generate_isre,
            'generate_upc' =>$generate_upc,
            'level' => $input['level'],
            'pline' => $input['pline'],
            'cline' => $input['cline'],
            'lyrics' => $input['lyrics'],


            'composer' => $input['composer'],
            'artist' => $input['artist'],
            'mood' => $input['mood'],
            'additional_information' => $input['additional_information'],


            'callertune' => $input['callertune'],
           


            'album_image' => $file_notice,
            'audio' => $file_albam,

            'user_id' =>Auth::User()->id,
            // 'user_id' => 1,

            //'price' => $input['price'],
         
            'music_release_date' => $input['music_release_date'],
            'premier_release_date' => $input['premier_release_date'],
              'approve' => 1,

            // 'additional_information' => $input['additional_information'],
        ];
       // dd( $add_register);
        $save = Song::create($add_song);

        if($save){
            return response()->json(['success' => true,'msg'=>'Song add Successfully Done','id'=>$save->id], 200);
        }
    }













    public function add_film_action(Request $req)
    {
        $input = $req->all();

        $validator = Validator::make($input, [
            'album_title' => 'required',
            'album_category' => 'required',
            // 'all_genre' => 'required',
            // 'all_sub_category' => 'required',
            // 'all_secondary_genre' => 'required',
            'release_date' => 'required',

            'religion' => 'required',
            // 'genre' => 'required',
            // 'sub_category' => 'required',
            // 'secondary_genre' => 'required',
            'language' => 'required',
            'isre' => 'required',

            'level' => 'required',
            'pline' => 'required',
            'cline' => 'required',
            'lyrics' => 'required',
         
            

            'composer' => 'required',
            'artist' => 'required',
            'mood' => 'required',
            'additional_information' => 'required',
            'callertune' => 'required',
            'album_image' => 'require',
       

            'music_release_date' => 'required',
            'movie_release_date' => 'required',
       
       
             
           
            ]);
        if($validator->fails()){
                return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 400);
            }
        
            $input = $req->all();
            $file_notice = null;
            if(isset($input['albam_image'])){
                $albam_image = $input['albam_image'];
                $file_notice = md5(uniqid()) . '.' . $albam_image->getClientOriginalExtension();
                $profile_path = public_path('/albam');
                $albam_image->move($profile_path, $file_notice);
            }








            $file_albam = null;
            if(isset($input['audio'])){
                $audio = $input['audio'];
                $file_albam = md5(uniqid()) . '.' . $audio->getClientOriginalExtension();
                $profile_path = public_path('/audio');
                $audio->move($profile_path, $file_albam);
            }

         


        $genre = NULL;
        if(isset($input['genre'])){
            $genre = $input['genre'];
        }
        $sub_category = NULL;
        if(isset($input['sub_category'])){
            $sub_category = $input['sub_category'];
        }
        $secondary_genre = NULL;
        if(isset($input['secondary_genre'])){
            $secondary_genre = $input['secondary_genre'];
        }

        $all_genre = NULL;
        if(isset($input['all_genre'])){
            $all_genre = $input['all_genre'];
        }
        $all_sub_category = NULL;
        if(isset($input['all_sub_category'])){
            $all_sub_category = $input['all_sub_category'];
        }

        $all_secondary_genre = NULL;
        if(isset($input['all_secondary_genre'])){
            $all_secondary_genre = $input['all_secondary_genre'];
        }
        $generate_isre = NULL;
        if(isset($input['generate_isre'])){
            $generate_isre = $input['generate_isre'];
        }
        $generate_upc = NULL;
        if(isset($input['generate_upc'])){
            $generate_upc = $input['generate_upc'];
        }
        $add_film=[
            'album_title' => $input['album_title'],
            'album_category' => $input['album_category'],
            'all_genre' => $all_genre,
            'all_sub_category' => $all_sub_category,
            'description' => $all_secondary_genre,
            'release_date' => $input['release_date'],
            'religion' => $input['religion'],
         

            'religion_category' =>  $genre,
            'religion_sub_category' =>  $sub_category,





            'religion_description' => $secondary_genre,
            'language' => $input['language'],
            'isre' => $input['isre'],
            'generate_isre' => $generate_isre,
            'generate_upc' => $generate_upc,
            'level' => $input['level'],
            'pline' => $input['pline'],
            'cline' => $input['cline'],
            'lyrics' => $input['lyrics'],
            'composer' => $input['composer'],
            'artist' => $input['artist'],
            'mood' => $input['mood'],
            'additional_information' => $input['additional_information'],
            'callertune' => $input['callertune'],
            'album_image' => $file_notice,
            'audio' => $file_albam,
            'user_id' =>Auth::User()->id,
            // 'user_id' => 1,
            //'price' => $input['price'],
            'music_release_date' => $input['music_release_date'],
            'premier_release_date' => $input['movie_release_date'],
            'banner_image' => $input['banner_image'],
            'director' => $input['director'],

            'producer' => $input['producer'],
            'star_cast' => $input['star_cast'],
            'approve' => 1,
        ];
        $save = Film::create($add_film);

        if($save){
            return response()->json(['success' => true,'msg'=>'Film add Successfully Done','id'=>$save->id], 200);
        }
    }













    public function edit_track_action(Request $request)
    {
        $input = $request->all();
      
       

     
     
       
    

         $gs = DB::table('albam')->where('id', $request->id)
            ->update(['content_type'  =>$input['content_type'],
            'primary_track_type' => $input['primary_track_type'],
            'secondary_track_type' => $input['secondary_track_type'], 

            'instrumental' => $input['instrumental'],
            'title' =>  $input['title'],
            
            'version' => $input['version'], 
            'primary_artist' => $input['primary_artist'],
            'featuring' => $input['featuring'],
            
            'remixer' => $input['remixer'], 
            'author' => $input['author'],
            'composer' =>$input['composer'],


            'arranger' => $input['arranger'], 
            'producer' => $input['producer'],
            'pline' => $input['pline'],
            
            'production_year' => $input['production_year'], 
            'isre' => $input['isre'],
            'generate_isre' => $input['generate_isre'],

            'genre' => $input['genre'], 
            'subgenre' => $input['subgenre'],
            'secondary_genre' => $input['secondary_genre'],
            
            'sub_secondary_genre' => $input['sub_secondary_genre'], 
            'price_tier' => $input['price_tier'],
            'producer_catalogue_number' => $input['producer_catalogue_number'],

            'parental_advisory' => $input['parental_advisory'], 
            'preview' => $input['preview'],
            'track_title_language' => $input['track_title_language'],
            
            'lyrics_language' => $input['lyrics_language'],
            
            
            
            
            'lyrics' => $input['lyrics'],
            
            
            ]);

          
        if ($gs)
        {
          
            return redirect('store?id='.$request->id);
            
        }
        else
        {
            return redirect()->route('track');
        }
    }













    public function edit_song_action(Request $request)
    {
        $input = $request->all();
      
       

     
     
   //dd($request->id);
    

         $gs = DB::table('song')->where('id', $request->id)
            ->update([
                'album_title' => $input['album_title'],
            'album_category' => $input['album_category'],
           
            'release_date' => $input['release_date'],
          
         

          
            'language' => $input['language'],
         
            'generate_isre' => $input['generate_isre'],
            'generate_upc' => $input['generate_upc'],
            'level' => $input['level'],
            'pline' => $input['pline'],
            'cline' => $input['cline'],
            'lyrics' => $input['lyrics'],


            'composer' => $input['composer'],
            'artist' => $input['artist'],
            'mood' => $input['mood'],
            'additional_information' => $input['additional_information'],


            'callertune' => $input['callertune'],
           


           

            //'user_id' =>Auth::User()->id,
          

            //'price' => $input['price'],
         
            'music_release_date' => $input['music_release_date'],
            'premier_release_date' => $input['movie_release_date'],
            ]);
dd($gs);
          
        if ($gs)
        {
          
            return redirect('view_release');
            
        }
        else
        {
            return redirect()->route('sfgfsg');
        }
    }










    public function add_contact_action(Request $request){
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'subject' => ['required'],
            'message' => ['required'],
            //'commission' => ['required','integer'],
           
        ]);
        $input = $request->all();
        $re=Contact::create($input);
        if($re){
           // toastr()->success('Message send Successfully');
           return back()->with('success','Message Send Successfull!');
        }else{
            toastr()->error('Message send failed!!!');
            return redirect()->back();
        }
}




public function deletealbam(Request $request){
    $id=$request->id;
    $image = DB::table('song')->where('id', $request->id)
    ->first();
$first1 = $image->album_image;
$first2 = $image->audio;
unlink("albam/{$first1}");
unlink("audio/{$first2}");

    $rrr=Song::where('id',$id)->delete();
     if($rrr)
     {
        toastr()->success('Album Delete successfully done');
        return redirect()->route('view_release');
     } 
 }




 public function deletefilm(Request $request){
    $id=$request->id;
    $image = DB::table('film')->where('id', $request->id)
    ->first();
$first1 = $image->album_image;
$first2 = $image->audio;
unlink("albam/{$first1}");
unlink("audio/{$first2}");

    $rrr=Film::where('id',$id)->delete();
     if($rrr)
     {
        toastr()->success('Film Delete successfully done');
        return redirect()->route('view_movie');
     } 
 }



 public function view_film(Request $request){
    $id=$request->id;
    $data=[];
    $data['events_details'] = DB::table('film')->where('id', $request->id)
    ->first();
    // dd($data);
    return view('album.view_film',$data);
}





public function view_album(Request $request){
    $id=$request->id;
    $data=[];
    $data['events_details'] = DB::table('song')->where('id', $request->id)
    ->first();

    return view('album.view_albam',$data);
}


    public function abcd(Request $request){
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('route:cache');
        Artisan::call('config:cache');
        return "route_cache";
    }
}
