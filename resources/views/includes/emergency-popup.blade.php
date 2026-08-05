<style>
.manstec-lead-fab {
  position: fixed;
  left: 22px;
  bottom: 30px;
  z-index: 1100;
  border: 0;
  border-radius: 999px;
  padding: 14px 22px;
  background: linear-gradient(110deg, #ff5f00, #ff8a00);
  color: #fff;
  font-size: 15px;
  font-weight: 700;
  box-shadow: 0 16px 34px rgba(255, 95, 0, 0.35);
  transition: transform 0.25s ease, box-shadow 0.25s ease;
  animation: manstecLeadPulse 1.7s infinite;
}

.cbh-phone {
  right: 8px;
  left: auto;
  z-index: 1090;
}

body.manstec-popup-open .manstec-lead-fab,
body.manstec-popup-open .cbh-phone {
  opacity: 0;
  pointer-events: none;
}

.manstec-lead-fab span {
  display: block;
  font-size: 12px;
  font-weight: 500;
  opacity: 0.92;
}

.manstec-lead-fab:hover {
  transform: translateY(-3px);
  box-shadow: 0 20px 34px rgba(255, 95, 0, 0.45);
}

@keyframes manstecLeadPulse {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-2px); }
}

.manstec-popup-open {
  overflow: hidden;
}

.manstec-lead-modal .modal-dialog {
  max-width: min(1100px, calc(100% - 24px));
}

.manstec-lead-modal {
  z-index: 2100;
}

.modal-backdrop.show {
  z-index: 2090;
}

.manstec-lead-modal .modal-content {
  border: 0;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 28px 90px rgba(0, 0, 0, 0.35);
}

.manstec-lead-modal .modal-body {
  padding: 0;
}

.manstec-popup-card {
  animation: manstecPopupIn 0.3s ease;
}

.manstec-popup-layout {
  display: grid;
  grid-template-columns: 40% 60%;
}

@keyframes manstecPopupIn {
  from { opacity: 0; transform: translateY(12px) scale(0.98); }
  to { opacity: 1; transform: translateY(0) scale(1); }
}

.manstec-popup-close {
  position: absolute;
  right: 12px;
  top: 12px;
  border: 1px solid rgba(255, 255, 255, 0.32);
  width: 36px;
  height: 36px;
  line-height: 1;
  border-radius: 50%;
  background: rgba(9, 29, 56, 0.45);
  color: #fff;
  font-size: 22px;
  cursor: pointer;
  z-index: 2;
  display: inline-flex;
  align-items: center;
  justify-content: center;
}

.manstec-popup-close:hover {
  background: rgba(9, 29, 56, 0.75);
}

.manstec-popup-side {
  background: linear-gradient(160deg, #0b2b56 0%, #0f437f 60%, #1e5da3 100%);
  color: #fff;
  padding: 24px 22px 20px;
  position: relative;
}

.manstec-popup-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 6px 12px;
  border-radius: 999px;
  background: rgba(255, 255, 255, 0.18);
  font-size: 12px;
  font-weight: 700;
  margin-bottom: 18px;
}

.manstec-popup-title {
  font-size: 28px;
  line-height: 1.2;
  margin-bottom: 12px;
  color: #fff;
}

.manstec-popup-text {
  margin-bottom: 20px;
  font-size: 15px;
  line-height: 1.55;
  opacity: 0.95;
}

.manstec-popup-list {
  margin: 0 0 18px;
  padding-left: 18px;
}

.manstec-popup-list li {
  margin-bottom: 8px;
}

.manstec-emergency-box {
  background: rgba(255, 255, 255, 0.13);
  border: 1px solid rgba(255, 255, 255, 0.22);
  border-radius: 14px;
  padding: 14px;
}

.manstec-emergency-box h5 {
  color: #fff;
  margin: 0 0 10px;
  font-size: 16px;
}

.manstec-emergency-box a {
  display: block;
  color: #fff;
  text-decoration: none;
  font-weight: 600;
  margin-bottom: 6px;
}

.manstec-emergency-box a:hover {
  text-decoration: underline;
}

