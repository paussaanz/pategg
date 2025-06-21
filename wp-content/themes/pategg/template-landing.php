<?php

/**
 * Template name: Landing
 *
 * @package pategg
 */

get_header();
?>

<style>
    .landing-page {
        background: #E3D18E;
        color: #484507;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-family: 'Gunterz', sans-serif;
        text-align: center;
        position: relative;
        overflow: hidden;
        padding: 2rem;
    }

    .landing-logo {
        /* position: absolute; */
        top: 4rem;
        max-width: 300px;
        padding-bottom: 50px;
    }

    .landing-title {
        font-size: clamp(2rem, 13vw, 8rem);
        font-weight: bold;
        margin-bottom: 2rem;
    }

    .countdown {
        display: flex;
        gap: 1.5rem;
        font-size: clamp(1.5rem, 6vw, 4rem);
        font-weight: 600;
        justify-content: center;
        margin-bottom: 2rem;
        color: #484507;
        opacity: 0.8;
    }

    .countdown div span {
        display: block;
        font-size: 0.8rem;
        text-transform: uppercase;
        color: #484507;
        opacity: 0.8;
    }

    .notify-form {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        justify-content: center;
    }

    .notify-form input[type="email"] {
        padding: 0.8rem 1rem;
        border-radius: 999px;
        border: none;
        width: 350px;
        max-width: 100%;
    }

    .notify-form button {
        background-color: #484507;
        color: white;
        border: none;
        border-radius: 999px;
        padding: 0.8rem 1.5rem;
        font-weight: 600;
        cursor: pointer;
    }
</style>

<section class="landing-page">

    <?php
    $logo = get_field('opciones_sitio_logo_principal', 'option');
    if ($logo): ?>
        <img src="<?= esc_url($logo); ?>" alt="Logo" class="landing-logo">
    <?php endif; ?>

    <h1 class="landing-title">ABRIMOS MUY<br>PRONTO.</h1>

    <div class="countdown" id="countdown">
        <div><strong id="days">0</strong><span>days</span></div>
        <div><strong id="hours">0</strong><span>hrs</span></div>
        <div><strong id="minutes">0</strong><span>min</span></div>
        <div><strong id="seconds">0</strong><span>sec</span></div>
    </div>

    <form class="notify-form">
        <input type="email" placeholder="Correo electrónico" required>
        <button type="submit">¡Avísame!</button>
    </form>

</section>

<script>
    // Cuenta regresiva simple a una fecha futura
    const targetDate = new Date("2025-07-01T00:00:00").getTime();

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = targetDate - now;

        if (distance <= 0) return;

        document.getElementById("days").textContent = Math.floor(distance / (1000 * 60 * 60 * 24));
        document.getElementById("hours").textContent = Math.floor((distance / (1000 * 60 * 60)) % 24);
        document.getElementById("minutes").textContent = Math.floor((distance / (1000 * 60)) % 60);
        document.getElementById("seconds").textContent = Math.floor((distance / 1000) % 60);
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
</script>