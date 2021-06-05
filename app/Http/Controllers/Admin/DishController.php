<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Dish;
use App\Allergen;

class DishController extends Controller
{
    protected $validation = [
        'name' => 'required|string',
        'ingredients' => 'required|string',
        'price' => 'required|numeric',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dish::all();
        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allergenes = Allergen::all();
        return view('admin.dishes.create', compact('allergenes') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $this -> validation;

        $request -> validate($this->validation);
        
        $data = $request->all();

        $data['user_id'] = Auth::id();

        if(isset($data['image'])){
            $data['image'] = Storage::disk('public')->put('images', $data['image']);
        }

        $newDish = Dish::create($data);

        if(isset($data['allergens'])){
            $newDish ->allergens()->attach($data['allergens']);
        }

        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        return view('admin.dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
