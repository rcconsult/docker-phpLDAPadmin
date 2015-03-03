<?php
/** NOTE **
 ** Make sure that <?php is the FIRST line of this file!
 ** IE: There should NOT be any blank lines or spaces BEFORE <?php
 **/

/**
 * The phpLDAPadmin config file
 * See: http://phpldapadmin.sourceforge.net/wiki/index.php/Config.php
 */

/* The temporary storage directory where we will put jpegPhoto data
   This directory must be readable and writable by your web server. */
 $config->custom->jpeg['tmpdir'] = '/var/www/tmp';

 /* phpLDAPadmin can encrypt the content of sensitive cookies if you set this
   to a big random string. */

/*
 * Autogenerated value will be automatically added by phpldapadmin/container-start.sh 
 */
 $config->custom->session['blowfish'] = '';


/*********************************************
 * Appearance                                *
 *********************************************/
/* Hide the warnings for invalid objectClasses/attributes in templates. */
$config->custom->appearance['hide_template_warning'] = true;


/*********************************************
 * User-friendly attribute translation       *
 *********************************************/

/* Use this array to map attribute names to user friendly names. For example, if
   you don't want to see "facsimileTelephoneNumber" but rather "Fax". */
// $config->custom->appearance['friendly_attrs'] = array();
$config->custom->appearance['friendly_attrs'] = array(
	'facsimileTelephoneNumber' => 'Fax',
	'gid'                      => 'Group',
	'mail'                     => 'Email',
	'telephoneNumber'          => 'Telephone',
	'uid'                      => 'User Name',
	'userPassword'             => 'Password'
);


/*********************************************
 * Define your LDAP servers in this section  *
 *********************************************/

$servers = new Datastore();

/*
 * Autogenerated servers will come here
 */
