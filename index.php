<?php
/**
 * Plugin Name: Dummy HTML Form for Theme Developers
 * Description: Outputs a dummy form containing common elements so theme developers can style them.
 * Version: 1.0
 * Author: John Parris
 * Author URI: https://www.johnparris.com
 */
function jp_dummy_form( $atts, $content = null ) {
	?>

	<div class="dummy-form-wrap">
		<form action="#">
			<fieldset>
				<p class="field-wrap">
					<legend>Legend</legend>
				</p>

				<p class="field-wrap">
					<label for="optional-text">Optional Text input:</label>
					<input type="text" id="optional-text" value="input text" />
				</p>

				<p class="field-wrap">
					<label for="required-text">Required Text input:</label>
					<input type="text" id="required-text" required />
				</p>

				<p class="field-wrap">
					<label for="twp">Text input with pattern requirement and placeholder:</label>
					<input type="text" id="twp" pattern="\d{5}(-\d{4})?" title="a US Zip code, with or without the +4 exension" placeholder="12345-6789"/>
				</p>

				<p class="field-wrap">
					<label for="search">Search input:</label>
					<input type="search" id="search" />
				</p>

				<p class="field-wrap">
					<label for="email">Email input:</label>
					<input type="email" id="email" />
				</p>

				<p class="field-wrap">
					<label for="url">URL input:</label>
					<input type="url" id="url" />
				</p>

				<p class="field-wrap">
					<label for="password">Password input:</label>
					<input type="password" id="password" value="password" />
				</p>

				<p class="field-wrap">
					<label>Radio input:</label>
					<input type="radio" id="radio1" name="radio" value="option1" />
					<label for="radio1">Option 1</label>
					<input type="radio" id="radio2" name="radio" value="option2" />
					<label for="radio2">Option 2</label>
				</p>

				<p class="field-wrap">
					<label for="checkbox">Checkbox input:</label>
					<input type="checkbox" id="checkbox" />
				</p>

				<p class="field-wrap">
					<label for="multi-checkbox">Multiple checkbox:</label>
					<input type="checkbox" id="multi-checkbox1" name="multi-checkbox[]" value="option1">
					<label for="multi-checkbox1">Option 1</label>
					<input type="checkbox" id="multi-checkbox2" name="multi-checkbox[]" value="option2">
					<label for="multi-checkbox1">Option 2</label>
					<input type="checkbox" id="multi-checkbox3" name="multi-checkbox[]" value="option3">
					<label for="multi-checkbox1">Option 3</label>
				</p>

				<p class="field-wrap">
					<label for="select">Select field:</label>
					<select id="select">
						<option>Option 1</option>
						<option>Option 2</option>
					</select>
				</p>

				<p class="field-wrap">
					<label for="textarea">Textarea:</label>
					<textarea id="textarea" cols="30" rows="5">Textarea text</textarea>
				</p>

				<p class="field-wrap">
					<label for="color">Color:</label>
					<input type="color" name="color">
				</p>

				<p class="field-wrap">
					<label for="file">File:</label>
					<input type="file" name="file" id="file" required="required">
				</p>

				<p class="field-wrap">
					<label for="number">Number:</label>
					<input type="number" name="number" id="number" required="required">
				</p>

				<p class="field-wrap">
					<label for="date">Date:</label>
					<input type="date" name="date">
				</p>

				<p class="field-wrap">
					<label for="datetime">Date & Time:</label>
					<input type="datetime" name="datetime">
				</p>

				<p class="field-wrap">
					<label for="datetime-local">Local Date & Time:</label>
					<input type="datetime-local" name="datetime-local">
				</p>

				<p class="field-wrap">
					<label for="month">Month:</label>
					<input type="month" name="month">
				</p>

				<p class="field-wrap">
					<label for="range">Range:</label>
					<input type="range" id="range" name="range">
					<output for="range" id="output"></output>
				</p>

				<p class="field-wrap">
					<label for="time">Time:</label>
					<input type="time" name="time">
				</p>

				<p class="field-wrap">
					<label for="week">Week:</label>
					<input type="week" name="week">
				</p>

				<p class="field-wrap">
					<label for="phone">Phone input:</label>
					<input id="phone" name="phone" type="tel" placeholder="e.g. 8005551212" required>
				</p>

				<p class="field-wrap">
					<label for="button1">Button:</label>
					<input type="button" id="button1" value="Button Text" />
				</p>

				<p class="field-wrap">
					<label for="submit-button">Submit:</label>
					<input type="submit" id="submit-button" value="Button Text" />
				</p>
			</fieldset>
		</form>
	</div>

	<?php
}
add_shortcode( 'dummy_form', 'jp_dummy_form' );