<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>みずいろスタジオ</title>
  <meta name="description" content="東京のWeb制作事務所、みずいろスタジオのホームページです。Webデザイン、コーディング、マーケティングにご協力いたします。">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
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
  <header class="header-top">
    <h1 class="logo-bg">
      <a href="index.php">
        <img src="images/logo-white.svg" class="logo-white" alt="みずいろスタジオ ホームへ">
      </a>
    </h1>
  </header>

  <main>
    <div class="split-left">
      <div class="top-image">
        <nav class="header-nav">
          <ul class="header-nav-links">
            <li class="header-nav-item"><a href="index.html">Top</a></li>
            <li class="header-nav-item"><a href="#works">Works</a></li>
            <!-- <li class="header-nav-item"><a href="#blog">Blog</a></li> -->
            <li class="header-nav-item"><a href="#contact">Contact</a></li>
          </ul>
        </nav>
        <span>みずいろスタジオへようこそ</span>
        <span>Webデザイン承ります</span>
      </div>
    </div>

    <div class="split-center">
      <span>Welcome to Mizuirostudio</span>
    </div>

    <div class="split-right">
      <section id="top">
        <h2>みずいろスタジオとは</h2>
        <p>
          東京で活動する個人のWeb制作事務所です。デザインからコーディングまで、Webサイト制作を支援しています。お客様の目的を達成する上で何が必要かを考えながら、ユーザーにとっても快適なサイトを形にしていきます。
        </p>
        <ul class="pr-points">
          <li class="pr-point">様々なデバイスに対応するレスポンシブデザイン</li>
          <li class="pr-point">サイトの印象をアップするCSS・JSアニメーション</li>
          <li class="pr-point">アクセシビリティに配慮したセマンティックコーディング</li>
          <li class="pr-point">素早いレスポンスと対応</li>
        </ul>
      </section>

      <section id="works">
        <h2>Works</h2>
        <figure class="works-kokage">
          <img src="images/works-kokage.png" alt="架空の飲食店「旬彩こかげ」Webサイトのトップイメージ">
          <figcaption>
            <span>架空の飲食店「旬彩こかげ」のホームページ</span>
          </figcaption>
        </figure>
        <button type="button" onclick="location.href='#'" class="btn-color">サイトを見る</button>
      </section>

      <section id="contact">
        <h2>Contact</h2>
        <p>お問い合わせ、ご依頼承ります。</p>
        <form method="post" action="confirm.php">
          <label for="message">お問い合わせ内容</label>
          <div class="inputfield">
            <textarea name="message" id="message" required></textarea>
          </div>
          <label for="username">お名前（ハンドルネーム可）</label>
          <div class="inputfield">
            <input type="text" name="username" id="username" required>
          </div>
          <label for="email">メールアドレス</label>
          <div class="inputfield">
            <input type="email" name="email" id="email" required>
          </div>
          <button type="submit" name="submit" value="確認" class="btn-color">お問い合わせ内容を確認する</button>
        </form>
      </section>
    </div>
  </main>

  <footer>
    <ul class="footer-nav-links">
      <li class="footer-nav-item"><a href="index.html">&copy; みずいろスタジオ</a></li>
      <li class="footer-nav-item"><a href="privacy-policy.html">プライバシーポリシー</a></li>
    </ul>
  </footer>

  <script>
    jQuery(function($) {
      $('.menu-btn').on('click', function() {
        $('.header-nav ul, .menu-btn').toggleClass('open');
      });

      $('.header-nav-item a').on('click', function() {
        $('.header-nav ul, .menu-btn').removeClass('open');
      });
    });
  </script>

</body>

</html>