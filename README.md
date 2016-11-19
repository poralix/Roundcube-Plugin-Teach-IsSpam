# Roundcube-Plugin-Teach-IsSpam for Directadmin driven servers

A fork of the official Roundcube plugin `"markasjunk"` with a feature which allows to modify destination 
folder to which reported as Junk email(s) will be moved.

The plugin is designed to be used together with `"directadmin-teach-sa"` software (https://github.com/poralix/directadmin-teach-sa)

The plugin does not teach SpamAssassin directly  It only moves emails to a special folder, from which
SA will analyze emails.

Original version's author: Thomas Bruederli
Modified by Alex Grebenschikov

# Installation

```
cd /usr/local/directadmin/custombuild/
mkdir -p custom/roundcube/plugins/teachisspam/
cd custom/roundcube/plugins/teachisspam/
git clone https://github.com/poralix/Roundcube-Plugin-Teach-IsSpam.git
cd Roundcube-Plugin-Teach-IsSpam/
mv -f * ../ && mv .git* ../
cd ../
```

Make sure to copy `config.inc.php.dist` to `config.inc.php`, and update it if it's nesessary.

```
cp config.inc.php.dist to config.inc.php
```

And enable the plugin in Roundcube `config.inc.php` for this:

```
nano /usr/local/directadmin/custombuild/custom/roundcube/config.inc.php
```

and add `'teachisspam',` into 

```
$config['plugins'] = array(
);
```

Rebuild roundcube with:

```
cd /usr/local/directadmin/custombuild/
./build roundcube
```
