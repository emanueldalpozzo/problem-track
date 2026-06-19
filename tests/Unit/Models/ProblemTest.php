<?php

namespace Tests\Unit\Models;

use App\Models\Problem;
use Tests\TestCase;

class ProblemTest extends TestCase
{
    public function test_can_set_tytle(): void
    {
        $problem = new Problem(title: 'Problem 1');

        $this->assertEquals('Problem 1', $problem->getTitle());
    }

    public function test_has_to_create_new_problem(): void
    {
        $problem = new Problem(title: 'Problem 1');
        $inicialCount = count(Problem::all());

        $this->assertTrue($problem->save());
        $this->assertCount($inicialCount + 1, Problem::all());
    }
}
