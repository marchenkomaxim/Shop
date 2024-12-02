<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\Color\StoreRequest;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $storeRequest)
    {
        $data = $storeRequest->validated();

        Color::firstOrCreate($data);

        return redirect()->route('color.index');
    }
}
