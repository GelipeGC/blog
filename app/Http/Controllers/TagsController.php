<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tag;
use Laracasts\Flash\Flash;
use App\Http\Requests\TagRequest;

class TagsController extends Controller
{
    public function index(Request $request)
    {

    	$tag = Tag::search($request->name)->orderBy('id', 'DESC')->paginate(5);
    	return view('admin.tags.index')->with('tags', $tag);
    }
    public function create()
	{
		//dd('hola esto es un mensaje');//
		return view('admin.tags.create');
	}
	public function store(TagRequest $request)
	{
		$tag = new Tag($request->all());
		$tag->save();

		Flash::success('EL tag '. $tag->name. ' ah sido creado correctamente');

		return redirect()->route('admin.tags.index');
	}
	public function show($id)
	{

	}
	public function edit($id)
	{
		$tag = Tag::find($id);
		 return view('admin.tags.edit')->with('tags', $tag);
	}
	public function update(Request $request, $id)

	{
		$tag = Tag::find($id);
		$tag->fill($request->all());
		$tag->save();
		Flash::Warning('El tag '. $tag->name.' ha sido editado correctamente ');
		return redirect()->route('admin.tags.index');

		
	}
	public function destroy($id)
	{
		$tag = Tag::find($id);
		$tag->delete();

		Flash::error('El tag '. $tag->name . ' ha sido borrado correctamente');
		return redirect()->route('admin.tags.index');
	}




}
