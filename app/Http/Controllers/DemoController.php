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
            'employees' => Employee::withCount(['assigned_message', 'solved_message'])->paginate(5)
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
            'messages' => Message::paginate(10),
            'employees' => Employee::get()

        ]);
    }
    public function my_messages($employee_id=1): View
    {
        return view('my_messages', [
            'employee' => Employee::find($employee_id),
            'message_categores' => Message::where('employee_id',$employee_id)->get()
        ]);
    }

    public function assign(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required',
            'msg_id' => 'required|array',
        ]);

        Message::whereIn('id', $validated['msg_id'])->update(['employee_id' => $validated['employee_id'], 'status' => 'assigned']);
        return back()->with('success', 'Assigned successfully!');
    }

    public function messageUpdate(Request $request , $id)
    {
        
        $message = Message::find($id);
        if ($message) {
            $message->update(['status' => 'solved']);
            return back()->with('success', 'Completed successfully!');
        }


        return back()->with('success', 'Something went wrong!');
    }
}
