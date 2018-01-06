<div class='tab mainTab tab3' style="display: none;">
		<div style="display: block; position: relative;width: 100%; clear: both; ">
			<?php include('help.php'); ?>
			<h2 style="opacity: .8;">Add Countdown Timer</h2><br clear="all"><br>
			<img src="https://cdn0.iconfinder.com/data/icons/woocons1/Calendar.png" style="float: left; margin-right: 10px; margin-top: 0; margin-left: 5px">
			<p  style="opacity: .8;">Increase the scarcity and power of your offer with a countdown. Choose the expirey date and your timezone. You can also change the design style of your countdown.</p>
		</div>		
		<?php salesoptimizer_switch('countdown', $_GET['edit']); ?>
		<div class="input">
			<strong>Date <small>Choose expirey date.</small></strong>
			<input type="text" name="date" id="datepicker" placeholder="" value="<?php echo get_option('date'.'_'.$_GET['edit']); ?>" />
		</div>
		<div class="input">
			<strong>Time <small>Choose end date.</small></strong>
			<select name="time">
					<option value="00:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "00:00" ){ echo "selected"; } ?> >12:00 AM</option>
					<option value="01:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "01:00" ){ echo "selected"; } ?> >1:00 AM</option>
					<option value="02:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "02:00" ){ echo "selected"; } ?> >2:00 AM</option>
					<option value="03:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "03:00" ){ echo "selected"; } ?> >3:00 AM</option>
					<option value="04:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "04:00" ){ echo "selected"; } ?> >4:00 AM</option>
					<option value="05:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "05:00" ){ echo "selected"; } ?> >5:00 AM</option>
					<option value="06:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "06:00" ){ echo "selected"; } ?> >6:00 AM</option>
					<option value="07:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "07:00" ){ echo "selected"; } ?> >7:00 AM</option>
					<option value="08:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "08:00" ){ echo "selected"; } ?> >8:00 AM</option>
					<option value="09:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "09:00" ){ echo "selected"; } ?> >9:00 AM</option>
					<option value="10:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "10:00" ){ echo "selected"; } ?> >10:00 AM</option>
					<option value="11:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "11:00" ){ echo "selected"; } ?> >11:00 AM</option>
					<option value="12:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "12:00" ){ echo "selected"; } ?> >12:00 PM</option>
					<option value="13:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "13:00" ){ echo "selected"; } ?> >1:00 PM</option>
					<option value="14:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "14:00" ){ echo "selected"; } ?> >2:00 PM</option>
					<option value="15:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "15:00" ){ echo "selected"; } ?> >3:00 PM</option>
					<option value="16:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "16:00" ){ echo "selected"; } ?> >4:00 PM</option>
					<option value="17:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "17:00" ){ echo "selected"; } ?> >5:00 PM</option>
					<option value="18:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "18:00" ){ echo "selected"; } ?> >6:00 PM</option>
					<option value="19:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "19:00" ){ echo "selected"; } ?> >7:00 PM</option>
					<option value="20:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "20:00" ){ echo "selected"; } ?> >8:00 PM</option>
					<option value="21:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "21:00" ){ echo "selected"; } ?> >9:00 PM</option>
					<option value="22:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "22:00" ){ echo "selected"; } ?> >10:00 PM</option>
					<option value="23:00" <?php if( get_option('time'.'_'.$_GET['edit']) == "23:00" ){ echo "selected"; } ?> >11:00 PM</option>
				</select>
		</div>
		<div class="input">
			<strong>Timezone <small>Choose your country.</small></strong>
			<select name="timezone" class="timezone">
					  <option value="-5.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '-5.0') { ?> selected <?php } ?>>Eastern Time (US &amp; Canada), Bogota, Lima</option>
				      <option value="-12.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '-12.0') { ?> selected <?php } ?>>Eniwetok, Kwajalein</option>
				      <option value="-11.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '-11.0') { ?> selected <?php } ?>>Midway Island, Samoa</option>
				      <option value="-10.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '-10.0') { ?> selected <?php } ?>>Hawaii</option>
				      <option value="-9.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '-9.0') { ?> selected <?php } ?>>Alaska</option>
				      <option value="-8.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '-8.0') { ?> selected <?php } ?>>Pacific Time (US &amp; Canada)</option>
				      <option value="-7.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '-7.0') { ?> selected <?php } ?>>Mountain Time (US &amp; Canada)</option>
				      <option value="-6.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '-6.0') { ?> selected <?php } ?>>Central Time (US &amp; Canada), Mexico City</option>
				      <option value="-5.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '-5.0') { ?> selected <?php } ?>>Eastern Time (US &amp; Canada), Bogota, Lima</option>
				      <option value="-4.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '-4.0') { ?> selected <?php } ?>>Atlantic Time (Canada), Caracas, La Paz</option>
				      <option value="-3.5" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '-3.5') { ?> selected <?php } ?>>Newfoundland</option>
				      <option value="-3.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '-3.0') { ?> selected <?php } ?>>Brazil, Buenos Aires, Georgetown</option>
				      <option value="-2.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '-2.0') { ?> selected <?php } ?>>Mid-Atlantic</option>
				      <option value="-1.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '-1.0') { ?> selected <?php } ?>>Azores, Cape Verde Islands</option>
				      <option value="0.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '0.0') { ?> selected <?php } ?>>Western Europe Time, London, Lisbon, Casablanca</option>
				      <option value="1.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '1.0') { ?> selected <?php } ?>>Brussels, Copenhagen, Madrid, Paris</option>
				      <option value="2.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '2.0') { ?> selected <?php } ?>>Kaliningrad, South Africa</option>
				      <option value="3.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '3.0') { ?> selected <?php } ?>>Baghdad, Riyadh, Moscow, St. Petersburg</option>
				      <option value="3.5" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '3.5') { ?> selected <?php } ?>>Tehran</option>
				      <option value="4.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '4.0') { ?> selected <?php } ?>>Abu Dhabi, Muscat, Baku, Tbilisi</option>
				      <option value="4.5" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '4.5') { ?> selected <?php } ?>>Kabul</option>
				      <option value="5.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '5.0') { ?> selected <?php } ?>>Ekaterinburg, Islamabad, Karachi, Tashkent</option>
				      <option value="5.5" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '5.5') { ?> selected <?php } ?>>Bombay, Calcutta, Madras, New Delhi</option>
				      <option value="5.75" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '5.75') { ?> selected <?php } ?>>Kathmandu</option>
				      <option value="6.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '6.0') { ?> selected <?php } ?>>Almaty, Dhaka, Colombo</option>
				      <option value="7.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '7.0') { ?> selected <?php } ?>>Bangkok, Hanoi, Jakarta</option>
				      <option value="8.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '8.0') { ?> selected <?php } ?>>Beijing, Perth, Singapore, Hong Kong</option>
				      <option value="9.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '9.0') { ?> selected <?php } ?>>Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
				      <option value="9.5" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '9.5') { ?> selected <?php } ?>>Adelaide, Darwin</option>
				      <option value="10.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '10.0') { ?> selected <?php } ?>>Eastern Australia, Guam, Vladivostok</option>
				      <option value="11.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '11.0') { ?> selected <?php } ?>>Magadan, Solomon Islands, New Caledonia</option>
				      <option value="12.0" <?php if (get_option('timezone'.'_'.$_GET['edit']) == '12.0') { ?> selected <?php } ?>>Auckland, Wellington, Fiji, Kamchatka</option>
				</select>
		</div>
		<!-- Countdown Style -->
	<?php 
		$options = array('warning', 'success', 'info', 'danger');
		$values = array('warning', 'success', 'info', 'danger');
		salesoptimizer_selectOption($options, $values, 'Countdown Style/Color', 'Color with meaning.', 'countdownDesign', $_GET['edit']); 
	?>
	<?php include('color.php'); ?>
</div>