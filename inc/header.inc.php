<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Thong-Nguyen Portfolio</title>

    <style>
        :root {
            --primary-blue: #1f3b73;
            --light-blue: #d7e3ff;
        }

        body {
            background-color: #f8f9fa;
            font-family: "Segoe UI", sans-serif;
        }

        header {
            padding: 80px 0;
            background: linear-gradient(
                rgba(31, 59, 115, 0.75),
                rgba(31, 59, 115, 0.75)
            ),
            url('<?php echo $headerImg ?? "" ?>');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
        }

        .profile-pic {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border: 5px solid #ffffff;
            box-shadow: 0 0 12px rgba(0,0,0,0.25);
        }

        .contact-box {
            background: white;
            border-radius: 12px;
            padding: 15px;
            box-shadow: 0 0 12px rgba(0,0,0,0.05);
        }

        /* Decorative styles for name and title */
        header h1.bg-white {
            display: inline-block;
            background: linear-gradient(90deg, rgba(255,255,255,0.98), rgba(245,249,255,0.9));
            color: var(--primary-blue);
            padding: 12px 22px;
            border-radius: 14px;
            border: 2px solid rgba(255,255,255,0.65);
            box-shadow: 0 10px 20px rgba(31,59,115,0.18);
            backdrop-filter: blur(4px);
            font-size: 2.25rem;
            line-height: 1;
        }

        header h3.bg-white {
            display: inline-block;
            background: rgba(255,255,255,0.92);
            color: #12315a;
            padding: 8px 16px;
            border-radius: 10px;
            border-left: 4px solid var(--light-blue);
            box-shadow: 0 6px 14px rgba(0,0,0,0.12);
            margin-top: 8px;
            font-size: 1.125rem;
        }
    </style>
</head>

<body>

<header class="d-flex flex-column align-items-center justify-content-center">
    <img 
      src="<?php echo $profImg ?? '' ?>" 
      alt="Profile" 
      class="profile-pic rounded-circle mb-4"
    >

    <h1 class="fw-bold bg-white">Thong Nguyen</h1>
    <h3 class="mb-4 bg-white text-dark">Information Technology Engineer</h3>

    <div class="container contact-box mt-3">
        <div class="row text-center gy-5 text-dark">
            <div class="col-md-2"><i class="fa fa-linkedin-square"></i> linkedin.com/in/thong-nguyenminh</div>
            <div class="col-md-2"><i class="fa fa-github"></i> github.com/thongnm91</div>
            <div class="col-md-3"><i class="fa fa-globe"></i> https://thongnm91.github.io/</div>
            <div class="col-md-2"><i class="fa fa-phone"></i> (+358) 417 213 640</div>
            <div class="col-md-3"><i class="fa fa-envelope"></i> thongnm91@gmail.com</div>            
        </div>
    </div>
</header>

</body>
</html>
