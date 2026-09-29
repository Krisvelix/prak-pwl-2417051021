<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public function create()
    {
        $kelas = Kelas::all();

        $title = 'Tambah User';

        return view('create_user', compact('kelas', 'title'));
    }

    public function store(Request $request)
    {
        UserModel::create([
            'nama' => $request->nama,
            'nim' => $request->npm,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect('/user');
    }

    public function index()
    {
        $userModel = new UserModel();

        $users = $userModel->getUser();

        return view('list_user', compact('users'));
    }
}
