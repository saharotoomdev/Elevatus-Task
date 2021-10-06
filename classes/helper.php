<?php
include ("hamming.php");
include ("levenshtein.php");

class Helper {

    /**
    Helper Class Created to be the first interface to calculat the distance Process

    @param String  $operation 
    @return Integer


     */
    public  $operation='lav'; // lav= Levenshtein distance   , ham = hamming distance 

    public function __construct($operation)
    {
        $this->operation = $operation;
       
    }



    public function calculate($input_a,$input_b)
    {
        //calculate distance
        $dis=0;
        switch ($this->operation){
            case 'lav':
                {
                    $levenshtein=new Levenshtein($input_a,$input_b);
                    $dis=$levenshtein->levenshtein_dis();
                    break;
                }
            case 'ham': 
                {
                    $hamming=new Hamming($input_a,$input_b);
                    $dis=$hamming->hamming_dis();
                    break;
                }
        }

        return $dis;
    }

}
?>