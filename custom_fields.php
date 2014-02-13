<?php 

$lieu = get_post_meta(get_the_ID(), 'wpcf-lieu', true);
$musiciens = get_post_meta(get_the_ID(), 'wpcf-musiciens', true);
$beneficiaire = get_post_meta(get_the_ID(), 'wpcf-beneficiaire', true);
$recette = get_post_meta(get_the_ID(), 'wpcf-recette', true);
$lat = get_post_meta(get_the_ID(), 'lat', true);
$lng = get_post_meta(get_the_ID(), 'lng', true);

?>
<div class = "meta">

	<?php if(!empty($lieu)){
		if(!empty($recette)){ 
			if(!empty($musiciens)){ 
				if(!empty($beneficiaire)){
					if(!empty($lat)){
						if(!empty($lng)){
							$output = sprintf(" %s <br /> %s <br /> %s <br /> %s <br /> %s <br /> %s", $lieu, $musiciens, $beneficiaire, $recette, $lat, $lng); 
						}
						else{
							$output = sprintf(" %s <br /> %s <br /> %s <br /> %s <br /> %s", $lieu, $musiciens, $beneficiaire, $recette, $lat); 

						}
					}
					else{
						$output = sprintf(" %s <br /> %s <br /> %s <br /> %s", $lieu, $musiciens, $beneficiaire, $recette); 
					}

				}
				else{
					$output = sprintf(" %s <br /> %s <br /> %s ", $lieu, $musiciens, $recette); 
				}
			}
			else{
				$output = sprintf(" %s <br /> %s ", $lieu, $recette); 
			}
		}
		else{					
			$output = sprintf(" %s ", $lieu);
		} 
	}
	else{
		$output = "aucunes information";
	}

	?>

		<span><?php echo $output; ?></span>
	
</div>
