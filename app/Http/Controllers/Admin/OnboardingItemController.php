<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OnboardingItemRequest;
use App\Models\OnboardingItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OnboardingItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', ['boardsList' => OnboardingItem::paginate(7)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OnboardingItemRequest $request)
    {
        $data = $request->all();
        if (isset($request->image)) {
            $path = $request->file('image')->store('images', 'public');
            $data['image'] = $path;
        }
        $card = OnboardingItem::create($data);
        return redirect()->route('admin.show', ['admin' => $card->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.show', ['card' => OnboardingItem::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.edit', ['card' => OnboardingItem::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        if (isset($request->image)) {
            $path = $request->file('image')->store('images', 'public');
            $data['image'] = $path;
        }
        $card = OnboardingItem::create($data);
        return redirect()->route('admin.show', ['admin' => $card->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $card = OnboardingItem::find($id);
        if ($card->image) {
            Storage::delete($card->image);
        }
        $card->delete();
        return redirect()->route('admin.index');
    }
}
