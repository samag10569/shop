<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\User;
use App\Models\Kala;
use App\Models\Post;
use App\Models\Tag;
class AdminController extends Controller
{
    // dd("ok");
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('Admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "hi adminnnn";
        return view('indexadmin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('createkala');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

// ------------------------آپلود عکس------------------------

        $fileimage= $request->file('pathfileimage');
        if($fileimage){
            $imagename= $fileimage->getClientOriginalName();
            $fileimage->move('images/kalas',$imagename);


        }else{

            $imagename='noimage.jpg';
        }
// --------------------------------------------------------------
$kala= new Kala();

        $kala->name=$request->get('name');
        $kala->price=$request->get('price');
    //    $kala->category_id=$request-> Category()->id;
       $kala->fileimage=$imagename;
        if ($kala->save()){
            $request->session()->flash('msg',"your kala create successfuly");
        }else{
            $request->session()->flash('msg',"your kala NOT create successfuly");

        }

        return redirect('showkala');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edituser=User::find($id);
        return view('admin.users.edit')->with('user',$edituser);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $user=User::find($id);
        $user->name=$request->post('name');
        $user->email=$request->post('email');
        $user->save();
        return redirect('showuser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('showuser');
    }
    public function user()
    {
        $user=User::all();
        return view('users')->with('users',$user);
    }
// ====================================contollerkala========================================
    public function kala()
    {
        $kala=Kala::all();
        // $category=Category::all();
        return view('kalas')->with('kalas',$kala);
    }

    public function editkala($id)
    {
        $editkala=Kala::find($id);
        return view('admin.kala.edit')->with('kala',$editkala);
    }

    public function updatekala(Request $request, $id)
    {
        $fileimage= $request->file('pathfileimage');
        if($fileimage){
            $imagename= $fileimage->getClientOriginalName();
            $fileimage->move('images/kalas',$imagename);


        }

        $kala=Kala::find($id);
        $kala->name=$request->post('name');
        // $kala->category_id=$request->post('category_id');
        $kala->price=$request->post('price');
        $kala->fileimage=$imagename;
        if ($kala->save()){
            $request->session()->flash('msg',"your kala update create successfuly");
        }else{
            $request->session()->flash('msg',"your kala NOT update successfuly");

        }
        // $kala->save();
        return redirect('showkala');
    }
    public function destroykala($id)
    {
        $kala=Kala::find($id);
        $kala->delete();
        return redirect('showkala');
    }

    public function kalaform()
    {

       return view('kalacreate');
    }

    public function createkala(Request $request)
    {
        $kala= new Kala();
        $kala->name=$request->post('name');
        $kala->category_id=$request->post('category_id');
        $kala->price=$request->post('price');
        $kala->num=$request->post('num');

        $kala->save();
        return redirect('showkala')->with('msg','کالا اضافه شد.');

    }


    // =====================================post===================================
    public function post(){

        $post=Post::all();
        return view('posts')->with('posts',$post);

    }



    
    // public function tag($id){


    //     $post=Post::findOrfail($id);

    //     $tags=$post->tag;
    //     echo $post->title. "<br>".$post->content. "<br>".'tags is :'. "<br>";

    //     foreach($tags as $tag){
    //         echo $tag->name. "<br>";
    //     };

    // }

}
