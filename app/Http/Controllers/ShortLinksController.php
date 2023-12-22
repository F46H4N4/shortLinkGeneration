<?php

namespace App\Http\Controllers;
use App\Models\ShortLink;
use Illuminate\Http\Request;

class ShortLinksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shortLiink.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'urlAddress' => 'required|url',
            'shortUrl' => 'min:3|max:15|nullable|unique:shorted_links,short_url,',
            'g-recaptcha-response' => 'required|captcha',
        ]);
       
        if(!$request->shortUrl)
            $short_url = $this->generateShortUrl(5);    
        else
            $short_url = $request->shorturl;
            $url = ShortLink::create([
            'shorturl' => $short_url,
            'urlAddress' => $request->urlAddress
        ]);
        $short_url = url('') .'/'. $url->short_url;
        return redirect()->route('/')->with('success', $short_url);
    }
    
    /*


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
