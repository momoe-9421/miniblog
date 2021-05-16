<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\Auth;


use App\Models\User;//App\User をインポートする
use Illuminate\Http\Request;
use App\Http\Requests\User\UpdateRequest;

class UserController extends Controller
{
    public function show($id)
    {
        $user =User::find($id); //ユーザーID：1のユーザー情報を取得して$user変数に代入する

        return view('users.show',['user'=>$users]);
    }
    public function edit()
    {
        $user = Auth::user();
    
        return view('users.edit', ['user' => $user]);
    }
    public function update(UpdateRequest $request)
    {
        $user = Auth::user();
        $user->fill($request->all());
        $user->save();
    
        return redirect()->back()->with(['message' => '更新しました！']);
    }
}

