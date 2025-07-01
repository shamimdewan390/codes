# Step -1

> Create a file

```
your-project/
├── .github/
│   └── workflows/
│       └── main.yml (or any-name.yml)

```

> Paste below code in main.yml file

## This is for EC2

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
    
## Create main_deployer.sh (or any-name.sh)

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

## Run php command you want to run

# Step - 2 

## If not generate ssh key in you local mechine then: 

> Generate SSH Key for GitHub Actions (on your local machine)

Run this in your terminal:

```
ssh-keygen -t ed25519 -C "shamimdewan343@gmail.com"
```

> It will generate:
  1. id_ed25519 (private)
     like this:
  
     -----BEGIN OPENSSH PRIVATE KEY-----
b3BlbnNzaCXktdjEAAAAABG5vbmUAAAAEbm9uZQAAAAAABAAAAMwAAAAtzc2gtZW
QyNTUxOQAAACB80g51vNUSCh0/KFS1cYdNyfO6uEQXmffgl9414IHJCwAAAKDzq50A86ud
AAAAAAtzc2gtZxOQAAAXmffgl9414IHJCw
AAAEDnJVibfVquqn043rAMzLpmAVw4KfpF4CIhnzSDnW81RIKHT8oVLVxh03J
87q4RBeZ9+CX3jXggckLAAAAGHNoYW1pbWRld2FuMzGdtYWlsLmNvbQECAwQF
-----END OPENSSH PRIVATE KEY-----

  
  3. id_ed25519.pub (public)
     like this:
     ```
     ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIHzSDnW81RIKHT8oVLVxh03J87q4RBeZ9+CX3jXggckL shamimdewan343@gmail.com
     ```


# Step - 3
## Add Public Key to EC2 (your server)

Run this in your terminal:

```
ssh-keygen -t ed25519 -C "shamimdewan343@gmail.com"
```

> On the server, run:

```
mkdir -p ~/.ssh
nano ~/.ssh/authorized_keys
```
> Paste contents of your local mechine's id_ed25519.pub into the server authorized_keys file and save (CTRL+O, Enter, then CTRL+X).
> NOTE: If any key alrady existe then paste new line like this:

```
ssh-rsa AAAAB3... yourname@example.com
ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAyz7oBfpbV+/Tr8iQ8zQ5u shamimdewan343@gmail.com
```

# Step - 4

## Add Private Key to GitHub Secrets

  1. Go to your GitHub repo → Settings → Secrets and variables → Actions.
  2. Click New repository secret.
  3. Name it ```SSH_PRIVATE_KEY```.
  4. Paste the contents of id_ed25519 (private key, not the .pub) as value.



# Step - 5

## Add Server public Key to GitHub 

 1.  Go to your GitHub  → Settings → SSH AND GPG Keys → New SSH Key.
 2.  paste your server id_ed25519.pub id and Title



















