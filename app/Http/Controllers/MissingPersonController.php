<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MissingPerson;

class MissingPersonController extends Controller
{
    public function index()
    {
        $missingPersons = MissingPerson::all();

        return view('missing-persons.list', ['missingPersons' => $missingPersons]);
    }


    public function create()
    {
        return view('missing-persons.create');
    }

    public function store(Request $request)
    {
        // formdan gelen verileri doğrulayalım
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'address' => 'required|string',
            'photo' => 'required|image|max:2048',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);
        
    
        // formdan gelen verileri kullanarak yeni bir MissingPerson modeli oluşturalım
        $missingPerson = new MissingPerson();
        $missingPerson->name = $validatedData['name'];
        $missingPerson->surname = $validatedData['surname'];
        $missingPerson->address = $validatedData['address'];
        $missingPerson->phone = $validatedData['phone'];
        $missingPerson->email = $validatedData['email'];
        
        // fotoğraf yüklemek için storage/app/missing-persons dizinini kullanalım
        $photoPath = $request->file('photo')->store('missing-persons', 'public');
        $missingPerson->photo = $photoPath;
        
        // modelimizi veritabanına kaydedelim
        $missingPerson->save();
    
        // başarılı bir şekilde kaydedildiğini bildiren bir mesaj gösterelim ve anasayfaya yönlendirelim
        return redirect()->route('missing-persons.index')->with('success', 'Missing person report created successfully!');
    }
    
    public function show($id)
    {
        $missingPerson = MissingPerson::findOrFail($id);

        return response()->json($missingPerson);
    }



}
