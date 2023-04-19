<?php
    function generatePassword ($charactersArray, $lengthPass) {
            $passwordGen=[];
            $i=0;
            while($i < $lengthPass) {
                $randomChar=rand(0,count($charactersArray) - 1);
                foreach ($charactersArray as $character => $value){
                    if ($randomChar == $character) {
                        $passwordGen[]=$value;
                    }
                }
                $i++;
            }
            $risultato = implode(" ", $passwordGen);
            return $risultato;
        }
?>