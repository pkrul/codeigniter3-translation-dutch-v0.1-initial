<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014, Pieter Krul
 * Copyright (c) 2014, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('Directe toegang tot scripts is niet toegestaan');

$lang['db_invalid_connection_str'] = 'Om de instelling voor de database te kunnen bepalen via de connectiegegevens, dat lukt me niet. Dus.. ';
$lang['db_unable_to_connect'] = 'Om een verbinding naar de database te maken met de opgegeven informatie, dat lukt me niet. Dus..';
$lang['db_unable_to_select'] = 'Om deze database te benaderen, dat lukt me niet: %s';
$lang['db_unable_to_create'] = 'Om deze database aan te maken, dat lukt me niet: %s';
$lang['db_invalid_query'] = 'De aan de database gestelde vraag is niet echt valide, dus..';
$lang['db_must_set_table'] = 'Geef de naam van een tabel in de database op. Dat is echt nodig, dus..';
$lang['db_must_use_set'] = 'De database vindt dat je, als je een regel wilt veranderen, de "Set"-methode moet proberen. Ja?';
$lang['db_must_use_index'] = 'De database vindt dat je de naam van een index moet opgeven voor deze batch-updates. Ja?';
$lang['db_batch_missing_index'] = 'De opgegeven index ontbreekt, maar er zijn wel regels voor een batch update. Dus..';
$lang['db_must_use_where'] = 'Updates zijn niet toegestaan zonder een "WHERE" clausule. Dus..';
$lang['db_del_must_use_where'] = 'Verwijderingen zijn niet toegestaan zonder een "WHERE" of "LIKE" clausule. Dat vindt de database echt niet leuk. ';
$lang['db_field_param_missing'] = 'Om velden te kunnen ophalen moet de naam van de tabel waarin ze staan ook genoemd worden. Ja?';
$lang['db_unsupported_function'] = 'Die functie wordt door deze versie van de database niet ondersteund. Dus..';
$lang['db_transaction_failure'] = 'Transactiefout: Rollback is uitgevoerd. Dus..';
$lang['db_unable_to_drop'] = 'Om de opgegeven database te verwijderen van het systeem, dat lukt me niet. Dus..';
$lang['db_unsupported_feature'] = 'Het database platform heeft deze mogelijkheid helemaal niet. Dus..  ';
$lang['db_unsupported_compression'] = 'Deze server kent deze compressiemethode helemaal niet. Dus..  ';
$lang['db_filepath_error'] = 'Ik kan helemaal niet schrijven naar het genoemde bestand. Dus.. ';
$lang['db_invalid_cache_path'] = 'Ik kan helemaal niet schrijven naar dit cachebestand, en weet ook niet of dit wel het juiste bestand is. Ja?  ';
$lang['db_table_name_required'] = 'Voor deze actie zou de database graag de naam van een tabel willen weten.  ';
$lang['db_column_name_required'] = 'Voor deze actie zou de database graag de naam van een kolom willen weten.  ';
$lang['db_column_definition_required'] = 'Voor deze actie zou de database graag de definitie van een kolom willen weten. Dus..';
$lang['db_unable_to_set_charset'] = 'Ik kan de karakterset voor de clientverbinding niet instellen: %s';
$lang['db_error_heading'] = 'De database heeft opgemerkt dat er een fout onstaan is. Dus..';

/* End of file db_lang.php */
/* Location: ./application/language/dutch/db_lang.php */
