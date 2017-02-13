<?php
    require('../../confs/main.php');
    require("../header.php");
    require("../menu.php");
?>
    <div class="container-fluid">
        <!--News Section-->
        <section id="news">
            <h1 id="news_title">Kategória</h1>
            <script>
                var imageCount = 4;
                var imagePerRow = 2;
                var imageIndex = 1;
                for (var i = 0; i < imageCount / imagePerRow; i++) {
                    var row = $('<div>').addClass('row')
                    $('#news').append(row);
                    for (var j = 0; j < imagePerRow; j++) {
                        var file = 'images/image' + imageIndex + '.jpg';
                        var img = $('<img>').attr('src', file).addClass('col-md-6').attr('id', file).attr('data-toggle', 'modal').attr('data-target', '#imageViewer');
                        row.append(img);
                        imageIndex++;
                    }
                }
                $('#news').find('img').on('click', function () {
                    $('#imageViewer').find('img').attr('src', $(this).attr('src'));
                });
            </script>
        </section>
    </div>
    <div id="imageViewer" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Kategória</h4> </div>
                <div class="modal-body"> <img> </div>
            </div>
        </div>
    </div>