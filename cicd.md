# step -1

> create a file 
```
your-project/
├── .github/
│   └── workflows/
│       └── main.yml (or any-name.yml)

```
> Paste below code in main.yml file

## this is for EC2
```
name: Deploy to EC2

on:
  push:
    branches:
      - dev  # or your main branch name

jobs:
  deploy:
    runs-on: ubuntu-latest

    steps:
      - name: Checkout the code
        uses: actions/checkout@v4

      - name: Deploy via SSH
        uses: appleboy/ssh-action@v1.0.3
        with:
          host: ec2-13-60-13-3.eu-north-1.compute.amazonaws.com
          username: ubuntu
          key: ${{ secrets.SSH_PRIVATE_KEY }}
          port: 22
          script: |
            cd /var/www/cicd
            chmod +x main_deplyer.sh
            ./main_deplyer.sh

```
## Your need to change or setup
 1. host
 2. username
 3. key
 4. project directory
 5. 
## create main_deployer.sh (or any-name.sh)

> Paste below code in main.yml file

```

set -e

echo "Deploying application ..."

# Enter maintenance mode
#(php artisan down)
    # Update codebase
    git pull origin dev
    # Exit maintenance mode
# php artisan up
# php artisan migrate --force
# php artisan passport:client --personal --name="ib" --no-interaction
# php artisan passport:keys --force
chmod -R 777 storage
# npm run build

# php artisan optimize:clear
# php artisan cache:clear
# echo "Application deployed!"

```

## run php command you want to run

























