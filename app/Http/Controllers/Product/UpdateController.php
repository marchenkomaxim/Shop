<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {

        $data = $request->validated();

        // Обновление изображения, если оно предоставлено
        if (isset($data['preview_image'])) {
            // Удаляем старое изображение, если оно существует
            if ($product->preview_image) {
                Storage::disk('public')->delete($product->preview_image);
            }
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        }

        // Извлечение идентификаторов тегов и цветов
        $tagsIds = $data['tags'] ?? [];
        $colorsIds = $data['colors'] ?? [];
        unset($data['tags'], $data['colors']);

        // Обновление основной информации о продукте
        $product->update($data);

        // Синхронизация тегов и цветов
        $product->tags()->sync($tagsIds);
        $product->colors()->sync($colorsIds);

        return redirect()->route('product.index');
    }
}
