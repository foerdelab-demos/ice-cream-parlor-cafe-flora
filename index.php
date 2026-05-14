<?php
$pageTitle = '[Firmenname] | Reinigung in Flensburg an der Förde';
$pageDescription = 'Ruhige, verlässliche Reinigung für Büros, Praxen, Treppenhäuser und Ferienwohnungen in Flensburg.';
require_once __DIR__ . '/partials/head.php';
require_once __DIR__ . '/partials/header.php';
?>
<main>
    <section class="hero section" id="startseite">
        <div class="container hero__content">
            <p class="eyebrow">Reinigung in Flensburg an der Förde</p>
            <h1>Wenn der Morgen über der Förde hell wird, ist Ihr Raum bereit.</h1>
            <p class="lead">Wir reinigen präzise, leise und planbar &ndash; für Orte, in denen Menschen ankommen, arbeiten und bleiben.</p>
            <div class="hero__actions">
                <a class="button" href="<?= htmlspecialchars($basePath) ?>/pages/kontakt.php">Anfrage stellen</a>
                <a class="button button--ghost" href="<?= htmlspecialchars($basePath) ?>/#leistungen">Leistungen ansehen</a>
            </div>
        </div>
    </section>

    <section class="section" aria-labelledby="vertrauen-title">
        <div class="container">
            <p class="eyebrow">Vertrauen im Alltag</p>
            <h2 id="vertrauen-title">Klare Arbeit. Klare Absprachen.</h2>
            <div class="trust-grid">
                <article class="card">
                    <h3>Feste Ansprechpartner</h3>
                    <p>Sie sprechen mit Menschen, die Ihr Objekt kennen und Entscheidungen direkt treffen.</p>
                </article>
                <article class="card">
                    <h3>Diskret im Betrieb</h3>
                    <p>Wir arbeiten ruhig im Hintergrund, damit Abläufe, Patientenwege und Empfangszeiten ungestört bleiben.</p>
                </article>
                <article class="card">
                    <h3>Reinigung nach Plan</h3>
                    <p>Jeder Einsatz folgt einer klaren Struktur &ndash; nachvollziehbar, pünktlich und wiederholbar.</p>
                </article>
                <article class="card">
                    <h3>Regional vor Ort</h3>
                    <p>Aus Flensburg für Flensburg: kurze Wege, schnelle Abstimmung, verlässliche Präsenz.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section section--tinted" id="leistungen" aria-labelledby="leistungen-title">
        <div class="container">
            <p class="eyebrow">Leistungen</p>
            <h2 id="leistungen-title">Für Räume, die täglich gesehen werden.</h2>
            <div class="services-grid">
                <article class="card">
                    <h3>Büroreinigung</h3>
                    <p>Arbeitsplätze, Besprechungsräume und Küchen bleiben gepflegt, ohne den Arbeitsrhythmus zu stören.</p>
                </article>
                <article class="card">
                    <h3>Treppenhausreinigung</h3>
                    <p>Saubere Eingänge und klare Stufen schaffen einen ruhigen ersten Eindruck für Bewohner und Besucher.</p>
                </article>
                <article class="card">
                    <h3>Glas- und Fensterreinigung</h3>
                    <p>Licht bleibt im Raum: streifenfreie Glasflächen für Schaufenster, Büros und Gemeinschaftsbereiche.</p>
                </article>
                <article class="card">
                    <h3>Praxisreinigung</h3>
                    <p>Hygienisch, diskret und abgestimmt auf sensible Bereiche, Öffnungszeiten und klare Verantwortlichkeiten.</p>
                </article>
                <article class="card">
                    <h3>Ferienwohnungsreinigung</h3>
                    <p>Übergaben funktionieren zuverlässig, damit Gäste in einen ruhigen, gepflegten Raum eintreten.</p>
                </article>
                <article class="card">
                    <h3>Grundreinigung</h3>
                    <p>Wenn es tiefer gehen soll: gründliche Reinigung von Boden bis Glas als klarer Neustart.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section" aria-labelledby="norden-title">
        <div class="container prose">
            <p class="eyebrow">Aus dem hohen Norden</p>
            <h2 id="norden-title">Zwischen Wind, Wasser und klaren Linien.</h2>
            <p>An der Förde wechseln Licht, Wetter und Tempo jeden Tag. Unsere Arbeit bleibt verlässlich: ruhig geplant, sauber ausgeführt und ohne große Worte. So entstehen Räume, die klar wirken &ndash; morgens im Büro, im Treppenhaus am Abend oder bei der Übergabe einer Ferienwohnung.</p>
            <p>Wir glauben an sichtbare Sorgfalt statt Lautstärke. An Hände, die wissen, was zu tun ist. Und an Absprachen, die halten.</p>
        </div>
    </section>

    <section class="section section--tinted" id="ablauf" aria-labelledby="ablauf-title">
        <div class="container">
            <p class="eyebrow">Ablauf</p>
            <h2 id="ablauf-title">In vier klaren Schritten.</h2>
            <ol class="steps">
                <li><strong>Anfrage</strong><span>Sie senden uns Ihre Daten und den Bedarf f&uuml;r Objekt oder Fl&auml;che.</span></li>
                <li><strong>Besichtigung oder Abstimmung</strong><span>Vor Ort oder telefonisch kl&auml;ren wir Umfang, Zeiten und Besonderheiten.</span></li>
                <li><strong>Reinigungsplan</strong><span>Sie erhalten einen klaren Plan mit festen Intervallen und Leistungen.</span></li>
                <li><strong>Regelm&auml;&szlig;ige Ausf&uuml;hrung</strong><span>Das Team arbeitet nach Plan &ndash; leise, p&uuml;nktlich und nachvollziehbar.</span></li>
            </ol>
        </div>
    </section>

    <section class="section" id="kontakt" aria-labelledby="kontakt-title">
        <div class="container contact-strip">
            <div>
                <p class="eyebrow">Kontakt</p>
                <h2 id="kontakt-title">Lassen Sie uns &uuml;ber Ihr Objekt sprechen.</h2>
                <p>Schreiben Sie uns kurz, was gereinigt werden soll. Wir melden uns mit einer klaren n&auml;chsten Abstimmung.</p>
            </div>
            <a class="button" href="<?= htmlspecialchars($basePath) ?>/pages/kontakt.php">Anfrage stellen</a>
        </div>
    </section>
</main>
<?php require_once __DIR__ . '/partials/footer.php'; ?>
