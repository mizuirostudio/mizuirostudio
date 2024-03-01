<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-595HDP3M');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>みずいろスタジオ</title>
  <meta name="description" content="東京のWeb制作事務所、みずいろスタジオのホームページです。Webデザイン、コーディング、マーケティングにご協力いたします。">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="style.css">
  <script>
    (function(d) {
      var config = {
          kitId: 'ddt6dvb',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="icon" href="images/favicon.ico">
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-595HDP3M" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header class="header-top">
    <h1 class="logo-bg">
      <a href="index.php">
        <img src="images/logo-white.svg" class="logo-white" alt="みずいろスタジオ ホームへ">
      </a>
    </h1>
    <nav class="header-nav">
      <ul class="header-nav-links">
        <li class="header-nav-item"><a href="#about">About</a></li>
        <li class="header-nav-item"><a href="#works">Works</a></li>
        <!-- <li class="header-nav-item"><a href="#blog">Blog</a></li> -->
        <li class="header-nav-item"><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <div class="top-image">
      <div class="catchcopy">
        <span>みずいろスタジオへようこそ</span>
        <span>Webデザイン承ります</span>
      </div>
    </div>
    <div class="wrapper top-wrapper">
      <section id="about">
        <h2>みずいろスタジオとは</h2>
        <p>
          東京で活動する個人のWeb制作事務所です。デザインからコーディングまで、Webサイト制作を支援しています。お客様の目的を達成する上で何が必要かを考えながら、ユーザーにとっても快適なサイトを形にしていきます。
        </p>
        <ol class="pr-points">
          <li class="pr-point">
            <div class="pr-icon icon-sp"></div>
            <span>様々なデバイスに対応するレスポンシブデザイン</span>
          </li>
          <li class="pr-point">
            <div class="pr-icon icon-film"></div>
            <span>サイトの印象を高めるCSS・Javascriptアニメーション</span>
          </li>
          <li class="pr-point">
            <div class="pr-icon icon-code"></div>
            <span>アクセシビリティに配慮したセマンティックマークアップ</span>
          </li>
          <li class="pr-point">
            <div class="pr-icon icon-pen"></div>
            <span>Wordpress等のCMSを導入した更新しやすいサイト</span>
          </li>
        </ol>
      </section>

      <section id="works">
        <h2>Works</h2>
        <figure class="works-kokage">
          <img src="images/works-kokage.png" alt="架空の飲食店「旬彩こかげ」Webサイトのトップイメージ">
          <figcaption>
            <span>架空の飲食店「旬彩こかげ」のホームページ</span>
          </figcaption>
        </figure>
        <button type="button" onclick="location.href='https://portfolio01.mizuirostudio.com/'" class="btn-color">サイトを見る</button>
      </section>

      <section id="contact">
        <h2>Contact</h2>
        <p>お問い合わせ、ご依頼承ります</p>
        <form method="post" action="confirm.php">
          <label for="message">お問い合わせ内容</label>
          <div class="inputfield">
            <textarea name="message" id="message" placeholder="例）インターネットから集客できるよう、更新しやすいホームページを開設したい" required></textarea>
          </div>
          <label for="username">お名前（ハンドルネーム可）</label>
          <div class="inputfield">
            <input type="text" name="username" id="username" placeholder="例）みずいろ" required>
          </div>
          <label for="email">メールアドレス</label>
          <div class="inputfield">
            <input type="email" name="email" id="email" placeholder="例）○○○@gmail.com" required>
          </div>
          <button type="submit" name="submit" value="確認" class="btn-color">お問い合わせ内容を確認する</button>
        </form>
      </section>
    </div>
  </main>

  <footer>
    <ul class="footer-nav-links">
      <li class="footer-nav-item"><a href="index.php">&copy; みずいろスタジオ</a></li>
      <li class="footer-nav-item"><a href="privacy-policy.php">プライバシーポリシー</a></li>
    </ul>
  </footer>
</body>

</html>