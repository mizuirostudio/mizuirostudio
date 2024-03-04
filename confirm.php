<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = filter_input(INPUT_POST, 'username');
  $email = filter_input(INPUT_POST, 'email');
  $message = filter_input(INPUT_POST, 'message');
} else {
  header("Location: index.php");
}

define("title", "お問い合わせ内容確認");
define("description", "みずいろスタジオへのお問い合わせ内容をご確認ください");
?>

<?php include(dirname(__FILE__) . '/header-page.php'); ?>

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

<?php include(dirname(__FILE__) . '/footer.php'); ?>