<?php

namespace App\Http\Controllers;



class QuizController extends Controller
{
    public function unit1_quiz()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/QuizCSV/unit1_quiz.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }
        return view('education.quiz.unit1_quiz', compact('data'));
    }

    public function unit2_quiz()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/QuizCSV/unit2_quiz.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }
        return view('education.quiz.unit2_quiz', compact('data'));
    }

    public function unit3_quiz()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/QuizCSV/unit3_quiz.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }
        return view('education.quiz.unit3_quiz', compact('data'));
    }

 public function unit4_quiz()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/QuizCSV/unit4_quiz.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }
        return view('education.quiz.unit4_quiz', compact('data'));
    }

    public function unit5_quiz()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/QuizCSV/unit5_quiz.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }
        return view('education.quiz.unit5_quiz', compact('data'));
    }

}
