PATH_TO_BUILD := local_git/wco_job_offers/Build/

.PHONY: help
help: ## Displays this list of targets with descriptions
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: test ## Run all tests
test: fix-code-style code-style

.PHONY: fix ## Run all tests
fix: fix-code-style

.PHONY: code-style
code-style:
	.Build/bin/php-cs-fixer fix -v --dry-run --using-cache no --diff --config=Tests/.php-cs-fixer.php

.PHONY: fix-code-style
fix-code-style: ## Fix PHP coding style issues
	.Build/bin/php-cs-fixer fix --config=Tests/.php-cs-fixer.php
