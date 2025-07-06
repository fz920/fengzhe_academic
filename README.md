# Fengzhe Zhang - Academic Portfolio (WordPress)

A professional academic portfolio website built with WordPress, featuring a custom theme that replicates the design of the original Next.js portfolio.

## 🎯 Overview

This is a WordPress-powered academic portfolio website for Fengzhe Zhang, a Machine Learning Researcher specializing in Probabilistic Generative Models. The site showcases research experience, publications, education, and teaching experience with a modern, professional design.

**This WordPress version maintains the same visual design and content as the original Next.js project** while providing the flexibility and content management capabilities of WordPress.

## ✨ Features

- **WordPress CMS**: Easy content management and updates
- **Custom Theme**: Professional academic-focused design
- **Responsive Design**: Works seamlessly on all devices
- **SQLite Database**: Lightweight database solution
- **Custom Post Types**: Organized content for research, publications, education, and teaching
- **Modern UI**: Clean design with Tailwind-inspired styling
- **SEO Ready**: WordPress SEO capabilities built-in

## 🛠️ Technical Stack

- **CMS**: WordPress 6.4+
- **Database**: SQLite (via SQLite plugin)
- **Styling**: Custom CSS with Tailwind-inspired utilities
- **Theme**: Custom `academic-portfolio-theme`
- **Server**: PHP 8.0+ compatible

## 🚀 Getting Started

### Prerequisites
- PHP 8.0 or higher
- Web server (Apache/Nginx) or PHP built-in server for development

### Local Development Setup

1. **Navigate to the project directory**:
   ```bash
   cd fengzhe_academic
   ```

2. **Start the development server**:
   ```bash
   php -S localhost:8000
   ```

3. **Access the website**:
   - Frontend: http://localhost:8000
   - Admin Panel: http://localhost:8000/wp-admin
   - Username: `admin`
   - Password: `admin` (change this for production)

### Project Structure

```
fengzhe_academic/
├── wp-content/
│   ├── themes/
│   │   └── academic-portfolio-theme/    # Custom theme
│   │       ├── style.css                # Main styles
│   │       ├── functions.php            # Theme functions
│   │       ├── header.php               # Site header
│   │       ├── footer.php               # Site footer
│   │       ├── index.php                # Main template
│   │       └── script.js                # JavaScript functionality
│   ├── plugins/                         # WordPress plugins
│   └── database/                        # SQLite database
├── wp-config.php                        # WordPress configuration
└── README.md                            # This file
```

## 🎨 Design Features

### Custom Theme Features
- **Responsive Navigation**: Mobile-friendly hamburger menu
- **Hero Section**: Professional introduction with contact info
- **Research Timeline**: Visual timeline of research positions
- **Publication Cards**: Detailed publication showcase
- **Education Highlights**: Academic achievements with visual emphasis
- **Teaching Experience**: Comprehensive teaching portfolio
- **Contact Form**: Professional contact section

### Styling
- **Color Scheme**: Professional blue and gray palette
- **Typography**: Clean, readable fonts
- **Layout**: Consistent spacing and professional appearance
- **Animations**: Smooth transitions and hover effects

## 📱 Content Sections

1. **About**: Research background and interests
2. **Research**: Current and past research positions
3. **Publications**: Academic publications and papers
4. **Education**: Academic qualifications and achievements
5. **Teaching**: Teaching experience and philosophy
6. **Contact**: Contact information and form

## 🔧 Customization

### Adding Content
1. **Login to WordPress Admin**: http://localhost:8000/wp-admin
2. **Navigate to Custom Post Types**:
   - Research Positions
   - Publications
   - Education Records
   - Teaching Experience
3. **Add/Edit content** through the WordPress interface

### Theme Customization
- **CSS**: Edit `wp-content/themes/academic-portfolio-theme/style.css`
- **JavaScript**: Edit `wp-content/themes/academic-portfolio-theme/script.js`
- **PHP Templates**: Modify theme files in the theme directory

## 🚀 Deployment Options

### 1. Traditional Web Hosting
- Upload files to your web hosting provider
- Configure database settings in `wp-config.php`
- Set proper file permissions

### 2. WordPress Hosting Services
- **WordPress.com**: Managed WordPress hosting
- **WP Engine**: Premium WordPress hosting
- **SiteGround**: WordPress-optimized hosting
- **Bluehost**: Affordable WordPress hosting

### 3. Cloud Hosting
- **DigitalOcean**: VPS with WordPress one-click install
- **AWS**: EC2 with WordPress AMI
- **Google Cloud**: Compute Engine with WordPress
- **Azure**: WordPress on Azure App Service

### 4. Static Site Generation (Advanced)
- Use plugins like **Simply Static** to generate static HTML files
- Host on **Netlify**, **Vercel**, or **GitHub Pages**

## 📊 Relationship to Original Project

This WordPress version is based on the original Next.js academic portfolio located in `../academic-portfolio/`. Key differences:

| Feature | Next.js Version | WordPress Version |
|---------|----------------|-------------------|
| **Technology** | React, TypeScript, Tailwind | PHP, WordPress, Custom CSS |
| **Content Management** | Code-based | WordPress Admin Panel |
| **Hosting** | Static site hosting | Traditional web hosting |
| **Customization** | Developer-friendly | User-friendly CMS |
| **Performance** | Optimized static files | Dynamic PHP rendering |

## 🔒 Security Considerations

### For Production Deployment:
1. **Change default credentials**: Update admin username and password
2. **Install security plugins**: Wordfence, iThemes Security
3. **Keep WordPress updated**: Regular core, theme, and plugin updates
4. **Use HTTPS**: SSL certificate for secure connections
5. **Regular backups**: Automated backup solutions
6. **File permissions**: Proper server file permissions

## 📧 Contact Information

- **Email**: fz287@cam.ac.uk
- **Phone**: +44 (0)7421 727 978
- **Location**: Cambridge, UK
- **Institution**: University of Cambridge

## 🏆 Academic Highlights

- **MPhil Cambridge**: 79.87% (Distinction) - Top 10%
- **BSc Mathematics**: 88.41% (First Class) - Top 4% (10th/251)
- **Research Focus**: Probabilistic Generative Models, Molecular Sampling
- **Teaching Experience**: Peer tutor at Imperial College London

## 🛟 Support

For technical issues or customization help:
1. Check WordPress documentation
2. Review theme files in `wp-content/themes/academic-portfolio-theme/`
3. Test changes in a development environment first

---

*WordPress Academic Portfolio - Professional academic presence made simple* 