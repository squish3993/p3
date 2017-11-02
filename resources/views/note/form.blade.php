<form method='GET' class='form-inline text-center' action='/'>

	<div class='form-group'>
		<div class='lineOne'>
			<label for='note'>Enter your first note (required):</label>
			<input type='text' class='form-control' name='note' id='note' placeholder='C, F, G, Etc' value= '{{ old('note') }}'>

			<select name='accidental' id='accidental' class="form-control">
				<option value='natural' {{ (old('accidental', $accidental ?? '') == 'natural') ? 'selected' : '' }}>Natural</option>
				<option value='sharp' {{ (old('accidental', $accidental ?? '') == 'sharp') ? 'selected' : '' }}># (Sharp)</option>
				<option value='flat' {{ (old('accidental', $accidental ?? '') == 'flat') ? 'selected' : '' }}>b (Flat)</option>
			</select>
			<br>
		</div>
		
		<div class='lineTwo'>
			<label for='noteTwo'>Enter your second note (required):</label>
			<input type='text' class='form-control' name='noteTwo' id='noteTwo' placeholder='C, F, G, Etc' value= '{{ old('noteTwo') }}'>

			<select name='accidentalTwo' id='accidentalTwo' class='form-control'>
				<option value='natural' {{ (old('accidentalTwo', $accidentalTwo ?? '') == 'natural') ? 'selected' : '' }}>Natural</option>
				<option value='sharp' {{ (old('accidentalTwo', $accidentalTwo ?? '') == 'sharp') ? 'selected' : '' }}># (Sharp)</option>
				<option value='flat' {{ (old('accidentalTwo', $accidentalTwo ?? '') == 'flat') ? 'selected' : '' }}>b (Flat)</option>
			</select>
			<br>
		</div>

		<div class='lineThree'>
			<input type='checkbox' name='octave' id='octave'>
			<label for='octave'>Add an Octave</label>
			<br>
		</div>

		<input type='submit' class='btn btn-primary' value='Find Interval'>
	</div>
</form>