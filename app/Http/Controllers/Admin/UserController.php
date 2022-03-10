<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Broker;

class UserController extends Controller
{
    public function staff() {
        return view('admin.staff.index');
    }

    public function broker() {
        $brokers = Broker::all();
        return view('admin.broker.index', ["brokers" => $brokers]);
    }

    public function client() {
        return view('admin.client.index');
    }
}
