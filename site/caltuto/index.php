<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
		<title>Calendrier</title>
		<?php require('date.php'); ?>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

		<script type="text/javascript">
			jQuery(function($){
				$('.month').hide();//cache tous les tableaux 'months'
				$('.month:first').show();
				$('.months a:first').addClass('active');


				var current = 1;
				$('.months a').click(function()){
					var month = $(this).



























					;
					<?php echo 'test' ?>;

					if(month != current){
						$('#month'+current).slideUp();
						$('#month'+month).slideDown();
						$('.months a').removeClass('active');
						$('.months a#linkMonth'+month).addClass('active');
						current = month;
					}
					return false;
				});
			});

			
		</script>

	</head>
	<body>
		<?php 

		
		$date = new Date();
		$year = date('Y');
		$dates = $date->getAll($year);

		?>

		<button onclick="show_hide('divID')">Click here</button>

		<div  class="period">

			<div class="year">
				<?php echo $year; ?>
			</div>


			<div class="months">
				<ul>
					<?php foreach ($date->months as $id=>$m): ?>
						<li>
							<a href="#" id="linkMonth<?php echo $id+1; ?>"> 
								<?php echo $m; //fonction substring pour les 3 premières lettre seulement?>
							</a>
						</li>
					<?php endforeach; ?>	
				</ul>
			</div>


			<?php $dates = current($dates); ?>

			<?php foreach ($dates as $m=>$days): ?>
				<div class="month" id="month<?php echo $m; ?>">
					<table>


						<thead>
							<tr>
								<?php foreach ($date->days as $d): ?>
									<th>
										<?php echo substr($d,0,3); ?>
									</th>
								<?php endforeach; ?>
							</tr>
						</thead>


						<tbody>
							<tr>
								<?php $end = end($days); foreach($days as $d=>$w): ?>
									<?php if($d == 1 AND $w != 1): //condition pour rajouter des cellules vides en début de mois?>
										<td colspan="<?php echo ($w - 1); ?>"></td>
									<?php endif; ?>
									<td>
										<?php echo $d //donne le jour de la semaine?>
									</td>
									<?php if($w == 7): ?>
										<tr></tr>
									<?php endif; ?>
								<?php endforeach; ?>
								<?php if($end !=7): //condition pour rajouter des cellules vides en fin de mois?>
									<td colspan="<?php echo (7- $end); ?>"></td>
								<?php endif; ?>
							</tr>
						</tbody>


					</table>
				</div>
			<?php endforeach; ?>
		</div>

		<pre><?php print_r($dates); ?></pre>

	</body>
</html>