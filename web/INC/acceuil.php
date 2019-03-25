<?php ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <br>
    <div class="carousel-inner" role="listbox" id="imageSlide">
        <div class="item active">
            <img src="../IMG/carpacio.jpg" alt="carpacio de boeuf sur une assiette">
            <div class="carousel-caption">
                <button type="button" class="btn btn-default">A propos de nous</button>
            </div>
        </div><!--END ACTIVE-->
        <div class="item">
            <img src="../IMG/steak.jpg" alt="steak de boeuf sur une planche tenu par un homme">
            <div class="carousel-caption">
                <button type="button" class="btn btn-default">A propos de nous</button>
            </div>
        </div>
        <div class="item">
            <img src="../IMG/americain.jpg" alt="steak haché dans un récipient en verre">
            <div class="carousel-caption">
                <button type="button" class="btn btn-default">A propos de nous</button>
            </div>
        </div>
    </div>
    <br>
</div> <!--END SLIDER-->
<div id="carouselButtons">
    <button id="playButton" type="button" class="btn btn-default btn-xs">
        <span class="glyphicon glyphicon-play"></span>
    </button>
    <button id="pauseButton" type="button" class="btn btn-default btn-xs">
        <span class="glyphicon glyphicon-pause"></span>
    </button>
</div>