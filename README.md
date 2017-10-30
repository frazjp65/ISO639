## A PHP library for [ISO 639 Language Codes](http://www.infoterm.info/standardization/ISO_639.php).

The codes are from the [Library of Congress](https://www.loc.gov/standards/iso639-2/ISO-639-2_utf-8.txt) and were last updated on 2014-03-18.

### Installation

`composer require frazjp65/iso639`

### Usage

```php
// by bibliograhpic
$languages = Iso639\Language::getLanguages();
$languages = Iso639\Language::getLanguagesByBibliographic(); // the same thing

// by terminologic
$languages = Iso639\Language::getLanguagesByTerminologic();

// by alpha-2
$languages = Iso639\Language::getLanguagesByAlpha2();

// by English name
$languages = Iso639\Language::getLanguagesByEnglish();

// by French name
$languages = Iso639\Language::getLanguagesByFrench();
```

[![Build Status](https://travis-ci.org/frazjp65/ISO639.svg?branch=master)](https://travis-ci.org/frazjp65/ISO639)
