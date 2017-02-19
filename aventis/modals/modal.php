<div class="modal add_event_modal">
	<div class="modal_window">
		<form action='../controllers/add_event.php' method='post' class='add_form'>
		<h3 class='admin'>Evenement toevoegen</h3>
		<i class='fa fa-times close3' aria-hidden='true'></i>

			<div class="form-item">
		        <label><b>Titel</b></label><br>
		        <input type="text" name="titel" required>
		    </div>

		    <div class="form-item">
		        <label><b>Datum</b></label><br>
		        <input type="date" name="datum" required>
		    </div>

		    <div class="form-item">
		        <label><b>Stad</b></label><br>
		        <input type="text" name="stad" required>
		    </div>

		    <div class="form-item">
		        <label><b>Type</b></label><br>
		        <input type="text" name="type" required>
		    </div>

		    <div class="form-item">
		        <label><b>Omschrijving</b></label><br>
		        <textarea name="omschrijving" class='ti_edit'></textarea>
		    </div>

		    <div class="form-item">
		    	<div class="row">
		    		<div class="col">
		    			<input type="submit" class='btn1' name="submit" value='Voeg toe'>
		    		</div>
		    		<div class="col">
		    			<input type="reset" class='btn1' name="submit" value='Reset'>    			
		    		</div>
		    	</div>	        
		    </div>
		</form>
	</div>
</div>