<?php

namespace App\Http\Controllers;
use App\Models\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        $user = Auth::user();

        $path = $request->file('url_image')->store('public');

        $app = App::create([
            'name' => $request->input('name'),
            'category' => $request->input('category'),
            'price' => $request->input('price'),
            'url_image' => $request->input('url_image'),
            'user_id' => $user->id,
        ]);

        $app->url_image=basename($path);

        $app->save();

        return redirect()->route('app.show', $app);
    }

    public function show(App $app){
        return view("app.show" , compact('app'));
    }
    public function edit(App $app){

        return view('app.edit', compact('app'));
    }
    public function update(Request $request,App $app){

        $path = $request->file('url_image')->store('public');

        $app->version = $request->version;
        $app->description = $request->description;
        $app->price = $request->price;
        $app->url_image = $request->url_image;
        $app->url_image=basename($path);

        $app->save();

        return view('app.show', compact('app'));
    }

    public function destroy(App $app){
        $app->delete();

        return redirect()->route('app.index');

    }


}
