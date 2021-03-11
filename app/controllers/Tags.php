<?php


class tags extends Controller
{
    public function __construct()
    {
        $this->tagsModel = $this->model('Tag');
        $this->postsModel = $this->model('Post');
    }

    public function index()
    {
        $tags = $this->tagsModel->getTags();
        $data = array('tags' => $tags);
        $this->view('tags/index', $data);
    }

    public function show($id)
    {
        $posts = $this->tagsModel->getTagPosts($id);
        $data = array(
            'posts' => $posts
        );
        $this->view('tags/show', $data);
    }
}