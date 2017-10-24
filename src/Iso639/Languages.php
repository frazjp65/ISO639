<?php

/**
 * A way to access ISO639 data in PHP.
 *
 * This data was migrated from:
 * https://www.loc.gov/standards/iso639-2/ISO-639-2_utf-8.txt.
 *
 * This class is meant to be accessed statically. It will cache the values if a
 * transformation is required.
 *
 * @author Joe Frazer
 *
 */

namespace Iso639;

final class Languages
{
    private static $languages = [
        'aar' => [
            'bibliographic' => 'aar',
            'terminologic' => '',
            'alpha-2' => 'aa',
            'english' => 'Afar',
            'french' => 'afar',
        ],
        'abk' => [
            'bibliographic' => 'abk',
            'terminologic' => '',
            'alpha-2' => 'ab',
            'english' => 'Abkhazian',
            'french' => 'abkhaze',
        ],
        'ace' => [
            'bibliographic' => 'ace',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Achinese',
            'french' => 'aceh'
        ],
        'ach' => [
            'bibliographic' => 'ach',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Acoli',
            'french' => 'acoli'
        ],
        'ada' => [
            'bibliographic' => 'ada',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Adangme',
            'french' => 'adangme'
        ],
        'ady' => [
            'bibliographic' => 'ady',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Adyghe; Adygei',
            'french' => 'adyghé'
        ],
        'afa' => [
            'bibliographic' => 'afa',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Afro-Asiatic languages',
            'french' => 'afro-asiatiques, langues'
        ],
        'afh' => [
            'bibliographic' => 'afh',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Afrihili',
            'french' => 'afrihili'
        ],
        'afr' => [
            'bibliographic' => 'afr',
            'terminologic' => '',
            'alpha-2' => 'af',
            'english' => 'Afrikaans',
            'french' => 'afrikaans'
        ],
        'ain' => [
            'bibliographic' => 'ain',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Ainu',
            'french' => 'aïnou'
        ],
        'aka' => [
            'bibliographic' => 'aka',
            'terminologic' => '',
            'alpha-2' => 'ak',
            'english' => 'Akan',
            'french' => 'akan'
        ],
        'akk' => [
            'bibliographic' => 'akk',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Akkadian',
            'french' => 'akkadien'
        ],
        'alb' => [
            'bibliographic' => 'alb',
            'terminologic' => 'sqi',
            'alpha-2' => 'sq',
            'english' => 'Albanian',
            'french' => 'albanais'
        ],
        'ale' => [
            'bibliographic' => 'ale',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Aleut',
            'french' => 'aléoute'
        ],
        'alg' => [
            'bibliographic' => 'alg',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Algonquian languages',
            'french' => 'algonquines, langues'
        ],
        'alt' => [
            'bibliographic' => 'alt',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Southern Altai',
            'french' => 'altai du Sud'
        ],
        'amh' => [
            'bibliographic' => 'amh',
            'terminologic' => '',
            'alpha-2' => 'am',
            'english' => 'Amharic',
            'french' => 'amharique'
        ],
        'ang' => [
            'bibliographic' => 'ang',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'English, Old (ca.450-1100)',
            'french' => 'anglo-saxon (ca.450-1100)'
        ],
        'anp' => [
            'bibliographic' => 'anp',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Angika',
            'french' => 'angika'
        ],
        'apa' => [
            'bibliographic' => 'apa',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Apache languages',
            'french' => 'apaches, langues'
        ],
        'ara' => [
            'bibliographic' => 'ara',
            'terminologic' => '',
            'alpha-2' => 'ar',
            'english' => 'Arabic',
            'french' => 'arabe'
        ],
        'arc' => [
            'bibliographic' => 'arc',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Official Aramaic (700-300 BCE); Imperial Aramaic (700-300 BCE)',
            'french' => "araméen d'empire (700-300 BCE)"
        ],
        'arg' => [
            'bibliographic' => 'arg',
            'terminologic' => '',
            'alpha-2' => 'an',
            'english' => 'Aragonese',
            'french' => 'aragonais'
        ],
        'arm' => [
            'bibliographic' => 'arm',
            'terminologic' => 'hye',
            'alpha-2' => 'hy',
            'english' => 'Armenian',
            'french' => 'arménien'
        ],
        'arn' => [
            'bibliographic' => 'arn',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Mapudungun; Mapuche',
            'french' => 'mapudungun; mapuche; mapuce'
        ],
        'arp' => [
            'bibliographic' => 'arp',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Arapaho',
            'french' => 'arapaho'
        ],
        'art' => [
            'bibliographic' => 'art',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Artificial languages',
            'french' => 'artificielles, langues'
        ],
        'arw' => [
            'bibliographic' => 'arw',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Arawak',
            'french' => 'arawak'
        ],
        'asm' => [
            'bibliographic' => 'asm',
            'terminologic' => '',
            'alpha-2' => 'as',
            'english' => 'Assamese',
            'french' => 'assamais'
        ],
        'ast' => [
            'bibliographic' => 'ast',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Asturian; Bable; Leonese; Asturleonese',
            'french' => 'asturien; bable; léonais; asturoléonais'
        ],
        'ath' => [
            'bibliographic' => 'ath',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Athapascan languages',
            'french' => 'athapascanes, langues'
        ],
        'aus' => [
            'bibliographic' => 'aus',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Australian languages',
            'french' => 'australiennes, langues'
        ],
        'ava' => [
            'bibliographic' => 'ava',
            'terminologic' => '',
            'alpha-2' => 'av',
            'english' => 'Avaric',
            'french' => 'avar'
        ],
        'ave' => [
            'bibliographic' => 'ave',
            'terminologic' => '',
            'alpha-2' => 'ae',
            'english' => 'Avestan',
            'french' => 'avestique'
        ],
        'awa' => [
            'bibliographic' => 'awa',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Awadhi',
            'french' => 'awadhi'
        ],
        'aym' => [
            'bibliographic' => 'aym',
            'terminologic' => '',
            'alpha-2' => 'ay',
            'english' => 'Aymara',
            'french' => 'aymara'
        ],
        'aze' => [
            'bibliographic' => 'aze',
            'terminologic' => '',
            'alpha-2' => 'az',
            'english' => 'Azerbaijani',
            'french' => 'azéri'
        ],
        'bad' => [
            'bibliographic' => 'bad',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Banda languages',
            'french' => 'banda, langues'
        ],
        'bai' => [
            'bibliographic' => 'bai',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Bamileke languages',
            'french' => 'bamiléké, langues'
        ],
        'bak' => [
            'bibliographic' => 'bak',
            'terminologic' => '',
            'alpha-2' => 'ba',
            'english' => 'Bashkir',
            'french' => 'bachkir'
        ],
        'bal' => [
            'bibliographic' => 'bal',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Baluchi',
            'french' => 'baloutchi'
        ],
        'bam' => [
            'bibliographic' => 'bam',
            'terminologic' => '',
            'alpha-2' => 'bm',
            'english' => 'Bambara',
            'french' => 'bambara'
        ],
        'ban' => [
            'bibliographic' => 'ban',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Balinese',
            'french' => 'balinais'
        ],
        'baq' => [
            'bibliographic' => 'baq',
            'terminologic' => 'eus',
            'alpha-2' => 'eu',
            'english' => 'Basque',
            'french' => 'basque'
        ],
        'bas' => [
            'bibliographic' => 'bas',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Basa',
            'french' => 'basa'
        ],
        'bat' => [
            'bibliographic' => 'bat',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Baltic languages',
            'french' => 'baltes, langues'
        ],
        'bej' => [
            'bibliographic' => 'bej',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Beja; Bedawiyet',
            'french' => 'bedja'
        ],
        'bel' => [
            'bibliographic' => 'bel',
            'terminologic' => '',
            'alpha-2' => 'be',
            'english' => 'Belarusian',
            'french' => 'biélorusse'
        ],
        'bem' => [
            'bibliographic' => 'bem',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Bemba',
            'french' => 'bemba'
        ],
        'ben' => [
            'bibliographic' => 'ben',
            'terminologic' => '',
            'alpha-2' => 'bn',
            'english' => 'Bengali',
            'french' => 'bengali'
        ],
        'ber' => [
            'bibliographic' => 'ber',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Berber languages',
            'french' => 'berbères, langues'
        ],
        'bho' => [
            'bibliographic' => 'bho',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Bhojpuri',
            'french' => 'bhojpuri'
        ],
        'bih' => [
            'bibliographic' => 'bih',
            'terminologic' => '',
            'alpha-2' => 'bh',
            'english' => 'Bihari languages',
            'french' => 'langues biharis'
        ],
        'bik' => [
            'bibliographic' => 'bik',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Bikol',
            'french' => 'bikol'
        ],
        'bin' => [
            'bibliographic' => 'bin',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Bini; Edo',
            'french' => 'bini; edo'
        ],
        'bis' => [
            'bibliographic' => 'bis',
            'terminologic' => '',
            'alpha-2' => 'bi',
            'english' => 'Bislama',
            'french' => 'bichlamar'
        ],
        'bla' => [
            'bibliographic' => 'bla',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Siksika',
            'french' => 'blackfoot'
        ],
        'bnt' => [
            'bibliographic' => 'bnt',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Bantu (Other)',
            'french' => 'bantoues, autres langues'
        ],
        'bos' => [
            'bibliographic' => 'bos',
            'terminologic' => '',
            'alpha-2' => 'bs',
            'english' => 'Bosnian',
            'french' => 'bosniaque'
        ],
        'bra' => [
            'bibliographic' => 'bra',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Braj',
            'french' => 'braj'
        ],
        'bre' => [
            'bibliographic' => 'bre',
            'terminologic' => '',
            'alpha-2' => 'br',
            'english' => 'Breton',
            'french' => 'breton'
        ],
        'btk' => [
            'bibliographic' => 'btk',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Batak languages',
            'french' => 'batak, langues'
        ],
        'bua' => [
            'bibliographic' => 'bua',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Buriat',
            'french' => 'bouriate'
        ],
        'bug' => [
            'bibliographic' => 'bug',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Buginese',
            'french' => 'bugi'
        ],
        'bul' => [
            'bibliographic' => 'bul',
            'terminologic' => '',
            'alpha-2' => 'bg',
            'english' => 'Bulgarian',
            'french' => 'bulgare'
        ],
        'bur' => [
            'bibliographic' => 'bur',
            'terminologic' => 'mya',
            'alpha-2' => 'my',
            'english' => 'Burmese',
            'french' => 'birman'
        ],
        'byn' => [
            'bibliographic' => 'byn',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Blin; Bilin',
            'french' => 'blin; bilen'
        ],
        'cad' => [
            'bibliographic' => 'cad',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Caddo',
            'french' => 'caddo'
        ],
        'cai' => [
            'bibliographic' => 'cai',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Central American Indian languages',
            'french' => "amérindiennes de L'Amérique centrale, langues"
        ],
        'car' => [
            'bibliographic' => 'car',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Galibi Carib',
            'french' => 'karib; galibi; carib'
        ],
        'cat' => [
            'bibliographic' => 'cat',
            'terminologic' => '',
            'alpha-2' => 'ca',
            'english' => 'Catalan; Valencian',
            'french' => 'catalan; valencien'
        ],
        'cau' => [
            'bibliographic' => 'cau',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Caucasian languages',
            'french' => 'caucasiennes, langues'
        ],
        'ceb' => [
            'bibliographic' => 'ceb',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Cebuano',
            'french' => 'cebuano'
        ],
        'cel' => [
            'bibliographic' => 'cel',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Celtic languages',
            'french' => 'celtiques, langues; celtes, langues'
        ],
        'cha' => [
            'bibliographic' => 'cha',
            'terminologic' => '',
            'alpha-2' => 'ch',
            'english' => 'Chamorro',
            'french' => 'chamorro'
        ],
        'chb' => [
            'bibliographic' => 'chb',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Chibcha',
            'french' => 'chibcha'
        ],
        'che' => [
            'bibliographic' => 'che',
            'terminologic' => '',
            'alpha-2' => 'ce',
            'english' => 'Chechen',
            'french' => 'tchétchène'
        ],
        'chg' => [
            'bibliographic' => 'chg',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Chagatai',
            'french' => 'djaghataï'
        ],
        'chi' => [
            'bibliographic' => 'chi',
            'terminologic' => 'zho',
            'alpha-2' => 'zh',
            'english' => 'Chinese',
            'french' => 'chinois'
        ],
        'chk' => [
            'bibliographic' => 'chk',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Chuukese',
            'french' => 'chuuk'
        ],
        'chm' => [
            'bibliographic' => 'chm',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Mari',
            'french' => 'mari'
        ],
        'chn' => [
            'bibliographic' => 'chn',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Chinook jargon',
            'french' => 'chinook, jargon'
        ],
        'cho' => [
            'bibliographic' => 'cho',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Choctaw',
            'french' => 'choctaw'
        ],
        'chp' => [
            'bibliographic' => 'chp',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Chipewyan; Dene Suline',
            'french' => 'chipewyan'
        ],
        'chr' => [
            'bibliographic' => 'chr',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Cherokee',
            'french' => 'cherokee'
        ],
        'chu' => [
            'bibliographic' => 'chu',
            'terminologic' => '',
            'alpha-2' => 'cu',
            'english' => 'Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic',
            'french' => "slavon d'église; vieux slave; slavon liturgique; vieux bulgare"
        ],
        'chv' => [
            'bibliographic' => 'chv',
            'terminologic' => '',
            'alpha-2' => 'cv',
            'english' => 'Chuvash',
            'french' => 'tchouvache'
        ],
        'chy' => [
            'bibliographic' => 'chy',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Cheyenne',
            'french' => 'cheyenne'
        ],
        'cmc' => [
            'bibliographic' => 'cmc',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Chamic languages',
            'french' => 'chames, langues'
        ],
        'cop' => [
            'bibliographic' => 'cop',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Coptic',
            'french' => 'copte'
        ],
        'cor' => [
            'bibliographic' => 'cor',
            'terminologic' => '',
            'alpha-2' => 'kw',
            'english' => 'Cornish',
            'french' => 'cornique'
        ],
        'cos' => [
            'bibliographic' => 'cos',
            'terminologic' => '',
            'alpha-2' => 'co',
            'english' => 'Corsican',
            'french' => 'corse'
        ],
        'cpe' => [
            'bibliographic' => 'cpe',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Creoles and pidgins, English based',
            'french' => "créoles et pidgins basés sur l'anglais"
        ],
        'cpf' => [
            'bibliographic' => 'cpf',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Creoles and pidgins, French-based ',
            'french' => 'créoles et pidgins basés sur le français'
        ],
        'cpp' => [
            'bibliographic' => 'cpp',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Creoles and pidgins, Portuguese-based ',
            'french' => 'créoles et pidgins basés sur le portugais'
        ],
        'cre' => [
            'bibliographic' => 'cre',
            'terminologic' => '',
            'alpha-2' => 'cr',
            'english' => 'Cree',
            'french' => 'cree'
        ],
        'crh' => [
            'bibliographic' => 'crh',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Crimean Tatar; Crimean Turkish',
            'french' => 'tatar de Crimé'
        ],
        'crp' => [
            'bibliographic' => 'crp',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Creoles and pidgins ',
            'french' => 'créoles et pidgins'
        ],
        'csb' => [
            'bibliographic' => 'csb',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Kashubian',
            'french' => 'kachoube'
        ],
        'cus' => [
            'bibliographic' => 'cus',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Cushitic languages',
            'french' => 'couchitiques, langues'
        ],
        'cze' => [
            'bibliographic' => 'cze',
            'terminologic' => 'ces',
            'alpha-2' => 'cs',
            'english' => 'Czech',
            'french' => 'tchèque'
        ],
        'dak' => [
            'bibliographic' => 'dak',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Dakota',
            'french' => 'dakota'
        ],
        'dan' => [
            'bibliographic' => 'dan',
            'terminologic' => '',
            'alpha-2' => 'da',
            'english' => 'Danish',
            'french' => 'danois'
        ],
        'dar' => [
            'bibliographic' => 'dar',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Dargwa',
            'french' => 'dargwa'
        ],
        'day' => [
            'bibliographic' => 'day',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Land Dayak languages',
            'french' => 'dayak, langues'
        ],
        'del' => [
            'bibliographic' => 'del',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Delaware',
            'french' => 'delaware'
        ],
        'den' => [
            'bibliographic' => 'den',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Slave (Athapascan)',
            'french' => 'esclave (athapascan)
            '],
        'dgr' => [
            'bibliographic' => 'dgr',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Dogrib',
            'french' => 'dogrib'
        ],
        'din' => [
            'bibliographic' => 'din',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Dinka',
            'french' => 'dinka'
        ],
        'div' => [
            'bibliographic' => 'div',
            'terminologic' => '',
            'alpha-2' => 'dv',
            'english' => 'Divehi; Dhivehi; Maldivian',
            'french' => 'maldivien'
        ],
        'doi' => [
            'bibliographic' => 'doi',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Dogri',
            'french' => 'dogri'
        ],
        'dra' => [
            'bibliographic' => 'dra',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Dravidian languages',
            'french' => 'dravidiennes, langues'
        ],
        'dsb' => [
            'bibliographic' => 'dsb',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Lower Sorbian',
            'french' => 'bas-sorabe'
        ],
        'dua' => [
            'bibliographic' => 'dua',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Duala',
            'french' => 'douala'
        ],
        'dum' => [
            'bibliographic' => 'dum',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Dutch, Middle (ca.1050-1350)',
            'french' => 'néerlandais moyen (ca. 1050-1350)
            '],
        'dut' => [
            'bibliographic' => 'dut',
            'terminologic' => 'nld',
            'alpha-2' => 'nl',
            'english' => 'Dutch; Flemish',
            'french' => 'néerlandais; flamand'
        ],
        'dyu' => [
            'bibliographic' => 'dyu',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Dyula',
            'french' => 'dioula'
        ],
        'dzo' => [
            'bibliographic' => 'dzo',
            'terminologic' => '',
            'alpha-2' => 'dz',
            'english' => 'Dzongkha',
            'french' => 'dzongkha'
        ],
        'efi' => [
            'bibliographic' => 'efi',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Efik',
            'french' => 'efik'
        ],
        'egy' => [
            'bibliographic' => 'egy',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Egyptian (Ancient)',
            'french' => 'égyptien'
        ],
        'eka' => [
            'bibliographic' => 'eka',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Ekajuk',
            'french' => 'ekajuk'
        ],
        'elx' => [
            'bibliographic' => 'elx',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Elamite',
            'french' => 'élamite'
        ],
        'eng' => [
            'bibliographic' => 'eng',
            'terminologic' => '',
            'alpha-2' => 'en',
            'english' => 'English',
            'french' => 'anglais'
        ],
        'enm' => [
            'bibliographic' => 'enm',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'English, Middle (1100-1500)',
            'french' => 'anglais moyen (1100-1500)
            '],
        'epo' => [
            'bibliographic' => 'epo',
            'terminologic' => '',
            'alpha-2' => 'eo',
            'english' => 'Esperanto',
            'french' => 'espéranto'
        ],
        'est' => [
            'bibliographic' => 'est',
            'terminologic' => '',
            'alpha-2' => 'et',
            'english' => 'Estonian',
            'french' => 'estonien'
        ],
        'ewe' => [
            'bibliographic' => 'ewe',
            'terminologic' => '',
            'alpha-2' => 'ee',
            'english' => 'Ewe',
            'french' => 'éwé'
        ],
        'ewo' => [
            'bibliographic' => 'ewo',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Ewondo',
            'french' => 'éwondo'
        ],
        'fan' => [
            'bibliographic' => 'fan',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Fang',
            'french' => 'fang'
        ],
        'fao' => [
            'bibliographic' => 'fao',
            'terminologic' => '',
            'alpha-2' => 'fo',
            'english' => 'Faroese',
            'french' => 'féroïen'
        ],
        'fat' => [
            'bibliographic' => 'fat',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Fanti',
            'french' => 'fanti'
        ],
        'fij' => [
            'bibliographic' => 'fij',
            'terminologic' => '',
            'alpha-2' => 'fj',
            'english' => 'Fijian',
            'french' => 'fidjien'
        ],
        'fil' => [
            'bibliographic' => 'fil',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Filipino; Pilipino',
            'french' => 'filipino; pilipino'
        ],
        'fin' => [
            'bibliographic' => 'fin',
            'terminologic' => '',
            'alpha-2' => 'fi',
            'english' => 'Finnish',
            'french' => 'finnois'
        ],
        'fiu' => [
            'bibliographic' => 'fiu',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Finno-Ugrian languages',
            'french' => 'finno-ougriennes, langues'
        ],
        'fon' => [
            'bibliographic' => 'fon',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Fon',
            'french' => 'fon'
        ],
        'fre' => [
            'bibliographic' => 'fre',
            'terminologic' => 'fra',
            'alpha-2' => 'fr',
            'english' => 'French',
            'french' => 'français'
        ],
        'frm' => [
            'bibliographic' => 'frm',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'French, Middle (ca.1400-1600)',
            'french' => 'français moyen (1400-1600)
            '],
        'fro' => [
            'bibliographic' => 'fro',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'French, Old (842-ca.1400)',
            'french' => 'français ancien (842-ca.1400)
            '],
        'frr' => [
            'bibliographic' => 'frr',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Northern Frisian',
            'french' => 'frison septentrional'
        ],
        'frs' => [
            'bibliographic' => 'frs',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Eastern Frisian',
            'french' => 'frison oriental'
        ],
        'fry' => [
            'bibliographic' => 'fry',
            'terminologic' => '',
            'alpha-2' => 'fy',
            'english' => 'Western Frisian',
            'french' => 'frison occidental'
        ],
        'ful' => [
            'bibliographic' => 'ful',
            'terminologic' => '',
            'alpha-2' => 'ff',
            'english' => 'Fulah',
            'french' => 'peul'
        ],
        'fur' => [
            'bibliographic' => 'fur',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Friulian',
            'french' => 'frioulan'
        ],
        'gaa' => [
            'bibliographic' => 'gaa',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Ga',
            'french' => 'ga'
        ],
        'gay' => [
            'bibliographic' => 'gay',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Gayo',
            'french' => 'gayo'
        ],
        'gba' => [
            'bibliographic' => 'gba',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Gbaya',
            'french' => 'gbaya'
        ],
        'gem' => [
            'bibliographic' => 'gem',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Germanic languages',
            'french' => 'germaniques, langues'
        ],
        'geo' => [
            'bibliographic' => 'geo',
            'terminologic' => 'kat',
            'alpha-2' => 'ka',
            'english' => 'Georgian',
            'french' => 'géorgien'
        ],
        'ger' => [
            'bibliographic' => 'ger',
            'terminologic' => 'deu',
            'alpha-2' => 'de',
            'english' => 'German',
            'french' => 'allemand'
        ],
        'gez' => [
            'bibliographic' => 'gez',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Geez',
            'french' => 'guèze'
        ],
        'gil' => [
            'bibliographic' => 'gil',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Gilbertese',
            'french' => 'kiribati'
        ],
        'gla' => [
            'bibliographic' => 'gla',
            'terminologic' => '',
            'alpha-2' => 'gd',
            'english' => 'Gaelic; Scottish Gaelic',
            'french' => 'gaélique; gaélique écossais'
        ],
        'gle' => [
            'bibliographic' => 'gle',
            'terminologic' => '',
            'alpha-2' => 'ga',
            'english' => 'Irish',
            'french' => 'irlandais'
        ],
        'glg' => [
            'bibliographic' => 'glg',
            'terminologic' => '',
            'alpha-2' => 'gl',
            'english' => 'Galician',
            'french' => 'galicien'
        ],
        'glv' => [
            'bibliographic' => 'glv',
            'terminologic' => '',
            'alpha-2' => 'gv',
            'english' => 'Manx',
            'french' => 'manx; mannois'
        ],
        'gmh' => [
            'bibliographic' => 'gmh',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'German, Middle High (ca.1050-1500)',
            'french' => 'allemand, moyen haut (ca. 1050-1500)
            '],
        'goh' => [
            'bibliographic' => 'goh',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'German, Old High (ca.750-1050)',
            'french' => 'allemand, vieux haut (ca. 750-1050)
            '],
        'gon' => [
            'bibliographic' => 'gon',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Gondi',
            'french' => 'gond'
        ],
        'gor' => [
            'bibliographic' => 'gor',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Gorontalo',
            'french' => 'gorontalo'
        ],
        'got' => [
            'bibliographic' => 'got',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Gothic',
            'french' => 'gothique'
        ],
        'grb' => [
            'bibliographic' => 'grb',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Grebo',
            'french' => 'grebo'
        ],
        'grc' => [
            'bibliographic' => 'grc',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Greek, Ancient (to 1453)',
            'french' => "grec ancien (jusqu'à 1453)"
        ],
        'gre' => [
            'bibliographic' => 'gre',
            'terminologic' => 'ell',
            'alpha-2' => 'el',
            'english' => 'Greek, Modern (1453-)',
            'french' => 'grec moderne (après 1453)'
        ],
        'grn' => [
            'bibliographic' => 'grn',
            'terminologic' => '',
            'alpha-2' => 'gn',
            'english' => 'Guarani',
            'french' => 'guarani'
        ],
        'gsw' => [
            'bibliographic' => 'gsw',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Swiss German; Alemannic; Alsatian',
            'french' => 'suisse alémanique; alémanique; alsacien'
        ],
        'guj' => [
            'bibliographic' => 'guj',
            'terminologic' => '',
            'alpha-2' => 'gu',
            'english' => 'Gujarati',
            'french' => 'goudjrati'
        ],
        'gwi' => [
            'bibliographic' => 'gwi',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => "Gwich'in",
            'french' => "gwich'in"
        ],
        'hai' => [
            'bibliographic' => 'hai',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Haida',
            'french' => 'haida'
        ],
        'hat' => [
            'bibliographic' => 'hat',
            'terminologic' => '',
            'alpha-2' => 'ht',
            'english' => 'Haitian; Haitian Creole',
            'french' => 'haïtien; créole haïtien'
        ],
        'hau' => [
            'bibliographic' => 'hau',
            'terminologic' => '',
            'alpha-2' => 'ha',
            'english' => 'Hausa',
            'french' => 'haoussa'
        ],
        'haw' => [
            'bibliographic' => 'haw',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Hawaiian',
            'french' => 'hawaïen'
        ],
        'heb' => [
            'bibliographic' => 'heb',
            'terminologic' => '',
            'alpha-2' => 'he',
            'english' => 'Hebrew',
            'french' => 'hébreu'
        ],
        'her' => [
            'bibliographic' => 'her',
            'terminologic' => '',
            'alpha-2' => 'hz',
            'english' => 'Herero',
            'french' => 'herero'
        ],
        'hil' => [
            'bibliographic' => 'hil',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Hiligaynon',
            'french' => 'hiligaynon'
        ],
        'him' => [
            'bibliographic' => 'him',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Himachali languages; Western Pahari languages',
            'french' => 'langues himachalis; langues paharis occidentales'
        ],
        'hin' => [
            'bibliographic' => 'hin',
            'terminologic' => '',
            'alpha-2' => 'hi',
            'english' => 'Hindi',
            'french' => 'hindi'
        ],
        'hit' => [
            'bibliographic' => 'hit',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Hittite',
            'french' => 'hittite'
        ],
        'hmn' => [
            'bibliographic' => 'hmn',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Hmong; Mong',
            'french' => 'hmong'
        ],
        'hmo' => [
            'bibliographic' => 'hmo',
            'terminologic' => '',
            'alpha-2' => 'ho',
            'english' => 'Hiri Motu',
            'french' => 'hiri motu'
        ],
        'hrv' => [
            'bibliographic' => 'hrv',
            'terminologic' => '',
            'alpha-2' => 'hr',
            'english' => 'Croatian',
            'french' => 'croate'
        ],
        'hsb' => [
            'bibliographic' => 'hsb',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Upper Sorbian',
            'french' => 'haut-sorabe'
        ],
        'hun' => [
            'bibliographic' => 'hun',
            'terminologic' => '',
            'alpha-2' => 'hu',
            'english' => 'Hungarian',
            'french' => 'hongrois'
        ],
        'hup' => [
            'bibliographic' => 'hup',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Hupa',
            'french' => 'hupa'
        ],
        'iba' => [
            'bibliographic' => 'iba',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Iban',
            'french' => 'iban'
        ],
        'ibo' => [
            'bibliographic' => 'ibo',
            'terminologic' => '',
            'alpha-2' => 'ig',
            'english' => 'Igbo',
            'french' => 'igbo'
        ],
        'ice' => [
            'bibliographic' => 'ice',
            'terminologic' => 'isl',
            'alpha-2' => 'is',
            'english' => 'Icelandic',
            'french' => 'islandais'
        ],
        'ido' => [
            'bibliographic' => 'ido',
            'terminologic' => '',
            'alpha-2' => 'io',
            'english' => 'Ido',
            'french' => 'ido'
        ],
        'iii' => [
            'bibliographic' => 'iii',
            'terminologic' => '',
            'alpha-2' => 'ii',
            'english' => 'Sichuan Yi; Nuosu',
            'french' => 'yi de Sichuan'
        ],
        'ijo' => [
            'bibliographic' => 'ijo',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Ijo languages',
            'french' => 'ijo, langues'
        ],
        'iku' => [
            'bibliographic' => 'iku',
            'terminologic' => '',
            'alpha-2' => 'iu',
            'english' => 'Inuktitut',
            'french' => 'inuktitut'
        ],
        'ile' => [
            'bibliographic' => 'ile',
            'terminologic' => '',
            'alpha-2' => 'ie',
            'english' => 'Interlingue; Occidental',
            'french' => 'interlingue'
        ],
        'ilo' => [
            'bibliographic' => 'ilo',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Iloko',
            'french' => 'ilocano'
        ],
        'ina' => [
            'bibliographic' => 'ina',
            'terminologic' => '',
            'alpha-2' => 'ia',
            'english' => 'Interlingua (International Auxiliary Language Association)',
            'french' => 'interlingua (langue auxiliaire internationale)
            '],
        'inc' => [
            'bibliographic' => 'inc',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Indic languages',
            'french' => 'indo-aryennes, langues'
        ],
        'ind' => [
            'bibliographic' => 'ind',
            'terminologic' => '',
            'alpha-2' => 'id',
            'english' => 'Indonesian',
            'french' => 'indonésien'
        ],
        'ine' => [
            'bibliographic' => 'ine',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Indo-European languages',
            'french' => 'indo-européennes, langues'
        ],
        'inh' => [
            'bibliographic' => 'inh',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Ingush',
            'french' => 'ingouche'
        ],
        'ipk' => [
            'bibliographic' => 'ipk',
            'terminologic' => '',
            'alpha-2' => 'ik',
            'english' => 'Inupiaq',
            'french' => 'inupiaq'
        ],
        'ira' => [
            'bibliographic' => 'ira',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Iranian languages',
            'french' => 'iraniennes, langues'
        ],
        'iro' => [
            'bibliographic' => 'iro',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Iroquoian languages',
            'french' => 'iroquoises, langues'
        ],
        'ita' => [
            'bibliographic' => 'ita',
            'terminologic' => '',
            'alpha-2' => 'it',
            'english' => 'Italian',
            'french' => 'italien'
        ],
        'jav' => [
            'bibliographic' => 'jav',
            'terminologic' => '',
            'alpha-2' => 'jv',
            'english' => 'Javanese',
            'french' => 'javanais'
        ],
        'jbo' => [
            'bibliographic' => 'jbo',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Lojban',
            'french' => 'lojban'
        ],
        'jpn' => [
            'bibliographic' => 'jpn',
            'terminologic' => '',
            'alpha-2' => 'ja',
            'english' => 'Japanese',
            'french' => 'japonais'
        ],
        'jpr' => [
            'bibliographic' => 'jpr',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Judeo-Persian',
            'french' => 'judéo-persan'
        ],
        'jrb' => [
            'bibliographic' => 'jrb',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Judeo-Arabic',
            'french' => 'judéo-arabe'
        ],
        'kaa' => [
            'bibliographic' => 'kaa',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Kara-Kalpak',
            'french' => 'karakalpak'
        ],
        'kab' => [
            'bibliographic' => 'kab',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Kabyle',
            'french' => 'kabyle'
        ],
        'kac' => [
            'bibliographic' => 'kac',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Kachin; Jingpho',
            'french' => 'kachin; jingpho'
        ],
        'kal' => [
            'bibliographic' => 'kal',
            'terminologic' => '',
            'alpha-2' => 'kl',
            'english' => 'Kalaallisut; Greenlandic',
            'french' => 'groenlandais'
        ],
        'kam' => [
            'bibliographic' => 'kam',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Kamba',
            'french' => 'kamba'
        ],
        'kan' => [
            'bibliographic' => 'kan',
            'terminologic' => '',
            'alpha-2' => 'kn',
            'english' => 'Kannada',
            'french' => 'kannada'
        ],
        'kar' => [
            'bibliographic' => 'kar',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Karen languages',
            'french' => 'karen, langues'
        ],
        'kas' => [
            'bibliographic' => 'kas',
            'terminologic' => '',
            'alpha-2' => 'ks',
            'english' => 'Kashmiri',
            'french' => 'kashmiri'
        ],
        'kau' => [
            'bibliographic' => 'kau',
            'terminologic' => '',
            'alpha-2' => 'kr',
            'english' => 'Kanuri',
            'french' => 'kanouri'
        ],
        'kaw' => [
            'bibliographic' => 'kaw',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Kawi',
            'french' => 'kawi'
        ],
        'kaz' => [
            'bibliographic' => 'kaz',
            'terminologic' => '',
            'alpha-2' => 'kk',
            'english' => 'Kazakh',
            'french' => 'kazakh'
        ],
        'kbd' => [
            'bibliographic' => 'kbd',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Kabardian',
            'french' => 'kabardien'
        ],
        'kha' => [
            'bibliographic' => 'kha',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Khasi',
            'french' => 'khasi'
        ],
        'khi' => [
            'bibliographic' => 'khi',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Khoisan languages',
            'french' => 'khoïsan, langues'
        ],
        'khm' => [
            'bibliographic' => 'khm',
            'terminologic' => '',
            'alpha-2' => 'km',
            'english' => 'Central Khmer',
            'french' => 'khmer central'
        ],
        'kho' => [
            'bibliographic' => 'kho',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Khotanese; Sakan',
            'french' => 'khotanais; sakan'
        ],
        'kik' => [
            'bibliographic' => 'kik',
            'terminologic' => '',
            'alpha-2' => 'ki',
            'english' => 'Kikuyu; Gikuyu',
            'french' => 'kikuyu'
        ],
        'kin' => [
            'bibliographic' => 'kin',
            'terminologic' => '',
            'alpha-2' => 'rw',
            'english' => 'Kinyarwanda',
            'french' => 'rwanda'
        ],
        'kir' => [
            'bibliographic' => 'kir',
            'terminologic' => '',
            'alpha-2' => 'ky',
            'english' => 'Kirghiz; Kyrgyz',
            'french' => 'kirghiz'
        ],
        'kmb' => [
            'bibliographic' => 'kmb',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Kimbundu',
            'french' => 'kimbundu'
        ],
        'kok' => [
            'bibliographic' => 'kok',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Konkani',
            'french' => 'konkani'
        ],
        'kom' => [
            'bibliographic' => 'kom',
            'terminologic' => '',
            'alpha-2' => 'kv',
            'english' => 'Komi',
            'french' => 'kom'
        ],
        'kon' => [
            'bibliographic' => 'kon',
            'terminologic' => '',
            'alpha-2' => 'kg',
            'english' => 'Kongo',
            'french' => 'kongo'
        ],
        'kor' => [
            'bibliographic' => 'kor',
            'terminologic' => '',
            'alpha-2' => 'ko',
            'english' => 'Korean',
            'french' => 'coréen'
        ],
        'kos' => [
            'bibliographic' => 'kos',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Kosraean',
            'french' => 'kosrae'
        ],
        'kpe' => [
            'bibliographic' => 'kpe',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Kpelle',
            'french' => 'kpellé'
        ],
        'krc' => [
            'bibliographic' => 'krc',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Karachay-Balkar',
            'french' => 'karatchai balkar'
        ],
        'krl' => [
            'bibliographic' => 'krl',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Karelian',
            'french' => 'carélien'
        ],
        'kro' => [
            'bibliographic' => 'kro',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Kru languages',
            'french' => 'krou, langues'
        ],
        'kru' => [
            'bibliographic' => 'kru',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Kurukh',
            'french' => 'kurukh'
        ],
        'kua' => [
            'bibliographic' => 'kua',
            'terminologic' => '',
            'alpha-2' => 'kj',
            'english' => 'Kuanyama; Kwanyama',
            'french' => 'kuanyama; kwanyama'
        ],
        'kum' => [
            'bibliographic' => 'kum',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Kumyk',
            'french' => 'koumyk'
        ],
        'kur' => [
            'bibliographic' => 'kur',
            'terminologic' => '',
            'alpha-2' => 'ku',
            'english' => 'Kurdish',
            'french' => 'kurde'
        ],
        'kut' => [
            'bibliographic' => 'kut',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Kutenai',
            'french' => 'kutenai'
        ],
        'lad' => [
            'bibliographic' => 'lad',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Ladino',
            'french' => 'judéo-espagnol'
        ],
        'lah' => [
            'bibliographic' => 'lah',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Lahnda',
            'french' => 'lahnda'
        ],
        'lam' => [
            'bibliographic' => 'lam',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Lamba',
            'french' => 'lamba'
        ],
        'lao' => [
            'bibliographic' => 'lao',
            'terminologic' => '',
            'alpha-2' => 'lo',
            'english' => 'Lao',
            'french' => 'lao'
        ],
        'lat' => [
            'bibliographic' => 'lat',
            'terminologic' => '',
            'alpha-2' => 'la',
            'english' => 'Latin',
            'french' => 'latin'
        ],
        'lav' => [
            'bibliographic' => 'lav',
            'terminologic' => '',
            'alpha-2' => 'lv',
            'english' => 'Latvian',
            'french' => 'letton'
        ],
        'lez' => [
            'bibliographic' => 'lez',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Lezghian',
            'french' => 'lezghien'
        ],
        'lim' => [
            'bibliographic' => 'lim',
            'terminologic' => '',
            'alpha-2' => 'li',
            'english' => 'Limburgan; Limburger; Limburgish',
            'french' => 'limbourgeois'
        ],
        'lin' => [
            'bibliographic' => 'lin',
            'terminologic' => '',
            'alpha-2' => 'ln',
            'english' => 'Lingala',
            'french' => 'lingala'
        ],
        'lit' => [
            'bibliographic' => 'lit',
            'terminologic' => '',
            'alpha-2' => 'lt',
            'english' => 'Lithuanian',
            'french' => 'lituanien'
        ],
        'lol' => [
            'bibliographic' => 'lol',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Mongo',
            'french' => 'mongo'
        ],
        'loz' => [
            'bibliographic' => 'loz',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Lozi',
            'french' => 'lozi'
        ],
        'ltz' => [
            'bibliographic' => 'ltz',
            'terminologic' => '',
            'alpha-2' => 'lb',
            'english' => 'Luxembourgish; Letzeburgesch',
            'french' => 'luxembourgeois'
        ],
        'lua' => [
            'bibliographic' => 'lua',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Luba-Lulua',
            'french' => 'luba-lulua'
        ],
        'lub' => [
            'bibliographic' => 'lub',
            'terminologic' => '',
            'alpha-2' => 'lu',
            'english' => 'Luba-Katanga',
            'french' => 'luba-katanga'
        ],
        'lug' => [
            'bibliographic' => 'lug',
            'terminologic' => '',
            'alpha-2' => 'lg',
            'english' => 'Ganda',
            'french' => 'ganda'
        ],
        'lui' => [
            'bibliographic' => 'lui',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Luiseno',
            'french' => 'luiseno'
        ],
        'lun' => [
            'bibliographic' => 'lun',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Lunda',
            'french' => 'lunda'
        ],
        'luo' => [
            'bibliographic' => 'luo',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Luo (Kenya and Tanzania)',
            'french' => 'luo (Kenya et Tanzanie)
            '],
        'lus' => [
            'bibliographic' => 'lus',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Lushai',
            'french' => 'lushai'
        ],
        'mac' => [
            'bibliographic' => 'mac',
            'terminologic' => 'mkd',
            'alpha-2' => 'mk',
            'english' => 'Macedonian',
            'french' => 'macédonien'
        ],
        'mad' => [
            'bibliographic' => 'mad',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Madurese',
            'french' => 'madourais'
        ],
        'mag' => [
            'bibliographic' => 'mag',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Magahi',
            'french' => 'magahi'
        ],
        'mah' => [
            'bibliographic' => 'mah',
            'terminologic' => '',
            'alpha-2' => 'mh',
            'english' => 'Marshallese',
            'french' => 'marshall'
        ],
        'mai' => [
            'bibliographic' => 'mai',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Maithili',
            'french' => 'maithili'
        ],
        'mak' => [
            'bibliographic' => 'mak',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Makasar',
            'french' => 'makassar'
        ],
        'mal' => [
            'bibliographic' => 'mal',
            'terminologic' => '',
            'alpha-2' => 'ml',
            'english' => 'Malayalam',
            'french' => 'malayalam'
        ],
        'man' => [
            'bibliographic' => 'man',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Mandingo',
            'french' => 'mandingue'
        ],
        'mao' => [
            'bibliographic' => 'mao',
            'terminologic' => 'mri',
            'alpha-2' => 'mi',
            'english' => 'Maori',
            'french' => 'maori'
        ],
        'map' => [
            'bibliographic' => 'map',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Austronesian languages',
            'french' => 'austronésiennes, langues'
        ],
        'mar' => [
            'bibliographic' => 'mar',
            'terminologic' => '',
            'alpha-2' => 'mr',
            'english' => 'Marathi',
            'french' => 'marathe'
        ],
        'mas' => [
            'bibliographic' => 'mas',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Masai',
            'french' => 'massaï'
        ],
        'may' => [
            'bibliographic' => 'may',
            'terminologic' => 'msa',
            'alpha-2' => 'ms',
            'english' => 'Malay',
            'french' => 'malais'
        ],
        'mdf' => [
            'bibliographic' => 'mdf',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Moksha',
            'french' => 'moksa'
        ],
        'mdr' => [
            'bibliographic' => 'mdr',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Mandar',
            'french' => 'mandar'
        ],
        'men' => [
            'bibliographic' => 'men',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Mende',
            'french' => 'mendé'
        ],
        'mga' => [
            'bibliographic' => 'mga',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Irish, Middle (900-1200)',
            'french' => 'irlandais moyen (900-1200)
            '],
        'mic' => [
            'bibliographic' => 'mic',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => "Mi'kmaq; Micmac",
            'french' => "mi'kmaq; micmac"
        ],
        'min' => [
            'bibliographic' => 'min',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Minangkabau',
            'french' => 'minangkabau'
        ],
        'mis' => [
            'bibliographic' => 'mis',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Uncoded languages',
            'french' => 'langues non codées'
        ],
        'mkh' => [
            'bibliographic' => 'mkh',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Mon-Khmer languages',
            'french' => 'môn-khmer, langues'
        ],
        'mlg' => [
            'bibliographic' => 'mlg',
            'terminologic' => '',
            'alpha-2' => 'mg',
            'english' => 'Malagasy',
            'french' => 'malgache'
        ],
        'mlt' => [
            'bibliographic' => 'mlt',
            'terminologic' => '',
            'alpha-2' => 'mt',
            'english' => 'Maltese',
            'french' => 'maltais'
        ],
        'mnc' => [
            'bibliographic' => 'mnc',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Manchu',
            'french' => 'mandchou'
        ],
        'mni' => [
            'bibliographic' => 'mni',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Manipuri',
            'french' => 'manipuri'
        ],
        'mno' => [
            'bibliographic' => 'mno',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Manobo languages',
            'french' => 'manobo, langues'
        ],
        'moh' => [
            'bibliographic' => 'moh',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Mohawk',
            'french' => 'mohawk'
        ],
        'mon' => [
            'bibliographic' => 'mon',
            'terminologic' => '',
            'alpha-2' => 'mn',
            'english' => 'Mongolian',
            'french' => 'mongol'
        ],
        'mos' => [
            'bibliographic' => 'mos',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Mossi',
            'french' => 'moré'
        ],
        'mul' => [
            'bibliographic' => 'mul',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Multiple languages',
            'french' => 'multilingue'
        ],
        'mun' => [
            'bibliographic' => 'mun',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Munda languages',
            'french' => 'mounda, langues'
        ],
        'mus' => [
            'bibliographic' => 'mus',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Creek',
            'french' => 'muskogee'
        ],
        'mwl' => [
            'bibliographic' => 'mwl',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Mirandese',
            'french' => 'mirandais'
        ],
        'mwr' => [
            'bibliographic' => 'mwr',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Marwari',
            'french' => 'marvari'
        ],
        'myn' => [
            'bibliographic' => 'myn',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Mayan languages',
            'french' => 'maya, langues'
        ],
        'myv' => [
            'bibliographic' => 'myv',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Erzya',
            'french' => 'erza'
        ],
        'nah' => [
            'bibliographic' => 'nah',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Nahuatl languages',
            'french' => 'nahuatl, langues'
        ],
        'nai' => [
            'bibliographic' => 'nai',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'North American Indian languages',
            'french' => 'nord-amérindiennes, langues'
        ],
        'nap' => [
            'bibliographic' => 'nap',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Neapolitan',
            'french' => 'napolitain'
        ],
        'nau' => [
            'bibliographic' => 'nau',
            'terminologic' => '',
            'alpha-2' => 'na',
            'english' => 'Nauru',
            'french' => 'nauruan'
        ],
        'nav' => [
            'bibliographic' => 'nav',
            'terminologic' => '',
            'alpha-2' => 'nv',
            'english' => 'Navajo; Navaho',
            'french' => 'navaho'
        ],
        'nbl' => [
            'bibliographic' => 'nbl',
            'terminologic' => '',
            'alpha-2' => 'nr',
            'english' => 'Ndebele, South; South Ndebele',
            'french' => 'ndébélé du Sud'
        ],
        'nde' => [
            'bibliographic' => 'nde',
            'terminologic' => '',
            'alpha-2' => 'nd',
            'english' => 'Ndebele, North; North Ndebele',
            'french' => 'ndébélé du Nord'
        ],
        'ndo' => [
            'bibliographic' => 'ndo',
            'terminologic' => '',
            'alpha-2' => 'ng',
            'english' => 'Ndonga',
            'french' => 'ndonga'
        ],
        'nds' => [
            'bibliographic' => 'nds',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Low German; Low Saxon; German, Low; Saxon, Low',
            'french' => 'bas allemand; bas saxon; allemand, bas; saxon, bas'
        ],
        'nep' => [
            'bibliographic' => 'nep',
            'terminologic' => '',
            'alpha-2' => 'ne',
            'english' => 'Nepali',
            'french' => 'népalais'
        ],
        'new' => [
            'bibliographic' => 'new',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Nepal Bhasa; Newari',
            'french' => 'nepal bhasa; newari'
        ],
        'nia' => [
            'bibliographic' => 'nia',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Nias',
            'french' => 'nias'
        ],
        'nic' => [
            'bibliographic' => 'nic',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Niger-Kordofanian languages',
            'french' => 'nigéro-kordofaniennes, langues'
        ],
        'niu' => [
            'bibliographic' => 'niu',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Niuean',
            'french' => 'niué'
        ],
        'nno' => [
            'bibliographic' => 'nno',
            'terminologic' => '',
            'alpha-2' => 'nn',
            'english' => 'Norwegian Nynorsk; Nynorsk, Norwegian',
            'french' => 'norvégien nynorsk; nynorsk, norvégien'
        ],
        'nob' => [
            'bibliographic' => 'nob',
            'terminologic' => '',
            'alpha-2' => 'nb',
            'english' => 'Bokmål, Norwegian; Norwegian Bokmål',
            'french' => 'norvégien bokmål'
        ],
        'nog' => [
            'bibliographic' => 'nog',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Nogai',
            'french' => 'nogaï; nogay'
        ],
        'non' => [
            'bibliographic' => 'non',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Norse, Old',
            'french' => 'norrois, vieux'
        ],
        'nor' => [
            'bibliographic' => 'nor',
            'terminologic' => '',
            'alpha-2' => 'no',
            'english' => 'Norwegian',
            'french' => 'norvégien'
        ],
        'nqo' => [
            'bibliographic' => 'nqo',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => "N'Ko",
            'french' => "n'ko"
        ],
        'nso' => [
            'bibliographic' => 'nso',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Pedi; Sepedi; Northern Sotho',
            'french' => 'pedi; sepedi; sotho du Nord'
        ],
        'nub' => [
            'bibliographic' => 'nub',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Nubian languages',
            'french' => 'nubiennes, langues'
        ],
        'nwc' => [
            'bibliographic' => 'nwc',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Classical Newari; Old Newari; Classical Nepal Bhasa',
            'french' => 'newari classique'
        ],
        'nya' => [
            'bibliographic' => 'nya',
            'terminologic' => '',
            'alpha-2' => 'ny',
            'english' => 'Chichewa; Chewa; Nyanja',
            'french' => 'chichewa; chewa; nyanja'
        ],
        'nym' => [
            'bibliographic' => 'nym',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Nyamwezi',
            'french' => 'nyamwezi'
        ],
        'nyn' => [
            'bibliographic' => 'nyn',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Nyankole',
            'french' => 'nyankolé'
        ],
        'nyo' => [
            'bibliographic' => 'nyo',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Nyoro',
            'french' => 'nyoro'
        ],
        'nzi' => [
            'bibliographic' => 'nzi',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Nzima',
            'french' => 'nzema'
        ],
        'oci' => [
            'bibliographic' => 'oci',
            'terminologic' => '',
            'alpha-2' => 'oc',
            'english' => 'Occitan (post 1500); Provençal',
            'french' => 'occitan (après 1500); provençal'
        ],
        'oji' => [
            'bibliographic' => 'oji',
            'terminologic' => '',
            'alpha-2' => 'oj',
            'english' => 'Ojibwa',
            'french' => 'ojibwa'
        ],
        'ori' => [
            'bibliographic' => 'ori',
            'terminologic' => '',
            'alpha-2' => 'or',
            'english' => 'Oriya',
            'french' => 'oriya'
        ],
        'orm' => [
            'bibliographic' => 'orm',
            'terminologic' => '',
            'alpha-2' => 'om',
            'english' => 'Oromo',
            'french' => 'galla'
        ],
        'osa' => [
            'bibliographic' => 'osa',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Osage',
            'french' => 'osage'
        ],
        'oss' => [
            'bibliographic' => 'oss',
            'terminologic' => '',
            'alpha-2' => 'os',
            'english' => 'Ossetian; Ossetic',
            'french' => 'ossète'
        ],
        'ota' => [
            'bibliographic' => 'ota',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Turkish, Ottoman (1500-1928)',
            'french' => 'turc ottoman (1500-1928)
            '],
        'oto' => [
            'bibliographic' => 'oto',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Otomian languages',
            'french' => 'otomi, langues'
        ],
        'paa' => [
            'bibliographic' => 'paa',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Papuan languages',
            'french' => 'papoues, langues'
        ],
        'pag' => [
            'bibliographic' => 'pag',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Pangasinan',
            'french' => 'pangasinan'
        ],
        'pal' => [
            'bibliographic' => 'pal',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Pahlavi',
            'french' => 'pahlavi'
        ],
        'pam' => [
            'bibliographic' => 'pam',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Pampanga; Kapampangan',
            'french' => 'pampangan'
        ],
        'pan' => [
            'bibliographic' => 'pan',
            'terminologic' => '',
            'alpha-2' => 'pa',
            'english' => 'Panjabi; Punjabi',
            'french' => 'pendjabi'
        ],
        'pap' => [
            'bibliographic' => 'pap',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Papiamento',
            'french' => 'papiamento'
        ],
        'pau' => [
            'bibliographic' => 'pau',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Palauan',
            'french' => 'palau'
        ],
        'peo' => [
            'bibliographic' => 'peo',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Persian, Old (ca.600-400 B.C.)',
            'french' => 'perse, vieux (ca. 600-400 av. J.-C.
        )'],
        'per' => [
            'bibliographic' => 'per',
            'terminologic' => 'fas',
            'alpha-2' => 'fa',
            'english' => 'Persian',
            'french' => 'persan'
        ],
        'phi' => [
            'bibliographic' => 'phi',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Philippine languages',
            'french' => 'philippines, langues'
        ],
        'phn' => [
            'bibliographic' => 'phn',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Phoenician',
            'french' => 'phénicien'
        ],
        'pli' => [
            'bibliographic' => 'pli',
            'terminologic' => '',
            'alpha-2' => 'pi',
            'english' => 'Pali',
            'french' => 'pali'
        ],
        'pol' => [
            'bibliographic' => 'pol',
            'terminologic' => '',
            'alpha-2' => 'pl',
            'english' => 'Polish',
            'french' => 'polonais'
        ],
        'pon' => [
            'bibliographic' => 'pon',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Pohnpeian',
            'french' => 'pohnpei'
        ],
        'por' => [
            'bibliographic' => 'por',
            'terminologic' => '',
            'alpha-2' => 'pt',
            'english' => 'Portuguese',
            'french' => 'portugais'
        ],
        'pra' => [
            'bibliographic' => 'pra',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Prakrit languages',
            'french' => 'prâkrit, langues'
        ],
        'pro' => [
            'bibliographic' => 'pro',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Provençal, Old (to 1500)',
            'french' => "provençal ancien (jusqu'à 1500)"
        ],
        'pus' => [
            'bibliographic' => 'pus',
            'terminologic' => '',
            'alpha-2' => 'ps',
            'english' => 'Pushto; Pashto',
            'french' => 'pachto'
        ],
        'qaa-qtz' => [
            'bibliographic' => 'qaa-qtz',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Reserved for local use',
            'french' => "réservée à l'usage local"
        ],
        'que' => [
            'bibliographic' => 'que',
            'terminologic' => '',
            'alpha-2' => 'qu',
            'english' => 'Quechua',
            'french' => 'quechua'
        ],
        'raj' => [
            'bibliographic' => 'raj',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Rajasthani',
            'french' => 'rajasthani'
        ],
        'rap' => [
            'bibliographic' => 'rap',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Rapanui',
            'french' => 'rapanui'
        ],
        'rar' => [
            'bibliographic' => 'rar',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Rarotongan; Cook Islands Maori',
            'french' => 'rarotonga; maori des îles Cook'
        ],
        'roa' => [
            'bibliographic' => 'roa',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Romance languages',
            'french' => 'romanes, langues'
        ],
        'roh' => [
            'bibliographic' => 'roh',
            'terminologic' => '',
            'alpha-2' => 'rm',
            'english' => 'Romansh',
            'french' => 'romanche'
        ],
        'rom' => [
            'bibliographic' => 'rom',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Romany',
            'french' => 'tsigane'
        ],
        'rum' => [
            'bibliographic' => 'rum',
            'terminologic' => 'ron',
            'alpha-2' => 'ro',
            'english' => 'Romanian; Moldavian; Moldovan',
            'french' => 'roumain; moldave'
        ],
        'run' => [
            'bibliographic' => 'run',
            'terminologic' => '',
            'alpha-2' => 'rn',
            'english' => 'Rundi',
            'french' => 'rundi'
        ],
        'rup' => [
            'bibliographic' => 'rup',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Aromanian; Arumanian; Macedo-Romanian',
            'french' => 'aroumain; macédo-roumain'
        ],
        'rus' => [
            'bibliographic' => 'rus',
            'terminologic' => '',
            'alpha-2' => 'ru',
            'english' => 'Russian',
            'french' => 'russe'
        ],
        'sad' => [
            'bibliographic' => 'sad',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Sandawe',
            'french' => 'sandawe'
        ],
        'sag' => [
            'bibliographic' => 'sag',
            'terminologic' => '',
            'alpha-2' => 'sg',
            'english' => 'Sango',
            'french' => 'sango'
        ],
        'sah' => [
            'bibliographic' => 'sah',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Yakut',
            'french' => 'iakoute'
        ],
        'sai' => [
            'bibliographic' => 'sai',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'South American Indian (Other)',
            'french' => "indiennes d'Amérique du Sud, autres langues"
        ],
        'sal' => [
            'bibliographic' => 'sal',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Salishan languages',
            'french' => 'salishennes, langues'
        ],
        'sam' => [
            'bibliographic' => 'sam',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Samaritan Aramaic',
            'french' => 'samaritain'
        ],
        'san' => [
            'bibliographic' => 'san',
            'terminologic' => '',
            'alpha-2' => 'sa',
            'english' => 'Sanskrit',
            'french' => 'sanskrit'
        ],
        'sas' => [
            'bibliographic' => 'sas',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Sasak',
            'french' => 'sasak'
        ],
        'sat' => [
            'bibliographic' => 'sat',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Santali',
            'french' => 'santal'
        ],
        'scn' => [
            'bibliographic' => 'scn',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Sicilian',
            'french' => 'sicilien'
        ],
        'sco' => [
            'bibliographic' => 'sco',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Scots',
            'french' => 'écossais'
        ],
        'sel' => [
            'bibliographic' => 'sel',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Selkup',
            'french' => 'selkoupe'
        ],
        'sem' => [
            'bibliographic' => 'sem',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Semitic languages',
            'french' => 'sémitiques, langues'
        ],
        'sga' => [
            'bibliographic' => 'sga',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Irish, Old (to 900)',
            'french' => "irlandais ancien (jusqu'à 900)"
        ],
        'sgn' => [
            'bibliographic' => 'sgn',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Sign Languages',
            'french' => 'langues des signes'
        ],
        'shn' => [
            'bibliographic' => 'shn',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Shan',
            'french' => 'chan'
        ],
        'sid' => [
            'bibliographic' => 'sid',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Sidamo',
            'french' => 'sidamo'
        ],
        'sin' => [
            'bibliographic' => 'sin',
            'terminologic' => '',
            'alpha-2' => 'si',
            'english' => 'Sinhala; Sinhalese',
            'french' => 'singhalais'
        ],
        'sio' => [
            'bibliographic' => 'sio',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Siouan languages',
            'french' => 'sioux, langues'
        ],
        'sit' => [
            'bibliographic' => 'sit',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Sino-Tibetan languages',
            'french' => 'sino-tibétaines, langues'
        ],
        'sla' => [
            'bibliographic' => 'sla',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Slavic languages',
            'french' => 'slaves, langues'
        ],
        'slo' => [
            'bibliographic' => 'slo',
            'terminologic' => 'slk',
            'alpha-2' => 'sk',
            'english' => 'Slovak',
            'french' => 'slovaque'
        ],
        'slv' => [
            'bibliographic' => 'slv',
            'terminologic' => '',
            'alpha-2' => 'sl',
            'english' => 'Slovenian',
            'french' => 'slovène'
        ],
        'sma' => [
            'bibliographic' => 'sma',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Southern Sami',
            'french' => 'sami du Sud'
        ],
        'sme' => [
            'bibliographic' => 'sme',
            'terminologic' => '',
            'alpha-2' => 'se',
            'english' => 'Northern Sami',
            'french' => 'sami du Nord'
        ],
        'smi' => [
            'bibliographic' => 'smi',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Sami languages',
            'french' => 'sames, langues'
        ],
        'smj' => [
            'bibliographic' => 'smj',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Lule Sami',
            'french' => 'sami de Lule'
        ],
        'smn' => [
            'bibliographic' => 'smn',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Inari Sami',
            'french' => "sami d'Inari"
        ],
        'smo' => [
            'bibliographic' => 'smo',
            'terminologic' => '',
            'alpha-2' => 'sm',
            'english' => 'Samoan',
            'french' => 'samoan'
        ],
        'sms' => [
            'bibliographic' => 'sms',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Skolt Sami',
            'french' => 'sami skolt'
        ],
        'sna' => [
            'bibliographic' => 'sna',
            'terminologic' => '',
            'alpha-2' => 'sn',
            'english' => 'Shona',
            'french' => 'shona'
        ],
        'snd' => [
            'bibliographic' => 'snd',
            'terminologic' => '',
            'alpha-2' => 'sd',
            'english' => 'Sindhi',
            'french' => 'sindhi'
        ],
        'snk' => [
            'bibliographic' => 'snk',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Soninke',
            'french' => 'soninké'
        ],
        'sog' => [
            'bibliographic' => 'sog',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Sogdian',
            'french' => 'sogdien'
        ],
        'som' => [
            'bibliographic' => 'som',
            'terminologic' => '',
            'alpha-2' => 'so',
            'english' => 'Somali',
            'french' => 'somali'
        ],
        'son' => [
            'bibliographic' => 'son',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Songhai languages',
            'french' => 'songhai, langues'
        ],
        'sot' => [
            'bibliographic' => 'sot',
            'terminologic' => '',
            'alpha-2' => 'st',
            'english' => 'Sotho, Southern',
            'french' => 'sotho du Sud'
        ],
        'spa' => [
            'bibliographic' => 'spa',
            'terminologic' => '',
            'alpha-2' => 'es',
            'english' => 'Spanish; Castilian',
            'french' => 'espagnol; castillan'
        ],
        'srd' => [
            'bibliographic' => 'srd',
            'terminologic' => '',
            'alpha-2' => 'sc',
            'english' => 'Sardinian',
            'french' => 'sarde'
        ],
        'srn' => [
            'bibliographic' => 'srn',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Sranan Tongo',
            'french' => 'sranan tongo'
        ],
        'srp' => [
            'bibliographic' => 'srp',
            'terminologic' => '',
            'alpha-2' => 'sr',
            'english' => 'Serbian',
            'french' => 'serbe'
        ],
        'srr' => [
            'bibliographic' => 'srr',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Serer',
            'french' => 'sérère'
        ],
        'ssa' => [
            'bibliographic' => 'ssa',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Nilo-Saharan languages',
            'french' => 'nilo-sahariennes, langues'
        ],
        'ssw' => [
            'bibliographic' => 'ssw',
            'terminologic' => '',
            'alpha-2' => 'ss',
            'english' => 'Swati',
            'french' => 'swati'
        ],
        'suk' => [
            'bibliographic' => 'suk',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Sukuma',
            'french' => 'sukuma'
        ],
        'sun' => [
            'bibliographic' => 'sun',
            'terminologic' => '',
            'alpha-2' => 'su',
            'english' => 'Sundanese',
            'french' => 'soundanais'
        ],
        'sus' => [
            'bibliographic' => 'sus',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Susu',
            'french' => 'soussou'
        ],
        'sux' => [
            'bibliographic' => 'sux',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Sumerian',
            'french' => 'sumérien'
        ],
        'swa' => [
            'bibliographic' => 'swa',
            'terminologic' => '',
            'alpha-2' => 'sw',
            'english' => 'Swahili',
            'french' => 'swahili'
        ],
        'swe' => [
            'bibliographic' => 'swe',
            'terminologic' => '',
            'alpha-2' => 'sv',
            'english' => 'Swedish',
            'french' => 'suédois'
        ],
        'syc' => [
            'bibliographic' => 'syc',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Classical Syriac',
            'french' => 'syriaque classique'
        ],
        'syr' => [
            'bibliographic' => 'syr',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Syriac',
            'french' => 'syriaque'
        ],
        'tah' => [
            'bibliographic' => 'tah',
            'terminologic' => '',
            'alpha-2' => 'ty',
            'english' => 'Tahitian',
            'french' => 'tahitien'
        ],
        'tai' => [
            'bibliographic' => 'tai',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Tai languages',
            'french' => 'tai, langues'
        ],
        'tam' => [
            'bibliographic' => 'tam',
            'terminologic' => '',
            'alpha-2' => 'ta',
            'english' => 'Tamil',
            'french' => 'tamoul'
        ],
        'tat' => [
            'bibliographic' => 'tat',
            'terminologic' => '',
            'alpha-2' => 'tt',
            'english' => 'Tatar',
            'french' => 'tatar'
        ],
        'tel' => [
            'bibliographic' => 'tel',
            'terminologic' => '',
            'alpha-2' => 'te',
            'english' => 'Telugu',
            'french' => 'télougou'
        ],
        'tem' => [
            'bibliographic' => 'tem',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Timne',
            'french' => 'temne'
        ],
        'ter' => [
            'bibliographic' => 'ter',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Tereno',
            'french' => 'tereno'
        ],
        'tet' => [
            'bibliographic' => 'tet',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Tetum',
            'french' => 'tetum'
        ],
        'tgk' => [
            'bibliographic' => 'tgk',
            'terminologic' => '',
            'alpha-2' => 'tg',
            'english' => 'Tajik',
            'french' => 'tadjik'
        ],
        'tgl' => [
            'bibliographic' => 'tgl',
            'terminologic' => '',
            'alpha-2' => 'tl',
            'english' => 'Tagalog',
            'french' => 'tagalog'
        ],
        'tha' => [
            'bibliographic' => 'tha',
            'terminologic' => '',
            'alpha-2' => 'th',
            'english' => 'Thai',
            'french' => 'thaï'
        ],
        'tib' => [
            'bibliographic' => 'tib',
            'terminologic' => 'bod',
            'alpha-2' => 'bo',
            'english' => 'Tibetan',
            'french' => 'tibétain'
        ],
        'tig' => [
            'bibliographic' => 'tig',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Tigre',
            'french' => 'tigré'
        ],
        'tir' => [
            'bibliographic' => 'tir',
            'terminologic' => '',
            'alpha-2' => 'ti',
            'english' => 'Tigrinya',
            'french' => 'tigrigna'
        ],
        'tiv' => [
            'bibliographic' => 'tiv',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Tiv',
            'french' => 'tiv'
        ],
        'tkl' => [
            'bibliographic' => 'tkl',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Tokelau',
            'french' => 'tokelau'
        ],
        'tlh' => [
            'bibliographic' => 'tlh',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Klingon; tlhIngan-Hol',
            'french' => 'klingon'
        ],
        'tli' => [
            'bibliographic' => 'tli',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Tlingit',
            'french' => 'tlingit'
        ],
        'tmh' => [
            'bibliographic' => 'tmh',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Tamashek',
            'french' => 'tamacheq'
        ],
        'tog' => [
            'bibliographic' => 'tog',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Tonga (Nyasa)',
            'french' => 'tonga (Nyasa)
            '],
        'ton' => [
            'bibliographic' => 'ton',
            'terminologic' => '',
            'alpha-2' => 'to',
            'english' => 'Tonga (Tonga Islands)',
            'french' => 'tongan (Îles Tonga)
            '],
        'tpi' => [
            'bibliographic' => 'tpi',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Tok Pisin',
            'french' => 'tok pisin'
        ],
        'tsi' => [
            'bibliographic' => 'tsi',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Tsimshian',
            'french' => 'tsimshian'
        ],
        'tsn' => [
            'bibliographic' => 'tsn',
            'terminologic' => '',
            'alpha-2' => 'tn',
            'english' => 'Tswana',
            'french' => 'tswana'
        ],
        'tso' => [
            'bibliographic' => 'tso',
            'terminologic' => '',
            'alpha-2' => 'ts',
            'english' => 'Tsonga',
            'french' => 'tsonga'
        ],
        'tuk' => [
            'bibliographic' => 'tuk',
            'terminologic' => '',
            'alpha-2' => 'tk',
            'english' => 'Turkmen',
            'french' => 'turkmène'
        ],
        'tum' => [
            'bibliographic' => 'tum',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Tumbuka',
            'french' => 'tumbuka'
        ],
        'tup' => [
            'bibliographic' => 'tup',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Tupi languages',
            'french' => 'tupi, langues'
        ],
        'tur' => [
            'bibliographic' => 'tur',
            'terminologic' => '',
            'alpha-2' => 'tr',
            'english' => 'Turkish',
            'french' => 'turc'
        ],
        'tut' => [
            'bibliographic' => 'tut',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Altaic languages',
            'french' => 'altaïques, langues'
        ],
        'tvl' => [
            'bibliographic' => 'tvl',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Tuvalu',
            'french' => 'tuvalu'
        ],
        'twi' => [
            'bibliographic' => 'twi',
            'terminologic' => '',
            'alpha-2' => 'tw',
            'english' => 'Twi',
            'french' => 'twi'
        ],
        'tyv' => [
            'bibliographic' => 'tyv',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Tuvinian',
            'french' => 'touva'
        ],
        'udm' => [
            'bibliographic' => 'udm',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Udmurt',
            'french' => 'oudmourte'
        ],
        'uga' => [
            'bibliographic' => 'uga',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Ugaritic',
            'french' => 'ougaritique'
        ],
        'uig' => [
            'bibliographic' => 'uig',
            'terminologic' => '',
            'alpha-2' => 'ug',
            'english' => 'Uighur; Uyghur',
            'french' => 'ouïgour'
        ],
        'ukr' => [
            'bibliographic' => 'ukr',
            'terminologic' => '',
            'alpha-2' => 'uk',
            'english' => 'Ukrainian',
            'french' => 'ukrainien'
        ],
        'umb' => [
            'bibliographic' => 'umb',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Umbundu',
            'french' => 'umbundu'
        ],
        'und' => [
            'bibliographic' => 'und',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Undetermined',
            'french' => 'indéterminée'
        ],
        'urd' => [
            'bibliographic' => 'urd',
            'terminologic' => '',
            'alpha-2' => 'ur',
            'english' => 'Urdu',
            'french' => 'ourdou'
        ],
        'uzb' => [
            'bibliographic' => 'uzb',
            'terminologic' => '',
            'alpha-2' => 'uz',
            'english' => 'Uzbek',
            'french' => 'ouszbek'
        ],
        'vai' => [
            'bibliographic' => 'vai',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Vai',
            'french' => 'vaï'
        ],
        'ven' => [
            'bibliographic' => 'ven',
            'terminologic' => '',
            'alpha-2' => 've',
            'english' => 'Venda',
            'french' => 'venda'
        ],
        'vie' => [
            'bibliographic' => 'vie',
            'terminologic' => '',
            'alpha-2' => 'vi',
            'english' => 'Vietnamese',
            'french' => 'vietnamien'
        ],
        'vol' => [
            'bibliographic' => 'vol',
            'terminologic' => '',
            'alpha-2' => 'vo',
            'english' => 'Volapük',
            'french' => 'volapük'
        ],
        'vot' => [
            'bibliographic' => 'vot',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Votic',
            'french' => 'vote'
        ],
        'wak' => [
            'bibliographic' => 'wak',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Wakashan languages',
            'french' => 'wakashanes, langues'
        ],
        'wal' => [
            'bibliographic' => 'wal',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Walamo',
            'french' => 'walamo'
        ],
        'war' => [
            'bibliographic' => 'war',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Waray',
            'french' => 'waray'
        ],
        'was' => [
            'bibliographic' => 'was',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Washo',
            'french' => 'washo'
        ],
        'wel' => [
            'bibliographic' => 'wel',
            'terminologic' => 'cym',
            'alpha-2' => 'cy',
            'english' => 'Welsh',
            'french' => 'gallois'
        ],
        'wen' => [
            'bibliographic' => 'wen',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Sorbian languages',
            'french' => 'sorabes, langues'
        ],
        'wln' => [
            'bibliographic' => 'wln',
            'terminologic' => '',
            'alpha-2' => 'wa',
            'english' => 'Walloon',
            'french' => 'wallon'
        ],
        'wol' => [
            'bibliographic' => 'wol',
            'terminologic' => '',
            'alpha-2' => 'wo',
            'english' => 'Wolof',
            'french' => 'wolof'
        ],
        'xal' => [
            'bibliographic' => 'xal',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Kalmyk; Oirat',
            'french' => 'kalmouk; oïrat'
        ],
        'xho' => [
            'bibliographic' => 'xho',
            'terminologic' => '',
            'alpha-2' => 'xh',
            'english' => 'Xhosa',
            'french' => 'xhosa'
        ],
        'yao' => [
            'bibliographic' => 'yao',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Yao',
            'french' => 'yao'
        ],
        'yap' => [
            'bibliographic' => 'yap',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Yapese',
            'french' => 'yapois'
        ],
        'yid' => [
            'bibliographic' => 'yid',
            'terminologic' => '',
            'alpha-2' => 'yi',
            'english' => 'Yiddish',
            'french' => 'yiddish'
        ],
        'yor' => [
            'bibliographic' => 'yor',
            'terminologic' => '',
            'alpha-2' => 'yo',
            'english' => 'Yoruba',
            'french' => 'yoruba'
        ],
        'ypk' => [
            'bibliographic' => 'ypk',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Yupik languages',
            'french' => 'yupik, langues'
        ],
        'zap' => [
            'bibliographic' => 'zap',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Zapotec',
            'french' => 'zapotèque'
        ],
        'zbl' => [
            'bibliographic' => 'zbl',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Blissymbols; Blissymbolics; Bliss',
            'french' => 'symboles Bliss; Bliss'
        ],
        'zen' => [
            'bibliographic' => 'zen',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Zenaga',
            'french' => 'zenaga'
        ],
        'zgh' => [
            'bibliographic' => 'zgh',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Standard Moroccan Tamazight',
            'french' => 'amazighe standard marocain'
        ],
        'zha' => [
            'bibliographic' => 'zha',
            'terminologic' => '',
            'alpha-2' => 'za',
            'english' => 'Zhuang; Chuang',
            'french' => 'zhuang; chuang'
        ],
        'znd' => [
            'bibliographic' => 'znd',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Zande languages',
            'french' => 'zandé, langues'
        ],
        'zul' => [
            'bibliographic' => 'zul',
            'terminologic' => '',
            'alpha-2' => 'zu',
            'english' => 'Zulu',
            'french' => 'zoulou'
        ],
        'zun' => [
            'bibliographic' => 'zun',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Zuni',
            'french' => 'zuni'
        ],
        'zxx' => [
            'bibliographic' => 'zxx',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'No linguistic content; Not applicable',
            'french' => 'pas de contenu linguistique; non applicable'
        ],
        'zza' => [
            'bibliographic' => 'zza',
            'terminologic' => '',
            'alpha-2' => '',
            'english' => 'Zaza; Dimili; Dimli; Kirdki; Kirmanjki; Zazaki',
            'french' => 'zaza; dimili; dimli; kirdki; kirmanjki; zazaki'
        ],
    ];

    // Hold the cached data if a transformation was made.
    private static $cache = [];

    /**
     * Returns a list of the languages based on the "bibliograhpic".
     *
     * @return An array of language data.
     */
    final public static function getLanguages()
    {
        return self::$languages;
    }

    /**
     * An alias for getLanguages.
     *
     * @return An array of language data.
     */
    final public static function getLanguagesByBibliographic()
    {
        return self::getLanguages();
    }

    /**
     * Returns a list of the languages based on the "terminologic".
     *
     * @return An array of language data.
     */
    final public static function getLanguagesByTerminologic()
    {
        return self::filterLanguagesByKey('terminologic');
    }

    /**
     * Returns a list of the languages based on the "alpha-2".
     *
     * @return An array of language data.
     */
    final public static function getLanguagesByAlpha2()
    {
        return self::filterLanguagesByKey('alpha-2');
    }

    /**
     * Returns a list of the languages based on the English name.
     *
     * @return An array of language data.
     */
    final public static function getLanguagesByEnglish()
    {
        return self::filterLanguagesByKey('english');
    }

    /**
     * Returns a list of the languages based on the French name.
     *
     * @return An array of language data.
     */
    final public static function getLanguagesByFrench()
    {
        return self::filterLanguagesByKey('french');
    }

    final private static function filterLanguagesByKey(string $key)
    {
        if (array_key_exists($key, self::$cache) && self::$cache[$key]) {
            return self::$cache[$key];
        }


        $languages = [];

        foreach (self::getLanguages() as $language) {
            if ($language[$key]) {
                $languages[$language[$key]] = $language;
            }
        }

        self::$cache[$key] = $languages;

        return $languages;
    }
}
