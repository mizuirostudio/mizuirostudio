<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = filter_input(INPUT_POST, 'username');
  $email = filter_input(INPUT_POST, 'email');
  $message = filter_input(INPUT_POST, 'message');
} else {
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="ja">
<html>

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
  <header class="header-page">
    <div class="logo-bg">
      <a href="index.php">
        <img src="images/logo-white.svg" class="logo-white" alt="みずいろスタジオ ホームへ">
      </a>
    </div>
    <h1>お問い合わせ内容確認</h1>
  </header>

  <div class="wrapper page-wrapper">
    <section id="confirm">
      <h2>以下の内容で送信します。よろしいですか？</h2>
      <dl>
        <dt>お問い合わせ内容</dt>
        <div class="inputfield">
          <dd><?php echo htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8'); ?></dd>
        </div>
        <dt>お名前</dt>
        <div class="inputfield">
          <dd><?php echo htmlspecialchars($_POST['username'] ?? '', ENT_QUOTES, 'UTF-8'); ?></dd>
        </div>
        <dt>メールアドレス</dt>
        <div class="inputfield">
          <dd><?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?></dd>
        </div>
      </dl>
      <form method="post" action="thanks.php">
        <input type="hidden" name="username" value="<?php echo $username; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="message" value="<?php echo $message; ?>">
        <button type="submit" value="送信" class="btn-color">送信する</button>
        <button type="button" onclick="history.back()">戻る</button>
      </form>
    </section>
  </div>

  <footer>
    <ul class="footer-nav-links">
      <li class="footer-nav-item"><a href="index.php">&copy; みずいろスタジオ</a></li>
      <li class="footer-nav-item"><a href="privacy-policy.php">プライバシーポリシー</a></li>
    </ul>
  </footer>
</body>

</html>