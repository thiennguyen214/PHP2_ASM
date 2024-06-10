<?php

namespace Hey\Pro\Controllers\Admin;

use Hey\Pro\Commons\Controller;
use Hey\Pro\Commons\Helper;
use Hey\Pro\Models\Post;
use Rakit\Validation\Validator;

class PostController extends Controller
{
    private Post $post;

    public function __construct()
    {
        $this->post = new Post();
    }

    public function index()
    {
        $posts = $this->post->all();
        $this->renderViewAdmin('posts.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $this->renderViewAdmin('posts.create');
    }
    public function store()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'name' => 'required|max:50',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/posts/create'));
            exit;
        } else {

            $data = [
                'name' => $_POST['name'],
            ];
            $this->post->insert($data);
            header('Location: ' . url('admin/posts'));
            exit();
        }
    }
    public function edit($id)
    {
        $post = $this->post->findByID($id);

        $this->renderViewAdmin('posts.edit', [
            'post' => $post
        ]);
    }

    public function update($id)
    {
        $post = $this->post->findByID($id);

        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'name' => 'required|max:50',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/posts/{$post['id']}/edit"));
            exit;
        } else {
            $data = [
                'name' => $_POST['name'],
            ];
            $this->post->update($id, $data);
            header('Location: ' . url('admin/posts'));
            exit;
        }
    }

    public function delete($id)
    {
        $this->post->delete($id);

        header('Location: ' . url('admin/posts'));
        exit();
    }
}