## A PHP library for [ISO 639 Language Codes](http://www.infoterm.info/standardization/ISO_639.php).

The codes are from the [Library of Congress](https://www.loc.gov/standards/iso639-2/ISO-639-2_utf-8.txt) and were last updated on 2014-03-18.

### Installation

`composer require frazjp65/iso639`

### Usage

```php
// by bibliograhpic
$languages = Iso639::getLanguages();
$languages = Iso639::getLanguagesByBibliographic(); // the same thing

// by terminologic
$languages = Iso639::getLanguagesByTerminologic();

// by alpha-2
$languages = Iso639::getLanguagesByAlpha2();

// by English name
$languages = Iso639::getLanguagesByEnglish();

// by French name
$languages = Iso639::getLanguagesByFrench();
```
