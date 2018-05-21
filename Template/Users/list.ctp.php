<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/dashboard.css">

		<title>Hello, world!</title>
	</head>

	<body>

		<?php include_once(dirname(__FILE__,2).'/elements/header.ctp.php'); ?>

		<div class="container-fluid">
			<div class="row">

				<?php include_once(dirname(__FILE__,2).'/elements/sidebar.ctp.php'); ?>

				<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

					<div class="row">
						<div class="row card-container col-12">
							<?php $names = [
							];
							?>
							<?php for($i = 0; $i < 6; $i++) : ?>
								<?php include(dirname(__FILE__,2).'/extras/card.ctp.php'); ?>
							<?php endfor; ?>
						</div>
					</div>

					<?php //include_once(dirname(__FILE__,2).'/extras/graph.ctp.php'); ?>

					<?php //include_once(dirname(__FILE__,2).'/extras/table.ctp.php'); ?>
				</main>

			</div>
		</div>

		<!-- Icons -->
		<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
		<script>
			feather.replace();
		</script>



	<!-- Optional JavaScript -->

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="/js/jquery-3.3.1.min.js"></script>
	<script src="/js/popper.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/main.js"></script>

	</body>
</html>