# PRD: Cassette Brutalist WordPress Theme Completion

## Overview

The goal is to complete and refine the custom WordPress theme "Cassette Brutalist". This theme is built from scratch using Codex and is designed with a brutalist aesthetic that blends retro-futuristic cues with modern accessibility and block editor support.

This project will improve maintainability, flexibility, and usability by structuring theme files, enabling reusable components, registering block patterns, and providing editor-friendly features.

## Goals

* Modularize layout using `template-parts/`
* Enhance editor experience with block patterns
* Provide reusable components for homepage, categories, and resource templates
* Preserve CLI post publishing compatibility
* Maintain minimal conditional logic for performance and clarity

## Features

### Templates

* `category.php` with slug-based routing to custom layouts
* `page-resources.php` with modular sections (intro, cards, dynamic posts, media, CTA)
* `page-landing.php` for promotional landing pages

### Template Parts

* `header.php` (default)
* `header-single.php` (slim header for posts)
* `footer.php`
* `post-card.php`
* `sidebar.php`
* `pagination.php`
* `good-better-best.php`
* `/category/` folder for per-category layout overrides
* `/resources/` folder for modular components of resources page

### Block Patterns

* Good / Better / Best (3-column feature set)
* 3–4 Black CTA blocks
* Related Posts Grid
* Hero Section (existing)

### Style System

* Global styles via `:root` in `style.css`
* Block styles in `editor-style.css`
* Utility classes already present

### Editor Support

* Wide alignment
* Editor styles
* Color palette and dynamic accent

## Constraints

* Minimal conditional logic for maintainability
* ACF optional for future extensibility, not current requirement
* Focused on classic theming with block editor support, not FSE

---

# Roadmap: Cassette Brutalist Theme Completion

## Sprint 0: Setup and Scaffolding

* [ ] Create `/template-parts/` directory and subfolders
* [ ] Create blank PHP partials for headers, footer, post cards, pagination, etc.
* [ ] Create `/resources/` and `/template-parts/category/` folders

## Sprint 1: Template Part Integration

* [ ] Migrate existing inline sections into `get_template_part()` calls
* [ ] Refactor `index.php`, `single.php`, and `page.php` to use partials
* [ ] Create `header-single.php` and wire into `single.php`
* [ ] Implement `post-card.php` for archive and related posts

## Sprint 2: Block Patterns

* [ ] Create block pattern registration system in `functions.php`
* [ ] Convert `good-better-best.php` into reusable block pattern
* [ ] Register 3 black CTA patterns (pattern + PHP partial)
* [ ] Register Related Posts Grid pattern

## Sprint 3: Category and Archive

* [ ] Build `category.php` router using `get_query_var('category_name')`
* [ ] Create `category-default.php` and `category-resources.php`
* [ ] Add custom layout logic in each
* [ ] Add fallback logic if no slug-specific template exists

## Sprint 4: Resources Page Template

* [ ] Create `page-resources.php`
* [ ] Include: intro block, cards, dynamic posts, media embeds, CTA
* [ ] Register any needed patterns for resource sections
* [ ] Optionally add simple JavaScript filter for media/cards

## Sprint 5: Finishing Touches

* [ ] Ensure all templates are mobile responsive
* [ ] Polish typography and spacing scale
* [ ] QA for editor-side appearance
* [ ] Optimize loading/minify assets

---

# Sprint Stories

## Epic: Modular Theme Architecture

### Story: Create template-part system

* Task: Scaffold `/template-parts/` with basic layout partials
* Task: Refactor templates to use `get_template_part()`

### Story: Build category routing system

* Task: Add logic to `category.php` to dynamically load slug-specific templates
* Task: Create default and resource category layouts

## Epic: Pattern Library

### Story: Register CTA and Good/Better/Best block patterns

* Task: Create PHP partials
* Task: Use `ob_start()` to convert markup to block pattern strings
* Task: Register with `register_block_pattern()`

### Story: Related Posts block

* Task: Build markup using `post-card.php`
* Task: Register as editor pattern

## Epic: Resources Page

### Story: Build modular resources template

* Task: Add intro, cards, post loop, embeds, CTA as include parts
* Task: Enable future use with ACF or custom post types

---

This structure will make the theme highly maintainable, block-editor friendly, and easy to iterate on for future enhancements like ACF or FSE.
