<?php

namespace Furbook\Http\Controllers;

use Furbook\Cat;
use Furbook\Http\Requests\CatRequest;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->only('destroy');
    }

    public function index()
    {
        $cats = Cat::all();
        //dd($cats[0]->breed);
        return view('cats/index')->with('cats', $cats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatRequest $request)
    {
//        $request->validator(
//            [
//                'name' => 'required|max:255',
//                'date_of_birth' => 'required|date_format:"Y/m/d"',
//                'breed_id' => 'required|numeric',
//            ], [
//                'required' => 'Cột :attribute là bắt buộc',
//                'max' => 'Cột :attribute độ dài nhỏ hơn :max',
//                'date_format' => 'Cột :attribute phải có format: Y/m/d',
//                'numeric' => 'Cột :attribute phải là kiểu số'
//
//            ]
//        );
//        $validator = Validator::make($request->all(),
//            [
//                'name' => 'required|max:255',
//                'date_of_birth' => 'required|date_format:"Y/m/d"',
//                'breed_id' => 'required|numeric',
//            ], [
//                'required' => 'Cột :attribute là bắt buộc',
//                'max' => 'Cột :attribute độ dài nhỏ hơn :max',
//                'date_format' => 'Cột :attribute phải có format: Y/m/d',
//                'numeric' => 'Cột :attribute phải là kiểu số'
//
//            ]
//        );
//        if ($validator->fails()) {
//            return redirect('post/create')
//                ->withErrors($validator)
//                ->withInput();
//        }
        $user_id = Auth::user()->id;
        $request->request->add(['user_id' => $user_id]);
        $cat = Cat::create($request->all());
        return redirect()->route('cat.show', $cat->id)->with('cat', $cat)->withSuccess('Create cat successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cat $cat)
    {
//        $cat = Cat::find($id);
        return view('cats.show')->with('cat', $cat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cat $cat)
    {
        if(!Auth::user()->canEdit($cat)){
            return redirect()
                ->route('cat.index')
                ->withError('Permission denied');
        }
        return view('cats.edit')->with('cat', $cat);
//        dd($cat);
//        if (!Auth::user()->canEdit($cat)) {
//            return redirect()->route('cat.index')->withErrors('Permisson denied');
//        }
////            $cat =Cat::find($id);
//        return view('cats.edit')->with('cat', $cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CatRequest $request, Cat $cat)
    {
//        $cat = Cat::find($id);
        $cat->update($request->all());
        return redirect()->route('cat.show', $cat->id)->with('cat', $cat)->withSuccess('Update cat successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cat $cat)
    {
//        $cat = Cat::find($id);
        $cat->delete();
        return redirect()->route('cat.index')->withSuccess('Delete cat successfully');
    }
}
