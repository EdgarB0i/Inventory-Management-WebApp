<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::where('user_id', Auth::id())->get();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:items,name,NULL,id,user_id,'.Auth::id().'|max:255',
            'quantity' => 'required|integer|min:1|max:'.(100-Item::where('user_id', Auth::id())->sum('quantity')),
            'price' => 'required|numeric|min:0',
            'buying_price' => 'required|numeric|min:0',
        ]);
    
        $item = Item::where('name', $request->name)
                    ->where('user_id', Auth::id())
                    ->first();
    
        if ($item) {
            return redirect()->back()->with('error', 'This item already exists.');
        }
    
        $item = Item::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'buying_price' => $request->buying_price,
            'user_id' => Auth::id()
        ]);
    
        return redirect()->route('items.index')->with('success', 'Item added successfully.');
    }
    
    
    

    public function show(Item $item)
    {
        if ($item->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('items.show', compact('item'));
    }

    public function edit(Item $item)
    {
        if ($item->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('items.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        if ($item->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
    
        $request->validate([
            'name' => 'required|unique:items,name,'.$item->id.',id,user_id,'.Auth::id().'|max:255',
            'quantity' => 'required|numeric|max:'.(100-Item::where('user_id', Auth::id())->where('id', '<>', $item->id)->sum('quantity')),
            'price' => 'required|numeric|min:0',
            'buying_price' => 'required|numeric|min:0',
        ]);
    
        $item->update($request->all());
    
        return redirect()->route('items.index');
    }
    

    public function destroy(Item $item)
    {
        if ($item->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $item->delete();

        return redirect()->route('items.index');
    }

    public function search(Request $request)
    {
        $name = $request->input('name');
    
        if (empty($name)) {
            return view('items.search');
        }
    
        $exactMatches = Item::where('user_id', Auth::id())
                             ->where('name', $name)
                             ->get();
    
        if ($exactMatches->count() == 1) {
            return redirect()->route('items.show', $exactMatches->first());
        } else {
            $errorMessage = "The item you are looking for does not exist.";
            return view('items.search', compact('errorMessage'));
        }
    }
    

    public function performance()
    {
        $items = Item::where('user_id', Auth::id())->get();
        $totalQuantity = Item::where('user_id', Auth::id())->sum('quantity');
        $totalValue = Item::where('user_id', Auth::id())->sum('quantity', 'price');
        return view('items.performance', compact('items', 'totalQuantity', 'totalValue'));
    }
    public function calculateWarehouseStaff()
    {
        $items = Item::all();
        $total_quantity = 0;
    
        foreach ($items as $item) {
            $total_quantity += $item->quantity;
        }
    
        $required_staff = ceil($total_quantity / 5);
    
        return $required_staff;
    }
        

}
