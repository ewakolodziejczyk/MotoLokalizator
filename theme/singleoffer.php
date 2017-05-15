<?php

$id_get = $_GET['id'];

	if ( (int) $id_get){
		
		$db_array = array (HOST, DBNAME, USER, PASS, TABLE1);
		$baza = new DB_actions($db_array);
		$offers = $baza->db_select($id_get);
		
		
		foreach ($offers as $row){
			$data = $row['data'];
			$nazwa = $row['nazwa'];
			$gps = $row['gps'];
			$rejestracja = $row['rejestracja'];
			$cena = $row['cena'];
			$rocznik = $row['rocznik'];
			$opis = $row['opis'];
		}
		
		if ( file_exists ('images/'.$id_get.'.jpg')){
			
			$path_image = 'images/'.$id_get.'.jpg';
		}
		else if (file_exists ('images/'.$id_get.'.gif')){
			$path_image = 'images/'.$id_get.'.gif';
		}
		else if (file_exists ('images/'.$id_get.'.png')){
			$path_image = 'images/'.$id_get.'.png';
		}
		else {
			$path_image = 'images/image_not_exist.jpg';
		}
	}



?>	<div id="single-offer">
		<section>
        	<header>
				<div id="date-offer"><p><?php echo $data; ?></p></div>
                <h2><?php echo $nazwa;?></h2>
            </header>
            <section>
				<div id="image-container"><img src="<?php echo $path_image;?>" alt="<?php echo $nazwa;?>" /></div>
                <div id="description-single-offer">
                	<div class="description-single-offer">
                    	<p>GPS: <b><?php echo $gps;?> </b></p>
                    </div>
                    <div class="description-single-offer">
                    	<p>ROK PRODUKCJI: <b><?php echo $rocznik;?> </b></p>
                    </div>
                    <div class="description-single-offer">
                    	<p>NR TABLIC: <span><b><?php echo $rejestracja;?></b></span></p>
                    </div>
                    <div class="description-single-offer">
                    	<p id="price-single-offer">CENA: <span><b><?php echo $cena;?> PLN</b></span></p>
                    </div>
                     <div class="description-single-offer">
                    	<p>OPIS:</p>
                        <p id="desc-single-offer"><?php echo $opis;?></p>
                    </div>
                
                </div>
            </section>
        </section>
      </div>