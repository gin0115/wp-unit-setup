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

Once you are happy its all done, please put in a PR to merge this into `main` this will then trigger codecov to log the coverage and report it back to the PR.

### Current Coverage & Test Results
[![codecov](https://codecov.io/gh/gin0115/wp-unit-setup/branch/main/graph/badge.svg?token=GVTB7X33RY)](https://codecov.io/gh/gin0115/wp-unit-setup)

[![WordPress 5.9 Test Suite [PHP7.2-8.1]](https://github.com/gin0115/wp-unit-setup/actions/workflows/WP_5_9.yaml/badge.svg)](https://github.com/gin0115/wp-unit-setup/actions/workflows/WP_5_9.yaml)

[![WordPress 6.0 Test Suite [PHP7.2-8.1]](https://github.com/gin0115/wp-unit-setup/actions/workflows/WP_6_0.yaml/badge.svg)](https://github.com/gin0115/wp-unit-setup/actions/workflows/WP_6_0.yaml)

[![WordPress 6.1 Test Suite [PHP7.2-8.1]](https://github.com/gin0115/wp-unit-setup/actions/workflows/WP_6_1.yaml/badge.svg)](https://github.com/gin0115/wp-unit-setup/actions/workflows/WP_6_1.yaml)
