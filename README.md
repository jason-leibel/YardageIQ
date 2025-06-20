# YardageIQ

YardageIQ is a small Laravel demo that displays golf club statistics. The project
uses Vite to compile SCSS and JavaScript and ships with a Docker based
development environment.

## 🐳 Running Locally with Docker

1. **Clone the repo**

```bash
git clone https://github.com/jason-leibe/yardageiq.git
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

## Screenshots

### Landing Page
![Screenshot 2025-06-20 091615](https://github.com/user-attachments/assets/df778e1c-e600-4f36-9cf9-3e79ef454ff6)

### Detail Page
![Screenshot 2025-06-20 091545](https://github.com/user-attachments/assets/272daaca-556f-4aae-a86f-1e5fe1705ab0)

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for release history.
