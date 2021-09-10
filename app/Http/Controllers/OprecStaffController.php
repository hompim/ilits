<?php

namespace App\Http\Controllers;

use App\Models\OprecStaff;
use Exception;
use Illuminate\Http\Request;

class OprecStaffController extends Controller
{
    public function create(){
        $departemen = [
            'FISIKA', 'MATEMATIKA', 'STATISTIKA', 'KIMIA', 'BIOLOGI', 'AKTUARIA',
            'TEKNIK MESIN', 'TEKNIK KIMIA', 'TEKNIK FISIKA', 'TEKNIK INDUSTRI', 'TEKNIK MATERIAL DAN METALURGI',
            'TEKNIK SIPIL', 'ARSITEKTUR', 'TEKNIK LINGKUNGAN', 'PERENCANAAN WILAYAH DAN KOTA', 'TEKNIK GEOMATIKA', 'TEKNIK GEOFISIKA',
            'TEKNIK PERKAPALAN', 'TEKNIK SISTEM PERKAPALAN', 'TEKNIK KELAUTAN', 'TEKNIK TRANSPORTASI LAUT',
            'TEKNIK ELEKTRO', 'TEKNIK BIOMEDIK', 'TEKNIK KOMPUTER', 'TEKNIK INFORMATIKA', 'SISTEM INFORMASI', 'TEKNOLOGI INFORMASI',
            'DESAIN PRODUK', 'DESAIN INTERIOR', 'DESAIN KOMUNIKASI VISUAL', 'MANAJEMEN BISNIS', 'STUDI PEMBANGUNAN',
            'TEKNIK INFRASTRUKTUR SIPIL', 'TEKNIK MESIN INDUSTRI', 'TEKNIK ELEKTRO OTOMASI', 'TEKNIK KIMIA INDUSTRI', 'TEKNIK INSTRUMENTASI', 'STATISTIKA BISNIS',
        ];
        
        $fakultas = [
            'FAKULTAS SAINS DAN ANALITIKA DATA',
            'FAKULTAS TEKNOLOGI INDUSTRI DAN REKAYASA SISTEM',
            'FAKULTAS SIPIL, PERENCANAAN, DAN KEBUMIAN',
            'FAKULTAS TEKNOLOGI KELAUTAN',
            'FAKULTAS TEKNOLOGI ELEKTRO DAN INFORMATIKA CERDAS',
            'FAKULTAS DESAIN KREATIF DAN BISNIS DIGITAL',
            'VOKASI'
        ];
        
        $angkatan = [
            '2020',
            '2021'
        ];

        $pil_divisi = [
            'Divisi IT Development',
            'Divisi Technical - Subdivisi Acara Pusat',
            'Divisi Technical - Subdivisi Acara Forda',
            'Divisi Technical - Subdivisi Materi',
            'Divisi Technical - Subdivisi Faskamzin',
            'Divisi Kestari',
            'Divisi Branding - Subdivisi Documentation',
            'Divisi Branding - Subdivisi Creative Design',
            'Divisi Branding - Subdivisi Content Creator',
            'Divisi Branding - Subdivisi Campaign and Marketing',
            'Divisi Public Relation',
            'Divisi Finance - Subdivisi Fundraising',
            'Divisi Finance - Subdivisi Sponsorship',  
        ];

        return view('oprec.form-oprec', compact("departemen", "fakultas", "angkatan", "pil_divisi"));
    }

    public function store(Request $request){
        $errorMessage = [
            'required' => "Kolom ini wajib diisi!",
            'max' => "kolom ini harus diisi maksimal :max karakter!",
            'size' => "kolom ini harus diisi tepat :size karakter!",
            'alpha_numeric' => "kolom ini harus berisi karakter angka",
            'different' => "Pilihan 1 dan 2 tidak boleh sama!",
            'unique' => "NRP yang kamu masukkan sudah terdaftar!",
        ];
        
        $error = $request->validate([
            "nama_lengkap" => "required",
            "nrp" => "required|alpha_num|unique:oprec_staff,nrp",
            "fakultas" => "required",
            "departemen" => "required",
            "angkatan" => "required",
            "kota_asal" => "required",
            "apa_itu_ilits" => "required|max:512",
            "motivasi_ilits" => "required|max:512",
            "pilihan_1" => "required",
            "alasan_pilihan_1" => "required|max:512",
            "pilihan_2" => "required|max:512|different:pilihan_1",
            "alasan_pilihan_2" => "required",
            "komitmen" => "required",
        ], $errorMessage);

        dd($error);

        try{
            $calon_staff = OprecStaff::create([
                "nama_lengkap" => $request->nama_lengkap,
                "nrp" => $request->nrp,
                "fakultas" => $request->fakultas,
                "departemen" => $request->departemen,
                "angkatan" => $request->angkatan,
                "kota_asal" => $request->kota_asal,
                "apa_itu_ilits" => $request->apa_itu_ilits,
                "motivasi_ilits" => $request->motivasi_ilits,
                "pilihan_1" => $request->pilihan_1,
                "alasan_pilihan_1" => $request->alasan_pilihan_1,
                "pilihan_2" => $request->pilihan_2,
                "alasan_pilihan_2" => $request->alasan_pilihan_1,
                "komitmen" => $request->komitmen,
            ]);

            return view('oprec.form-success', [
                "nama" => $calon_staff->nama_lengkap
            ]);
        } catch (Exception $e){
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }
}
