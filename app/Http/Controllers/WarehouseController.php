<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Warehouse;
use App\Models\User;
use App\Models\Item;


class WarehouseController extends Controller
{
    public function index()
    {
        $users = User::all();
        $warehouseStaff = Warehouse::all();
        $totalQuantity = Item::where('user_id', auth()->user()->id)->sum('quantity');
        $presentStaff = Warehouse::where('user_id', auth()->user()->id)->value('present_staff');
        $presentStaff = $presentStaff ?? 0;
    
        return view('warehouse.warehouse', compact('users', 'warehouseStaff', 'totalQuantity', 'presentStaff'));
    }
    
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'present_staff' => 'required|integer',
        ]);

        $warehouse = Warehouse::updateOrCreate(
            ['user_id' => $request->user()->id],
            ['present_staff' => $validatedData['present_staff']]
        );

        return redirect()->back()->with('success', 'Warehouse staff updated successfully.');
    }
}
