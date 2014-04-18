<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Filter on the table plugin</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fott.css">
</head>
<body>
	<div class="row text-center">
		<div class="col-sm-6 col-sm-offset-3">
			<h3> Oi! :)</h3>
		</div>
	</div>

<?php

$vowels = array("a", "e", "o", "u");
$consonants = array("b", "c", "d", "v", "g", "t", "h", "x", "r", "j", "f");

function randVowel()
{
  global $vowels;
  return $vowels[array_rand($vowels, 1)];
}

function randConsonant()
{
  global $consonants;
  return $consonants[array_rand($consonants, 1)];
}

function makeName($times){
	$word = "";
	for ($i=0; $i < $times; $i++) { 
		if ($i % 2 == 0)
			$word .= randConsonant();
		else
			$word .= randVowel();
	}
	return $word;
}


?>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th class="filterid">ID</th>
                        <th class="filtername">Nome</th>
                    </tr>
                </thead>
                <tbody>
                	<?php for ($i=1; $i < 300; $i++): ?>
	                	<tr>
	                        <td class="account-id"><a class="sort-value" href="user/<?php echo $i; ?>" target="_blank"><?php echo $i; ?></a></td>
	                        <td class="account-name sort-value"><?php echo ucfirst(makeName(15)); ?></a></td>
	                    </tr>
                	<?php endfor; ?>
                </tbody>
            </table>
		</div>
	</div>
	
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script src="js/jquery.fott.js"></script>
	<script>
		$('.filterid').fott({fieldFilter: 'account-id'});
		$('.filtername').fott({fieldFilter: 'account-name'});
	</script>
</body>
</html>