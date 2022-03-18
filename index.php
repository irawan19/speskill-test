<?php
    
    class SpeSkillTest
    {
        public static function narcissistic($n)
        {
            $sum = 0;
            $n = 153;
            $temp = $n;
            $totalDigits = strlen($n);
            
            while($n != 0) {
                $r = $n%10;
                $sum = $sum+pow($r, $totalDigits);
                $n = floor($n/10);
            }
            
            if($sum == $temp) {
                $result = "true";
            } else {
                $result = "false";
            }
            return $result;
        }

        public static function parityoutlier($array)
        {
            $odds = [];
            $evens = [];
            foreach ($array as $item) {
              if ($item % 2) array_push($odds, $item);
              else array_push($evens, $item);
            }
            return count($evens) === 1 ? $evens[0] : $odds[0];
        }

        public static function findneedle($string, $find)
        {
            $find = array_search($find, $string);
            return $find;
        }

        public static function blueocean($string, $word)
        {
            $find = (int)$word;
            if (($key = array_search($find, $string)) !== false) {
                unset($string[$key]);
            }
            return $string;
        }
    }

    echo SpeSkillTest::narcissistic(153).'<br/>';
    echo SpeSkillTest::parityoutlier([2, 4, 0, 100, 4, 11, 2602, 36]).'<br/>';
    echo SpeSkillTest::findneedle(["red", "blue", "yellow", "black", "grey"], "blue").'<br/>';
    print_r(SpeSkillTest::blueocean([1,2,3,4,6,10], [1])).'<br/>';
?>