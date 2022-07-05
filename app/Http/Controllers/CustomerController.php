<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;


class CustomerController extends Controller
{
    public function index(){
        $customers = DB::table('customers')
                            ->select('customers.name', 'invoices.amount')
                            ->leftjoin('invoices', 'customers.id', '=', 'invoices.customer_id')
                            ->get();
        dd($customers);
        return $customers;
    }
}
