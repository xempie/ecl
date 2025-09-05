# Empathic Computing Lab Admin Panel

A comprehensive admin panel for managing the Empathic Computing Research Lab website. Built with Laravel and styled with the Techwind admin template.

## Overview

This admin panel provides complete management capabilities for:
- **Team Members** - Lab researchers, faculty, and staff
- **Publications** - Research papers, journals, and publications
- **Research Projects** - Active and completed research projects
- **News & Events** - Lab announcements and events
- **Contact Management** - Website inquiries and messages
- **Website Settings** - General site configuration
- **User Management** - Admin users and permissions

## Features

### Dashboard
- Lab statistics overview (members, publications, projects, messages)
- Recent activities feed
- Quick action buttons for common tasks
- Recent publications and active projects widgets

### Team Management
- Add/edit/delete lab members
- Manage roles and positions
- Member profiles with photos and biographies

### Publications Management
- Add/edit/delete research publications
- Categorize publications by type
- Import/export publication data

### Research Projects
- Manage active and completed projects
- Track project progress and milestones
- Organize by research areas (AI, AR, VR, HCI)

### News & Events
- Create and manage news articles
- Event calendar and management
- Featured content management

### Contact Management
- Review and respond to contact form submissions
- Manage contact information and settings

### Website Settings
- General site configuration
- Homepage content management
- About page settings
- Social media links

### User Management
- Admin user accounts
- Role-based access control
- Permission management

## Installation & Setup

1. **Navigate to the admin directory:**
   ```bash
   cd labadmin
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database setup:**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

5. **Build assets:**
   ```bash
   npm run build
   ```

6. **Start development server:**
   ```bash
   php artisan serve
   ```

## File Structure

```
labadmin/
├── app/
│   ├── Http/Controllers/     # Admin controllers
│   └── Models/              # Data models
├── resources/views/
│   ├── includes/
│   │   ├── Dashboard/       # Dashboard widgets
│   │   ├── navbar.blade.php # Top navigation
│   │   └── sidebar.blade.php # Sidebar menu
│   ├── layouts/
│   │   └── main.blade.php   # Main layout template
│   └── *.blade.php         # Page templates
├── routes/
│   └── web.php             # Admin routes
└── public/assets/          # Admin panel assets
```

## Menu Structure

The admin panel includes the following main sections:

- **Dashboard** - Overview and statistics
- **Team Management** - Lab members and roles
- **Publications** - Research publications management
- **Research Projects** - Project management and tracking
- **News & Events** - Content management
- **Contact Management** - Inquiry management
- **Website Settings** - Site configuration
- **User Management** - Admin users and permissions
- **Authentication** - Login/logout functionality

## Dashboard Widgets

### Lab Statistics Cards
- Team Members count with monthly growth
- Publications count with quarterly additions
- Active Projects with new project indicators
- Research Areas overview
- Unread Contact Messages

### Recent Activities
- Real-time feed of recent actions
- Member additions, publication updates, project milestones
- News posts and contact messages

### Quick Actions
- Add new members, publications, projects, news
- Access contact messages
- Website settings shortcut

### Recent Publications & Active Projects
- Latest published research
- Project progress tracking
- Status indicators and completion percentages

## Development Notes

- Based on Laravel framework
- Uses Techwind admin template design
- Responsive design for mobile/tablet/desktop
- Dark mode support included
- Unicons icon library for consistent iconography
- Tailwind CSS for styling

## Next Steps

1. **Database Structure** - Design and implement database schemas for all entities
2. **Controllers** - Implement CRUD operations for each module
3. **Models** - Create Eloquent models with relationships
4. **Forms** - Build data entry forms with validation
5. **Authentication** - Implement admin user authentication
6. **Permissions** - Role-based access control
7. **API Integration** - Connect with main website data
8. **File Uploads** - Image and document management
9. **Search & Filters** - Advanced search functionality
10. **Reports** - Analytics and reporting features

## Support

For questions or issues with the admin panel, please refer to:
- Laravel Documentation: https://laravel.com/docs
- Main project repository
- Lab administrator