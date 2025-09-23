<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{ 
    public function index(){
        $data['orders'] = Order::latest()->get();
        return view('backend.admin.orders.index', $data);
    }
    public function store(Request $request){
        $data = new Order;                                              
        $data->package_id = $request->package_id; 
        $data->name = $request->name; 
        $data->email = $request->email; 
        $data->phone = $request->phone; 
        $data->save();                                                 
        return redirect()->back()->with('success','Thanks "'.$request->name.'" for Order that Package.');
    }
    public function sendEmail(Request $request){
        // echo "submited";

        // Validate input
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $data = $request->only([
            'name', 'phone', 'email', 'address', 'division', 'district', 'thana', 'package'
        ]);

        try {
            // Send email
            // Mail::send([], [], function ($message) use ($data) {
            //     $message->to('arman.alawaf@gmail.com')
            //             ->subject('New Order Notification')
            //             ->setBody(
            //                 "You have a new submission:\n\n".
            //                 "Name: {$data['name']}\n".
            //                 "Email: {$data['email']}", 
            //                 'text/plain'
            //             );
            // });
            
            // Mail::raw("You have a new submission:\nName: {$data['name']}\nEmail: {$data['email']}", function ($message) {
            //     $message->to('arman.alawaf@gmail.com')
            //             ->subject('New Order Notification');
            // });
            
        Mail::raw(
            "New Order Submission:\n\n" .
            "Name: {$data['name']}\n" .
            "Phone: {$data['phone']}\n" .
            "Email: {$data['email']}\n" .
            "Address: {$data['address']}\n" .
            "Division: {$data['division']}\n" .
            "District: {$data['district']}\n" .
            "Thana: {$data['thana']}\n" .
            "Package: {$data['package']}",
            function ($message) {
                $message->to([
                    'sales@kloud.com.bd', 
                    'hazrat.ali@kloud.com.bd', 
                    'arman.sharif@alawaf.com.bd',
                    'arafat.hossain@kloud.com.bd'
                ])
                        ->subject('New Order Notification');
            }
        );
        return redirect('/')->with('success', '✅ Email sent successfully!');

            // return response()->json([
            //     'status' => 'success',
            //     'message' => '✅ Email sent successfully!'
            // ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => '❌ Mail error: ' . $e->getMessage()
            ], 500);
        }
    }
    public function destroy(Request $request, $id){
        $data = Order::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done.');
    }
}
