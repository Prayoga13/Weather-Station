<?php

include 'layout/header.php'

?>

<!-- Container -->
<main class="main-container">

    <!-- Header Input -->
    <header class="input-container">
        <input type="text" placeholder="Cari Kota" class="city-input">
        <button class="search-btn">
            <span class="material-symbols-outlined">
                search
            </span>
        </button>
    </header>
    <!-- Akhir Header Input -->

    <!-- Weather Info -->
    <section class="weather-info" style="display: none;">
        <div class="location-date-container">
            <div class="location">
                <i class='bx bx-current-location' style="font-size: 25px;"></i>
                <h4 class="country-txt">Jakarta</h4>
            </div>
            <h5 class="current-date-txt regular-txt">Kam, 28 Nov 2024</h5>
        </div>

        <div class="weather-summary-container">
            <img src="assets/weather/clouds.svg" alt="" class="weather-summary-img">
            <div class="weather-summary-info">
                <h1 class="temp-txt">28°C</h1>
                <h3 class="condition-txt regular-txt">Clouds</h3>
            </div>
        </div>

        <div class="weather-conditions-container">
            <div class="condition-item">
                <i class='bx bx-droplet' style="font-size: 30px;"></i>
                <div class="condition-info">
                    <h5 class="regular-txt">Humidity</h5>
                    <h5 class="humidity-value-txt">55%</h5>
                </div>
            </div>

            <div class="condition-item">
                <i class='bx bx-wind' style="font-size: 30px;"></i>
                <div class="condition-info">
                    <h5 class="regular-txt">Wind Speed</h5>
                    <h5 class="wind-value-txt">4 M/s</h5>
                </div>
            </div>
        </div>

        <div class="forecast-items-container">
            <div class="forecast-item">
                <h5 class="forecast-item-date regular-txt">29 Nov</h5>
                <img src="assets/weather/thunderstorm.svg" alt="" class="forecast-item-img">
                <h5 class="forecast-item-temp">29°C</h5>
            </div>
            <div class="forecast-item">
                <h5 class="forecast-item-date regular-txt">30 Nov</h5>
                <img src="assets/weather/thunderstorm.svg" alt="" class="forecast-item-img">
                <h5 class="forecast-item-temp">29°C</h5>
            </div>
            <div class="forecast-item">
                <h5 class="forecast-item-date regular-txt">1 Des</h5>
                <img src="assets/weather/thunderstorm.svg" alt="" class="forecast-item-img">
                <h5 class="forecast-item-temp">29°C</h5>
            </div>
            <div class="forecast-item">
                <h5 class="forecast-item-date regular-txt">2 Des</h5>
                <img src="assets/weather/thunderstorm.svg" alt="" class="forecast-item-img">
                <h5 class="forecast-item-temp">29°C</h5>
            </div>
        </div>
    </section>
    <!-- Akhir Weather Info -->


    <!-- Search City -->
    <section class="search-city section-message">
        <img src="assets/message/search-city.png">
        <div>
            <h1>Search City</h1>
            <h4 class="regular-txt">
                Cari Kondisi Cuaca di Setiap Kota Di Dunia
            </h4>
        </div>
    </section>

    <section class="not-found section-message" style="display: none;">
        <img src="assets/message/not-found.png">
        <div>
            <h1>Search City</h1>
            <h4 class="regular-txt">
                Cari Kondisi Cuaca di Setiap Kota Di Dunia
            </h4>
        </div>
    </section>
    <!-- Akhir Search City -->

</main>

</body>