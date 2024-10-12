FROM node:20-alpine

# manually installing chrome
RUN apk add chromium

# skips puppeteer installing chrome and points to correct binary
ENV PUPPETEER_SKIP_CHROMIUM_DOWNLOAD=true \
    PUPPETEER_EXECUTABLE_PATH=/usr/bin/chromium-browser

# Install app
WORKDIR /app
COPY . /app

# Install dependencies
RUN npm install

# Run app
CMD ["npm", "start"]
