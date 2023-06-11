<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Owner;
use App\Models\Image;
use App\Models\PrimaryCategory;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:owners');

        $this->middleware(function ($request, $next) {
            $id = $request->route()->parameter('product');
            if(!is_null($id)){
                $productsOwnerId = Product::findOrFail($id)->shop->owner->id;
                $productId = (int)$productsOwnerId;
                if($productId !== Auth::id()){
                    abort(404);
                }
            }
            return $next($request);
        });
    }

    public function index()
    {
        $ownerInfo = Owner::with('shop.product.imageFirst')
            ->where('id', Auth::id())->get();

        return view('owner.products.index', compact('ownerInfo'));
    }

    public function create()
    {
        $shops = Shop::where('owner_id', Auth::id())
            ->select('id', 'name')
            ->get();

        $images = Image::where('owner_id', Auth::id())
            ->select('id' ,'title', 'filename')
            ->orderBy('updated_at', 'desc')
            ->get();

        $categories = PrimaryCategory::with('secondary')
            ->get();
        
        return view('owner.products.create', compact('shops', 'images', 'categories'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
