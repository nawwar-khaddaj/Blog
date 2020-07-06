<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Models\Tag;
use App\Repositories\TagRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TagController extends Controller
{
    private $tagRepository;

    public function __construct(TagRepository $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $tags = $this->tagRepository->getTags();
        return view('admin.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.tag.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TagRequest $request
     * @return RedirectResponse
     */
    public function store(TagRequest $request)
    {
        $this->tagRepository->add($request);

        $request->session()->flash('success', 'tag created successfully');

        if ($request->has('add-new'))
            return redirect()->route('admin.tags.create');

        return redirect()->route('admin.tags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Tag $tag
     * @return Tag
     */
    public function show(Tag $tag)
    {
        return $tag;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tag $tag
     * @return Application|Factory|View
     */
    public function edit(Tag $tag)
    {
        return view('admin.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TagRequest $request
     * @param Tag $tag
     * @return RedirectResponse
     */
    public function update(TagRequest $request, Tag $tag)
    {
        $this->tagRepository->update($request, $tag);

        $request->session()->flash('success', 'tag updated successfully');

        if ($request->has('add-new'))
            return redirect()->route('admin.tags.create');

        return redirect()->route('admin.tags.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Tag $tag
     * @return RedirectResponse
     */
    public function destroy(Request $request, Tag $tag)
    {
        $this->tagRepository->delete($tag);
        $request->session()->flash('success', 'tag deleted successfully');
        return redirect()->route('admin.tags.index');
    }
}
