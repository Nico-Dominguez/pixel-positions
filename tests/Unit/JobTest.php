<?php
use Database\Factories\EmployerFactory;
use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    // arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // act
    expect($job->employer->is($employer))->toBeTrue();

    // assert
});

it('can have tags', function () {
    // AAA
    $job = Job::factory()->create();

    $job->tag('frontend');
    expect($job->tags)->toHaveCount(1);
});
