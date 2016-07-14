<!DOCTYPE html>

<?php require('date.php'); ?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
		<title>Calendrier</title>

		<!-- Bootstrap core CSS -->
    	<link href="app.css" rel="stylesheet">

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

		<script src="mesFunc.js" type="text/javascript">
		
		</script>

		<!-- Mon CSS -->
		<style type="text/css">
		table{
			margin: auto;
			text-align: center;
		}
		#week {
			margin: auto;
			text-align: center;
		}

		</style>

	</head>
	<script type="text/javascript">
	showw('0'); showba('0');
	hidew('1'); hideba('1'); hidebr('1');
	hidew('2'); hidebr('2');
	</script>
	<body>

		<div class="period">


			<!-- La semaine actuelle --> 
			<table class="week" id="w0" margin: auto>

				<!-- Les boutons -->
				<button style="float: right" onclick="showw('1'); hidew('0');showbr('1'); showba('1'); hideba('0');" id="ba0">Avancer</button>

				<tr>
					<?php $d = 0  ?> 
					<?php while($d < 7):?>
						<th>
							<?php echo dateDuJour(dernierLundi() + $d); ?>
						</th>
					<?php $d++; ?>
					<?php endwhile; ?>
				</tr>
				
				<?php $h = 1  ?> 
				<?php while($h < 25):?>
					<tr>
						<?php $d = 0  ?> 
						<?php while($d < 7):?>
							<td>
								<?php echo $h.'h'; ?>
							</td>
						<?php $d++; ?>
						<?php endwhile; ?>
					</tr>
				<?php $h++; ?>
				<?php endwhile; ?>
			</table>

			<!-- La  premiere semaine suivante --> 
			<table class="week" id="w1" style="display : none" margin: auto>
				<!-- Les boutons -->
				<div class="boutons">
					<button style="float: left" onclick="hidew('1');hideba('0');hideba('1');hidebr('1');showba('0');showw('0');" id="br1" style="display : none">Reculer</button>
					<button style="float : right" onclick="hidew('1');hideba('1');hidebr('1');showbr('2');showw('2');" id="ba1" style="display : none">Avancer</button>
				</div>

				<tr>
					<?php $d = 0  ?> 
					<?php while($d < 7):?>
						<th>
							<?php echo dateDuJour(prochainLundi() + $d); ?>
						</th>
					<?php $d++; ?>
					<?php endwhile; ?>
				</tr>
				
				<?php $h = 1  ?> 
				<?php while($h < 25):?>
					<tr>
						<?php $d = 0  ?> 
						<?php while($d < 7):?>
							<td>
								<?php echo $h.'h'; ?>
							</td>
						<?php $d++; ?>
						<?php endwhile; ?>
					</tr>
				<?php $h++; ?>
				<?php endwhile; ?>
			</table>

			<!-- La  deuxieme semaine suivante --> 
			<table class="week" id="w2" style="display : none" margin: auto>
				<!-- Les boutons -->
				<button style="float: left" onclick="showw('1'); hidew('2');showbr('1'); showba('1'); hidebr('2')" id="br2" style="display : none">Reculer</button>

				<tr>
					<?php $d = 0  ?> 
					<?php while($d < 7):?>
						<th>
							<?php echo dateDuJour(prochainLundi() + 7 + $d); ?>
						</th>
					<?php $d++; ?>
					<?php endwhile; ?>
				</tr>
				
				<?php $h = 1  ?> 
				<?php while($h < 25):?>
					<tr>
						<?php $d = 0  ?> 
						<?php while($d < 7):?>
							<td>
								<?php echo $h.'h'; ?>
							</td>
						<?php $d++; ?>
						<?php endwhile; ?>
					</tr>
				<?php $h++; ?>
				<?php endwhile; ?>
			</table>
			
		</div>




	</body>
</html>