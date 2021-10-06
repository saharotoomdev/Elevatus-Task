<?php


/**
This Class Created to calculate Levenshtein distance
 */
Class Levenshtein {
    /**
     * @param String  $input_a
     * @param String  $input_b
     * @return Integer
     */

    public $input_a;
    public $input_b;

    public function __construct($input_a,$input_b)
    {
        $this->input_a = $input_a;
        $this->input_b = $input_b;

    }

    /*
    *** Calculate levenshtein Process Steps: 
        1.  Sort two words by length.
        2.  Take the first word and place first character on the board.
        3.  Search through first word character that is already on the board and see if there are any possible intersections (any common letters) with the secound word characters .
        4. loop through all the first word characters and check to see if the new character interferes.
    
    */
    public function levenshtein_dis(){
        $len1 = strlen ($this->input_a);
        $len2 = strlen ($this->input_b);

        if ($len1 == 0)
        {
            return $len2;
        }

        if ($len2 == 0)
        {
            return $len1;
        }

        for ($i = 0; $i <= $len1; $i ++)
        {
            $matrix [$i] [0] = 0;
        }

        for ($j = 0; $j <= $len2; $j ++)
        {
            $matrix [0] [$j] = 0;
        } 

        for ($i = 1; $i <= $len1; $i ++)
        {
            $ch1 = $this->input_a [$i-1];
            for ($j = 1; $j <= $len2; $j ++)
            {
                $ch2 = $this->input_b [$j-1];
                $temp = $ch1 == $ch2? 0: 1;
                $arr = array (
                    $matrix [$i-1] [$j] + 1,
                    $matrix [$i] [$j-1] + 1,
                    $matrix [$i-1] [$j-1] + $temp
                );
                $matrix [$i] [$j] = min ($arr);
            }
           
        }
        return $matrix [$len1] [$len2];
    }
}


?>