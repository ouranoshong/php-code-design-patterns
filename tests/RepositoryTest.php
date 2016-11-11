<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/11/16
 * Time: 9:45 AM
 */

namespace O\Tests;


use O\DesignPatterns\More\Repository\MemoryStorage;
use O\DesignPatterns\More\Repository\Post;
use O\DesignPatterns\More\Repository\PostRepository;
use PHPUnit\Framework\TestCase;

class RepositoryTest extends TestCase
{
    public function testCanPersisAndFindPost()
    {
        $repository = new PostRepository(new MemoryStorage());

        $post = new Post(null, 'Repository Pattern', 'Design Patterns PHP');

        $repository->save($post);

        $this->assertEquals(1, $post->getId());
        $this->assertEquals($post->getId(), $repository->findById(1)->getId());
    }

    public function testCanDealWithPost()
    {
        $post = new Post(1, 'Repository Pattern', 'Design Patterns PHP');

        $this->assertSame(1, $post->getId());
        $this->assertSame('Repository Pattern', $post->getTitle());
        $this->assertSame('Design Patterns PHP', $post->getText());

    }

    public function testCanDealWithMemoryStorage()
    {
        $Memory = new MemoryStorage();
        $id = $Memory->persist(['text'=> 'test']);
        $data = $Memory->retrieve($id);
        $this->assertSame(['text' => 'test', 'id'=> $id], $data);

        $Memory->delete($id);
        $this->assertAttributeEmpty('data', $Memory);
    }

    /**
     * @expectedException \OutOfRangeException
     */
    public function testThrowsExceptionWhenRetrieveUnknownId()
    {
        (new MemoryStorage())->retrieve(1);
    }

    /**
     * @expectedException \OutOfRangeException
     */
    public function testThrowsExceptionWhenDeleteUnknownId()
    {
        (new MemoryStorage())->delete(1);
    }

    /**
     * @expectedException \OutOfRangeException
     */
    public function testThrowsExceptionWhenFindByUnknownId()
    {
        (new PostRepository(new MemoryTest))->findById(1);
    }
}

class MemoryTest extends MemoryStorage {

    public function retrieve(int $id): array
    {
        return [];
    }
}
