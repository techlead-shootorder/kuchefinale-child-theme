# Kuchefinale WordPress Theme

A modern WordPress theme built with Tailwind CSS for Kuchefinale kitchen products.

## Features

- ✅ **Tailwind CSS** - Utility-first CSS framework
- ✅ **Responsive Design** - Mobile-first approach
- ✅ **WordPress Standards** - Follows WordPress coding standards
- ✅ **Modular Structure** - Organized template parts and assets
- ✅ **Custom Brand Pages** - Siemens, Caesarstone, Schock
- ✅ **Performance Optimized** - Minified CSS and optimized assets

## Quick Start

### Prerequisites
- Node.js (v16 or higher)
- npm or yarn
- WordPress installation

### Installation

1. **Clone/Download** the theme to your WordPress themes directory:
   ```bash
   wp-content/themes/kuchefinale-theme/
   ```

2. **Install dependencies**:
   ```bash
   npm install
   ```

3. **Build CSS** (production):
   ```bash
   npm run build
   ```

4. **Activate** the theme in WordPress admin.

## Development

### Available Scripts

```bash
# Development (watch mode)
npm run dev

# Production build (minified)
npm run build

# Build and watch
npm run build-watch
```

### Development Workflow

1. **Start development mode**:
   ```bash
   npm run dev
   ```
   This will watch for changes in your PHP templates and rebuild CSS automatically.

2. **Edit templates** in:
   - `templates/` - Page templates
   - `template-parts/` - Reusable components
   - `assets/css/src/input.css` - Custom CSS

3. **Use Tailwind classes** directly in your PHP templates:
   ```php
   <div class="bg-blue-500 text-white p-4 rounded-lg">
       <h2 class="text-2xl font-bold">Hello World</h2>
   </div>
   ```

## File Structure

```
kuchefinale-theme/
├── assets/
│   ├── css/
│   │   ├── src/
│   │   │   └── input.css      # Tailwind source
│   │   └── style.css          # Compiled CSS
│   ├── js/
│   └── images/
├── inc/
│   ├── theme-setup.php        # Theme configuration
│   └── customizer.php         # WordPress customizer
├── template-parts/
│   ├── header.php            # Header template
│   ├── footer.php            # Footer template
│   └── content/              # Content components
├── templates/
│   ├── front-page.php        # Homepage template
│   └── pages/                # Page templates
├── Root WordPress files:
│   ├── style.css             # Theme identifier
│   ├── functions.php         # Theme functions
│   ├── index.php            # Main template
│   └── *.php                # WordPress templates
└── Configuration:
    ├── package.json          # Dependencies
    ├── tailwind.config.js    # Tailwind configuration
    └── README.md            # This file
```

## Customization

### Colors
Edit `tailwind.config.js` to customize the color palette:

```javascript
theme: {
  extend: {
    colors: {
      primary: {
        // Your brand colors
      }
    }
  }
}
```

### Custom CSS
Add custom styles in `assets/css/src/input.css`:

```css
@layer components {
  .my-custom-component {
    @apply bg-blue-500 text-white p-4;
  }
}
```

### WordPress Customizer
Available options in `inc/customizer.php`:
- Contact information
- Social media links
- Theme colors

## Brand Pages

The theme includes dedicated pages for:
- **Siemens** (`/siemens/`) - Premium appliances
- **Caesarstone** (`/caesarstone/`) - Quartz surfaces  
- **Schock** (`/schock/`) - Composite sinks
- **About** (`/about/`) - Company information

## Performance

- CSS is minified in production
- Tailwind purges unused styles
- Optimized for Core Web Vitals
- Responsive images supported

## Browser Support

- Chrome (last 2 versions)
- Firefox (last 2 versions)
- Safari (last 2 versions)
- Edge (last 2 versions)

## Contributing

1. Make changes to source files
2. Run `npm run build` before committing
3. Test in multiple browsers
4. Follow WordPress coding standards

## Support

For theme support and customization, contact the development team.

## License

GPL v2 or later