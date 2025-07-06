# Academic Portfolio WordPress Theme

A professional WordPress theme converted from your Next.js academic portfolio, designed specifically for academic researchers, scientists, and educators.

## 🎯 Overview

This WordPress theme replicates your beautiful Next.js academic portfolio with all the same sections, styling, and functionality. It provides a powerful content management system for your academic content while maintaining the modern, professional design.

## ✨ Features

- **Responsive Design**: Fully responsive layout that works on all devices
- **Modern UI/UX**: Clean, professional design with smooth animations
- **WordPress Integration**: Easy content management through WordPress admin
- **Custom Post Types**: Dedicated content types for Research, Publications, Education, and Teaching
- **Customizable**: WordPress Customizer integration for easy content updates
- **SEO Optimized**: Proper meta tags and structured data
- **Accessibility**: WCAG compliant with proper focus management
- **Performance**: Optimized for fast loading with Tailwind CSS

## 📋 Prerequisites

- WordPress 5.0 or higher
- PHP 7.4 or higher
- Modern web browser

## 🚀 Installation

### Method 1: Direct Upload

1. Navigate to your WordPress admin dashboard
2. Go to **Appearance > Themes**
3. Click **Add New > Upload Theme**
4. Upload the theme folder as a ZIP file
5. Click **Install Now** and then **Activate**

### Method 2: Manual Installation

1. Copy the `academic-portfolio-theme` folder to your WordPress themes directory:
   ```
   /wp-content/themes/academic-portfolio-theme/
   ```
2. Go to **Appearance > Themes** in your WordPress admin
3. Find "Academic Portfolio Theme" and click **Activate**

## ⚙️ Configuration

### 1. Theme Customization

Go to **Appearance > Customize** to configure:

#### Hero Section
- **Name**: Your full name
- **Title**: Professional title/tagline
- **Description**: Brief description of your work
- **Current Position**: Your current role
- **Supervisor**: Current supervisor/mentor
- **Email**: Contact email address
- **Phone**: Contact phone number

#### About Section
- **About Content**: Main about text content

### 2. Custom Post Types

The theme creates several custom post types for your content:

#### Research Experience
1. Go to **Research Experience > Add New**
2. Fill in the meta boxes:
   - **Position**: Your role title
   - **Institution**: Organization name
   - **Duration**: Time period (e.g., "2023 - Present")
   - **Technologies**: Comma-separated list of technologies/skills
3. Add detailed description in the main content area

#### Publications
1. Go to **Publications > Add New**
2. Fill in the meta boxes:
   - **Authors**: List of authors
   - **Journal/Conference**: Publication venue
   - **Year**: Publication year
   - **Status**: published, submitted, or in-review
   - **Keywords**: Comma-separated keywords
3. Add abstract in the main content area

#### Education
1. Go to **Education > Add New**
2. Add your educational background
3. Use the main content area for details

#### Teaching Experience
1. Go to **Teaching > Add New**
2. Add your teaching roles and experiences

### 3. Navigation Menu

