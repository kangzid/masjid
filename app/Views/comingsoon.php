<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <style>
        body {
            background: linear-gradient(to bottom, #1a73e8, #4285f4);
            color: #fff;
            font-family: 'Arial', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .countdown {
            font-size: 2rem;
            margin-top: 1rem;
        }
        .btn-back {
            margin-top: 2rem;
            background: #fff;
            color: #4285f4;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            transition: 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        .btn-back:hover {
            background: #f0f0f0;
            color: #1a73e8;
        }
        .coming-soon-img {
            max-width: 100%;
            height: 200px;
            margin-bottom: 1.5rem;
            border-radius: 10px;
            
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Gambar -->
        <img src="img/about-logo.jpg" alt="Coming Soon" class="coming-soon-img">
        
        <!-- Teks dan Konten -->
        <h1 class="display-3 fw-bold"><i class="fas fa-cogs"></i> Coming Soon</h1>
        <p class="lead">Fitur baru sedang dalam pengembangan. Tunggu sebentar lagi!</p>
        <div class="countdown" id="countdown">00:00:00</div>
        
        <!-- Tombol -->
        <a href="<?= base_url('/') ?>" class="btn btn-back">
            <i class="fas fa-arrow-left"></i> Kembali ke Halaman Utama
        </a>
    </div>
    
    <script>
        // Contoh Countdown Timer
        const targetDate = new Date().getTime() + 5 * 24 * 60 * 60 * 1000; // 5 hari ke depan
        const countdownElement = document.getElementById("countdown");
        setInterval(() => {
            const now = new Date().getTime();
            const diff = targetDate - now;

            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);

            countdownElement.textContent = `${days}d ${hours}h ${minutes}m ${seconds}s`;
        }, 1000);
    </script>
</body>
</html>
