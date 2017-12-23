<?php

namespace Tests;

use App\Models\Episode;
use App\Models\Series;
use Auth;
use App\Models\User;
use Tests\Traits\CreatesApplication;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * @param array $attributes
     * @return User
     */
    public function register(array $attributes = [])
    {
        /** @var User $user */
        $user = $this->fakeUser($attributes);

        // Login
        Auth::login($user);

        return $user;
    }

    /**
     * @param array $attributes
     * @return User
     */
    public function fakeUser(array $attributes = [])
    {
        return factory(User::class)->create($attributes);
    }

    /**
     * @param array $attributes
     * @return Series
     */
    public function fakeSeries(array $attributes = [])
    {
        return factory(Series::class)->create($attributes);
    }

    /**
     * @param array $attributes
     * @return Episode
     */
    public function fakeEpisode(array $attributes = [])
    {
        return factory(Episode::class)->create($attributes);
    }
}
