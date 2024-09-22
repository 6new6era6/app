<?php session_start(); 
$_SESSION['title_name'] = $_GET['title_name'];
$_SESSION['utm_campaign'] = $_GET['utm_campaign'];
$_SESSION['click_id'] = $_GET['external_id'];
$_SESSION['fbclid'] = $_GET['fbclid'];
$_SESSION['external_id'] = $_GET['external_id'];
$_SESSION['utm_source'] = $_GET['utm_source'];
$_SESSION['utm_placement'] = $_GET['utm_placement'];
$_SESSION['campaign_id'] = $_GET['campaign_id'];
$_SESSION['adset_id'] = $_GET['adset_id'];
$_SESSION['adset_name'] = $_GET['adset_name'];
$_SESSION['ad_name'] = $_GET['ad_name'];
$_SESSION['mbr'] = $_GET['mbr'];
$_SESSION['pixel'] = $_GET['pixel'];

?>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
  <meta name="description" content="Download App">
  <meta name="facebook-domain-verification" content="phqys2qttpiyf05hgv27xys8pbnwhh">
  <title>💸X🚀<?php echo $_GET['title_name']?></title>
  <link rel="icon" type="image/ico" href="favicon.ico">
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/main.min.js"></script>
  
  <link rel="manifest" href="manifest.json">
  <link rel="apple-touch-icon" href="images/65_3.png">
  <link rel="apple-touch-icon" sizes="152x152" href="images/65_2.png">
  <link rel="apple-touch-icon" sizes="180x180" href="images/65_1.png">
  <link rel="apple-touch-icon" sizes="167x167" href="images/65_4.png">
  <link rel="apple-touch-startup-image" href="/native/4/65/65.png?s=300x300">
  <meta name="apple-mobile-web-app-title" content="<?php echo $_GET['title_name']?>">
  <meta name="apple-mobile-web-app-capable" content="yes">


  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/style.min.css">
   <link rel="stylesheet" href="css/styles.css">
  <script async="" src="js/fbevents.js"></script>
  <!-- Facebook Pixel Code -->
  <script>
  !function (f, b, e, v, n, t, s) {
          if (f.fbq) return;
          n = f.fbq = function () {
            n.callMethod ?
              n.callMethod.apply(n, arguments) : n.queue.push(arguments)
          };
          if (!f._fbq) f._fbq = n;
          n.push = n;
          n.loaded = !0;
          n.version = '2.0';
          n.queue = [];
          t = b.createElement(e);
          t.async = !0;
          t.src = v;
          s = b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
          'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?php echo $_GET['pixel']?>');
        fbq('track', 'PageView');
  </script> <noscript><img height="1" width="1" style="display:none" alt="facebook"
                   src="https://www.facebook.com/tr?id=<?php echo $_GET['pixel']?>&ev=PageView&noscript=1"
        /></noscript>
</head>

