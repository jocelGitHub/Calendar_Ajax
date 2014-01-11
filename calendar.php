<?php
	$months = array(0, 'January', 'February', 'March', 'April','May','June','July', 'August','September','October','November','December');
?>
<html>
<head>
	<title>Calendar</title>
</head>
<body>
	<select id = "years">
		<?php for($i = 2014; $i >=1990; $i--):?>
		<option value = "<?= $i?>"><?= $i?></option>
		<?php endfor?>
	</select>

	<select id = "months">
		<?php for($i = 1; $i <= 12; $i++):?>
		<option value = "<?= $i?>"><?= $months[$i]?></option>
		<?php endfor?>
	</select>

	<select id = "days">
		<?php for($i = 1; $i <= 31; $i++):?>
		<option value = "<?= $i ?>"><?= $i ?></option>
		<?php endfor?>
	</select>

</body>
<script type="text/javascript" src = "jquery.1.10.2.js"></script>
<script type="text/javascript" src = "calendar.js"></script>
</html>