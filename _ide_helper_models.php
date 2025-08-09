<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $company_name
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Job> $jobs
 * @property-read int|null $jobs_count
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\EmployerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employer query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employer whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employer whereUserId($value)
 */
	class Employer extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $salary
 * @property string $location
 * @property string $category
 * @property string $experience
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $employer_id
 * @property-read \App\Models\Employer $employer
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobApplication> $jobApplications
 * @property-read int|null $job_applications_count
 * @method static \Database\Factories\JobFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Job filter(array $filters)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Job newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Job newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Job query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Job whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Job whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Job whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Job whereEmployerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Job whereExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Job whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Job whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Job whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Job whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Job whereUpdatedAt($value)
 */
	class Job extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property int $job_id
 * @property int $expected_salary
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $cv_path
 * @property-read \App\Models\Job $job
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\JobApplicationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereCvPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereExpectedSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobApplication whereUserId($value)
 */
	class JobApplication extends \Eloquent {}
}

namespace App\Models{
/**
 * @property-read \App\Models\Employer $employer
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobApplication> $jobApplications
 * @property-read int|null $job_applications_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

