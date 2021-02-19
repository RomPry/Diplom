<!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container nav-footer">
        <div class="footer-center nav-footer-item nav col-sm-3">
          <h3>Магазин</h3>
           <ul>
                <li class="<?= ($title === 'Рюкзаки') ? 'active' : ''; ?>"><a href="<?= FULL_SITE_ROOT . 'products/Ryukzaki/index'; ?>">Рюкзаки</a>
                </li>
                <li class="<?= ($title === 'Снаряжение') ? 'active' : ''; ?>"><a href="<?= FULL_SITE_ROOT . 'products/Snaryazhenie/index'; ?>">Снаряжение</a>
                </li>
                <li class="<?= ($title === 'Одежда') ? 'active' : ''; ?>"><a href="<?= FULL_SITE_ROOT . 'products/Odezhda/index'; ?>">Одежда</a>
                </li>
                <li class="<?= ($title === 'Обувь') ? 'active' : ''; ?>"><a href="<?= FULL_SITE_ROOT . 'products/Obuv/index'; ?>">Обувь</a>
                </li>  
           </ul>
        </div>
        <div class="footer-center nav-footer-item nav col-sm-3">
          <h3>О бренде</h3>
           <ul> 
              <li class="<?= ($title === 'История бренда') ? 'active' : ''; ?>"><a href="<?= FULL_SITE_ROOT . 'history/index'; ?>">История бренда</a></li>
              <li class="<?= ($title === 'Наша команда') ? 'active' : ''; ?>"><a href="<?= FULL_SITE_ROOT . 'our-team/index'; ?>">Наша команда</a></li>
              <li class="<?= ($title === 'Реквизиты') ? 'active' : ''; ?>"><a href="<?= FULL_SITE_ROOT . 'company-detail/index'; ?>">Реквизиты</a></li>
              <li class="<?= ($title === 'Контакты') ? 'active' : ''; ?>"><a href="<?= FULL_SITE_ROOT . 'contact/index'; ?>">Контакты</a></li>
           </ul>
        </div>
        <div class="footer-center nav-footer-item nav col-sm-3">
          <h3>Политика</h3>
          <ul> 
              <li class="<?= ($title === 'Безопасность') ? 'active' : ''; ?>"><a href="<?= FULL_SITE_ROOT . 'data-safety/index'; ?>">Безопасность</a></li>
              <li class="<?= ($title === 'Оплата') ? 'active' : ''; ?>"><a href="<?= FULL_SITE_ROOT . 'how-to-pay/index'; ?>">Оплата</a></li>
              <li class="<?= ($title === 'Доставка') ? 'active' : ''; ?>"><a href="<?= FULL_SITE_ROOT . 'delivery/index'; ?>">Доставка</a></li>
              <li class="<?= ($title === 'Возврат товара') ? 'active' : ''; ?>"><a href="<?= FULL_SITE_ROOT . 'return/index'; ?>">Возврат товара</a></li>
          </ul>
        </div>
        <div class="footer-center nav-footer-social">
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            © 2009 – 2021  |  ООО «Тунгусска»<br>
            Все права защищены.
            <ul class="footer-socials fh5co-social-icons">
                <li><a href="#vkontakte">
                    <i class="bx bxl-vk"></i>
                </a></li>
                <li><a href="#facebook">
                    <i class="bx bxl-facebook"></i>
                </a></li>
                <li><a href="#instagram">
                    <i class="bx bxl-instagram"></i>
                </a></li>
            </ul>
         </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  
  <!-- Custom Script -->
  <script src="<?= JS . '/index.js' ?>"></script>
</body>

</html>