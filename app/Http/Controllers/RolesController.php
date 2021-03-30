<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roles;

class RolesController extends Controller
{

	public function index()
	{
		$viewRoles = Roles::all();
		return view('admin.roles.index', compact('viewRoles'));
	}

    public function create()
    {
    	return view('admin.roles.create');
    }

    public function store(Request $request)
    {
    	$storeRoles = new Roles();
    	$storeRoles->role = $request->role;
    	$storeRoles->save();
    	return redirect('admin/viewRole');
    }

    public function edit($roles)
    {
    	$editRoles = Roles::find($roles);
    	return view('admin.roles.edit',compact('editRoles'));
    }

    public function update(Request $request, $roles)
    {
    	$updateRoles = Roles::find($roles);
    	$updateRoles->role = $request->role;
    	$updateRoles->save();
    	return redirect('admin/viewRole');
    }

    public function destroy($roles)
    {
    	$deleteRoles = Roles::find($roles);
    	$deleteRoles->delete();
    	return redirect('admin/viewRole');
    }

    public function show($roles)
    {	
    	$showRoles = Roles::find($roles);
    	return view('admin.roles.show', compact('showRoles'));
    }
}
