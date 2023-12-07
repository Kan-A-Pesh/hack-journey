# Hacker's Journey

## 🗒️ Introduction

The Hacker's Journey is a series of challenges that will test your skills in different areas of computer science. The challenges are designed to be fun and educational. You will learn a lot by solving them.

## 📝 Instructions

### 1. Clone this repository to your local machine

```baash
# Clone the repository.
git clone https://github.com/Kan-A-Pesh/hack-journey.git
```

### 2. Install Docker on your local machine

```bash
# Uncomment the following line if you are using a ARM64 machine.
# export DOCKER_DEFAULT_PLATFORM=linux/arm64

# Build the Docker image.
docker compose build
```

### 3. Run the Docker container

```bash
# Run the Docker container.
PORT=8080 docker compose up -d
```

### 4. Solve the challenges

Hourray 🎉! You are ready to solve the challenges. You can access the challenges by visiting the following URL in your browser.

```bash
# Visit the following URL in your browser.
http://localhost:8080
```

## 📚 Resources

This project was made with the following technologies:

- [Docker](https://www.docker.com/) & [Docker Compose](https://docs.docker.com/compose/) - For containerization.
- [PHP](https://www.php.net/) - For the backend of most challenges.
- [Node.js](https://nodejs.org/en/) - For the crawler bot (used in the challenge 5).

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
