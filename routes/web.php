<?php
use App\User;
use App\Models\Roles;
use App\Models\Post;
use Illuminate\Foundation\Auth\User as AuthUser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create Sitething great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});


Route::get('/index',['as'=>'index','uses'=>'SiteController@index']);
Route::get('/login',['as'=>'tem.login','uses'=>'SiteController@login']);
// Route::get('/register',['as'=>'tem.register','uses'=>'HomeController@register']);
Route::get('/register',['as'=>'auth.register','uses'=>'SiteController@register']);

Route::get('/category',['as'=>'tem.category','uses'=>'SiteController@category']);
Route::get('/details',['as'=>'tem.details','uses'=>'SiteController@details']);
Route::get('/checkout',['as'=>'tem.checkout','uses'=>'SiteController@checkout']);
Route::get('/cart',['as'=>'tem.cart','uses'=>'SiteController@cart']);
Route::get('/confirmation',['as'=>'tem.confirmation','uses'=>'SiteController@confirmation'])->name('confirm');
Route::get('/tracking',['as'=>'tem.tracking','uses'=>'SiteController@tracking']);
Route::get('/contact',['as'=>'tem.contact','uses'=>'SiteController@contact']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ===================================admin========================================
// Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/showuser', 'AdminController@user');
    Route::get('/edit/{id}','AdminController@edit');
    Route::post('/update/{id}','AdminController@update');
    Route::get('/delete/{id}','AdminController@destroy');

    Route::get('/user/roles/attach', function (){

        $user=User::find(17);
        $role=Roles::find(1);
        $user->Roles()->attach($role->id,['created_at'=>'2020-2-05 00:00:00']);

    });
    Route::get('/showkala', 'AdminController@kala');

    Route::get('/edit-kala/{id}','AdminController@editkala');
    Route::post('/update-kala/{id}','AdminController@updatekala');
    Route::get('/delete-kala/{id}','AdminController@destroykala');

    Route::get('/show-form-kala', 'AdminController@create');

    Route::post('/kalacreate', 'AdminController@store');

    // Route::get('admin_area', ['middleware' => 'Admin', function () {
    //     Route::get('admin', 'AdminController@index');
    // }]);
        Route::resource('/indexadmin','AdminController');
        // Route::resource('/show','AdminController');
//         Route::resource('/update','UserController',['expect'=>['show','create','store'] ]);
// Route::get('/indexadmin','AdminController@index');

    // });

    Route::get('/myusers','AdminController@index');

// ==========================================post==================================
// Route::get('/showpost','AdminController@post');
Route::get('/showtag','AdminController@tag');

// =======================================post mostaghel============================

Route::get('/seepost','PostController@index');

Route::get('/show-form-post', 'PostController@create');
Route::post('/postcreate', 'PostController@store');

Route::get('/edit-post/{id}','PostController@edit');
Route::post('/update-post/{id}','PostController@update');

Route::get('/delete-post/{id}','PostController@destroy');





    // Route::get('/post/{id}/tags', function ($id){

    //     $post=Post::findOrfail($id);

    //     $tags=$post->tag;
    //     echo $post->title. "<br>".$post->content. "<br>".'tags is :'. "<br>";

    //     foreach($tags as $tag){
    //         echo $tag->name. "<br>";
    //     }
    //     });
