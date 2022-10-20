<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>
    <style>
        .clear{
            padding: 10px 20px;
            border: 1px solid #000;
            margin-bottom: 30px;
        }
        .paste {
            width: 100%;
            min-height: 200px;
            border: 1px solid black;
            margin-bottom: 30px;
            padding: 15px;
        }
        .view {
            padding: 15px;
        }
        .result {
            border: 1px solid black;
            padding: 15px;
            width: 100%;
        }

        .inner-table5 tr:first-child td {
            writing-mode: tb-rl;
            transform:rotate(180deg);
            text-align: center;
            max-height: 150px;
        }
        .inner-table5__item:nth-child(2n) {
            background-color: #eee;
        }
        .inner-table5__title {
            background-color: #ccc !important;
        }
        .inner-table5 td {
            padding: 5px 10px;
            border: 1px solid #eee;
        }
    </style>

    <button class="clear">Очистить</button>

<!--    <div class="paste" contenteditable>-->
<!---->
<!--    </div>-->

    <textarea class="paste" cols="30" rows="10"></textarea>

    <div class="view">

    </div>

    <input class="result" type="text">

    <script>
        $('.clear').on('click', function (){
            $('.paste').val('');
            $('.view').html('');
            $('.result').val('');
        });
        // $('.paste').bind("DOMSubtreeModified",function(){
        //     $.ajax({
        //         url: '/table/tablecopy.php',
        //         type: "POST",
        //         data: {data: $(this).html()},
        //         success: function(data) {
        //             $('.view').html(data);
        //             $('.result').val(data);
        //         }
        //     });
        // });

        $('.paste').on("change",function(){
            $.ajax({
                url: '/table/tablecopy.php',
                type: "POST",
                data: {data: $(this).val()},
                success: function(data) {
                    $('.view').html(data);
                    $('.result').val(data);
                }
            });
        });
    </script>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>