<?php




class LocalNewsController extends Controller 
{
    public function index(Request $request, Locator $locator)
    {
        $mark = $locator->fromIp($request->ip());

        $news = News::near($mark)->take(5)->get();

        return  NewsResource::collection($news);
    }
  

}

 /**
  * it looks like test might be reaching out 
  * over the network. that slows everything down 
  * and makes our test suite even more fragile.
  *
  * Would you like help fixing that?
  */