<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Sistema de Estoque</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo BASE_URL?>assets/css/style.css">
		<link rel="stylesheet" href="<?php echo BASE_URL?>assets/css/alert.css">
		<link rel="stylesheet" href="<?php echo BASE_URL?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.min.js"></script>
		
		
	</head>
	<body>
		<?php if(isset($viewData['menu'])): ?>
		<nav class="navbar navbar-light navbar-expand">
			<div class="container-fluid">
				<div class="navbar-collapse justify-content-center">
					<ul class="nav navbar-nav">
						<?php foreach ($viewData['menu'] as $url => $menutitle):?>
						<li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo $url; ?>"><?php echo $menutitle; ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</nav>
		<?php endif; ?>
		<div class="container">
			<?php
			$this->loadViewInTemplate($viewName, $viewData);
			?>
		</div>

		<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.mask.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/script.js"></script>
	</body>
</html>