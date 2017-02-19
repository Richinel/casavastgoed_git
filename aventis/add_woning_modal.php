<div class="modal add_woning_modal">
	<div class="modal_window">
		<form action='controllers/add_woning_controller.php' method='post' class='add_form'>
		<h3 class='admin'>Bestuurslid toevoegen</h3>
		<i class='fa fa-times close3' aria-hidden='true'></i>

			<div class="form-item">
		        <label><b>adres</b></label><br>
		        <input type="text" name="adres" required>
		    </div>

		    <div class="form-item">
		        <label><b>stad</b></label><br>
		        <input type="text" name="stad" required>
		    </div>

		    <div class="form-item">
		        <label><b>type</b></label><br>
		        <input type="text" name="type" required>
		    </div>

		    <div class="form-item">
		        <label><b>betaalwijze</b></label><br>
		        <input type="text" name="betaalwijze">
		    </div>

		    <div class="form-item">
		        <label><b>prijs</b></label><br>
		        <input type="text" name="prijs">
		    </div>

		    <div class="form-item">
		        <label><b>status</b></label><br>
		        <input type="text" name="status" required>
		    </div>

		    <div class="form-item">
		        <label><b>labelstatus</b></label><br>
		        <input type="text" name="labelstatus" required>
		    </div>

		    <div class="form-item">
		        <label><b>kamers</b></label><br>
		        <input type="text" name="kamers" required>
		    </div>

		    <div class="form-item">
		        <label><b>afbeelding</b></label><br>
		        <input type="text" name="afbeelding">
		    </div>

		    <div class="form-item">
		    	<label><b>Beschrijving</b></label>
		        <textarea class='ti_edit' name='beschrijving'></textarea>
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