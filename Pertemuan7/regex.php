<?php
$pattern = '/[a-z]/';
$text = 'This is a Sample Text.';

if(preg_match($pattern, $text)){
    echo "Huruf kecil ditemukan!<br>";
} else{
    echo "Tidak ada huruf kecil!<br>";
}

$pattern2 = '/[0-9]+/';
$text2 = 'There are 123 apples.';

if(preg_match($pattern2, $text2, $matches)){
    echo "Cocokkan: " . $matches[0] . "<br>";
} else{
    echo "Tidak ada yang cocok!<br>";
}

$pattern3 = '/apple/';
$replacement = 'banana';
$text3 = 'I like apple pie.<br>';
$new_text = preg_replace($pattern3, $replacement, $text3);
echo $new_text;

$pattern4 = '/go*d/';
$text4 = 'God is good.';

if(preg_match($pattern4, $text4, $matches)){
    echo "Cocokkan: " . $matches[0] . "<br>";
} else{
    echo "Tidak ada yang cocok!<br>";
}

$pattern5 = '/go?d/';
$text5 = 'God is good.';

if(preg_match($pattern5, $text5, $matches)){
    echo "Cocokkan: " . $matches[0] . "<br>";
} else{
    echo "Tidak ada yang cocok!<br>";
}

$pattern6 = '/go{0,3}d/';
$text6 = 'God is good.';

if(preg_match($pattern6, $text6, $matches)){
    echo "Cocokkan: " . $matches[0];
} else{
    echo "Tidak ada yang cocok!";
}
?>