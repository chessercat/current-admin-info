	<?php
	/** Plugin Name:  Current admin screen info
	Plugin Name: (WCM) CAI Extension */

	add_action( 'plugins_loaded', function()
	{
		if ( ! is_admin() )
			return;

		$extension = new YourVendorName\YourExtension;
		$extension->setup();
	} );

The actual class collecting and formatting data

	<?php
	namespace YourVendorName;

	class YourExtension extends WCM\CurrentAdminInfo\AbstractScreenData;
	{
		public function collect()
		{
			// Your data collecting logic goes here
		}

		// This method is optional and formats your output
		protected function markup( $set )
		{
			sort( $set );
			// Custom formatting goes here
		}
	}