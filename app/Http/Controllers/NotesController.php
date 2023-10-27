<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    private $notes;

    public function __construct()
    {
        // Initialize the $notes array in the constructor
        $this->notes = [
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
    }

    public function statistiques()
    {
        // You can now access $this->notes in this method
        return view('statistiques', ['notes' => $this->notes]);
    }

    public function searchAndShow(Request $request)
    {
        // Get the search term from the request
        $searchTerm = $request->input('search');

        // Perform the search logic using $this->notes
        $filteredNotes = [];

        foreach ($this->notes as $nom => $note) {
            if (stristr($nom, $searchTerm) !== false) {
                $filteredNotes[$nom] = $note;
            }
        }

        return view('statistiques', ['notes' => $filteredNotes]);
    }
}
