# Cassette Brutal Grid WordPress Theme

A modern WordPress theme inspired by Cassette Modernism and Pixelated Brutalism design philosophy. Clean, bright, open design with structured grid system and subtle rebellious touches. Perfect for creatives who want their work to speak first.

## Features

- **Design Philosophy**: Cassette Modernism × Pixelated Brutalism
- **Responsive Design**: Mobile-first approach with 12-column grid system
- **Typography**: Inter and JetBrains Mono fonts with carefully crafted scale
- **Dark Mode**: Complete dark theme support with system preference detection
- **Performance**: Optimized CSS and JavaScript with lazy loading
- **Accessibility**: WCAG 2.1 compliant with proper focus management
- **Block Editor**: Full Gutenberg support with custom editor styles
- **Customization**: WordPress Customizer integration

## Design System

### Colors
- **Primary**: Dark charcoal (#1A1A1A)
- **Accent**: Stripe-inspired blue (#3B82F6)
- **Surface**: Clean whites and subtle grays
- **Interactive**: Hover states and micro-interactions

### Typography
- **Hero**: 3rem, bold, tight line-height
- **Headline**: 1.875rem, semibold
- **Subhead**: 1.25rem, medium weight
- **Body**: 1rem, regular, 1.6 line-height
- **Caption**: 0.875rem, muted color

### Components
- **Buttons**: 4 variants (primary, secondary, ghost, brutal, minimal)
- **Cards**: 4 variants (default, elevated, brutal, minimal)
- **Grid**: Flexible 12-column system with responsive breakpoints

## Installation

1. Download the theme files
2. Upload to your WordPress site via:
   - **Admin Dashboard**: Appearance > Themes > Add New > Upload Theme
   - **FTP**: Upload to `/wp-content/themes/cassette-brutal-theme/`
3. Activate the theme from Appearance > Themes

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher
- Modern browser with CSS Grid support
- Table of Contents block pattern for posts

## File Structure

```
cassette-brutal-theme/
├── style.css                 # Main stylesheet with theme header
├── index.php                 # Main template file
├── header.php                # Header template
├── footer.php                # Footer template
├── single.php                # Single post template
├── page.php                  # Page template
├── functions.php             # Theme functions and setup
├── assets/
│   ├── css/
│   │   ├── editor-style.css  # Block editor styles
│   │   └── login.css         # Custom login page styles
│   ├── js/
│   │   └── theme.js          # Theme JavaScript
│   └── images/               # Theme images
├── templates/                # Additional template files
├── inc/                      # Include files
└── README.md                 # This file
```

## Customization

### Theme Customizer Options

Access via **Appearance > Customize**:

- **Hero Section**: Customize hero title and subtitle
- **Colors**: Modify theme colors (uses CSS custom properties)
- **Typography**: Font selections and sizes
- **Layout**: Container widths and spacing

### Custom Functions

The theme includes several helper functions:

```php
// Button component
cassette_brutal_button($text, $variant, $size, $classes, $attributes)

// Card component  
cassette_brutal_card($content, $variant, $interactive, $classes)

// Container wrapper
cassette_brutal_container($content, $size, $classes)

// Grid system
cassette_brutal_grid($content, $cols, $gap, $classes)
```

### CSS Custom Properties

The theme uses CSS custom properties for easy customization:

```css
:root {
  --primary: 240 5.9% 10%;
  --accent: 217 91% 60%;
  --surface: 0 0% 100%;
  --text-hero: 3rem;
  --space-4: 1rem;
  /* ... and many more */
}
```

## Block Editor Support

Full Gutenberg support with:
- Custom color palette
- Typography presets
- Wide and full alignment
- Custom editor styles
- Block patterns (coming soon)

## Performance Features

- Optimized CSS with minimal unused styles
- Lazy loading for images
- Debounced scroll events
- Preloaded critical fonts
- Minified JavaScript
- Clean WordPress head

## Browser Support

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+

## Accessibility Features

- WCAG 2.1 AA compliant
- Keyboard navigation support
- Screen reader optimized
- Focus management for modals
- High contrast mode support
- Reduced motion support

## Development

### Local Development Setup

1. Clone the theme files
2. Install WordPress locally
3. Activate the theme
4. Use browser dev tools for CSS modifications
5. Test across different devices and browsers

### Customization Guidelines

- Use CSS custom properties for color changes
- Follow the existing naming conventions
- Test responsive design on multiple devices
- Maintain accessibility standards
- Keep performance in mind

## Support

For theme support and customization:

1. Check the WordPress Codex for general WordPress questions
2. Review the theme files for implementation details
3. Test changes in a staging environment first

## Changelog

### Version 1.0.0
- Initial release
- Complete React to WordPress conversion
- Full responsive design system
- Dark mode support
- Block editor integration
- Performance optimizations

## Credits

- **Design Inspiration**: Apple, Stripe, Stefan Sagmeister
- **Fonts**: Inter (Google Fonts), JetBrains Mono
- **Icons**: Custom SVG icons
- **Original React Project**: Converted from cassette-brutal-grid

## License

This theme is licensed under the GPL v2 or later.

---

**Note**: This theme was converted from a React application and maintains the original design philosophy while being fully WordPress compatible.

