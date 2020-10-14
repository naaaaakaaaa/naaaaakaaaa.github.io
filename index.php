<?php

$change = '';

echo '店員：お会計は120円です。' . PHP_EOL;
echo '自分：';
$money = (int)trim(fgets(STDIN));

if ($money === 120) {
  echo 'ちょうど頂戴いたします。ありがとうございました。' . PHP_EOL;
} elseif ($change = $money - 120) {
  echo $change . '円お返しいたします。ありがとうございました。' . PHP_EOL;
}
