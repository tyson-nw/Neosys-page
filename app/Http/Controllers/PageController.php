<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

use App\Models\Page;

class PageController extends Controller
{
    public function create(){
        return view('page.create');
    }

    public function store(){
        $request = request();
        //dd($request);
        $request->merge(['slug' => Str::slug($request->title)]);
        $valid = request()->validate([
            'title' => ['required','max:255','min:3','unique:pages,title'],
            'slug' => [ Rule::notIn(['create'], 'invalid title')],
            'license' => [],
            'content' => ['required','min:3'],
        ]);

        Page::create($valid);

        return redirect('/pages')->with('page_created', ['title'=>$valid['title'], 'slug'=>$valid['slug']]);
    }

    public function destroy(Page $page){
        session()->flash('page_deleted', ['title'=>$page['title'], 'slug'=>$page['slug']]);
        $page->delete();
        return redirect('/pages');
    }
}
