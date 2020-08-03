<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use Session;
use Purifier;

class CategoryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // display a view of all of our categories
        // it will also have a form to create a new category

        $categories = Category::all();
        return view('categories.index')->withCategories($categories);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Save a new category and then redirect back to index
        $this->validate($request, array(
            'name' => 'required|max:255',
            'description' => 'required'
            ));

        $category = new Category;

        $category->name = $request->name;
        $category->description = Purifier::clean($request->description);
        $category->description = $request->description;
        $category->save();

        Session::flash('success', 'New Category has been created');

        return redirect()->route('categories.index');
    }



    public function show($id)
    {
        $category = category::find($id);
        return view('categories.show')->withcategory($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = category::find($id);
        return view('categories.edit')->withcategory($category);
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
        $category = category::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
            'description' => 'required'
            ));

        $category->name = $request->name;
        $category->description = Purifier::clean($request->description);
        $category->save();

        Session::flash('success', 'Successfully saved your new category!');

        return redirect()->route('categories.show', $category->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = category::find($id);

        $category->delete();

        Session::flash('success', 'Category was deleted successfully');

        return redirect()->route('categories.index');
    }
}
