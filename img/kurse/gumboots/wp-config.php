<?php

/**
 * Grundeinstellungen f?r WordPress
 *
 * Zu diesen Einstellungen geh?ren:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpr?fix,
 * * Sicherheitsschl?ssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten f?r die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber daf?r nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten f?r die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden m?chtest.
 */
define('DB_NAME', "db810180398");

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define('DB_USER', "dbo810180398");

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define('DB_PASSWORD', "Dev_PWmusica2018!");

/**d
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define('DB_HOST', "db810180398.hosting-data.io");

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8mb4');

/**
 * Der Collate-Type sollte nicht ge?ndert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschl?ssel
 *
 * ?ndere jeden untenstehenden Platzhaltertext in eine beliebige,
 * m?glichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schl?ssel generieren lassen.
 * Du kannst die Schl?ssel jederzeit wieder ?ndern, alle angemeldeten
 * Benutzer m?ssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!4j7mm4D#ZV1@Z(oPXI;+O;isBGyAS`P2`bLjTMkV3a~4OxB`enWaOXJK_Z9@!LQ');
define('SECURE_AUTH_KEY',  'AnRbd$906uTCJ2*O6qghEG@5D().]Y&{tb5ui6{8Ygr4Gn7ahmAo@])uD2U6U hI');
define('LOGGED_IN_KEY',    'v1&t9Uu#~U~%T@wKc6DcCrHo%!%S~V[6-C?C H_}2[f _1f$9V1NJknh7fi05]O)');
define('NONCE_KEY',        '0+D~|X|3.<26w:`={b+B!.i8nHK%JEz6(s:t~M_n0%t[IN_dFuj~nmjLFq&JB,VN');
define('AUTH_SALT',        'H?b9*_&0UccZ`:!5l;dL$K?F(uw$@uiD5{rt8AH~oD|usQFaCB+.G-77;pA(s4%!');
define('SECURE_AUTH_SALT', 'huM*q<I[rf._%_s68}u 3<2o@Z,#sdkzV1{D9pW50$XTO}p4:,Bx3t3=.NTkS)8I');
define('LOGGED_IN_SALT',   '2_Q2?)v6zPFGin=iUYl*@qW[-Kl*fDzIXv$3~cq|vn&6X%sC<#Z@pea!]-~P2OQi');
define('NONCE_SALT',       '3B[>uR)Z64@!1o[&inQ.Sg,q)lA-tuzB}w2!QkDbes-yM`75[@MFpDY(hDk=?RZ0');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Pr?fix
 *
 * Wenn du verschiedene Pr?fixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'wp_';

/**
 * F?r Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf ?true?, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdr?cklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen ?ber andere Konstanten zu finden,
 * die zum Debuggen genutzt werden k?nnen.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

define('DISALLOW_FILE_EDIT', true);

/* Das war?s, Schluss mit dem Bearbeiten! Viel Spa? beim Bloggen. */
/* That's all, stop editing! Happy blogging. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und f?gt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');


