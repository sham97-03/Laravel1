<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Models\User;
use App\Models\Admin;
use App\Models\Medicine;
use App\Models\Category;
use App\Models\Order;
use Validator;
use Illuminate\Http\Request;
use App\Notifications\OrderStatusNotification;
use App\Notifications\NewOrderNotification;

class OrderController extends Controller
{
    public function makeOrder(Request $request){
    $admins=Admin::all();
    // Validate the request
    $request->validate([
        'medicines' => 'required|array',
        'medicines.*.name' => 'required|string',
        'medicines.*.quantity' => 'required|integer|min:1',
    ]);

    // Create a new order
    $order = $request->user()->orders()->create();

    foreach ($request->input('medicines') as $medicineData) {
        $medicine = Medicine::where('Trade_name', $medicineData['name'])
            ->orWhere('Scientific_name', $medicineData['name'])
            ->first();

        if ($medicine) {
            $requestedQuantity = (int)$medicineData['quantity'];
            $availableQuantity = (int)$medicine->Available_Quantity;

            if ($availableQuantity >= $requestedQuantity) {
                $order->medicines()->attach($medicine->id, ['quantity' => $requestedQuantity]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' =>'requested_quantity_exceeds_available',
                    'requested_quantity' => $requestedQuantity,
                    'available_quantity' => $availableQuantity,
                ]);

            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'medicine_not_found' . $medicineData['name'],
            ], 404);
        }
    }
    Notification::send($admins, new NewOrderNotification($order));
    return response()->json([
        'success' => true,
        'message' =>'order_requested_successfully',
        'order' => $order,
    ]);
}

    //________________________________________________________________________________________________________________________
    public function viewOrders(Request $request){
    $orders = Order::where('pharmacist_id', $request->user()->id)->get();

        return response()->json([
           'success' => true,
           'message' => 'orders_retrieved_successfully',
           'orders' => $orders
        ]);
    }
     //________________________________________________________________________________________________________________________
     public function showAllOrders(){
        $orders = Order::all();
        return response()->json([
            'success'=>true,
            'massege'=>'all_orders_retrieved_successfully',
            'product'=>$orders
        ]);
     }
     //________________________________________________________________________________________________________________________
     public function updateOrders(Request $request, $id)
     {
         $order = Order::findOrFail($id);
         $user= User::find($order->pharmacist_id);
         $input = $request->all();


         $validator = Validator::make($input, [
             'status' => 'required',
             'payment' => 'required',
         ]);
         if ($validator->fails()) {
             return response()->json([
                 'success' => false,
                 'message' =>'order_update_failed' ,
                 'errors' => $validator->errors(),
             ]);
         }

         $order->status = $input['status'];
         $order->payment = $input['payment'];

         if ($input['status'] === 'sent') {
             foreach ($order->medicines as $medicine) {
                 $quantityInOrder = $medicine->pivot->quantity;
                 $medicine->Available_Quantity -= $quantityInOrder;
                 $medicine->save();
             }
         }
        $order->save();
        Notification::send($user, new OrderStatusNotification ($order, $order->status));
         return response()->json([
             'success' => true,
             'message' => 'order_updated_successfully',
             'order' => $order,
         ]);
        }

    }
