<?php

namespace App\Http\Controllers;

use App\Models\BlogCMS;
use Illuminate\Http\Request;

class BlogCmsController extends Controller
{
    public function edit($id)
    {
        $blog = BlogCMS::find(1);

        $blogContent = BlogCMS::find(1)->first();

        return view('Backend.Admin.CMS.Blog.view', compact('blog','blogContent'));
        
    }

    public function update(Request $request, $id)
    {
        //update
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
        ]);
        $blog = BlogCMS::find($id);
        $blog->title = $request->title;
        $blog->subtitle = $request->subtitle;
        $blog->save();
        return redirect()->back()->with("msg", "Updated successfully!")
        ->with("success", true);

    }
}
