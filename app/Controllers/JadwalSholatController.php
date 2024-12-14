<?php
namespace App\Controllers;

use App\Models\JadwalImamModel;
use App\Models\JadwalMuadzinModel;

class JadwalSholatController extends BaseController
{
    // Menampilkan halaman jadwal imam dan muadzin
    public function index()
    {
        $jadwalImamModel = new JadwalImamModel();
        $jadwalMuadzinModel = new JadwalMuadzinModel();

        $data = [
            'imam' => $jadwalImamModel->findAll(),
            'muadzin' => $jadwalMuadzinModel->findAll()
        ];

        return view('admin/dashboardjadwalimam', $data);
    }

    // Fungsi untuk memperbarui data Imam
    public function updateImam()
    {
        $jadwalImamModel = new JadwalImamModel();

        // Ambil data dari formulir
        $imamData = $this->request->getPost('imam');

        // Perbarui setiap data berdasarkan ID
        foreach ($imamData as $id => $imamName) {
            $jadwalImamModel->update($id, ['imam' => $imamName]);
        }

        // Redirect kembali ke halaman
        return redirect()->to('/dashboardjadwalimam')->with('message', 'Data Imam berhasil diperbarui');
    }

    // Fungsi untuk memperbarui data Muadzin
    public function updateMuadzin()
    {
        $jadwalMuadzinModel = new JadwalMuadzinModel();

        // Ambil data dari formulir
        $muadzinData = $this->request->getPost('muadzin');

        // Perbarui setiap data berdasarkan ID
        foreach ($muadzinData as $id => $muadzinName) {
            $jadwalMuadzinModel->update($id, ['muadzin' => $muadzinName]);
        }

        // Redirect kembali ke halaman
        return redirect()->to('/dashboardjadwalimam')->with('message', 'Data Muadzin berhasil diperbarui');
    }
}
