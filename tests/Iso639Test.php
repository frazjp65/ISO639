<?php

namespace frazjp65;

require_once __DIR__ . '/../src/Iso639.php';

use PHPUnit\Framework\TestCase;

class Iso639Test extends TestCase
{
    public function testConstructor()
    {
        $iso = new Iso639();
        $this->assertInstanceOf('frazjp65\Iso639', $iso);
    }

    public function testGetLanguages()
    {
        $this->byBibliographic(Iso639::getLanguages());
    }

    public function testGetLanguagesByBibliographic()
    {
        $this->byBibliographic(Iso639::getLanguagesByBibliographic());
    }

    public function testGetLanguagesByTerminologic()
    {
        $languages = Iso639::getLanguagesByTerminologic();

        $this->assertInternalType('array', $languages);
        $this->assertNotEquals(count(Iso639::getLanguages()), count($languages));

        foreach ($languages as $key => $language) {
            $this->assertEquals($key, $language['terminologic']);
            $this->assertNotEmpty($language['bibliographic']);
            $this->assertLanguage($language);
        }
    }

    public function testGetLanguagesByAlpha2()
    {
        $languages = Iso639::getLanguagesByAlpha2();

        $this->assertInternalType('array', $languages);
        $this->assertNotEquals(count(Iso639::getLanguages()), count($languages));

        foreach ($languages as $key => $language) {
            $this->assertEquals($key, $language['alpha-2']);
            $this->assertNotEmpty($language['alpha-2']);
            $this->assertLanguage($language);
        }
    }

    public function testGetLanguagesByEnglish()
    {
        $languages = Iso639::getLanguagesByEnglish();

        $this->assertInternalType('array', $languages);
        $this->assertEquals(count(Iso639::getLanguages()), count($languages));

        foreach ($languages as $key => $language) {
            $this->assertEquals($key, $language['english']);
            $this->assertLanguage($language);
        }
    }

    public function testGetLanguagesByFrench()
    {
        $languages = Iso639::getLanguagesByFrench();

        $this->assertInternalType('array', $languages);
        $this->assertEquals(count(Iso639::getLanguages()), count($languages));

        foreach ($languages as $key => $language) {
            $this->assertEquals($key, $language['french']);
            $this->assertLanguage($language);
        }
    }

    private function byBibliographic(array $languages)
    {
        $this->assertInternalType('array', $languages);
        $this->assertEquals(count(Iso639::getLanguages()), count($languages));

        foreach ($languages as $key => $language) {
            $this->assertEquals($key, $language['bibliographic']);
            $this->assertLanguage($language);
        }
    }

    private function assertLanguage($language)
    {
        $this->assertInternalType('array', $language);

        $this->assertArrayHasKey('bibliographic', $language);
        $this->assertArrayHasKey('terminologic', $language);
        $this->assertArrayHasKey('alpha-2', $language);
        $this->assertArrayHasKey('english', $language);
        $this->assertArrayHasKey('french', $language);

        $this->assertNotEmpty($language['bibliographic']);
        $this->assertNotEmpty($language['english']);
        $this->assertNotEmpty($language['french']);

        $this->assertNotEmpty($language['bibliographic']);
        $this->assertNotEmpty($language['english']);
        $this->assertNotEmpty($language['french']);

        if ($language['bibliographic'] !== 'qaa-qtz') {
            $this->assertEquals(3, strlen($language['bibliographic']));
            $this->assertTrue(ctype_alpha($language['bibliographic']));
        }

        if ($language['terminologic']) {
            $this->assertEquals(3, strlen($language['terminologic']));
            $this->assertTrue(ctype_alpha($language['terminologic']));
        }

        if ($language['alpha-2']) {
            $this->assertEquals(2, strlen($language['alpha-2']));
            $this->assertTrue(ctype_alpha($language['alpha-2']));
        }
    }
}
