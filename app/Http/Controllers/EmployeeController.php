<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = User::whereIn(\'role\', [\'waiter\', \'chef\', \'inventory_manager\', \'receptionist\'])->get();
        return view(\'admin.employees.index\', compact(\'employees\'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(\'admin.employees.create\');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            \'name\' => \'required|string|max:255\',
            \'email\' => \'required|string|email|max:255|unique:users\',
            \'password\' => \'required|string|min:8\',
            \'role\' => \'required|in:waiter,chef,inventory_manager,receptionist\',
        ]);

        User::create([
            \'name\' => $request->name,
            \'email\' => $request->email,
            \'password\' => Hash::make($request->password),
            \'role\' => $request->role,
        ]);

        return redirect()->route(\'admin.employees.index\')->with(\'success\', \'Employee created successfully.\');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $employee)
    {
        return view(\'admin.employees.show\', compact(\'employee\'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $employee)
    {
        return view(\'admin.employees.edit\', compact(\'employee\'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $employee)
    {
        $request->validate([
            \'name\' => \'required|string|max:255\',
            \'email\' => \'required|string|email|max:255|unique:users,email,\' . $employee->id,
            \'role\' => \'required|in:waiter,chef,inventory_manager,receptionist\',
        ]);

        $employee->update([
            \'name\' => $request->name,
            \'email\' => $request->email,
            \'role\' => $request->role,
        ]);

        if ($request->filled(\'password\')) {
            $request->validate([
                \'password\' => \'string|min:8\',
            ]);
            $employee->update([
                \'password\' => Hash::make($request->password),
            ]);
        }

        return redirect()->route(\'admin.employees.index\')->with(\'success\', \'Employee updated successfully.\');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $employee)
    {
        $employee->delete();
        return redirect()->route(\'admin.employees.index\')->with(\'success\', \'Employee deleted successfully.\');
    }
}


