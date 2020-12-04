<?php

namespace App\Http\Controllers;
use App\Models\App;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $apps = App::orderBy('id', 'desc')->paginate(10);

        return view("app.index", compact('apps'));
    }

    public function create(){
        return view("app.create");
    }

    public function store(Request $request){

        $apps = new App();

        $apps->name =  $request->name;
        $apps->category =  $request->category;
        $apps->price =  $request->price;
        $apps->url_image =  $request->url_image;
        $apps->user_id =  $request->user_id;

        $apps->save();

        return redirect()->route('app.show', $apps);
    }

    public function show(App $app){
        return view("app.show" , compact('app'));
    }
    public function edit(App $app){

        return view('app.edit', compact('app'));
    }
    public function update(Request $request,App $app){

        $app->version = $request->version;
        $app->description = $request->description;
        $app->price = $request->price;
        $app->url_image = $request->url_image;

        $app->save();


        return view('app.show', compact('app'));
    }

    public function destroy(App $app){
        $app->delete();

        return redirect()->route('app.index');

    }

}
