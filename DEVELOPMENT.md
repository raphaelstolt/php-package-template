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
rm DEVELOPMENT.md
git init -b main
```

After creating a corresponding repository on GitHub, configure its remote:

```bash
git remote add origin git@github.com:vendor-name/package-name.git
```

Alternatively, use GitHub's _Use this template_ functionality to create a new repository directly.

## Enabling an AI-assisted package development workflow

The [`php-package-ai-skill`](https://github.com/raphaelstolt/php-package-ai-skill) project provides reusable instructions
and guidance for AI-assisted PHP Composer package development.

To integrate it into your package development workflow:

1. __Install `php-package-ai-skill`__ as a development dependency:

```bash
composer require --dev stolt/php-package-ai-skill
```

2. __Install the Composer agent skill plugin__ to make the skill available to supported coding agents:

```bash
composer require --dev netresearch/composer-agent-skill-plugin
```

3. __Configure your AI coding assistant__ to discover and use the skill. Follow the integration instructions for your
preferred agent in the [`php-package-ai-skill` repository](https://github.com/raphaelstolt/php-package-ai-skill).

4. __Start developing with AI assistance.__ Use the skill's package architecture guidance and prompt templates to
scaffold your package, implement features, improve existing code, or maintain package quality. Adapt the instructions to
your package's specific requirements and conventions.

5. __Review and validate AI-generated changes.__ Run the template's test suite, static analysis, coding standards, and 
Composer validation. AI-generated code should meet the same quality and maintainability standards as manually written code.

For installation details, supported coding agents, and usage examples, see the [`php-package-ai-skill` documentation](https://github.com/raphaelstolt/php-package-ai-skill).

## Configuring php-version-bumper

The template includes a [`version-bumper.php`](version-bumper.php) configuration file for the
[`myopensoft/php-version-bumper`](https://github.com/myopensoft/php-version-bumper) tool, which automates version
bumping and changelog generation based on conventional commits.

After creating a project from this template, update the configuration to match your package:

1. __Update the binary path__ — Replace `bin/<binary-name>` in the `config_file.path` setting with the actual path to
your package's binary file, where the `APPLICATION_VERSION` constant resides. If your package does not have a binary
file, change the `source` to a different method (e.g., `'source' => 'composer'`) and remove the `config_file` entry.

2. __Adjust changelog sections__ — The `sections` array maps conventional commit types to changelog categories. Modify
it to match your commit conventions:

```php
'sections' => [
    'feat' => 'Added',
    'fix' => 'Fixed',
    'perf' => 'Changed',
    'refactor' => 'Changed',
],
```

3. __Adjust version bump rules__ — The `bumps` array defines which commit types trigger which version bumps. Customize
it according to your release strategy:

```php
'bumps' => [
    'feat' => 'minor',
    'fix' => 'patch',
    'perf' => 'patch',
],
```

4. __Configure Git settings__ — Update the `git` array if your default remote or branch differs from `origin`:

```php
'git' => [
    'remote' => 'origin',
    'branch' => null,
],
```

For a complete list of configuration options, refer to the
[`php-version-bumper` documentation](https://github.com/myopensoft/php-version-bumper).