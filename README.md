**I build Flutter and Laravel developer tools that an AI coding agent can drive:** a utility-first styling framework, an end-to-end driver, a runtime inspector, and a read-only MCP server for Laravel.

12+ years shipping production software, and since 2023 building production systems on top of LLMs and agents. I'm Head of Engineering & AI at [Yorkshire Trading Company](https://www.yorkshiretrading.com), where I run e-commerce for its own brands, [Yorkshire Trading](https://www.yorkshiretrading.com) and [Rydale](https://www.rydale.com). I also maintain the [@fluttersdk](https://github.com/fluttersdk) ecosystem, from Izmir.

## Wind: Tailwind CSS for Flutter

```dart
// Flutter native
Container(
  padding: EdgeInsets.all(24),
  margin: EdgeInsets.symmetric(horizontal: 16),
  decoration: BoxDecoration(
    color: Colors.white,
    borderRadius: BorderRadius.circular(12),
    boxShadow: [BoxShadow(color: Colors.black.withOpacity(0.1), blurRadius: 10, offset: Offset(0, 4))],
  ),
  child: Text('Hello', style: TextStyle(fontSize: 20, fontWeight: FontWeight.bold)),
)

// Wind
WDiv(
  className: 'p-6 mx-4 bg-white dark:bg-gray-800 rounded-xl shadow-lg',
  child: WText('Hello', className: 'text-xl font-bold'),
)
```

The Flutter team looked at the same problem. In the [Decorators experiment](https://github.com/flutter/flutter/issues/161345) they wrote that "the source code can be a bit verbose due to heavy nesting", ran 3 rounds of user studies with 8 participants, and closed it with "we've decided not to move forward with the decorators experiment". Their experiment chained modifiers onto a widget. Wind takes the other route: utility strings parsed into a widget tree, so the styling stays declarative and the tree stays flat.

```bash
flutter pub add fluttersdk_wind
```

[![pub downloads](https://img.shields.io/pub/dm/fluttersdk_wind?label=downloads&color=2ea44f)](https://pub.dev/packages/fluttersdk_wind)
[![pub points](https://img.shields.io/pub/points/fluttersdk_wind?label=pub%20points)](https://pub.dev/packages/fluttersdk_wind/score)
[![pub version](https://img.shields.io/pub/v/fluttersdk_wind?label=version)](https://pub.dev/packages/fluttersdk_wind)

W-prefix widgets, a parser per utility family, and a themeable token set. [Documentation](https://fluttersdk.com/wind) · [pub.dev](https://pub.dev/packages/fluttersdk_wind)

Your agent gets the same docs I do. One command installs the skills, and `mcp.fluttersdk.com` answers `search-docs` over streamable HTTP, public and no auth, so the agent looks the grammar up instead of guessing it.

```
/plugin marketplace add fluttersdk/ai
/plugin install fluttersdk@fluttersdk-marketplace
```

## Tools an agent can operate

| Package | What it is | Downloads | Quality |
| --- | --- | --- | --- |
| [**Dusk**](https://github.com/fluttersdk/dusk) | End-to-end driver. Taps, snaps and screenshots a live app over VM Service, the way Playwright drives a browser. Exposed to the agent over MCP. | [![pub downloads](https://img.shields.io/pub/dm/fluttersdk_dusk?label=&color=2ea44f)](https://pub.dev/packages/fluttersdk_dusk) | [![pub points](https://img.shields.io/pub/points/fluttersdk_dusk?label=)](https://pub.dev/packages/fluttersdk_dusk/score) |
| [**Telescope**](https://github.com/fluttersdk/telescope) | Passive runtime inspector. Captures HTTP, logs, exceptions and DB queries and surfaces them over MCP. Debug-only, zero release overhead. | [![pub downloads](https://img.shields.io/pub/dm/fluttersdk_telescope?label=&color=2ea44f)](https://pub.dev/packages/fluttersdk_telescope) | [![pub points](https://img.shields.io/pub/points/fluttersdk_telescope?label=)](https://pub.dev/packages/fluttersdk_telescope/score) |

An agent writing Flutter code cannot see the app it just built. It guesses at the widget tree, never taps a button, and never reads the exception it caused. Dusk gives it hands, Telescope gives it eyes.

Both are built on [**Artisan**](https://github.com/fluttersdk/artisan), a composable Dart CLI framework and stdio MCP server. [**Magic**](https://github.com/fluttersdk/magic), a Laravel-style app framework for Flutter, is in alpha.

## Laravel

[**laravel-agent-mcp**](https://github.com/anilcancakir/laravel-agent-mcp) gives Claude Code and Cursor read-only access to your running app: schema, logs, queue, cache, routes, config. Twenty-four tools read. One executes, and it ships denied: an empty allowlist, exact command matching with no wildcards, and option-level default-deny, because `route:list` and `migrate --force` are not the same risk.

An agent writing a migration has never seen your schema. It invents column names, assumes relationships your tables dropped, and reasons about a queue it cannot observe. The result is plausible, confident and wrong.

```bash
composer require anilcancakir/laravel-agent-mcp
```

[![packagist downloads](https://img.shields.io/packagist/dm/anilcancakir/laravel-agent-mcp?label=downloads&color=2ea44f)](https://packagist.org/packages/anilcancakir/laravel-agent-mcp)
[![packagist version](https://img.shields.io/packagist/v/anilcancakir/laravel-agent-mcp?label=version)](https://packagist.org/packages/anilcancakir/laravel-agent-mcp)

[**laravel-ai-sdk-skills**](https://github.com/anilcancakir/laravel-ai-sdk-skills) is a skill system for Laravel AI SDK agents. Define capabilities as `SKILL.md` files and load them by progressive disclosure instead of bloating the context window.

[![packagist downloads](https://img.shields.io/packagist/dm/anilcancakir/laravel-ai-sdk-skills?label=downloads&color=2ea44f)](https://packagist.org/packages/anilcancakir/laravel-ai-sdk-skills)
[![packagist version](https://img.shields.io/packagist/v/anilcancakir/laravel-ai-sdk-skills?label=version)](https://packagist.org/packages/anilcancakir/laravel-ai-sdk-skills)

## Claude Code

[**ac**](https://github.com/anilcancakir/claude-code) puts a file between your request and the first edit. It interviews you for intent, writes the plan to disk, has an adversarial reviewer read it cold, then executes wave by wave with a model tier per step and four verification layers before anything is called done.

```
/plugin marketplace add anilcancakir/claude-code
/plugin install ac@ac
```

## Selected writing

- [Introducing Wind: Utility-First Styling for Flutter, Inspired by Tailwind CSS](https://medium.com/@anilcan/introducing-wind-utility-first-styling-for-flutter-inspired-by-tailwind-css-0a2f440f4161)
- [Level Up Your Laravel AI Agents with Modular Skills](https://medium.com/@anilcan/level-up-your-laravel-ai-agents-with-modular-skills-39da3fe9fe4b)
- [Forms in Flutter](https://medium.com/@anilcan/forms-in-flutter-6e1364eafdb5)
- [Flutter Internationalization by Using JSON Files](https://medium.com/@anilcan/flutter-internationalization-by-using-json-files-f91468d86df0)

## Get in touch

I take on consulting work in Flutter architecture. Reach me at [anilcan.cakir@gmail.com](mailto:anilcan.cakir@gmail.com) or on [LinkedIn](https://www.linkedin.com/in/anilcancakir/).

<details>
<summary>Away from the screen</summary>

I design my own PCBs and solder them, run the house on Home Assistant and ESPHome, and print the part in Fusion 360 rather than buy it.

</details>
