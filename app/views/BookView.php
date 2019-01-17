  <?php
    $bookInfo = array_shift($data);
  ?>
  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img src="../../public/img/book.png" class="img-fluid" alt="" style="max-height: 400px!important">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">
            <h1><?=$bookInfo['title']?></h1>
            <h5><?=$bookInfo['author']?></h5>
            <div class="mb-3">
              <span class="badge purple mr-1"><?=$bookInfo['genre']?></span>
            </div>

            <p class="lead">
              <span><?=$bookInfo['price']?> грн.</span>
            </p>
            <p class="lead font-weight-bold">Описание</p>

            <p><?=$bookInfo['description']?></p>
          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>

      <!--Grid row-->
      <div class="row d-flex justify-content-center wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 text-center">

          <!-- Default form contact -->
<form class="text-center border border-light p-5" action="../app/lib/Send.php" method="POST">

    <p class="h4 mb-4">Приобрести книгу</p>

    <input type="hidden" name="book" value="<?=$bookInfo['author']?>, <?=$bookInfo['title']?>">

    <!-- Name -->
    <input type="text" id="name" name="name" class="form-control mb-4" placeholder="ФИО">

    <!-- Address -->
    <input type="text" id="address" name="address" class="form-control mb-4" placeholder="Адрес">

    <!-- Address -->
    <input type="number" min="1" id="quantity" name="quantity" class="form-control mb-4" placeholder="Колличество экземпляров">

    <!-- Send button -->
    <button class="btn btn-info btn-block" type="submit" onclick="alert('Спасибо за заявку!');">Купить</button>

</form>
<!-- Default form contact -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->