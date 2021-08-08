<?php

class HomeController extends Controller {

    function IndexGET() {
        $content = file_get_contents(_Blog . 'home.toml');
        $this->Render('Index', [
            'Title' => _AppName . ' >> Home',
            'Toml' => Toml::parse($content)
        ]);
        exit;
    }

    function TextGET() {
        header("Content-Type: text/plain");
        $this->Render('Text', null, true);
        exit;
    }

    function AudioGET() {
        $this->RedirectResponse(_Blog . 'Intro.mp3');
        exit;
    }

    function AboutGET() {
        $content = file_get_contents(_Blog . 'about.toml');
        $this->Render('About', [
            'Title' => _AppName . ' >> About',
            'Toml' => Toml::parse($content)
        ]);
        exit;
    }

    function MentionsGET() {
        $this->Render('Mentions', [
            'Title' => _AppName . ' >> در رسانه‌ها',
        ]);
        exit;
    }

    function EducationGET() {
        $this->Render('Education', [
            'Title' => _AppName . ' >> تحصیلات',
        ]);
        exit;
    }
}