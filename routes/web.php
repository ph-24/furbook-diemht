<?php

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
use Illuminate\Support\Facades\Input;
//DB::enableQueryLog()

Route::get('/', function () {
	//c1
    // return view('cats/show')->with('number',10);

    //c2
    // $data = array[1,2];
    // list($a,$b)=$data;
    // dd($b);

    //c2
//    $number=10;
//    return view('cats/show',compact('number'));

    //c3
//    return view('cats/show',array('number' => 10));
    return redirect()->route('cat.index');
});
Route::get('/cats/breeds/{name}', function ($name) {
    $breed = Furbook\Breed::with('cats')->where('name',$name)->first();
    //dd($breed->cats);
    return view('cats.index')->with('breed', $breed)->with('cats', $breed->cats);
});
//Route::get('/cats', function (){
//    $cats = Furbook\Cat::all();
//    //dd($cats[0]->breed);
//    return view('cats/index')->with('cats', $cats);
//});

//
////Route::get('/cats/{cat}', function (Furbook\Cat $cat) {
////    dd($cat);
////    dd(DB::getQueryLog());
//////    $cat = Furbook\Cat::find($id);
////    return view('cats.show')->with('cat', $cat);
////})->where('id','[0-9]+');
//Route::get('/cats/{id}', function ($id) {
//    $cat = Furbook\Cat::find($id);
//    return view('cats.show')->with('cat', $cat);
//})->where('id','[0-9]+');
//
//Route::get('/cats/create', function () {
//    return view('cats.create');
//});
//
//Route::post('/cats', function () {
////    dd(Input::all());
//    $cat = Furbook\Cat::create(Input::all());
//    return redirect('cats/'.$cat->id)->with('cat', $cat)->withSuccess('Create cat successfully');
//});
//Route::get('/cats/{id}/edit', function ($id) {
//    $cat =Furbook\Cat::find($id);
//    return view('cats.edit')->with('cat', $cat);
//});
//Route::put('/cats/{id}', function ($id) {
////    dd(Input::all());
//    $cat = Furbook\Cat::find($id);
//    $cat->update(Input::all());
//    return redirect('cats/'.$cat->id)->with('cat', $cat)->withSuccess('Update cat successfully');
//});
////Route::get('/cats/{id}/delete', function ($id) {
////    $cat = Furbook\Cat::find($id)->first();
////    $cat->delete();
////    return redirect('cats/')->withSuccess('Delete cat successfully');
////});
//Route::delete('/cats/{id}', function ($id) {
//    $cat = Furbook\Cat::find($id);
//    $cat->delete();
//    return redirect('cats/')->withSuccess('Delete cat successfully');
//});
Route::resource('cat', 'CatController');

