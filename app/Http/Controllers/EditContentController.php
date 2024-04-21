<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EditContentController extends Controller
{
    public function list()
    {
        if (
            Auth::check() &&
            Auth::user()->usertype === 'teacher'
        ) {
            $files = Storage::files('ContentCSV');
            $quiz_files = Storage::files('QuizCSV');
            return view(
                'education.units.editfiles',
                compact('files', 'quiz_files')
            );
        } else {
            abort(404);
        }
    }
    public function showChosenFile(Request $request)
    {
        if (Auth::check() && Auth::user()->usertype === 'teacher') {
            $file = $request->input('file');
            $data = [];
            if (($open = fopen(storage_path("app/$file"), "r")) !== false) {
                while (($row = fgetcsv($open, 0, ";")) !== false) {
                    $data[] = $row;
                }
                fclose($open);
            }

            return view('education.units.edit', compact('data', 'file'));
        } else {
            abort(404);
        }
    }

    public function showChosenQuizFile(Request $request)
    {
        if (Auth::check() && Auth::user()->usertype === 'teacher') {
            $quiz_file = $request->input('file');
            $data = [];
            if (($open = fopen(storage_path("app/$quiz_file"), "r")) !== false) {
                while (($row = fgetcsv($open, 0, ";")) !== false) {
                    $data[] = $row;
                }
                fclose($open);
            }
            return view('education.units.quizedit', compact('data', 'quiz_file'));
        } else {
            abort(404);
        }
    }

    public function updateChosenFile(Request $request)
    {
        if (Auth::user()->usertype === 'teacher') {
            $file = $request->input('file');
            $data = $request->input('csv_data');

            if (($open = fopen(storage_path("app/$file"), "w")) !== false) {
                foreach ($data as $row) {
                    fputcsv($open, [$row], ";");
                }
            }
            fclose($open);
            return redirect()->route('edit.list')->with(compact('data', 'file'));
        } else {
            abort(404);
        }
    }

}
