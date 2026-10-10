# Changelog

All notable changes to `cakephp-rest-api` will be documented in this file.

## v1.2.1 - 2026-10-09

- Cap `league/fractal` below 0.20: 0.20 typed `ArraySerializer::collection()`, which made `RestApi\Serializer\ArraySerializer` fail with a fatal incompatible-declaration error on fresh installs.
