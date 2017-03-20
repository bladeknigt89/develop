<?php
    require('../../confs/main.php');
    require("../header.php");
    require("../menu.php");
?>
      
      <div class="container-fluid">
        <!--News Section-->
        <section id="news">
           <h1 id="news_title">Galéria</h1>
           
           <div class="row">
           
           <!--Thumbnails-->
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="galery-category.php">
               
                <!--Image Slider-->
        <div id="thumbnail_slider" class="carousel slide" data-ride="carousel">    
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/image1.jpg" alt="image 1">
                </div>
                <div class="item">
                    <img src="images/image2.jpg" alt="image 2">
                </div>
                <div class="item">
                    <img src="images/image3.jpg" alt ="image 3">
                </div>
                <div class="item">
                    <img src="images/image4.jpg" alt="image 4">
                </div>
            </div>
        </div>
                <div class="caption">
                  <p>Hajköltemények</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="galery-category.php">
                <div id="thumbnail_slider" class="carousel slide" data-ride="carousel">    
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/image1.jpg" alt="image 1">
                </div>
                <div class="item">
                    <img src="images/image2.jpg" alt="image 2">
                </div>
                <div class="item">
                    <img src="images/image3.jpg" alt ="image 3">
                </div>
                <div class="item">
                    <img src="images/image4.jpg" alt="image 4">
                </div>
            </div>
        </div>
                <div class="caption">
                  <p>Műszempillák</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="galery-category.php">
                <div id="thumbnail_slider" class="carousel slide" data-ride="carousel">    
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/image1.jpg" alt="image 1">
                </div>
                <div class="item">
                    <img src="images/image2.jpg" alt="image 2">
                </div>
                <div class="item">
                    <img src="images/image3.jpg" alt ="image 3">
                </div>
                <div class="item">
                    <img src="images/image4.jpg" alt="image 4">
                </div>
            </div>
        </div>
                <div class="caption">
                  <p>Műkörmök</p>
                </div>
              </a>
            </div>
          </div>
        </div>
        </section>
    </div>