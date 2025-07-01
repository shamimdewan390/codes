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
