# PinkCrab WP Test Suite 

This is an example of the PinkCrab WP Test Suite, but done as a learning exercise.

## Setup

1. Clone the repo
2. Create a local database that can be used only for testing. DO NOT use a table that is used for other projects, as it is wiped on every test run.
3. Copy the `/tests/.env_sample` to `/tests/.env` and update the database details.
4. Install the dependencies with `composer install`
5. You can then run the follow commands to run parts of the test suites
   * `composer test` - Runs all UNIT tests
   * `composer coverage` - Runs all  UNIT tests and generates a coverage report (HTML)
   * `composer sniff` - Runs all PHPCS tests
   * `composer analyse` - Runs all PHPStan tests
   * **`composer all`** - Runs all tests (doesnt generate the HTML coverage report)

## The challenge

Please fork this repo and work through all the tests to aim for 100% coverage of tests, ensure PHPStan is happy and all code is done to pass PHPCS.
There is github actions that will run all the tests on each commit, so you can see the results of your work. These should all come back as passes, there are 15 different combinations of WP versions and PHP versions that are tested.



