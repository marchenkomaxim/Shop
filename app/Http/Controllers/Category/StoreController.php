<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $storeRequest)
    {
        $data = $storeRequest->validated();

        Category::firstOrCreate($data);

        return redirect()->route('category.index');
    }
}
