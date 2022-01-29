<?php

namespace App\Http\Controllers;

use App\Models\ordermanage as Order;
use App\Http\Resources\Order as OrderResource;
use Illuminate\Http\Request;

class OrderController extends Controller
{
 
    public function index(){
        $ordermanage = Order::paginate(15);
        return OrderResource::collection($ordermanage);
      }
    
      public function show($id){
        $order = Order::findOrFail( $id );
        return new OrderResource( $order );
      }
    
      public function store(Request $request){
        $order = new Order;
        $order->ordem = $request->input('ordem');
        $order->status = $request->input('status');
    
        if( $order->save() ){
          return new OrderResource( $order );
        }
      }
    
       public function update(Request $request){
        $order = Order::findOrFail( $request->id );
        $order->ordem = $request->input('ordem');
        $order->status = $request->input('status');
    
        if( $order->save() ){
          return new OrderResource( $order );
        }
      }
          
      public function destroy($id){
        $order = Order::findOrFail( $id );
        if( $order->delete() ){
          return new OrderResource( $order );
        }
    
      }
}
