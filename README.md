# Yii 2 Animals

## TABLE OF CONTENTS
- [Demo](#demo)
- [Features](#features)
- [Installation](docs/installation.md)
    - [Manual installation](docs/installation.md#manual-installation)
    - [Docker installation](docs/installation.md#docker-installation)
    - [Vagrant installation](docs/installation.md#vagrant-installation)


## Quickstart
1. [Install composer](https://getcomposer.org)
2. [Install docker](https://docs.docker.com/install/)
3. [Install docker-compose](https://docs.docker.com/compose/install/)
4. Run
    ```bash
    composer create-project yii2-starter-kit/yii2-starter-kit myproject.com --ignore-platform-reqs
    cd myproject.com
    composer run-script docker:build
    ```
5. Go to [http://animals.loc](http://animals.loc)

## FEATURES
### Admin backend
- Beautiful and open source dashboard theme for backend [AdminLTE 3](https://adminlte.io/themes/v3/)
- Content management components: articles, categories, static pages, editable menu, editable carousels, text blocks
- Settings editor. Application settings form (based on KeyStorage component)
- [File manager](https://github.com/MihailDev/yii2-elfinder)
- Users, RBAC management
- Events timeline
- Logs viewer
- System monitoring

### I18N
- Built-in translations:
    - English
    - Spanish
    - Russian
    - Ukrainian
    - Chinese
    - Vietnamese
    - Polish
    - Portuguese (Brazil)
    - Indonesian (Bahasa)
- Language switcher, built-in behavior to choose locale based on browser preferred language
- Backend translations manager

### Users
- Sign in
- Sign up
- Profile editing(avatar, locale, personal data)
- Optional activation by email
- OAuth authorization
- RBAC with predefined `guest`, `user`, `manager` and `administrator` roles
- RBAC migrations support

### Development
- Ready-to-use Docker-based stack (php, nginx, mysql, mailcatcher)
- .env support
- [Webpack](https://webpack.js.org/) build configuration
- Key-value storage service
- Ready to use REST API module
- [File storage component + file upload widget](https://github.com/trntv/yii2-file-kit)
- On-demand thumbnail creation [trntv/yii2-glide](https://github.com/trntv/yii2-glide)
- Built-in queue component [yiisoft/yii2-queue](https://github.com/yiisoft/yii2-queue)
- Command Bus with queued and async tasks support [trntv/yii2-command-bus](https://github.com/trntv/yii2-command-bus)
- `ExtendedMessageController` with ability to replace source code language and migrate messages between message sources
- [Some useful shortcuts](https://github.com/yii2-starter-kit/yii2-starter-kit/blob/master/common/helpers.php)

### Other
- Useful behaviors (GlobalAccessBehavior, CacheInvalidateBehavior)
- Maintenance mode support ([more](#maintenance-mode))
- [Aceeditor widget](https://github.com/trntv/yii2-aceeditor)
- [Datetimepicker widget](https://github.com/trntv/yii2-bootstrap-datetimepicker),
- [Imperavi Reactor Widget](https://github.com/asofter/yii2-imperavi-redactor),
- [Xhprof Debug panel](https://github.com/trntv/yii2-debug-xhprof)
- Sitemap generator
- Extended IDE autocompletion
- Test-ready
- Docker support and Vagrant support
- Built-in [mailcatcher](http://mailcatcher.me/)
- [Swagger](https://swagger.io/) for API docs.

## DEMO
Demo is hosted by awesome [Digital Ocean](https://m.do.co/c/d7f000191ea8)
- Frontend: [http://yii2-starter-kit.terentev.net](http://yii2-starter-kit.terentev.net)
- Backend: [http://backend.yii2-starter-kit.terentev.net](http://backend.yii2-starter-kit.terentev.net)

`administrator` role account
```
Login: webmaster
Password: webmaster
```

`manager` role account
```
Login: manager
Password: manager
```

`user` role account
```
Login: user
Password: user
```

