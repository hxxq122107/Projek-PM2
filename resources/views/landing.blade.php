<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoyageRide - Pemesanan Tiket Bus Online</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f9f9f9;
            padding-top: 70px; /* Add padding to body to account for fixed header */
        }

        /* Header Styles */
        .header {
            background-color: #006064;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            color: white;
            position: fixed; /* Make header fixed */
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000; /* Ensure header stays on top of other content */
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); /* Add subtle shadow */
        }

        .logo {
            height: 40px;
        }

        .nav-links {
            display: flex;
            gap: 20px;
        }

        .profile-icon {
            background-color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Search Bar Section */
        .search-container {
            background-color: #006064;
            padding: 20px 0 40px 0;
        }

        .search-bar {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            background-color: white;
            border-radius: 5px;
            overflow: hidden;
        }

        .search-input {
            flex: 1;
            padding: 15px;
            border: none;
            border-right: 1px solid #ccc;
            text-align: center;
        }

        .search-input input {
            width: 100%;
            border: none;
            text-align: center;
            font-family: Arial, sans-serif;
            outline: none;
        }

        .date-input {
            flex: 1;
            padding: 15px;
            border: none;
            border-right: 1px solid #ccc;
            text-align: center;
        }

        .date-input label {
            display: block;
            font-size: 12px;
            margin-bottom: 5px;
            color: #666;
        }

        .date-input input {
            width: 100%;
            border: none;
            text-align: center;
            font-family: Arial, sans-serif;
            outline: none;
        }

        .search-button {
            padding: 15px 20px;
            background-color: #00BCD4;
            color: white;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* Steps Section */
        .steps-section {
            padding: 30px;
            text-align: center;
            background-color: #f2f2f2;
        }

        .steps-title {
            font-size: 22px;
            margin-bottom: 30px;
        }

        .steps-container {
            display: flex;
            justify-content: space-around;
            max-width: 900px;
            margin: 0 auto;
        }

        .step {
            flex: 1;
            padding: 15px;
            max-width: 250px;
        }

        .step-number {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .step-text {
            font-size: 14px;
            line-height: 1.5;
        }

        /* Benefits Section */
        .benefits-section {
            background-color: #006064;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        .benefits-title {
            font-size: 24px;
            margin-bottom: 30px;
            letter-spacing: 1px;
        }

        .promise-badge {
            width: 80px;
            height: 80px;
            margin: 0 auto 30px;
            background-color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .benefits-container {
            display: flex;
            justify-content: space-around;
            max-width: 900px;
            margin: 0 auto;
        }

        .benefit {
            flex: 1;
            background-color: white;
            color: #777;
            padding: 30px 15px;
            margin: 0 5px;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            height: 200px;
        }

        .benefit-icon {
            width: 60px;
            height: 60px;
            margin-bottom: 15px;
            fill: #006064;
        }

        .benefit-title {
            font-size: 14px;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .benefit-text {
            font-size: 12px;
        }

        /* Main Content Section */
        .main-content {
            padding: 40px 20px;
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }

        .main-title {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .main-text {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
            text-align: left;
        }

        .read-more {
            color: #006064;
            text-decoration: none;
            font-weight: bold;
        }

        /* Promo Section */
        .promo-section {
            padding: 30px 20px;
            max-width: 900px;
            margin: 0 auto;
        }

        .promo-title {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .promo-text {
            margin-bottom: 30px;
        }

        .promo-card {
            background-color: #006064;
            color: white;
            padding: 30px;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .promo-info {
            text-align: left;
        }

        .promo-logo {
            width: 60px;
            margin-bottom: 15px;
        }

        .promo-headline {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .promo-discount {
            font-size: 16px;
            margin-bottom: 15px;
        }

        .promo-details {
            font-size: 14px;
        }

        .promo-button {
            background-color: white;
            color: #006064;
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        /* Footer */
        .footer {
            background-color: #006064;
            color: white;
            padding: 40px 20px;
        }

        .footer-content {
            max-width: 900px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        .footer-logo {
            width: 80px;
            margin-bottom: 20px;
        }

        .footer-text {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .social-links {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .social-icon {
            width: 30px;
            height: 30px;
            fill: white;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .social-icon:hover {
            transform: scale(1.1);
        }

        .copyright {
            font-size: 12px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <img src="Logo VoyadeRide.png" alt="VoyadeRide Logo" class="logo">
        <div class="nav-links">
            <div>Bis Pariwisata</div>
            <div>Pemesanan</div>
        </div>
        <div class="profile-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#006064" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
        </div>
    </div>

    <!-- Search Bar Section -->
    <div class="search-container">
        <div class="search-bar">
            <div class="search-input">
                <input type="text" placeholder="Dari">
            </div>
            <div class="search-input">
                <input type="text" placeholder="Ke">
            </div>
            <div class="date-input">
                <label>Tanggal Pergi</label>
                <input type="date">
            </div>
            <div class="date-input">
                <label>Tanggal Pulang</label>
                <input type="date">
            </div>
            <button class="search-button">
                Cari 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </button>
        </div>
    </div>

    <!-- Steps Section -->
    <section class="steps-section">
        <h2 class="steps-title">Cara pemesanan tiket Bis</h2>
        <div class="steps-container">
            <div class="step">
                <div class="step-number">1</div>
                <div class="step-text">Masukkan tempat keberangkatan, tujuan, tanggal perjalanan dan kemudian klik 'Cari'</div>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <div class="step-text">Masukkan tempat keberangkatan, tujuan, tanggal perjalanan dan kemudian klik 'Cari'</div>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <div class="step-text">Pembayaran dapat dilakukan melalui transfer ATM, internet banking, Alfamart, kartu Kredit/Debit, Mandiri Clickpay, Bca Clickpay dll</div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="promise-badge">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#006064" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
        </div>
        <h2 class="benefits-title">KELEBIHAN LAYANAN KAMI</h2>
        <div class="benefits-container">
            <div class="benefit">
                <div>
                    <svg class="benefit-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                    </svg>
                    <h3 class="benefit-title">TANPA BIAYA TAMBAHAN</h3>
                </div>
                <p class="benefit-text">Pesan bis anda dengan harga terbaik</p>
            </div>
            <div class="benefit">
                <div>
                    <svg class="benefit-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>
                    </svg>
                    <h3 class="benefit-title">PEMBAYARAN ONLINE YANG AMAN & NYAMAN</h3>
                </div>
                <p class="benefit-text">Bayar tiket online anda dengan cara yang aman dan nyaman</p>
            </div>
            <div class="benefit">
                <div>
                    <svg class="benefit-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M4 16c0 .88.39 1.67 1 2.22V20c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h8v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1.78c.61-.55 1-1.34 1-2.22V6c0-3.5-3.58-4-8-4s-8 .5-8 4v10zm3.5 1c-.83 0-1.5-.67-1.5-1.5S6.67 14 7.5 14s1.5.67 1.5 1.5S8.33 17 7.5 17zm9 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm1.5-6H6V6h12v5z"/>
                    </svg>
                    <h3 class="benefit-title">PILIH BIS YANG ANDA INGINKAN</h3>
                </div>
                <p class="benefit-text">Pesan bis sesuai pilihan anda</p>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="main-content">
        <h2 class="main-title">Pesan Bus Lebih Mudah dan Lebih Cepat melalui VoyageRide!</h2>
        <p class="main-text">VoyageRide adalah adalah agregator bus lokal penyedia layanan perjalanan bus pariwisata di Indonesia. Kami bermitra dengan sejumlah operator bus untuk mempermudah bus pariwisata secara online, mulai dari Jakarta, Bandung, Yogyakarta, Surabaya, hingga yang lainnya. Selain itu, layanan pemesanan bus pariwisata online kami juga memberikan...</p>
        <p class="main-text">Pesan bus online sekarang juga! Tidak perlu datang ke agen, cukup langsung download applikasinya, lalu pesan...</p>
        <h2 class="main-title">Mengapa Harus Pesan di VoyageRide?</h2>
        <p class="main-text">Sebagai mitra perjalanan yang dapat diandalkan sepanjang hari, VoyageRide menawarkan layanan pemesanan bus yang cepat dan mudah. Selain di Indonesia, redBus juga dipercaya oleh Ribuan Pelanggan di Indonesia. Untuk mengoptimalkan layanannya, VoyageRide bermitra dengan lebih dari 200 operator bus terbaik di berbagai kota di Indonesia dalam upaya menawarkan tiket bus terbaik nya. Tak hanya itu, VoyageRide juga menawarkan layanan Green Trip dengan pIlihan yang bervariasi dan harga yang menarik.</p>
        <p class="main-text">Anda dapat menghemat waktu dan uang ... <a href="#" class="read-more">Read more</a></p>
    </section>

    <!-- Promo Section -->
    <section class="promo-section">
        <h2 class="promo-title">Promo eksklusif hari ini di VoyageRide</h2>
        <p class="promo-text">Jangan lewatkan kesempatan terbatas ini, pesan tiket sekarang dan jalan dengan aman & hemat. Jangan sampai kehabisan!</p>
        <div class="promo-card">
            <div class="promo-info">
                <img src="Logo VoyadeRide.png" alt="VoyageRide Logo" class="promo-logo">
                <h3 class="promo-headline">Dapatkan Promo Eksklusif Langka Ini!</h3>
                <p class="promo-discount">Potongan Langsung 20%</p>
                <p class="promo-details">245 Promo | 66 Operator | 20 Rute</p>
            </div>
            <a href="#" class="promo-button">Pesan Sekarang</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <img src="Logo VoyadeRide.png" alt="VoyageRide Logo" class="footer-logo">
            <p class="footer-text">VoyageRide adalah jasa pemesanan bis pariwisata secara online. Telah dipercaya lebih dari 25 juta pelanggan secara global. VoyageRide menawarkan pemesanan bis melalui website rute-rute utama di Indonesia.</p>
            <div class="social-links">
                <!-- Twitter Icon -->
                <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                </svg>
                
                <!-- Instagram Icon -->
                <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                </svg>
                
                <!-- Email Icon -->
                <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                </svg>
            </div>
            <p class="copyright">© 2025 VoyageRide, Inc. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>