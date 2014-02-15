<?php
echo '<form method="post" action"">';
echo '<input name="from" placeholder="from" type="text" style="width:100px" />';
echo '<input name="to" placeholder="to" type="text" style="width:100px" />';
echo '<input name="_hidden" type="hidden" value="1" />';
echo '<button type="submit">Go !</button>';
echo '</form>';

if (isset($_POST['_hidden']) && ($_POST['_hidden'] == 1)){
	$from = $_POST['from'];
	$to = $_POST['to'];
	for($i=$from;$i<=$to;$i++){

		if ($i%3 == 0) {
			print 'Fizz';
		}elseif ($i%5 == 0){
			print 'Buzz';
		}else{
			print $i;
		}
		print ' ';

	}
}
?>