1. Go to **Appearance > Menus**
2. Create a new menu or edit the existing "Primary Menu"
3. Add custom links for:
   - About (#about)
   - Research (#research)
   - Publications (#publications)
   - Education (#education)
   - Teaching (#teaching)
   - Contact (#contact)
4. Assign the menu to the "Primary Menu" location

## 🎨 Styling

### Tailwind CSS
The theme uses Tailwind CSS (loaded from CDN) for styling. The design system includes:

- **Primary Color**: Blue (#3B82F6)
- **Fonts**: Inter (body), Crimson Text (headings)
- **Responsive Breakpoints**: Mobile (<640px), Tablet (640px-1024px), Desktop (>1024px)

### Custom CSS
Additional custom styles are included in `style.css` for:
- Font loading and configuration
- Custom animations
- Responsive utilities

## 📱 Responsive Design

The theme is fully responsive with three main breakpoints:
- **Mobile**: < 640px
- **Tablet**: 640px - 1024px  
- **Desktop**: > 1024px

All sections adapt beautifully to different screen sizes.

## 🔧 JavaScript Features

The theme includes interactive JavaScript features:

- **Smooth Scrolling**: Navigation links scroll smoothly to sections
- **Mobile Menu**: Responsive hamburger menu for mobile devices
- **Header Effects**: Background changes on scroll
- **Active Navigation**: Highlights current section in navigation
- **Contact Form**: Basic form validation and handling
- **Scroll Animations**: Fade-in animations for content sections

## 📊 Content Management

### Adding Content

1. **Research Projects**: Use the Research Experience post type
2. **Publications**: Use the Publications post type with proper metadata
3. **Academic Background**: Use the Education post type
4. **Teaching Experience**: Use the Teaching post type

### Editing Content

All content can be edited through the WordPress admin:
- Go to the respective post type menu
- Click "Edit" on any item
- Update content and metadata
- Click "Update" to save changes

### Hero Section Customization

Use the WordPress Customizer to update:
- Personal information
- Contact details
- Current position information

## 🎯 SEO & Performance

### Built-in SEO Features
- Proper HTML5 semantic structure
- Meta tags for social media sharing
- Optimized images and fonts
- Clean, fast-loading code

### Performance Optimizations
- Minimal JavaScript
- Efficient CSS loading
- Optimized images
- Fast database queries

## 🔌 Plugin Compatibility

The theme is compatible with popular WordPress plugins:
- **Yoast SEO**: For advanced SEO features
- **Contact Form 7**: For enhanced contact forms
- **WordPress SEO**: For additional optimization
- **Caching Plugins**: For improved performance

## 🛠️ Customization

### Adding Custom CSS
1. Go to **Appearance > Customize > Additional CSS**
2. Add your custom styles
3. Preview changes live
4. Click **Publish** to save

### Modifying Template Files
1. Create a child theme (recommended)
2. Copy template files to your child theme
3. Modify as needed
4. Test thoroughly

### Color Scheme Customization
To change the color scheme, update the Tailwind classes in the template files:
- Primary: `bg-blue-600`, `text-blue-600`, etc.
- Secondary: `bg-gray-50`, `text-gray-700`, etc.

## 📋 Troubleshooting

### Common Issues

1. **Tailwind Styles Not Loading**
   - Check internet connection (Tailwind loads from CDN)
   - Verify no JavaScript errors in browser console

2. **Custom Post Types Not Showing**
   - Deactivate and reactivate the theme
   - Go to **Settings > Permalinks** and click "Save Changes"

3. **Contact Form Not Working**
   - Install a contact form plugin like Contact Form 7
   - Replace the default form with a plugin shortcode

4. **Mobile Menu Not Working**
   - Check for JavaScript errors in browser console
   - Ensure jQuery is loaded

### Performance Issues

1. **Slow Loading**
   - Install a caching plugin
   - Optimize images
   - Use a CDN

2. **Large Page Size**
   - Compress images
   - Minify CSS/JS (via plugin)
   - Enable GZIP compression

## 🚀 Going Live

### Before Launch Checklist

- [ ] Fill in all personal information in Customizer
- [ ] Add at least one item to each custom post type
- [ ] Test all navigation links
- [ ] Verify mobile responsiveness
- [ ] Test contact form functionality
- [ ] Add social media links in contact section
- [ ] Install and configure SEO plugin
- [ ] Set up Google Analytics (if desired)
- [ ] Test page loading speed
- [ ] Verify all content is accurate and up-to-date

### Recommended Plugins

- **Yoast SEO**: For search engine optimization
- **Contact Form 7**: For enhanced contact forms
- **UpdraftPlus**: For backups
- **Wordfence**: For security
- **WP Rocket**: For caching and performance

## 📧 Support

For theme-specific questions or issues:
1. Check this README file
2. Review WordPress documentation
3. Test with default WordPress themes to isolate issues

## 🎓 Credits

- **Original Design**: Based on your Next.js academic portfolio
- **Styling**: Tailwind CSS
- **Fonts**: Google Fonts (Inter, Crimson Text)
- **Icons**: Heroicons (included inline)

## 📝 License

This theme is created specifically for your academic portfolio. Feel free to modify and customize it according to your needs.

---

**Built with ❤️ for academic excellence** 