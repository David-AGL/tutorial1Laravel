<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\JsonResponse;

class ProductApiControllerV4 extends Controller
{
    public function index(): JsonResponse
    {
        $products = new ProductCollection(Product::all());

        return response()->json($products, 200);
    }

    public function show(string $id): JsonResponse
    {
        $product = new ProductResource(Product::findOrFail($id));

        return response()->json($product, 200);
    }

    public function store(StoreProductRequest $request): JsonResponse
    {
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        return response()->json([
            'message' => 'Producto creado correctamente',
            'data' => new ProductResource($product),
        ], 201);
    }
}
