# php script run as a server by  this command 
```
php -S localhost:9000
```
# and need to config server 
```
```
/etc/nginx/sites-available 
```
server {
    listen 80;
    server_name 192.168.68.65;

    location /
        proxy_pass http://localhost:9000;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
    }
}
```
