<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categors = Category::all();
        return view('admin.category.all' , compact('categors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cate = new Category();
        $cate->name = $request->input('name');
        $cate->sulg = $request->input('sulg');
        $cate->description = $request->input('description');
        $cate->stuts = $request->input('stuts') == TRUE ? '1' : '0';
        $cate->popuer = $request->input('popuer') == TRUE ? '1' : '0';
        $cate->meat_title = $request->input('meat_title');
        $cate->meat_descript = $request->input('meat_descript');
        $cate->meat_keywords = $request->input('meat_keywords');
        $cate->price = $request->input('price');
        $cate->tax = $request->input('tax');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileExpans = $file->getClientOriginalName();
            $fileName = time().'.'.$fileExpans;
            $file->move('home_panel/assets/images/category/',$fileName);
            $cate->image = $fileName;
        }
        $cate->save();
        return redirect()->back()->with('stusas' , 'data Is Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Category::findOrFail($id);
        return view('admin.category.show', compact('cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Category::findOrFail($id);
        return view('admin.category.edit', compact('cat'));
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
        $cat = Category::findOrFail($id);
        $cat->name = $request->input('name');
        $cat->sulg = $request->input('sulg');
        $cat->description = $request->input('description');
        $cat->stuts = $request->input('stuts') == TRUE ? '1' : '0';
        $cat->popuer = $request->input('popuer') == TRUE ? '1' : '0';
        $cat->meat_title = $request->input('meat_title');
        $cat->meat_descript = $request->input('meat_descript');
        $cat->meat_keywords = $request->input('meat_keywords');
        $cat->price = $request->input('price');
        $cat->tax = $request->input('tax');
        if($request->hasFile('image')){
            $destmain = 'home_panel/assets/images/category/'.$cat->image;
            if(File::exists($destmain)){
                File::delete($destmain);
            }
            $file = $request->file('image');
            $fileExpans = $file->getClientOriginalName();
            $fileName = time().'.'.$fileExpans;
            $file->move('home_panel/assets/images/category/',$fileName);
            $cat->image = $fileName;
        }
        $cat->update();
        return redirect()->back()->with('stusas' , 'data Is Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cate = Category::findOrFail($id);
        $cate->delete();
        return redirect()->back()->with('stusas' , 'data Is Removed');
    }
}
