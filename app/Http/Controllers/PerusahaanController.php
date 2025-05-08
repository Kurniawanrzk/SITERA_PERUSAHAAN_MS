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
}
