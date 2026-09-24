# Development guide

A practical guide to creating and developing a PHP package using this template, including AI-assisted development
workflows.

## Creating a repository from the template

To create a local project from this template, clone the repository, remove its existing Git history, and initialise a
new repository:

```bash
git clone https://github.com/raphaelstolt/php-package-template.git package-name
cd package-name
rm -rf .git
git init -b main
```

After creating a corresponding repository on GitHub, configure its remote:

```bash
git remote add origin git@github.com:vendor/package-name.git
```

Alternatively, use GitHub's *Use this template* functionality to create a new repository directly.

## Enabling an AI-assisted package development workflow

The [`php-package-ai-skill`](https://github.com/raphaelstolt/php-package-ai-skill) project provides reusable instructions
and guidance for AI-assisted PHP Composer package development.

To integrate it into your package development workflow:

1. **Install `php-package-ai-skill`** as a development dependency:

```bash
composer require --dev stolt/php-package-ai-skill
```

2. **Install the Composer agent skill plugin** to make the skill available to supported coding agents:

```bash
composer require --dev netresearch/composer-agent-skill-plugin
```

3. **Configure your AI coding assistant** to discover and use the skill. Follow the integration instructions for your
preferred agent in the [`php-package-ai-skill` repository](https://github.com/raphaelstolt/php-package-ai-skill).

4. **Start developing with AI assistance.** Use the skill's package architecture guidance and prompt templates to
scaffold your package, implement features, improve existing code, or maintain package quality. Adapt the instructions to
your package's specific requirements and conventions.

5. **Review and validate AI-generated changes.** Run the template's test suite, static analysis, coding standards, and 
Composer validation. AI-generated code should meet the same quality and maintainability standards as manually written code.

For installation details, supported coding agents, and usage examples, see the [`php-package-ai-skill` documentation](https://github.com/raphaelstolt/php-package-ai-skill).