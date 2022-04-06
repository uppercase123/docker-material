FROM phpmyadmin:latest
RUN apt-get -y install curl && rm -rf /var/lib/apt/lists/*

ENTRYPOINT [ "/docker-entrypoint.sh" ]
CMD ["apache2-foreground"]