.manstec-popup-form-wrap {
  background: linear-gradient(175deg, #ffffff 0%, #f7fafc 100%);
  padding: 24px 22px 18px;
}

.manstec-popup-form-wrap h4 {
  margin: 0;
  color: #0d2b55;
  font-size: 32px;
}

.manstec-popup-form-wrap p {
  margin: 8px 0 20px;
  color: #375678;
  font-size: 14px;
}

.manstec-popup-form {
  display: grid;
  gap: 12px;
}

.manstec-popup-grid-2 {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 12px;
}

.manstec-popup-form input,
.manstec-popup-form textarea {
  width: 100%;
  border: 1px solid #d3deec;
  border-radius: 12px;
  padding: 12px 13px;
  color: #0f2740;
  font-size: 14px;
  background: #fff;
}

.manstec-popup-form textarea {
  min-height: 96px;
  resize: vertical;
}

.manstec-popup-form input:focus,
.manstec-popup-form textarea:focus {
  border-color: #ff7a18;
  outline: none;
  box-shadow: 0 0 0 3px rgba(255, 122, 24, 0.16);
}

.manstec-popup-submit {
  border: 0;
  border-radius: 12px;
  padding: 13px 16px;
  background: linear-gradient(110deg, #ff5f00, #ff8a00);
  color: #fff;
  font-size: 15px;
  font-weight: 700;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.manstec-popup-submit:hover {
  transform: translateY(-1px);
  box-shadow: 0 10px 22px rgba(255, 95, 0, 0.3);
}

.manstec-popup-note {
  margin-top: 4px;
  color: #4f6a87;
  font-size: 12px;
}

@media (max-width: 1199.98px) {
  .manstec-lead-modal .modal-dialog {
    max-width: calc(100% - 16px);
  }

  .manstec-popup-layout {
    grid-template-columns: 42% 58%;
  }

  .manstec-popup-side {
    padding: 18px 16px 14px;
  }

  .manstec-popup-form-wrap {
    padding: 18px 16px 14px;
  }

  .manstec-popup-title {
    font-size: 26px;
    margin-bottom: 8px;
  }

  .manstec-popup-text {
    font-size: 14px;
    margin-bottom: 12px;
  }

  .manstec-popup-list {
    margin-bottom: 12px;
  }

  .manstec-popup-list li {
    margin-bottom: 6px;
  }

  .manstec-popup-form-wrap h4 {
    font-size: 28px;
  }
}

@media (max-width: 767.98px) {
  .manstec-lead-fab {
    left: 12px;
    right: auto;
    bottom: 58px;
    width: auto;
    max-width: 220px;
    text-align: left;
    font-size: 13px;
    padding: 12px 16px;
  }

  .manstec-lead-modal .modal-dialog {
    margin: 0;
    max-width: 100%;
    height: 100%;
  }

  .manstec-lead-modal .modal-content {
    height: 100%;
    border-radius: 0;
  }

  .manstec-lead-modal .modal-body {
    height: 100%;
    overflow-y: auto;
  }

  .manstec-popup-layout {
    grid-template-columns: 1fr;
  }

  .manstec-popup-close {
    background: rgba(9, 29, 56, 0.56);
    top: 8px;
    right: 8px;
    width: 34px;
    height: 34px;
    font-size: 20px;
  }

  .manstec-popup-side {
    padding: 16px 14px 12px;
  }

  .manstec-popup-badge {
    margin-bottom: 10px;
    font-size: 11px;
    padding: 5px 10px;
  }

  .manstec-popup-title {
    font-size: 19px;
    margin-bottom: 4px;
  }

  .manstec-emergency-box {
    padding: 10px 12px;
    border-radius: 10px;
  }

  .manstec-emergency-box h5 {
    font-size: 13px;
    margin-bottom: 7px;
  }

  .manstec-emergency-box a {
    font-size: 13px;
    margin-bottom: 3px;
  }

  .manstec-popup-form-wrap {
    padding: 16px 14px 14px;
  }

  .manstec-popup-form-wrap h4 {
    font-size: 20px;
  }

  .manstec-popup-form-wrap p {
    margin: 5px 0 10px;
    font-size: 12px;
  }

  .manstec-popup-grid-2 {
    grid-template-columns: 1fr;
  }

  .manstec-popup-form {
    gap: 8px;
  }

  .manstec-popup-form input,
  .manstec-popup-form textarea {
    padding: 10px 11px;
    font-size: 13px;
    border-radius: 10px;
  }

  .manstec-popup-form textarea {
    min-height: 72px;
  }

  .manstec-popup-submit {
    width: 100%;
    padding: 11px 14px;
    font-size: 14px;
  }

  .cbh-phone {
    right: -2px;
    bottom: -18px;
  }
}

@media (max-width: 575.98px) {
  .manstec-lead-fab {
    max-width: 196px;
    padding: 11px 14px;
    bottom: 58px;
  }

  .manstec-lead-fab span {
    font-size: 11px;
  }

  .cbh-phone {
    right: -8px;
    bottom: -22px;
    transform: scale(0.88);
    transform-origin: right bottom;
  }
}
</style>

<button type="button" class="manstec-lead-fab" data-manstec-popup-open data-bs-toggle="modal" data-bs-target="#manstec-contact-popup">
  Atendimento de emerg&ecirc;ncia
  <span>Fale agora com um especialista</span>
</button>

<div class="modal fade manstec-lead-modal" id="manstec-contact-popup" tabindex="-1" aria-labelledby="manstec-popup-title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl modal-fullscreen-sm-down">
    <div class="modal-content manstec-popup-card">
      <div class="modal-body">
        <div class="manstec-popup-layout">
          <div class="manstec-popup-side">
            <button type="button" class="manstec-popup-close" aria-label="Fechar formul&aacute;rio" data-bs-dismiss="modal" data-manstec-popup-close>&times;</button>
            <span class="manstec-popup-badge"><i class="fa-solid fa-bolt"></i> Atendimento priorit&aacute;rio</span>
            <h3 class="manstec-popup-title" id="manstec-popup-title">Fale com a MANSTEC agora</h3>
            <p class="manstec-popup-text">Conte sua necessidade e nosso time t&eacute;cnico retorna com o melhor caminho para reduzir paradas e riscos operacionais.</p>

            <ul class="manstec-popup-list">
              <li>An&aacute;lise inicial r&aacute;pida do seu cen&aacute;rio.</li>
              <li>Atendimento t&eacute;cnico especializado em compressores.</li>
              <li>Proposta objetiva para a&ccedil;&atilde;o imediata.</li>
            </ul>

            <div class="manstec-emergency-box">
              <h5>Telefones de emerg&ecirc;ncia</h5>
              <a href="tel:+351969558556"><i class="fa-light fa-phone-volume"></i> +351 969 558 556</a>
              <a href="tel:+5511959781897"><i class="fa-light fa-phone-volume"></i> +55 (11) 95978-1897</a>
              <a href="tel:+551146478222"><i class="fa-light fa-phone-volume"></i> +55 (11) 4647-8222</a>
            </div>
          </div>

          <div class="manstec-popup-form-wrap">
            <h4>Formul&aacute;rio de contato</h4>
            <p>Preencha os dados abaixo para receber contato do nosso especialista.</p>

            @if(isset($success) && $success)
              <div class="alert alert-success">
                Solicita&ccedil;&atilde;o enviada com sucesso! Entraremos em contato em breve.
              </div>
            @endif

            <form action="{{ url('/send-email-home') }}" method="POST" class="manstec-popup-form">
              <input type="text" name="id" value="form_popup_home" hidden>
              <input type="text" name="subject" value="Popup Site - Contato de emerg&ecirc;ncia" hidden>

              <div class="manstec-popup-grid-2">
                <input type="text" name="name" placeholder="Nome" required>
                <input type="text" name="company" placeholder="Empresa" required>
              </div>

              <input type="text" name="address" placeholder="Endere&ccedil;o" required>

              <div class="manstec-popup-grid-2">
                <input type="tel" name="phone" placeholder="Telefone" required>
                <input type="email" name="email" placeholder="E-mail" required>
              </div>

              <textarea name="description" placeholder="Uma breve descri&ccedil;&atilde;o do que precisa" required></textarea>
              <button type="submit" class="manstec-popup-submit">Quero falar com um especialista</button>
            </form>
            <p class="manstec-popup-note">Atendimento comercial: seg. a sex., 7h30 &agrave;s 17h20.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
