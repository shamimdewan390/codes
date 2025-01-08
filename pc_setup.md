# ubuntu pc setup 

## step - 1
terminal setup

```
sudo apt install zsh
```
```
sh -c "$(curl -fsSL https://raw.githubusercontent.com/ohmyzsh/ohmyzsh/master/tools/install.sh)"
```
### file edit
```
sudo vim .zshrc
```
### .zshrc file aita set korte hobe
ZSH_THEME="bira"

alias newsrme-shamim@live="ssh shamim@52.76.37.14" // sobar niche

sourch .zshrc

sourch jodi kaj na kre
-----------------------
```
sudo vim ~/.bashrc
```
```
exec zsh
```
### Autosuggestions and Syntax highlighting
```
git clone https://github.com/zsh-users/zsh-autosuggestions ${ZSH_CUSTOM:-~/.oh-my-zsh/custom}/plugins/zsh-autosuggestions
```
```
git clone https://github.com/zsh-users/zsh-syntax-highlighting.git ${ZSH_CUSTOM:-~/.oh-my-zsh/custom}/plugins/zsh-syntax-highlighting
```
### .zshrc file add korte hoe
```
plugins=(git
zsh-autosuggestions
zsh-syntax-highlighting
)
```
# terminal color code 
```
taxt
#699DF0
bg
#2E3436
30/110
```
# some link
https://github.com/zsh-users/zsh-syntax-highlighting/issues/918
```
sudo apt install zip unzip git vim curl
```
# Install Nginx

```
sudo apt update
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install nginx
sudo ufw app list
sudo ufw allow ssh
sudo ufw allow OpenSSH
sudo ufw allow 'Nginx HTTP'
sudo ufw enable
sudo ufw default deny
sudo ufw status
systemctl status nginx
```

# Install MYSQL

```
sudo apt install mysql-server
```

# Install PHP
```
sudo apt install php8.1-fpm php8.1-mysql
```
```
sudo apt install php8.1-mbstring php8.1-xml php8.1-bcmath php8.1-simplexml php8.1-intl php8.1-gd php8.1-curl php8.1-zip php8.1-gmp
```

# Install composer

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```
```
sudo mv composer.phar /usr/bin/composer
```

# Install mysql

```
sudo mysql

CREATE DATABASE localhost;

CREATE USER 'localhost_user'@'%' IDENTIFIED WITH mysql_native_password BY '12345678';

GRANT ALL ON localhost.* TO 'localhost_user'@'%';

FLUSH PRIVILEGES;
```
# Install tableplus
```
https://tableplus.com/blog/2019/10/tableplus-linux-installation.html
```

# ssh keygenarate: 


======================
======================
1. enter commend with github email, then enter enter more time,  documentation link below
```
ssh-keygen -t ed25519 -C "shamimdewan343@gmail.com"
```
visit:
```
https://docs.github.com/en/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent
```













