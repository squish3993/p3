<form method='Get' class='form-inline text-center'>
	<div class="form-group">
		<div class="lineOne">
			<label for="note">Enter your first note (required):</label>
			<input type="text" class="form-control" name='note' id='note' placeholder="C, F, G, Etc">

			<select name='accidental' id='accidental' class="form-control">
				<option value='natural' >Natural</option>
				<option value='sharp' ># (Sharp)</option>
				<option value='flat' >b (Flat)</option>
			</select>
			<br>
		</div>
		
		<div class="lineTwo">
			<label for='noteTwo'>Enter your second note (required):</label>
			<input type='text' class="form-control" name='noteTwo' id='noteTwo' placeholder="C, F, G, Etc">

			<select name='accidentalTwo' id='accidentalTwo' class="form-control">
				<option value='natural' >Natural</option>
				<option value='sharp' ># (Sharp)</option>
				<option value='flat' >b (Flat)</option>
			</select>
			<br>
		</div>

		<div class="lineThree">
			<input type='checkbox' name='octave' id='octave'>
			<label for='octave'>Add an Octave</label>
			<br>
		</div>

		<input type='submit' class='btn btn-primary' value="Find Interval">
	</div>
</form>