<?php

class BlogController extends Controller
{

    function IndexGET()
    {

        $content = file_get_contents(_Blog . 'master.toml');

        $this->Render('Index', [
            'Title' => _AppName . ' >> Blog',
            'Toml' => Toml::parse($content)
        ]);

        exit;
    }

    function NavGET($inp = '')
    {
        if ($inp == '') throw new NotFoundException();
        header("Content-Type: text/plain");
        $content = file_get_contents(_Blog . $inp);
        echo json_encode(Toml::parse($content)->nav);
        exit;
    }


    function PostGET($inp = '', ...$args)
    {
        $file = _Blog . $inp . '/' . implode('/',$args);

        if ($file == '') throw new NotFoundException();

        if (
            pathinfo($file, PATHINFO_EXTENSION) != 'html'
            and pathinfo($file, PATHINFO_EXTENSION) != 'htm'
        ) {
            $this->RedirectResponse($file);
        } else {
            $content = file_get_contents($file);
            $this->Render('Post', [
                'Title' => _AppName . ' >> Blog',
                'Content' => $content
            ]);
        }
        exit;
    }

    function RSSGET()
    {
        header("Content-Type: text/plain");
        // TODO: Add blog posts here
        $this->Render('Text', null, true);
        exit;
    }
}
