<?php

class Teachers
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

    protected function studentMark(){
        echo "all Students Marks";
    }

}


class Managements  extends Teachers{
    public function getMark(){
        $this->studentMark();
    }
}

$t1 = new Teachers();

// $t1->exam();

$m1 = new Managements();

$m1->getMark();
