<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function categories()
    {
        return view('admin.categories.lihat');
    }

    public function categoriesTambah()
    {
        return view('admin.categories.tambah');
    }

    public function categoriesStore(Request $request)
    {
        DB::table('categories')->insert([
            'name' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/admin/categories');

    }

    public function articles()
    {
        return view('admin.articles.lihat');
    }

    public function articlesTambah()
    {
        return view('admin.articles.tambah');
    }
    public function articlesStore(Request $request)
    {
        DB::table('articles')->insert([
            'name' => $request->nama,
            'content' => $request->konten,
            ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/admin/categories');

    }
}
