

<?php echo validation_errors(); ?>

<?php echo form_open('shows/create'); ?>
<fieldset>
	<h3><?php echo $title ?></h3>
	<label for="name">Názov</label>
	<input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Vložte nazov diela"">
	<small id="firstnameHelp" class="form-text text-muted">Maximalne 30 znakov</small>
	<div class="row">
		<div class="col-sm-6 col-form-label form-group">
			<label for="type">Typ</label>
			<input type="text" class="form-control" name="type" aria-describedby="emailHelp" placeholder="Vložte typ diela"">
			<small id="firstnameHelp" class="form-text text-muted">Maximalne 30 znakov</small>
		</div>
		<div class="col-sm-6 col-form-label form-group">
			<label for="genre">Žáner</label>
			<input type="text" class="form-control" name="genre" aria-describedby="emailHelp" placeholder="Vložte žaner diela"">
			<small id="firstnameHelp" class="form-text text-muted">Maximalne 30 znakov</small>
		</div>
	</div>
	<label for="text">Učinkujúci</label>
	<textarea type="text" class="form-control" name="text" aria-describedby="emailHelp" placeholder="Vložte učinkujúcich""></textarea>
	<small id="firstnameHelp" class="form-text text-muted">Maximalne 250 znakov</small>
	<button type="submit" style="margin-top: 20px" class="btn btn-primary btn-lg btn-block">Potvrdiť</button>
</fieldset>
</form>
