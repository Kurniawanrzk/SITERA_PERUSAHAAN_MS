<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;

class PerusahaanController extends Controller
{
    public function cekUser($user_id)
    {
        $perusahaan = Perusahaan::where("user_id", $user_id);

        if($perusahaan->exists())
        {
            return response()
            ->json([
                "status" => true,
                "data" => [
                    "id" => $perusahaan->first()->id,
                    "nama" => $perusahaan->first()->nama_perusahaan
                ]
            ], 200);
        } else {
            return response()
            ->json([
                'status' => false,
                "message" => "user tidak ada"
            ], 401);
        }
    }

    public function cekProfil(Request $request)
    {
        $perusahaan = Perusahaan::where("id", $request->get("perusahaan_id"));
        if($perusahaan->exists())
        {
            return response()
            ->json([
                "status" => true,
                "data" => $perusahaan->first()
            ], 200);
        } else {
            return response()
            ->json([
                'status' => false,
                "message" => "user tidak ada"
            ], 401);
        }

    }

    public function cekPerusahaanDariUserId(Request $request)
    {
        $user_ids = $request->user_ids;

        $perusahaan = Perusahaan::whereIn("user_id", $user_ids)->get();
        if ($perusahaan) {
            return response()->json([
                "status" => true,
                "data" => $perusahaan
            ], 200);
        } else {
            return response()->json([
                "status" => false,
                "message" => "BSU not found."
            ], 404);
        }
    }

    public function registerasiPerusahaan(Request $request)
    {
        $perusahaan = Perusahaan::where("user_id", $request->get("user_id"));
        if($perusahaan->exists())
        {
            return response()
            ->json([
                "status" => false,
                "message" => "user sudah terdaftar"
            ], 401);
        } else {
            $perusahaan = new Perusahaan();
            $perusahaan->user_id = $request->user_id;
            $perusahaan->nama_perusahaan = $request->nama;
            $perusahaan->nomor_registrasi = $request->nomor_registrasi;
            $perusahaan->save();
            return response()
            ->json([
                "status" => true,
                "message" => "user berhasil terdaftar"
            ], 200);
        }
}
}
