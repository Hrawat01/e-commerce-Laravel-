<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function index(){
        return view('admin.login');
        }



       public function dashboard(Request $req){
            $validate  = $req->validate([
                'email'    => 'required|email',
                'password' => 'required|min:3',
            ]);

               $user = User::where('email',$req->email)->first();
      if (!$user || !Hash::check($req->password, $user->password)) {
         return   $validate =$req->validate([
        "user"=>"required",
    ],["user.required"=>"User does not exist"]);
    }
    
    
    // Attempt login
    if ($user) {
        $totalSales = 45230;
$ordersCount = 1245;
$customersCount = 860;
$productsCount = 320;


$recentOrders = [
['id' => 'ORD001', 'customer' => 'Rahul Sharma', 'status' => 'Completed', 'total' => 1200],
['id' => 'ORD002', 'customer' => 'Amit Verma', 'status' => 'Pending', 'total' => 850],
['id' => 'ORD003', 'customer' => 'Neha Singh', 'status' => 'Completed', 'total' => 2340],
['id' => 'ORD004', 'customer' => 'Pooja Gupta', 'status' => 'Cancelled', 'total' => 560],
];


return view('admin.dashboard', compact(
'totalSales',
'ordersCount',
'customersCount',
'productsCount',
'recentOrders'
));
    }
      }


      public function userHome(){
$response = Http::get('https://fakestoreapi.com/products');
$products = $response->json();


return view('user.home', compact('products'));
      }




public function userDashboard() {


// ===== STATIC USER DATA =====
$user = [
'name' => 'Himesh Rawat',
'email' => 'user@example.com',
'wallet' => 1250,
];


$stats = [
'orders' => 12,
'wishlist' => 5,
'cart' => 3,
];


$recentOrders = [
['id' => 'ORD101', 'date' => '12 Jan 2026', 'status' => 'Delivered', 'total' => 1299],
['id' => 'ORD102', 'date' => '05 Jan 2026', 'status' => 'Shipped', 'total' => 799],
['id' => 'ORD103', 'date' => '28 Dec 2025', 'status' => 'Cancelled', 'total' => 499],
];


return view('user.userDashboard', compact('user', 'stats', 'recentOrders'));
       
}


public function logout(){
    return redirect('/admin/login');
}
}