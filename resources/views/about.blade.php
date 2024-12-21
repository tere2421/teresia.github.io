<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book Now</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                            url('{{ asset('images/hoootel.jpeg') }}') no-repeat center center fixed;
                        background-size: 100% 100%; /* Paksa gambar memenuhi area */
                        min-height: 120vh;
                        margin: 0;
                color: white;
            }
          </style>
              <div class="contact-info font-serif text-center">
    <h3>Di Alula Hotel, kami percaya bahwa setiap tamu layak mendapatkan pelayanan terbaik. Dengan desain yang elegan dan fasilitas modern, kami berkomitmen untuk memberikan pengalaman yang memuaskan, baik untuk perjalanan bisnis maupun liburan keluarga. Nikmati berbagai layanan unggulan, mulai dari kamar yang nyaman, restoran dengan cita rasa internasional, hingga fasilitas rekreasi yang lengkap.</h3>
  </div>
    <div class="contact-info text-center">
      <h2 class="text-4xl font-bold mb-4">Alamat Kami</h2>
      <p class="text-xl font-serif text-white mb-4">Jl. Apa Adanya No. 123, Jakarta, Indonesia</p>
    
      <h3 class="text-2xl font-semibold mb-4">Temukan Kami di Peta</h3>
      <p><a href="https://www.google.com/maps?q=-6.200000,106.816666" target="_blank" class="text-blue-500 hover:text-blue-700">Klik di sini untuk melihat lokasi di Google Maps</a></p>
  </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    
    
  </x-layout>