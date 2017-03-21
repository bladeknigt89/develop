<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2017.03.21.
 * Time: 18:41
 */?>

<div class="container-fluid">
    <!--News Section-->
    <section id="news">
        <h1 id="news_title">Kategória</h1>
        <script>
            var numImg = 8;
            loadPage(1);
            setupPageSelector();

            function loadPage(page) {
                $.ajax({
                    url: "ajax.php"
                    , type: "get"
                    , data: {
                        page: page
                    }
                    , dataType: "text"
                    , error: function (x, y, z) {
                        console.log("AJAX: " + x, y, z);
                    }
                    , success: function (data) {
                        for (var i = 0; i < data.length; i++) {
                            var img = data[i].addClass('col-md-6').attr('data-toggle', 'modal').attr('data-target', '#imageViewer');
                            $('#news').append(img);
                        }
                    }
                });
            }

            function setupPageSelector() {
                $.ajax({
                    url: "ajax.php"
                    , type: "get"
                    , data: {
                        init: numImg
                    }
                    , dataType: "text"
                    , error: function (x, y, z) {
                        console.log("AJAX: " + x, y, z);
                    }
                    , success: function (data) {
                        var div = $('<div>').addClass('pages');
                        var ul = $('<ul>').addClass('list-group');
                        for (var i = 1; i < data; i++) {
                            var li = $('<li>').addClass('list-group-item').Text(i);
                            ul.append(li);
                        }
                        div.append(ul);
                        $('#news').append(div);
                    }
                });
            }
            /*
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
             }*/
            $('.pages').find('.list-group').find('.list-group-item').on('click', function () {
                $(this).classList.add('active');
                loadPage($(this).Text());
            });
            $('#news').find('img').on('click', function () {
                $('#imageViewer').find('img').attr('src', $(this).attr('src'));
            });
        </script>
        <div class="pages">
            <ul class="list-inline">
                <li class="list-group-item active">1</li>
                <li class="list-group-item">2</li>
                <li class="list-group-item">3</li>
                <li class="list-group-item">4</li>
                <li class="list-group-item">5</li>
            </ul>
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
    </section>
</div>
