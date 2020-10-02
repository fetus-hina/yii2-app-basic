.PHONY: all
all: vendor

vendor: composer.lock composer.phar
	./composer.phar install --prefer-dist
	@touch $@

composer.phar:
	curl -fsSL 'https://getcomposer.org/installer' | php
	@chmod +x composer.phar
