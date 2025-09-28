# PopupBundle

**PopupBundle** is a lightweight Symfony bundle that injects customizable popup messages into HTTP responses. It is designed to be plug-and-play, requiring minimal configuration and no modification to the host project beyond a single YAML file and manual bundle registration.

---

## 🚀 Features

- Injects popup HTML into responses via event listener
- Configurable via `popup_bundle.yaml`
- Twig-based rendering with namespaced templates
- Fully self-contained: no changes required in the host project
- Works out-of-the-box with `composer install`

---

# 📦 Installation

Before installation. Add these lines to your `composer.json` if you want use this package directly from GitHub 

```json
...
"repositories": [
    {
    "type": "vcs",
    "url": "https://github.com/batazo/Symfony-PopupBundle.git"
    }
],
"prefer-stable": true,
"minimum-stability": "dev"
...
```

Install the bundle via Composer:

```bash
composer require batazo/popup-bundle:dev-main
```

# 🧩 Manual Bundle Registration

Add the following line to your `config/bundles.php` file:

```php
Batazo\PopupBundle\PopupBundle::class => ['all' => true],
```

# ⚙️ Configuration

Create a file at `config/packages/popup_bundle.yaml` with the following content:

```yaml
popup_bundle:
  enable: true
  text: "Hello from PopupBundle!"
```

# 📄 License

MIT
