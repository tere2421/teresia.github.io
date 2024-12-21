<!-- resources/views/rooms/book.blade.php -->

<h1>Book Room: {{ $room->nama_kamar }}</h1>
<p>Price: Rp {{ number_format($room->harga_per_malam, 0, ',', '.') }}</p>

<!-- Form for booking -->
<form action="{{ route('rooms.book', $room) }}" method="POST">
    @csrf
    <button type="submit">Book this Room</button>
</form>
<!-- Misalnya, di dalam resources/views/rooms/index.blade.php -->
@foreach ($rooms as $room)
    <div>
        <h3>{{ $room->nama_kamar }}</h3>
        <p>Price: Rp {{ number_format($room->harga_per_malam, 0, ',', '.') }}</p>
        <a href="{{ route('rooms.book', $room) }}">Book this room</a>
    </div>
@endforeach
