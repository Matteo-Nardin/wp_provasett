<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wp_provasett' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U;!E]s)+vu84NkHfleJ-dljH0hp2/_*YQy{/S&SLq?fC$Pns~=k?+>[U!iy}|(eY' );
define( 'SECURE_AUTH_KEY',  'd)[G*OC?DjbVFz:lc8}w/g:N7H-9W=}*u8mLI+.=CzTerG_9=lG*,0[E WvH*,<H' );
define( 'LOGGED_IN_KEY',    'kOU|fjGG!ERq0h5z7XvDXXf;|9+=oB<NvX/SET+xhckP0u#JIxfP|;2}>B@:3x;0' );
define( 'NONCE_KEY',        'P,P,g9b&t?p8K1D4::kq()S.8%`)7-E9xHaO1cb7#_!LzkqB^zznQuP{ZfjWP0cf' );
define( 'AUTH_SALT',        'z|dbVk`q@v<L8qTuRTM)KnAo0$spAjr-{Mew62,+n#<cqn},%]b/1vVYxz_W-t_/' );
define( 'SECURE_AUTH_SALT', ' V?/nmng -!IQoNIgxu;*ztR{2h##Js+=l)e3V*GcTOv@;Xp#:KPxv:2D8K,6hd}' );
define( 'LOGGED_IN_SALT',   'H/dJIzqtEZ]#Lr/v Khu<@4<*X|P:?]H?1a}MCyJeB,^x8&a]avlJ)gO^xAQ4m#]' );
define( 'NONCE_SALT',       '7}A((!?h!|+zB+.~&@iVqpF<p}V$AC^,]5Ou+7n==l%.mUZ u+V?N5.DDc=kKCF@' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
