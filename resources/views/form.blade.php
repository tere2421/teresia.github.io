<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <form class="bg-white p-6 rounded shadow-md w-full max-w-md">
        <div>
            <label for="checkin" class="block text-sm font-medium text-gray-700">Check In</label>
            <input type="date" id="checkin" class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="mt-4">
            <label for="checkout" class="block text-sm font-medium text-gray-700">Check Out</label>
            <input type="date" id="checkout" class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="mt-4">
            <label for="guest" class="block text-sm font-medium text-gray-700">Guest</label>
            <input type="number" id="guest" class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="mt-4">
            <label for="accomodation" class="block text-sm font-medium text-gray-700">Accomodation</label>
            <select id="accomodation" class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option>Standard King RM 140</option>
                <option>Deluxe Queen RM 180</option>
            </select>
        </div>
        <div class="mt-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="mt-4">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
            <input type="text" id="phone" class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="mt-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
        <p class="text-sm text-gray-600 mt-4">For additional guest, you may request for chargeable extra bed.</p>
        <button type="submit" class="mt-6 w-full bg-blue-500 text-white py-2 rounded-md shadow-sm hover:bg-blue-600">Book Now!</button>
    </form>
</div>
