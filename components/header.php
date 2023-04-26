<style>
	header {
		width: 100%;
		justify-content: space-between;
		display: flex;
		height: 10vh;
		align-items: center;
		padding: 0 50px;
		background-color: #f3bc77;
	}

	header img {
		display: block;
		height: 100%;
		width: 80px;
		padding: 5px 0;
	}



	.ham-btn,
	.ham-btn img {
		/* display: none; */
		background-color: #ffffff00;
		border: none;

	}

	.ham-btn img {
		display: block;
		width: 21px;
	}


	@media screen and (max-width: 600px) {
		.ham-btn {
			display: block;
			background-color: #ffffff00;
			border: none;
		}

		.ham-btn img {
			display: block;
			width: 21px;
		}

		header h1 {
			font-size: 20px;
		}

		header img {
			display: block;
			height: 100%;
			width: 60px;
			padding: 5px 0;
		}
	}
</style>

<body>
	<?php
	session_start();
	if (!isset($_SESSION["loggedIn"])) {
		header("location:index.php");
	}
	?>

	<header>
		<button class="ham-btn"> <img src="img/menu-icon.svg" alt="">
		</button>
		<h1><?php echo $pageTitle ?></h1>
		<a href="index.php"><img src="img/pngwing.com.png" alt="logo"></a>



	</header>