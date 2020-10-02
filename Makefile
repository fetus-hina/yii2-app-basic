.PHONY: all
all: vendor

.PHONY:
test: vendor
	./vendor/bin/codecept run

vendor: composer.lock composer.phar
	./composer.phar install --prefer-dist
	@touch $@

composer.phar:
	curl -fsSL 'https://getcomposer.org/installer' | php
	@chmod +x composer.phar
