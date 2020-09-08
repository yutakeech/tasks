<?php
/*"Я люблю кушать пирожки, ведь они очень вкусные, прожаренные. Ням-ням"
1.1 удалить все гласные
1.2 удалить все согласные

2.1 удалить все гласные в словах, где есть повторяющиеся согласные

3. упорядочить слова по возростанию количества букв в них
*/

$string = "Я люблю кушать пирожки, ведь они очень вкусные, прожаренные. Ням-ням";
$vowels = array('а', 'е', 'и', 'о', 'у', 'э', 'ю', 'я');
$consonants = array('б', 'в', 'г', 'д', 'ж', 'з', 'к', 'л', 'м', 'н', 'п', 'р', 'с', 'т', 'ф', 'х', 'ш', 'щ', 'ъ', 'ь');
var_dump($consonants, $vowels);

// 1.1 Удалить все гласные
function deleteVowels ($string, $vowels)
{
    $stringLen = strlen($string);
    $vowelsLen = strlen($vowels);
    $newString = '';

    for($i = 0; $i < $stringLen; $i++)
    {
        for($j = 0; $j < $vowelsLen; $j++)
        {
            if ($string[$i] !== $vovels[$j])
            {
                $newString += $string[$i];
            } else {
                $newString = $newString;
            }
        }
    }
    print_r("String without vowels: " . $newString);
}

function deleteConsonants ($string, $consonants)
{

}

/* Добавил сюда текста, чтобы отправить */
