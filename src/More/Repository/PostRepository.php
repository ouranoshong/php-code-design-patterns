<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/11/16
 * Time: 9:34 AM
 */

namespace O\DesignPatterns\More\Repository;


class PostRepository
{
    private $persistence;

    public function __construct(MemoryStorage $memoryStorage)
    {
        $this->persistence = $memoryStorage;
    }

    public function findById(int $id): Post
    {
        return Post::fromState($this->persistence->retrieve($id));
    }

    public function save(Post $post)
    {
        $id = $this->persistence->persist([
            'text' => $post->getText(),
            'title' => $post->getTitle(),
        ]);

        $post->setId($id);
    }
}
