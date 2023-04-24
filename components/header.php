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
		height: 100%;
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

		header h1{
		font-size: 20px;
		}
	}
</style>

<body>
<?php
session_start();
    if (!isset($_SESSION["loggedIn"])){
        header("location:index.php");
    }
	?>

	<header>
		<button class="ham-btn"> <img src="img/menu-icon.svg" alt="">
		</button>
		<h1><?php echo $pageTitle ?></h1>
		<img src="img/pngwing.com.png" alt="logo">


	</header>