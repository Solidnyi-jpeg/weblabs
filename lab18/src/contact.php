<?php
// contact.php
?>

<section class="min-h-screen flex items-center justify-center bg-gray-100">
    <form action="save_contact.php" method="POST" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Contact Us</h2>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Name</label>
            <input type="text" name="name" required class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Email</label>
            <input type="email" name="email" required class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Phone</label>
            <input type="text" name="phone" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Message</label>
            <textarea name="message" required class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500 h-32"></textarea>
        </div>

        <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
            Send Message
        </button>
    </form>
</section>
