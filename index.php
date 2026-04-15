<?php
$basisPath = __DIR__ . '/project-basis.json';
$basis = is_file($basisPath) ? json_decode((string)file_get_contents($basisPath), true) : [];
$company = $basis['company'] ?? [];
$brief = $basis['brief'] ?? [];
$analysis = $basis['analysis'] ?? [];

function h($value): string
{
    if ($value === null) {
        return '';
    }
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

function renderList(array $items): string
{
    $items = array_values(array_filter($items, static fn($item) => is_scalar($item) && trim((string)$item) !== ''));
    if (empty($items)) {
        return '<p class="empty">Keine Daten vorhanden.</p>';
    }

    $html = '<ul class="stack-list">';
    foreach ($items as $item) {
        $html .= '<li>' . h($item) . '</li>';
    }
    return $html . '</ul>';
}

function prettyJson($value): string
{
    $json = json_encode($value, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    return $json !== false ? $json : '';
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h(($company['name'] ?? 'Projektbasis') . ' - Analyse-Basis') ?></title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main class="page-shell">
        <section class="hero-card">
            <p class="eyebrow">FoerdeLab Analyse-Basis</p>
            <h1><?= h($company['name'] ?? 'Projektbasis') ?></h1>
            <p class="lead"><?= h($brief['summary'] ?? 'Diese Demo dient als strukturierte Basis fuer eigenes Coding.') ?></p>
            <div class="hero-meta">
                <span><?= h($company['category'] ?? 'Branche offen') ?></span>
                <span><?= h($company['city'] ?? 'Ort offen') ?></span>
                <?php if (!empty($basis['repo']['repoUrl'])): ?>
                    <a href="<?= h($basis['repo']['repoUrl']) ?>" target="_blank" rel="noopener noreferrer">Repo oeffnen</a>
                <?php endif; ?>
            </div>
        </section>

        <section class="grid two-col">
            <article class="panel">
                <h2>Unternehmensdaten</h2>
                <dl class="facts">
                    <div><dt>Name</dt><dd><?= h($company['name'] ?? '') ?></dd></div>
                    <div><dt>Website</dt><dd><?= h($company['website'] ?? '') ?></dd></div>
                    <div><dt>E-Mail</dt><dd><?= h($company['email'] ?? '') ?></dd></div>
                    <div><dt>Telefon</dt><dd><?= h($company['phone'] ?? '') ?></dd></div>
                    <div><dt>Adresse</dt><dd><?= h($company['address'] ?? '') ?></dd></div>
                    <div><dt>Ort</dt><dd><?= h($company['city'] ?? '') ?></dd></div>
                </dl>
            </article>

            <article class="panel">
                <h2>Projektbrief</h2>
                <p><strong>Tonalitaet:</strong> <?= h($brief['tone'] ?? '') ?></p>
                <h3>Zielgruppen</h3>
                <?= renderList((array)($brief['targetAudience'] ?? [])) ?>
                <h3>Empfohlene Seiten</h3>
                <?= renderList((array)($brief['suggestedPages'] ?? [])) ?>
            </article>
        </section>

        <section class="grid two-col">
            <article class="panel">
                <h2>Leistungen</h2>
                <?= renderList((array)($brief['keyServices'] ?? [])) ?>
                <h3>Trust-Signale</h3>
                <?= renderList((array)($brief['trustSignals'] ?? [])) ?>
            </article>

            <article class="panel">
                <h2>Copy- und CTA-Richtung</h2>
                <h3>Content-Angles</h3>
                <?= renderList((array)($brief['contentAngles'] ?? [])) ?>
                <h3>CTA-Ideen</h3>
                <?= renderList((array)($brief['ctaIdeas'] ?? [])) ?>
            </article>
        </section>

        <section class="grid two-col">
            <article class="panel">
                <h2>Developer Notes</h2>
                <?= renderList((array)($brief['developerNotes'] ?? [])) ?>
                <h3>SEO Notes</h3>
                <?= renderList((array)($brief['seoNotes'] ?? [])) ?>
            </article>

            <article class="panel">
                <h2>Website-Auszug</h2>
                <pre><?= h($basis['website_excerpt'] ?? 'Kein Crawl-Text verfuegbar.') ?></pre>
            </article>
        </section>

        <section class="panel">
            <h2>Rohdaten aus der KI-Analyse</h2>
            <p class="muted">Diese JSON-Daten sind absichtlich sichtbar, damit darauf manuell weiterentwickelt werden kann.</p>
            <pre><?= h(prettyJson($analysis)) ?></pre>
        </section>
    </main>
</body>
</html>