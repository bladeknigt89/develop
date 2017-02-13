<?php
    require('../../confs/main.php');
    require("../header.php");
    require("../menu.php");
?>
      <div class="container-fluid">
        <!--Image Slider-->
        <div id="slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"></li>
                <li data-target="#slider" data-slide-to="1"></li>
                <li data-target="#slider" data-slide-to="2"></li>
                <li data-target="#slider" data-slide-to="3"></li>
            </ol>
            
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/image1.jpg" alt="image 1">
                   <div class="carousel-caption">
                       <h3>Image 1</h3>
                       <p>Image 1</p>
                   </div>
                </div>
                <div class="item">
                    <img src="images/image2.jpg" alt="image 2">
                    <div class="carousel-caption">
                       <h3>Image 2</h3>
                       <p>Image 2</p>
                   </div>
                </div>
                <div class="item">
                    <img src="images/image3.jpg" alt ="image 3">
                    <div class="carousel-caption">
                       <h3>Image 3</h3>
                       <p>Image 3</p>
                   </div>
                </div>
                <div class="item">
                    <img src="images/image4.jpg" alt="image 4">
                    <div class="carousel-caption">
                       <h3>Image 4</h3>
                       <p>Image 4</p>
                   </div>
                </div>
            </div>
            
            <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#slider" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
        </div>
        
        
        <!--News Section-->
        <section id="news">
           
           <h1 id="news_title">Hírek</h1>
           
            <article>
               <hr>
                <h2>Title</h2>
                <span class="date">2016-01-24</span>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ex, odio aliquam optio? Impedit amet, debitis aperiam velit inventore. Quod architecto maxime necessitatibus doloribus nisi! Repellat, adipisci tempore temporibus rem.
                </div>
            </article>
            <hr>
            <article>
                <h2>Title</h2>
                <span class="date">2016-01-24</span>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ex, odio aliquam optio? Impedit amet, debitis aperiam velit inventore. Quod architecto maxime necessitatibus doloribus nisi! Repellat, adipisci tempore temporibus rem.
                </div>
            </article>
            <hr>
            <article>
                <h2>Title</h2>
                <span class="date">2016-01-24</span>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ex, odio aliquam optio? Impedit amet, debitis aperiam velit inventore. Quod architecto maxime necessitatibus doloribus nisi! Repellat, adipisci tempore temporibus rem.
                </div>
            </article>
            <hr>
        </section>
</div>
</body>
</html>