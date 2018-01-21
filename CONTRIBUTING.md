# Contributing to phUML

## Workflow

* Fork the project.
* Make your bug fix or feature addition.
* Add tests for it. This is important so we don't break it in a future version unintentionally.
* Send a pull request. Bonus points for topic branches.

Pull requests for bug fixes must be based on the current stable branch whereas pull requests for new features must be based on the `master` branch.

## Coding Guidelines

This project follows the coding standards proposed in [PSR-2][1]

You can use [PHP CS fixer][2] to (re)format your sourcecode for compliance with this project's coding guidelines:

```bash
$ composer global require friendsofphp/php-cs-fixer

$ php-cs-fixer fix src
```

## Using phUML from a Git checkout

The following commands can be used to perform the initial checkout of phUML:

```bash
$ git clone git://github.com/MontealegreLuis/phuml.git

$ cd phuml
```

Retrieve phUML's dependencies using [Composer](https://getcomposer.org/):

```bash
$ composer install
```

## Running phUML's test suite

There's a group of tests that verify that the generated class diagrams didn't change.
Since there's a slight difference in the output between operating systems.
It is recommended to run the whole test suite using the provided [Docker][4] container.
The container mimics the environment in [Travis][5].
Please make sure the tests pass in the container so you can be sure they will pass in Travis too.

You can run the tests as follows:

```
$ make test
```

[Make][6] will run PHPUnit with the same options it runs in Travis inside the Docker container.

You can alternatively run the test suite without this group of tests without the container

```
$ vendor/bin/phpunit --coverage-text --coverage-clover=coverage.clover --exclude-group=snapshot
```

You will need [XDebug][7] installed to be able to generate the code coverage report.

## Reporting issues

Before opening a new ticket, please search through the [existing issues][3].

[1]: http://www.php-fig.org/psr/psr-2/
[2]: https://github.com/FriendsOfPHP/PHP-CS-Fixer
[3]: https://github.com/MontealegreLuis/phuml/issues
[4]: https://www.docker.com/
[5]: https://travis-ci.org/
[6]: https://en.wikipedia.org/wiki/Make_(software)
[7]: https://xdebug.org/