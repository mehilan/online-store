<?php

namespace App\Http\Controllers\Api\V1\Products;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ProductResource;
use Domains\Catalog\Models\Category;
use Domains\Catalog\Models\Product;
use Domains\Shared\Models\Concerns\KeyFactory;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $product = Product::query()->active()->paginate();

        if($request->include)
        {
            $includes = $request->include;
            // dd($includes);
            $product->load($includes);
            // return $product; //update the some code manually
        }

        return response()->json([
            'data' => ProductResource::collection($product)
        ],200);
    }

}
