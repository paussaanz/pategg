<?php
/*
 * Template Name: Landing Page
 * Description : Coming-soon con fondo oscuro, línea animada,
 *               logos deslizantes y fuente Playfair Display.
 */

/* -----------------------------------------------------------------------
 * 1) Dashicons + Google Fonts
 * -------------------------------------------------------------------- */
wp_enqueue_style( 'dashicons' );
wp_enqueue_style(
  'playfair-display',
  'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap',
  array(),
  null
);

get_header();
?>

<style>
/* -----------------------------------------------------------------------
 * Básicos
 * -------------------------------------------------------------------- */
body {
  margin: 0;
  font-family: 'Playfair Display', serif;
}

button { letter-spacing: .25em; }

input {
  background: rgba(0, 0, 0, .5) !important;
  border-radius: 2px !important;
}

input::placeholder               { color: #d0d0d0 !important; opacity: 1; }
input::-webkit-input-placeholder { color: #d0d0d0; }
input::-moz-placeholder          { color: #d0d0d0; opacity: 1; }
input:-ms-input-placeholder      { color: #d0d0d0; }


@keyframes growLine {
  from { width: 0; }
  to   { width: 500px; }
}

/* -----------------------------------------------------------------------
 * Logos
 * -------------------------------------------------------------------- */
.logo-wrapper {
  overflow: hidden;
  display: block;
  margin: 0 auto;
}

/* “Coming” desciende */
.coming-logo {
  transform: translateY(100%);
  animation: slideInUp .5s ease-out forwards .1s;
}

@keyframes slideInUp {
  to { transform: translateY(0); }
}

/* “Soon” asciende */
.soon-logo {
  transform: translateY(-100%);
  animation: slideInDown .5s ease-out forwards .1s;
}

@keyframes slideInDown {
  to { transform: translateY(0); }
}

/* Tamaños por defecto (escritorio) */
.logo-top,
.logo-top img     { width: 500px !important; }

.logo-bottom,
.logo-bottom img  { width: 300px !important; }

/* -----------------------------------------------------------------------
 * Countdown
 * -------------------------------------------------------------------- */
.cs-countdown {
  display: flex;
  gap: .5rem;
  align-items: flex-start;
  justify-content: center;
  font-variant-numeric: tabular-nums;
}

.cs-countdown .num,
.cs-countdown .colon {
  font-size: 4rem;
  font-weight: 200;
  line-height: 1.5;
  letter-spacing: -.04em;
  color: #fff;
}

.cs-countdown .colon {
  display: flex;
  opacity: .5;
  font-size: 18px;
  height: 100px;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

.cs-countdown .label {
  display: block;
  margin-top: .25rem;
  font-size: .75rem;
  letter-spacing: .25em;
  color: #aaa;
}

/* -----------------------------------------------------------------------
 * Fade-in por bloques
 * -------------------------------------------------------------------- */
@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(30px); }
  to   { opacity: 1; transform: translateY(0); }
}

.fadeinup {
  opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp .3s ease-out forwards;
}

.delay-0 { animation-delay: .4s; }
.delay-1 { animation-delay: .5s; }
.delay-2 { animation-delay: .6s; }
.delay-3 { animation-delay: .7s; }

/* -----------------------------------------------------------------------
 * Hover subrayado en “AVÍSAME”
 * -------------------------------------------------------------------- */
.btn-underline {
  position: relative;
  display: inline-block;
}

.btn-underline::after {
  content: '';
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 100%;
  height: 1px;
  background: currentColor;
  transform: scaleX(0);
  transform-origin: center;
  transition: transform .3s ease-out;
}

.btn-underline:hover::after {
  transform: scaleX(1);
}

/* -----------------------------------------------------------------------
 * Responsive  ≤ 576 px
 * -------------------------------------------------------------------- */
@media (max-width: 576px) {
  .logo-top,
  .logo-top img     { width: 300px !important; }

  .logo-bottom,
  .logo-bottom img  { width: 180px !important; }

  .divider-line {
    max-width: 300px;
    animation: growLineSm .5s ease-in-out forwards;
  }

  @keyframes growLineSm {
    from { width: 0; }
    to   { width: 300px; }
  }

  .cs-countdown .num { font-size: 3rem; }
  .lead              { font-size: 1rem; }
}
</style>

<!-- ===================================================================== -->

<div class="vh-100 cs-wrapper bg-dark text-white d-flex flex-column justify-content-center align-items-center"
     style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-landing.jpg') center / cover;">
  <div class="container text-center">

    <!-- Logo superior -->
    <div class="logo-wrapper logo-top">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maldonero-blanco.svg"
           alt="Coming"
           class="coming-logo">
    </div>

    <!-- Línea -->
    <div class="divider-line my-2"></div>

    <!-- Logo inferior -->
    <div class="logo-wrapper logo-bottom">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pategg-marron.svg"
           alt="Soon"
           class="soon-logo">
    </div>

    <!-- Descripción -->
    <p class="lead fw-light text-light mb-4 mt-3 w-lg-50 w-100 mx-auto fadeinup delay-0">
      Próxima apertura en<br>Maldonero&nbsp;45 · Madrid&nbsp;23044
    </p>

    <!-- Newsletter -->
    <form class="row g-0 justify-content-center align-items-center fadeinup delay-1"
          action="#"
          method="post">
      <div class="col-auto">
        <input type="email"
               class="form-control text-white mb-2"
               name="cs_email"
               placeholder="<?php esc_attr_e( 'Tu email', 'pategg' ); ?>"
               required>
      </div>

      <div class="col-auto">
        <button type="submit"
                class="bg-transparent border-0 small text-light fw-semibold ms-3 btn-underline">
          <?php esc_html_e( 'AVÍSAME', 'pategg' ); ?>
        </button>
      </div>
    </form>

    <!-- Countdown -->
    <div id="countdown" class="cs-countdown mb-4 fadeinup delay-2">
      <div class="time-block">
        <span id="days" class="num">00</span>
        <span class="label">DÍAS</span>
      </div>

      <span class="colon">:</span>

      <div class="time-block">
        <span id="hours" class="num">00</span>
        <span class="label">HRS</span>
      </div>

      <span class="colon">:</span>

      <div class="time-block">
        <span id="minutes" class="num">00</span>
        <span class="label">MIN</span>
      </div>

      <span class="colon">:</span>

      <div class="time-block">
        <span id="seconds" class="num">00</span>
        <span class="label">SEG</span>
      </div>
    </div>

    <!-- Redes -->
    <ul class="list-inline fadeinup delay-3">
      <li class="list-inline-item">
        <a href="#" class="text-white text-decoration-none fs-5">
          <span class="dashicons dashicons-twitter"></span>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="#" class="text-white text-decoration-none fs-5">
          <span class="dashicons dashicons-facebook"></span>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="#" class="text-white text-decoration-none fs-5">
          <span class="dashicons dashicons-instagram"></span>
        </a>
      </li>
    </ul>

  </div>
</div>

<!-- ===================================================================== -->

<script>
/* -----------------------------------------------------------------------
 * Countdown
 * -------------------------------------------------------------------- */
(function () {
  const targetDate = new Date('2025-12-31T23:59:59');

  const $days = document.getElementById('days');
  const $hours = document.getElementById('hours');
  const $minutes = document.getElementById('minutes');
  const $seconds = document.getElementById('seconds');

  const pad = n => n.toString().padStart(2, '0');

  function update () {
    const diff = targetDate - Date.now();

    if (diff < 0) {
      document.getElementById('countdown').innerHTML =
        '<span class="num">00</span><span class="label">LIVE!</span>';
      clearInterval(timer);
      return;
    }

    const d = Math.floor(diff / 864e5);
    const h = Math.floor(diff % 864e5 / 36e5);
    const m = Math.floor(diff % 36e5 / 6e4);
    const s = Math.floor(diff % 6e4 / 1e3);

    $days.textContent    = pad(d);
    $hours.textContent   = pad(h);
    $minutes.textContent = pad(m);
    $seconds.textContent = pad(s);
  }

  update();
  const timer = setInterval(update, 1000);
})();
</script>
