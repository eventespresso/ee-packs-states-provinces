# State/Province Packs for Event Espresso 4

These plugin (individual packs) will add states/provinces for various countries in Event Espresso 4. These new states/provinces will then be available for use in the dropdown state/province menus which are used in various areas of Event Espresso 4.

These plugins are **not language files**.

## Installation

You can download a ready to go version of this plugin by browsing to the link below and looking for your country is the list of available countries and clicking on it:

http://eventespresso.com/wiki/install-new-state-province-packs/

Then login to your WordPress dashboard and go to Plugins. Click on Add New --> Upload. Now browse to the file on your computer and select it and begin the upload. Allow it to complete the upload and then click on Activate. 

Now browse to Event Espresso --> General Settings --> Countries. Then select the country from the country dropdown menu and you should see the states/provinces for the country. Return to the Plugins screen in your WP dashboard and deactivate and delete the state/province pack.

If you accidentally delete your states/provinces through the Countries screen in Event Espresso and need to reinstall them, then change the name of the wp_option (e.g. ee_australia_states_provinces_added) and re-install and activate the plugin. You can deactivate and remove it afterwards.

### Manual Installation via SFTP or FTP

Alternatively you can do a manual install via the steps below:

1. Go to this link: http://eventespresso.com/wiki/install-new-state-province-packs/

2. Then locate your country and download your state/province pack. Next, unzip the folder onto your local computer.

3. Login to your site with an SFTP or FTP client (e.g. Cyberduck, FileZilla, Transmit)

4. Upload the plugin folder to the /wp-content/plugins directory

5. Return to your WP dashboard and go to Plugins and locate the Plugin and activate it

Verify that the new states/provinces are available by browsing to Event Espresso --> General Settings --> Countries. Then select the new country from the country dropdown and you should see the states/provinces for the country. Return to the Plugins screen in your WP dashboard and deactivate and delete the state/province pack.

## How to Contribute

Find an error or a typo in an existing state/province pack? Let us know in our support forums: https://eventespresso.com/support/forums/

Want to contribute a new state/province pack? Awesome! See the steps below:

1) Fork this repository

2) From your local repository, duplicate an existing language pack to use as a starting point as this is faster than starting from scratch

3) Update the folder name to match your new country name

4) Browse into the folder and open the README.md file for editing. Update the references to the country name and save changes.

5) Update the existing ee_country_states_provinces.php (e.g. ee_brazil_states_provinces.php) filename so it has your country name

6) Open the file for editing and update the country name in the plugin name and the description

7) Now you can make updates to the function that handles the data for the states/provinces for your country. Be sure that you update the country references and once you are finished double-check that references to the prior country name are not there. For example, if you used the state/province pack for Brazil as as a starting point for your contributions, then there should not be any references to Brazil once you are finished.

8) Open an issue here and let us know about your new contribution: https://github.com/eventespresso/ee-packs-states-provinces/issues/new

9) Then submit your pull request. This will automatically notify our team and a developer will review your contribution and merge your pull request! Thanks!

## Resources

Repository for the states/provinces packs: https://github.com/eventespresso/ee-packs-states-provinces

Documentation for the states/provinces packs: http://eventespresso.com/wiki/install-new-state-province-packs/

Need help? Create a support post in our support forums: https://eventespresso.com/support/forums/