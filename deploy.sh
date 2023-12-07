#!/bin/bash

# Stop old containers
docker compose down

# Pull new code
git pull

# Build and start
docker compose build
docker compose up -d