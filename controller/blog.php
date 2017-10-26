<?php
class blogController  extends Controller
{
    public function create()
    {
        $this->render('blog.create');
    }

    public function store()
    {
        $blog = new Model('blogs');
        dd($_POST);
        $blog->titre = $_POST['titre'];
        $blog->article = $_POST['article'];
        $blog->auteur = $_POST['auteur'];
        $blog->save();
        // header ('Location: /blog/index');
    }

    public function index ()
    {
        $blog = new Model('blogs');
        $GLOBALS['blogs'] = $blog->all();
        $this->render('blog.index');
    }

    public function edit ()
    {
        $blog = new Model('blogs');
        $blog->find($_GET['id']);
        $GLOBALS['blog'] = $blog;

        $this->render('blog.edit');
    }

    public function update ()
    {
        $blog = new Model('blogs');
        $blog->find($_GET['id']);
        $blog->titre = $_POST['titre'];
        $blog->article = $_POST['article'];
        $blog->auteur = $_POST['auteur'];
        $blog->save();
        header ('Location: /blog/index');

    }

    public function delete ()
    {
        $blog = new Model('blogs');
        $blog->delete($_GET['id']);
        header ('Location: /blog/index');

    }


    // public function
    // {
    // }

}
