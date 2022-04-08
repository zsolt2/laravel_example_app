# Test image
FROM localhost:5000/app-base:1.0.0 AS test

ARG WWWGROUP

RUN groupadd --force -g $WWWGROUP sail
RUN useradd -ms /bin/bash --no-user-group -g $WWWGROUP -u 1337 sail

EXPOSE 8000

ENTRYPOINT ["start-container"]

# Production image

FROM test AS prod

COPY . /var/www/html
