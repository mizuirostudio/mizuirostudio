<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = filter_input(INPUT_POST, 'username');
  $email = filter_input(INPUT_POST, 'email');
  $message = filter_input(INPUT_POST, 'message');
  $to = "mail@mizuirostudio.com";
  $subject = "お問い合わせがありました";
  $headers = "From:mail@mizuirostudio.com";
  $body = "名前: $username\nメールアドレス: $email\n\n$message";
  if (mail($to, $subject, $body, $headers)) {
    $message = "お問い合わせが送信されました。ありがとうございます！";
  } else
    $message = "エラーが発生しました。もう一度お試しください。";
} else {
  header("Location: confirm.php");
}

define("title", "お問い合わせ完了");
define("description", "みずいろスタジオへのお問い合わせが完了しました");
?>

<?php include ( dirname(__FILE__) . '/header-page.php' ); ?>

  <div class="wrapper page-wrapper">
    <section id="thanks">
    <h2>お問い合わせありがとうございます。</h2>
    <p>1営業日中に確認し、ご返信いたします。</p>
    <button type="button" onclick="location.href='index.php'" class="btn-color">トップに戻る</button>
    </section>
  </div>

  <?php include ( dirname(__FILE__) . '/footer.php' ); ?>