<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogsFormRequest;
use App\Models\Blog;
use App\Models\Blogcategory;
use Exception;

class BlogsController extends Controller
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
     * Display a listing of the blogs.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $blogs = Blog::with('blogcategory')->paginate(10);

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new blog.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $blogcategories = Blogcategory::pluck('name','id')->all();
        
        return view('blogs.create', compact('blogcategories'));
    }

    /**
     * Store a new blog in the storage.
     *
     * @param App\Http\Requests\BlogsFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(BlogsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            Blog::create($data);

            return redirect()->route('blogs.blog.index')
                ->with('success_message', 'Blog was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified blog.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $blog = Blog::with('blogcategory')->findOrFail($id);

        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified blog.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $blogcategories = Blogcategory::pluck('name','id')->all();

        return view('blogs.edit', compact('blog','blogcategories'));
    }

    /**
     * Update the specified blog in the storage.
     *
     * @param int $id
     * @param App\Http\Requests\BlogsFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, BlogsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            $blog = Blog::findOrFail($id);
            $blog->update($data);

            return redirect()->route('blogs.blog.index')
                ->with('success_message', 'Blog was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified blog from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $blog->delete();

            return redirect()->route('blogs.blog.index')
                ->with('success_message', 'Blog was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



}
