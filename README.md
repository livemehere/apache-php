# Apache + php 서버

## Structure

- [ ] mariadb 와함께 docker-compose 작성하기

### Dockerfile

- 단순히 php와 apache가 설치된 서버 이미지이다

### Volume

- 현재 directory

### 컨테이너 생성

```bash
docker run -d -p 80:80 -v $(pwd):/var/www/html --name php-apache-server kong-php-site
```
