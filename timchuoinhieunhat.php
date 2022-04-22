<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SẮP XẾP MẢNG TĂNG DẦN</title>
    <link rel="stylesheet" href="public/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/style.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-6 m-auto mt-5">
                <div class="box-center text-center text-uppercase">
                    <h2>TÌM PHẦN TỬ XUẤT HIỆN NHIỀU LẦN CỦA CÁC MẢNG SAU</h2>
                    <span> <strong>Mảng 1</strong> : [3, 7, 3]</span> <br>
                    <span> <strong>Mảng 2</strong> : [null, "hello", true, null]</span> <br>
                    <span><strong>Mảng 3</strong> : [false, "up", "down", "left", "right", true, false]</span>
                    <?php
                    function findArray($arr)
                    {
                        $new_arr = [];
                        foreach ($arr as $value) {
                            $new_arr[] = json_encode($value);
                            
                        }
                        $new_arr = array_count_values($new_arr);
                        $maxValues = max($new_arr);
                        echo array_search($maxValues, $new_arr);
                    }
                    ?>
                     <div class="result mt-5 mt-5">
                         <h3>KẾT QUẢ</h3>
                        <div class="result-1"><?php findArray([3, 7, 3]); ?></div>
                        <div class="result-2"><?php findArray([null, "hello", true, null]); ?></div>
                        <div class="result-3"><?php findArray([false, "up", "down", "left", "right", true, false]); ?></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>


</html>
<link rel="stylesheet" href="public/bootstrap-5.1.3-dist/js/bootstrap.min.js">
<script src="public/js/main2.js"></script>