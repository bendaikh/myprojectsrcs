# RCS - Project Tracking System

## What's New

I've created an attractive login system that showcases project tracking and progress features. When you run the app, it will automatically redirect to the login page.

## Features

### Login Page
- **Attractive Design**: Modern gradient backgrounds with smooth animations
- **Project Progress Showcase**: Left side displays sample projects with progress bars, team avatars, and statistics
- **Responsive Design**: Works beautifully on mobile and desktop
- **Animations**: Smooth fade-in and slide-in effects for visual appeal
- **Dark Mode Support**: Automatically adapts to your system theme

### What's Displayed on Login Page
1. **Project Cards**: Shows 3 sample projects with:
   - Project names and teams
   - Progress bars with percentages
   - Team member avatars
   - Color-coded by project type

2. **Statistics**: Displays:
   - 24 Active Projects
   - 156 Completed Tasks
   - 12 Team Members

3. **Mobile-Friendly**: On mobile devices, shows a condensed version of project previews

## Setup Instructions

### 1. Install Dependencies
```bash
npm install
composer install
```

### 2. Setup Database
Make sure your `.env` file has the correct database settings:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rcs
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Run Migrations
```bash
php artisan migrate
```

### 4. Build Assets
```bash
npm run build
```
Or for development with hot reload:
```bash
npm run dev
```

### 5. Start the Server
```bash
php artisan serve
```

## Access the Application

Open your browser and navigate to: `http://localhost:8000`

The app will automatically redirect you to the login page.

## Creating a Test User

You can register a new account directly from the login page, or create one via Tinker:

```bash
php artisan tinker
```

Then:
```php
User::create([
    'name' => 'Test User',
    'email' => 'test@example.com',
    'password' => bcrypt('password123')
]);
```

## Routes Available

- `/` - Redirects to login
- `/login` - Login page (with project showcase)
- `/register` - Registration page
- `/dashboard` - Dashboard (requires authentication)
- `/logout` - Logout (POST request)

## Design Highlights

### Login Page Features:
- **Gradient Background**: Subtle blue gradient creates a professional look
- **Project Cards**: Animated cards showing real-world project examples
- **Progress Bars**: Visual representation of project completion
- **Team Avatars**: Colorful avatar indicators for team members
- **Statistics**: Eye-catching stat cards with bold numbers
- **Form Design**: Clean, modern form with focus states and hover effects
- **Error Handling**: Beautiful error messages with icons
- **Remember Me**: Checkbox for persistent login
- **Password Recovery**: Link to password reset (can be implemented)
- **Register Link**: Easy navigation to registration

### Color Scheme:
- **Primary**: Blue gradient (from-blue-500 to-blue-600)
- **Secondary**: Purple gradient (from-purple-500 to-purple-600)
- **Accent Colors**: Emerald, Amber, Rose for project differentiation
- **Background**: Light slate with blue tint
- **Dark Mode**: Deep slate backgrounds with proper contrast

## Technology Stack

- **Laravel 12**: Backend framework
- **Tailwind CSS v4**: Styling with utility classes
- **Vite**: Asset bundling and hot reload
- **Inter Font**: Modern, readable typography
- **Custom CSS Animations**: Smooth transitions and effects

## Next Steps

You can customize:
1. The project examples shown on the login page
2. The statistics displayed
3. Color schemes to match your brand
4. Add more authentication features (password reset, email verification, etc.)
5. Connect the dashboard to real project data

Enjoy your new attractive login page! 🚀
