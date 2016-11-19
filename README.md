# Roundcube-Plugin-Teach-IsSpam

A fork of the official Roundcube plugin "markasjunk" with a feature which allows to modify destination 
folder to which reported as Junk email(s) will be moved.

The plugin is designed to be used together with "directadmin-teach-sa" software (https://github.com/poralix/directadmin-teach-sa)

The plugin does not teach SpamAssassin directly  It only moves emails to a special folder, from which
SA will analyze emails.

Original version's author: Thomas Bruederli
Modified by Alex Grebenschikov

# Installation

Make sure to copy config.inc.php.dist to config.inc.php, and update it if it's nesessary.
