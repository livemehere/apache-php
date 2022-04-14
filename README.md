# Apache + php 서버

## 개발 환경만들기

### Image

```bash
docker build -t php-apache-kong .
```

### Container

```bash
docker run -d --name kong-php-apache -p 80:80 -v `pwd`:/var/www/html php-apache-kong
```
