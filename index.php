<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once 'drb_animate.php';
?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>

        <link rel="stylesheet/less" type="text/css" charset="UTF-8" href="css/style.less" />
        <script src="js/less.js" type="text/javascript" charset="UTF-8"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js" charset="UTF-8" type="text/javascript" ></script>
        <script src="js/jquery-ui.min.js" charset="UTF-8" type="text/javascript" ></script>
        <script src="js/jquery-ui.js" charset="UTF-8" type="text/javascript" ></script>

        <script charset="UTF-8">
            jQuery(function () {
                var $ = jQuery;
                var speed = 12000;
                function _next_drb(speed) {
                    $.post("ajax/drby.php", {}, function (data) {
                        console.log(data);
                        $(".drb_request").append(data['html']);

                        _animate_drb(speed);
                        window.setTimeout(function () {
                            _next_drb(speed);
                        }, data['chars'] * 30);
                    }, "json");
                }
                function _animate_drb(speed) {
                    var display_height = $(window).height();
                    $('.drb span').each(function () {
                        var sigma = .15;
                        var rand = Math.random();
                        $(this).css({position: 'relative', top: -display_height * (1 + sigma * rand)});


                        $(this).animate({top: display_height * (1 + sigma * rand)}, 7 * speed, "linear", function () {
                            $(this).remove();
                        });
                    });
                }


                $(window).load(function () {

                    _next_drb(speed);


                });
            });

        </script>
    </head>
    <body>
        <div class="drb_request">

        </div>


    </body>
</html>
