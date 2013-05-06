<?php
	
/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-emails.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php

        Finnish translation: kyyberi (jarkko.moilanen@ossoil.com)
	Last update: 6.5.2013
*/

	return array(
		'a_commented_body' => "Vastaukseesi kysymyksessä ^site_title on uusi kommentti käyttäjältä ^c_handle:\n\n^open^c_content^close\n\nVastauksesi oli: \n\n^open^c_context^close\n\nVoit vastata lisäämällä oman kommenttisi:\n\n^url\n\nKiitos,\n\n^site_title",
		'a_commented_subject' => 'Vastaustasi kysymyksessä ^site_title on kommentoitu',

		'a_followed_body' => "Vastaukseesi liittyen kysymykseen ^site_title on lisätty liittyvä kysymys, lisääjä: ^q_handle:\n\n^open^q_title^close\n\nVastauksesi oli:\n\n^open^a_content^close\n\nAlla olevan linkin kautta voit vastata uuteen kysymykseen:\n\n^url\n\nKiitos,\n\n^site_title",
		'a_followed_subject' => 'Vastaukseesi kysymykseen ^site_title liittyen on tehty uusi liittyvä kysymys',

		'a_selected_body' => "Onnittelut! Vastauksesi kysymykseen ^site_title on valittu parhaaksi, valinnan tekijä ^s_handle:\n\n^open^a_content^close\n\nKysymys oli:\n\n^open^q_title^close\n\nAlla olevan linkin kautta näet vastauksesi:\n\n^url\n\nKiitos,\n\n^site_title",
		'a_selected_subject' => 'Vastauksesi kysymykseen ^site_title on valittu!',

		'c_commented_body' => "Käyttäjä ^c_handle on lisännyt kommentin sinun kommenttisi jälkeen liittyen kysymykseen ^site_title:\n\n^open^c_content^close\n\nKeskustelun kulku on ollut:\n\n^open^c_context^close\n\nAlla olevan linkin kautta voit vastata kommenttiin:\n\n^url\n\nKiitos,\n\n^site_title",
		'c_commented_subject' => 'Kommenttisi kysymykseen ^site_title on lisätty',

		'confirm_body' => "Avaa alla oleva linkki vahvistaaksesi sähköpostiosoitteesi palvelussa ^site_title.\n\n^url\n\nKiitos,\n^site_title",
		'confirm_subject' => '^site_title - Sähköpostin vahvistus',

		'feedback_body' => "Kommentit:\n^message\n\nNimi:\n^name\n\nSähköposti:\n^email\n\nEdellinen sivu:\n^previous\n\nKäyttäjä:\n^url\n\nIP osoite:\n^ip\n\nSelain:\n^browser",
		'feedback_subject' => '^ Palaute',

		'flagged_body' => "Käyttäjän ^p_handle kirjoitus on liputettu ^flags:\n\n^open^p_context^close\n\nAvaa kirjoitus alla olevasta linkistä:\n\n^url\n\nKiitos,\n\n^site_title",
		'flagged_subject' => '^site_title sisältää liputetun kirjoituksen',

		'moderate_body' => "Käyttäjän ^p_handle kirjoitus vaatii hyväksyntääsi:\n\n^open^p_context^close\n\nAlla olevan linkin kautta voit hyväksyä tai hylätä kirjoituksen:\n\n^url\n\nKiitos,\n\n^site_title",
		'moderate_subject' => '^site_title - moderointia tarvitaan',

		'new_password_body' => "Uusi salasanasi palveluun ^site_title on alla.\n\nSalasana: ^password\n\nOn suositeltavaa, että vaihdat salasanan heti kirjauduttuasi sisään.\n\nKiitos,\n^site_title\n^url",
		'new_password_subject' => '^site_title - Uusi salasanasi (vaihda ensitilassa!)',

		'private_message_body' => "Sinulle on lähetetty yksityinen viesti käyttäjältä ^f_handle palvelussa ^site_title:\n\n^open^message^close\n\n^moreKiitos,\n\n^site_title\n\n\nVoit estää yksityisviestien lähettämisen käyttäjätilisi asetuksista:\n^a_url",
		'private_message_info' => "Lisää tietoa käyttäjästä ^f_handle:\n\n^url\n\n",
		'private_message_reply' => "Avaa alla oleva linkki vastataksesi käyttäjälle ^f_handle yksityisesti:\n\n^url\n\n",
		'private_message_subject' => 'Yksityisviesti käyttäjältä: ^f_handle palvelussa ^site_title',

		'q_answered_body' => "Kysymykseesi ^site_title -palvelussa on vastattu. Vastaaja on ^a_handle:\n\n^open^a_content^close\n\nKysymyksesi oli:\n\n^open^q_title^close\n\nJos pidät vastauksesta, voit valita sen parhaaksi alla olevan linkin kautta:\n\n^url\n\nKiitos,\n\n^site_title",
		'q_answered_subject' => 'Kysymykseesi ^site_title on vastattu',

		'q_commented_body' => "Kysymystäsi ^site_title on kommentoitu. Kommentoija on ^c_handle:\n\n^open^c_content^close\n\nKysymyksesi oli:\n\n^open^c_context^close\n\nVoit lisätä oman kommenttisi alla olevan linkin kautta:\n\n^url\n\nKiitos,\n\n^site_title",
		'q_commented_subject' => 'Kysymystäsi ^site_title on kommentoitu',

		'q_posted_body' => "Uusi kysymys käyttäjältä ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nVoit lukea kysymyksen alla olevan linkin kautta:\n\n^url\n\nKiitos,\n\n^site_title",
		'q_posted_subject' => '^site_title -palvelussa on uusi kysymys',

		'reset_body' => "Avaa alla oleva linkki uusiaksesi salasanasi ^site_title - palveluun.\n\n^url\n\nVaihtoehtoisesti voit antaa alla olevan koodin tarjottuun syötekenttään.\n\nKoodi: ^code\n\nJos ei pyytänyt salasanan uusimista, voit jättää tämän viestin huomioimatta.\n\nKiitos,\n^site_title",
		'reset_subject' => '^site_title - Unohdetun salasanan uusiminen',

		'to_handle_prefix' => "^,\n\n",
		
		'wall_post_subject' => 'Seinällesi ^site_title -palvelussa on kirjoitettu',
		'wall_post_body' => "^f_handle on kirjoittanut sinun seinällesi palvelussa ^site_title:\n\n^open^post^close\n\nVoit vastata kirjoitukseen alla olevan linkin kautta:\n\n^url\n\nKiitos,\n\n^site_title",

		'welcome_body' => "Kiitos rekisteröitymisestäsi ^site_title -palveluun.\n\n^custom^confirmAntamasi kirjautumistiedot ovat:\n\nSähköposti: ^email\nSalasana: ^password\n\nSäilytä tietoja huolella (tai poista heti, omavalinta).\n\nKiitos,\n\n^site_title\n^url",
		'welcome_confirm' => "Avaa alla oleva linkki vahvistaaksesi sähköpostiosoitteesi.\n\n^url\n\n",
		'welcome_subject' => 'Tervetuloa palveluun ^site_title!',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
