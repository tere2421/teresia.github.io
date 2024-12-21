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
                        min-height: 280vh;
                        margin: 0;
                color: white;
            }
    
            .form-container {
                background: rgba(255, 255, 255, 0.8);
                padding: 20px;
                border-radius: 10px;
                color: black;
            }
        </style>
    </head>
    <body>
        <div class="container py-5">
            <div class="row">
                <!-- Form -->
                <div class="col-md-4">
                    <div class="form-container">
                        <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLScVuQeBDI8BsdjlslbJ4Py17mOUZsy2tTvX5ewaVb0c3nTPrw/formResponse" method="POST">
                            <h4>Book Your Stay</h4>
                            <div class="mb-3">
                                <label for="checkin" class="form-label">Check In</label>
                                <input type="date" class="form-control" id="checkin" name="checkin">
                            </div>
                            <div class="mb-3">
                                <label for="checkout" class="form-label">Check Out</label>
                                <input type="date" class="form-control" id="checkout" name="checkout">
                            </div>
                            <div class="mb-3">
                                <label for="guests" class="form-label">Guests</label>
                                <input type="number" class="form-control" id="guests" name="guests">
                            </div>
                            <div class="mb-3">
                                <label for="accommodation" class="form-label">Accommodation</label>
                                <select class="form-select" id="accommodation" name="accommodation">
                                    <option value="Standart Room Rp. 399,000">Standart Room Rp. 399,000</option>
                                    <option value="Superior Room Rp. 549,000">Superior Room Rp. 549,000</option>
                                    <option value="Deluxe Room Rp. 649,000">Deluxe Room Rp. 649,000</option>
                                    <option value="Suite Room Rp. 999,000">Suite Room Rp. 999,000</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <p class="small">For additional guests, you may request for chargeable extra beds.</p>
                            <button type="submit" class="btn btn-primary w-100">Book Now</button>
                        </form>
                    </div>
                </div>
        <!-- Image/Carousel -->
        <div class="col-md-8">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/1.jpg') }}" class="d-block w-100" alt="Room 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/2.jpg') }}" class="d-block w-100" alt="Room 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/3.jpg') }}" class="d-block w-100" alt="Room 3">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/4.jpg') }}" class="d-block w-100" alt="Room 4">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/4.1.jpg') }}" class="d-block w-100" alt="Room 4">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>    

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    
    </x-layout>