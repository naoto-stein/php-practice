<?php
// Q1 変数と文字列
$name = "真人";

echo "私の名前は「" . $name . "」です。";

// Q2 四則演算
$x = 5;
$y = 4;

echo "\n";
var_dump($x * $y);
$z = $x * $y;
var_dump($z/2);

// Q3 日付操作
function dateFormat($date) {
    return date('Y年m月d日', strtotime($date));
}

echo "\n";
echo "現在時刻は、" . date('Y年m月d日 H時i分s秒') . "です。";

// Q4 条件分岐-1 if文
$device = "mac";

echo "\n";
if ($device === "windows") {
    echo "使用OSは、windowsです。";
} else {
    if ($device === "mac") {
        echo "使用OSは、macです。";
    } else {
        echo "どちらでもありません。";
    }
}

// Q5 条件分岐-2 三項演算子
$age = 20;

echo "\n";
echo $age < 18 ? "未成年です。" : "成人です。";

// Q6 配列
$kanto = ["東京都", "神奈川県", "栃木県", "千葉県"];

echo "\n";
echo $kanto[2] . "と" . $kanto[3] . "は関東地方の都道府県です。";

// Q7 連想配列-1
$capitalCities = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市"
];

foreach ($capitalCities as $capitalCity) {
    echo "\n";
    echo $capitalCity ;
}

// Q8 連想配列-2
if (isset($capitalCities["埼玉県"])) {
    echo "\n";
    echo "埼玉県の県庁所在地は、" . $capitalCities["埼玉県"] . "です。";
}

// Q9 連想配列-3
$capitalCities["愛知県"] = "名古屋市";
$capitalCities["大阪府"] = "大阪市";

foreach ($capitalCities as $prefecture => $capitalCity) {
    if (in_array($prefecture, $kanto)) {
        echo "\n";
        echo $prefecture . "の県庁所在地は、" . $capitalCity . "です。";
    } else {
        echo "\n";
        echo $prefecture . "は関東地方ではありません。";
    }
}

// Q10 関数-1
function hello($name) {
    echo "\n";
    return $name . "さん、こんにちは。";
}

echo hello("栗田") ;
echo hello("永田") ;

// Q11 関数-2
function calcTaxInPrice($price) {
    return $price * 1.1;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);

echo "\n";
echo $price . "円の商品の税込価格は" . $taxInPrice . "円です。";

// Q12 関数とif文
function distinguishNum($number) {
    if ($number % 2 === 1) {
        return $number . "は奇数です。";
    } else {
        return $number . "は偶数です。";
    }
}

echo "\n";
echo distinguishNum(11);
echo "\n";
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch ($grade) {
        case "A":
        case "B":
            return "合格です。";
        case "C":
            return "合格ですが追加課題があります。";
        case "D":
            return "不合格です。";
        default:
            return "判定不明です。講師に問い合わせてください。";
    }
}

echo "\n";
echo evaluateGrade("A") ;
echo "\n";
echo evaluateGrade("E") ;
?>
