<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Laracasts\Flash\Flash;
use App\Category;

class CategoriesController extends Controller
{
     

	public function index()
	{
		$categories = Category::orderBy('id', 'DESC')->paginate(5);
		return view('admin.categories.index')->with('categories', $categories);
	}

	public function create()
	{
		return view('admin.categories.create');
	}

	public function store(CategoryRequest $request)
	{
		$category = new Category($request->all());
		$category->save();
		Flash::success('la categoria ' . $category->name. ' ha sido creado con exito');
		return redirect()->route('admin.categories.index');
	}
	public function show()
	{

	}
	public function edit($id)
	{
		$category = Category::find($id);
		return view('admin.categories.edit')->with('category', $category);
	}
	public function update(Request $request, $id)
	{
		$category = Category::find($id);
		$category->fill($request->all());
		$category->save();
		$category = Category::find($id);
		$category->fill($request->all());
		$category->save();

		Flash::Warning('La categoria '. $category->name. ' ha sido editada correctamente');
		return redirect()->route('admin.categories.index');
	}
	public function destroy($id)
	{
		$category = Category::find($id);
		$category->delete();
		Flash::error('La categoria ' . $category->name.' ha sido eliminada correctamente');
		return redirect()->route('admin.categories.index');
	}



}