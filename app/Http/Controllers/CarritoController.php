<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Producto;

class CarritoController extends Controller
{
   public function __construct()
   {
       // if ( ! \Session:: has ( ' cart ' )) \Session:: put ('cart', array ());
      if(!\Session::has('cart')) \Session::put('cart', array());
   }

    //mostrar carrito
public function show (){
	$cart= \Session:: get ('cart');

	$total = $this->total();
	return view('frond.store.carrito',compact('cart','total'));
}



    //agregar producto


   public function add(Producto $producto)
   {

   	$cart = \Session::get('cart');
    $cart[$producto->id]=$producto;
    $producto->quantity=1;
    \Session::put('cart',$cart);

  return redirect()->route('mostrar-carrito');
   }
    

    //eliminar producto
   public function delete(Producto $producto)
   {

    $cart = \Session::get('cart');
    unset($cart[$producto->id]);
    \Session::put('cart',$cart);

  return redirect()->route('mostrar-carrito');
   }
    

    //actualizar producto

  public function update(Producto $producto, $quantity){
    // dd( 'sadadwqqwf'.$producto.$quantity);
    $cart = \Session::get('cart');
    $cart[$producto->id]->quantity=$quantity;
    \Session::put('cart',$cart);

    return redirect()->route('mostrar-carrito');
  }

    //vaciar carrito

   public function trash(){
    \Session::forget('cart');
    return redirect()->route('mostrar-carrito');
   }


    //total
 private function total(){

    $cart = \Session::get('cart');
    $total=0;
   foreach ($cart as $item) {
     $total+=$item->precio * $item->quantity;
   }

    return $total;
  }


  //detalle pedido

  public function detalle(){

    //if (count(\Session::get('cart'))<=0) redirect()->route('catalogo');

  $cart= \Session:: get ('cart');

  $total = $this->total();
  return view('frond.store.detalle-pedido',compact('cart','total'));

  }

}
