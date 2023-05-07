<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveryManagementController extends Controller
{
    public function index()
    {
        return view('admin.delivery-management.index');
    }
}
