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
                        min-height: 200vh;
                        margin: 0;
                color: white;
            }
          </style>
    <div class="contact-info font-serif">
    <h1>Alula Hotel memiliki berbagai fasilitas yang dapat memanjakan Anda</h1>
    <div>
    @foreach ($posts as $post )

<article class=" text-white font-serif py-8 max-w-screen-md border-b border-gray-300"> 
    <a href="/posts/{{ $post ['id'] }}" class="text-white hover:underline">
    <h2 class="text-white font-serif mb-1  text-3xl tracking-tight font-bold">{{ $post
    ['title'] }}</h2>
    </a>
    <div class="text-white my-4 font-medium-serif">
    <p> {{ Str::limit ($post ['body'], 150) }} <p>
            <a href="/posts/{{ $post['id'] }}" class="font-medium text-white hover:underline">Read More &raquo;</a>
    </article>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</x-layout>