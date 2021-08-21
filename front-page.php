<?php get_header(); ?>
<?php get_sidebar(); ?>
<main class="l-main l-main-fr p-main-fr">
    <section class="l-section-mv p-mainVisual-fr p-mainVisual">
        <div>
            <h2 class="c-text-mv c-text-mvTitle">ダミーサイト</h2>
        </div>
    </section>
    <?php

    // このカテゴリーの URL を取得
    $category_link = get_category_link('2');
    ?>

    <!-- このカテゴリーへのリンクを出力 -->
    <a class="p-card p-card-service p-card-service01" href="<?php echo esc_url($category_link); ?>" title="eatin">
        <h2 class="c-text-cardTitle-fr c-deco-underLine">Eat In</h2>
        <div class="p-card-service__text">
            <div class="p-card-service__inr">
                <h3 class="c-text-card__inrTitle">Eat In</h3>
                <p class="c-text-card__inrP">店内で利用できる商品を掲載しています</p>
            </div>
            <div class="p-card-service__inr">
                <h3 class="c-text-card__inrTitle">Eat In</h3>
                <p class="c-text-card__inrP">店内で利用できる商品を掲載しています</p>
            </div>
        </div>
    </a>
    <?php

    // このカテゴリーの URL を取得
    $category_link = get_category_link('3');
    ?>

    <a class="p-card p-card-service p-card-service01" href="<?php echo esc_url($category_link); ?>" title="eatin">
        <h2 class="c-text-cardTitle-fr c-deco-underLine">TakeOut</h2>
        <div class="p-card-service__text">
            <div class="p-card-service__inr">
                <h3 class="c-text-card__inrTitle">Take OUT</h3>
                <p class="c-text-card__inrP">当店のテイクアウトで利用できる商品を掲載しています</p>
            </div>
            <div class="p-card-service__inr">
                <h3 class="c-text-card__inrTitle">Take OUT</h3>
                <p class="c-text-card__inrP">当店のテイクアウトで利用できる商品を掲載しています</p>
            </div>
        </div>
    </a>

    <section class="p-map">
        <div class="p-map-overlay">
            <h2 class="c-text-map c-text-mapTitle  c-deco-underLine">見出しが入ります</h2>
            <p class="c-text-map c-text-mapp">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
        </div>
    </section>
</main><!-- l-main -->
<?php get_footer(); ?>