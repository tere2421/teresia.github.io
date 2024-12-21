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
                        min-height: 100vh;
                        margin: 0;
                color: white;
            }
          </style>
    <div class="contact-info font-serif text-center">
    <ul>
        <li>
            <a href="https://instagram.com/alula.hotel" class=" text-white block text-center text-6xl mt-12">Instagram</a> 
        </li>
        <li>
            <a href="https://x.com/alula.hotel" class=" text-white block text-center text-6xl mt-12">X</a>
        </li>
        <li>
            <a href="https://wa.me/+6288214734451" class=" text-white block text-center text-6xl mt-12">WhatsApp</a> 
        </li>
    </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

  </x-layout>
