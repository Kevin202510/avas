<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Users;

class UsersController extends Controller
{
    public function index()
    {
        $users=Users::whereNull('deleted_at')->get();
        return response()->json($users);
    }

    public function list(Request $request)
    {
        $users = Users::whereNull('deleted_at')->get();
        return $users;
    }

    public function save(Request $request)
    {
        $input = $request->all();
        $users=Users::create($input); 
        return response()->json($users);
    }

    public function update(Request $request, Users $users)
    {
        $input = $request->all();
        $users->update($input);
        return response()->json($users, 200);
    }

    public function destroy(Users $users)
    {
        $users->deleted_at = Carbon::now();
        $users->update();
        return response()->json(array('success'=>true));
    }
}
