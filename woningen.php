<?php
	$title= "Woningen"; 
	include('includes/header.php');
?>

	<div class="content offers">
	
		<div class="banner" style="background: url('assets/images/home1.jpg'); background-size: cover;">
			<div class="container">
				<div class="wrapper">
					<h2>Woningen</h2>
					<p>
						Hieronder ziet u ons aanbod. Ziet u iets leuks, of wilt u een persoonlijk aanbod? Neem dan contact met ons op via het contactformulier.
					</p>
				</div>
			</div>
		</div>

		<div class="wrapper">
			<div class="row blocks equal">
				<div class="row">
					<!-- <div class="col col-2">
						<h2>Filter</h2>
							<div id="filters" class="button-group">  <button class="button is-checked" data-filter="*">show all</button>
								<button class="button" data-filter=".rotterdam">Rotterdam</button>
							 	<button class="button" data-filter=".transition">transition</button>
							  	<button class="button" data-filter=".alkali, .alkaline-earth">alkali and
							</div>
					</div> -->

<!-- 					<div class="col col-10">
						<div class="row"> -->
							<?php
							    include("controllers/dbconnect.php");
							    $start      = 0;
							    $limit      = 6;
							     
							    if(isset($_GET['id']))
							    {
							        $id     = $_GET['id'];
							        $start  = ($id - 1 ) * $limit;
							    }
							    else{
							        $id     = 1;
							    }
							    //Fetch from database first 10 items which is its limit. For that when page open you can see first 10 items. 
							    $query          = mysqli_query($conn,"SELECT * FROM aanbod LIMIT $start, $limit");

							    while($result = mysqli_fetch_array($query))
							    {
							       

							        echo 
							        "
							            <div class='col col-12'>
							            	<div class='container-offers'>
							            	<table class='flat'>
								            		<tr>
								            			<td class='td'>
								            				<img src='assets/images/" . $result['afbeelding'] . "' />
								            			</td>
								            			<td class='offer_content'>
								            				<h4 class='locatie'> " . $result['adres'] . "</h4>
								            				<h4 class='price'> &euro;" . $result['prijs'] . " </h4>

								            				<small class='type'>" . $result['stad'] . "</small>
								            				<p class='p'>
								            					" . substr($result['beschrijving'], 0, 120)  . "...
								            				</p>

								            				<a href='house_offer.php?id=" . $result['id'] . "'>
												            	<div class='btn-sm'>
												            		Meer informatie
												            	</div>
												            </a>
								            			</td>
								            		</tr>
								            	</table>
							            	</div>
							            </div>
							        ";

							    }
							?>
						</div>
					</div>
				</div>
			</div>

			<nav class="pagination centered">
			    <ul>
			        <?php

			            //fetch all the data from database.
			            $rows       = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM aanbod"));
			            //calculate total page number for the given table in the database 
			            $total      = ceil( $rows / $limit );
			            if( $id > 1 )
			            {
			                //Go to previous page to show previous 10 items. If its in page 1 then it is inactive
			                echo "
			                    
			                    <li class='prev'>
			                        <a href='?id=".($id-1)."' class='prev'>
			                            &larr;
			                        </a>
			                    </li>";
			            }

			            for( $i = 1; $i <= $total; $i++ )
			            {
			                if( $i == $id ) { echo "<li class='current'>".$i."</li>"; }
			                 
			                else { echo "<li><a href='?id=". $i ."'>". $i ."</a></li>"; }
			            }


			            if( $id != $total )
			            {
			                ////Go to previous page to show next 10 items.
			                echo "
			                    <li class='next'>
			                        <a href='?id=".( $id + 1 )."' class='next'>
			                             &rarr;
			                        </a>
			                    </li>
			                    ";

			            }

			        //show all the page link with page number. When click on these numbers go to particular page. 
			            $conn->close();
			    ?>
			    </ul>
			</nav>

		</div>
	</div>

<?php include('includes/footer.php'); ?>
