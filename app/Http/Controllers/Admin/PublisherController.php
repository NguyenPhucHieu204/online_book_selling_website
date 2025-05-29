<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    // Lấy tất cả dữ liệu từ bảng publishers và trả về view
    public function index()
    {
        $publishers = Publisher::all();
        return view('admin.publisher.index', compact('publishers'));
    }

    public function create()
    {
        return view('admin.publisher.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $publisher = new Publisher();
        $publisher->name = $request->name;

        if ($request->hasFile('logo')) {
            $publisher->logo = $request->file('logo')->store('img/publisher', 'public');
        }

        $publisher->save();

        return redirect()->route('admin.publisher.index')->with('success', 'Publisher created successfully.');
    }

    public function show(Publisher $publisher)
    {
        return view('admin.publisher.show', compact('publisher'));
    }

    public function edit(Publisher $publisher)
    {
        return view('admin.publisher.edit', compact('publisher'));
    }

    public function update(Request $request, Publisher $publisher)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $publisher->name = $request->name;

        if ($request->hasFile('logo')) {
            $publisher->logo = $request->file('logo')->store('img/publisher', 'public');
        }

        $publisher->save();

        return redirect()->route('admin.publisher.index')->with('success', 'Publisher updated successfully.');
    }

    public function destroy(Publisher $publisher)
    {
        $publisher->delete();
        return redirect()->route('admin.publisher.index')->with('success', 'Publisher deleted successfully.');
    }
}
