<?php
/**
 * HomeController
 */

class HomeController extends BaseController
{
    public function __construct()
    {
    }

    public function home()
    {
        echo '<h1>控制器成功</h1>';
        $articles = Article::first();
        echo '<h1> title='.$articles->title.'</h1>';
        echo '<h1> content='.$articles->content.'</h1>';

        $this->view = View::make('home')->with('article',Article::first())
                                        ->withTitle('MFFC :-D')
                                        ->withFuckMe('OK!');
        $this->mail = Mail::to(['yankai0219@126.com', 'yankai-c@360.cn'])
                          ->from('MotherFucker <yankai0219@126.com>')
                          ->title('Fuck Me!')
                          ->content('<h1>Hello~~</h1>');
    }
}
