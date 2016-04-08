 <?php
 function init_portofolio($chemin, $extension, $gallery_name, $legend, $debut, $fin){
	$i=$debut;
	while($i<$fin+1){
		echo('<div data-toggle="lightbox" data-gallery="'.$gallery_name.'" data-remote="'.$chemin.$i.'.'.$extension.'" data-title="'.$legend.'"></div> ');
		$i++;
	} 
}

function init_portofolio_legend($chemin, $gallery_name, $legend)
{
	$nb_fichier = 0;
	if($dossier = opendir($chemin))
	{
		while(false !== ($fichier = readdir($dossier)))
		{
			if($fichier != '.' && $fichier != '..'){
			echo('<div data-toggle="lightbox" data-gallery="'.$gallery_name.'" data-remote="'.$chemin.$fichier.'" data-title="'.$legend."<br></br><i> ".substr($fichier,0,-4).'</i>"></div> ');
			$nb_fichier++; // On incrémente le compteur de 1
			}
		}
	}
}
 ?>