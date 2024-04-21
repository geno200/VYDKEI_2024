<?php

namespace App\Http\Controllers\Education;

use App\Http\Controllers\Controller;
use App\Mail\TeacherContactMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Mail;

class EducationController extends Controller
{
    public function getProfil()
    {
        $user = auth()->user();

        $teachers = User::where('usertype', 'teacher')->get();

        return view('education.profil', compact('user', 'teachers'));
    }

    public function updateProfil(Request $request)
    {
        $user = auth()->user();
        $user->update($request->only('name', 'email'));
        return back()->with("status", "A módosítás sikeresen megtörtént!");
    }

    public function deleteProfil(Request $request)
    {
        $user = auth()->user();
        $user->delete();
        return redirect("/");
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'actual' => 'required',
            'new' => 'required|confirmed',
        ]);

        if (!Hash::check($request->actual, auth()->user()->password)) {
            return back()->with("error", "A régi jelszó nem megfelelő!");
        }
        $user =  auth()->user();
        $user->update([
            'password' => Hash::make($request->new)
        ]);

        return back()->with("status", "A módosítás sikeresen megtörtént!");
    }

    public function sendEmailToTeacher(Request $request)
    {
        if (auth()->user()->usertype !== 'student') {
            return back()->with('error', 'Csak diákok küldhetnek emailt.');
        }

        $teacherEmail = $request->teacher_email;

        $det = [
            'teachername' => $request->teachername,
            'question' => $request->question,
            'description' => $request->description,
            'name' => $request->name,
        ];

        Log::info('Email sent to teacher: ' . $teacherEmail);
        Mail::to($teacherEmail)->send(new TeacherContactMail($det));

        return back()->with("status", "Az üzenet sikeresen elküldve!");
    }
}
