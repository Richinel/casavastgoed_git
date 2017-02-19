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
				<?php
				    include("controllers/dbconnect.php");
				    $start      = 0;
				    $limit      = 9;
				     
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
				            <div class='col col-4'>				        
								<div class='offer'>
									<div class='info'>
										<img src='assets/images/".$result['afbeelding']."'>
											<h4>".$result['adres'].", ".$result['stad']."</h4>

											<span class='label outline ".$result['labelstatus']."'>".$result['status']."</span>

											Kamers: ".$result['kamers']."

											<p class='price'>
												&euro; ".$result['prijs']."
											</p>

											<a href='house_offer.php?id=" . $result['id'] . "'>
												<div class='btn-sm-o'>											
													Meer info
												</div>
											</a>
									</div>
								</div>
							</div>
				        ";

				    }
				?>
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