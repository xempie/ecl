# Empathic Computing Research Lab

> A comprehensive Laravel 12 academic website for showcasing research in empathic computing, AR/VR/AI technologies, and human-computer interaction.

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat&logo=php)](https://php.net)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-4.1.5-38B2AC?style=flat&logo=tailwind-css)](https://tailwindcss.com)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

## 🎯 Project Overview

**Empathic Computing Research Lab** is a university research center focused on developing emotionally intelligent systems that understand and respond to human emotions through advanced AI, AR, and VR technologies. This website serves as the digital front for the research lab, showcasing projects, publications, team members, and research areas.

### 🌟 Key Features

- **Academic Research Showcase**: Comprehensive sections for research areas, projects, and publications
- **Hero Slider**: Dynamic 3-slide presentation with research highlights
- **Responsive Design**: Mobile-friendly layout with professional academic styling
- **Modular Architecture**: Component-based structure for easy maintenance
- **Publication Management**: JSON-driven publication and project listings
- **Team Profiles**: Research team member showcases
- **Blog System**: Research updates and news

## 🏗️ Project Structure

```
ecl/
├── main/                           # Main Laravel application
│   ├── app/                       # Application code
│   │   ├── Http/Controllers/      # Route controllers
│   │   ├── Models/               # Eloquent models
│   │   ├── Services/             # Business logic services
│   │   └── Helpers/              # Helper functions
│   ├── resources/
│   │   ├── views/                # Blade templates
│   │   │   ├── components/       # Reusable components
│   │   │   └── layouts/          # Layout templates
│   │   ├── css/                  # Stylesheets
│   │   ├── js/                   # JavaScript files
│   │   └── data/                 # JSON data files
│   │       ├── projects/         # Project data
│   │       ├── publications/     # Publication data
│   │       └── team/             # Team member data
│   ├── public/assets/            # Static assets
│   │   ├── images/              # Images and media
│   │   ├── css/                 # Compiled CSS
│   │   └── js/                  # Compiled JavaScript
│   └── docs/                    # Project documentation
├── examples/                    # Example templates
│   ├── Admin/                  # Admin dashboard example
│   ├── Landing/               # Landing page examples
│   └── Documentation/         # Template documentation
└── README.md                  # This file
```

## 🚀 Quick Start

### Prerequisites

- **PHP 8.2+** with required extensions
- **Composer** (PHP dependency manager)
- **Node.js 18+** and **npm** (for asset compilation)
- **MySQL/PostgreSQL** (for database)
- **Git** (for version control)

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/xempie/ecl.git
   cd ecl
   ```

2. **Navigate to main project**
   ```bash
   cd main
   ```

3. **Install PHP dependencies**
   ```bash
   composer install
   ```

4. **Install Node.js dependencies**
   ```bash
   npm install
   ```

5. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

6. **Configure database**
   Edit `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=ecl_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

7. **Run migrations**
   ```bash
   php artisan migrate
   ```

8. **Start development server**
   ```bash
   composer run dev
   ```
   
   This will start:
   - Laravel development server (`php artisan serve`)
   - Queue worker (`php artisan queue:listen`)
   - Asset watcher (`npm run dev`)
   - Log viewer (`php artisan pail`)

9. **Access the application**
   Open http://localhost:8000 in your browser

## 💻 Development

### Available Scripts

- `composer run dev` - Start development environment with all services
- `composer run dev-win` - Windows-specific development command
- `composer run test` - Run test suite
- `npm run build` - Build production assets
- `npm run dev` - Watch and compile assets for development

### Development Workflow

1. **Asset Development**: Assets are processed with Vite and Tailwind CSS
2. **Component Architecture**: Use Blade components in `resources/views/components/`
3. **Data Management**: Update JSON files in `resources/data/` for content changes
4. **Styling**: Follow the established color palette and design system
5. **Testing**: Run `composer run test` before committing changes

### Content Management

#### Adding Projects
Edit `resources/data/projects/all-projects.json` and `featured-projects.json`:
```json
{
  "title": "Project Name",
  "description": "Project description",
  "image": "projects/project-image.jpg",
  "technologies": ["AI", "VR", "Machine Learning"]
}
```

#### Adding Publications
Edit `resources/data/publications.json`:
```json
{
  "title": "Publication Title",
  "authors": ["Author 1", "Author 2"],
  "venue": "Conference/Journal Name",
  "year": "2024",
  "image": "publications/publication-image.jpg"
}
```

#### Adding Team Members
Edit `resources/data/team/team-members.json`:
```json
{
  "name": "Team Member Name",
  "position": "Research Position",
  "bio": "Brief biography",
  "image": "team/member-photo.jpg"
}
```

## 🎨 Design System

### Color Palette
- **Primary Blue**: `#60a5fa` (AI research area)
- **Emerald Green**: `#34d399` (AR research area)
- **Violet Purple**: `#a78bfa` (VR research area)
- **Amber Orange**: `#fbbf24` (HCI research area)
- **Footer Background**: `#0f172b` (dark slate blue)

### Typography
- **Font Family**: Nunito (Google Fonts)
- **Headings**: Nunito 600+ weights
- **Body Text**: Nunito 400 weight

### Component Standards
- **Equal Heights**: All cards within sections use uniform heights
- **Image Sizes**: Consistent dimensions with `object-cover`
- **Hero Sections**: Full-width backgrounds with dark overlays
- **Responsive Design**: Mobile-first approach

## 📁 Asset Management

### Images
- **Projects**: 300x200px minimum, stored in `public/assets/images/projects/`
- **Publications**: 80x80px thumbnails, stored in `public/assets/images/publications/`
- **Team Photos**: Square format, stored in `public/assets/images/team/`
- **Blog Images**: 400x250px, stored in `public/assets/images/blog/`

### Fonts
Custom fonts stored in `public/assets/fonts/`:
- Nunito (variable weight)
- Material Design Icons
- Additional typography fonts

## 🔧 Configuration

### Key Configuration Files
- `config/app.php` - Application settings
- `vite.config.js` - Asset compilation
- `tailwind.config.js` - Tailwind CSS configuration
- `composer.json` - PHP dependencies and scripts
- `package.json` - Node.js dependencies and build scripts

### Environment Variables
```env
APP_NAME="Empathic Computing Research Lab"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecl_database

# Mail configuration (for contact forms)
MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
```

## 📚 Documentation

Additional documentation available in the `/docs` folder:
- `DEVELOPMENT.md` - Development guidelines
- `ASSETS.md` - Asset management guide
- `STYLING.md` - Design system documentation
- `TEMPLATES.md` - Template usage guide
- `GIT-WORKFLOW.md` - Git workflow and contribution guidelines

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

### Code Style
- Follow Laravel coding standards
- Use PHP-CS-Fixer for code formatting
- Follow established component patterns
- Maintain consistent naming conventions

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🆘 Support

For support and questions:
- **Issues**: [GitHub Issues](https://github.com/xempie/ecl/issues)
- **Documentation**: Check `/docs` folder
- **Email**: Contact the development team

## 🏛️ About Empathic Computing Research Lab

The Empathic Computing Research Lab is dedicated to advancing the field of emotionally intelligent computing systems. Our research focuses on:

- **Artificial Intelligence**: Emotion recognition and empathetic AI systems
- **Augmented Reality**: Emotion-aware AR applications
- **Virtual Reality**: Immersive empathetic experiences
- **Human-Computer Interaction**: Emotion-driven interface design

Visit our website: [empathiccomputing.org](https://empathiccomputing.org)

---

**Built with ❤️ by the Empathic Computing Research Lab team**