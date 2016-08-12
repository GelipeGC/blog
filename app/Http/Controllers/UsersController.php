<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;
class UsersController extends Controller
{
   
	public function index()
	{
		$users = User::orderBY('id','ASC')->paginate(5);
		return view('admin.users.index')->with('users', $users);
	}

	public function create()
	{
		//dd('hola esto es un mensaje');//
		return view('admin.users.profile');
	}
	public function profile()
	{
		//dd('hola esto es un mensaje');//
		return view('admin.users.profile');
	}
	public function store(UserRequest $request)
	{
		$user = new User( $request->all());
		$user->password = bcrypt($request->password);
		$user->save();
		Flash::success("se ah registrado".$user->name."de forma exitosa");

		return redirect()->route('admin.users.index');
	}
	public function show($id)
	{

	}
	public function edit($id)
	{
		$user = User::find($id);
		return view('admin.users.edit')->with('user', $user);
	}
	public function update(Request $request, $id)

	{
		$user = User::find($id);
		$user->name = $request->name;
		$user->email = $request->email;
		$user->type = $request->type;
		$user->save();

		Flash::Warning('El usuario ' .$user->name. ' ha sido editado correctamente');
		return redirect()->route('admin.users.index');

	}
	/*public function profile()
	{
		/*return view('admin.users.profile');*
		return view('admin.users.profile');
	}*/
	public function updateProfile(Request $request)
	{
		if ($request->file('image')) 
		{
			$image = $request->file('image');
			$name='perfiles_' . time(). '.' .$file->getClientOriginalExtension();
			$path=public_path(). '/perfiles/';
			$file->move($path, $name);
			$user = new User;
			$user->where('email', '=', Auth::user()->email)->update(['avatar' => 'perfiles/' .$name]);

            return redirect('admin.users.index')->with('status', 'Su imagen de perfil ha sido cambiada con éxito');
			
		}
	}
	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();
		Flash::warning('El usuario'.$user->name.'ah sido borrado exitosamente');
		return redirect()->route('admin.users.index');
	}
}