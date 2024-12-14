<?php

namespace App\Controllers;

use App\Models\KasMasukModel;
use App\Models\KasKeluarModel;

class KasController extends BaseController
{
    protected $kasMasukModel;
    protected $kasKeluarModel;

    public function __construct()
    {
        $this->kasMasukModel = new KasMasukModel();
        $this->kasKeluarModel = new KasKeluarModel();
    }

    // Menampilkan halaman dashboardkas
    public function index()
    {
        $kasMasuk = $this->kasMasukModel->findAll();
        $kasKeluar = $this->kasKeluarModel->findAll();

        // Gabungkan data masuk dan keluar
        $kas = array_merge(
            array_map(fn($item) => array_merge($item, ['jenis' => 'masuk']), $kasMasuk),
            array_map(fn($item) => array_merge($item, ['jenis' => 'keluar']), $kasKeluar)
        );

        // Urutkan berdasarkan tanggal
        usort($kas, fn($a, $b) => strtotime($b['tanggal']) - strtotime($a['tanggal']));

        return view('admin/dashboardkas', ['kas' => $kas]);
    }

// Menyimpan data baru
public function store()
{
    $jenis = $this->request->getPost('jenis');
    $data = [
        'tanggal' => $this->request->getPost('tanggal'),
        'keterangan' => $this->request->getPost('keterangan'),
        'jumlah' => $this->request->getPost('jumlah'),
    ];

    if ($jenis === 'masuk') {
        $this->kasMasukModel->save($data);
        $message = 'Kas Masuk berhasil ditambahkan!';
    } elseif ($jenis === 'keluar') {
        $this->kasKeluarModel->save($data);
        $message = 'Kas Keluar berhasil ditambahkan!';
    }

    // Set flashdata untuk notifikasi
    return redirect()->to('/dashboardkas')->with('message', $message);
}

    // Mengupdate data berdasarkan ID
    public function update($id)
    {
        $jenis = $this->request->getPost('jenis');
        $data = [
            'tanggal' => $this->request->getPost('tanggal'),
            'keterangan' => $this->request->getPost('keterangan'),
            'jumlah' => $this->request->getPost('jumlah'),
        ];

        if ($jenis === 'masuk') {
            $this->kasMasukModel->update($id, $data);
        } elseif ($jenis === 'keluar') {
            $this->kasKeluarModel->update($id, $data);
        }
        

        return redirect()->to('/dashboardkas')->with('message', 'Transaksi berhasil diperbarui!');
    }

    // Menghapus data berdasarkan ID
    public function delete($id)
    {
        if ($this->kasMasukModel->find($id)) {
            $this->kasMasukModel->delete($id);
        } elseif ($this->kasKeluarModel->find($id)) {
            $this->kasKeluarModel->delete($id);
        }

        return redirect()->to('/dashboardkas')->with('message', 'Transaksi berhasil dihapus!');
    }
}
