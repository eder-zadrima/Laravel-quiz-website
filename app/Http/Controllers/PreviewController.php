<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Exam;
use App\Models\ExamGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('preview');
    }

    public function preview_slide(string $id) {
        $quizzes = Quiz::where('id', $id)->get();
        $user = Auth::user();

        return view('preview', ['quizzes' => $quizzes, 'user' => $user]);
    }


    public function preview_group(string $id) {
        $user = Auth::user();
        $exam_groups = ExamGroup::where('id', $id)->get();

        $quizzes = [];
        foreach ($exam_groups as $exam_group) {
            foreach ($exam_group->quizes as $quiz) {
                array_push($quizzes, $quiz);
            }
        }

        return view('preview', ['quizzes' => $quizzes, 'user' => $user]);
    }

    public function preview_exam(string $id) {
        $user = Auth::user();
        $exams = Exam::where('id', $id)->get();

        $exam_groups = $exams[0]->exam_groups;
        $quizzes = [];
        foreach ($exam_groups as $exam_group) {
            foreach ($exam_group->quizes as $quiz) {
                array_push($quizzes, $quiz);
            }
        }

        return view('preview', ['quizzes' => $quizzes, 'user' => $user]);
    }
}
