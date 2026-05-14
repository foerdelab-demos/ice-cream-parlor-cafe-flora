<?php
$pageTitle = 'Kontakt | [Firmenname]';
$pageDescription = 'Reinigungsanfrage für Flensburg und die Förde stellen.';
require_once __DIR__ . '/../partials/head.php';

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$formData = [
    'name' => '',
    'company' => '',
    'email' => '',
    'phone' => '',
    'service' => '',
    'message' => '',
];
$errors = [];
$successMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formData['name'] = trim((string) ($_POST['name'] ?? ''));
    $formData['company'] = trim((string) ($_POST['company'] ?? ''));
    $formData['email'] = trim((string) ($_POST['email'] ?? ''));
    $formData['phone'] = trim((string) ($_POST['phone'] ?? ''));
    $formData['service'] = trim((string) ($_POST['service'] ?? ''));
    $formData['message'] = trim((string) ($_POST['message'] ?? ''));
    $submittedToken = (string) ($_POST['csrf_token'] ?? '');

    if (!hash_equals($_SESSION['csrf_token'], $submittedToken)) {
        $errors[] = 'Ihre Sitzung ist abgelaufen. Bitte versuchen Sie es erneut.';
    }

    if ($formData['name'] === '') {
        $errors[] = 'Bitte geben Sie Ihren Namen ein.';
    }

    if ($formData['email'] === '' || !filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Bitte geben Sie eine g&uuml;ltige E-Mail-Adresse ein.';
    }

    if ($formData['service'] === '') {
        $errors[] = 'Bitte w&auml;hlen Sie eine gew&uuml;nschte Leistung.';
    }

    if ($formData['message'] === '') {
        $errors[] = 'Bitte beschreiben Sie Ihr Anliegen.';
    }

    if (!$errors) {
        // Konfigurierbarer Bereich f&uuml;r Mailversand oder CRM-Anbindung:
        // 1) Empf&auml;ngeradresse setzen
        // 2) Sicheren Versand (z. B. SMTP) konfigurieren
        // 3) Erfolg/Fehler robust protokollieren

        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        $successMessage = 'Vielen Dank. Diese Website ist aktuell als Vorlage eingerichtet, der Versand ist noch nicht konfiguriert.';
        $formData = array_fill_keys(array_keys($formData), '');
    }
}

require_once __DIR__ . '/../partials/header.php';
?>
<main>
    <section class="section">
        <div class="container form-wrap">
            <div>
                <p class="eyebrow">Kontakt</p>
                <h1>Erz&auml;hlen Sie uns kurz, was gereinigt werden soll.</h1>
                <p>Ob B&uuml;ro, Praxis, Treppenhaus oder Ferienwohnung: Wir stimmen den Einsatz auf Ihren Ablauf ab.</p>
            </div>

            <?php if ($errors): ?>
                <div class="alert" role="alert">
                    <p>Bitte pr&uuml;fen Sie Ihre Eingaben:</p>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?= htmlspecialchars($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if ($successMessage !== ''): ?>
                <p class="success" role="status"><?= htmlspecialchars($successMessage) ?></p>
            <?php endif; ?>

            <form method="post" action="<?= htmlspecialchars($basePath) ?>/pages/kontakt.php" novalidate>
                <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">

                <label for="name">Name</label>
                <input id="name" name="name" type="text" value="<?= htmlspecialchars($formData['name']) ?>" required>

                <label for="company">Firma / Objekt</label>
                <input id="company" name="company" type="text" value="<?= htmlspecialchars($formData['company']) ?>">

                <label for="email">E-Mail</label>
                <input id="email" name="email" type="email" value="<?= htmlspecialchars($formData['email']) ?>" required>

                <label for="phone">Telefonnummer</label>
                <input id="phone" name="phone" type="tel" value="<?= htmlspecialchars($formData['phone']) ?>">

                <label for="service">Gewünschte Leistung</label>
                <select id="service" name="service" required>
                    <option value="">Bitte auswählen</option>
                    <option value="Büroreinigung" <?= $formData['service'] === 'Büroreinigung' ? 'selected' : '' ?>>Büroreinigung</option>
                    <option value="Treppenhausreinigung" <?= $formData['service'] === 'Treppenhausreinigung' ? 'selected' : '' ?>>Treppenhausreinigung</option>
                    <option value="Glas- und Fensterreinigung" <?= $formData['service'] === 'Glas- und Fensterreinigung' ? 'selected' : '' ?>>Glas- und Fensterreinigung</option>
                    <option value="Praxisreinigung" <?= $formData['service'] === 'Praxisreinigung' ? 'selected' : '' ?>>Praxisreinigung</option>
                    <option value="Ferienwohnungsreinigung" <?= $formData['service'] === 'Ferienwohnungsreinigung' ? 'selected' : '' ?>>Ferienwohnungsreinigung</option>
                    <option value="Grundreinigung" <?= $formData['service'] === 'Grundreinigung' ? 'selected' : '' ?>>Grundreinigung</option>
                </select>

                <label for="message">Nachricht</label>
                <textarea id="message" name="message" rows="6" required><?= htmlspecialchars($formData['message']) ?></textarea>

                <button class="button" type="submit">Anfrage senden</button>
            </form>
        </div>
    </section>
</main>
<?php require_once __DIR__ . '/../partials/footer.php'; ?>
