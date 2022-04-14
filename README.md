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

## CSS 가이드

## About Us의 타이틀 부분

```html
<head>
  <link rel="stylesheet" href="../css/sub/type.css" />
</head>

<h3 id="page_head">
  <h3>
    홍보동영상
    <div id="location">HOME &gt; 그리스신화박물관 &gt; <b>홍보동영상</b></div>
  </h3>
</h3>
```

- `type.css`를 포함해주고 `h3` > `내용` + `location` 을 넣어주면된다
