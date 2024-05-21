<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Message;
use App\Models\MessageCategory;


use Illuminate\Contracts\View\View;

class DemoController extends Controller
{
    
    public function admins(): View
    {
        return view('admin', [
            'admins' => Admin::paginate(5)
        ]);
    }
    public function customers(): View
    {
        return view('customers', [
            'customers' => Customer::paginate(5)
        ]);
    }
    public function employees(): View
    {
        return view('employees', [
            'employees' => Employee::paginate(5)
        ]);
    }
    public function message_categories(): View
    {
        return view('message_categories', [
            'message_categores' => MessageCategory::paginate(5)
        ]);
    }
    public function messages(): View
    {
        return view('messages', [
            'messages' => Message::paginate(5)
        ]);
    }
    public function my_messages(): View
    {
        return view('my_messages', [
            'message_categores' => MessageCategory::paginate(5)
        ]);
    }



    
}
