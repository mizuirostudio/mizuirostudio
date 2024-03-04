<?php 
define("title", "みずいろスタジオ");
define("description", "都内でWeb制作をおこなうみずいろスタジオのホームページです。");
?>

<?php include ( dirname(__FILE__) . '/header.php' ); ?>

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
          <img src="images/works-kokage.webp" alt="架空の飲食店「旬彩こかげ」Webサイトのトップイメージ">
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

  <?php include ( dirname(__FILE__) . '/footer.php' ); ?>