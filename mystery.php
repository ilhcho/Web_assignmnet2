<?php
require_once("header.php");
?>

<div id="content">
  <div class="category_main"><img src="img/mystery books/CoverBook.jpg"/ alt="mystery" width="100%"></div>
  <h1 class="each_title">Mystery</h1>

  <div class="books">
    <a href="mystery/mystery1.php"><img class="books_img" src="img/mystery books/mystery1.jpg" alt="mystery/mystery1"/></a>
    <div class="book_des"> The Silkworm</div>
    <center><span class="price">$29.95USD</span></center>
    <div class="cart_div">
      <a href="#" onclick="simpleCart.add('name=The Silkworm','price=29.95','image=img/mystery books/mysterythumbs1.jpg');return false;">
        <img src="img/logos/add.png" alt="Add to Cart" class="add_to_cart"></a>
      </div>
    </div>

    <div class="books">
      <a href="mystery/mystery2.php"><img class="books_img" src="img/mystery books/mystery2.jpg" alt="mystery/mystery2"/></a>
      <div class="book_des">Live by Night</div>
      <center><span class="price">$13.95USD</span></center>
      <div class="cart_div">
        <a href="#" onclick="simpleCart.add('name=Live by Night','price=13.95','image=img/mystery books/mysterythumbs2.jpg');return false;">
          <img src="img/logos/add.png" alt="Add to Cart" class="add_to_cart"></a>
        </div>
      </div>

      <div class="books">
        <a href="mystery/mystery3.php"><img class="books_img" src="img/mystery books/mystery3.jpg" alt="mystery/mystery3"/></a>
        <div class="book_des">The Final Detail</div>
        <center><span class="price">$19.99USD</span></center>
        <div class="cart_div">
          <a href="#" onclick="simpleCart.add('name=The Final Detail','price=19.99','image=img/mystery books/mysterythumbs3.jpg');return false;"> <img src="img/logos/add.png" alt="Add to Cart" class="add_to_cart"></a></div>
        </div>

        <div class="books">
          <a href="mystery/mystery4.php"><img class="books_img" src="img/mystery books/mystery4.jpg" alt="mystery/mystery4"/></a>
          <div class="book_des"> Night Prey</div>
          <center><span class="price">$9.95USD</span></center>
          <div class="cart_div">
            <a href="#" onclick="simpleCart.add('name=Night Prey','price=9.95','image=img/mystery books/mysterythumbs4.jpg');return false;"> <img src="img/logos/add.png" alt="Add to Cart" class="add_to_cart"></a></div>
          </div>

          <div class="books">
            <a href="mystery/mystery5.php"><img class="books_img" src="img/mystery books/mystery5.jpg" alt="mystery/mystery5"/></a>
            <div class="book_des"> Victims: An Alex Delaware Novel</div>
            <center><span class="price">$21.00USD</span></center>
            <div class="cart_div">
              <a href="#" onclick="simpleCart.add('name=Victims: An Alex Delaware Novel','price=21.00','image=img/mystery books/mysterythumbs5.jpg');return false;"> <img src="img/logos/add.png" alt="Add to Cart" class="add_to_cart"></a></div>
            </div>

            <div class="books">
              <a href="mystery/mystery6.php"><img class="books_img" src="img/mystery books/mystery6.jpg" alt="mystery/mystery6"/></a>
              <div class="book_des"> Devil’s Peak</div><center>
              <span class="price">$39.95USD</span></center>
              <div class="cart_div">
                <a href="#" onclick="simpleCart.add('name=Devil’s Peak','price=39.95','image=img/mystery books/mysterythumbs6.jpg');return false;"> <img src="img/logos/add.png" alt="Add to Cart" class="add_to_cart"></a></div>
              </div>

              <div class="books">
                <a href="mystery/mystery7.php"><img class="books_img" src="img/mystery books/mystery7.jpg" alt="mystery/mystery7"/></a>
                <div class="book_des"> Angels Flight (Harry Bosch)</div>
                <center><span class="price">$16.50USD</span></center>
                <div class="cart_div">
                  <a href="#" onclick="simpleCart.add('name=Angels Flight','price=16.50','image=img/mystery books/mysterythumbs7.jpg');return false;"> <img src="img/logos/add.png" alt="Add to Cart" class="add_to_cart"></a></div>
                </div>

                <div class="books">
                  <a href="mystery/mystery8.php"><img class="books_img" src="img/mystery books/mystery8.jpg" alt="mystery/mystery8"/></a>
                  <div class="book_des"> Jolie Blon's Bounce</div><center><span class="price">$14.95USD</span></center>
                  <div class="cart_div">
                    <a href="#" onclick="simpleCart.add('name=Jolie Blons Bounce','price=14.95','image=img/mystery books/mysterythumbs8.jpg');return false;"> <img src="img/logos/add.png" alt="Add to Cart" class="add_to_cart"></a></div>
                  </div>

                </div><!-- End of content-->

                <?php
                require_once("footer.php");
                ?>