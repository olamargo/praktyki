<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Message;
use App\Models\Like;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImageUploadController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::orderBy('created_at', 'desc')->get();
    return view('index', ['posts'=>$posts]);
})->middleware('auth');

Route::get('create', function () {
    return view('create');
 })->middleware('auth');

 Route::get('home', function () {
    return view('home');
 })->middleware('auth');

 Route::get('contact', function () {
    return view('contact');
 })->middleware('auth');

 Route::get('contact', function () {
    $messages = Message::orderBy('created_at', 'desc')->get();
    return view('contact', ['messages'=>$messages]);
})->middleware('auth');

 Route::post('contact', function(Request $request){
    $message = $request->get('message');

    $message = Message::create([
        'message'=>$message,
        'user_login'=>Auth::user()->login
    ]);

    return redirect()->to('contact');
    
 });

Route::post('store', function (Request $request) {
    $note = $request->get('note');
    $title = $request->get('title');

    // $request->validate([
    //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    // ]);


    $imageName = time().'.'.$request->image->getClientOriginalExtension();

    $request->image->move(public_path('images'), $imageName);


    $post = Post::create([

        'treść'=>$note,
        'tytuł'=>$title,
        'user_id'=>Auth::user()->id,
        'image_upload_url' => $imageName
    ]);
    

    return redirect()->to('/');
})->name('store');

Route::get('open/{post}', function (Post $post) {

    
    // dump($post->users);

    return view('open', ['post' => $post]);

});

Route::post('comments/{post}', function (Request $request, Post $post) {
    $comment = $request->get('comment');
    $name = $request->get('name');


    $comment = Comment::create([
        'comment'=>$comment,
        'name'=>$name,
        'post_id'=>$post->id,
        'user_id'=>Auth::user()->id
    ]);

    return redirect()->to('open/' . $post->id);
})->name('comments');

Route::post('likes/{post}', function (Request $request, Post $post) {


    $likes = Like::create([
        'post_id'=>$post->id,
    ]);

    return redirect()->to('open/' . $post->id);
})->name('likes');

Route::get('images/{post]', [ImageUploadController::class, 'imageUpload'])->name('image.upload');
Route::post('images/[post}', [ImageUploadController::class, 'imageUploadPost'])->name('image.upload.post');

// Route::post('image.upload.post', function(){
//     dd('sdf');
// });

Route::post('update/{post}', [PostController::class, 'update'])->name('update');

Route::get('edit/{post}',[PostController::class, 'edit'])->name("edit");
Route::get('delete/{post}',[PostController::class, 'delete'])->name("delete");


// Route::get('auta', function() {

//     $tablica = ['honda', 'bmw', 'opel'];

//     $tablica2 = [
//         'marki' => [
//             'mercedes',
//             'ford'
//         ], 
//         'silniki' => ['v8'], 
//     ];

//     dd($tablica, $tablica2);
// });




// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


// Route::post("user", [UserAuth::class, 'userLogin']);
// // Route::view("login", 'login');
// Route::view("profile", 'profile');


// Route::get('/login', function () {
//     if(session()->has('user'))
//     {
//         return redirect('profile');
//     }
//     return view('login');
// });
Route::get('logout', function(Request $request){

    $login = $request->get('login');
    $pass = $request->get('password');

    $user = User::where([
        'login'=>$login,
        'password'=>$pass
    ])->first();

    Auth::logout($user);

    return view('auth.login');
});


Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::post('login', function (Request $request) {

    $login = $request->get('login');
    $pass = $request->get('password');
    $confpass = $request->get('confirm_password');


    $user = User::where([
        'login'=>$login,
        'password'=>$pass
    ])->first();

    if($user){
    Auth::login($user);
    }

    return view('home');
});

Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::post('register', function (Request $request) {

    $firstName = $request->get('first_name');
    $surname = $request->get('surname');
    $login = $request->get('login');
    $pass = $request->get('password');
    $confpass = $request->get('confirm_password');
    $admin = $request->get('admin');

    $user = User::create([
        'first_name'=>$firstName,
        "surname"=>$surname,
        'login'=>$login,
        'password'=>$pass,
        'confirm_password'=>$confpass,
        'admin'=>$admin
        
    ])->first();

    $user = User::where([
        'login'=>$login,
        'password'=>$pass
    ])->first();

    if($user){
    Auth::login($user);
    }

    return view('home');
});

Route::get('users', function (){
    $users = User::orderBy('created_at', 'desc')->get();
    return view('users',['users'=>$users]);
})->middleware('auth');

Route::post('users', function(Request $request){
    $user = $request->get('user');

    $user = User::create([
        'user'=>$user,
    ]);

    return redirect()->to('users');
    
 });
