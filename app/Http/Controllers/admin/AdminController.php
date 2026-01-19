<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function login(){
        return view('admin/admin-login');
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




public function logout(){
    return redirect('/admin/login');
}
}