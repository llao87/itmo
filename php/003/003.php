<?php
/*
Написать функцию - конвертер строки.
Возможности:
перевод всех символов в верхний регистр,
перевод всех символов в нижний регистр,
перевод всех символов в нижний регистр и первых символов слов в верхний регистр.
Это должна быть одна функция
*/


$userData = 'djaSSDdsd  sadlkDDSsda dDDDsadsa sASJDKAHSDdh';


function stringTransform($str, $type='UPPER_CASE') {

	switch ($type) {
		case 'UPPER_CASE':
			$str = strtoupper($str);
			break;
		case 'LOWER_CASE':
			$str = strtolower($str);
			break;
		case 'WITH_CAPITAL':
			$str = ucwords(strtolower($str));
			break;
		default:
			break;
	}

	return $str;
}

echo 'ORIGINAL : ' . $userData . '<br><br><br>';
echo 'UPPER_CASE : ' . stringTransform($userData, 'UPPER_CASE') . '<br><br>';
echo 'no parameter : ' . stringTransform($userData) . '<br><br>';
echo 'LOWER_CASE : ' . stringTransform($userData, 'LOWER_CASE') . '<br><br>';
echo 'WITH_CAPITAL : ' . stringTransform($userData, 'WITH_CAPITAL') . '<br><br>';
echo 'wrong parameter : ' . stringTransform($userData, 'dsadads');