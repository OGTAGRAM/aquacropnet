<?php

namespace App\Http\Controllers;

use App\Models\komen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KomenController extends Controller
{
    public function index() 
    {
        return view('kabar/pisangg', [
            'komens' => komen::latest()->get(),
        ]);
    }

    public function store(Request $request)
    {
        komen::create([
            'user_id' => auth()->id(),
            'content' => $request->content,
        ]);

        session()->flash('success', 'Berhasil Komen');

        return to_route('pisangg');
    }

    public function show($komen)
    {
        return view('komens.show', [
            'komen' => komen::find($komen)
        ]);
    }

    public function edit($id)
    {
        $komen = komen::find($id);
                
        if ($komen->user_id != Auth::id())
        {
            abort(401);
        }

    return view('kabar/pisangg.edit',[
        'komen' => komen::find($id),
    ]);
    }

    public function update(Request $request, $id)
    {
        $komen = komen::find($id);

        $komen->update([
            'user_id' => auth()->id(),
            'content' => $request->content,
        ]);

        session()->flash('success', 'Berhasil memperbarui Komen');

        return to_route('pisangg');
    }

    public function destroy($id)
    {
        $komen = komen::find($id);

        if ($komen->user_id != Auth::id())
        {
            abort(401);
        }

        $komen->delete();

        session()->flash('success', 'Berhasil menghapus Komen');

        return to_route('pisangg');
    }
}
