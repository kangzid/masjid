<?php
namespace App\Controllers;
use App\Models\EventModel;
use CodeIgniter\Controller;

class EventController extends Controller
{
    public function update($id)
    {
        $eventModel = new EventModel();

        // Validasi data dari form
        $validation = \Config\Services::validation();
        $data = [
            'tanggal'   => $this->request->getPost('tanggal'),
            'waktu'     => $this->request->getPost('waktu'),
            'judul'     => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        if ($this->request->getFile('gambar')->isValid()) {
            // Jika ada gambar, simpan file-nya
            $file = $this->request->getFile('gambar');
            $filename = $file->getRandomName();
            $file->move('img/', $filename);
            $data['gambar'] = $filename;
        }

        // Update event
        $eventModel->update($id, $data);

        return redirect()->to('/admin/event')->with('success', 'Acara berhasil diperbarui!');
    }
}
