<?php

class LocalNewsController extends Controller 
{
    public function index(Request $request)
    {
        $locator = new IpLocation;
        $location = $locator->locate($request->ip());

        $news = News::near($location)->take(5)->get();

        return  NewsResource::collection($news);
    }




}

/**
 * it looks like you may be letting the decisions 
 * of third party developers leak their way into 
 * our domine logic literally gluing ourselves to 
 * their implementation
 * 
 * 
 * Would you like help fixing that?
 */


class LocalNewsController extends Controller
{
    public function index(Request $request)
    {
        $locator = new IpLocation;
        $location = $locator->locate($request->ip());

        $mark = new Mark(
            $location['country_name'],
            $location['region_name'],
            $location['city'],
        );

        $news = News::near($mark)->take(5)->get();

        return  NewsResource::collection($news);
    }
}


/**
 * i think this is a good opportunity to use the adapter pattern.
 * 
 * it will allow us to talk in the terms we choose 
 * and further isolate our domain logic from 
 * outside influence.
 * 
 * Would you like help doing that?
 */
