<?php 
define("title", "404 Not Found");
define("description", "お探しのページは見つかりませんでした");
?>

<?php include ( dirname(__FILE__) . '/header-page.php' ); ?>

<div class="wrapper page-wrapper">
    <section id="not-found">
    <h2>お探しのページは見つかりませんでした</h2>
    <p>ページが削除、またはURL変更された可能性があります。</p>
    <button type="button" onclick="location.href='index.php'" class="btn-color">トップに戻る</button>
    </section>
</div>

<?php include ( dirname(__FILE__) . '/footer.php' ); ?>