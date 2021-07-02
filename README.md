# Перспективные направления развития отечественных информационных технологий

Содержит исходный код для сайта конференций СевГУ http://pnroit.code-bit.com/.

## Локальная разработка (ubuntu)

Для запуска сайта локально нужен установленный nginx и docker в rootless режиме.

- В `/etc/hosts` добавить строчку `127.0.0.1 sguc.lo`
- В локальный nginx прописать proxy конфиг
```
server {
    listen 80;
    server_name sguc.lo;
    client_max_body_size 100M;
    location / {
        proxy_set_header Host $http_host;
        proxy_pass http://127.0.0.1:3712;
    }
}
```
- Запустить сайт в докере командой `docker-compose up`.
- Зайти по адресу http://sguc.lo

## Лицензия

См. файл LICENSE.