##@ Help

## Source - https://www.thapaliya.com/en/writings/well-documented-makefiles/
help:  ## Display this help
	@awk 'BEGIN {FS = ":.*##"; printf "\nUsage:\n  make \033[36m<target>\033[0m\n"} /^[a-zA-Z_-]+:.*?##/ { printf "  \033[36m%-20s\033[0m %s\n", $$1, $$2 } /^##@/ { printf "\n\033[1m%s\033[0m\n", substr($$0, 5) } ' $(MAKEFILE_LIST)

##@ Docker
docker-build: ## Build the docker containers
	@echo "Building and Starting Docker containers detached..."
	@docker compose --env-file .env up --build -d

docker-up: ## Start the docker containers, without building them first.
	@echo "Starting main Docker containers detached..."
	@docker compose --env-file .env up -d

docker-up-with-logs: ## Start the docker containers, without building them first.
	@echo "Starting main Docker containers with log..."
	@docker compose --env-file .env up

docker-down: ## Close down docker containers.
	@echo "Closing down Docker containers..."
	@docker compose down

docker-prune: ## Close down docker containers and remove volumes.
	@echo "Closing down Docker containers..."
	@docker compose down -v

docker-php: ## Opens an interactive shell into the PHP Docker container
	@docker compose exec php bash

##@ Composer

composer-install: ## Installs vendor files via composer
	@docker compose exec php composer install

##@ Database

migrate: ## Run Laravel migrations
	@docker compose exec php php artisan migrate

migrate-fresh: ## Drop all tables and re-run all migrations
	@docker compose exec php php artisan migrate:fresh

seed: ## Seed the database with seeders
	@docker compose exec php php artisan db:seed

migrate-seed: ## Run migrations and seed the database
	@docker compose exec php php artisan migrate --seed

tinker: ## Open Laravel Tinker REPL
	@docker compose exec php php artisan tinker

db-reset: ## Reset DB: fresh migration and seed
	@docker compose exec php php artisan migrate:fresh --seed

refresh-db: ## Reset and reseed the DB (shortcut)
	@make migrate-fresh
	@make seed

##@ Test

test: ## Run tests
	@docker compose exec php php artisan test

##@ Project

setup: ## setup the project
	@make update-cert
	@make docker-build
	@make composer-install
	@make migrate-fresh
	@make seed

update-cert: ## Generate a local SSL certificate
	mkdir -p bootstrap/nginx
	mkcert -key-file bootstrap/nginx/key.pem -cert-file bootstrap/nginx/cert.pem yardageiq.local
