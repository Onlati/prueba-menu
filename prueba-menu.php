<?php
/**
 * Plugin Name: Prueba Menu
 * Description: Plugin que inyecta un menú (Header + Versión Móvil) a través del shortcode [prueba-menu].
 * Version: 1.0.0
 * Author: Marco Hurtado
 */

if (!defined('ABSPATH')) {
    exit;
}

function prueba_menu_shortcode() {
    ob_start();
    ?>
<header class="headers" id="headers-movil" data-header-sticky="true">
    <div class="headers__container">
      <a class="headers__logo" id="logo" href="" title="Formación Online: KSchool">
            <img class="headers__img" style="max-width: 9rem;" src="https://prueba.pixelariun.com/wp-content/plugins/menu/src/img/logo.png" alt="logo Kschool">
      </a>
      <nav class="headers__nav">
        <div class="headers__nav-container">
          <ul class="headers__content" style="padding-inline-start: 0px !important;" id="menu-menu-principal">
            <li class="headers__item">
              <div class="headers__dropdown">
                <span class="headers__dropdown-title">Programas</span>
              </div>
              <div class="headers__dropdown-inner">
                <ul class="headers__subnav">
                  <li><a class="headers__link" href="#">Marketing School</a></li>
                  <li><a class="headers__link" href="#">Tech School</a></li>
                  <li><a class="headers__link" href="#">Business School</a></li>
                </ul>
              </div>
            </li>
            <li class="headers__item">
              <div class="headers__dropdown">
                <span class="headers__dropdown-title">Somos KS</span>
              </div>
              <div class="headers__dropdown-inner">
                <ul class="headers__subnav">
                  <li><a class="headers__link" href="#">Conócenos</a></li>
                  <li><a class="headers__link" href="#">Profesores</a></li>
                </ul>
              </div>
            </li>
            <li class="headers__item">
              <div class="headers__dropdown">
                <span class="headers__dropdown-title">KS Talent</span>
              </div>
              <div class="headers__dropdown-inner">
                <ul class="headers__subnav">
                  <li><a class="headers__link" href="#">Empleo</a></li>
                  <li><a class="headers__link" href="#">Eventos</a></li>
                </ul>
              </div>
            </li>
            <li class="headers__item -link">
              <a class="headers__link" href="#">Blog</a>
            </li>

            
            <li class="headers__item -job">
              <a class="headers__link" href="#">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M27 7H22V6C22 5.20435 21.6839 4.44129 21.1213 3.87868C20.5587 3.31607 19.7956 3 19 3H13C12.2044 3 11.4413 3.31607 10.8787 3.87868C10.3161 4.44129 10 5.20435 10 6V7H5C4.46957 7 3.96086 7.21071 3.58579 7.58579C3.21071 7.96086 3 8.46957 3 9V25C3 25.5304 3.21071 26.0391 3.58579 26.4142C3.96086 26.7893 4.46957 27 5 27H27C27.5304 27 28.0391 26.7893 28.4142 26.4142C28.7893 26.0391 29 25.5304 29 25V9C29 8.46957 28.7893 7.96086 28.4142 7.58579C28.0391 7.21071 27.5304 7 27 7ZM12 6C12 5.73478 12.1054 5.48043 12.2929 5.29289C12.4804 5.10536 12.7348 5 13 5H19C19.2652 5 19.5196 5.10536 19.7071 5.29289C19.8946 5.48043 20 5.73478 20 6V7H12V6ZM27 9V14.2013C23.6247 16.0385 19.8429 17.0007 16 17C12.1573 17.0007 8.37553 16.0389 5 14.2025V9H27ZM27 25H5V16.455C8.42491 18.1302 12.1873 19.0007 16 19C19.8127 19.0001 23.5751 18.1292 27 16.4538V25ZM13 14C13 13.7348 13.1054 13.4804 13.2929 13.2929C13.4804 13.1054 13.7348 13 14 13H18C18.2652 13 18.5196 13.1054 18.7071 13.2929C18.8946 13.4804 19 13.7348 19 14C19 14.2652 18.8946 14.5196 18.7071 14.7071C18.5196 14.8946 18.2652 15 18 15H14C13.7348 15 13.4804 14.8946 13.2929 14.7071C13.1054 14.5196 13 14.2652 13 14Z" fill="white"></path>
                </svg>
                <span class="headers__button-text">Empleo</span>
              </a>
            </li>
            
            
            <li class="headers__item -login">
              <a class="headers__link" href="#">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M28.865 26.5C26.9613 23.2087 24.0275 20.8487 20.6038 19.73C22.2973 18.7218 23.6131 17.1856 24.349 15.3572C25.085 13.5289 25.2004 11.5095 24.6776 9.60919C24.1548 7.70889 23.0226 6.03274 21.455 4.83815C19.8873 3.64357 17.9709 2.9966 16 2.9966C14.0291 2.9966 12.1127 3.64357 10.545 4.83815C8.9774 6.03274 7.84525 7.70889 7.32243 9.60919C6.79961 11.5095 6.91504 13.5289 7.65099 15.3572C8.38694 17.1856 9.70271 18.7218 11.3963 19.73C7.9725 20.8475 5.03875 23.2075 3.135 26.5C3.06519 26.6138 3.01888 26.7405 2.99881 26.8725C2.97875 27.0045 2.98532 27.1392 3.01816 27.2687C3.05099 27.3981 3.10942 27.5197 3.18999 27.6262C3.27056 27.7327 3.37165 27.8219 3.48728 27.8887C3.60292 27.9555 3.73076 27.9985 3.86326 28.0151C3.99577 28.0316 4.13025 28.0215 4.25878 27.9853C4.38731 27.9491 4.50728 27.8874 4.61161 27.8041C4.71595 27.7208 4.80253 27.6174 4.86625 27.5C7.22125 23.43 11.3838 21 16 21C20.6163 21 24.7788 23.43 27.1338 27.5C27.1975 27.6174 27.2841 27.7208 27.3884 27.8041C27.4927 27.8874 27.6127 27.9491 27.7412 27.9853C27.8698 28.0215 28.0042 28.0316 28.1367 28.0151C28.2692 27.9985 28.3971 27.9555 28.5127 27.8887C28.6284 27.8219 28.7294 27.7327 28.81 27.6262C28.8906 27.5197 28.949 27.3981 28.9818 27.2687C29.0147 27.1392 29.0213 27.0045 29.0012 26.8725C28.9811 26.7405 28.9348 26.6138 28.865 26.5ZM9 12C9 10.6155 9.41055 9.26215 10.1797 8.11101C10.9489 6.95986 12.0421 6.06265 13.3212 5.53284C14.6003 5.00303 16.0078 4.8644 17.3656 5.1345C18.7235 5.4046 19.9708 6.07128 20.9497 7.05025C21.9287 8.02922 22.5954 9.2765 22.8655 10.6344C23.1356 11.9922 22.997 13.3997 22.4672 14.6788C21.9373 15.9579 21.0401 17.0511 19.889 17.8203C18.7379 18.5895 17.3845 19 16 19C14.1441 18.998 12.3648 18.2599 11.0524 16.9476C9.74012 15.6352 9.00199 13.8559 9 12Z" fill="white"></path>
                </svg>
                <span class="headers__button-text">Campus</span>
              </a>
            </li>
            
            
            
          </ul>
        </div>
      </nav>
      <nav class="headers__buttons">
        <ul class="headers__buttons-container">
          <li class="headers__button-item">
            <a class="headers__login" href="#">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M28.865 26.5C26.9613 23.2087 24.0275 20.8487 20.6038 19.73C22.2973 18.7218 23.6131 17.1856 24.349 15.3572C25.085 13.5289 25.2004 11.5095 24.6776 9.60919C24.1548 7.70889 23.0226 6.03274 21.455 4.83815C19.8873 3.64357 17.9709 2.9966 16 2.9966C14.0291 2.9966 12.1127 3.64357 10.545 4.83815C8.9774 6.03274 7.84525 7.70889 7.32243 9.60919C6.79961 11.5095 6.91504 13.5289 7.65099 15.3572C8.38694 17.1856 9.70271 18.7218 11.3963 19.73C7.9725 20.8475 5.03875 23.2075 3.135 26.5C3.06519 26.6138 3.01888 26.7405 2.99881 26.8725C2.97875 27.0045 2.98532 27.1392 3.01816 27.2687C3.05099 27.3981 3.10942 27.5197 3.18999 27.6262C3.27056 27.7327 3.37165 27.8219 3.48728 27.8887C3.60292 27.9555 3.73076 27.9985 3.86326 28.0151C3.99577 28.0316 4.13025 28.0215 4.25878 27.9853C4.38731 27.9491 4.50728 27.8874 4.61161 27.8041C4.71595 27.7208 4.80253 27.6174 4.86625 27.5C7.22125 23.43 11.3838 21 16 21C20.6163 21 24.7788 23.43 27.1338 27.5C27.1975 27.6174 27.2841 27.7208 27.3884 27.8041C27.4927 27.8874 27.6127 27.9491 27.7412 27.9853C27.8698 28.0215 28.0042 28.0316 28.1367 28.0151C28.2692 27.9985 28.3971 27.9555 28.5127 27.8887C28.6284 27.8219 28.7294 27.7327 28.81 27.6262C28.8906 27.5197 28.949 27.3981 28.9818 27.2687C29.0147 27.1392 29.0213 27.0045 29.0012 26.8725C28.9811 26.7405 28.9348 26.6138 28.865 26.5ZM9 12C9 10.6155 9.41055 9.26215 10.1797 8.11101C10.9489 6.95986 12.0421 6.06265 13.3212 5.53284C14.6003 5.00303 16.0078 4.8644 17.3656 5.1345C18.7235 5.4046 19.9708 6.07128 20.9497 7.05025C21.9287 8.02922 22.5954 9.2765 22.8655 10.6344C23.1356 11.9922 22.997 13.3997 22.4672 14.6788C21.9373 15.9579 21.0401 17.0511 19.889 17.8203C18.7379 18.5895 17.3845 19 16 19C14.1441 18.998 12.3648 18.2599 11.0524 16.9476C9.74012 15.6352 9.00199 13.8559 9 12Z" fill="white"></path>
              </svg>
              <span class="headers__button-text">Campus</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="headers__logo-unir">
        <picture>
          <img src="https://prueba.pixelariun.com/wp-content/plugins/menu/src/img/unir.svg" alt="UNIR">
        </picture>
      </div>
      <div id="nav-icon" class="headers__hamburguer" data-open="false">
        <div class="headers__hamburguer-icon"></div>
      </div>
    </div>
  </header>
    <?php
    return ob_get_clean();
}
add_shortcode('prueba-menu', 'prueba_menu_shortcode');

function prueba_menu_enqueue_assets() {
    $plugin_url = plugin_dir_url(__FILE__);

    wp_enqueue_style(
        'prueba-menu-styles',
        $plugin_url . 'dist/style.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_script(
        'prueba-menu-scripts',
        $plugin_url . 'dist/main.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'prueba_menu_enqueue_assets');