<body data-pwauid="SYfS9lboOfcXYwTo">
  <!-- Прелоадер -->
    <div id="preloader">
        <div class="loader"></div>
    </div>

  <main id="main-content" style="display: none;">
    <div class="wrapper">
      <div class="wrp_top_prev flex">
        <div class="app_preview"><img class="cover_full" src="images/65.png" alt=""></div>
        <div class="info_app">
          <div class="titl_app">💸X🚀</div>
          <div class="app_descr"><?php echo $_GET['title_name']?> Inc.</div>
          
           <a href="{offer}" class="btn_get" id="btn_open" style="display: none;"><div>ОТКРЫТЬ</div></a>
     
          <a href="javascript:void(0);" class="btn_get" id="btn_get" style="display: none;"><div>Установить</div></a>

          <!-- Прогрес-бар -->
          <div class="progress-bar" id="progress-bar">
            <div class="progress" id="progress"></div>
          </div>
        </div>
      </div>
      <div class="hr"></div>
      <div class="wrp_sgsg text-center">
        <div class="into_sgsg swiper" id="slider_info">
          <div class="swiper-wrapper">
            <div class="item_insff swiper-slide">
              <div class="ratin_str">Рейтинг</div>
              <div class="star_count">4.8</div>
              <div class="item_insgg flex justify-center">
                <div class="rating_wrap flex items-center">
                  <div class="icon_rating" style="width: 96%"></div>
                </div>
              </div>
            </div>
            <div class="item_insff swiper-slide">
              <div class="ratin_str">18+</div>
              <div class="star_count">18+</div>
              <div class="item_insgg flex justify-center"></div>
            </div>
            <div class="item_insff swiper-slide">
              <div class="ratin_str">Рейтинг</div>
              <div class="star_count"><span class="no_poo">No.</span>1</div>
              <div class="item_insgg flex justify-center"></div>
            </div>
            <div class="item_insff swiper-slide">
              <div class="ratin_str">18+</div>
              <div class="star_count flex items-center justify-center"><svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.24063 19H15.7594C17.9267 19 19 17.9267 19 15.8007V3.19935C19 1.07333 17.9267 0 15.7594 0H3.24063C1.08365 0 0 1.06301 0 3.19935V15.8007C0 17.937 1.08365 19 3.24063 19ZM1.6616 15.7181V3.28191C1.6616 2.20858 2.22922 1.6616 3.26127 1.6616H15.7387C16.7605 1.6616 17.3384 2.20858 17.3384 3.28191V15.7181C17.3384 16.5231 17.0081 17.0288 16.4096 17.2352C15.522 14.7067 12.7974 12.9419 9.51548 12.9419C6.22325 12.9419 3.49864 14.717 2.60076 17.2455C1.99185 17.0391 1.6616 16.5334 1.6616 15.7181ZM9.50516 11.2184C11.4764 11.239 13.0348 9.55676 13.0348 7.34818C13.0348 5.27376 11.4764 3.56056 9.50516 3.56056C7.53395 3.56056 5.96524 5.27376 5.97556 7.34818C5.98588 9.55676 7.53395 11.1977 9.50516 11.2184Z" fill="#8E8E93"></path></svg></div>
              <div class="item_insgg flex justify-center">Без рекламы </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hr"></div>
      <div class="infl_new">
        <div class="new_titl">О приложении</div>
        <div class="title_vers">Текущая версия 7.4</div>
        <div class="descr_simp relative" id="wrap_description">
          <p>Откройте для себя захватывающий мир стремительного заработка с платформой <?php echo $_GET['title_name']?>! 🚀 Это инновационное решение для автоматической торговли, которое поможет вам быстро увеличить свой капитал. 💼 Почувствуйте прилив адреналина, когда алгоритмы платформы совершают прибыльные сделки за вас, принося существенные доходы. 💰 Уникальные торговые возможности, простота использования и потенциально высокие прибыли делают <?php echo $_GET['title_name']?> идеальным выбором для тех, кто хочет приумножить свое состояние. 🌟 Пополните баланс и начните торговать прямо сейчас, чтобы ощутить всю мощь автоматизированной торговли и двигаться к финансовой свободе!</p>
          <div class="shadow_content"></div>
        </div>
        <div class="more" id="openFullText">Подробнее...</div>
        <script>
        const actionFullText = document.getElementById("openFullText");
                actionFullText && actionFullText.addEventListener("click", t => {
                  actionFullText.classList.toggle("active"), actionFullText.classList.contains("active") ? (document.getElementById("wrap_description").classList.add("full"), actionFullText.textContent = "Меньше") : (document.getElementById("wrap_description").classList.remove("full"), actionFullText.textContent = "Подробнее...")
                });
        </script>
      </div>
      <div class="hr"></div>
      <div>
        <div class="titl_pprpesg">О приложении</div>
        <div class="wrp_temp_pre scr_dis_still swiper" id="slider_preview">
          <div class="int_p_previ_temp swiper-wrapper">
            <div class="itm_previ swiper-slide"><img class="cover_full" src="images/65.1.jpg" alt=""></div>
            <div class="itm_previ swiper-slide"><img class="cover_full" src="images/65.2.jpg" alt=""></div>
            <div class="itm_previ swiper-slide"><img class="cover_full" src="images/65.3.jpg" alt=""></div>
            <div class="itm_previ swiper-slide"><img class="cover_full" src="images/65.4.jpg" alt=""></div>
          </div>
        </div>
      </div>
      <div class="hr"></div>
      <div class="reviews">
        <div class="titl_inf">Оценки и отзывы</div>
        <div class="flex items-center rat_rev_g">
          <div class="left_rating flex-none">
            <div class="inline-block text-center">
              <div class="big_rating">4.8</div>
              <div class="from_ratt"></div>
            </div>
          </div>
          <div class="right_reviews grow">
            <div class="flex items-center">
              <div class="flex-none stars_iocc flex items-center justify-end"><img src="images/star_small.svg" alt=""> <img src="images/star_small.svg" alt=""> <img src="images/star_small.svg" alt=""> <img src="images/star_small.svg" alt=""> <img src="images/star_small.svg" alt=""></div>
              <div class="grow relative line_rati">
                <div class="progres_ratt" style="width: 82%"></div>
              </div>
            </div>
            <div class="flex items-center">
              <div class="flex-none stars_iocc flex items-center justify-end"><img src="images/star_small.svg" alt=""> <img src="images/star_small.svg" alt=""> <img src="images/star_small.svg" alt=""> <img src="images/star_small.svg" alt=""></div>
              <div class="grow relative line_rati">
                <div class="progres_ratt" style="width: 17%"></div>
              </div>
            </div>
            <div class="flex items-center">
              <div class="flex-none stars_iocc flex items-center justify-end"><img src="images/star_small.svg" alt=""> <img src="images/star_small.svg" alt=""> <img src="images/star_small.svg" alt=""></div>
              <div class="grow relative line_rati">
                <div class="progres_ratt" style="width: 0.51%"></div>
              </div>
            </div>
            <div class="flex items-center">
              <div class="flex-none stars_iocc flex items-center justify-end"><img src="images/star_small.svg" alt=""> <img src="images/star_small.svg" alt=""></div>
              <div class="grow relative line_rati">
                <div class="progres_ratt" style="width: 0.01%"></div>
              </div>
            </div>
            <div class="flex items-center">
              <div class="flex-none stars_iocc flex items-center justify-end"><img src="images/star_small.svg" alt=""></div>
              <div class="grow relative line_rati">
                <div class="progres_ratt" style="width: 0%"></div>
              </div>
            </div>
            <div class="count_oten">Всего : 8</div>
          </div>
        </div>
        <div class="swiper" id="slider_reviews">
          <div class="swiper-wrapper">
            <div class="item_review_g swiper-slide">
              <div class="in_to_review">
                <div class="stars_sg"> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> </div>
                <div class="dat_erd">Toxa , 25.07.24</div>
                <div class="inf_review_g">
                  <div class="dis_ag"></div>
                  <div>Увидел рекламу <?php echo $_GET['title_name']?> и сначала был настроен скептически, но решил попробовать. Применил стратегию постепенного увеличения вложений после каждой успешной сделки, и это реально сработало! Даже если были небольшие потери, я возвращался к минимальной сумме и снова выходил в плюс. Система автоматической торговли оказалась отличным помощником — все быстро, просто и с минимальными рисками. Рекомендую попробовать, если хотите стабильно зарабатывать! 💸💸💸💸💸</div>
                </div>
              </div>
            </div>
            <div class="item_review_g swiper-slide">
              <div class="in_to_review">
                <div class="stars_sg"> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> </div>
                <div class="dat_erd">Nurbolat Bolatov , 18.07.24</div>
                <div class="inf_review_g">
                  <div class="dis_ag"></div>
                  <div><?php echo $_GET['title_name']?> меня впечатлил! Платформа с удобным и интуитивно понятным интерфейсом, где разберётся даже новичок. Всё настолько просто, что можно начать зарабатывать буквально с первых минут. Я человек целеустремленный, и теперь у меня есть надёжный инструмент для автоматической торговли, который работает за меня в любое время дня и ночи. 🔥 Если хотите попробовать свои силы в инвестициях и быстро нарастить капитал — это отличный вариант!</div>
                </div>
              </div>
            </div>
            <div class="item_review_g swiper-slide">
              <div class="in_to_review">
                <div class="stars_sg"> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> </div>
                <div class="dat_erd">dikiy95 , 24.07.24</div>
                <div class="inf_review_g">
                  <div class="dis_ag"></div>
                  <div>Очень хорошее приложение. Работает на раз два. Мне очень сильно нравится. Деньги завожу. Умножаю. И вывожу без проблем . Не тупит .  Не тормозит. Все очень круто</div>
                </div>
              </div>
            </div>
            <div class="item_review_g swiper-slide">
              <div class="in_to_review">
                <div class="stars_sg"> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> </div>
                <div class="dat_erd">Anka , 01.08.24</div>
                <div class="inf_review_g">
                  <div class="dis_ag"></div>
                  <div>Классная платформа! Зарегистрировался быстро, все сработало сразу. Сделки часто в плюс, приятно видеть, как баланс растет. Авто торговля вообще топ, настроил и оно само за тебя работает. Рекомендую, реально!</div>
                </div>
              </div>
            </div>
            <div class="item_review_g swiper-slide">
              <div class="in_to_review">
                <div class="stars_sg"> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> </div>
                <div class="dat_erd">Princessa7 , 28.05.24</div>
                <div class="inf_review_g">
                  <div class="dis_ag"></div>
                  <div>Давно искал нормальную платформу для торговли, увидел рекламу <?php echo $_GET['title_name']?> и решил попробовать. Установилось всё быстро, регистрация простая. Сразу получил приветственные бонусы, сделки часто успешные, и прибыль реально идёт. 👍 Рекомендую всем, кто хочет попробовать!</div>
                </div>
              </div>
            </div>
            <div class="item_review_g swiper-slide">
              <div class="in_to_review">
                <div class="stars_sg"> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> </div>
                <div class="dat_erd">vodoochild , 18.05.24</div>
                <div class="inf_review_g">
                  <div class="dis_ag"></div>
                  <div>Отличное приложение для торговли! Пользоваться одно удовольствие. Интерфейс яркий и понятный, всё работает без задержек. Установилось на смартфон быстро. Рекомендую всем, кто хочет легко начать зарабатывать. Загрузите и начинайте прямо сейчас!.</div>
                </div>
              </div>
            </div>
            <div class="item_review_g swiper-slide">
              <div class="in_to_review">
                <div class="stars_sg"> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> </div>
                <div class="dat_erd">Адам , 17.04.24</div>
                <div class="inf_review_g">
                  <div class="dis_ag"></div>
                  <div>Разработчикам браво,приложение хорошее,пользуюсь не в первый раз,достаточно простое в использовании,отлично работает и не зависает,все функции понятны,также оформление просто на высоте.</div>
                </div>
              </div>
            </div>
            <div class="item_review_g swiper-slide">
              <div class="in_to_review">
                <div class="stars_sg"> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> </div>
                <div class="dat_erd">baha1966 , 06.06.24</div>
                <div class="inf_review_g">
                  <div class="dis_ag"></div>
                  <div>Недавно скачал на смартфон <?php echo $_GET['title_name']?>. Очень понравилось! С каждым использованием вижу прибыль. По работе платформы, интерфейсу и скорости никаких нареканийвсё быстро и удобно. Автоматические сделки приносят результат, и пользоваться одно удовольствие</div>
                </div>
              </div>
            </div>
            <div class="item_review_g swiper-slide">
              <div class="in_to_review">
                <div class="stars_sg"> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> <img src="images/star.svg" alt=""> </div>
                <div class="dat_erd">zhendoss , 18.04.24</div>
                <div class="inf_review_g">
                  <div class="dis_ag"></div>
                  <div>Отличное приложение! Давно интересуюсь инвестициями, и знакомый порекомендовал именно эту програму. Простое управление счетом, а главное — приносит прибыль. Рекомендую всем, кто хочет легко начать зарабатывать!</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hr"></div>
      <div class="info">
        <div class="titl_inf">Дополнительная информация</div>
        <div>
          <div class="itm_info_sg flex items-center justify-between">
            <div class="itm_sgsg">Обновлено</div>
            <div class="itm_sgsg">1 сент 2024</div>
          </div>
          <div class="itm_info_sg flex items-center justify-between">
            <div class="itm_sgsg">Размер</div>
            <div class="itm_sgsg">20.1 MB</div>
          </div>
          <div class="itm_info_sg flex items-center justify-between">
            <div class="itm_sgsg">Установок</div>
            <div class="itm_sgsg">10000+</div>
          </div>
          <div class="itm_info_sg flex items-center justify-between">
            <div class="itm_sgsg">Текущая версия</div>
            <div class="itm_sgsg">7.4</div>
          </div>
          <div class="itm_info_sg flex items-center justify-between">
            <div class="itm_sgsg">18+</div>
            <div class="itm_sgsg">18+</div>
          </div>
          <div class="itm_info_sg flex items-center justify-between">
            <div class="itm_sgsg">Разработчик</div>
            <div class="itm_sgsg"><?php echo $_GET['title_name']?> Inc.</div>
          </div>
          
          <div class="itm_info_sg flex items-center justify-between">
            <div class="itm_sgsg">Условия:</div>
            <a href="privacy.html"><div class="itm_sgsg"><u>Privacy, Terms, Cookies</u></div></a>
          </div>
          <div class="itm_info_sg flex items-center justify-between">
            <div class="itm_sgsg">Риски</div>
            <div class="itm_sgsg">Инвестиции связаны с риском, включая возможную потерю основной суммы.</div>
          </div>
        </div>
      </div>
    </div>
  </main>
