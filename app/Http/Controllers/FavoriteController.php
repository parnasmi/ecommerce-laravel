<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{

    public function index(Request $request)
    {
        return $request->user()->favorites()->paginate(10);
    }

    public function get() {}

    public function store(Request $request): JsonResponse
    {
        $request->user()->favorites()->attach($request->product_id);

        return response()->json([
            "success" => true
        ]);
    }

    public function destroy(Request $request, $product_id): JsonResponse
    {
        $user = $request->user();

        if (!$user->hasFavorite($product_id)) {
            return response()->json([
                'success' => false,
                'message' => 'Product is not in favorites'
            ], 404);
        }

        $user->favorites()->detach($product_id);

        return response()->json([
            "success" => true
        ]);
    }
}
