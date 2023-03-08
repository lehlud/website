<footer id="footer" style="--popup-color: <?= randomColor() ?>;">
  <ul id="footer-links">
    <li id="datenschutz-link"><a href="/datenschutz/">Datenschutz</a></li>
    <li id="quellcode-link"><a href="https://github.com/lehlud/website">Quellcode</a><br><span id="copyright-notice">(C) Ludwig Lehnert 2023</span></li>
    <li id="impressum-link"><a href="/impressum/">Impressum</a></li>
  </ul>

  <?php if (isset($displayJSPopup) && $displayJSPopup) { ?>
    <div id="footer-popup">
      <span id="footer-popup-text">Diese Webseite verwendet kein JavaScript.</span>
    </div>
  <?php } ?>
</footer>