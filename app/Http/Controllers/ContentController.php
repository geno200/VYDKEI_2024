<?php

namespace App\Http\Controllers;



class ContentController extends Controller
{

    public function bevezetes()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/ContentCSV/bevezetes.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }

        $quiz_data = [];
        if(($open = fopen(storage_path()."/app/QuizCSV/quizbev.csv","r"))!==false) {
            while (($quiz_row = fgetcsv($open,0,";"))!==false)
            {
                $quiz_data[] = $quiz_row;
            }
            fclose($open);
        }

        return view('education.units.bevezetes', compact('quiz_data','data'));

    }

    public function unit1_1()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/ContentCSV/unit1_1.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }
        return view('education.units.unit1_1', compact('data'));
    }
    public function unit1_2()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/ContentCSV/unit1_2.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }
        return view('education.units.unit1_2', compact('data'));
    }

    public function unit1_3()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/ContentCSV/unit1_3.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }
        return view('education.units.unit1_3', compact('data'));
    }


    public function unit2_1()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/ContentCSV/unit2_1.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }
        return view('education.units.unit2_1', compact('data'));

    }

    public function unit2_2()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/ContentCSV/unit2_2.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }

        return view('education.units.unit2_2', compact('data'));
    }

    public function unit2_3()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/ContentCSV/unit2_3.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }

        return view('education.units.unit2_3', compact('data'));
    }


    public function unit3_1()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/ContentCSV/unit3_1.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }

        return view('education.units.unit3_1', compact('data'));
    }

    public function unit3_2()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/ContentCSV/unit3_2.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }

        return view('education.units.unit3_2', compact('data'));
    }
 public function unit3_3()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/ContentCSV/unit3_3.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }

        return view('education.units.unit3_3', compact('data'));
    }

    public function unit4_1()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/ContentCSV/unit4_1.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }

        return view('education.units.unit4_1', compact('data'));
    }

    public function unit4_2()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/ContentCSV/unit4_2.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }

        return view('education.units.unit4_2', compact('data'));
    }

    public function unit4_3()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/ContentCSV/unit4_3.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }

        return view('education.units.unit4_3', compact('data'));
    }

    public function unit5_1()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/ContentCSV/unit5_1.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }

        return view('education.units.unit5_1', compact('data'));
    }

    public function unit5_2()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/ContentCSV/unit5_2.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }

        return view('education.units.unit5_2', compact('data'));
    }
    public function unit5_3()
    {
        $data = [];
        if(($open = fopen(storage_path()."/app/ContentCSV/unit5_3.csv","r"))!==false) {
            while (($row = fgetcsv($open,0,";"))!==false)
            {
                $data[] = $row;
            }
            fclose($open);
        }
        return view('education.units.unit5_3', compact('data'));
    }


}
