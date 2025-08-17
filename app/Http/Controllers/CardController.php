<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    // Mostrar todos os cards
    public function index()
    {
        $cards = Card::all();
        return view('dev.cards.index', compact('cards'));
    }

    // Mostrar formulário para criar
    public function create()
    {
        return view('dev.cards.create');
    }

    // Salvar novo card
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:50',
            'descricao' => 'required|max:150',
            'img' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'link' => 'nullable|max:255',
        ]);

        // Salvar a imagem na pasta public/images
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
        }

        Card::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'img' => $imageName ?? null,
            'link' => $request->link ?? '#',
            'curtidas' => 0,
            'views' => 0,
        ]);

        return redirect()->route('cards.index')->with('success', 'Card criado com sucesso!');
    }



    // Mostrar formulário para editar
    public function edit(Card $card)
    {
        return view('dev.cards.edit', compact('card'));
    }

    // Atualizar card
    public function update(Request $request, Card $card)
    {
        $request->validate([
            'titulo' => 'required|max:50',
            'descricao' => 'required|max:150',
            'img' => 'required|max:50',
            'curtidas' => 'required|integer',
            'views' => 'required|integer',
            'link' => 'required|max:255',
        ]);

        $card->update($request->all());
        return redirect()->route('cards.index');
    }

    // Deletar card
    public function destroy(Card $card)
    {
        $card->delete();
        return redirect()->route('cards.index');
    }
}
