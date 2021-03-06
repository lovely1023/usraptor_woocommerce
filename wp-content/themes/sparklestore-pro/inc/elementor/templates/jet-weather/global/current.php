<?php
/**
 * Current weather template.
 */
$settings = $this->get_settings_for_display();
$data     = $this->weather_data;
?>
<div class="jet-weather__current">
	<div class="jet-weather__current-temp"><?php echo $this->get_weather_temp( $data['current']['temp'] ); ?></div>

	<div class="jet-weather__current-icon-box">
		<div class="jet-weather__current-icon"><?php echo $this->get_weather_svg_icon( $data['current']['code'] ); ?></div>
		<div class="jet-weather__current-desc"><?php echo $data['current']['desc']; ?></div>
	</div>
</div>
<?php if ( isset( $settings['show_current_weather_details'] ) && 'true' === $settings['show_current_weather_details'] ) { ?>
	<div class="jet-weather__details">
		<div class="jet-weather__details-column">
			<div class="jet-weather__details-item jet-weather__current-day"><?php echo $data['current']['week_day']; ?></div>
			<div class="jet-weather__details-item jet-weather__current-sunrise">
				<?php echo $this->get_weather_svg_icon( 'sunrise' ); ?>
				<?php echo $data['current']['sunrise']; ?>
			</div>
			<div class="jet-weather__details-item jet-weather__current-sunset">
				<?php echo $this->get_weather_svg_icon( 'sunset' ); ?>
				<?php echo $data['current']['sunset']; ?>
			</div>
		</div>
		<div class="jet-weather__details-column">
			<div class="jet-weather__details-item jet-weather__current-min-temp"><?php printf( '%1$s %2$s', esc_html__( 'Min:', 'sparklestore-pro' ), $this->get_weather_temp( $data['current']['temp_min'] ) ); ?></div>
			<div class="jet-weather__details-item jet-weather__current-max-temp"><?php printf( '%1$s %2$s', esc_html__( 'Max:', 'sparklestore-pro' ), $this->get_weather_temp( $data['current']['temp_max'] ) ); ?></div>
		</div>
		<div class="jet-weather__details-column">
			<div class="jet-weather__details-item jet-weather__current-humidity">
				<?php echo $this->get_weather_svg_icon( 'humidity' ); ?>
				<?php echo $data['current']['humidity']; ?>
			</div>
			<div class="jet-weather__details-item jet-weather__current-pressure">
				<?php echo $this->get_weather_svg_icon( 'pressure' ); ?>
				<?php echo $data['current']['pressure']; ?>
			</div>
			<div class="jet-weather__details-item jet-weather__current-wind">
				<?php echo $this->get_weather_svg_icon( 'wind' ); ?>
				<?php echo $this->get_wind( $data['current']['wind']['speed'], $data['current']['wind']['deg'] ); ?>
			</div>
		</div>
	</div>
<?php } ?>
