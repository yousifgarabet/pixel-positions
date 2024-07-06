<?php

use App\Models\Employer;
use App\Models\Job;

test('it belogs to an employer', function () {
    // we need to follow AAA (Arrange)
    //Arrage
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id //here we overrided the employer_id
    ]);

    // Act and Assert
    expect($job->employer->is($employer))->toBeTrue();

});

it('can have tags', function () {

    //Arrage

    $job = Job::factory()->create();

    // Act
    $job->tag('Frontend');

    //Assert
    expect($job->tags)->toHaveCount(1);
});
