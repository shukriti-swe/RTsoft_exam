<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customerpurchasedproduct;
use App\customersalesproduct;
use App\product;
use App\customer;
use DB;
class homecontroller extends Controller
{
     public function index()
  {
    

    return view('index');
  }

  public function home()
  {
    

    return view('index');
  }
  public function dashboard()
  {
    $view_data = DB::table('customerpurchasedproducts')
    ->join('products', 'products.id', '=', 'customerpurchasedproducts.product_id')
    ->select('customerpurchasedproducts.created_at', 'products.*')
    ->get();
    $total_purchased = customerpurchasedproduct::count();

    $view_data2 = DB::table('customersalesproducts')
    ->join('products', 'products.id', '=', 'customersalesproducts.product_id')
    ->select('customersalesproducts.created_at', 'products.*')
    ->get();
    $total_sale = customersalesproduct::count();

    return view('dashboard')->with('view_data', $view_data)->with('total_purchased', $total_purchased)->with('view_data2', $view_data2)->with('total_sale', $total_sale);
  }

  public function customer_info()
  {
    
    $customers = customer :: orderBy('id','asc')->get();
    return view('customer_info')->with('customers', $customers);
  }

  public function customer_details(Request $request){

      $customer_id= $request->customer;

      $customer_details= DB::table('customers')

      ->join('customerpurchasedproducts', 'customers.id', '=', 'customerpurchasedproducts.customer_id')
      ->join('products', 'customerpurchasedproducts.product_id', '=', 'products.id')
      ->where('customers.id', '=' ,$customer_id)
      ->select('customerpurchasedproducts.created_at as date', 'products.name as p_name','products.price as p_price', 'customers.name as c_name')
      ->get();

      $customer_details2= DB::table('customers')

      ->join('customersalesproducts', 'customers.id', '=', 'customersalesproducts.customer_id')
      ->join('products', 'customersalesproducts.product_id', '=', 'products.id')
      ->where('customers.id', '=' ,$customer_id)
      ->select('customersalesproducts.created_at as date', 'products.name as p_name','products.price as p_price', 'customers.name as c_name')
      ->get();
      

      $customers = customer :: orderBy('id','asc')->get();
      
      
      

      return view('customer_info')->with('customers', $customers)->with('customer_details', $customer_details)->with('customer_details2', $customer_details2);

      }

      public function sell_report(){

      $customer_details= DB::table('customers')

      ->join('customerpurchasedproducts', 'customers.id', '=', 'customerpurchasedproducts.customer_id')
      ->join('products', 'customerpurchasedproducts.product_id', '=', 'products.id')
      ->select('customerpurchasedproducts.created_at as date', 'products.name as p_name','products.price as p_price', 'customers.name as c_name')
      ->get();

      $customer_details2= DB::table('customers')

      ->join('customersalesproducts', 'customers.id', '=', 'customersalesproducts.customer_id')
      ->join('products', 'customersalesproducts.product_id', '=', 'products.id')
      ->select('customersalesproducts.created_at as date', 'products.name as p_name','products.price as p_price', 'customers.name as c_name')
      ->get();
      
      

      return view('sell_report')->with('customer_details', $customer_details)->with('customer_details2', $customer_details2);

      }
  
   

}
