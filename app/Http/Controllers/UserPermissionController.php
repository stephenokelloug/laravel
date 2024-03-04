<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Delgont\Auth\Models\PermissionGroup;

use App\User;

class UserPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
        $permissionGroups = PermissionGroup::with(['permissions'])->get();
        $user = User::whereId($user_id)->with(['permissions'])->firstOrFail();

        $userPermissions = collect($user->permissions)->map(function($item, $key){
            return $item->name;
        })->toArray();

        return view('dashboard.users.permissions.index', compact('permissionGroups', 'userPermissions'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function set(Request $request)
    {
        //
    }
   
}
