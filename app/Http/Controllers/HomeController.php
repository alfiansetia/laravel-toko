<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Catprod;
use App\Models\Comp;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comp = Comp::first();
        $user = Auth::user();
        return view('backend.dashboard', compact(['comp', 'user']))->with('title', 'Dashboard');
    }

    public function home()
    {
        $comp = Comp::first();
        $prodfav = Product::where('show', 1)->where('is_fav', 1)->get();
        $catprod = Catprod::where('show', 1)->get();
        $album = Album::where('show', 1)->get();
        return view('frontend.index', compact(['comp', 'prodfav', 'catprod', 'album']));
    }

    public function product(Request $request)
    {
        $comp = Comp::first();
        $prodfav = Product::where('show', 1)->where('is_fav', 1)->get();
        if ($request->cat != '') {
            $product = Product::where('catprod_id', $request->cat)->where('show', 1)->get();
            $sorttitle = Catprod::find($request->cat)->name;
        } else {
            $product = Product::where('show', 1)->get();
            $sorttitle = "Semua Produk";
        }
        $catprod = Catprod::where('show', 1)->get();
        return view('frontend.product', compact(['comp', 'prodfav', 'product', 'catprod', 'sorttitle']));
    }

    public function productDetail(Product $product)
    {
        $comp = Comp::first();
        $prodfav = Product::where('show', 1)->where('is_fav', 1)->get();
        $product = Product::with('fotoprod')->find($product->id);
        return view('frontend.product_detail', compact(['comp', 'prodfav', 'product']));
    }

    public function about()
    {
        $comp = Comp::first();
        $prodfav = Product::where('show', 1)->where('is_fav', 1)->get();
        return view('frontend.about', compact(['comp', 'prodfav']));
    }

    public function galeryDetail(Album $album)
    {
        $comp = Comp::first();
        $prodfav = Product::where('show', 1)->where('is_fav', 1)->get();
        $album = Album::with('foto')->find($album->id);
        return view('frontend.galery_detail', compact(['comp', 'prodfav', 'album']));
    }

    public function galery(Request $request)
    {
        $comp = Comp::first();
        $prodfav = Product::where('show', 1)->where('is_fav', 1)->get();
        $albums = Album::with('foto')->where('show', 1)->get();
        return view('frontend.galery', compact(['comp', 'prodfav', 'albums']));
    }
}
