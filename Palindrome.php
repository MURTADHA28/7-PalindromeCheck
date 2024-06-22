function isPalindrome($text) {
    $text = strtolower($text);
    $cleanText = '';
    for ($i = 0; $i < strlen($text); $i++) {
        if (ctype_alnum($text[$i])) {
            $cleanText .= $text[$i];
        }
    }
    
    $left = 0;
    $right = strlen($cleanText) - 1;
    
    while ($left < $right) {
        if ($cleanText[$left] != $cleanText[$right]) {
            return false;
        }
        $left++;
        $right--;
    }
    
    return true;
}

$result = isPalindrome('A Santa at NASA' );
echo $result ? 'true' : 'false';
