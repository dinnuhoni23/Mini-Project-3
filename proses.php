<?php

function saveData($bookData)
{
    $booksData = [];

    // Include file untuk mengambil data yang sudah ada
    if (file_exists('book.php')) {
        include 'book.php';
    }

    // Tambahkan data baru ke dalam array
    $booksData[] = $bookData;

    // Simpan kembali ke dalam file
    file_put_contents('book.php', '<?php $booksData = ' . var_export($booksData, true) . ';');
}

// Pastikan ini adalah request POST dan tombol submit dari form telah ditekan
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['book_submit'])) {

    // Validasi input
    $fullName = $_POST['fullName'] ?? '';
    $email = $_POST['email'] ?? '';
    $phoneNumber = $_POST['phoneNumber'] ?? '';
    $address = $_POST['address'] ?? '';
    $policeNumber = $_POST['policeNumber'] ?? '';
    $carYear = $_POST['carYear'] ?? '';
    $serviceDate = $_POST['serviceDate'] ?? '';
    $serviceType = $_POST['serviceType'] ?? '';
    $agree = isset($_POST['agree']) ? "Agreed" : "Agreed";
    $paymentMethod = isset($_POST['paymentMethod']) ? $_POST['paymentMethod'] : '';

    // Lakukan validasi lebih lanjut sesuai kebutuhan, misalnya cek apakah semua field diisi atau tidak

    // Data sudah divalidasi, siap untuk disimpan
    $bookData = array(
        'fullName' => $fullName,
        'email' => $email,
        'phoneNumber' => $phoneNumber,
        'address' => $address,
        'policeNumber' => $policeNumber,
        'carYear' => $carYear,
        'serviceDate' => $serviceDate,
        'serviceType' => $serviceType,
        'agree' => $agree,
        'paymentMethod' => $paymentMethod
    );

    // Simpan data user ke dalam array (book.php)
    saveData($bookData);

    header("Location: services.php");
    exit();
}

?>
