<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    if ($stmt->execute()) {
        echo "
        <div class='min-h-screen flex flex-col items-center justify-center bg-gray-100'>
            <p class='text-green-600 font-bold text-2xl mb-4'>Thank you! Your message has been sent.</p>
            <a href='index.php' class='bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-6 rounded'>
                Return Back
            </a>
        </div>";
    } else {
        echo "
        <div class='min-h-screen flex flex-col items-center justify-center bg-gray-100'>
            <p class='text-red-600 font-bold text-2xl mb-4'>Oops! Something went wrong.</p>
            <a href='index.php' class='bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-6 rounded'>
                Return Back
            </a>
        </div>";
    }

    $stmt->close();
    $conn->close();
}
?>
