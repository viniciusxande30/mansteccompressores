<script>
  (function () {
    var popupElement = document.getElementById('manstec-contact-popup');
    if (!popupElement) {
      return;
    }

    var storageKey = 'manstec_contact_popup_closed_until';
    var openDelay = 2200;
    var closeHours = 8;
    var initDone = false;

    function rememberClose() {
      try {
        var blockedUntil = Date.now() + (closeHours * 60 * 60 * 1000);
        localStorage.setItem(storageKey, String(blockedUntil));
      } catch (error) {}
    }

    function canAutoOpen() {
      try {
        var blockedUntil = parseInt(localStorage.getItem(storageKey), 10);
        if (isNaN(blockedUntil)) {
          return true;
        }
        return Date.now() > blockedUntil;
      } catch (error) {
        return true;
      }
    }

    var closeButtons = document.querySelectorAll('[data-manstec-popup-close]');

    function initPopupWithBootstrap(retryCount) {
      if (initDone) {
        return;
      }

      if (typeof window.bootstrap === 'undefined' || !window.bootstrap.Modal) {
        if (retryCount < 40) {
          window.setTimeout(function () {
            initPopupWithBootstrap(retryCount + 1);
          }, 150);
        }
        return;
      }

      initDone = true;
      var popupInstance = window.bootstrap.Modal.getOrCreateInstance(popupElement);

      closeButtons.forEach(function (button) {
        button.addEventListener('click', function () {
          rememberClose();
        });
      });

      popupElement.addEventListener('shown.bs.modal', function () {
        document.body.classList.add('manstec-popup-open');
      });

      popupElement.addEventListener('hidden.bs.modal', function () {
        document.body.classList.remove('manstec-popup-open');
        rememberClose();
      });

      if (canAutoOpen()) {
        window.setTimeout(function () {
          popupInstance.show();
        }, openDelay);
      }
    }

    initPopupWithBootstrap(0);
  })();
</script>
