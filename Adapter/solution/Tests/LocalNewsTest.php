<?php



 

// In our tests
class LocalNewsTest extends TestCase
{
    /** @test */
    public function it_returns_only_local_news()
    {
        $response = $this->getJson('/api/local-news');

        $response->assertStatus(Response::HTTP_OK);
    }
}



// This test can be reaching out over the network, so let's fix that

class LocalNewsTest extends TestCase
{
    /** @test */
    public function it_returns_only_local_news()
    {
        $this->app->instance(
            Locator::class,
            FakeLocator::returning(new Mark('Canada', 'Ontario', 'Guelph'));
        );

        $response = $this->getJson('/api/local-news');

        $response->assertStatus(Response::HTTP_OK);
    }
}

 