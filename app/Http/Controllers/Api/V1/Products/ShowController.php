<?php

namespace App\Http\Controllers\Api\V1\Products;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ProductResource;
use Domains\Catalog\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $key)
    {
        //
        // dd(true);
        $product = Product::where('key', $key)->firstOrFail();

        if($request->include)
        {
            $includes = $request->include;
            // dd($includes);
            $product->load($includes);
            // return $product; //update the some code manually
        }

        return response()->json([
            'data' => new ProductResource($product)
        ],200);
    }
}
