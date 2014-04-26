BOWER=$(shell which bower)
PHP=$(shell which php)
TESTRUNNER=vendor/bin/testrunner
HOST=localhost
PORT=9000

setup:
	$(PHP) -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));"

install: setup
	$(PHP) composer.phar install
	$(BOWER) install
update:
	$(PHP) composer.phar update

server:
	$(PHP) -S $(HOST):$(PORT) -t ./public

test:
	$(PHP) ./vendor/bin/phpunit --bootstrap ./vendor/autoload.php -c ./phpunit.xml ./tests

testrunner:
	$(TESTRUNNER) "phpunit"  --preload-script ./vendor/autoload.php  --phpunit-config ./phpunit.xml --autotest ./tests ./src

