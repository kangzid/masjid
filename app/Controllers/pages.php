<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KritikSaranModel;

class Pages extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function activity()
    {
        return view('activity');
    }

    public function blog()
    {
        return view('blog');
    }

    public function jadwal_sholat()
    {
        return view('jadwal_sholat'); 
    }
    public function event()
    {
        return view('event');
    }

    public function sermon()
    {
        return view('sermon');
    }

    public function team()
    {
        return view('team');
    }
    public function contact()
    {
        // Tampilkan halaman kontak
        return view('contact');
    }
    public function comingsoon()
    {
        // Tampilkan halaman kontak
        return view('comingsoon');
    }
    public function profil()
    {
        // Tampilkan halaman kontak
        return view('profil');
    }
    public function peraturan()
    {
        // Tampilkan halaman kontak
        return view('peraturan');
    }



    public function submitFeedback()
    {
        $kritikSaranModel = new KritikSaranModel();

        // Validasi input
        $rules = [
            'nama'   => 'required|min_length[3]|max_length[100]',
            'email'  => 'required|valid_email|max_length[100]',
            'subjek' => 'required|max_length[255]',
            'pesan'  => 'required|min_length[5]|max_length[1000]',
        ];

        if ($this->validate($rules)) {
            // Honeypot field (field ini tidak boleh diisi oleh pengguna manusia)
            if (!empty($this->request->getPost('hidden_field'))) {
                session()->setFlashdata('error', 'Spam terdeteksi!');
                return redirect()->back()->withInput();
            }

            // Rate limiting (batasi pengiriman form dalam waktu tertentu)
            $lastSubmit = session()->get('last_submit_time');
            $currentTimestamp = time();

            if ($lastSubmit && ($currentTimestamp - $lastSubmit < 60)) {
                session()->setFlashdata('error', 'Tunggu beberapa saat sebelum mengirim masukan lagi.');
                return redirect()->back()->withInput();
            }

            // Set waktu pengiriman terakhir
            session()->set('last_submit_time', $currentTimestamp);

            // Data valid untuk disimpan
            $data = [
                'nama'   => esc($this->request->getPost('nama')),
                'email'  => esc($this->request->getPost('email')),
                'subjek' => esc($this->request->getPost('subjek')),
                'pesan'  => esc($this->request->getPost('pesan')),
            ];

            // Simpan ke database
            $kritikSaranModel->save($data);

            // Flashdata untuk notifikasi sukses
            session()->setFlashdata('success', 'Kritik dan Saran Anda berhasil dikirim!');
            return redirect()->to('/contact');
        } else {
            // Validasi gagal, tampilkan pesan error
            $errors = $this->validator->getErrors();
            return redirect()->back()->withInput()->with('errors', $errors);
        }
}

}
