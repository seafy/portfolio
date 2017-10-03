<?php 

include '../view/partials/header.php';

include '../view/partials/sidenav.php';
?>


<section>
 <h1 class="text-white text-center" name="top">Mes Projets Chez Simplon!</h1>
 <hr class="hr bg-info">
</section>


<div class="container projets-container   img-fluid">
  <div class="row">

  <div class="box  text-center text-white mx-auto col-6 col-sm-8  col-md-4 ">
    <div class="">
        <h3>quiver</h3>
        <a href="img/quiver.png" data-fancybox data-caption="My caption">
         <img src="img/quiver500x500.png" alt="" class="img-rounded"/>
        </a>
      </div>

      <div class="">
        <h3>atelier72</h3>
        <a href="img/atelier72.png" data-fancybox data-caption="My caption">
         <img src="img/atelier72500x500.png" alt="" class="img-rounded"/>
        </a>
      </div>

      <div class="">
        <h3>palais des beaux art</h3>
        <a href="img/pba.png" data-fancybox data-caption="My caption">
         <img src="img/pba500x500.png" alt="" class="img-rounded"/>
        </a>
      </div>

      <div class="">
        <h3>plomberie</h3>
        <a href="img/plomberie.png" data-fancybox data-caption="My caption">
         <img src="img/plomberie500x500.png" alt="" class="img-rounded"/>
        </a>
    </div>
  </div>

    <div id="retour-top">
      <a href="#top"><i class="material-icons fixed-bottom text-white mx-5 my-5 bg-warning img-circle ">arrow_upward</i></a>
    </div>
    

  </div>
</div>

<?php 
include '../view/partials/footer.php';

 ?>