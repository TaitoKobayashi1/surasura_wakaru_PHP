<pre>
<?php
echo "Q1<br>";
    // 配列
    $fruits_array=array("イチゴ","りんご","バナナ");
    $vegetables_array=array("きゅうり","かぼちゃ","じゃがいも");
    $foods_array=array($fruits_array, $vegetables_array);
    var_dump($foods_array);

    // 連想配列
    $foods=array(
        "fruits"=>array("イチゴ","りんご","バナナ"),
        "vegetables"=>array("きゅうり","かぼちゃ","じゃがいも")
    );
    var_dump($foods);

echo "Q3<br>";
    foreach ($foods as $sort => $items) {
        foreach ($items as $item) {
            echo $sort . ":" . $item . "<br>";
        }
    }

?>
</pre>