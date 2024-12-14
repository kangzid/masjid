<?php

namespace App\Controllers;

use App\Models\EventModel;
use CodeIgniter\Controller;

class editeventController extends Controller
{
    public function index()
    {
        $eventModel = new EventModel();
        $data['events'] = $eventModel->findAll(); // Mengambil semua data acara dari database
        
        return view('admin/dashboardevent', $data);
    }

    public function add()
    {
        return view('admin/add_event'); // Tampilkan form tambah acara
    }

    public function create()
    {
        $eventModel = new EventModel();
        $file = $this->request->getFile('gambar');
        
        // Validasi ukuran file (maks 2 MB)
        if ($file->getSize() > 2097152) { // 2 MB dalam byte
            return redirect()->back()->with('error', 'Ukuran file gambar tidak boleh lebih dari 2 MB!');
        }
        // Ambil ekstensi file (jpg, png, dll.)
        $extension = $file->getExtension();
        
        // Generate nama file dengan format judul acara + ID
        $judulAcara = url_title($this->request->getPost('judul'), '_', true); // Ubah judul jadi format URL-friendly
        $eventModel->insert([
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu' => $this->request->getPost('waktu'),
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => '' // Temp value; update after generating filename
        ]);
    
        $insertedID = $eventModel->getInsertID(); // Ambil ID terakhir yang diinput
        
        // Buat nama file: judulAcara_ID.ext (misal: acara_04.jpg)
        $filename = $judulAcara . '_' . $insertedID . '.' . $extension;
        
        // Pindahkan file ke folder img dengan nama baru
        $file->move('img/', $filename);
        
        // Update data untuk menambahkan nama file gambar
        $eventModel->update($insertedID, ['gambar' => $filename]);
    
        return redirect()->to('/dashboardevent')->with('success', 'Acara berhasil ditambahkan!');
    }
    

    public function delete($id)
    {
        $eventModel = new EventModel();
        $event = $eventModel->find($id);

        // Hapus gambar dari folder img
        if ($event && file_exists('img/' . $event['gambar'])) {
            unlink('img/' . $event['gambar']);
        }

        // Hapus data acara
        $eventModel->delete($id);

        return redirect()->to('/dashboardevent')->with('success', 'Acara berhasil dihapus!');
    }
    public function update($id)
{
    $eventModel = new EventModel();
    $event = $eventModel->find($id);

    $data = [
        'tanggal' => $this->request->getPost('tanggal'),
        'waktu' => $this->request->getPost('waktu'),
        'judul' => $this->request->getPost('judul'),
        'deskripsi' => $this->request->getPost('deskripsi'),
    ];

    // Cek jika ada file gambar baru diunggah
    $file = $this->request->getFile('gambar');
    if ($file && $file->isValid() && !$file->hasMoved()) {
        $extension = $file->getExtension();
        $judulAcara = url_title($this->request->getPost('judul'), '_', true);
        $filename = $judulAcara . '_' . $id . '.' . $extension;

        if ($file && $file->isValid() && !$file->hasMoved()) {
            if ($file->getSize() > 2097152) {
                return redirect()->back()->with('error', 'Ukuran file gambar tidak boleh lebih dari 2 MB!');
            }
            // Proses file jika ukuran valid
        }
        
        // Hapus gambar lama jika ada
        if (file_exists('img/' . $event['gambar'])) {
            unlink('img/' . $event['gambar']);
        }

        // Pindahkan file baru dengan nama baru
        $file->move('img/', $filename);
        $data['gambar'] = $filename; // Update data gambar
    }

    $eventModel->update($id, $data);

    return redirect()->to('/dashboardevent')->with('success', 'Acara berhasil diperbarui!');
}


}
