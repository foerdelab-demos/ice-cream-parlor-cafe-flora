<footer class="site-footer">
    <div class="container footer__grid">
        <div>
            <p class="footer__title">[Firmenname]</p>
            <p>[Adresse]</p>
        </div>
        <div>
            <p><a href="tel:[Telefonnummer]">[Telefonnummer]</a></p>
            <p><a href="mailto:[E-Mail]">[E-Mail]</a></p>
        </div>
        <div class="footer__links">
            <a href="<?= htmlspecialchars($basePath) ?>/pages/impressum.php">Impressum</a>
            <a href="<?= htmlspecialchars($basePath) ?>/pages/datenschutz.php">Datenschutz</a>
        </div>
    </div>
</footer>
<script src="<?= htmlspecialchars($basePath) ?>/assets/js/main.js" defer></script>
<?php require_once __DIR__ . '/demo.php'; ?>
</body>
</html>
