<?php

namespace MCSettingsDemo;

class Basic
{
  public function __construct()
   {
       //And ...ACTION(S)!
       add_action( 'admin_menu', array($this, 'settings_demo_add_admin_menu') );
       add_action( 'admin_init', array($this, 'settings_demo_settings_init') );


   }
function settings_demo_add_admin_menu(  ) {

	add_menu_page( 'Settings Demo', 'Settings Demo', 'manage_options', 'settings_demo', array($this, 'settings_demo_options_page') );

}
function settings_demo_settings_init(  ) {

	register_setting( 'pluginPage', 'settings_demo_settings' );

	add_settings_section(
		'settings_demo_pluginPage_section',
		__( 'Your section description', 'settings-demo' ),
		array($this, 'settings_demo_settings_section_callback'),
		'pluginPage'
	);

	add_settings_field(
		'settings_demo_text_field_0',
		__( 'Settings field description', 'settings-demo' ),
		array($this, 'settings_demo_text_field_0_render'),
		'pluginPage',
		'settings_demo_pluginPage_section'
	);


}


function settings_demo_text_field_0_render(  ) {

	$options = get_option( 'settings_demo_settings' );
	?>
	<input type='text' name='settings_demo_settings[settings_demo_text_field_0]' value='<?php echo $options['settings_demo_text_field_0']; ?>'>
	<?php

}


function settings_demo_settings_section_callback(  ) {

	echo __( 'This section description', 'settings-demo' );

}


function settings_demo_options_page(  ) {

		?>
		<form action='options.php' method='post'>

			<h2>Settings Demo</h2>

			<?php
			settings_fields( 'pluginPage' );
			do_settings_sections( 'pluginPage' );
			submit_button();
			?>

		</form>
		<?php

}






}

 ?>
