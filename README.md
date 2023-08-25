# PHPUnitlab - Upgrade PHPUnit testing to PHP 8.1 and PHPUnit 10

>Updating to new versions

## Configuration Commands

> To be run on the root folder of the site

```sh
$ phpunit --generate-configuration
```
```sh
$ vendor/bin/phpunit --migrate-configuration
```
### Running the tests on Tests

>Utilizing command line for running the tests

```sh
$reset && vendor/bin/phpunit tests --color --log-junit test_result.xml --testdox
```




