<?php
echo '<form method="post" action"">';
echo '<input name="from" placeholder="from" type="text" style="width:100px" value="'.filter_var($_POST['from'], FILTER_SANITIZE_NUMBER_INT).'" />';
echo '<input name="to" placeholder="to" type="text" style="width:100px" value="'.filter_var($_POST['to'], FILTER_SANITIZE_NUMBER_INT).'" />';
echo '<input name="_hidden" type="hidden" value="1" />';
echo '<button type="submit">Go !</button>';
echo '</form>';

if (isset($_POST['_hidden']) && (filter_var($_POST['_hidden'], FILTER_SANITIZE_NUMBER_INT) == 1)){
	$from = filter_var($_POST['from'], FILTER_SANITIZE_NUMBER_INT);
	$to = filter_var($_POST['to'], FILTER_SANITIZE_NUMBER_INT);

	if (!empty($from) && !empty($to)) {
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
}
?>