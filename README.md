# YardageIQ

YardageIQ is a small Laravel demo that displays golf club statistics. The project
uses Vite to compile SCSS and JavaScript and ships with a Docker based
development environment.

## 🐳 Running Locally with Docker

1. **Clone the repo**

```bash
git clone https://github.com/your-username/yardageiq.git
cd yardageiq
```

2. **Start the containers**

```bash
make setup
```

3. **Add the development domain to your hosts file**

```text
127.0.0.1 yardageiq.local
```

Visit `https://yardageiq.local` and Vite will hot reload assets from
`https://yardageiq.local:5173`.
