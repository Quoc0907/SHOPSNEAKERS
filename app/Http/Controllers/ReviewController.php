<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Product;

class ReviewController extends Controller
{
    public function store(Request $request, $productId)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string'
        ]);

        Review::create([
            'product_id' => $productId,
            'user_id' => auth()->id(),
            'rating' => $request->rating,
            'comment' => $request->comment
        ]);

        // Cập nhật rating trung bình cho sản phẩm
        $product = Product::find($productId);
        $product->rating = Review::where('product_id', $productId)->avg('rating');
        $product->reviews_count = Review::where('product_id', $productId)->count();
        $product->save();

        return redirect()->back()->with('success', 'Đánh giá của bạn đã được gửi!');
    }
}
