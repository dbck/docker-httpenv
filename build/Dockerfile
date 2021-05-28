FROM php:8.0-apache

LABEL maintainer "Dennis Boeckmann <dev@dbck.de>"
LABEL description "This image provides a web service which displays all environment variables."

ARG TARGETPLATFORM
ARG BUILDPLATFORM

RUN echo "I am running on $BUILDPLATFORM, building for $TARGETPLATFORM"

COPY root//var/www/html/ /var/www/html/
