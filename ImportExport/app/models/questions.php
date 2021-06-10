<?php

class Questions
{   public $id;
    public $question;
    public $answear;
   

    public function __construct($id)
    {
        $allquestions = json_decode(file_get_contents(__DIR__ . '/../models/questions.json'));

        foreach ($allquestions as $question) {
            if ($question->id === $id) {
                $this->id = $question->id;
                $this->question = $question->question;
                $this->answear = $question->answear;
                
            }
        }
    }
}
