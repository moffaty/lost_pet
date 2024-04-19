<?php

/** @var yii\web\View $this */
$isGuest = Yii::$app->user->isGuest;
$href = $isGuest ? '/site/login' :  '/pet-requests/create' ;
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Привествуем на сайте LostPet!</h1>

        <p class="lead">Мы организация, которая занимается поиском животных по Санкт-Петербургу.</p>

        <p><a class="btn btn-lg btn-success" href=<?= $href ?>>Оставить заявку</a></p>
    </div>

    <div class="body-content">
        <div class="row">
        <div class="col-lg-4">
            <img src="/images/pets.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Картинка">

            <h2>Мы</h2>
            <p>Найдем любую собаку!</p>
            <p><a class="btn btn-secondary"  href=<?= $href ?>>Оставить заявку »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img src="/images/pets1.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Картинка">

            <h2>Вам</h2>
            <p>Или любую кошку</p>
            <p><a class="btn btn-secondary" href=<?= $href ?>>Оставить заявку »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img src="/images/pets3.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Картинка">

            <h2>Поможем</h2>
            <p>И хомяка.</p>
            <p><a class="btn btn-secondary"  href=<?= $href ?>>Оставить заявку »</a></p>
        </div><!-- /.col-lg-4 -->
        </div>
    </div>
</div>
<div id="myCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#607a90"></rect></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <p>Мы очень классные</p>
            <p><a class="btn btn-lg btn-primary" href="/site/about">О нас классных</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#02afd7"></rect></svg>

        <div class="container">
          <div class="carousel-caption">
            <p>Мы очень классные по центру</p>
            <p><a class="btn btn-lg btn-primary" href="/site/about">О нас классных</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#fca5c5"></rect></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <p>Мы очень классные с другой стороны</p>
            <p><a class="btn btn-lg btn-primary" href="/site/about">О нас классных</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>