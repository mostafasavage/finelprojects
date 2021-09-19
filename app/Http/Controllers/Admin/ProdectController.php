<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prodectse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProdectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodects = Prodectse::all();
         
        return view('admin.prodect.all' ,compact('prodects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prodect.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prod = new Prodectse();
        $prod->name = $request->input('name');
        $prod->orgin_price = $request->input('orgin_price');
        $prod->selling_price = $request->input('selling_price');
        $prod->description = $request->input('description');
        $prod->small_description = $request->input('small_description');
        $prod->sulg = $request->input('sulg');
        $prod->meat_title = $request->input('meat_title');
        $prod->meat_kywords = $request->input('meat_kywords');
        $prod->meat_description = $request->input('meat_description');
        $prod->tax = $request->input('tax');
        $prod->qty = $request->input('qty');
        $prod->status = $request->input('status') == TRUE ? '1' :'0';
        $prod->trending = $request->input('trending') == TRUE ? '1' : '0';
        $prod->cat_id = $request->input('cat_id');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileExpans = $file->getClientOriginalName();
            $fileName = time().'.'.$fileExpans;
            $prod->image = $fileName;
            $file->move('home_panel/assets/images/prodect/',$fileName);
            $prod->save();
            return redirect()->back()->with('stusas' , 'data Is Created');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod = Prodectse::findOrFail($id);
        
        return view('admin.prodect.show' , compact('prod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = Prodectse::findOrFail($id);

        return view('admin.prodect.edit' , compact('prod'));
      
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
        $prod = Prodectse::findOrFail($id);
        $prod->cat_id = $request->input('cat_id');
        $prod->name = $request->input('name');
        $prod->orgin_price = $request->input('orgin_price');
        $prod->meat_description = $request->input('meat_description');
        $prod->selling_price = $request->input('selling_price');
        $prod->description = $request->input('description');
        $prod->small_description = $request->input('small_description');
        $prod->sulg = $request->input('sulg');
        $prod->meat_title = $request->input('meat_title');
        $prod->meat_kywords = $request->input('meat_kywords');
        $prod->tax = $request->input('tax');
        $prod->qty = $request->input('qty');
        $prod->status = $request->input('status') == TRUE ? '1' : '0';
        $prod->trending = $request->input('trending') == TRUE ? '1' : '0';
        if($request->hasFile('image')){
            $destmtion = 'home_panel/assets/images/prodect/'.$prod->image;
            if(File::exists($destmtion)){
                File::delete($destmtion);
            }
            $file = $request->file('image');
            $fileExpans = $file->getClientOriginalName();
            $fileName = time().'.'.$fileExpans;
            $file->move('home_panel/assets/images/prodect/',$fileName);
            $prod->image = $fileName;
        }
        $prod->update();
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
        $prod = Prodectse::findOrFail($id);
        $prod->delete();
        return redirect()->back()->with('stusas' , 'data Is Deleted');

    }
}
