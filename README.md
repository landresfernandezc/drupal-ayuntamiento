If you are not using the database shared by me run the following commands
git clone <repo>
ddev start
ddev composer install
ddev drush site:install -y
ddev drush config:set system.site uuid 09aa893d-74c2-47d3-9aa2-e1f81313a6e6 -y
ddev drush entity:delete shortcut
ddev drush entity:delete shortcut_set default
ddev drush cim -y && ddev drush cr
ddev drush uli


Need to install ddev and docker
How to create a drupal project from 0's
ddev config --project-name=ayuntamiento --project-type=drupal10 --docroot=web --create-docroot
dev start
ddev composer create drupal/recommended-project
ddev composer require drush/drush
ddev drush site:install --site-name=ayuntamiento --acount-name=admin --acount-pass=asdmin -y
Adding Admin_toolbar
ddev composer require admin_toolbar
ddev drush en admin_toolbar && ddev drush cr  #con esto habilitamos el modulo y borramos cache
ddev composer require 'drupal/paragraphs:^1.17'
ddev drush en paragraphs -y && ddev drush cr
ddev composer require 'drupal/webform:^6.2'
ddev drush en webfom -y && ddev drush cr
Installed webform-ui by the admin panel
installed webform-attachment by the admin panel
Setup the file private path for attachment as images or files etc... $settings['file_private_path'] = 'sites/default/files/private'; in settings.php
ddev composer require 'drupal/eu_cookie_compliance:^1.24'
ddev drush en eu_cookie_compliance && ddev drush cr
ddev composer require 'drupal/pathauto:^1.12'
ddev drush en pathauto -y && ddev drush cr 
ddev composer require 'drupal/devel:^5.0'
ddev drush en devel -y && ddev drush cr
Installed Devel Generate Submodule 