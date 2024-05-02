<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Student;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Ma'lumotlar ro'yxatini ko'rsatish.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Yangi ma'lumot qo'shish uchun shakl tuzish.
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Yangi ma'lumotni saqlash.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        Contact::create($requestData);
        return redirect()->route('admin.contact.index');
    }

    /**
     * Belgilangan ma'lumotni ko'rsatish.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Belgilangan ma'lumotni tahrirlash uchun shakl tuzish.
     */
    public function edit(string $id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact.edit', compact('contact'));
    }

    /**
     * Belgilangan ma'lumotni saqlash.
     */
    public function update(Request $request, string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());
        return redirect()->route('admin.contact.index');
    }

    /**
     * Belgilangan ma'lumotni o'chirish.
     */
    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return back()->with('message', "Conatct muvaffaqiyatli o'chirildi");
    }
}
