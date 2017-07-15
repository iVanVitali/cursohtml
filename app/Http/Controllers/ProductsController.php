<?php

namespace App\Http\Controllers;

use Ecom\Repo\Product\ProductInterface;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    protected $product;

    public function __construct(ProductInterface $product)
    {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->product->getAllProducts();

        return response()->json([
            'data'  =>  $products->toArray()
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return response()->json([
            'data'  => [
                'message' => 'Create product'
            ]
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->product->getById($id);

        if (!$product)
        {
            return response()->json([
                'error' => [
                    'message'   =>  'Product does not exist'
                ]
            ], 404);
        }

        return response()->json([
            'data' => $product->toArray()
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return response()->json([
            'data' => [
                'message' => 'Product updated!'
            ]
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        return response()->json([
            'data' => [
                'message' => 'Product was deleted!'
            ]
        ], 200);
    }
}
