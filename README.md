# TYPO3 Site Package Tutorial Example

This Site Package can be used to follow the [TYPO3 Site
Package Tutorial](https://docs.typo3.org/permalink/t3sitepackage:start@13.4).
Team.

The tutorial describes the steps required to turn a basic design
template (HTML, CSS, JavaScript files, etc.) into a fully working,
mobile-responsive website. By following the steps of the Site Package
Tutorial, the reader builds a modern extension with all relevant files
stored at a central point and changes can easily be tracked in version
control. Despite the fact that TYPO3 supports several methods of
implementing websites, this approach is a very flexible and
professional way.

## Installation with Composer

Download the Site Package and save it into folder [packages/](https://docs.typo3.org/permalink/t3coreapi:directory-packages)
in the root of your TYPO3 installation.

Require the Site Package using Composer and DDEV:

```
ddev composer req gmbit/pep:"@dev"
```

Or just Composer:

```
composer req gmbit/pep:"@dev"
```

## Classic TYPO3 installations

When you intend to follow the Site Package Tutorial we recommend that you use a Composer-based installation
all paths and commands in the Tutorial are based on that type of installation.

Download the Site Package and save it into folder `typo3conf/ext/` in the root of your TYPO3 installation.

Activate extension "My Site Package" with key my_site_package in the Extension Manager.

## Load Example data

With DDEV call:

```
ddev typo3 extension:setup
```

Without DDEV:

```
vendor/bin/typo3 extension:setup
```

If automatic loading fails you can also try to use the import command:

```
ddev typo3 impexp:import EXT:my_site_package/Initialisation/data.xml
```

## Include the Set manually

If you decide not to load the Example data, the Set of this Site Package needs to be included manually:

Include the Set "My Site Package" in your site configuration.
See also: [Create a basic site set](https://docs.typo3.org/permalink/t3sitepackage:minimal-extension-siteset).

You can also edit the file `config/sites/mysite/config.yaml` and include the following lines:

```
dependencies:
  - gmbit/pep
```
Instalacija typo3 systema kroz composer metod.
Kreiranje Nove strukture za upravljanje plugima.
Priprema razmene podataka po google insajt standardima

Osnovna tema bazirana na starom pep sajtu
Kreiran je typo3 plugin sa osnonovnom konfiguracijom sajta
dizajn je prenesen i optimizovan sa starog sajta

Koristene su nove tehnologije pa se tako umesto starog grid sistema sad koristi kontejner koji je daleko fleksibilniji i jednostavniji za koristenje.
 pored toga objedinjuje grid i dodatne plugine koji su morali da extenduju grid da bi imao dodatne mogucnosti i opcije za konfiguraciju.

 Primenjen je novi Ckeditor v.5
 ---
 ---

 tema je bazirana na najnovijem fluidu a za odredjene detalje je koristen VHS view helper. (kondicijoni menu za prikazivanje odredjenih strana a pritom da ne maju klikabilnu prirodu, subscription etc...)

Konfiguracija jezika na sajtu

Primena Indexed sercha

Content elementi:

"Novi newz"

-Randomajzer-
"cetyposcript"
plugin koji prikazuje nasumicno pronadjeni element (textualni fack quote) na pojedinoj stranici
"Prikaz i podesavanja"
Kako randomajzer samo prikazuje qute, on ce se prikazivati onako kako vi namestite u rte editoru, odnosno prilikom pisanja qute textova vec tamo podasavate izgled quta. tj primenice se stil koji vi podesite.
"Podesavanja"
Dovoljno je dodati plugin na stranici na kojoj zeli da se prikazuje a u njegovoj konfiguraciji upisati ID od stranice gde se nalaze content elementi.

-Studentski servis baner
Za sad Prikaz Reklame studentskog servisa u special html elementu. Testiranje izrade banera kroz plugin

-simpleteaser-
tizer sa Naslovom, podnaslovom i slikom

-teaserflex-
Jos jedan tiser koji je zamisljen kao ponavljanje vise elementa koristeci isti stil

-gradiemtteaser-
Plugin za pravljenje tisera sa manipulacijom slike kao i korstenje gradinet sa color pickerom.

-Obicni kontent element sa prilagodjenim dugmetom i linkom

-Jos jedan news templejt


-Ajax bajzed subscription-

-Nastavno osoblje-

-Galerija-

-filelist-

-Pdf to book-

-Forme sa zastitama-

-Testimonials plugin-

-Tabele-

-Section prikaz stranice-

-Google maps-

