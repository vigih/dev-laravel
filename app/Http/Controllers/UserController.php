<?php

namespace App\Http\Controllers;

use App\Models\Items\ItemPaketHarga;
use App\Models\Mobils\PabrikanMobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Users\User;
use App\Models\Users\UserRole;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {

        $users = User::all();
        /** @var User $user  */
        $user = $users->first();
        $users_ = User::with('role')->get();
        foreach ($users_ as $model) {
            dump('Role ' . $model->role->label);
            dump('username ' . $model->name);
            dump($model->email);
        }
        dump(UserRole::all()->toArray());
        dump(PabrikanMobil::all()->toArray());
        dump(ItemPaketHarga::find(1)->label);
        dump($user->name);
        dump($user->email);
        dump($user->password);
        dump($user->user_role_id);
        dump(Hash::check('123456', $user->password));
        dump(Hash::check('1234564', $user->password));
        die();
        $nama = 'Chatgpt';
        return view('users.index', compact('nama'));
    }

    public function create()
    {
        $nama = 'Create User';
        return view('users.create', compact('nama'));
    }

    public function show(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer|min:1'
        ]);

        if ($validator->fails()) {
            // handle sendiri (tidak redirect)
            $message = $validator->errors()->first();

            // abort(400, $validator->errors()->first());
            // throw new \Exception($validator->errors()->first(), 404);
            $nama = 'View User';
            $users = [
                [
                    'id' => 1,
                    'name' => 'Thrubus',
                    'email' => 'thrubus@example.com',
                ],
                [
                    'id' => 2,
                    'name' => 'Thrubus2',
                    'email' => 'thrubus2@example.com',
                ],
                [
                    'id' => 3,
                    'name' => 'Thrubus3',
                    'email' => 'thrubus3@example.com',
                ],
            ];
            return view('users.view', compact('nama', 'users'));
            return response()->json([
                'error' => $validator->errors()
            ], 400);
        }

        $data = $validator->validated();
        $nama = 'View User';
        return view('users.view', compact('nama'));
    }
}
