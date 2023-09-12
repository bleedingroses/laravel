<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Category;

class MemberController extends Controller
{
    public function show()
    {
        $data= Member::sortable()->paginate(5);
        return view('member.index', [
            'active' => 'member',
            "title" => "Data Karyawan",
            'members' => $data]);
    }
    
    public function tambah()
    {    
        return view('member.tambah', [
            "title" => "Tambah Data"
        ]);
    }

    public function simpan(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        $data = Member::create($request->except(['_token', 'submit']));
        if($request->hasFile('gambar'))
        {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect('/member')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function ubah($id)
    {
        $member = Member::find($id);
        return view('member.ubah', 
            compact(['member']), [
            "title" => "Ubah Data"
        ]);
    }

    public function update($id, Request $request)
    {
        $member = Member::find($id);
        $member->update($request->except(['_token', 'submit']));
        if($request->hasFile('gambar'))
        {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $member->gambar = $request->file('gambar')->getClientOriginalName();
            $member->save();
        }
        return redirect('/member')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('/member');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
