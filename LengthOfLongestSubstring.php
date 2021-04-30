class LengthOfLongestSubstring {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $chars = str_split($s);
        $result = 0;
        $subStrChars = [];
        if(empty($s)){
            return 0;
        }
        for($i = 0; $i < count($chars);$i++){

            for($j = $i ; $j < count($chars); $j++){
                if(!in_array( $chars[$j],$subStrChars)){
                    $subStrChars[] = $chars[$j];
                }else{
                    break;
                }
            }
            $result = count($subStrChars) > $result ? count($subStrChars) : $result;
            $subStrChars = [];
        }
        return $result;
    }
}

/*
Given a string s, find the length of the longest substring without repeating characters.

 

Example 1:

Input: s = "abcabcbb"
Output: 3
Explanation: The answer is "abc", with the length of 3.

Example 2:

Input: s = "bbbbb"
Output: 1
Explanation: The answer is "b", with the length of 1.

*/
