<?php

class Teacher
{

    private function questionPapers()
    {
        return "important";
    }

    public function exam()
    {
        if ($this->questionPapers() == "important") {
            echo "do something";
        } else {
            echo "do else";
        }
    }

   protected function studentMarks()
    {
        echo "all students marks";
    }
}

class Management extends Teacher{
    public function review_exam(){
        $this->studentMarks();
    }
}


$t1 = new Management();

$t1->review_exam();
