
<?php

/**
This Class Created to calculate hamming distance
 */

Class Hamming {
    /**
     * @param String  $input_a
     * @param String  $input_b
     * @return Integer
     */

    public $input_a='';
    public $input_b='';

    public function __construct($input_a,$input_b)
    {
        $this->input_a = $input_a;
        $this->input_b = $input_b;

    }

    //Hamming distance method
    public function hamming_dis(){

        $len1 = strlen ($this->input_a);
        $len2 = strlen ($this->input_b);
        if ($len1!= $len2)
        {
            return false;
        }

        $dist = 0;
        //check every character to find the deffirances 
        for ($i = 0; $i <$len1; $i ++)
        {
            if ($this->input_a[$i]!= $this->input_b[$i])
            {
                $dist ++;
            }
        }
        return $dist;
    }
}


?>