# phptesttask
Installation instructions:
1) Make a pull request
2) Run docker-compose up in terminal (can add -d to run in daemon mode)
3) Run database migrations (symfony console doctrine:migrations:migrate)
4) Run fixtures to create an Admin user entity (symphony console doctrine:fixtures:load)
5) Start dev server (symfony server:start (can add -d to run in daemon mode))

SQL Code to get database structure is absent, due to database being created with fixtures and migrations.
