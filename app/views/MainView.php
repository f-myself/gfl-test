  <!--Main layout-->
  <main>
    <div class="container" style="padding-top: 5%;">

      <!--Section: Products v.3-->
      <section class="text-center mb-4">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <?php
        $cnt = 1;
        foreach($data as $val){
          ?>



          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="../../../public/img/book.png" class="card-img-top" alt="">
                <a href="/main/view/<?=$val['id']?>">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <h5>
                  <strong>
                    <a href="/main/view/<?=$val['id']?>" class="dark-grey-text"><?=$val['title']?>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong><?=$val['price']?> грн.</strong>
                </h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->
        <?php
        $cnt++;
        if($cnt % 4 == 0){
          echo "</div> \n <!--Grid row-->
      <div class='row wow fadeIn'>";
        }
			}
      if ($count%4 != 1) echo "</div>";
		?>
        
        <!--Grid row-->
      </section>
      <!--Section: Products v.3-->
    </div>
  </main>
  <!--Main layout-->

<?php

/*class MainView
{
	function showBooks($arr)
	{
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}

	function showGenres($arr)
	{
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}

	function showAuthors($arr)
	{
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}
}*/