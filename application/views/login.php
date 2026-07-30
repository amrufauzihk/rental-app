<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RENTAL MOBIL makassar</title>
    <link rel="icon" type="image/jpeg" href="gambar/favicon.jpeg" />

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

    <!-- QRCode.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js">
    </script>

    <style>
        /* ============================================
        VARIABLES (sama seperti kode Anda, tidak saya ubah)
        ============================================ */
        :root {
            --primary: #0a3d2e;
            --primary-light: #0f523e;
            --primary-dark: #062318;
            --gold: #c9a84c;
            --gold-dark: #b8973a;
            --gold-light: #e8d5a0;
            --light: #f5f7f5;
            --white: #ffffff;
            --dark: #1a2a24;
            --shadow: 0 15px 50px rgba(10, 61, 46, 0.10);
            --shadow-hover: 0 25px 70px rgba(10, 61, 46, 0.18);
            --shadow-gold: 0 20px 60px rgba(201, 168, 76, 0.25);
            --radius: 20px;
            --transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--light);
            color: var(--dark);
            overflow-x: hidden;
            margin: 0;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: var(--light);
        }
        ::-webkit-scrollbar-thumb {
            background: var(--gold);
            border-radius: 10px;
        }

        /* ============================================
           LOGIN OVERLAY (sama seperti kode Anda)
        ============================================ */
        #loginOverlay {
            position: fixed;
            inset: 0;
            z-index: 99999;
            background: linear-gradient(165deg, #e8f0ec 0%, #f4f7f5 30%, #ffffff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.7s ease, transform 0.7s ease;
            overflow-y: auto;
            padding: 20px;
        }

        #loginOverlay.hidden {
            opacity: 0;
            transform: scale(1.05);
            pointer-events: none;
        }

        .login-orbs {
            position: absolute;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .login-orbs .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.35;
        }

        .login-orbs .orb-1 {
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(201, 168, 76, 0.15), transparent 70%);
            top: -20%;
            right: -10%;
            animation: float 8s ease-in-out infinite;
        }

        .login-orbs .orb-2 {
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(10, 61, 46, 0.06), transparent 70%);
            bottom: -30%;
            left: -10%;
            animation: floatSlow 10s ease-in-out infinite;
        }

        @keyframes float {
            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(2deg);
            }
        }

        @keyframes floatSlow {
            0%,
            100% {
                transform: translateY(0px) scale(1);
            }
            50% {
                transform: translateY(-30px) scale(1.03);
            }
        }

        @keyframes pulseGold {
            0% {
                box-shadow: 0 0 0 0 rgba(201, 168, 76, 0.5);
            }
            70% {
                box-shadow: 0 0 0 25px rgba(201, 168, 76, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(201, 168, 76, 0);
            }
        }

        .login-card {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(24px) saturate(180%);
            -webkit-backdrop-filter: blur(24px) saturate(180%);
            border-radius: var(--radius);
            padding: 48px 40px 40px;
            max-width: 420px;
            width: 100%;
            box-shadow: 0 30px 80px rgba(10, 61, 46, 0.10);
            border: 1px solid rgba(201, 168, 76, 0.08);
            position: relative;
            z-index: 2;
            animation: slideUp 0.6s ease-out forwards;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px) scale(0.97);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .login-card .brand-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, var(--gold), var(--gold-dark));
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-dark);
            font-size: 2rem;
            margin: 0 auto 16px;
            transition: var(--transition);
        }

        .login-card .brand-icon:hover {
            transform: rotate(-6deg) scale(1.05);
        }

        .login-card h2 {
            font-weight: 800;
            font-size: 1.8rem;
            color: var(--primary);
            text-align: center;
            margin-bottom: 4px;
        }

        .login-card .subtitle {
            text-align: center;
            color: #5a6a62;
            font-size: 0.9rem;
            margin-bottom: 28px;
        }

        .login-card .subtitle .gold-text {
            color: var(--gold);
            font-weight: 600;
        }

        .login-card .form-label {
            font-weight: 600;
            font-size: 0.85rem;
            color: var(--primary);
        }

        .login-card .form-control {
            border-radius: 12px;
            padding: 12px 16px;
            border: 2px solid rgba(10, 61, 46, 0.06);
            background: var(--light);
            font-size: 0.95rem;
            transition: var(--transition);
            box-shadow: none;
        }

        .login-card .form-control:focus {
            border-color: var(--gold);
            background: #fff;
            box-shadow: 0 0 0 4px rgba(201, 168, 76, 0.10);
        }

        .login-card .form-control.is-invalid {
            border-color: #dc3545;
        }

        .login-card .form-control.is-invalid:focus {
            box-shadow: 0 0 0 4px rgba(220, 53, 69, 0.10);
        }

        .login-card .input-group-text {
            background: var(--light);
            border: 2px solid rgba(10, 61, 46, 0.06);
            border-right: none;
            border-radius: 12px 0 0 12px;
            color: #6a7a72;
            font-size: 1rem;
        }

        .login-card .input-group .form-control {
            border-radius: 0 12px 12px 0;
            border-left: none;
        }

        .login-card .input-group .form-control:focus {
            border-left: none;
        }

        .login-card .btn-login {
            background: linear-gradient(135deg, var(--gold), var(--gold-dark));
            color: var(--primary-dark);
            padding: 14px;
            border-radius: 50px;
            font-weight: 700;
            border: none;
            width: 100%;
            transition: var(--transition);
            font-size: 1rem;
            position: relative;
            overflow: hidden;
            margin-top: 8px;
        }

        .login-card .btn-login::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, var(--gold-dark), var(--gold));
            opacity: 0;
            transition: var(--transition);
            border-radius: 50px;
        }

        .login-card .btn-login:hover::before {
            opacity: 1;
        }

        .login-card .btn-login:hover {
            transform: translateY(-3px) scale(1.01);
            box-shadow: var(--shadow-gold);
            color: var(--primary-dark);
        }

        .login-card .btn-login:active {
            transform: scale(0.97);
        }

        .login-card .btn-login span,
        .login-card .btn-login i {
            position: relative;
            z-index: 1;
        }

        .login-card .btn-login:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none !important;
        }

        .login-card .error-msg {
            color: #dc3545;
            font-size: 0.8rem;
            font-weight: 500;
            min-height: 24px;
            text-align: center;
            margin-top: 4px;
        }

        .login-card .error-msg i {
            margin-right: 4px;
        }

        .login-card .success-msg {
            color: #198754;
            font-size: 0.8rem;
            font-weight: 500;
            min-height: 24px;
            text-align: center;
            margin-top: 4px;
        }

        .login-card .toggle-link {
            text-align: center;
            margin-top: 16px;
            font-size: 0.9rem;
            color: #5a6a62;
        }

        .login-card .toggle-link a {
            color: var(--gold);
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: var(--transition);
        }

        .login-card .toggle-link a:hover {
            color: var(--gold-dark);
            text-decoration: underline;
        }

        /* Shake animation */
        @keyframes shake {
            0%,
            100% {
                transform: translateX(0);
            }
            20% {
                transform: translateX(-12px);
            }
            40% {
                transform: translateX(12px);
            }
            60% {
                transform: translateX(-6px);
            }
            80% {
                transform: translateX(6px);
            }
        }

        .shake {
            animation: shake 0.4s ease-in-out;
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }
            100% {
                background-position: 200% 0;
            }
        }

        /* Modal */
        .modal-content {
            border-radius: var(--radius);
        }

        /* Responsive */
        @media (max-width: 991px) {
            .login-card {
                padding: 32px 24px 28px;
                max-width: 380px;
            }
        }

        @media (max-width: 768px) {
            .login-card {
                padding: 28px 20px 24px;
                max-width: 340px;
            }
            .login-card h2 {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .login-card {
                padding: 24px 16px 20px;
                max-width: 100%;
                margin: 10px;
            }
        }
    </style>
</head>

<body>

    <!-- ============================================================
    LOGIN OVERLAY
    ============================================================ -->
    <div id="loginOverlay">
        <div class="login-orbs">
            <div class="orb orb-1"></div>
            <div class="orb orb-2"></div>
        </div>

        <div class="login-card">
            <div class="brand-icon">
                <i class="bi bi-car-front"></i>
            </div>
            <h2 id="formTitle">Selamat Datang</h2>
            <p class="subtitle" id="formSubtitle">
                <span class="gold-text">Rental Mobil Makassar</span> — Silakan masuk
            </p>

            <!-- FORM LOGIN -->
            <form id="loginForm" action="auth/login" method="post" novalidate>
                <div class="mb-3">
                    <label for="loginEmail" class="form-label">Email / Username</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" name="username" class="form-control" id="loginEmail" placeholder="Masukkan email/username" required />
                    </div>
                </div>
                <div class="mb-3">
                    <label for="loginPassword" class="form-label">Kata Sandi</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" name="password" class="form-control" id="loginPassword" placeholder="Masukkan password" required />
                    </div>
                </div>

                <div id="loginError" class="error-msg"></div>

                <button type="submit" class="btn-login" id="loginBtn">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Masuk</span>
                </button>

                <div class="toggle-link">
                    Belum punya akun? <a id="showRegister">Daftar sekarang</a>
                </div>
            </form>

            <!-- FORM REGISTER -->
            <form id="registerForm" novalidate style="display:none;">
                <div class="mb-3">
                    <label for="regEmail" class="form-label">Email / Username</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" id="regEmail" placeholder="contoh@email.com" required />
                    </div>
                </div>
                <div class="mb-3">
                    <label for="regPassword" class="form-label">Kata Sandi</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control" id="regPassword" placeholder="Minimal 3 karakter" required />
                    </div>
                </div>
                <div class="mb-3">
                    <label for="regPasswordConfirm" class="form-label">Konfirmasi Kata Sandi</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" class="form-control" id="regPasswordConfirm" placeholder="Ulangi kata sandi" required />
                    </div>
                </div>

                <div id="registerError" class="error-msg"></div>
                <div id="registerSuccess" class="success-msg"></div>

                <button type="submit" class="btn-login" id="registerBtn">
                    <i class="bi bi-person-plus"></i>
                    <span>Daftar</span>
                </button>

                <div class="toggle-link">
                    Sudah punya akun? <a id="showLogin">Masuk di sini</a>
                </div>
            </form>
        </div>
    </div>

    <!-- ============================================================
    SCRIPTS
    ============================================================ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
    </script>

</body>
</html>