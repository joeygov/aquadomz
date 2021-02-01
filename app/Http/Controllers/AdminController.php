<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Operator;
use App\Customer;
use App\Products;
use DB;

class AdminController extends Controller
{
    public function header(){
        return view('common.header');
    }

    public function viewOperator()
    {
        $operators = DB::table('operators')->where('deleted_at', NULL)->get();
        return view('admin.operators',['operators'=>$operators]);
    }
    public function viewProduct()
    {
        $products = DB::table('products')->where('deleted_at', NULL)->get();
        return view('admin.products',['products'=>$products]);
    }

    public function viewCustomer()
    {
        $customers = DB::table('customers')->where('deleted_at', NULL)->get();
        return view('admin.customer',['customers'=>$customers]);
    }

    public function destroyOperator(Operator $operator)
    {
        $operator->delete();    
        return redirect()->back()->with('success', 'Delete Successfully');
    }

    public function destroyCustomer(Customer $customer)
    {
        $customer->delete();    
        return redirect()->back()->with('success', 'Delete Successfully');
    }

    public function destroyProduct(Products $product)
    {
        $product->delete();    
        return redirect()->back()->with('success', 'Delete Successfully');
    }
}
