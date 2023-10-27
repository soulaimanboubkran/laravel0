<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NotesController extends Controller
{
   
    
  
    public function statistiques()
    {
        // Dummy data for the exercise
        $notes = [
            "Mohamed Alaoui" => "16",
            "Ahmed Bennani" => "14",
            "Rachida Kich" => "6",
            "Aicha Saaoudi" => "19",
            "Noura Alaoui" => "7",
            "Samar Rhaoussi" => "13",
            "Aicha Siraj" => "10",
            "Samiha Hakim" => "9",
            "Mohamed Rami" => "17",
            "Sami Tazi" => "7",
            "Noura Tazi" => "14",
        ];
     //send to statistiques a 'note' that takes $notes values !!!!
        return view('statistiques', ['notes' => $notes]);
    } 
    public function getColorClass($note)
    {
        if ($note > 10) {
            return 'green';
        } elseif ($note >= 8 && $note <= 10) {
            return 'orange';
        } else {
            return 'red';
        }
    }
    
    
}

