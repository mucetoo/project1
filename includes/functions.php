<?php
function input_type($p1, $p2, $id, $typ, $nam, $val, $tex){
	echo $p1;
	echo "<label for=".$id.">".$tex."</label>";
	echo "<input id=".$id." type=".$typ." name=".$nam." value=".$val.">";
	echo $p2;
}

function input_text($par1, $par2, $teext, $add) {
		echo $teext;
		echo $par1;
        echo '<textarea type="message">'.$add."</textarea>";
        echo $par2;
}
/*function links($link){

echo "<p><a href='http://".$link."'>".$link."</a></p>";
}*/