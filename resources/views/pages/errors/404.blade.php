<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | CIPTAMEDIANUSA</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #ff7e33;
            /* Vibrant orange */
            --primary-hover: #e86a1f;
            /* Darker orange for hover states */
            --secondary-color: #4a9fd8;
            /* Soft blue */
            --tertiary-color: #4ebe8b;
            /* Subtle green */
            --light-color: #fef8f3;
            /* Warm light with orange tint */
            --dark-color: #2d3748;
            /* Deep slate for contrast */
            --text-color: #3d4852;
            /* Dark slate for text */
            --gradient-primary: linear-gradient(135deg, #ff7e33 0%, #ffaa66 100%);
            --gradient-secondary: linear-gradient(135deg, #4a9fd8 0%, #7bc2f5 100%);
            --shadow-sm: 0 4px 6px rgba(255, 126, 51, 0.1);
            --shadow-md: 0 10px 15px rgba(255, 126, 51, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff;
            color: var(--text-color);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .error-container {
            max-width: 800px;
            text-align: center;
            padding: 40px 20px;
            position: relative;
        }

        .error-code {
            font-size: 120px;
            font-weight: 700;
            line-height: 1;
            margin-bottom: 20px;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
            display: inline-block;
        }

        .error-code::after {
            content: "404";
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
            font-size: 120px;
            font-weight: 700;
            color: transparent;
            -webkit-text-stroke: 1px rgba(255, 126, 51, 0.2);
        }

        .error-title {
            font-size: 28px;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 15px;
        }

        .error-message {
            font-size: 18px;
            color: var(--text-color);
            margin-bottom: 30px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-home {
            display: inline-flex;
            align-items: center;
            background: var(--gradient-primary);
            color: white;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-sm);
        }

        .btn-home:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-md);
        }

        .btn-home i {
            margin-right: 8px;
        }

        .decorative-element {
            position: absolute;
            border-radius: 50%;
            z-index: -1;
        }

        .circle-1 {
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, rgba(255, 126, 51, 0.05) 0%, rgba(255, 126, 51, 0.1) 100%);
            top: -50px;
            right: -50px;
        }

        .circle-2 {
            width: 150px;
            height: 150px;
            background: linear-gradient(135deg, rgba(74, 159, 216, 0.05) 0%, rgba(74, 159, 216, 0.1) 100%);
            bottom: -30px;
            left: -30px;
        }

        .circle-3 {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, rgba(78, 190, 139, 0.05) 0%, rgba(78, 190, 139, 0.1) 100%);
            top: 40px;
            left: 20%;
        }

        .illustration {
            margin-bottom: 30px;
            position: relative;
        }

        .illustration svg {
            max-width: 100%;
            height: auto;
        }

        @media (max-width: 768px) {
            .error-code {
                font-size: 100px;
            }

            .error-code::after {
                font-size: 100px;
            }

            .error-title {
                font-size: 24px;
            }

            .error-message {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .error-code {
                font-size: 80px;
            }

            .error-code::after {
                font-size: 80px;
            }
        }
    </style>
</head>

<body>
    <div class="error-container">
        <div class="decorative-element circle-1"></div>
        <div class="decorative-element circle-2"></div>
        <div class="decorative-element circle-3"></div>

        <div class="illustration">
            <svg width="200" height="140" viewBox="0 0 200 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Simplified 404 illustration -->
                <path
                    d="M20 70C20 42.386 42.386 20 70 20H130C157.614 20 180 42.386 180 70V70C180 97.614 157.614 120 130 120H70C42.386 120 20 97.614 20 70V70Z"
                    fill="#FEF8F3" />
                <path d="M59 50L59 90" stroke="#FF7E33" stroke-width="8" stroke-linecap="round" />
                <path d="M95 50V90" stroke="#4A9FD8" stroke-width="8" stroke-linecap="round" />
                <path d="M131 50V90" stroke="#4EBE8B" stroke-width="8" stroke-linecap="round" />
                <path d="M59 70H95" stroke="#FF7E33" stroke-width="8" stroke-linecap="round" />
                <circle cx="131" cy="50" r="8" fill="#4EBE8B" />
            </svg>
        </div>

        <h1 class="error-code">404</h1>
        <h2 class="error-title">Halaman Tidak Ditemukan</h2>
        <p class="error-message">Maaf, halaman yang Anda cari tidak dapat ditemukan. Halaman mungkin telah dipindahkan
            atau dihapus.</p>

        <a href="/home" class="btn-home">
            <i class="fas fa-home"></i> Kembali ke Beranda
        </a>
    </div>
</body>

</html>
