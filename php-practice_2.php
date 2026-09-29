<?php
// Q1 tic-tac問題
$numbers = range(1, 100);

echo "1から100までのカウントを開始します" . PHP_EOL . PHP_EOL;

foreach ($numbers as $number) {
	if ($number % 20 === 0) {
		echo "tic-tac" . PHP_EOL;
	} elseif ($number % 4 === 0) {
		echo "tic" . PHP_EOL;
	} elseif ($number % 5 === 0) {
		echo "tac" . PHP_EOL;
	} else {
		echo $number . PHP_EOL;
	}
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。" . PHP_EOL;

foreach ($personalInfos as $index => $person) {
    $number = $index + 1;
    echo $number . "番目の" . $person['name'] . "のメールアドレスは" . $person['mail'] . "で、電話番号は" . $person['tel'] . "です。" . PHP_EOL;
}

$ageList = [25, 30, 18];
foreach ($personalInfos as $index => &$person) {
    $person['age'] = $ageList[$index];
}
unset($person);

var_dump($personalInfos);


// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo $this->studentName . 'は' . $subject . 'の授業に参加しました。学籍番号：' . $this->studentId . PHP_EOL;
    }
}

$student = new Student(120, '水瀬');
echo '学籍番号' . $student->studentId . '番の生徒は' . $student->studentName . 'です。' . PHP_EOL;

// Q4 オブジェクト-2

$student->attend('PHP');

// Q4 オブジェクト-2


// Q5 定義済みクラス
$today = new DateTime('today');
$oneMonthAgo = (clone $today)->modify('-1 month');
echo $oneMonthAgo->format('Y-m-d') . PHP_EOL;

$startDate = new DateTime('1992-04-25');
$dateDifference = $startDate->diff($today);
echo 'あの日から' . $dateDifference->days . '日経過しました。' . PHP_EOL;
?>
