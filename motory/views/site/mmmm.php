<!doctype html>
<html lang="en">

<head>
    <title>MAl</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
body {
    padding: 10px 60px;
    direction: rtl;
    text-align: right;
}

header {
    display: flex;
}

.site_logo {
    display: flex;
    justify-content: right;
    flex: 1;
}

.pagepath {
    color: rgb(75, 77, 79);
    margin-bottom: 20px;
}

.productbox {
    padding: 20px;
    border: 1px solid #eee;
    border-radius: 12px;
    display: grid;
    grid-template-columns: 20% 1fr 20%;
    gap: 40px;
}

.requste_button {
    display: flex;
    align-items: flex-end;
}

button {
    background-color: white;
    border: 2px solid #0083f9;
    border-radius: 6px;
    color: #0083f9;
    padding: 7px 15px;

}

.border_button {
    padding: 10px 20px;
}

.details {
    display: flex;
    column-gap: 30px;
}

.price {
    display: flex;
    flex-direction: column;
    border-right: 2px solid #0083f9;
    padding-right: 12px;
}

.warrntty {
    display: flex;
    flex-direction: column;
    border-right: 2px solid #eee;
    padding-right: 12px;
}

.warrntty p,
.price p {
    font-size: 16px;
    font-weight: 600;
}

section {

    display: grid;
    grid-template-columns: 74% 1fr;
    column-gap: 70px;
}

.sidebar {
    height: 700px;
    position: sticky;
    background-color: #eee;
}

.fillbutton {
    background-color: #0083f9;
    color: white;
}

@media (max-width:767px) {
    .sidebar {
        display: none;
    }

    body {
        padding: 10px;
    }

    .productbox {
        display: block;
    }

    section {
        grid-template-columns: 1fr;
    }

    .productbox img {
        width: 100px;
    }

    .border_button {
        width: 100%;
        margin-top: 7px;
    }
}
</style>

<body>
    <header>
        <div class="site_logo">
            <img src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AA1m64AY.img?w=1920&h=1080&q=60&m=2&f=jpg"
                alt="" width="100px">
        </div>
        <div dir="ltr">
            <button class="fillbutton">قدر سعر سيارتك</button>
            <button>بيع سيارتك</button>
            <span>English</span>
        </div>
    </header>
    <hr>
    <p class="pagepath">
        خدمات موترى
        الرئيسية/
    </p>
    <section>
        <div class="product_section">
            <h3>خدمات موتري</h3>
            <div class="productbox">
                <div>
                    <img src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AA1m64AY.img?w=1920&h=1080&q=60&m=2&f=jpg"
                        alt="" width="100%">
                </div>
                <div>
                    <p>خدمات المساعدة والضمان</p>
                    <h5>المساعدة على الطريق (للسيارات الجديدة)</h5>
                    <div class="details">
                        <div class="price">
                            <span>سعر الخدمة</span>
                            <p>230 يياي</p>
                        </div>
                        <div class="warrntty">
                            <span>الضمان</span>
                            <p>3سنوات</p>

                        </div>
                    </div>
                </div>
                <div class="requste_button">
                    <button class="border_button">طلب شراء الخدمة</button>
                </div>
            </div>
            <div class="productbox">
                <div>
                    <img src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AA1m64AY.img?w=1920&h=1080&q=60&m=2&f=jpg"
                        alt="" width="100%">
                </div>
                <div>
                    <p>خدمات المساعدة والضمان</p>
                    <h5>المساعدة على الطريق (للسيارات الجديدة)</h5>
                    <div class="details">
                        <div class="price">
                            <span>سعر الخدمة</span>
                            <p>230 يياي</p>
                        </div>
                        <div class="warrntty">
                            <span>الضمان</span>
                            <p>3سنوات</p>

                        </div>
                    </div>
                </div>
                <div class="requste_button">
                    <button class="border_button">طلب شراء الخدمة</button>
                </div>
            </div>
            <div class="productbox">
                <div>
                    <img src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AA1m64AY.img?w=1920&h=1080&q=60&m=2&f=jpg"
                        alt="" width="100%">
                </div>
                <div>
                    <p>خدمات المساعدة والضمان</p>
                    <h5>المساعدة على الطريق (للسيارات الجديدة)</h5>
                    <div class="details">
                        <div class="price">
                            <span>سعر الخدمة</span>
                            <p>230 يياي</p>
                        </div>
                        <div class="warrntty">
                            <span>الضمان</span>
                            <p>3سنوات</p>

                        </div>
                    </div>
                </div>
                <div class="requste_button">
                    <button class="border_button">طلب شراء الخدمة</button>
                </div>
            </div>
            <div class="productbox">
                <div>
                    <img src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AA1m64AY.img?w=1920&h=1080&q=60&m=2&f=jpg"
                        alt="" width="100%">
                </div>
                <div>
                    <p>خدمات المساعدة والضمان</p>
                    <h5>المساعدة على الطريق (للسيارات الجديدة)</h5>
                    <div class="details">
                        <div class="price">
                            <span>سعر الخدمة</span>
                            <p>230 يياي</p>
                        </div>
                        <div class="warrntty">
                            <span>الضمان</span>
                            <p>3سنوات</p>

                        </div>
                    </div>
                </div>
                <div class="requste_button">
                    <button class="border_button">طلب شراء الخدمة</button>
                </div>
            </div>
            <div class="productbox">
                <div>
                    <img src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AA1m64AY.img?w=1920&h=1080&q=60&m=2&f=jpg"
                        alt="" width="100%">
                </div>
                <div>
                    <p>خدمات المساعدة والضمان</p>
                    <h5>المساعدة على الطريق (للسيارات الجديدة)</h5>
                    <div class="details">
                        <div class="price">
                            <span>سعر الخدمة</span>
                            <p>230 يياي</p>
                        </div>
                        <div class="warrntty">
                            <span>الضمان</span>
                            <p>3سنوات</p>

                        </div>
                    </div>
                </div>
                <div class="requste_button">
                    <button class="border_button">طلب شراء الخدمة</button>
                </div>
            </div>
        </div>

        <div class="sidebar">

        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>



<?php

        NavBar::begin([
    'options' => ['class' => 'navbar-expand-md navbar-dark bg-danger fixed-top'],
]);

echo Html::a(
    Html::img('@web/uploads//motory.png', ['alt' => 'Your Logo', 'width' => '50px', 
]),
      ['site/motory'],  
    ['class' => 'navbar-brand']
);

 
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'category', 'url' => ['/category/index']],
            ['label' => 'services', 'url' => ['/services/index']],
            ['label' => 'motory', 'url' => ['/site/motory']],
            Yii::$app->user->isGuest
                ? ['label' => 'Login', 'url' => ['/site/login']]
                : '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
        ]
    ]);
    NavBar::end();