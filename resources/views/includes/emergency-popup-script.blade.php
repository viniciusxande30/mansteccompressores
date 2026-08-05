<script>
  (function () {
    var popupElement = document.getElementById('manstec-contact-popup');
    if (!popupElement) {
      return;
    }

    var initDone = false;

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
      window.bootstrap.Modal.getOrCreateInstance(popupElement);

      popupElement.addEventListener('shown.bs.modal', function () {
        document.body.classList.add('manstec-popup-open');
      });

      popupElement.addEventListener('hidden.bs.modal', function () {
        document.body.classList.remove('manstec-popup-open');
      });
    }

    if ('requestIdleCallback' in window) {
      requestIdleCallback(function () {
        initPopupWithBootstrap(0);
      }, { timeout: 2000 });
    } else {
      window.setTimeout(function () {
        initPopupWithBootstrap(0);
      }, 400);
    }
  })();
</script>
