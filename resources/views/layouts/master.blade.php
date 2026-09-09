<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>E-Commerce Kelas XII</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; background-color: #f4f4f9;">

    <!-- 1. HEADER (Bingkai Atas) -->
    <!-- Ganti #1a1a1a dengan kode HEX dari Figma kalian -->
    <header style="background-color: #1a1a1a; color: white; padding: 15px 50px; display: flex; justify-content: space-between;">
        <h2 style="margin: 0;">🛒 Techzone</h2>
        <nav style="margin-top: 5px;">
            <a href="/" style="color: white; text-decoration: none; margin-left: 20px;">Katalog</a>
        </nav>
    </header>

    <!-- 2. MAIN (Area Konten Dinamis) -->
    <main style="padding: 40px 50px; min-height: 70vh;">
        <!-- Lubang cerdas ini akan diisi oleh halaman Katalog/Checkout -->
        @yield('konten_utama')
    </main>

    <!-- 3. FOOTER (Bingkai Bawah) -->
    <footer style="background-color: #ddd; padding: 20px; text-align: center;">
        <p style="margin: 0;">&copy; 2026 Hak Cipta Dilindungi - SMK Plus Pelita Nusantara</p>
    </footer>

</body>
</html>