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
<article class="py-8 font-serif max-w-screen-md border-b border-gray-300"> 
    <h2 class="mb-1  text-3xl tracking-tight font-bold text-white">{{ $post ['title'] }}</h2>
    <div class="my-4 font-light">
    <p> {{($post ['body']) }} <p>
        <a href="/posts" class="font-medium text-white">&laquo; Back To</a>
    </article>

    <div class="post-detail">
    
        @if ($post->image) <!-- Mengecek apakah ada gambar -->
            <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" style="width: 100%; max-width: 600px;"> <!-- Menampilkan gambar -->
        @else
            <p>No image available for this post.</p> <!-- Pesan jika tidak ada gambar -->
        @endif
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</x-layout>