<script src="js/swiper-bundle.min.js"></script>
  <script src="js/main.min.js"></script>

  <!-- Основний скрипт -->
  <script type="text/javascript">
    let deferredPrompt;

    window.addEventListener('load', function() {
      const preloader = document.getElementById('preloader');
      const mainContent = document.getElementById('main-content');

      // Ховаємо прелоадер та показуємо основний контент
      if (preloader) {
        preloader.style.display = 'none';
      }
      if (mainContent) {
        mainContent.style.display = 'block';
      }

      if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('service-worker.js')
          .then(function(registration) {
            console.log('Service Worker зареєстровано: ', registration);
          })
          .catch(function(error) {
            console.error('Помилка при реєстрації Service Worker: ', error);
          });
      }

      const btnGet = document.getElementById('btn_get');
      const btnOpen = document.getElementById('btn_open');

      // Спочатку ховаємо обидві кнопки
      btnGet.style.display = 'none';
      btnOpen.style.display = 'none';

      if (isPWAInstalled()) {
        // PWA вже встановлено
        setupOpenButton();
      } else {
        // Очікуємо подію beforeinstallprompt
        let promptTimeout = setTimeout(() => {
          if (!deferredPrompt) {
            // beforeinstallprompt не викликалась, PWA не підтримується
            setupOpenButton();
          }
        }, 3000); // Час очікування можна налаштувати

        window.addEventListener('beforeinstallprompt', (e) => {
          clearTimeout(promptTimeout);
          e.preventDefault();
          deferredPrompt = e;
          setupInstallButton();
        });
      }

      // Слухаємо подію встановлення PWA
      window.addEventListener('appinstalled', () => {
        console.log('PWA було встановлено');
        setupOpenButton();
      });
    });

    function isPWAInstalled() {
      return window.matchMedia('(display-mode: standalone)').matches || window.navigator.standalone;
    }

    function setupInstallButton() {
      const btnGet = document.getElementById('btn_get');
      btnGet.style.display = 'inline-block';
      btnGet.textContent = 'Установить';
      btnGet.addEventListener('click', () => {
        console.log('Кнопка "Установить" натиснута.');
        if (deferredPrompt) {
          deferredPrompt.prompt();
          deferredPrompt.userChoice.then((choiceResult) => {
            if (choiceResult.outcome === 'accepted') {
              console.log('Користувач встановив PWA.');
              simulateProgress();
            } else {
              console.log('Користувач відхилив встановлення PWA.');
              setupOpenButton();
            }
            deferredPrompt = null;
          });
        } else {
          console.warn('deferredPrompt відсутній. beforeinstallprompt не викликався.');
          setupOpenButton();
        }
      });
    }

    function simulateProgress() {
      const progressBar = document.getElementById('progress-bar');
      const progress = document.getElementById('progress');

      if (progressBar && progress) {
        progressBar.style.display = 'block';
        let progressValue = 0;
        const steps = [
          { duration: 500, increment: 20 },
          { duration: 800, increment: 10 },
          { duration: 300, increment: 15 },
          { duration: 1200, increment: 30 },
          { duration: 700, increment: 25 }
        ];

        steps.forEach((step, index) => {
          setTimeout(() => {
            progressValue += step.increment;
            progress.style.width = `${progressValue}%`;

            if (progressValue >= 100) {
              setTimeout(() => {
                progressBar.style.display = 'none';
                setupOpenButton();
              }, 500);
            }
          }, step.duration * (index + 1));
        });
      } else {
        console.warn('Прогрес-бар не знайдено.');
        setupOpenButton();
      }
    }

    function setupOpenButton() {
      const btnGet = document.getElementById('btn_get');
      const btnOpen = document.getElementById('btn_open');
      btnGet.style.display = 'none';
      btnOpen.style.display = 'inline-block';
      btnOpen.textContent = 'ОТКРЫТЬ';

      btnOpen.addEventListener('click', (e) => {
        e.preventDefault();
        openPWA();
      });
    }

    function openPWA() {
      const offerUrl = '<?php echo htmlspecialchars($_GET['offer'] ?? '', ENT_QUOTES, 'UTF-8'); ?>';
      if (navigator.userAgent.includes('Android')) {
        // Формуємо intent URL для Android
        const packageName = 'org.chromium.webapk.p4dfzy4jEef'; // Замініть на ваш фактичний package name
        const intentUrl = `intent://${offerUrl.replace(/^https?:\/\//, '')}#Intent;scheme=https;package=${packageName};S.browser_fallback_url=${encodeURIComponent(offerUrl)};end`;
        window.location.href = intentUrl;
      } else if (window.matchMedia('(display-mode: standalone)').matches || window.navigator.standalone) {
        // Якщо PWA запущено в режимі standalone
        window.location.href = offerUrl;
      } else {
        // Якщо PWA не встановлено або інша платформа
        window.location.href = offerUrl;
      }
      console.log('PWA відкрито.');
    }
  </script>
</body>

</html>