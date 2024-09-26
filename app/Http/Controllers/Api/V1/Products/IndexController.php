<?php

namespace App\Http\Controllers\Api\V1\Products;

use App\Http\Controllers\Controller;
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
        return [];
    }

    public function test()
    {
        $key = KeyFactory::generate(
            prefix: 'key', // what you want to prefix your keys with.
            length: 10, // optional - the default of 20 is set in the config.
        );

        // dd($key);

       $test = Product::query()->inactive()->first();
       dd($test);
    }
}
