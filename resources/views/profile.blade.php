<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile - {{ $nama }}</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            overflow: hidden;

            /* Background putih abu */
            background:
                radial-gradient(
                    circle at 20% 20%,
                    #ffffff 0%,
                    #eeeeee 35%,
                    #d9d9d9 70%,
                    #f8f8f8 100%
                );

            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        /* =========================
           BACKGROUND 3D
        ========================= */

        .background {
            position: fixed;
            inset: 0;
            overflow: hidden;
            z-index: 0;
            perspective: 1000px;
        }

        .wave {
            position: absolute;
            width: 160%;
            height: 260px;

            border-radius: 50%;

            background: linear-gradient(
                135deg,
                rgba(255, 255, 255, 0.95),
                hsla(0, 0%, 82%, 0.75),
                rgba(255, 255, 255, 0.95)
            );

            box-shadow:
                0 20px 40px rgba(0, 0, 0, 0.08),
                inset 0 10px 20px rgba(255, 255, 255, 0.9);

            transform-style: preserve-3d;

            filter: blur(0.2px);

            animation: waveMove 12s ease-in-out infinite alternate;
        }

        .wave1 {
            top: 10%;
            left: -30%;
            transform: rotate(-8deg) translateZ(-100px);
        }

        .wave2 {
            top: 40%;
            left: -20%;
            transform: rotate(7deg) translateZ(-50px);

            animation-duration: 16s;
            animation-delay: -3s;
        }

        .wave3 {
            bottom: 5%;
            left: -30%;
            transform: rotate(-5deg) translateZ(-150px);

            animation-duration: 20s;
            animation-delay: -6s;
        }

        @keyframes waveMove {
            0% {
                transform:
                    translateX(-5%)
                    rotate(-6deg)
                    scale(1);
            }

            50% {
                transform:
                    translateX(8%)
                    rotate(5deg)
                    scale(1.08);
            }

            100% {
                transform:
                    translateX(-2%)
                    rotate(-3deg)
                    scale(1.03);
            }
        }

        /* Garis cahaya pada background */

        .light-line {
            position: absolute;
            width: 150%;
            height: 5px;

            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.86),
                transparent
            );

            filter: blur(2px);

            animation: lightMove 10s linear infinite;
        }

        .line1 {
            top: 35%;
            left: -30%;
            transform: rotate(12deg);
        }

        .line2 {
            top: 68%;
            left: -20%;
            transform: rotate(-10deg);

            animation-delay: -4s;
        }

        @keyframes lightMove {
            from {
                transform:
                    translateX(-20%)
                    rotate(10deg);
            }

            to {
                transform:
                    translateX(20%)
                    rotate(10deg);
            }
        }

        /* =========================
           PROFILE CARD
        ========================= */

        .profile-card {
            position: relative;
            z-index: 10;

            width: 430px;
            padding: 38px;

            border-radius: 25px;

            /* Efek kaca */
            background: rgba(255, 255, 255, 0.72);

            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);

            border: 1px solid rgba(255, 255, 255, 0.8);

            box-shadow:
                0 25px 60px rgba(0, 0, 0, 0.15),
                inset 0 1px 1px rgba(255, 255, 255, 0.9);

            text-align: center;

            animation: cardFloat 5s ease-in-out infinite;
        }

        @keyframes cardFloat {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-8px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        /* =========================
           ICON
        ========================= */

        .profile-icon {
    width: 105px;
    height: 105px;

    margin: 0 auto 22px;

    border-radius: 50%;

    overflow: hidden;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #f3e4c8;

    box-shadow:
        0 10px 30px rgba(180, 140, 70, 0.30),
        0 0 30px rgba(220, 180, 100, 0.20);

    animation: glow 3s ease-in-out infinite;
}

.profile-icon img {
    width: 100%;
    height: 100%;

    object-fit: cover;

    object-position: center;

    display: block;
}

        @keyframes glow {
            0%, 100% {
                box-shadow:
                    0 10px 30px rgba(255, 240, 32, 0.9),
                    0 0 20px rgba(255, 225, 32, 0.71);
            }

            50% {
                box-shadow:
                    0 10px 35px rgba(255, 192, 32, 0.8),
                    0 0 35px rgba(255, 218, 32, 0.3);
            }
        }

        /* =========================
           TEXT
        ========================= */

        h1 {
            font-size: 28px;
            color: #222;
            margin-bottom: 7px;
        }

        .subtitle {
            color: #6d6d6d;
            font-size: 16px;
            margin-bottom: 30px;
        }

        /* =========================
           INFORMATION BOX
        ========================= */

        .info-box {
            display: flex;
            align-items: center;

            text-align: left;

            padding: 15px 18px;

            margin-bottom: 13px;

            border-radius: 14px;

            background: rgba(235, 237, 240, 0.75);

            border: 1px solid rgba(255, 255, 255, 0.8);

            box-shadow:
                inset 0 1px 2px rgba(255,255,255,0.8);

            transition: all 0.3s ease;
        }

        .info-box:hover {
            transform: translateY(-3px);

            background: rgba(255, 255, 255, 0.85);

            box-shadow:
                0 8px 20px rgba(0,0,0,0.08);
        }

        .info-icon {
            width: 42px;
            height: 42px;

            border-radius: 12px;

            background: rgba(210, 214, 220, 0.8);

            display: flex;
            align-items: center;
            justify-content: center;

            margin-right: 14px;

            font-size: 20px;
        }

        .label {
            color: #7a7a7a;
            font-size: 12px;
            margin-bottom: 5px;
            letter-spacing: 0.5px;
        }

        .value {
            color: #222;
            font-size: 16px;
            font-weight: bold;
        }

        /* =========================
           FOOTER
        ========================= */

        .footer {
            margin-top: 27px;

            color: #8a8a8a;

            font-size: 13px;

            display: flex;
            align-items: center;
            justify-content: center;

            gap: 10px;
        }

        .footer::before,
        .footer::after {
            content: "";

            width: 35px;
            height: 1px;

            background: #cfcfcf;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 600px) {

            .profile-card {
                width: 90%;
                padding: 30px 25px;
            }

            h1 {
                font-size: 24px;
            }

        }

    </style>
</head>

<body>

    <!-- BACKGROUND -->
    <div class="background">

        <div class="wave wave1"></div>

        <div class="wave wave2"></div>

        <div class="wave wave3"></div>

        <div class="light-line line1"></div>

        <div class="light-line line2"></div>

    </div>


    <!-- PROFILE -->
    <div class="profile-card">

        <div class="profile-icon">
    <img src="{{ asset('images/krisvelix.png') }}" alt="Foto Profil">
</div>

        <p class="subtitle">
            Mahasiswa Ilmu Komputer
        </p>


        <div class="info-box">

            <div class="info-icon">
                👤
            </div>

            <div>
                <div class="label">
                    NAMA
                </div>

                <div class="value">
                    {{ $nama }}
                </div>
            </div>

        </div>


        <div class="info-box">

            <div class="info-icon">
                🎓
            </div>

            <div>
                <div class="label">
                    KELAS
                </div>

                <div class="value">
                    {{ $kelas }}
                </div>
            </div>

        </div>


        <div class="info-box">

            <div class="info-icon">
                📄
            </div>

            <div>
                <div class="label">
                    NPM
                </div>

                <div class="value">
                    {{ $npm }}
                </div>
            </div>

        </div>


        <div class="footer">
            Universitas Lampung 2024
        </div>

    </div>

</body>
</html>