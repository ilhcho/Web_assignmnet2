<?php
require_once("header.php");
?>

<div id="content">
 <!-- Img slide -->
 <div id="amazingslider-wrapper-1"class="imgslide1">
  <div id="amazingslider-1" class="imgslide2">
    <ul class="amazingslider-slides" style="display:none;">
      <li><img src="img/index_slide/image1.jpg" alt="img1" /></li>
      <li><img src="img/index_slide/image2.jpg" alt="img2" /></li>
      <li><img src="img/index_slide/image3.jpg" alt="img3" /></li>
      <li><img src="img/index_slide/image4.jpg" alt="img4" /></li>
      <li><img src="img/index_slide/image5.jpg" alt="img5" /></li>
    </ul>
    
    <div><a href="http://www.powells.com/" title="Powell's books">Powell's books</a></div>
  </div>
</div>

<h1 class="each_title">Best Sellers</h1>

<div class="books">
  <a href="fiction1.php" title="fiction1"><img class="books_img" src="img/fiction books/fiction.jpg" alt="fiction"/></a>
  <div class="book_des">  White Fire</div>
  <center><span class="price">$13.95USD</span></center>
  <div class="cart_div">
    <a href="#" onclick="simpleCart.add('name=White Fire','price=13.95','image=img/fiction books/fictionthumbs.jpg');return false;" title="cart add"> <img src="img/logos/add.png" alt="Add to Cart" class="add_to_cart"></a>
  </div></div>

  <div class="books">
    <a href="romance1.php" title="romance1"><img class="books_img" src="img/romance books/romance1.jpg" alt="romance1"/></a>
    <div class="book_des"> Fifty Shades Trilogy #01</div>
    <center><span class="price">$34.00USD</span></center>
    <div class="cart_div">
     <a href="#" onclick="simpleCart.add('name=Fifty Shades of Grey','price=34.00','image=img/romance books/romancethumbs1.jpg');return false;" title="cart add"> <img src="img/logos/add.png" alt="Add to Cart" class="add_to_cart"></a>
   </div></div>

   <div class="books">
    <a href="mystery1.php" title="mystery1"><img class="books_img" src="img/mystery books/mystery1.jpg" alt="mystery1"/></a>
    <div class="book_des"> The Silkworm</div>
    <center><span class="price">$29.95USD</span></center>
    <div class="cart_div">
     <a href="#" onclick="simpleCart.add('name=The Silkworm','price=29.95','image=img/mystery books/mysterythumbs1.jpg');return false;" title="cart add"> <img src="img/logos/add.png" alt="Add to Cart" class="add_to_cart"></a>
   </div></div>

   <div class="books">
    <a href="cook1.php" title="cook1"><img class="books_img" src="img/cooking and food books/cook1.jpg" alt="cook1"/></a>
    <div class="book_des"> The Baby-Led Weaning Cookbook</div>
    <center><span class="price">$15.95USD</span></center>
    <div class="cart_div">
     <a href="#" onclick="simpleCart.add('name=The Baby-Led Weaning','price=15.95','image=img/cooking and food books/cookthumbs.jpg');return false;" title="cart add"> <img src="img/logos/add.png" alt="Add to Cart" class="add_to_cart"></a>
   </div></div>

   <div class="books">
    <a href="horror1.php" title="horror1"><img class="books_img" src="img/horror books/horror1.jpg" alt="horror1"/></a>
    <div class="book_des">  13 Bullets: A Vampire Tale</div>
    <center><span class="price">$100.00USD</span></center>
    <div class="cart_div">
      <a href="#" onclick="simpleCart.add('name=13 Bullets: A Vampire Tale','price=100.00','image=img/horror books/horrorthumbs1.jpg');return false;" title="cart add"> <img src="img/logos/add.png" alt="Add to Cart" class="add_to_cart"></a>
    </div></div>

    <div class="books">
      <a href="fiction2.php" title="fiction2"><img class="books_img" src="img/fiction books/fiction2.jpg" alt="fiction2"/></a>
      <div class="book_des"> Lost Light (Harry Bosch)</div>
      <center><span class="price">$20.00USD</span></center>
      <div class="cart_div">
       <a href="#" onclick="simpleCart.add('name=Lost Light','price=20.00','image=img/fiction books/fictionthumbs2.jpg');return false;" title="cart add"> <img src="img/logos/add.png" alt="Add to Cart" class="add_to_cart"></a>
     </div></div>

     <div class="books">
      <a href="romance2.php" title="romance2"><img class="books_img" src="img/romance books/romance2.jpg" alt="romance2"/></a>
      <div class="book_des"> Outlander (Outlander)</div>
      <center><span class="price">$49.99USD</span></center>
      <div class="cart_div">
       <a href="#" onclick="simpleCart.add('name=Outlander','price=49.99','image=img/romance books/romancethumbs2.jpg');return false;" title="cart add"> <img src="img/logos/add.png" alt="Add to Cart" class="add_to_cart"></a>
     </div></div>

     <div class="books">
      <a href="mystery2.php" title="mystery2"><img class="books_img" src="img/mystery books/mystery2.jpg" alt="mystery2"/></a>
      <div class="book_des">Live by Night</div>
      <center><span class="price">$13.95USD</span></center>
      <div class="cart_div">
        <a href="#" onclick="simpleCart.add('name=Live by Night','price=13.95','image=img/mystery books/mysterythumbs2.jpg');return false;" title="cart add"> <img src="img/logos/add.png" alt="Add to Cart" class="add_to_cart"></a>
      </div></div>

    </div><!-- End of content-->

<?php
require_once("footer.php");
?>
