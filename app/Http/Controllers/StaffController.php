<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public function index()
    {
        //mengambil data dari table
        $staff = DB::table('staff')->get();
        // mengirim data staff ke view
        return view('indexx',['staff'=>$staff]);

    }

    public function tambah()
    {
        //memanggil view tambah
        return view('tambah');
    }

    public function store(Request $request)
    {
        //insert data ke tabel staff
        DB::table('staff')->insert([
            'staff_nama' => $request->nama,
            'staff_jabatan' => $request->jabatan,
        ]);

        //alihkan ke halaman staff
        return redirect('/staff');
    }

    public function edit($id)
    {
        //mengambil data staff berdasarkan id
        $staff = DB::table('staff')->where('staff_id',$id)->get();
        //passing data staff ke view edit.blade.php
        return view('edit',['staff'=> $staff]);
    }

    public function update(Request $request)
    {
        DB::table('staff')->where('staff_id', $request->id)->update([
            'staff_nama' => $request->nama,
            'staff_jabatan' => $request->jabatan
        ]);
        //alihkan ke halaman staff
        return redirect('/staff');
    }

    public function hapus($id)
    {
        //menghapus data staff berdasarkan id
        DB::table('staff')->where('staff_id',$id)->delete();

        //alihkan ke halaman staff
        return redirect('/staff');
    }
}
