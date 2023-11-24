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
```
# some link
https://github.com/zsh-users/zsh-syntax-highlighting/issues/918

