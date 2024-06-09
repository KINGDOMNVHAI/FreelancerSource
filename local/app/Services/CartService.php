<?php
namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use DB;

class CartService extends ServiceProvider
{
    public function __construct()
    {

    }

    public function getTotal(Request $request, $arrayCart)
    {
        $total = $request->session()->get('total');
        if ($total == null) {
            $total = 0;
            if ($arrayCart != null && count($arrayCart) > 0) {
                foreach($arrayCart as $cart) {
                    $total = $total + $cart['price_product'];
                }
            }
        }
        return $total;
    }

    public function setProductToCart(Request $request, $product, $quantity)
    {
        $total = 0;
        $totalQuantity = 0;
        if ($product->id_product != null || $product->id_product > 0)
        {
            $idProduct = $product->id_product;
            $cart = [
                'id_product' => $product->id_product,
                'name_product' => $product->name_product,
                'url_product' => $product->url_product,
                'thumbnail_product' => $product->thumbnail_product,
                'price_product' => $product->price_product,
                'unit_product' => $product->unit_product,
                'quantity' => $quantity,
            ];
            if (!$request->session()->has('arrayCart'))
            {
                $arrayCart = [];
                array_push($arrayCart, $cart);
                $request->session()->put('arrayCart', $arrayCart);
                $total = $product->price_product * $quantity;
                $totalQuantity = $totalQuantity + $quantity;
            } else {
                $sessionCart = $request->session()->get('arrayCart');
                $key = 0;
                $exist = false;

                // check product exist in cart
                foreach($sessionCart as $session) {
                    if ($session['id_product'] == $idProduct)
                    {
                        $quantity = $session['quantity'] + $quantity;
                        $editCart = [
                            'id_product' => $session['id_product'],
                            'name_product' => $session['name_product'],
                            'url_product' => $session['url_product'],
                            'thumbnail_product' => $session['thumbnail_product'],
                            'price_product' => $session['price_product'],
                            'unit_product' => $session['unit_product'],
                            'quantity' => $quantity,
                        ];
                        $sessionCart[$key] = $editCart;
                        $exist = true;
                        $total = $total + $session['price_product'] * $quantity;
                        $totalQuantity = $totalQuantity + $quantity;
                    }
                    $key++;
                }

                if (!$exist) {
                    array_push($sessionCart, $cart);
                }
                $request->session()->put('arrayCart', $sessionCart);
                $request->session()->put('total', $total);
                $request->session()->put('totalQuantity', $totalQuantity);
            }
        }
    }
}
