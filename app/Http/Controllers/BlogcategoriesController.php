<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogcategoriesFormRequest;
use App\Models\Blogcategory;
use Exception;

class BlogcategoriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	public function __construct()
	{
	    $this->middleware('auth');
	}
	
    /**
     * Display a listing of the blogcategories.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $blogcategories = Blogcategory::paginate(15);

        return view('blogcategories.index', compact('blogcategories'));
    }

    /**
     * Show the form for creating a new blogcategory.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('blogcategories.create');
    }

    /**
     * Store a new blogcategory in the storage.
     *
     * @param App\Http\Requests\BlogcategoriesFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(BlogcategoriesFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            Blogcategory::create($data);

            return redirect()->route('blogcategories.blogcategory.index')
                ->with('success_message', 'Blogcategory was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified blogcategory.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $blogcategory = Blogcategory::findOrFail($id);

        return view('blogcategories.show', compact('blogcategory'));
    }

    /**
     * Show the form for editing the specified blogcategory.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $blogcategory = Blogcategory::findOrFail($id);
        

        return view('blogcategories.edit', compact('blogcategory'));
    }

    /**
     * Update the specified blogcategory in the storage.
     *
     * @param int $id
     * @param App\Http\Requests\BlogcategoriesFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, BlogcategoriesFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            $blogcategory = Blogcategory::findOrFail($id);
            $blogcategory->update($data);

            return redirect()->route('blogcategories.blogcategory.index')
                ->with('success_message', 'Blogcategory was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified blogcategory from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $blogcategory = Blogcategory::findOrFail($id);
            $blogcategory->delete();

            return redirect()->route('blogcategories.blogcategory.index')
                ->with('success_message', 'Blogcategory was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



}
