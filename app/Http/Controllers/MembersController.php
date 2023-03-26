<?php

namespace App\Http\Controllers;

use App\Models\Membern;
use FFI\Exception;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        $members = Membern::get();
        return response($members, 200);
    }


    public function store(Request $request)
    {
        try {

            $request->validate([
                'name' => " max:100 | required ",
                'email' => " max:200 | email  ",
                'address' => " max:200 ",
                'phone' => " max:200 ",
                'birthday' => " max:200 ",
            ]);

            $member = new Membern([
                "name" => $request->name,
                "email" => $request->email,
                "address" => $request->address,
                "phone" => $request->phone,
                "birthday" => $request->birthday
            ]);
            $member->save();


            return response('membro salvo com sucesso', 200);
        } catch (Exception $e) {
            return response($e->getMessage(), 404);
        }
    }
    public function show(string $id)
    {
        try {
            $memberById = Membern::findOrFail($id);
            return response($memberById, 200);
        } catch (Exception $e) {
            return response($e->getMessage(), 404);
        }
    }

    public function update(Request $request, string $id)
    {
        try {

            $request->validate([
                'name' => " max:100  ",
                'email' => " max:200 | email  ",
                'address' => " max:200   ",
                'phone' => " max:200",
                'birthday' => " max:200  ",
            ]);

            $memberById = Membern::findOrFail($id)->update([
                "name" => $request->name,
                "email" => $request->email,
                "address" => $request->address,
                "phone" => $request->phone,
                "birthday" => $request->birthday
            ]);


            return response('atualizado com sucesso', 200);
        } catch (Exception $e) {
            return response($e->getMessage(), 404);
        }
    }
    public function destroy(string $id)
    {
        try {
            Membern::findOrFail($id)->delete();
            return response('deletado com sucesso', 200);
        } catch (Exception $e) {
            return response($e->getMessage(), 404);
        }
    }
}
