<!DOCTYPE html>
<html lang="ru" data-theme="dark" id="main">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/style.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/swiper.min.css') }}" >

    <script type="text/javascript" src="{{ asset('js/lottie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/aos.css') }}"></script>
    <title>Order Eat</title>
  </head>
  <body>
    <div class="preloader" style="transition: .3s all; opacity: 1;">
      <div
        style="width: 100%; height: 100%;"
        id="bodymovin"
      ></div>
    </div>
    <header class="header">
      <div class="container">
        <a class="logo" href="#">
          <svg
            width="152"
            height="25"
            viewBox="0 0 152 25"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              class="logo-path"
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M37.5364 5.62713V11.8162C35.7067 11.8162 34.4283 12.2267 33.701 13.0475C32.9737 13.8684 32.6101 14.9815 32.6102 16.3866V24.0877H26.4172V5.87254H32.5748V8.01743C33.1381 7.2671 33.8745 6.6639 34.7212 6.2592C35.5985 5.8352 36.5619 5.61938 37.5364 5.62713ZM50.9074 0.000678472V7.0688C50.2092 6.62345 49.4509 6.28005 48.6556 6.04902C47.923 5.84054 47.1652 5.73403 46.4036 5.73248C45.2208 5.72523 44.0487 5.95657 42.9575 6.41266C41.8663 6.86875 40.8784 7.54021 40.053 8.38683C39.2315 9.23737 38.5753 10.233 38.1177 11.323C37.6326 12.4685 37.3871 13.7011 37.3962 14.945C37.3794 17.4117 38.3336 19.7862 40.053 21.5561C40.8677 22.3804 41.836 23.0374 42.9032 23.4902C44.7224 24.26 46.7465 24.4022 48.6556 23.8943C49.4521 23.6748 50.2112 23.3369 50.9074 22.8921V24.0877H57.1004V0L50.9074 0.000678472ZM47.2481 18.8484C46.7458 18.8512 46.2484 18.7494 45.7877 18.5495C44.8859 18.1642 44.1676 17.4462 43.7821 16.545C43.5846 16.0715 43.483 15.5635 43.483 15.0505C43.483 14.5375 43.5846 14.0295 43.7821 13.556C44.1677 12.6549 44.886 11.937 45.7877 11.5517C46.4727 11.2568 47.2311 11.1762 47.9629 11.3206C48.6946 11.4649 49.3655 11.8275 49.887 12.3604C50.2207 12.7081 50.4889 13.1131 50.6788 13.556C50.8762 14.0295 50.9779 14.5375 50.9779 15.0505C50.9779 15.5635 50.8762 16.0715 50.6788 16.545C50.4889 16.9879 50.2207 17.393 49.887 17.7408C49.5435 18.0922 49.133 18.3713 48.6797 18.5616C48.2265 18.7518 47.7397 18.8494 47.2481 18.8484ZM68.1492 10.3385C67.2813 10.3385 66.5599 10.5437 65.9852 10.9541C65.3994 11.3784 64.9426 11.9565 64.6656 12.6244H71.3859C71.0809 11.7573 70.6176 11.1595 69.996 10.831C69.4302 10.5175 68.7961 10.3481 68.1492 10.3385ZM76.6998 20.4659C76.3042 21.0281 75.8501 21.5467 75.345 22.0131C74.797 22.5199 74.1883 22.957 73.5328 23.3142C72.8102 23.7059 72.0421 24.0071 71.2457 24.2108C70.3373 24.4413 69.403 24.5536 68.4658 24.5448C67.1184 24.556 65.7811 24.3113 64.525 23.824C63.3509 23.3723 62.2755 22.6977 61.358 21.8375C60.4598 20.9837 59.7471 19.9542 59.2643 18.8132C58.7519 17.6009 58.4944 16.2962 58.5077 14.9802C58.4978 13.6929 58.7554 12.4176 59.2643 11.2349C59.7511 10.1004 60.4567 9.07285 61.3409 8.21086C62.2393 7.34301 63.2967 6.65648 64.4553 6.18892C65.6726 5.69259 66.976 5.44164 68.2906 5.45047C69.5702 5.43447 70.8396 5.67977 72.0211 6.17131C73.1071 6.62457 74.089 7.29475 74.9066 8.14073C75.7198 8.9974 76.3539 10.0075 76.7719 11.112C77.2252 12.3022 77.452 13.5666 77.4406 14.8401V15.7193C77.4406 15.9304 77.4349 16.1413 77.4235 16.3521C77.4121 16.5629 77.4064 16.7035 77.4064 16.774H64.5601C64.859 17.5797 65.392 18.2777 66.0908 18.7785C66.7951 19.2747 67.6395 19.5334 68.501 19.5169C69.3167 19.5355 70.1231 19.3416 70.841 18.9543C71.4785 18.6049 72.0453 18.1398 72.5124 17.5829L76.6998 20.4659ZM90.0005 5.62627V11.8154C88.1708 11.8154 86.8923 12.2258 86.1651 13.0467C85.4378 13.8676 85.0742 14.9809 85.0743 16.3866V24.0877H78.8811V5.87254H85.0389V8.01743C85.6022 7.2671 86.3385 6.6639 87.1853 6.2592C88.0626 5.83508 89.0259 5.61851 90.0005 5.62627Z"
              fill="#010005"
            />
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M107.418 10.3384C106.55 10.3384 105.829 10.5436 105.254 10.9541C104.668 11.3782 104.211 11.9563 103.934 12.6242H110.654C110.349 11.757 109.886 11.1592 109.265 10.8308C108.699 10.5172 108.064 10.3482 107.417 10.3386L107.418 10.3384ZM115.968 20.4658C115.573 21.0281 115.119 21.5467 114.614 22.013C114.066 22.5198 113.457 22.9568 112.802 23.3141C112.079 23.7058 111.311 24.007 110.514 24.2108C109.606 24.4413 108.672 24.5535 107.735 24.5448C106.387 24.5559 105.05 24.3113 103.794 23.8239C102.62 23.3722 101.544 22.6975 100.627 21.8372C99.7287 20.9834 99.016 19.954 98.5332 18.813C98.0208 17.6006 97.7633 16.2959 97.7766 14.98C97.7666 13.6927 98.0243 12.4173 98.5332 11.2347C99.0197 10.1002 99.7251 9.07253 100.609 8.21044C101.508 7.34268 102.565 6.65617 103.724 6.18851C104.941 5.69221 106.244 5.44126 107.559 5.45006C108.839 5.43409 110.108 5.67937 111.289 6.17089C112.375 6.62412 113.357 7.2943 114.175 8.14032C114.988 8.99699 115.622 10.0071 116.04 11.1116C116.494 12.3018 116.72 13.5662 116.709 14.8397V15.7189C116.709 15.93 116.703 16.1409 116.692 16.3517C116.68 16.5625 116.675 16.7031 116.675 16.7736H103.829C104.128 17.5793 104.661 18.2773 105.359 18.7781C106.064 19.2743 106.908 19.533 107.77 19.5165C108.585 19.5351 109.392 19.3412 110.11 18.9539C110.747 18.6045 111.314 18.1394 111.781 17.5825L115.968 20.466V20.4658ZM126.877 24.194C125.674 24.2021 124.482 23.9627 123.375 23.4908C122.308 23.0379 121.34 22.3809 120.525 21.5567C118.806 19.7868 117.852 17.4123 117.869 14.9456C117.859 13.7018 118.105 12.4692 118.59 11.3236C119.047 10.2336 119.704 9.23798 120.525 8.38744C121.351 7.54057 122.339 6.8689 123.43 6.41266C124.521 5.95642 125.694 5.72499 126.877 5.73224C127.638 5.73377 128.396 5.84029 129.128 6.04879C129.924 6.27978 130.682 6.62318 131.38 7.06856V5.87247H137.573V24.0878H131.38V22.8922C130.684 23.337 129.925 23.6748 129.128 23.8942C128.394 24.0913 127.637 24.1918 126.877 24.1931V24.194ZM127.72 11.2527C127.218 11.2498 126.72 11.3517 126.26 11.5516C125.358 11.9369 124.64 12.6548 124.254 13.5559C124.057 14.0295 123.955 14.5374 123.955 15.0504C123.955 15.5634 124.057 16.0714 124.254 16.5449C124.64 17.4461 125.358 18.1641 126.26 18.5494C126.945 18.8443 127.703 18.9249 128.435 18.7805C129.167 18.6362 129.838 18.2736 130.359 17.7407C130.693 17.3929 130.961 16.9878 131.151 16.5449C131.348 16.0714 131.45 15.5634 131.45 15.0504C131.45 14.5374 131.348 14.0295 131.151 13.5559C130.961 13.1131 130.693 12.7081 130.359 12.3603C130.016 12.0089 129.605 11.7297 129.152 11.5395C128.698 11.3492 128.212 11.2517 127.72 11.2527ZM147.882 5.87247H151.999V11.3929H147.883V16.7378C147.883 17.4882 148.041 18.0332 148.358 18.3729C148.675 18.7127 149.173 18.8827 149.854 18.8829H152V24.0873H148.516C146.1 24.0873 144.359 23.5657 143.291 22.5225C142.224 21.4793 141.69 19.8207 141.69 17.5467V11.3929H139.122V5.87247H141.69V1.40637H147.883L147.882 5.87247Z"
              fill="#009933"
            />
            <path
              class="logo-path"
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M12.4143 17.76C12.9509 17.7467 13.4826 17.6552 13.9927 17.4881L17.4115 23.4059C15.0597 24.4892 12.4253 24.8013 9.88523 24.2977C7.34516 23.794 5.02957 22.5004 3.26974 20.6019C1.50992 18.7034 0.396037 16.2972 0.0874635 13.7277C-0.22111 11.1582 0.291434 8.55701 1.55177 6.29625C2.8121 4.0355 4.75565 2.23104 7.10433 1.14105C9.45302 0.0510525 12.0865 -0.268627 14.628 0.227748C17.1695 0.724122 19.4888 2.01111 21.254 3.90459C23.0193 5.79807 24.1401 8.20101 24.456 10.7696L24.5064 12.4569L10.2123 10.944L17.2839 9.98918C16.8726 9.08439 16.2237 8.3079 15.406 7.74228C14.5884 7.17667 13.6327 6.84308 12.6405 6.77698C11.6483 6.71089 10.6567 6.91476 9.77121 7.36692C8.8857 7.81908 8.13937 8.50263 7.61157 9.34486C7.08378 10.1871 6.79426 11.1565 6.77379 12.1501C6.75332 13.1437 7.00268 14.1242 7.49535 14.9874C7.98801 15.8507 8.70557 16.5643 9.5717 17.0525C10.4378 17.5407 11.4202 17.7852 12.4143 17.76Z"
              fill="#010005"
            />
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M12.2461 12.2655L18.4217 22.9552C20.1083 21.982 21.5407 20.6241 22.6019 18.9922C23.6632 17.3603 24.3233 15.5007 24.5284 13.5652L12.2461 12.2655Z"
              fill="#009933"
            />
          </svg>
        </a>
        <nav class="menu">
          <ol>
            <li><a href="#about">О нас.</a></li>
            <li><a href="#">Акции</a></li>
            <li><a href="#">Контакты</a></li>
          </ol>
        </nav>
        <div class="actions">
          <a href="#form" class="become-partner">Стать партнером</a>
          <div class="theme-switch" id="theme-switch">
            <img
              src="/static/icons/light-theme.svg"
              alt=""
              class="light-theme-icon"
            />
            <img
              src="/static/icons/dark-theme.svg"
              alt=""
              class="dark-theme-icon"
            />
          </div>
          <div class="change-language" id="language"></div>
          <div class="burger-open" id="burger-open">
            <svg
              width="30"
              height="30"
              viewBox="0 0 21 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M3.5 5.25H17.5V7H3.5V5.25ZM3.5 9.625H17.5V11.375H3.5V9.625ZM3.5 14H17.5V15.75H3.5V14Z"
                fill="black"
              />
            </svg>
          </div>
        </div>
      </div>
    </header>
    <section class="banner">
      <div class="banner-swiper">
        <div class="swiper-wrapper">
              @include('banners')
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <section class="restaurants" data-aos="fade-up">
      <div class="container">
        <div class="heading">
          <h1 class="title">Рестораны уже в системе Order Eat</h1>
          <div class="actions">
            <div class="action-btn arrow-left restaurant-btn">
              <img src="/static/icons/arrow-left.svg" alt="" />
            </div>
            <div class="action-btn arrow-right restaurant-btn">
              <img src="/static/icons/arrow-right.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="restaurant-swiper slides">
        <div class="swiper-wrapper">
          @include('restaurants')
        </div>
      </div>
      <button class="show-all">Посмотреть все</button>
    </section>
    <section class="about" id="about" data-aos="fade-right">
      @include('about')
    </section>
    <section class="statistics" data-aos="fade-up">
      <div class="container">
        <h1 class="title">Nunc sed blandit libero volutpat</h1>
        <div class="inner-blocks" id="counter">
          <div class="statistics-block">
            <img src="/static/icons/cafe.svg" alt="" class="statistics-icon" />
            <div class="statistics-data">
              <h2 class="counter-value" data-count="{{$data -> coworkers}}">0</h2>
              <span>Заведений уже с нами</span>
            </div>
          </div>
          <div class="statistics-block">
            <img src="/static/icons/users.svg" alt="" class="statistics-icon" />
            <div class="statistics-data">
              <h2 class="counter-value" data-count="{{$data -> users}}">900</h2>
              <span>Человек пользуются Order Eat</span>
            </div>
          </div>
          <div class="statistics-block">
            <img
              src="/static/icons/waiter.svg"
              alt=""
              class="statistics-icon"
            />
            <div class="statistics-data">
              <h2 class="counter-value" data-count="{{$data -> staff}}">200</h2>
              <span>Официантов пользуются Order Eat</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="news" data-aos="fade-right">
      <div class="container">
        <div class="heading">
          <h1 class="title">Последние новости</h1>
          <div class="actions">
            <div class="action-btn arrow-left news-btn">
              <img src="/static/icons/arrow-left.svg" alt="" />
            </div>
            <div class="action-btn arrow-right news-btn">
              <img src="/static/icons/arrow-right.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="news-swiper slides">
        <div class="swiper-wrapper">
          @include('news')
        </div>
      </div>
      <button class="show-all">Посмотреть все</button>
    </section>
    <section
      class="form"
      id="form"
      data-aos="fade-down"
      data-aos-duration="1000"
    >
      @include('application')
    </section>
    <footer class="footer">
      <div class="container">
        <div class="footer-block-first">
          <div class="logo">
            <svg
              width="152"
              height="25"
              viewBox="0 0 152 25"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                class="logo-path"
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M37.5364 5.62713V11.8162C35.7067 11.8162 34.4283 12.2267 33.701 13.0475C32.9737 13.8684 32.6101 14.9815 32.6102 16.3866V24.0877H26.4172V5.87254H32.5748V8.01743C33.1381 7.2671 33.8745 6.6639 34.7212 6.2592C35.5985 5.8352 36.5619 5.61938 37.5364 5.62713ZM50.9074 0.000678472V7.0688C50.2092 6.62345 49.4509 6.28005 48.6556 6.04902C47.923 5.84054 47.1652 5.73403 46.4036 5.73248C45.2208 5.72523 44.0487 5.95657 42.9575 6.41266C41.8663 6.86875 40.8784 7.54021 40.053 8.38683C39.2315 9.23737 38.5753 10.233 38.1177 11.323C37.6326 12.4685 37.3871 13.7011 37.3962 14.945C37.3794 17.4117 38.3336 19.7862 40.053 21.5561C40.8677 22.3804 41.836 23.0374 42.9032 23.4902C44.7224 24.26 46.7465 24.4022 48.6556 23.8943C49.4521 23.6748 50.2112 23.3369 50.9074 22.8921V24.0877H57.1004V0L50.9074 0.000678472ZM47.2481 18.8484C46.7458 18.8512 46.2484 18.7494 45.7877 18.5495C44.8859 18.1642 44.1676 17.4462 43.7821 16.545C43.5846 16.0715 43.483 15.5635 43.483 15.0505C43.483 14.5375 43.5846 14.0295 43.7821 13.556C44.1677 12.6549 44.886 11.937 45.7877 11.5517C46.4727 11.2568 47.2311 11.1762 47.9629 11.3206C48.6946 11.4649 49.3655 11.8275 49.887 12.3604C50.2207 12.7081 50.4889 13.1131 50.6788 13.556C50.8762 14.0295 50.9779 14.5375 50.9779 15.0505C50.9779 15.5635 50.8762 16.0715 50.6788 16.545C50.4889 16.9879 50.2207 17.393 49.887 17.7408C49.5435 18.0922 49.133 18.3713 48.6797 18.5616C48.2265 18.7518 47.7397 18.8494 47.2481 18.8484ZM68.1492 10.3385C67.2813 10.3385 66.5599 10.5437 65.9852 10.9541C65.3994 11.3784 64.9426 11.9565 64.6656 12.6244H71.3859C71.0809 11.7573 70.6176 11.1595 69.996 10.831C69.4302 10.5175 68.7961 10.3481 68.1492 10.3385ZM76.6998 20.4659C76.3042 21.0281 75.8501 21.5467 75.345 22.0131C74.797 22.5199 74.1883 22.957 73.5328 23.3142C72.8102 23.7059 72.0421 24.0071 71.2457 24.2108C70.3373 24.4413 69.403 24.5536 68.4658 24.5448C67.1184 24.556 65.7811 24.3113 64.525 23.824C63.3509 23.3723 62.2755 22.6977 61.358 21.8375C60.4598 20.9837 59.7471 19.9542 59.2643 18.8132C58.7519 17.6009 58.4944 16.2962 58.5077 14.9802C58.4978 13.6929 58.7554 12.4176 59.2643 11.2349C59.7511 10.1004 60.4567 9.07285 61.3409 8.21086C62.2393 7.34301 63.2967 6.65648 64.4553 6.18892C65.6726 5.69259 66.976 5.44164 68.2906 5.45047C69.5702 5.43447 70.8396 5.67977 72.0211 6.17131C73.1071 6.62457 74.089 7.29475 74.9066 8.14073C75.7198 8.9974 76.3539 10.0075 76.7719 11.112C77.2252 12.3022 77.452 13.5666 77.4406 14.8401V15.7193C77.4406 15.9304 77.4349 16.1413 77.4235 16.3521C77.4121 16.5629 77.4064 16.7035 77.4064 16.774H64.5601C64.859 17.5797 65.392 18.2777 66.0908 18.7785C66.7951 19.2747 67.6395 19.5334 68.501 19.5169C69.3167 19.5355 70.1231 19.3416 70.841 18.9543C71.4785 18.6049 72.0453 18.1398 72.5124 17.5829L76.6998 20.4659ZM90.0005 5.62627V11.8154C88.1708 11.8154 86.8923 12.2258 86.1651 13.0467C85.4378 13.8676 85.0742 14.9809 85.0743 16.3866V24.0877H78.8811V5.87254H85.0389V8.01743C85.6022 7.2671 86.3385 6.6639 87.1853 6.2592C88.0626 5.83508 89.0259 5.61851 90.0005 5.62627Z"
                fill="#010005"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M107.418 10.3384C106.55 10.3384 105.829 10.5436 105.254 10.9541C104.668 11.3782 104.211 11.9563 103.934 12.6242H110.654C110.349 11.757 109.886 11.1592 109.265 10.8308C108.699 10.5172 108.064 10.3482 107.417 10.3386L107.418 10.3384ZM115.968 20.4658C115.573 21.0281 115.119 21.5467 114.614 22.013C114.066 22.5198 113.457 22.9568 112.802 23.3141C112.079 23.7058 111.311 24.007 110.514 24.2108C109.606 24.4413 108.672 24.5535 107.735 24.5448C106.387 24.5559 105.05 24.3113 103.794 23.8239C102.62 23.3722 101.544 22.6975 100.627 21.8372C99.7287 20.9834 99.016 19.954 98.5332 18.813C98.0208 17.6006 97.7633 16.2959 97.7766 14.98C97.7666 13.6927 98.0243 12.4173 98.5332 11.2347C99.0197 10.1002 99.7251 9.07253 100.609 8.21044C101.508 7.34268 102.565 6.65617 103.724 6.18851C104.941 5.69221 106.244 5.44126 107.559 5.45006C108.839 5.43409 110.108 5.67937 111.289 6.17089C112.375 6.62412 113.357 7.2943 114.175 8.14032C114.988 8.99699 115.622 10.0071 116.04 11.1116C116.494 12.3018 116.72 13.5662 116.709 14.8397V15.7189C116.709 15.93 116.703 16.1409 116.692 16.3517C116.68 16.5625 116.675 16.7031 116.675 16.7736H103.829C104.128 17.5793 104.661 18.2773 105.359 18.7781C106.064 19.2743 106.908 19.533 107.77 19.5165C108.585 19.5351 109.392 19.3412 110.11 18.9539C110.747 18.6045 111.314 18.1394 111.781 17.5825L115.968 20.466V20.4658ZM126.877 24.194C125.674 24.2021 124.482 23.9627 123.375 23.4908C122.308 23.0379 121.34 22.3809 120.525 21.5567C118.806 19.7868 117.852 17.4123 117.869 14.9456C117.859 13.7018 118.105 12.4692 118.59 11.3236C119.047 10.2336 119.704 9.23798 120.525 8.38744C121.351 7.54057 122.339 6.8689 123.43 6.41266C124.521 5.95642 125.694 5.72499 126.877 5.73224C127.638 5.73377 128.396 5.84029 129.128 6.04879C129.924 6.27978 130.682 6.62318 131.38 7.06856V5.87247H137.573V24.0878H131.38V22.8922C130.684 23.337 129.925 23.6748 129.128 23.8942C128.394 24.0913 127.637 24.1918 126.877 24.1931V24.194ZM127.72 11.2527C127.218 11.2498 126.72 11.3517 126.26 11.5516C125.358 11.9369 124.64 12.6548 124.254 13.5559C124.057 14.0295 123.955 14.5374 123.955 15.0504C123.955 15.5634 124.057 16.0714 124.254 16.5449C124.64 17.4461 125.358 18.1641 126.26 18.5494C126.945 18.8443 127.703 18.9249 128.435 18.7805C129.167 18.6362 129.838 18.2736 130.359 17.7407C130.693 17.3929 130.961 16.9878 131.151 16.5449C131.348 16.0714 131.45 15.5634 131.45 15.0504C131.45 14.5374 131.348 14.0295 131.151 13.5559C130.961 13.1131 130.693 12.7081 130.359 12.3603C130.016 12.0089 129.605 11.7297 129.152 11.5395C128.698 11.3492 128.212 11.2517 127.72 11.2527ZM147.882 5.87247H151.999V11.3929H147.883V16.7378C147.883 17.4882 148.041 18.0332 148.358 18.3729C148.675 18.7127 149.173 18.8827 149.854 18.8829H152V24.0873H148.516C146.1 24.0873 144.359 23.5657 143.291 22.5225C142.224 21.4793 141.69 19.8207 141.69 17.5467V11.3929H139.122V5.87247H141.69V1.40637H147.883L147.882 5.87247Z"
                fill="#009933"
              />
              <path
                class="logo-path"
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12.4143 17.76C12.9509 17.7467 13.4826 17.6552 13.9927 17.4881L17.4115 23.4059C15.0597 24.4892 12.4253 24.8013 9.88523 24.2977C7.34516 23.794 5.02957 22.5004 3.26974 20.6019C1.50992 18.7034 0.396037 16.2972 0.0874635 13.7277C-0.22111 11.1582 0.291434 8.55701 1.55177 6.29625C2.8121 4.0355 4.75565 2.23104 7.10433 1.14105C9.45302 0.0510525 12.0865 -0.268627 14.628 0.227748C17.1695 0.724122 19.4888 2.01111 21.254 3.90459C23.0193 5.79807 24.1401 8.20101 24.456 10.7696L24.5064 12.4569L10.2123 10.944L17.2839 9.98918C16.8726 9.08439 16.2237 8.3079 15.406 7.74228C14.5884 7.17667 13.6327 6.84308 12.6405 6.77698C11.6483 6.71089 10.6567 6.91476 9.77121 7.36692C8.8857 7.81908 8.13937 8.50263 7.61157 9.34486C7.08378 10.1871 6.79426 11.1565 6.77379 12.1501C6.75332 13.1437 7.00268 14.1242 7.49535 14.9874C7.98801 15.8507 8.70557 16.5643 9.5717 17.0525C10.4378 17.5407 11.4202 17.7852 12.4143 17.76Z"
                fill="#010005"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12.2461 12.2655L18.4217 22.9552C20.1083 21.982 21.5407 20.6241 22.6019 18.9922C23.6632 17.3603 24.3233 15.5007 24.5284 13.5652L12.2461 12.2655Z"
                fill="#009933"
              />
            </svg>
          </div>
          <span class="tagline">
            Pellentesque habitant morbi tristique senectus.
          </span>
          <div class="socials-container">
            <img src="/static/icons/social-icon-1.svg" alt="" />
            <img src="/static/icons/social-icon-2.svg" alt="" />
            <img src="/static/icons/social-icon-3.svg" alt="" />
          </div>
        </div>
        <div class="footer-block">
          <span class="heading"> LOREM IPSUM </span>
          <a href="#">Политика конф</a>
          <a href="#">Договор</a>
          <a href="#">Aliquet</a>
        </div>
        <div class="footer-block">
          <span class="heading"> LOREM IPSUM </span>
          <a href="#">Для ресторанов</a>
          <a href="#">Для официантов</a>
        </div>
        <div class="footer-block">
          <span class="heading"> Контакты </span>
          <a href="#">+7 777 932 37 92</a>
          <a href="#">+7 707 364 33 33</a>
          <a href="#">order.eat@gmail.com</a>
        </div>
        <div class="socials-mobile">
          <div class="socials-container">
            <img src="/static/icons/social-icon-1.svg" alt="" />
            <img src="/static/icons/social-icon-2.svg" alt="" />
            <img src="/static/icons/social-icon-3.svg" alt="" />
          </div>
        </div>
      </div>
    </footer>
    <div class="burger-menu hidden" id="burger-menu">
      <div class="close-burger" id="burger-close">
        <svg
          width="30"
          height="30"
          viewBox="0 0 21 21"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M14.168 5.551L10.4554 9.26275L6.74363 5.551L5.50638 6.78825L9.21813 10.5L5.50638 14.2118L6.74363 15.449L10.4554 11.7373L14.168 15.449L15.4053 14.2118L11.6935 10.5L15.4053 6.78825L14.168 5.551Z"
            fill="white"
          />
        </svg>
      </div>
      <nav>
        <ol>
          <li><a href="#about">О нас</a></li>
          <li><a href="#">Акции</a></li>
          <li><a href="#">Контакты</a></li>
        </ol>
      </nav>
      <a href="#form" class="become-partner-burger">Стать партнером</a>
    </div>
  </body>
  <script>
    var animData = {
      wrapper: document.getElementById("bodymovin"),
      animType: "svg",
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path: "../js/order_eat_f.json",
    };
    var anim = bodymovin.loadAnimation(animData);
  </script>
  <script src="/js/swiper.min.js"></script>
  <script src="/js/aos.js"></script>
  <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
  ></script>
  <script>
    const bannerSwiper = new Swiper(".banner-swiper", {
      direction: "horizontal",
      slidesPerView: "auto",
      loop: "true",
      autoplay: true,
      pagination: {
        el: ".swiper-pagination",
        type: "bullets",
      },
    });
    const restaurantSwiper = new Swiper(".restaurant-swiper", {
      direction: "horizontal",
      loop: "true",
      slidesPerView: 1,
      navigation: {
        nextEl: ".action-btn.arrow-right.restaurant-btn",
        prevEl: ".action-btn.arrow-left.restaurant-btn",
      },

      autoplay: true,
      breakpoints: {
        320: {
          slidesPerView: 1.1,
          spaceBetween: 20,
          slidesOffsetBefore: 16,
        },
        500: {
          slidesPerView: 1.5,
          spaceBetween: 20,
          slidesOffsetBefore: 16,
        },
        768: {
          slidesPerView: 1.7,
          spaceBetween: 20,
          slidesOffsetBefore: 16,
        },
        992: {
          slidesPerView: 2.15,
          spaceBetween: 20,
          slidesOffsetBefore: 16,
        },
        1200: {
          slidesPerView: 2.8,
          spaceBetween: 20,
          slidesOffsetBefore: 16,
        },
        1900: {
          slidesPerView: 4,
          spaceBetween: 20,
          slidesOffsetBefore: 16,
        },
      },
    });
    const newsSwiper = new Swiper(".news-swiper", {
      direction: "horizontal",
      slidesPerView: "auto",
      spaceBetween: 30,
      navigation: {
        nextEl: ".action-btn.arrow-right.news-btn",
        prevEl: ".action-btn.arrow-left.news-btn",
      },
      breakpoints: {
        320: {
          slidesPerView: 1.3,
          spaceBetween: 20,
          slidesOffsetBefore: 16,
        },
        580: {
          slidesPerView: 1.6,
          spaceBetween: 20,
          slidesOffsetBefore: 16,
        },
        700: {
          slidesPerView: 1.9,
          spaceBetween: 20,
          slidesOffsetBefore: 16,
        },
        880: {
          slidesPerView: 2.7,
          spaceBetween: 20,
          slidesOffsetBefore: 100,
          slidesOffsetAfter: 100,
        },
        1190: {
          slidesPerView: 3.6,
          spaceBetween: 20,
          slidesOffsetBefore: 130,
          slidesOffsetAfter: 130,
        },
        1440: {
          slidesPerView: 5,
          spaceBetween: 20,
          slidesOffsetBefore: 130,
          slidesOffsetAfter: 130,
        },
      },
    });
    const themeSwitch = document.getElementById("theme-switch");
    themeSwitch.addEventListener("click", () => {
      const html = document.getElementById("main");
      html.dataset.theme = html.dataset.theme === "light" ? "dark" : "light";
    });
    AOS.init();

    // Counter
    var a = 0;
    $(window).scroll(function () {
      var oTop = $("#counter").offset().top - window.innerHeight;
      if (a == 0 && $(window).scrollTop() > oTop) {
        $(".counter-value").each(function () {
          var $this = $(this),
            countTo = $this.attr("data-count");
          $({
            countNum: $this.text(),
          }).animate(
            {
              countNum: countTo,
            },

            {
              duration: 2000,
              easing: "swing",
              step: function () {
                $this.text(Math.floor(this.countNum));
              },
              complete: function () {
                $this.text(this.countNum);
              },
            }
          );
        });
        a = 1;
      }
    });
  </script>
  <script>
    const openBurger = document.getElementById("burger-open");
    const closeBurger = document.getElementById("burger-close");
    const links = document.querySelectorAll(".burger-menu a");
    const burgerMenu = document.getElementById("burger-menu");

    openBurger.addEventListener("click", (e) => {
      e.stopPropagation();
      burgerMenu.classList.toggle("hidden");
    });
    closeBurger.addEventListener("click", (e) => {
      e.stopPropagation();
      burgerMenu.classList.toggle("hidden");
    });
    links.forEach((link) =>
      link.addEventListener("click", (e) => {
        e.stopPropagation();
        burgerMenu.classList.toggle("hidden");
      })
    );
  </script>
  <script>
    window.onload = () => {
      setTimeout(() => {
        document.querySelector(".preloader").style.opacity = "0";
      }, 2980);
      setTimeout(() => {
        document.querySelector(".preloader").style.display = "none";
      }, 3780);
    }
  </script>
</html>
