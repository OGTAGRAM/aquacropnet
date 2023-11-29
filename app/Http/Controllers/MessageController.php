<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $komen)
    {
        message::create([
            'komen_id' => $komen,
            'user_id' => auth()->id(),  
            'message' => $request->message,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($komen, $message)
    {
        $message = message::find($message);

        if ($message->user_id != Auth::id())
        {
            abort(401);
        }

        return view('comments.edit', [
            'message' => Message::find($message),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $komen, $message)
    {
        $message = message::find($message);

        $message -> update([
            'message' => $request->message
        ]);

        return to_route('komens.show', $komen);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($komen, $message)
    {
        $message = message::find($message);

        if ($message->user_id != Auth::id())
        {
            abort(401);
        }
        
        $message = message::find($message);

        $message->delete();

        return to_route('komens.show', $komen);
    }
}
