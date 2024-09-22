<?php

class Teachers{

    // public function question_papers(){
    //     echo "question paper for students";
    // }


  private function question_papers(){
        echo "question paper for students";
    }

   public function exam(){

    return $this->question_papers();
   } 


   protected function students_marks(){
    echo "all students marks";
   }

   public function marks(){
    return $this->students_marks();
   }


}


class Management extends Teachers{
    public function anik(){
        $this->marks();
    }
}


$t1 = new Teachers();


$t1->exam();
echo "<br>";
echo $t1->marks();

echo "<br>";

$t2 = new Management();

$t2->anik();


?>