<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Prodectse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $prodect = Prodectse::paginate(4);
        $cates = Category::where('popuer' , '1')->take(15)->get();
        
        return view('frontenend.index' , compact('prodect', 'cates'));
    }
     public function category(){
         $category = Category::where('stuts' ,'0')->get();
         return view('frontenend.category' , compact('category'));
     }
    // public function search(Request $request){
    //     $search = $request->search;
    //     if($search == ''){
    //         $prodect = Prodect::paginate(4);
    //          return view('frontenend.index' , compact('prodect'));
    //     }
    //     $prodect = Prodect::where('name' , 'Like' , '%'.$search.'%')->get();
    //     return view('frontenend.index' , compact('prodect'));
    // }

  

    public function viewcategory($sulg){
        if(Category::where('sulg' , $sulg)->exists()){
            $category = Category::where('sulg' , $sulg)->first();
            $prodects = Prodectse::where('cat_id' , $category->id)->where('status' , '0')->get();
            return view('frontenend.prodect.all' , compact('category' , 'prodects'));
        }else{
            return redirect('/')->with('stusas' , 'sulg is banse data');
        }
        
    }
    public function addcart(Request $request , $id)
    {
        if(Auth::id()){
         
            $user = auth()->user();
            $prodect =Prodectse::findOrFail($id);
            $cart = new Cart();
            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->prodect_tille = $prodect->meat_title;
            $cart->qty = $request->input('qty');
            $cart->price = $prodect->orgin_price;
            $cart->save();
            return redirect()->back();
        }else{
            return redirect('login');
        }
    }

    public function showcart()
    {
        
        $usercount = User::count();
        $cart = Cart::all();
        return view('frontenend.user.showcart' , compact( 'usercount' , 'cart'));
    }

    public function delete($id)
    {
        $carts = Cart::findOrFail($id);
        $carts->delete();
        return redirect()->back()->with('stusas' , 'data Is Deleted');
    }

    public function orderconfrim(Request $request)
    {
     
        foreach ($request->prodectname as $key =>$prodectname) {
            $data = new order;
            $data->prodect_tille = $request->prodectname[$key];
            $data->qty = $request->qty[$key];
            $data->price = $request->price[$key];
            $data->name = $request->input('name');
            $data->address = $request->input('address');
            $data->phone = $request->input('phone');
            $data->save();
        }
        return redirect()->back();
      
    }
}