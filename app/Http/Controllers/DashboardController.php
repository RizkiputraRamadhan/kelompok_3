<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Room;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function userHome()
    {
        $guest = Guest::where('user_id', auth()->user()->id)->first();
        $room = Room::where('user_id', auth()->user()->id)->get();
        return view('v_user.index', [
            'guest' => $guest,
            'rooms' => $room,
        ]);
    }

    public function verifikasi(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->file('file');
        $Extension = $file->getClientOriginalExtension();
        $fileName = Str::random(10) . '_' . time() . '.' . $Extension;
        $file->move('storage', $fileName);
        $name = auth()->user()->name;
        $id = auth()->user()->id;

        DB::table('guest')->insert([
            'nama' => $name,
            'user_id' => $id,
            'status' => 1,
            'ktp' => $fileName,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()
            ->back()
            ->with('success', 'Akun telah terverifikasi');
    }
    public function adminHome()
    {
        $rooms = Room::where('status', 2)->get();
        return view('v_admin.index', [
            'rooms' => $rooms,
        ]);
    }
    public function adminRoom()
    {
        $rooms = Room::all();

        return view('v_admin.room', [
            'rooms' => $rooms,
        ]);
    }

    public function adminCreate()
    {
        return view('v_admin.create');
    }
    public function adminStore(Request $request)
    {
        $validatedData = $request->validate([
            'nama_kamar' => 'required|string',
            'harga' => 'required|numeric',
            'peta' => 'required|string',
            'no_kamar' => 'required|string',
            'kapasitas' => 'required|string',
            'category_pinjam' => 'required|string',
            'category' => 'required|string',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'desc' => 'required|string',
            'status' => 'required|string',
        ]);

        $file = $request->file('file');
        $Extension = $file->getClientOriginalExtension();
        $fileName = Str::random(10) . '_' . time() . '.' . $Extension;
        $file->move('storage', $fileName);

        $codeQr = Str::random(10);
        DB::table('room')->insert([
            'code_QR' => $codeQr,
            'no_kamar' => $validatedData['no_kamar'],
            'kapasitas' => $validatedData['kapasitas'],
            'category_pinjam' => $validatedData['category_pinjam'],
            'nama_kamar' => $validatedData['nama_kamar'],
            'harga' => $validatedData['harga'],
            'category' => $validatedData['category'],
            'peta' => $validatedData['peta'],
            'desc' => $validatedData['desc'],
            'status' => $validatedData['status'],
            'image' => $fileName,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect('/admin/room')->with('success', 'Data Room Successfully !!');
    }

    public function destroy($id)
    {
        $room = Room::find($id);
        if ($room) {
            $room->delete();
            return redirect('/admin/room')->with('success', 'Room deleted successfully.');
        } else {
            return redirect('/admin/room')->with('error', 'Room not found.');
        }
    }
}
