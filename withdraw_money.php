<?php
if($_POST['amountRequested']) {
	$amountRequested = $_POST['amountRequested'];

	// Notes available.
	// This system allows note of 5, keeping the order of highest to lowest.
	$notesAvailable = array(100, 50, 20, 10);

	// Lowest note.
	$lowestNote = end($notesAvailable);
	reset($notesAvailable);

	// Amount pending to withdraw.
	$withdrawPending = $amountRequested;

	if($amountRequested > 0)
	{
		if($amountRequested % $lowestNote == 0)
		{
			foreach($notesAvailable as $note)
			{		
				if($withdrawPending >= $note)
				{
					while($withdrawPending >= $note)
					{
						// Debiting.
						$withdrawPending = $withdrawPending - $note;
						
						// Adding to withdraw list.
						$withdraw[$note] += 1;
					}
				}
			}
		}
		else
		{
			$error = "Este valor não é compatível com as notas disponíveis no momento.";
		}
	}
	else
	{
		$error = "Valor inválido.";
	}
}
else
{
	$error = "Valor inválido.";
}
?>

<?php
if(!isset($error))
{
?>
	<table class="table table-striped table-bordered">
		<tr class="active">
			<td><b>Nota</b></td>
			<td><b>Quantidade</b></td>
		</tr>

		<?php
		foreach($withdraw as $note => $quantity)
		{
		?>
			<tr>
				<td><?php echo $note; ?></td>
				<td><?php echo $quantity; ?></td>
			</tr>
		<?php
		}
		?>
	</table>
<?php
}
else
{
?>
	<p id="error"><?php echo $error; ?></p>
<?php
}
?>