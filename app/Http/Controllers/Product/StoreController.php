<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $storeRequest)
    {
        $data = $storeRequest->validated();

        Product::firstOrCreate($data);

        return redirect()->route('product.index');
    }
}
