<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function userHome()
    {
        return view('v_user.index', [
            'title' => 'Pasien Pendaftaran',
        ]);
    }
    public function adminHome()
    {
        return view('v_admin.index', [
            'title' => 'Pasien Pendaftaran',
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
        return view('v_admin.create', [
            'title' => 'Pasien Pendaftaran',
        ]);
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
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('public', $fileName);
        $linkPath = asset('storage/' . $fileName);
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
            'image' => $linkPath,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect('/admin/room')->with('success', 'Data Room Successfully !!');
    }

    public function adminEdit($id)
    {
        $room = Room::find($id);

        if ($room) {
            return view('v_admin.edit', ['room' => $room]);
        } else {
            return redirect('/admin/room')->with('error', 'Room not found.');
        }
    }
    public function adminUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_kamar' => 'required|string',
            'harga' => 'required|numeric',
            'peta' => 'required|string',
            'no_kamar' => 'required|string',
            'kapasitas' => 'required|string',
            'category_pinjam' => 'required|string',
            'category' => 'required|string',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'desc' => 'required|string',
            'status' => 'required|string',
        ]);

        $room = DB::table('room')
            ->where('id', $id)
            ->first();

        if (!$room) {
            return redirect('/admin/room')->with('error', 'Room not found.');
        }

        $imagePath = $room->image;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('public', $fileName);
            $imagePath = asset('storage/' . $fileName);
        }

        DB::table('room')
            ->where('id', $id)
            ->update([
                'no_kamar' => $validatedData['no_kamar'],
                'kapasitas' => $validatedData['kapasitas'],
                'category_pinjam' => $validatedData['category_pinjam'],
                'nama_kamar' => $validatedData['nama_kamar'],
                'harga' => $validatedData['harga'],
                'category' => $validatedData['category'],
                'peta' => $validatedData['peta'],
                'desc' => $validatedData['desc'],
                'status' => $validatedData['status'],
                'image' => $imagePath,
                'updated_at' => now(),
            ]);

        return redirect('/admin/room')->with('success', 'Room updated successfully.');
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