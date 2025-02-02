<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramailo Foods</title>
</head>
<body>
    <header class="header-container">
        <div class="header-wrapper">
        <div class="logo">
            <span>Ramailo Foods</span>
        </div>
        <!-- <nav>
            <ul class="nav-container">
                <li class="nav-items"><a href="#">Home</a></li>
                <li class="nav-items"><a href="#">Contact us</a></li>
                <li class="nav-items"><a href="#">About us</a></li>
            </ul>
        </nav> -->
			<button class="login-btn">Login</button>
            </div>
    </header>

 

		<main class="main">
			<section>
            <?php include('productCard.php'); ?>
			</section>
		</main>
        <?php include('footer.php'); ?>
    <script src="script.js"></script>
</body>
</html>