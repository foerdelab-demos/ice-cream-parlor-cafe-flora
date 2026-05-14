<?php
if (defined('FOERDELAB_DEMO_OVERLAY_RENDERED')) {
    return;
}
define('FOERDELAB_DEMO_OVERLAY_RENDERED', true);
?>
<style>
.foerdelab-demo-badge {
    position: fixed;
    right: 18px;
    bottom: 18px;
    z-index: 9999;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    max-width: min(92vw, 420px);
    padding: 12px 16px;
    border-radius: 14px;
    border: 1px solid rgba(255,255,255,.22);
    background: rgba(17,24,39,.88);
    color: #fff;
    box-shadow: 0 12px 34px rgba(0,0,0,.28);
    backdrop-filter: blur(10px);
    font: 600 13px/1.35 -apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;
}
.foerdelab-demo-badge__mark {
    flex: 0 0 auto;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    border-radius: 999px;
    background: linear-gradient(135deg, #f59e0b, #fb7185);
    color: #111827;
    font-weight: 800;
}
.foerdelab-demo-badge__meta {
    display: flex;
    flex-direction: column;
    gap: 2px;
}
.foerdelab-demo-badge__meta strong {
    font-size: 12px;
    letter-spacing: .08em;
    text-transform: uppercase;
    opacity: .9;
}
.foerdelab-demo-badge__meta span {
    font-size: 13px;
    font-weight: 500;
    opacity: .95;
}
@media (max-width: 640px) {
    .foerdelab-demo-badge {
        right: 12px;
        left: 12px;
        bottom: 12px;
        max-width: none;
    }
}
</style>
<div class="foerdelab-demo-badge" aria-label="Demo-Hinweis">
    <span class="foerdelab-demo-badge__mark">F</span>
    <span class="foerdelab-demo-badge__meta">
        <strong>FördeLab Demo</strong>
        <span>Demo für Ice Cream Parlor & Cafe Flora · Nicht zur Weitergabe</span>
    </span>
</div>