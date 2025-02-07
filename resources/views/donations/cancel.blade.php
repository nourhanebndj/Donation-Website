<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Canceled</title>
    <!-- CSS -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #eaf2f7, #116493);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
        }

        .card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
        }

        .video-container {
            height: 180px;
            overflow: hidden;
        }

        video {
            width: 100%;
            border-radius: 15px;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 15px;
            color: #333;
        }

        p {
            font-size: 16px;
            color: #666;
            margin-bottom: 25px;
        }

        .buttons {
            display: flex;
            justify-content: space-around;
        }

        .btn {
            background: #116493;
            color: #fff;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease;
            box-shadow: 0 5px 15px rgba(158, 218, 225, 0.3);
        }

        .btn:hover {
            background: #70B6E2FF;
            transform: translateY(-3px);
        }

        .btn:active {
            transform: translateY(0);
        }
    </style>
    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('mainassets/images/donation.png') }}">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="video-container">
                <video autoplay muted loop>
                    <source src="{{ asset('mainassets/videos/payment_canceled.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <h1>Donation Canceled</h1>
            <p>You have canceled your donation. If this was a mistake, you can try donating again.</p>
            <div class="buttons">
                <form action="{{ route('payment.process') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn donation">Donate Now</button>
                </form>
                <form action="/" method="GET">
                    <button type="submit" class="btn home">Return Home</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
